<?php

declare(strict_types=1);

namespace App\Enums\Examples;

class ComponentPrefix
{
    public const string CONFIGURATION = <<<'HTML'
    <?php

    use TallStackUi\Components;

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
        | For example, prefixing as 'ts-', the `alert` usage will be: '<x-ts-alert />'
        */
        'prefix' => env('TALLSTACKUI_PREFIX'), // [tl! remove]
        'prefix' => 'ts-', // [tl! add]

        // ...
    HTML;

    public const string PUBLISH = <<<'HTML'
    php artisan vendor:publish --tag=tallstackui.config
    HTML;

    public const string ENVIRONMENT = <<<'HTML'
    TALLSTACKUI_PREFIX="ts-"
    HTML;

    public const string COMMAND = <<<'HTML'
    php artisan tallstackui:setup-prefix
    HTML;

    public const string EXAMPLES = <<<'HTML'
    <!-- Prefixing: "ts-" -->

    <x-alert /> {{-- [tl! remove] --}}
    <x-ts-alert /> {{-- [tl! add] --}}

    <x-modal /> {{-- [tl! remove] --}}
    <x-ts-modal /> {{-- [tl! add] --}}

    <!-- Prefixing: "foo" -->

    <x-alert /> {{-- [tl! remove] --}}
    <x-fooalert /> {{-- [tl! add] --}}

    <x-modal /> {{-- [tl! remove] --}}
    <x-foomodal /> {{-- [tl! add] --}}
    HTML;
}
