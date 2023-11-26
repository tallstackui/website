<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class OnThisPage extends Component
{
    public function __construct(public ?array $contents = [])
    {
        $this->contents();
    }

    public function render(): View
    {
        return view('components.on-this-page');
    }

    private function contents(): void
    {
        $route = str_replace('/', '.', request()->route()->uri());
        $file = json_decode(file_get_contents(base_path('contents/on-this-page.json')), true);
        $index = $file[$route] ?? [];

        // If the index is empty, the page doesn't have an `on this page` section.
        if (!$index) {
            return;
        }

        // If the index is numeric, we assume it's a flat array.
        if (is_numeric(array_keys($index)[0])) {
            $this->contents = collect($index)
                ->mapWithKeys(fn (string $item, int $key) => $this->map($item, $key))
                ->toArray();

            return;
        }

        // Otherwise, we assume it's a nested array (parent => child).
        $this->contents = collect($index)
            ->mapWithKeys(function ($item, $key) {
                return [
                    $key => collect($item)->mapWithKeys(fn (string $item, int $key) => $this->map($item, $key)),
                ];
            })
            ->toArray();
    }

    private function map(string $item, int $key): array
    {
        return [
            $key => [
                'title' => $item,
                'anchor' => str($item)->lower()
                    ->slug()
                    ->value(),
            ],
        ];
    }
}
