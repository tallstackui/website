<?php

namespace App\Enums\Examples\V2;

class Installation
{
    public const INSTALLATION = <<<'HTML'
    composer require tallstackui/tallstackui:^2.0@beta
    HTML;

    public const LAYOUT = <<<'HTML'
    <html>
        <head>
            <!-- ... -->

            <tallstackui:script /> {{-- [tl! highlight:1] --}}
            @livewireStyles
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

    public const BUILD = <<<'HTML'
    npm run build && php artisan optimize:clear
    HTML;
}
