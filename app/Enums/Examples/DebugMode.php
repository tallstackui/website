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
        'environments' => [
            'local',
            'testing',
        ],
    ],

    // ...
    HTML;
}
