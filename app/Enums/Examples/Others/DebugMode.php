<?php

namespace App\Enums\Examples\Others;

class DebugMode
{
    public const ENV = <<<'HTML'
    TALLSTACKUI_DEBUG_MODE=true
    HTML;

    public const CONFIGURATION = <<<'HTML'
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
