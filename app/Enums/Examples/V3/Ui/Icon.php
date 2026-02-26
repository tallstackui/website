<?php

namespace App\Enums\Examples\V3\Ui;

class Icon
{
    public const string INSTALLATION = <<<'HTML'
    composer require owenvoke/blade-fontawesome
    HTML;

    public const string ENV = <<<'HTML'
    TALLSTACKUI_ICON_TYPE="owenvoke/blade-fontawesome"
    HTML;

    public const string CLEAN = <<<'HTML'
    php artisan optimize:clear
    HTML;

    public const string OWENVOKE = <<<'HTML'
    <x-icon name="fas.cloud" class="w-6 h-6 text-gray-500"/>

    <!-- This way would also work: -->
    <x-fas-cloud class="w-6 h-6 text-gray-500"/>
    HTML;

    public const string SYMBOL = <<<'HTML'
    <!-- Assuming you have installed: secondnetwork/blade-tabler-icons -->
    <x-icon name="tabler.sun" />
    <x-icon name="tabler.moon" />
    <x-icon name="tabler.a-b" />
    <x-icon name="tabler.users" />
    <x-icon name="tabler.brand-vimeo" />

    <!-- Assuming you have installed: owenvoke/blade-fontawesome -->
    <x-icon name="far.moon" />
    <x-icon name="fas.moon" />
    <x-icon name="fab.facebook" />
    HTML;

    public const string BASIC = <<<'HTML'
    <x-icon name="users" class="h-5 w-5"/>
    <x-icon name="clipboard" class="h-5 w-5"/>
    HTML;

    public const string VARIATIONS = <<<'HTML'
    <!-- Default, Heroicons: outline -->
    <x-icon name="users" outline />

    <!-- FontAwesome, via owenvoke/blade-fontawesome -->
    <x-icon name="far.user" /> <!-- far -->
    <x-icon name="fas.user" /> <!-- fas -->
    HTML;

    public const string LEFT_RIGHT = <<<'HTML'
    <x-icon name="users" class="h-5 w-5">
        <x-slot:left>
            Users
        </x-slot:left>
    </x-icon>
    <x-icon name="cog" class="h-5 w-5">
        <x-slot:right>
            Settings
        </x-slot:right>
    </x-icon>
    HTML;

    public const string GUIDE = <<<'HTML'
    'icon' => [
        Components\Icon\Component::class,
        [
            // ...

            'custom' => [
                /*
                |----------------------------------
                | Custom icons guide.
                |----------------------------------
                |
                | These icons are used internally in the components. When using custom
                | icons via BladeUI or local SVG files, you can change the internal icons
                | to custom icons, causing this to reflect new icon looks for the internal
                | components. For local SVGs, map keys to your SVG filenames. If null,
                | uses the key as filename (e.g., 'check-circle' → check-circle.blade.php).
                */
                'guide' => [
                    // ...

                    'bars-4' => null, // [tl! remove, focus:1]
                    'bars-4' => 'far.chart-bar', // [tl! add]

                    // ...
                ],
            ],
        ],
    ],
    HTML;

    public const string CUSTOM_ENV = <<<'HTML'
    TALLSTACKUI_ICON_TYPE="components/svg"
    HTML;

    public const string CUSTOM_BLADE = <<<'HTML'
    {{-- /resources/views/components/svg/custom.blade.php --}}

    <svg {{ $attributes }} xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
      <path fill-rule="evenodd" d="M4.125 3C3.089 3 2.25 3.84 2.25 4.875V18a3 3 0 0 0 3 3h15a3 3 0 0 1-3-3V4.875C17.25 3.839 16.41 3 15.375 3H4.125ZM12 9.75a.75.75 0 0 0 0 1.5h1.5a.75.75 0 0 0 0-1.5H12Zm-.75-2.25a.75.75 0 0 1 .75-.75h1.5a.75.75 0 0 1 0 1.5H12a.75.75 0 0 1-.75-.75ZM6 12.75a.75.75 0 0 0 0 1.5h7.5a.75.75 0 0 0 0-1.5H6Zm-.75 3.75a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5H6a.75.75 0 0 1-.75-.75ZM6 6.75a.75.75 0 0 0-.75.75v3c0 .414.336.75.75.75h3a.75.75 0 0 0 .75-.75v-3A.75.75 0 0 0 9 6.75H6Z" clip-rule="evenodd"/>
      <path d="M18.75 6.75h1.875c.621 0 1.125.504 1.125 1.125V18a1.5 1.5 0 0 1-3 0V6.75Z"/>
    </svg>
    HTML;

    public const string CUSTOM_CONFIG = <<<'HTML'
    'icon' => [
        Components\Icon\Component::class,
        [
            // ...

            'custom' => [
                'guide' => [

                    // ...

                    'x-mark' => null, // [tl! remove]
                    'x-mark' => 'custom', // [tl! add]
                ],
            ],
        ],
    ],
    HTML;
}
