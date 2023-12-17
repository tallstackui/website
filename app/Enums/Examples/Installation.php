<?php

namespace App\Enums\Examples;

class Installation
{
    public const INSTALLATION = <<<'HTML'
    composer require tallstackui/tallstackui
    HTML;

    public const CLOAK = <<<'HTML'
    <html>
        <head>
            <style> [x-cloak] { display: none; } </style> {{-- [tl! focus] --}}

            <!-- ... -->
        </head>
    </html>
    HTML;

    public const SCRIPT = <<<'HTML'
    <html>
        <head>
            <!-- ... -->

            <tallstackui:script /> {{-- [tl! highlight] --}}
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        </head>
    </html>
    HTML;

    public const TAILWINDCSS = <<<'HTML'
    import forms from '@tailwindcss/forms'; // [tl! highlight]

    presets: [
        require('./vendor/tallstackui/tallstackui/tailwind.config.js') // [tl! highlight]
    ],

    content: [
        // ...

        './vendor/tallstackui/tallstackui/src/**/*.php', // [tl! highlight]
    ],

    plugins: [forms], // [tl! highlight]
    HTML;

    public const ALPINE = <<<'HTML'
    <html>
        <body>
            <!-- ... -->

            @livewireScripts {{-- [tl! focus] --}}
        </body>
    </html>
    HTML;

    public const BUILD = <<<'HTML'
    npm run build && php artisan optimize:clear
    HTML;
}
