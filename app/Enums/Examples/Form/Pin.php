<?php

namespace App\Enums\Examples\Form;

class Pin
{
    public const BASIC = <<<'HTML'
    <x-pin length="5" />
    HTML;

    public const LABEL_HINT = <<<'HTML'
    <x-pin length="5"
           label="Insert the code"
           hint="We sent a 5-digit code to your email." />
    HTML;

    public const PREFIX = <<<'HTML'
    <x-pin prefix="G-" length="5" />
    HTML;

    public const CLEAR = <<<'HTML'
    <x-pin length="5" clear />
    HTML;

    public const MASKS = <<<'HTML'
    <x-pin length="5" label="Only Numbers" numbers />

    <x-pin length="5" label="Only Letters" letters />
    HTML;

    public const INVALIDATE = <<<'HTML'
    <x-pin length="5" invalidate />
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->form('pin')
        ->block('block', 'classes');
    HTML;
}
