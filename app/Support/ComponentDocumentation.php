<?php

namespace App\Support;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use ReflectionClass;
use TallStackUi\Attributes\SoftCustomization;
use TallStackUi\Support\Miscellaneous\ReflectComponent;
use Throwable;

use function __ts_soft_customization_components;

class ComponentDocumentation
{
    /**
     * Base path to the AI-generated documentation.
     */
    private string $base;

    /**
     * Collection of parsed component data.
     */
    private ?Collection $components = null;

    public function __construct()
    {
        $this->base = base_path('vendor/tallstackui/tallstackui/.ai');
    }

    /** List all documents grouped by category with one-line summaries, optionally filtered. */
    public function list(?string $category = null): Collection
    {
        $documents = $this->documents();

        if ($category) {
            $documents = $documents->filter(
                fn (array $item): bool => Str::contains($item['category'], $category, ignoreCase: true)
            );
        }

        return $documents
            ->map(fn (array $item): array => [...$item, 'summary' => $this->summary($item['file'])])
            ->groupBy('category');
    }

    /** Retrieve a single document by name (exact → partial → filename match), optionally scoped to a section. */
    public function get(string $identifier, ?string $section = null): ?array
    {
        $documents = $this->documents();

        $match = $documents->first(fn (array $item): bool => Str::lower($item['name']) === Str::lower($identifier))
            ?? $documents->first(fn (array $item): bool => Str::contains($item['name'], $identifier, ignoreCase: true))
            ?? $documents->first(fn (array $item): bool => Str::contains($item['file'], Str::lower($identifier)));

        if (! $match) {
            return null;
        }

        $content = $this->raw($match['file']);

        if ($content === null) {
            return null;
        }

        return [
            'name' => $match['name'],
            'category' => $match['category'],
            'livewire_only' => $match['livewire_only'],
            'content' => $content,
            'sections' => $this->sections($content),
            'section' => $section ? $this->section($content, $section) : null,
        ];
    }

    /** Closest document names for a given identifier, used for "did you mean" hints. */
    public function suggestions(string $identifier, int $limit = 3): Collection
    {
        $needle = Str::lower($identifier);

        return $this->documents()
            ->map(fn (array $item): array => [
                'name' => $item['name'],
                'distance' => levenshtein($needle, Str::lower($item['name'])),
            ])
            ->sortBy('distance')
            ->take($limit)
            ->pluck('name')
            ->values();
    }

    /** Multi-term search across all documents, returning heading-labelled excerpts. */
    public function search(string $query, int $maxResults = 10): Collection
    {
        $terms = collect(preg_split('/\s+/', trim($query)) ?: [])
            ->filter(fn (string $term): bool => mb_strlen($term) >= 2)
            ->map(fn (string $term): string => Str::lower($term))
            ->unique()
            ->values();

        if ($terms->isEmpty()) {
            return collect();
        }

        $documents = $this->documents()
            ->map(function (array $document): ?array {
                $content = $this->raw($document['file']);

                return $content === null ? null : [...$document, 'content' => $content];
            })
            ->filter()
            ->values();

        // Prefer documents containing every term, falling back to any term.
        $matching = $documents->filter(fn (array $document): bool => $terms->every(
            fn (string $term): bool => Str::contains($document['content'], $term, ignoreCase: true)
        ));

        if ($matching->isEmpty()) {
            $matching = $documents->filter(fn (array $document): bool => $terms->contains(
                fn (string $term): bool => Str::contains($document['content'], $term, ignoreCase: true)
            ));
        }

        return $matching
            ->map(function (array $document) use ($terms): array {
                [$score, $excerpts] = $this->excerpts($document['content'], $terms);

                return [
                    'name' => $document['name'],
                    'category' => $document['category'],
                    'match_count' => $score,
                    'excerpts' => $excerpts,
                ];
            })
            ->sortByDesc('match_count')
            ->take($maxResults)
            ->values();
    }

    /** Search within "Soft Customization" sections for override blocks and code snippets. */
    public function customization(?string $component = null, ?string $query = null): Collection
    {
        $components = $this->parse();
        $results = collect();

        if ($component) {
            $components = $components->filter(fn (array $item): bool => Str::contains($item['name'], $component, ignoreCase: true));
        }

        foreach ($components as $comp) {
            $content = $this->raw($comp['file']);

            if ($content === null) {
                continue;
            }

            $section = $this->extract($content);

            if (! $section) {
                continue;
            }

            if ($query && stripos($section, $query) === false) {
                continue;
            }

            $results->push([
                'name' => $comp['name'],
                'category' => $comp['category'],
                'customization' => $section,
            ]);
        }

        return $results->values();
    }

    /** Search for CSS classes across all component customization() methods. */
    public function classes(string $query, ?string $component = null): Collection
    {
        $matches = collect();

        foreach (__ts_soft_customization_components() as $class) {
            $reflect = new ReflectComponent($class);

            /** @var SoftCustomization $attribute */
            $attribute = $reflect->attribute(SoftCustomization::class)->newInstance();
            $key = $attribute->key;
            $name = Str::of($key)->replace('.', ' ')->title()->toString();

            if ($component && ! Str::contains($name, $component, ignoreCase: true) && ! Str::contains($key, $component, ignoreCase: true)) {
                continue;
            }

            foreach ($this->blocks($class) as $block => $classes) {
                if (! is_string($classes) || ! Str::contains($classes, $query, ignoreCase: true)) {
                    continue;
                }

                $matches->push([
                    'component' => $name,
                    'key' => $key,
                    'block' => $block,
                    'classes' => $classes,
                ]);
            }
        }

        return $matches;
    }

    /** Raw Markdown contents of a documentation file. */
    public function raw(string $file): ?string
    {
        $path = $this->base.'/'.$file;

        return file_exists($path) ? file_get_contents($path) : null;
    }

    /**
     * Customization blocks of a component, tolerating constructors the container cannot resolve.
     *
     * @param  class-string  $class
     * @return array<string, mixed>
     */
    private function blocks(string $class): array
    {
        try {
            return app($class)->customization();
        } catch (Throwable) {
            //
        }

        // customization() returns a literal array, so constructor state is not required.
        try {
            return (new ReflectionClass($class))->newInstanceWithoutConstructor()->customization();
        } catch (Throwable) {
            return [];
        }
    }

    /** Components plus supplementary guides, used for listing, lookups, and search. */
    private function documents(): Collection
    {
        return $this->parse()->concat($this->guides());
    }

    /** Supplementary guide documents living outside the component index. */
    private function guides(): Collection
    {
        return collect([
            [
                'name' => 'Soft Customization Internal Scopes',
                'file' => 'soft-customization-internal-scopes.md',
                'category' => 'Guides',
                'livewire_only' => false,
            ],
        ])->filter(fn (array $guide): bool => file_exists($this->base.'/'.$guide['file']))->values();
    }

    /** Parse index.md to extract component names, categories, and file paths. */
    private function parse(): Collection
    {
        if ($this->components !== null) {
            return $this->components;
        }

        $content = $this->raw('index.md');

        if ($content === null) {
            return $this->components = collect();
        }

        $lines = explode("\n", $content);
        $current = '';
        $components = [];

        foreach ($lines as $line) {
            if (preg_match('/^### (.+)$/', $line, $matches)) {
                $current = trim($matches[1]);

                continue;
            }

            if (preg_match('/^- \[(.+?)]\((.+?)\)(\s*\*\((.+?)\)\*)?/', $line, $matches)) {
                $components[] = [
                    'name' => $matches[1],
                    'file' => $matches[2],
                    'category' => $current,
                    'livewire_only' => isset($matches[4]) && Str::contains($matches[4], 'Livewire'),
                ];
            }
        }

        return $this->components = collect($components);
    }

    /** First descriptive paragraph of a document, used as a one-line summary. */
    private function summary(string $file): ?string
    {
        $content = $this->raw($file);

        if ($content === null) {
            return null;
        }

        foreach (explode("\n", $content) as $line) {
            $line = trim($line);

            if ($line === '' || str_starts_with($line, '#') || str_starts_with($line, '>')) {
                continue;
            }

            // Documents without an intro paragraph start straight into code or tables.
            if (str_starts_with($line, '```') || str_starts_with($line, '|')) {
                return null;
            }

            return Str::limit($line, 180);
        }

        return null;
    }

    /**
     * Top-level section headings of a document.
     *
     * @return list<string>
     */
    private function sections(string $content): array
    {
        preg_match_all('/^## (.+)$/m', $content, $matches);

        return array_values(array_map(trim(...), $matches[1]));
    }

    /**
     * Extract a single section by heading (case-insensitive partial match).
     *
     * @return array{heading: string, content: string}|null
     */
    private function section(string $content, string $name): ?array
    {
        foreach ($this->sections($content) as $heading) {
            if (! Str::contains($heading, $name, ignoreCase: true)) {
                continue;
            }

            $position = strpos($content, "\n## {$heading}");

            if ($position === false) {
                continue;
            }

            $slice = substr($content, $position + 1);
            $next = strpos($slice, "\n## ", strlen("## {$heading}"));

            return [
                'heading' => $heading,
                'content' => trim($next === false ? $slice : substr($slice, 0, $next)),
            ];
        }

        return null;
    }

    /**
     * Score a document against the search terms and collect heading-labelled excerpts.
     *
     * @param  Collection<int, string>  $terms
     * @return array{int, list<array{section: string, text: string}>}
     */
    private function excerpts(string $content, Collection $terms): array
    {
        $lines = explode("\n", $content);
        $section = 'Introduction';
        $score = 0;
        $excerpts = [];

        foreach ($lines as $index => $line) {
            if (preg_match('/^#{2,3}\s+(.+)$/', $line, $matches)) {
                $section = trim($matches[1]);
            }

            $lower = Str::lower($line);
            $matched = false;

            foreach ($terms as $term) {
                $occurrences = substr_count($lower, $term);

                if ($occurrences === 0) {
                    continue;
                }

                $matched = true;

                // Heading matches indicate the document is about the term.
                $score += str_starts_with($line, '#') ? $occurrences * 3 : $occurrences;
            }

            if ($matched && count($excerpts) < 3) {
                $start = max(0, $index - 1);
                $end = min(count($lines) - 1, $index + 1);

                $excerpts[] = [
                    'section' => $section,
                    'text' => implode("\n", array_slice($lines, $start, $end - $start + 1)),
                ];
            }
        }

        return [$score, $excerpts];
    }

    /** Extract the "Soft Customization" section from a component's Markdown. */
    private function extract(string $content): ?string
    {
        $marker = '## Soft Customization';
        $position = strpos($content, $marker);

        if ($position === false) {
            return null;
        }

        $section = substr($content, $position);
        $nextSection = strpos($section, "\n## ", strlen($marker));

        if ($nextSection !== false) {
            $section = substr($section, 0, $nextSection);
        }

        return trim($section);
    }
}
