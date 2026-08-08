<?php

declare(strict_types=1);

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

    'version' => env('DOCS_VERSION', 'v4'),

    /*
    |--------------------------------------------------------------------------
    | Documentation Sites
    |--------------------------------------------------------------------------
    |
    | Every major still online, newest first. The first entry is the latest.
    | When a new major ships, it takes over the apex domain and the previous
    | one moves to its own subdomain.
    |
    */

    'sites' => [
        'v4' => env('DOCS_V4_URL', 'https://tallstackui.com'),
        'v3' => env('DOCS_V3_URL', 'https://v3.tallstackui.com'),
    ],

];
