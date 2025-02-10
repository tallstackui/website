<?php

namespace App\Http\Controllers;

use App\Enums\Example;
use App\Traits\VersionDiscovery;
use Illuminate\Contracts\View\View as ViewContract;
use Illuminate\Support\Facades\View as ViewFacade;

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
                // component-prefix => component prefix
                ->replace('-', ' ')
                // component prefix => Component Prefix
                ->title()
                // Component Prefix => ComponentPrefix
                ->replace(' ', '')
                ->value())
            ->join('\\');

        if (array_key_exists($example, self::BYPASS)) {
            $example = self::BYPASS[$example];
        }

        return view($view, Example::tryFrom($example)?->variables() ?? []);
    }
}
