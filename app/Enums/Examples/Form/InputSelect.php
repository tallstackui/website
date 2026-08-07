<?php

namespace App\Enums\Examples\Form;

class InputSelect
{
    public const string NATIVE = <<<'HTML'
    <x-input.select label="Phone Number" icon="phone" clearable>
        <x-slot:left>
            <x-select.native :options="['+1', '+44', '+55', '+91']" />
        </x-slot:left>
    </x-input.select>
    HTML;

    public const string STYLED = <<<'HTML'
    <x-input.select label="E-mail Provider" icon="envelope" clearable>
        <x-slot:right>
            <x-select.styled :options="['@gmail.com', '@yahoo.com', '@outlook.com']" />
        </x-slot:right>
    </x-input.select>
    HTML;

    public const string FLOATING = <<<'HTML'
    <x-input.select label="E-mail Provider" wire:model="email" floating="min-w-40">
        <x-slot:right>
            <x-select.styled :options="['@gmail.com', '@yahoo.com']" wire:model="provider" />
        </x-slot:right>
    </x-input.select>
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->form('input.select')
        ->block('block', 'classes');
    HTML;
}
