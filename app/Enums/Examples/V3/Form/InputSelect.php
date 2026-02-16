<?php

namespace App\Enums\Examples\V3\Form;

class InputSelect
{
    public const string BASIC = <<<'HTML'
    <x-input.select label="Phone Number" icon="phone">
        <x-slot:left>
            <x-select.styled :options="['+1', '+44', '+55', '+91']" />
        </x-slot:left>
    </x-input.select>
    HTML;

    /* Native Select */

    public const string NATIVE_LEFT = <<<'HTML'
    <x-input.select label="Phone Number" icon="phone">
        <x-slot:left>
            <x-select.native :options="['+1', '+44', '+55', '+91']" />
        </x-slot:left>
    </x-input.select>
    HTML;

    public const string NATIVE_RIGHT = <<<'HTML'
    <x-input.select label="E-mail">
        <x-slot:right>
            <x-select.native :options="['@gmail.com', '@yahoo.com', '@outlook.com']" />
        </x-slot:right>
    </x-input.select>
    HTML;

    /* Styled Select */

    public const string STYLED_LEFT = <<<'HTML'
    <x-input.select label="Phone Number" icon="phone">
        <x-slot:left>
            <x-select.styled :options="['+1', '+44', '+55', '+91']" />
        </x-slot:left>
    </x-input.select>
    HTML;

    public const string STYLED_RIGHT = <<<'HTML'
    <x-input.select label="Amount" clearable>
        <x-slot:right>
            <x-select.styled :options="['USD', 'EUR', 'BRL', 'GBP']" />
        </x-slot:right>
    </x-input.select>
    HTML;

    public const string STYLED_SEARCHABLE = <<<'HTML'
    <x-input.select label="Phone Number" icon="phone">
        <x-slot:left>
            <x-select.styled :options="[
                ['label' => '🇺🇸 +1', 'value' => '+1'],
                ['label' => '🇬🇧 +44', 'value' => '+44'],
                ['label' => '🇧🇷 +55', 'value' => '+55'],
                ['label' => '🇮🇳 +91', 'value' => '+91'],
                ['label' => '🇩🇪 +49', 'value' => '+49'],
                ['label' => '🇫🇷 +33', 'value' => '+33'],
                ['label' => '🇯🇵 +81', 'value' => '+81'],
                ['label' => '🇦🇺 +61', 'value' => '+61'],
            ]" searchable />
        </x-slot:left>
    </x-input.select>
    HTML;

    public const string STYLED_API = <<<'HTML'
    <x-input.select label="Phone Number" icon="phone">
        <x-slot:left>
            <x-select.styled :request="route('api.users')" />
        </x-slot:left>
    </x-input.select>
    HTML;

    /* Features */

    public const string LABEL_HINT = <<<'HTML'
    <x-input.select label="Phone Number" hint="Include your country code">
        <x-slot:left>
            <x-select.styled :options="['+1', '+44', '+55']" />
        </x-slot:left>
    </x-input.select>
    HTML;

    public const string ICON = <<<'HTML'
    <x-input.select label="Phone" icon="phone">
        <x-slot:left>
            <x-select.styled :options="['+1', '+44', '+55']" />
        </x-slot:left>
    </x-input.select>

    <x-input.select label="Phone" icon="phone" position="right">
        <x-slot:left>
            <x-select.styled :options="['+1', '+44', '+55']" />
        </x-slot:left>
    </x-input.select>
    HTML;

    public const string PREFIX_SUFFIX = <<<'HTML'
    <x-input.select label="Domain" prefix="https://">
        <x-slot:right>
            <x-select.styled :options="['.com', '.net', '.org', '.io']" />
        </x-slot:right>
    </x-input.select>

    <x-input.select label="Amount" suffix="per month">
        <x-slot:left>
            <x-select.styled :options="['USD', 'EUR', 'BRL']" />
        </x-slot:left>
    </x-input.select>
    HTML;

    public const string CLEARABLE = <<<'HTML'
    <x-input.select label="Phone Number" clearable>
        <x-slot:left>
            <x-select.styled :options="['+1', '+44', '+55']" />
        </x-slot:left>
    </x-input.select>
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->form('input.select')
        ->block('block', 'classes');
    HTML;
}
