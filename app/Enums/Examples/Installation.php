<?php

namespace App\Enums\Examples;

class Installation
{
    public const INSTALLATION = <<<'HTML'
    composer require tallstackui/tallstackui
    HTML;

    public const SCRIPT = <<<'HTML'
    <html>
        <head>
            {{-- Also insert this code [tl! highlight:1] --}}
            <style> [x-cloak] { display: none; } </style>

            <tallstackui:setup /> {{-- [tl! highlight] --}}
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        </head>
    </html>
    HTML;

    public const MANUAL = <<<'HTML'
    <html>
        <head>
            {{-- Also insert this code [tl! highlight:1] --}}
            <style> [x-cloak] { display: none; } </style>

            @tallStackUiScripts {{-- [tl! highlight:1] --}}
            @tallStackUiStyles
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        </head>
    </html>
    HTML;

    public const TAILWINDCSS = <<<'HTML'
    // ...

    presets: [
        require('./vendor/tallstackui/tallstackui/tailwind.config.js')
    ],

    content: [
        // ...

        './vendor/tallstackui/tallstackui/src/**/*.php',
    ],
    HTML;

    public const BUILD = <<<'HTML'
    npm run build && php artisan optimize:clear
    HTML;
}
