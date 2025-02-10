<?php

namespace App\View\Components;

use App\Traits\VersionDiscovery;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\View\Component;

class OnThisPage extends Component
{
    use VersionDiscovery;

    public function __construct(public ?array $contents = [], public ?bool $mobile = false)
    {
        $this->contents();
    }

    public function render(): View
    {
        return view('components.on-this-page');
    }

    private function contents(): void
    {
        // We start by getting the current URI and turning / into . to turn things like /docs/ui/button into docs.ui.button
        // Then we remove all versions of the URI to get the current page, like docs.ui.button instead of docs.v1.ui.button
        $index = str(request()->fullUrl())
            ->remove(config('app.url'))
            ->replace('/', '.')
            ->replaceFirst('.', '')
            ->remove(collect($this->versions())->map(fn (string $version) => "{$version}.")->toArray())
            ->value();

        $file = File::json(base_path(sprintf('contents/on-this-page/%s.json', $this->current())));

        $content = $file[$index] ?? [];

        if (empty($content)) {
            return;
        }

        // If the first key is numeric, we know it's a flat array, for
        // pages like /docs/ui/alert that doesn't contain any category.
        if (is_numeric(array_keys($content)[0])) {
            $this->contents = collect($content)->mapWithKeys(fn (string $item, int $key) => $this->map($item, $key))->toArray();

            return;
        }

        // Otherwise, it's a nested array, for pages like /docs/ui/button
        // that contains button types like categories, separator.
        $this->contents = collect($content)->mapWithKeys(fn (array $structure, string $parent) => [
            $parent => collect($structure['contents'])->mapWithKeys(fn (string $item, int $child) => $this->map($item, $child, $parent, $structure)),
        ])->toArray();
    }

    private function map(string $item, int $child, ?string $parent = null, ?array $structure = null): array
    {
        $data = [
            $child => [
                'title' => $item,
                'anchor' => str($item)->lower()->slug()->value(),
            ],
        ];

        // If is a nested array and has prefix, we add the prefix using the parent name
        // For situations like the button page, that contains two types of buttons.
        if ($parent && (isset($structure) && $structure['prefix'] === true)) {
            $data[$child]['prefix'] = str($parent)->lower()
                ->replace(' ', '-')
                ->append('-')
                ->value();
        }

        return $data;
    }
}
