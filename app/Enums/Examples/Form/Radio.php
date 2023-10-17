<?php

namespace App\Enums\Examples\Form;

class Radio
{
    public const BASIC = <<<'HTML'
    <x-radio />
    HTML;

    public const LABEL = <<<'HTML'
    <x-radio label="Receive Alert" />
    <x-radio label="Receive Alert" position="left" />
    HTML;

    public const SIZES = <<<'HTML'
    <x-radio sm />
    <x-radio md />
    <x-radio lg />
    HTML;

    public const COLORS = <<<'HTML'
    <x-radio label="Primary" />
    <x-radio color="secondary" label="Secondary" />
    <x-radio color="slate" label="Slate" />
    <x-radio color="gray" label="Gray" />
    <x-radio color="zinc" label="Zinc" />
    <x-radio color="neutral" label="Neutral" />
    <x-radio color="stone" label="Stone" />
    <x-radio color="red" label="Red" />
    <x-radio color="orange" label="Orange" />
    <x-radio color="amber" label="Amber" />
    <x-radio color="yellow" label="Yellow" />
    <x-radio color="lime" label="Lime" />
    <x-radio color="green" label="Green" />
    <x-radio color="emerald" label="Emerald" />
    <x-radio color="teal" label="Teal" />
    <x-radio color="cyan" label="Cyan" />
    <x-radio color="sky" label="Sky" />
    <x-radio color="blue" label="Blue" />
    <x-radio color="indigo" label="Indigo" />
    <x-radio color="violet" label="Violet" />
    <x-radio color="purple" label="Purple" />
    <x-radio color="fuchsia" label="Fuchsia" />
    <x-radio color="pink" label="Pink" />
    <x-radio color="rose" label="Rose" />
    <x-radio color="black" label="Black" />
    <x-radio color="white" label="White" />
    HTML;

    public const LIVEWIRE = <<<'HTML'
    <x-radio label="Receive Alert"
             wire:model="alert" />
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->form('radio')
        ->block('block', 'classes');
    HTML;
}
