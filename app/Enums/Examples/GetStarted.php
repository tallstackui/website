<?php

namespace App\Enums\Examples;

class GetStarted
{
    public const INSTALLATION = <<<'HTML'
    composer require tallstackui/tallstackui
    HTML;

    public const LAYOUT = <<<'HTML'
    <html>
        <head>
            <tallstackui:scripts />
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        </head>
    </html>
    HTML;

    public const COMMAND = <<<'HTML'
    php artisan tallstackui:install
    HTML;
}
