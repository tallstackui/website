<?php

namespace App\Enums\Examples\V1\Ui;

class ThemeSwitch
{
    public const BASIC = <<<'HTML'
    <x-theme-switch />
    HTML;

    public const SIZES = <<<'HTML'
    <x-theme-switch xs />
    <x-theme-switch sm />
    <x-theme-switch md />
    <x-theme-switch lg />
    <x-theme-switch xl />
    HTML;

    public const ICONS = <<<'HTML'
    <x-theme-switch only-icons />
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::customize()
        ->themeSwitch()
        ->block('block', 'classes');
    HTML;
}
