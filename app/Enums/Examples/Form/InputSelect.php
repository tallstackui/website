<?php

declare(strict_types=1);

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

    public const string READONLY_DISABLED = <<<'HTML'
    <x-input.select label="Readonly" value="555-0100" readonly>
        <x-slot:left>
            <x-select.native :options="['+1', '+44']" readonly />
        </x-slot>
    </x-input.select>
    <x-input.select label="Disabled" value="555-0100" disabled>
        <x-slot:right>
            <x-select.native :options="['+1', '+44']" disabled />
        </x-slot>
    </x-input.select>
    <x-input.select label="Readonly" value="555-0100" readonly>
        <x-slot:left>
            <x-select.styled value="+1" :options="['+1', '+44']" readonly />
        </x-slot>
    </x-input.select>
    <x-input.select label="Disabled" value="555-0100" disabled>
        <x-slot:right>
            <x-select.styled value="+1" :options="['+1', '+44']" disabled />
        </x-slot>
    </x-input.select>
    HTML;

    public const string FLOATING = <<<'HTML'
    <x-input.select label="E-mail Provider" floating="min-w-40">
        <x-slot:right>
            <x-select.styled :options="['@gmail.com', '@yahoo.com']" />
        </x-slot:right>
    </x-input.select>
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->form('input.select')
        ->block('block', 'classes');
    HTML;
}
