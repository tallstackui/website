<?php

namespace App\Http\Controllers;

use App\Enums\Example;
use App\Traits\VersionDiscovery;
use Illuminate\Contracts\View\View as ViewContract;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View as ViewFacade;
use Symfony\Component\Yaml\Yaml;

class PageController
{
    use VersionDiscovery;

    /**
     * Bypass to the examples.
     */
    protected const EXAMPLES = [
        'Integrations\Alpine' => 'Alpine',
    ];

    public function __invoke(Request $request, string $version, ?string $main = null, ?string $children = null): ViewContract|RedirectResponse
    {
        $view = 'documentation.'.$version;

        if ($main) {
            $view .= '.'.$main;
        }

        if ($children) {
            $view .= '.'.$children;
        }

        if (! in_array($version, $this->versions())) {
            return redirect()->route('documentation', ['v2', 'installation']);
        }

        if (! ViewFacade::exists($view)) {
            abort(404, headers: [
                'Refresh' => '3;url='.route('documentation', ['v2', 'installation']),
            ]);
        }

        $example = str($view)->remove(["documentation.$version.", ...$this->versions()])
            ->explode('.')
            ->map(fn ($item) => str($item)
                ->replace('-', ' ')
                ->title()
                ->replace(' ', '')
                ->value())
            ->join('\\');

        if (array_key_exists($example, self::EXAMPLES)) {
            $example = self::EXAMPLES[$example];
        }

        if ($view === 'documentation.v2.ui.avatar') {
            auth()->loginUsingId(1);
        }

        return view($view, [
            'content' => $this->right($version, $main, $children),
            'tailwindcss' => (bool) $request->cookie('tailwindcss'),
            ...Example::tryFrom($example)?->variables() ?? [],
        ]);
    }

    /**
     * Build the "ON THIS PAGE" contents.
     */
    private function right(string $version, ?string $main = null, ?string $children = null): array
    {
        $yaml = Yaml::parseFile(base_path("contents/$version.yaml"));

        return $children ? $yaml[$main][$children] ?? [] : ($main ? $yaml[$main] ?? [] : []);
    }
}
