<?php

namespace App\Enums\Examples\V3\Ui;

class ThemeSwitch
{
    public const string BASIC = <<<'HTML'
    <x-theme-switch />
    HTML;

    public const string BASIC_BLOCK = <<<'HTML'
    <x-theme-switch block />
    HTML;

    public const string SIZES = <<<'HTML'
    <x-theme-switch xs />
    <x-theme-switch sm />
    <x-theme-switch md />
    <x-theme-switch lg />
    <x-theme-switch xl />
    HTML;

    public const string SIMPLE = <<<'HTML'
    <x-theme-switch simple />
    HTML;

    public const string ICONS = <<<'HTML'
    <x-theme-switch simple only-icons />
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->themeSwitch()
        ->block('block', 'classes');
    HTML;
}
