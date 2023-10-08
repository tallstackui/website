<?php

namespace App\Enums\Examples;

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

    public const LIVEWIRE = <<<'HTML'
    <x-toggle label="Receive Alert"
              wire:model="alert"
    />
    HTML;
}
