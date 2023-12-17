<?php

namespace App\Enums\Examples;

class DebugMode
{
    public const ENV = <<<'HTML'
    TALLSTACKUI_DEBUG=true
    HTML;

    public const CONFIGURATION = <<<'HTML'
    // ...

    'debug' => [
        'status' => env('TALLSTACKUI_DEBUG', false),
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
        | You can skip debug mode for certain specific components
        | by setting the exact component name in this array.
        |----------------------------------------------------------------------
        */
        'skip' => [
            //
        ],
    ],

    // ...
    HTML;
}
