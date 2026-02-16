<?php

namespace App\Enums\Examples\V2\Helpers;

class DebugMode
{
    public const string ENV = <<<'HTML'
    TALLSTACKUI_DEBUG_MODE=true
    HTML;

    public const string CONFIGURATION = <<<'HTML'
    use TallStackUi\View\Components;

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
            // Components\Alert::class,
            // Components\Avatar::class
        ],
    ],

    // ...
    HTML;
}
