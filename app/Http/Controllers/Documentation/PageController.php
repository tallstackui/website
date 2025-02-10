<?php

namespace App\Http\Controllers\Documentation;

use App\Enums\Example;
use App\Traits\VersionDiscovery;
use Illuminate\Support\Facades\View;

class PageController
{
    use VersionDiscovery;

    public function __invoke(string $version, ?string $main = null, ?string $children = null)
    {
        $view = 'documentation.'.$version;

        if ($main) {
            $view .= '.' . $main;
        }

        if ($children) {
            $view .= '.' . $children;
        }

        if (! View::exists($view)) {
            abort(404);
        }

        $example = str($view)->remove(["documentation.$version.", ...$this->versions()])
            ->explode('.')
            ->map(fn ($item) => str($item)->remove('-')->title()->value())
            ->join('\\');

        dd($example, Example::tryFrom($example));

        return view($view, Example::tryFrom($example)?->variables());
    }
}
