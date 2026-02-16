<?php

namespace App\Enums\Examples\V1;

class Contribution
{
    public const string LINK = <<<'HTML'
    ln -s /Users/your-user/your-forked-project-path .
    HTML;

    public const string COMPOSER = <<<'HTML'
    // ...

    "repositories": [
        {
            "type": "path",
            "url": "./packages/tallstackui/tallstackui"
        }
    ],
    HTML;

    public const string COMMAND = <<<'HTML'
    composer require tallstackui/tallstackui:1.x-dev
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
