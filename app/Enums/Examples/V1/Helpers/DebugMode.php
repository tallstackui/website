<?php

namespace App\Enums\Examples\V1\Helpers;

class DebugMode
{
    public const string ENV = <<<'HTML'
    TALLSTACKUI_DEBUG_MODE=true
    HTML;

    public const string CONFIGURATION = <<<'HTML'
    // ...

    'debug' => [
        'status' => env('TALLSTACKUI_DEBUG_MODE', false),
        /*
        |----------------------------------------------------------------------
        | You can control in which environments the debug mode is enabled.
        |----------------------------------------------------------------------
        */
        'environments' => [
            'local',
            'sandbox',
            'staging',
        ],
        /*
        |----------------------------------------------------------------------
        | You can ignore debug mode for certain specific components
        | by setting the exact component name in this array.
        |----------------------------------------------------------------------
        */
        'ignore' => [
            //
        ],
    ],

    // ...
    HTML;
}
