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
    <x-toggle />
    <x-toggle color="secondary" />
    <x-toggle color="white" />
    <x-toggle color="black" />
    <x-toggle color="slate" />
    <x-toggle color="gray" />
    <x-toggle color="zinc" />
    <x-toggle color="neutral" />
    <x-toggle color="stone" />
    <x-toggle color="red" />
    <x-toggle color="orange" />
    <x-toggle color="amber" />
    <x-toggle color="yellow" />
    <x-toggle color="lime" />
    <x-toggle color="green" />
    <x-toggle color="emerald" />
    <x-toggle color="teal" />
    <x-toggle color="cyan" />
    <x-toggle color="sky" />
    <x-toggle color="blue" />
    <x-toggle color="indigo" />
    <x-toggle color="violet" />
    <x-toggle color="purple" />
    <x-toggle color="fuchsia" />
    <x-toggle color="pink" />
    <x-toggle color="rose" />
    HTML;

    public const LIVEWIRE = <<<'HTML'
    <x-toggle label="Receive Alert"
              wire:model="alert"
    />
    HTML;
}
