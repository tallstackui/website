<?php

namespace App\Enums\Examples\V2;

class Contribution
{
    public const string COMPOSER = <<<'HTML'
    "require": {
        "tallstackui/tallstackui": "v2.x-dev", // [tl! highlight]
        
        // ...
    },
    
    // ...
    
    // Replace the "url" with the path to the TallStackUI on your computer. [tl! highlight:7]

    "repositories": [
        {
            "type": "path",
            "url": "path/to/tallstackui"
        }
    ],
    
    // ...
    HTML;

    public const string COMPOSER_INSTALL_COMMAND = <<<'HTML'
    composer install
    HTML;

    public const string DUSK = <<<'HTML'
    ./vendor/bin/dusk-updater detect
    HTML;

    public const string ALTERNATIVE = <<<'HTML'
    ./vendor/bin/dusk-updater detect --auto-update
    HTML;

    public const string ALL_TESTS = <<<'HTML'
    composer ci
    HTML;

    public const string FEATURE = <<<'HTML'
    composer test:feature
    HTML;

    public const string BROWSER = <<<'HTML'
    composer test:browser

    # Use: composer test:browser:ci, to run the tests without UI.
    HTML;

    public const string PINT = <<<'HTML'
    composer format
    HTML;

    public const string ANALYSE = <<<'HTML'
    composer type && composer analyse
    HTML;

    public const string SYNCHRONIZE = <<<'HTML'
    composer update tallstackui/tallstackui && npm run build && php artisan optimize:clear
    HTML;
}
