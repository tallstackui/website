<?php

namespace App\Enums\Examples\V3\Ui;

class Kbd
{
    public const BASIC = <<<'HTML'
    <x-kbd text="Ctrl" />
    HTML;

    public const COMBINATION = <<<'HTML'
    <x-kbd text="Ctrl" /> + <x-kbd text="C" />
    HTML;

    public const SIZES = <<<'HTML'
    <x-kbd text="Ctrl" xs />
    <x-kbd text="Ctrl" sm />
    <x-kbd text="Ctrl" md />
    <x-kbd text="Ctrl" lg />
    HTML;

    public const BORDERLESS = <<<'HTML'
    <x-kbd text="Ctrl" borderless />
    HTML;

    public const TOOLTIP = <<<'HTML'
    <x-kbd text="Esc" tooltip="Go back" />
    HTML;

    public const SLOT = <<<'HTML'
    <x-kbd>
        <x-icon name="arrow-up" class="h-4 w-4" />
    </x-kbd>
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::customize()
        ->kbd()
        ->block('block', 'classes');
    HTML;
}
