<?php

namespace App\Enums\Examples\Ui;

class Icon
{
    public const BASIC = <<<'HTML'
    <x-icon name="users" class="h-5 w-5"/>
    <x-icon name="clipboard" class="h-5 w-5"/>
    HTML;

    public const VARIATIONS = <<<'HTML'
    <!-- HeroIcons -->
    <x-icon name="users" outline />

    <!-- PhosphorIcons -->
    <x-icon name="users" thin />
    <x-icon name="users" light />
    <x-icon name="users" regular />
    <x-icon name="users" bold />
    <x-icon name="users" duotone />

    <!-- Google -->
    <x-icon name="group" />
    <x-icon name="group-tt" />
    <x-icon name="group-s" />
    <x-icon name="group-r" />
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

    public const OLD_CONFIGURATION = <<<'HTML'
    /*
    |--------------------------------------------------------------------------
    | Icon Style
    |--------------------------------------------------------------------------
    |
    | Control the default icon style (Allowed: solid, outline)
    */
    'icon' => 'solid',
    HTML;

    public const NEW_CONFIGURATION = <<<'HTML'
    /*
    |--------------------------------------------------------------------------
    | Icon Style
    |--------------------------------------------------------------------------
    |
    | MAKE SURE TO READ THE DOCS BEFORE CHANGE THIS CONFIGURATION HERE.
    */
    'icons' => [
        /*
        |----------------------------------
        | Default and in-use icon type.
        |----------------------------------
        | Allowed: heroicons, phosphoricons, google.
        */
        'type' => 'heroicons',

        /*
        |----------------------------------
        | Default and in-use icon style.
        |----------------------------------
        | Allowed:
        |
        | Heroicons: solid, outline
        | Phosphoricons: thin, light, regular, bold, duotone
        | Google: default
        */
        'style' => 'solid',

        /*
        |----------------------------------
        | Flush unused icons pack.
        |----------------------------------
        |
        | To avoid the accumulation of unused files, the icon packs that are
        | not in use can be deleted automatically when new icons are set.
        */
        'flush' => true,
    ],
    HTML;

    public const START_SETUP_ICON_LIBRARY = <<<'HTML'
    /*
    |--------------------------------------------------------------------------
    | Icon Style
    |--------------------------------------------------------------------------
    |
    | MAKE SURE TO READ THE DOCS BEFORE CHANGE THIS CONFIGURATION HERE.
    */
    'icons' => [
        /*
        |----------------------------------
        | Default and in-use icon type.
        |----------------------------------
        | Allowed: heroicons, phosphoricons, google. [tl! highlight]
        */
        'type' => 'heroicons', // [tl! remove]
        'type' => 'phosphoricons', // [tl! add]

        /*
        |----------------------------------
        | Default and in-use icon style.
        |----------------------------------
        | Allowed:
        |
        | Heroicons: solid, outline
        | Phosphoricons: thin, light, regular, bold, duotone [tl! highlight]
        | Google: default
        */
        'style' => 'solid', // [tl! remove]
        'style' => 'regular', // [tl! add]

        // ...
    ],
    HTML;

    public const COMMAND_SETUP_ICON = <<<'HTML'
    php artisan tallstackui:setup-icon
    HTML;

    public const COMPOSER_HOOK = <<<'HTML'
    // ...
    
    "scripts": {
        "post-update-cmd": [
            "@php artisan vendor:publish --tag=laravel-assets --ansi --force",
            "@php artisan tallstackui:setup-icon --force --ansi", // [tl! add]
        ],
    },

    // ...
    HTML;
}
