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

    public const string READONLY_DISABLED = <<<'HTML'
    <x-pin name="pin-readonly" length="5" label="Readonly" value="12345" readonly />
    <x-pin name="pin-disabled" length="5" label="Disabled" value="12345" disabled />
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

    public const string PASSWORD = <<<'HTML'
    <x-pin length="6" numbers password />
    HTML;

    public const string SEPARATOR = <<<'HTML'
    <!-- Cuts in the middle when split is omitted: 123-456 -->
    <x-pin length="6" numbers separator />

    <!-- Custom character and a single split: 12/3456 -->
    <x-pin length="6" numbers separator="/" split="2" />

    <!-- Several splits: AB-CD-EF-GH -->
    <x-pin length="8" letters separator split="2,4,6" />
    HTML;

    public const string GROUP = <<<'HTML'
    <x-pin length="6" numbers group />

    <!-- Each chunk becomes its own group: [123]-[456] -->
    <x-pin length="6" numbers group separator />
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
