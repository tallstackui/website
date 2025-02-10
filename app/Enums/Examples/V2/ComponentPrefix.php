<?php

namespace App\Enums\Examples\V2;

class ComponentPrefix
{
    public const CONFIGURATION = <<<'HTML'
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
        'prefix' => 'ts-', // [tl! highlight]

    // ...
    HTML;

    public const ENVIRONMENT = <<<'HTML'
    TALLSTACKUI_PREFIX="ts-"
    HTML;

    public const COMMAND = <<<'HTML'
    php artisan tallstackui:setup-prefix
    HTML;

    public const EXAMPLES = <<<'HTML'
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
}
