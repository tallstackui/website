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
            ->form('error')
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
            ->form('hint')
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
            ->form('label')
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

    public function floating(): View
    {
        $personalization = <<<'HTML'
        TallStackUi::personalize()
            ->floating()
            ->block('block', 'classes');
        HTML;

        return view('documentation.internal.floating', [
            'personalization' => $personalization,
        ]);
    }
}
