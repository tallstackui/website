<?php

namespace App\Enums\Examples\Others;

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
          x-data="tallstackui_darkTheme('other-name')" {{-- [tl! focus] --}}
          ...>
        <!-- ... -->
    </html>
    HTML;

    public const INITIALIZE_AS_TRUE = <<<'HTML'
    <html ...
          x-data="tallstackui_darkTheme('other-name', true)" {{-- [tl! focus, highlight] --}}
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
    <div class="bg-white dark:gray-800">Hello World</div>
    HTML;
}
