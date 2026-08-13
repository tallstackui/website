<?php

declare(strict_types=1);

namespace App\Enums\Examples\Helpers;

class DebugMode
{
    public const string ENV = <<<'HTML'
    TALLSTACKUI_DEBUG_MODE=true
    TALLSTACKUI_DEBUG_ENVIRONMENTS=local,sandbox,staging
    HTML;

    public const string CONFIGURATION = <<<'HTML'
    use TallStackUi\Components;

    /*
    |--------------------------------------------------------------------------
    | Debug Mode
    |--------------------------------------------------------------------------
    |
    | Control the debug mode for TallStackUI components.
    */
    'debug' => [
        'status' => env('TALLSTACKUI_DEBUG_MODE', false),

        /*
        |----------------------------------------------------------------------
        | Controls the environments where the debug mode can be enabled.
        |----------------------------------------------------------------------
        */
        'environments' => array_map('trim', explode(',', env('TALLSTACKUI_DEBUG_ENVIRONMENTS', 'local,sandbox,staging'))),

        /*
        |----------------------------------------------------------------------
        | Ignore debug mode for specific components.
        |----------------------------------------------------------------------
        */
        'ignore' => [
            // Components\Alert\Component::class,
            // Components\Avatar\Component::class
        ],
    ],

    // ...
    HTML;
}
