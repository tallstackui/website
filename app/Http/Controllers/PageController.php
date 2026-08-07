<?php

namespace App\Http\Controllers;

use App\Enums\Example;
use Illuminate\Contracts\View\View as ViewContract;
use Illuminate\Support\Facades\View as ViewFacade;
use Symfony\Component\Yaml\Yaml;

class PageController
{
    /** Bypass to the examples */
    protected const array EXAMPLES = [
        'Integrations\Alpine' => 'Alpine',
        'StarterKit' => 'StarterKit',
        'Ui\List' => 'Ui\ListComponent',
    ];

    public function __invoke(?string $main = null, ?string $children = null): ViewContract
    {
        $view = collect(['documentation', $main, $children])->filter()->join('.');

        if (! ViewFacade::exists($view)) {
            abort(404, headers: [
                'Refresh' => '3;url='.route('documentation', ['installation']),
            ]);
        }

        $example = str($view)->remove('documentation.')
            ->explode('.')
            ->map(fn (string $item): string => str($item)
                ->replace('-', ' ')
                ->title()
                ->replace(' ', '')
                ->value())
            ->join('\\');

        if (array_key_exists($example, self::EXAMPLES)) {
            $example = self::EXAMPLES[$example];
        }

        if (str_contains($view, 'ui.avatar')) {
            auth()->loginUsingId(1);
        }

        return view($view, [
            'content' => $this->right($main, $children),
            ...Example::tryFrom($example)?->variables() ?? [],
        ]);
    }

    /**
     * Build the "ON THIS PAGE" contents.
     */
    private function right(?string $main = null, ?string $children = null): array
    {
        $yaml = Yaml::parseFile(base_path('contents.yaml'));

        return $children ? $yaml[$main][$children] ?? [] : ($main ? $yaml[$main] ?? [] : []);
    }
}
