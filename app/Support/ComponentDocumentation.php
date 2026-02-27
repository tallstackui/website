<?php

namespace App\Support;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use TallStackUi\Attributes\SoftCustomization;
use TallStackUi\Support\Miscellaneous\ReflectComponent;

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

    /** List all components grouped by category, optionally filtered. */
    public function list(?string $category = null): Collection
    {
        $components = $this->parse();

        if ($category) {
            $components = $components->filter(
                fn (array $item): bool => Str::contains($item['category'], $category, ignoreCase: true)
            );
        }

        return $components->groupBy('category');
    }

    /** Retrieve a single component's full Markdown by name (exact → partial → filename match). */
    public function get(string $identifier): ?array
    {
        $components = $this->parse();

        $match = $components->first(fn (array $item): bool => Str::lower($item['name']) === Str::lower($identifier))
            ?? $components->first(fn (array $item): bool => Str::contains($item['name'], $identifier, ignoreCase: true))
            ?? $components->first(fn (array $item): bool => Str::contains($item['file'], Str::lower($identifier)));

        if (! $match) {
            return null;
        }

        $path = $this->base.'/'.$match['file'];

        if (! file_exists($path)) {
            return null;
        }

        return [
            'name' => $match['name'],
            'category' => $match['category'],
            'livewire_only' => $match['livewire_only'],
            'content' => file_get_contents($path),
        ];
    }

    /** Full-text search across all component files, returning contextual excerpts. */
    public function search(string $query, int $maxResults = 10): Collection
    {
        $components = $this->parse();
        $results = collect();

        foreach ($components as $component) {
            $path = $this->base.'/'.$component['file'];

            if (! file_exists($path)) {
                continue;
            }

            $content = file_get_contents($path);
            $lines = explode("\n", $content);
            $count = 0;
            $excerpts = [];

            foreach ($lines as $index => $line) {
                if (stripos($line, $query) === false) {
                    continue;
                }

                $count++;

                if (count($excerpts) < 3) {
                    $start = max(0, $index - 1);
                    $end = min(count($lines) - 1, $index + 1);
                    $excerpts[] = implode("\n", array_slice($lines, $start, $end - $start + 1));
                }
            }

            if ($count > 0) {
                $results->push([
                    'name' => $component['name'],
                    'category' => $component['category'],
                    'match_count' => $count,
                    'excerpts' => $excerpts,
                ]);
            }
        }

        return $results->sortByDesc('match_count')->take($maxResults)->values();
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
            $path = $this->base.'/'.$comp['file'];

            if (! file_exists($path)) {
                continue;
            }

            $content = file_get_contents($path);
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

            $blocks = app($class)->customization();

            foreach ($blocks as $block => $classes) {
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

    /** Parse index.md to extract component names, categories, and file paths. */
    private function parse(): Collection
    {
        if ($this->components !== null) {
            return $this->components;
        }

        $path = $this->base.'/index.md';

        if (! file_exists($path)) {
            return $this->components = collect();
        }

        $content = file_get_contents($path);
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
