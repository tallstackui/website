<?php

namespace App\Enums\Examples\Form;

class Checkbox
{
    public const BASIC = <<<'HTML'
    <x-checkbox />
    HTML;

    public const LABEL = <<<'HTML'
    <x-checkbox label="Receive Alert" />
    <x-checkbox label="Receive Alert" position="left" />
    HTML;

    public const SIZES = <<<'HTML'
    <x-checkbox sm />
    <x-checkbox md />
    <x-checkbox lg />
    HTML;

    public const COLORS = <<<'HTML'
    <x-checkbox label="Primary" />
    <x-checkbox color="secondary" label="Secondary" />
    <x-checkbox color="slate" label="Slate" />
    <x-checkbox color="gray" label="Gray" />
    <x-checkbox color="zinc" label="Zinc" />
    <x-checkbox color="neutral" label="Neutral" />
    <x-checkbox color="stone" label="Stone" />
    <x-checkbox color="red" label="Red" />
    <x-checkbox color="orange" label="Orange" />
    <x-checkbox color="amber" label="Amber" />
    <x-checkbox color="yellow" label="Yellow" />
    <x-checkbox color="lime" label="Lime" />
    <x-checkbox color="green" label="Green" />
    <x-checkbox color="emerald" label="Emerald" />
    <x-checkbox color="teal" label="Teal" />
    <x-checkbox color="cyan" label="Cyan" />
    <x-checkbox color="sky" label="Sky" />
    <x-checkbox color="blue" label="Blue" />
    <x-checkbox color="indigo" label="Indigo" />
    <x-checkbox color="violet" label="Violet" />
    <x-checkbox color="purple" label="Purple" />
    <x-checkbox color="fuchsia" label="Fuchsia" />
    <x-checkbox color="pink" label="Pink" />
    <x-checkbox color="rose" label="Rose" />
    <x-checkbox color="black" label="Black" />
    <x-checkbox color="white" label="White" />
    HTML;

    public const LIVEWIRE = <<<'HTML'
    <x-checkbox label="Receive Alert"
                wire:model="alert" />
    HTML;
}
