<?php

namespace App\Enums\Examples\V2\Helpers;

class DarkTheme
{
    public const TAILWINDCSS = <<<'HTML'
    export default {
        darkMode: 'class', // [tl! highlight]

        // ...
    }
    HTML;

    public const HELPER = <<<'HTML'
    <html ...
          x-data="tallstackui_darkTheme()" {{-- [tl! highlight:1] --}}
          x-bind:class="{ 'dark bg-gray-700': darkTheme, 'bg-white': !darkTheme }">
        <!-- ... -->
    </html>
    HTML;

    public const CUSTOMIZED = <<<'HTML'
    <html ...
          x-data="tallstackui_darkTheme({ name: 'other-name' })" {{-- [tl! focus] --}}
          ...>
        <!-- ... -->
    </html>
    HTML;

    public const DARK = <<<'HTML'
    <html ...
          x-data="tallstackui_darkTheme({ dark: true })" {{-- [tl! focus] --}}
          ...>
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
