<?php

declare(strict_types=1);

namespace App\Support;

use Illuminate\Support\Str;
use Illuminate\Support\Collection;

class InternalScopes
{
    private string $path;

    private ?Collection $sections = null;

    public function __construct()
    {
        $this->path = base_path('vendor/tallstackui/tallstackui/.ai/soft-customization-internal-scopes.md');
    }

    /**
     * Sections grouped into the 3 buckets rendered on the soft customization page.
     *
     * @return Collection<string, Collection<int, array{parent: string, label: string, rows: list<array{child: string, scope: string}>}>>
     */
    public function categorized(): Collection
    {
        $sections = $this->parse();

        return collect([
            'wrapper' => $sections->filter(fn (array $section): bool => str_starts_with($section['parent'], 'wrapper/'))->values(),
            'form'    => $sections->filter(fn (array $section): bool => str_starts_with($section['parent'], 'form/'))->values(),
            'ui'      => $sections->reject(fn (array $section): bool => str_starts_with($section['parent'], 'wrapper/') || str_starts_with($section['parent'], 'form/'))->values(),
        ]);
    }

    private function parse(): Collection
    {
        if ($this->sections !== null) {
            return $this->sections;
        }

        if (! file_exists($this->path)) {
            return $this->sections = collect();
        }

        $sections = collect();
        $blocks   = preg_split('/^### /m', file_get_contents($this->path));

        foreach ($blocks as $block) {
            if (! preg_match('/^`([^`]+)`/', $block, $matches)) {
                continue;
            }

            $parent = $matches[1];
            $rows   = [];

            foreach (explode("\n", $block) as $line) {
                if (! preg_match('/^\|\s*`([^`]+)`\s*\|\s*`([^`]+)`/', $line, $cells)) {
                    continue;
                }

                $rows[] = [
                    'scope' => $cells[1],
                    'child' => $this->child($cells[2]),
                ];
            }

            if ($rows === []) {
                continue;
            }

            $sections->push([
                'parent' => $parent,
                'label'  => $this->label($parent),
                'rows'   => $rows,
            ]);
        }

        return $this->sections = $sections;
    }

    private function child(string $target): string
    {
        return preg_match('/<x-([^\s\/]+)\s*\/?>/', $target, $matches) ? $matches[1] : $target;
    }

    private function label(string $parent): string
    {
        if (str_starts_with($parent, 'wrapper/')) {
            return str_replace('/', '.', $parent);
        }

        $segments = explode('/', $parent);

        if (in_array($segments[0], ['form', 'layout'], true)) {
            array_shift($segments);
        }

        return collect($segments)
            ->map(fn (string $segment): string => Str::of($segment)->replace('-', ' ')->title()->toString())
            ->join(' ');
    }
}
