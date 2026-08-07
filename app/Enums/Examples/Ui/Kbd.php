<?php

namespace App\Enums\Examples\Ui;

class Kbd
{
    public const string BASIC = <<<'HTML'
    <x-kbd text="Ctrl" />
    HTML;

    public const string COMBINATION = <<<'HTML'
    <x-kbd text="Ctrl" /> + <x-kbd text="C" />
    HTML;

    public const string SIZES = <<<'HTML'
    <x-kbd text="Ctrl" xs />
    <x-kbd text="Ctrl" sm />
    <x-kbd text="Ctrl" md />
    <x-kbd text="Ctrl" lg />
    HTML;

    public const string BORDERLESS = <<<'HTML'
    <x-kbd text="Ctrl" borderless />
    HTML;

    public const string TOOLTIP = <<<'HTML'
    <x-kbd text="Esc" tooltip="Go back" />
    HTML;

    public const string SLOT = <<<'HTML'
    <x-kbd>
        <x-icon name="arrow-up" class="h-4 w-4" />
    </x-kbd>
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->kbd()
        ->block('block', 'classes');
    HTML;
}
