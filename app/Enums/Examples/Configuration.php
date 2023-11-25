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
    'settings' => [
        'dialog' => [
            'z-index' => 'z-50',
            'blur' => false,
            'uncloseable' => false,
        ],
        'modal' => [
            'z-index' => 'z-50',
            'blur' => false,
            'persistent' => false,
            /* Alloweds: sm, md, lg, xl, 2xl, 3xl, 4xl, 5xl, 6xl, 7xl */
            'size' => '2xl',
        ],
        'slide' => [
            'z-index' => 'z-50',
            'blur' => false,
            'persistent' => false,
            /* Alloweds: sm, md, lg, xl, 2xl, 3xl, 4xl, 5xl, 6xl, 7xl, full */
            'size' => 'lg',
            /* Alloweds: right, left */
            'position' => 'right',
        ],
        'toast' => [
            'z-index' => 'z-50',
            'progress' => true,
            /* Alloweds: top-right, top-left, bottom-right, bottom-left */
            'position' => 'top-right',
        ],
    ],

    // ...
    HTML;
}
