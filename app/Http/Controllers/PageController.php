<?php

namespace App\Http\Controllers;

use App\Enums\Example;
use App\Traits\VersionDiscovery;
use Illuminate\Contracts\View\View as ViewContract;
use Illuminate\Support\Facades\View as ViewFacade;
use Symfony\Component\Yaml\Yaml;

class PageController
{
    use VersionDiscovery;

    protected const BYPASS = [
        'Integrations\Alpine' => 'Alpine',
    ];

    public function __invoke(string $version, ?string $main = null, ?string $children = null): ViewContract
    {
        $view = 'documentation.'.$version;

        if ($main) {
            $view .= '.'.$main;
        }

        if ($children) {
            $view .= '.'.$children;
        }

        if (! ViewFacade::exists($view)) {
            abort(404);
        }

        $example = str($view)->remove(["documentation.$version.", ...$this->versions()])
            ->explode('.')
            ->map(fn ($item) => str($item)
                ->replace('-', ' ')
                ->title()
                ->replace(' ', '')
                ->value())
            ->join('\\');

        if (array_key_exists($example, self::BYPASS)) {
            $example = self::BYPASS[$example];
        }

        $yaml = Yaml::parseFile(base_path("contents/$version.yaml"));
        $content = $yaml[$main][$children] ?? $yaml[$main] ?? [];

        return view($view, ['content' => $content, ...Example::tryFrom($example)?->variables() ?? []]);
    }
}
