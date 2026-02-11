<?php

namespace App\Enums\Examples\V3\Helpers;

class DarkTheme
{
    public const TAILWINDCSS_V3 = <<<'HTML'
    export default {
        darkMode: 'class', // [tl! highlight]

        // ...
    }
    HTML;

    public const TAILWINDCSS_V4 = <<<'HTML'
    @custom-variant dark (&:where(.dark, .dark *));
    HTML;

    public const HELPER = <<<'HTML'
    <html ... x-data="tallstackui_darkTheme()"> {{-- [tl! highlight] --}}
        <!-- ... -->
    </html>
    HTML;

    public const BODY = <<<'HTML'
    <body x-bind:class="{ 'dark bg-gray-700': darkTheme, 'bg-white': !darkTheme }"> {{-- [tl! highlight] --}}
        <!-- ... -->
    </body>
    HTML;

    public const CUSTOMIZED = <<<'HTML'
    <html ... x-data="tallstackui_darkTheme({ name: 'other-name' })"> {{-- [tl! highlight] --}}
        <!-- ... -->
    </html>
    HTML;

    public const DARK = <<<'HTML'
    <html ... x-data="tallstackui_darkTheme({ default: 'dark' })"> {{-- [tl! highlight] --}}
        <!-- ... -->
    </html>
    HTML;

    public const BUTTON = <<<'HTML'
    <x-button x-on:click="darkTheme = !darkTheme">Light / Dark Mode</x-button>
    HTML;

    public const ASSETS = <<<'HTML'
    npm run build && php artisan optimize:clear
    HTML;

    public const EXAMPLE = <<<'HTML'
    <p class="text-gray-700 dark:text-white">Hello World</p>
    HTML;
}
