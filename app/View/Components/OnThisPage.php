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
        $index = str_replace('/', '.', request()->route()->uri());
        $file = json_decode(file_get_contents(base_path('contents/on-this-page.json')), true);
        $content = $file[$index] ?? [];

        if (empty($content)) {
            return;
        }

        // If the first key is numeric, we know it's a flat array
        // For pages like /docs/ui/alert that doesn't contain any category.
        if (is_numeric(array_keys($content)[0])) {
            $this->contents = $this->flat($content);

            return;
        }

        // Otherwise, it's a nested array, for pages like /docs/ui/button
        // that contains button types like categories.
        $this->contents = $this->nested($content);
    }

    private function flat(array $content): array
    {
        return collect($content)->mapWithKeys(function (string $item, int $key) {
            return $this->map($item, $key);
        })->toArray();
    }

    private function nested(array $content): array
    {
        return collect($content)->mapWithKeys(function (array $structure, string $parent) {
            return [
                $parent => collect($structure['contents'])->mapWithKeys(function (string $item, int $child) use ($parent, $structure) {
                    return $this->map($item, $child, $parent, $structure);
                }),
            ];
        })->toArray();
    }

    private function map(string $item, int $child, string $parent = null, array $structure = null): array
    {
        $data = [
            $child => [
                'title' => $item,
                'anchor' => str($item)->lower()->slug()->value(),
            ],
        ];

        // If is a nested array and has prefix, we add the prefix using the parent name
        // For situations like the button page, that contains two types of buttons.
        if ($parent && data_get($structure, 'prefix') === true) {
            $data[$child]['prefix'] = str($parent)->lower()->append('-')->value();
        }

        return $data;
    }
}
