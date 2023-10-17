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
        $personalizationInput = <<<'HTML'
        TallStackUi::personalize()
            ->wrapper('input')
            ->block('block', 'classes');
        HTML;

        $personalizationRadio = <<<'HTML'
        TallStackUi::personalize()
            ->wrapper('radio')
            ->block('block', 'classes');
        HTML;

        $personalizationSelect = <<<'HTML'
        TallStackUi::personalize()
            ->wrapper('select')
            ->block('block', 'classes');
        HTML;

        return view('documentation.internal.wrapper', [
            'personalizationInput' => $personalizationInput,
            'personalizationRadio' => $personalizationRadio,
            'personalizationSelect' => $personalizationSelect,
        ]);
    }
}
