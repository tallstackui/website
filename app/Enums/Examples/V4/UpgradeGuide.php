<?php

namespace App\Enums\Examples\V4;

class UpgradeGuide
{
    public const string PERSONALIZATION = <<<'HTML'
    use TallStackUi\Facades\TallStackUi;

    // In AppServiceProvider::boot()

    TallStackUi::personalize() // [tl! remove]
    TallStackUi::customize() // [tl! add]
        ->alert()
        ->block('wrapper', 'rounded-full');
    HTML;

    public const string COMPOSER = <<<'HTML'
    "require": {
        "laravel/framework": "^12.0",
        "tallstackui/tallstackui": "^2.0", // [tl! remove]
        "tallstackui/tallstackui": "^3.0", // [tl! add]
        "livewire/livewire": "^4.0",

        // ...
    },
    HTML;

    public const string OPTIMIZE_CLEAR = <<<'HTML'
    php artisan optimize:clear
    HTML;

    public const string COMMAND = <<<'HTML'
    composer install
    HTML;
}
