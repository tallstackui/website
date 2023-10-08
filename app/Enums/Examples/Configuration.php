<?php

namespace App\Enums\Examples;

class Configuration
{
    public const COMMAND = <<<'HTML'
    php artisan vendor:publish --tag=tallstackui.config
    HTML;

    public const CONTENT = <<<'HTML'
    // ...

    /*
    |--------------------------------------------------------------------------
    | Components Settings
    |--------------------------------------------------------------------------
    |
    | General components settings.
    */
    'personalizations' => [
        'input' => [
            'square' => false,
            'round' => false,
        ],
        'tabs' => [
            'square' => false,
        ],
        'dialog' => [
            'z-index' => 'z-50',
            'closeable' => true,
            'square' => false,
        ],
        'toast' => [
            'z-index' => 'z-50',
            'position' => 'top-right',
            'square' => false,
        ],
    ],

    // ...
    HTML;

}
