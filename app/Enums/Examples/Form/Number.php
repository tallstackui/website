<?php

declare(strict_types=1);

namespace App\Enums\Examples\Form;

class Number
{
    public const string BASIC = <<<'HTML'
    <x-number />
    HTML;

    public const string STEP = <<<'HTML'
    <x-number step="5" />
    HTML;

    public const string STEP_DECIMAL = <<<'HTML'
    <x-number step="0.3" />
    HTML;

    public const string LABEL_HINT = <<<'HTML'
    <x-number label="Quantity" hint="Press the plus button to increase one by one" />
    HTML;

    public const string READONLY_DISABLED = <<<'HTML'
    <x-number label="Readonly" value="10" readonly />
    <x-number label="Disabled" value="10" disabled />
    HTML;

    public const string MIN_MAX = <<<'HTML'
    <x-number label="Quantity" hint="Press the plus button to increase one by one" min="1" max="10" />
    HTML;

    public const string CENTRALIZED = <<<'HTML'
    <x-number centralized />
    HTML;

    public const string SELECTABLE = <<<'HTML'
    <x-number selectable />
    HTML;

    public const string DELAY = <<<'HTML'
    <x-number delay="1" min="1" max="10" />
    HTML;

    public const string ICON = <<<'HTML'
    <x-number chevron />
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->form('number')
        ->block('block', 'classes');
    HTML;
}
