<?php

namespace App\Enums\Examples\V4\Helpers;

class DebugMode
{
    public const string ENV = <<<'HTML'
    TALLSTACKUI_DEBUG_MODE=true
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
        'environments' => [
            'local',
            'sandbox',
            'staging',
        ],

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
