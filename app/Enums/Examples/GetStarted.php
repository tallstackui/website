<?php

namespace App\Enums\Examples;

class GetStarted
{
    public const INSTALLATION = <<<'HTML'
    composer require tallstackui/tallstackui
    HTML;

    public const SCRIPT = <<<'HTML'
    <html>
        <head>
            <!-- ... -->

            <tallstackui:setup />
            @vite(['resources/css/app.css', 'resources/js/app.js'])

            <!-- ... -->
        </head>
    </html>
    HTML;

    public const MANUAL = <<<'HTML'
    <html>
        <head>
            <!-- ... -->

            @tallStackUiScripts
            @tallStackUiStyles
            @vite(['resources/css/app.css', 'resources/js/app.js'])

            <!-- ... -->
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

        './vendor/tallstackui/tallstackui/resources/views/**/*.blade.php',
        './vendor/tallstackui/tallstackui/src/**/*.php',
    ],

    // ...
    HTML;

    public const BUILD = <<<'HTML'
    npm run build && php artisan optimize:clear
    HTML;
}
