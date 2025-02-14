<?php

namespace App\Enums\Examples\V2\Ui;

class Icon
{
    public const INSTALLATION = <<<'HTML'
    composer require owenvoke/blade-fontawesome
    HTML;

    public const ENV = <<<'HTML'
    TALLSTACKUI_ICON_TYPE="owenvoke/blade-fontawesome"
    HTML;

    public const CLEAN = <<<'HTML'
    php artisan optimize:clear
    HTML;

    public const OWENVOKE = <<<'HTML'
    <x-icon name="fas.cloud" class="w-6 h-6 text-gray-500"/>

    <!-- This way would also work: -->
    <x-fas-cloud class="w-6 h-6 text-gray-500"/>
    HTML;

    public const SYMBOL = <<<'HTML'
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

    public const BASIC = <<<'HTML'
    <x-icon name="users" class="h-5 w-5"/>
    <x-icon name="clipboard" class="h-5 w-5"/>
    HTML;

    public const VARIATIONS = <<<'HTML'
    <!-- Default, Heroicons: outline -->
    <x-icon name="users" outline />

    <!-- FontAwesome, via owenvoke/blade-fontawesome -->
    <x-icon name="far.user" /> <!-- far -->
    <x-icon name="fas.user" /> <!-- fas -->
    HTML;

    public const LEFT_RIGHT = <<<'HTML'
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

    public const GUIDE = <<<'HTML'
    // ...
    
    'custom' => [
        /*
        |----------------------------------
        | Custom icons guide.
        |----------------------------------
        |
        | These icons are used internally in the components. When using custom
        | icons via BladeUi you can optionally change the internal icons to custom
        | icons, causing this to reflect new icon looks for the internal components.
        */
        'guide' => [
            // ...

            'arrow-trending-down' => null,
            'arrow-up-tray' => null,
            'bars-4' => null, // [tl! remove, focus:1]
            'bars-4' => 'far.chart-bar', // [tl! add]
            
            // ...
        ],
    ],

    // ...
    HTML;
}
