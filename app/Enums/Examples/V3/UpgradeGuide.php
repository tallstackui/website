<?php

namespace App\Enums\Examples\V3;

class UpgradeGuide
{
    public const COMPOSER = <<<'HTML'
    "require": {
        "laravel/framework": "^11.0",
        "tallstackui/tallstackui": "^2.0.0", // [tl! focus, highlight]
        "livewire/livewire": "^3.0",

        // ...
    },
    HTML;

    public const COMMAND = <<<'HTML'
    composer install
    HTML;
}
