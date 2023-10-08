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
    <x-radio />
    <x-radio color="secondary" />
    <x-radio color="white" />
    <x-radio color="black" />
    <x-radio color="slate" />
    <x-radio color="gray" />
    <x-radio color="zinc" />
    <x-radio color="neutral" />
    <x-radio color="stone" />
    <x-radio color="red" />
    <x-radio color="orange" />
    <x-radio color="amber" />
    <x-radio color="yellow" />
    <x-radio color="lime" />
    <x-radio color="green" />
    <x-radio color="emerald" />
    <x-radio color="teal" />
    <x-radio color="cyan" />
    <x-radio color="sky" />
    <x-radio color="blue" />
    <x-radio color="indigo" />
    <x-radio color="violet" />
    <x-radio color="purple" />
    <x-radio color="fuchsia" />
    <x-radio color="pink" />
    <x-radio color="rose" />
    HTML;

    public const LIVEWIRE = <<<'HTML'
    <x-radio label="Receive Alert"
             wire:model="alert"
    />
    HTML;
}
