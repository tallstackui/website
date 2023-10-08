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

    public const LIVEWIRE = <<<'HTML'
    <x-checkbox label="Receive Alert"
                wire:model="alert"
    />
    HTML;
}
