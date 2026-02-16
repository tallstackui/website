<?php

namespace App\Enums\Examples\V1;

class Installation
{
    public const string INSTALLATION = <<<'HTML'
    composer require tallstackui/tallstackui
    HTML;

    public const string LAYOUT = <<<'HTML'
    <html>
        <head>
            <!-- ... -->

            <tallstackui:script /> {{-- [tl! highlight:1] --}}
            @livewireStyles
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        </head>
    </html>
    HTML;

    public const string TAILWINDCSS = <<<'HTML'
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

    public const string PREFIXING = <<<'HTML'
    <?php

    use TallStackUi\View\Components;

    return [
        /*
        |--------------------------------------------------------------------------
        | Prefix
        |--------------------------------------------------------------------------
        |
        | Control a prefix for the TallStackUI components. The term here will be used
        | to prefix all TallStackUI components. This is useful to avoid conflicts
        | with other components registered by other libraries or created by yourself.
        |
        | For example: prefixing as 'ts-', the `alert` usage will be: '<x-ts-alert />'
        */
        'prefix' => null, // [tl! highlight]

    // ...
    HTML;

    public const string PREFIX_EXAMPLES = <<<'HTML'
    <!-- Prefixing: "ts-" -->

    <x-alert /> {{-- [tl! remove] --}}
    <x-ts-alert /> {{-- [tl! add] --}}

    <x-modal /> {{-- [tl! remove] --}}
    <x-ts-modal /> {{-- [tl! add] --}}

    <x-slide /> {{-- [tl! remove] --}}
    <x-ts-slide /> {{-- [tl! add] --}}

    <x-input /> {{-- [tl! remove] --}}
    <x-ts-input /> {{-- [tl! add] --}}
    HTML;

    public const string PREFIX_COMMAND = <<<'HTML'
    php artisan tallstackui:setup-prefix
    HTML;

    public const string ALPINE = <<<'HTML'
    <html>
        <head>
            <!-- ... -->

            <tallstackui:script />
            @livewireStyles
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        </head>
        <body>
            <!-- ... -->

            @livewireScripts {{-- [tl! focus, highlight] --}}
        </body>
    </html>
    HTML;

    public const string BUILD = <<<'HTML'
    npm run build && php artisan optimize:clear
    HTML;
}
