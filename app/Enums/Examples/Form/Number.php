<?php

namespace App\Enums\Examples\Form;

class Number
{
    public const BASIC = <<<'HTML'
    <x-number />
    HTML;

    public const LABEL_HINT = <<<'HTML'
    <x-number label="Quantity"
              hint="Press the plus button to increase one by one" />
    HTML;

    public const MIN_MAX = <<<'HTML'
    <x-number min="2" max="5" />
    HTML;

    public const CENTRALIZED = <<<'HTML'
    <x-number centralized />
    HTML;

    public const DELAY = <<<'HTML'
    <x-number delay="1" min="1" max="10" />
    HTML;

    public const ICON = <<<'HTML'
    <x-number chevron />
    HTML;

    public const INVALIDATE = <<<'HTML'
    <x-number label="Quantity" invalidate />
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->form('number')
        ->block('block', 'classes');
    HTML;
}
