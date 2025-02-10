<?php

namespace App\Enums\Examples\V2;

class Contribution
{
    public const COMPOSER = <<<'HTML'
    "require": {
        "tallstackui/tallstackui": "v2.x-dev", // [tl! highlight]
        
        // ...
    },
    
    // ...

    "repositories": [ // [tl! highlight:5]
        {
            "type": "path",
            "url": "./Users/foobar/tallstackui/tallstackui"
        }
    ],
    
    // ...
    HTML;

    public const COMPOSER_INSTALL_COMMAND = <<<'HTML'
    composer install
    HTML;

    public const DUSK = <<<'HTML'
    ./vendor/bin/dusk-updater detect
    HTML;

    public const ALTERNATIVE = <<<'HTML'
    ./vendor/bin/dusk-updater detect --auto-update
    HTML;

    public const ALL_TESTS = <<<'HTML'
    composer ci
    HTML;

    public const FEATURE = <<<'HTML'
    composer test:feature
    HTML;

    public const BROWSER = <<<'HTML'
    composer test:browser

    # Use: composer test:browser:ci, to run the tests without UI.
    HTML;

    public const PINT = <<<'HTML'
    composer format
    HTML;

    public const ANALYSE = <<<'HTML'
    composer type && composer analyse
    HTML;

    public const SYNCHRONIZE = <<<'HTML'
    composer update tallstackui/tallstackui && npm run build && php artisan optimize:clear
    HTML;
}
