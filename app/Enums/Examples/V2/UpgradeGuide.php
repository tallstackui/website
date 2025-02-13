<?php

namespace App\Enums\Examples\V2;

class UpgradeGuide
{
    public const COMPOSER = <<<'HTML'
    "require": {
        "laravel/framework": "^11.0",
        "tallstackui/tallstackui": "^v2.0-beta", // [tl! focus, highlight]
        "livewire/livewire": "^3.0",

        // ...
    },
    HTML;

    public const COMMAND = <<<'HTML'
    rm -fr vendor/ && composer install
    HTML;
}
