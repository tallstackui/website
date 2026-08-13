<?php

declare(strict_types=1);

namespace App\Enums\Examples\Form;

class Currency
{
    public const string BASIC = <<<'HTML'
    <x-currency />
    HTML;

    public const string LABEL_HINT = <<<'HTML'
    <x-currency label="Salary Expectation" hint="Between 5,000 and 10,000 USD" />
    HTML;

    public const string READONLY_DISABLED = <<<'HTML'
    <x-currency label="Readonly" value="500000" readonly />
    <x-currency label="Disabled" value="500000" disabled />
    HTML;

    public const string CLEARABLE = <<<'HTML'
    <x-currency clearable />
    HTML;

    public const string DIFFERENT_CURRENCIES = <<<'HTML'
    <!-- Default -->
    <x-currency locale="en-US" />

    <x-currency locale="pt-BR" />

    <x-currency locale="es-ES" />
    HTML;

    public const string INTL_OPTIONS = <<<'HTML'
    // <x-currency decimals="2" precision="4" />  [tl! highlight]

    new Intl.NumberFormat(this.locale, {
        minimumFractionDigits: decimals, // [tl! highlight:1]
        maximumFractionDigits: precision,
    }).format(number);
    HTML;

    public const string SYMBOLS = <<<'HTML'
    <x-currency label="Only symbol" symbol />

    <x-currency label="Only currency code" currency />

    <x-currency label="Both" symbol currency />
    HTML;

    public const string CUSTOM_SYMBOLS = <<<'HTML'
    <x-currency symbol="$$" />

    <x-currency currency="$$" />
    HTML;

    public const string MODE_MUTATE = <<<'HTML'
    <x-currency mutate wire:model="price" />
    HTML;

    public const string MODE_DECIMAL = <<<'HTML'
    <x-currency decimal wire:model="price" />
    HTML;

    public const string DECIMAL_ELOQUENT = <<<'HTML'
    // app/Models/Product.php

    // ...

    protected $casts = [
        'price' => 'decimal:2', // [tl! highlight]
    ];
    HTML;

    public const string DECIMAL_BLADE = <<<'HTML'
    <x-currency decimal wire:model="product.price" />
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->form('currency')
        ->block('block', 'classes');
    HTML;
}
