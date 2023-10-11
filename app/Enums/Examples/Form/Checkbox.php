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
    <x-checkbox />
    <x-checkbox color="secondary" />
    <x-checkbox color="white" />
    <x-checkbox color="black" />
    <x-checkbox color="slate" />
    <x-checkbox color="gray" />
    <x-checkbox color="zinc" />
    <x-checkbox color="neutral" />
    <x-checkbox color="stone" />
    <x-checkbox color="red" />
    <x-checkbox color="orange" />
    <x-checkbox color="amber" />
    <x-checkbox color="yellow" />
    <x-checkbox color="lime" />
    <x-checkbox color="green" />
    <x-checkbox color="emerald" />
    <x-checkbox color="teal" />
    <x-checkbox color="cyan" />
    <x-checkbox color="sky" />
    <x-checkbox color="blue" />
    <x-checkbox color="indigo" />
    <x-checkbox color="violet" />
    <x-checkbox color="purple" />
    <x-checkbox color="fuchsia" />
    <x-checkbox color="pink" />
    <x-checkbox color="rose" />
    HTML;

    public const LIVEWIRE = <<<'HTML'
    <x-checkbox label="Receive Alert"
                wire:model="alert" />
    HTML;
}
