<?php

namespace App\Enums\Examples\V3\Form;

class Pin
{
    public const BASIC = <<<'HTML'
    <x-pin length="5" />
    HTML;

    public const LABEL_HINT = <<<'HTML'
    <x-pin length="5" label="Insert the code" hint="We sent a 5-digit code to your email." />
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

    public const EVENTS = <<<'HTML'
    <x-pin length="5" x-on:filled="alert(`Filled: ${$event.detail.model}`)" />

    <x-pin length="5" clear x-on:clear="alert(`Cleared: ${$event.detail.model}`)" />
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->form('pin')
        ->block('block', 'classes');
    HTML;
}
