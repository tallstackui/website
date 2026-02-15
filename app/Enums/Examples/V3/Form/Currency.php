<?php

namespace App\Enums\Examples\V3\Form;

class Currency
{
    public const BASIC = <<<'HTML'
    <x-currency />
    HTML;

    public const LABEL_HINT = <<<'HTML'
    <x-currency label="Salady Expectation" hint="Between 5,000 and 10,000 USD" />
    HTML;

    public const CLEARABLE = <<<'HTML'
    <x-currency clearable />
    HTML;

    public const DIFFERENT_CURRENCIES = <<<'HTML'
    <!-- Default -->
    <x-currency locale="en-US" />

    <x-currency locale="pt-BR" />

    <x-currency locale="es-ES" />
    HTML;

    public const INTL_OPTIONS = <<<'HTML'
    // <x-currency decimals="2" precision="4" />  [tl! highlight]

    new Intl.NumberFormat(this.locale, {
        minimumFractionDigits: decimals, // [tl! highlight:1]
        maximumFractionDigits: precision,
    }).format(number);
    HTML;

    public const SYMBOLS = <<<'HTML'
    <x-currency label="Only symbol" symbol />

    <x-currency label="Only currency code" currency />

    <x-currency label="Both" symbol currency />
    HTML;

    public const CUSTOM_SYMBOLS = <<<'HTML'
    <x-currency symbol="$$" />

    <x-currency currency="$$" />
    HTML;

    public const MUTATE = <<<'HTML'
    <x-currency mutate />
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::customize()
        ->form('currency')
        ->block('block', 'classes');
    HTML;
}
