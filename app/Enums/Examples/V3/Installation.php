<?php

namespace App\Enums\Examples\V3;

class Installation
{
    public const string BREEZE = <<<'HTML'
    composer require laravel/breeze --dev
    HTML;

    public const string BREEZE_INSTALLATION = <<<'HTML'
    php artisan breeze:install
    HTML;

    public const string INSTALLATION = <<<'HTML'
    composer require tallstackui/tallstackui:^3.0.0
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

    public const string TAILWINDCSS_V4 = <<<'HTML'
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
