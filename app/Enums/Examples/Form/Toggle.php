<?php

namespace App\Enums\Examples\Form;

class Toggle
{
    public const BASIC = <<<'HTML'
    <x-toggle />
    HTML;

    public const LABEL = <<<'HTML'
    <x-toggle label="Receive Alert" />
    <x-toggle label="Receive Alert" position="left" />
    HTML;

    public const SIZES = <<<'HTML'
    <x-toggle sm />
    <x-toggle md />
    <x-toggle lg />
    HTML;

    public const COLORS = <<<'HTML'
    <x-toggle label="Primary" />
    <x-toggle color="secondary" label="Secondary" />
    <x-toggle color="slate" label="Slate" />
    <x-toggle color="gray" label="Gray" />
    <x-toggle color="zinc" label="Zinc" />
    <x-toggle color="neutral" label="Neutral" />
    <x-toggle color="stone" label="Stone" />
    <x-toggle color="red" label="Red" />
    <x-toggle color="orange" label="Orange" />
    <x-toggle color="amber" label="Amber" />
    <x-toggle color="yellow" label="Yellow" />
    <x-toggle color="lime" label="Lime" />
    <x-toggle color="green" label="Green" />
    <x-toggle color="emerald" label="Emerald" />
    <x-toggle color="teal" label="Teal" />
    <x-toggle color="cyan" label="Cyan" />
    <x-toggle color="sky" label="Sky" />
    <x-toggle color="blue" label="Blue" />
    <x-toggle color="indigo" label="Indigo" />
    <x-toggle color="violet" label="Violet" />
    <x-toggle color="purple" label="Purple" />
    <x-toggle color="fuchsia" label="Fuchsia" />
    <x-toggle color="pink" label="Pink" />
    <x-toggle color="rose" label="Rose" />
    <x-toggle color="black" label="Black" />
    <x-toggle color="white" label="White" />
    HTML;

    public const LIVEWIRE = <<<'HTML'
    <x-toggle label="Receive Alert"
              wire:model="alert" />
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->form('toggle')
        ->block('block', 'classes');
    HTML;
}
