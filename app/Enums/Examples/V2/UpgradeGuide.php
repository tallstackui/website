<?php

namespace App\Enums\Examples\V2;

class UpgradeGuide
{
    public const string COMPOSER = <<<'HTML'
    "require": {
        "laravel/framework": "^11.0",
        "tallstackui/tallstackui": "^2.0.0", // [tl! focus, highlight]
        "livewire/livewire": "^3.0",

        // ...
    },
    HTML;

    public const string COMMAND = <<<'HTML'
    composer install
    HTML;
}
