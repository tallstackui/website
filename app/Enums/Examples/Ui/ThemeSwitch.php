<?php

namespace App\Enums\Examples\Ui;

class ThemeSwitch
{
    public const BASIC = <<<'HTML'
    <x-theme-switch />
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->themeSwitch()
        ->block('block', 'classes');
    HTML;
}
