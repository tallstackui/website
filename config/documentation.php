<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Served Version
    |--------------------------------------------------------------------------
    |
    | The single major this deployment publishes. Every other major is served
    | by its own deployment and reached through the "sites" map below.
    |
    */

    'version' => env('DOCS_VERSION', 'v3'),

    /*
    |--------------------------------------------------------------------------
    | Documentation Sites
    |--------------------------------------------------------------------------
    |
    | Every major still online, newest first. The first entry is the latest:
    | it drives the version picker, the outdated-version warnings and the
    | cross-deployment redirects. A single entry hides the picker entirely.
    |
    | When v4 ships, add it on top and everything else follows.
    |
    */

    'sites' => [
        'v4' => 'https://tallstackui.com',
        'v3' => env('DOCS_V3_URL', 'https://v3.tallstackui.com'),
    ],

];
