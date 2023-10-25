<?php

namespace App\Http\Controllers\Documentation;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class Internal extends Controller
{
    // It actually is related with `error` component.
    public function index(): View
    {
        $personalization = <<<'HTML'
        TallStackUi::personalize()
            ->error()
            ->block('block', 'classes');
        HTML;

        return view('documentation.internal.error', [
            'personalization' => $personalization,
        ]);
    }

    public function hint(): View
    {
        $personalization = <<<'HTML'
        TallStackUi::personalize()
            ->hint()
            ->block('block', 'classes');
        HTML;

        return view('documentation.internal.hint', [
            'personalization' => $personalization,
        ]);
    }

    public function label(): View
    {
        $personalization = <<<'HTML'
        TallStackUi::personalize()
            ->label()
            ->block('block', 'classes');
        HTML;

        return view('documentation.internal.label', [
            'personalization' => $personalization,
        ]);
    }

    public function wrapper(): View
    {
        $personalization['input'] = <<<'HTML'
        TallStackUi::personalize()
            ->wrapper('input')
            ->block('block', 'classes');
        HTML;

        $personalization['radio'] = <<<'HTML'
        TallStackUi::personalize()
            ->wrapper('radio')
            ->block('block', 'classes');
        HTML;

        return view('documentation.internal.wrapper', [
            'personalization' => $personalization,
        ]);
    }
}
