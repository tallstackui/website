<?php

declare(strict_types=1);

namespace App\Enums\Examples\Form;

class Pin
{
    public const string BASIC = <<<'HTML'
    <x-pin length="5" />
    HTML;

    public const string LABEL_HINT = <<<'HTML'
    <x-pin length="5" label="Insert the code" hint="We sent a 5-digit code to your email." />
    HTML;

    public const string PREFIX = <<<'HTML'
    <x-pin prefix="G-" length="5" />
    HTML;

    public const string CLEAR = <<<'HTML'
    <x-pin length="5" clear />
    HTML;

    public const string MASKS = <<<'HTML'
    <x-pin length="5" label="Only Numbers" numbers />

    <x-pin length="5" label="Only Letters" letters />
    HTML;

    public const string EVENTS = <<<'HTML'
    <x-pin length="5" x-on:filled="alert(`Filled: ${$event.detail.model}`)" />

    <x-pin length="5" clear x-on:clear="alert(`Cleared: ${$event.detail.model}`)" />
    HTML;

    public const string SMART = <<<'HTML'
    <!-- Livewire string property: $pin -->

    <form wire:submit="verify">
        <x-pin length="5" wire:model.live="pin" label="Enter your code" smart numbers />
    </form>
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->form('pin')
        ->block('block', 'classes');
    HTML;
}
