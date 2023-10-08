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

    public const LIVEWIRE = <<<'HTML'
    <x-radio label="Receive Alert"
             wire:model="alert"
    />
    HTML;
}
