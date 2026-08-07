<?php

namespace App\Enums\Examples\Helpers;

class DarkTheme
{
    public const string TAILWINDCSS = <<<'HTML'
    @custom-variant dark (&:where(.dark, .dark *));
    HTML;

    public const string HELPER = <<<'HTML'
    <html ... x-data="tallstackui_darkTheme()"> {{-- [tl! highlight] --}}
        <!-- ... -->
    </html>
    HTML;

    public const string BODY = <<<'HTML'
    <body x-bind:class="{ 'dark bg-gray-700': darkTheme, 'bg-white': !darkTheme }"> {{-- [tl! highlight] --}}
        <!-- ... -->
    </body>
    HTML;

    public const string CUSTOMIZED = <<<'HTML'
    <html ... x-data="tallstackui_darkTheme({ name: 'other-name' })"> {{-- [tl! highlight] --}}
        <!-- ... -->
    </html>
    HTML;

    public const string DARK = <<<'HTML'
    <html ... x-data="tallstackui_darkTheme({ default: 'dark' })"> {{-- [tl! highlight] --}}
        <!-- ... -->
    </html>
    HTML;

    public const string BUTTON = <<<'HTML'
    <x-button x-on:click="darkTheme = !darkTheme">Light / Dark Mode</x-button>
    HTML;

    public const string ASSETS = <<<'HTML'
    npm run build && php artisan optimize:clear
    HTML;

    public const string EXAMPLE = <<<'HTML'
    <p class="text-gray-700 dark:text-white">Hello World</p>
    HTML;
}
