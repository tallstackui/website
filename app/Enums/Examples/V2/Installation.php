<?php

namespace App\Enums\Examples\V2;

class Installation
{
    public const string BREEZE = <<<'HTML'
    composer require laravel/breeze --dev
    HTML;

    public const string BREEZE_INSTALLATION = <<<'HTML'
    php artisan breeze:install
    HTML;

    public const string INSTALLATION = <<<'HTML'
    composer require tallstackui/tallstackui:^2.0.0
    HTML;

    public const string LAYOUT = <<<'HTML'
    <html>
        <head>
            <!-- ... -->

            <tallstackui:script /> {{-- [tl! highlight:1, focus:1] --}}
            @livewireStyles
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        </head>
    </html>
    HTML;

    public const TAILWINDCSS_V3 = <<<'HTML'
    import defaultTheme from 'tailwindcss/defaultTheme';
    import forms from '@tailwindcss/forms'; // [tl! focus, add]

    /** @type {import('tailwindcss').Config} */
    export default {
        presets: [ // [tl! focus:2]
            require('./vendor/tallstackui/tallstackui/tailwind.config.js') // [tl! add]
        ],

        content: [ // [tl! focus:5]
            './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
            './storage/framework/views/*.php',
            './resources/views/**/*.blade.php',
            './vendor/tallstackui/tallstackui/src/**/*.php', // [tl! add]
        ],

        theme: {
            extend: {
                fontFamily: {
                    sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                },
            },
        },

        plugins: [ // [tl! focus:2]
            forms // [tl! add]
        ],
    };
    HTML;

    public const TAILWINDCSS_V4 = <<<'HTML'
    @import "tailwindcss";
    @import '../../vendor/tallstackui/tallstackui/css/v4.css'; /* [tl! add, focus] */

    @plugin '@tailwindcss/forms'; /* [tl! add, focus] */

    @source '../../vendor/tallstackui/tallstackui/**/*.php'; /* [tl! add, focus] */
    @source '../views';
    @source '../../vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php';
    HTML;

    public const string BUILD = <<<'HTML'
    npm run build && php artisan optimize:clear
    HTML;
}
