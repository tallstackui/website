<?php

namespace App\Enums\Examples\V1\Ui;

class Icon
{
    public const string BASIC = <<<'HTML'
    <x-icon name="users" class="h-5 w-5"/>
    <x-icon name="clipboard" class="h-5 w-5"/>
    HTML;

    public const string VARIATIONS = <<<'HTML'
    <!-- HeroIcons -->
    <x-icon name="users" outline />

    <!-- PhosphorIcons -->
    <x-icon name="users" thin />
    <x-icon name="users" light />
    <x-icon name="users" regular />
    <x-icon name="users" bold />
    <x-icon name="users" duotone />

    <!-- Google --> 
    <!-- Normal, tt: duotone, s: sharp, r: rounded -->
    <x-icon name="group" />
    <x-icon name="group-tt" />
    <x-icon name="group-s" />
    <x-icon name="group-r" />

    <!-- TablerIcons, only support outline -->
    <x-icon name="users" />
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

    public const string OLD_CONFIGURATION = <<<'HTML'
    /*
    |--------------------------------------------------------------------------
    | Icon Style
    |--------------------------------------------------------------------------
    |
    | Control the default icon style (Allowed: solid, outline)
    */
    'icon' => 'solid',
    HTML;

    public const string NEW_CONFIGURATION = <<<'HTML'
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
        | Allowed: heroicons, phosphoricons, google, tablericons.
        */
        'type' => env('TALLSTACKUI_ICON_TYPE', 'heroicons'),

        /*
        |----------------------------------
        | Default and in-use icon style.
        |----------------------------------
        | Allowed:
        |
        | Heroicons: solid, outline
        | Phosphoricons: thin, light, regular, bold, duotone
        | Google: default
        | Tablericons: default
        */
        'style' => env('TALLSTACKUI_ICON_STYLE', 'solid'),

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

    public const string START_SETUP_ICON_LIBRARY = <<<'HTML'
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
        | Allowed: heroicons, phosphoricons, google, tablericons. [tl! highlight]
        */
        'type' => env('TALLSTACKUI_ICON_TYPE', 'heroicons'), // [tl! remove]
        'type' => env('TALLSTACKUI_ICON_TYPE', 'phosphoricons'), // [tl! add]

        /*
        |----------------------------------
        | Default and in-use icon style.
        |----------------------------------
        | Allowed:
        |
        | Heroicons: solid, outline
        | Phosphoricons: thin, light, regular, bold, duotone [tl! highlight]
        | Google: default
        | Tablericons: default
        */
        'style' => env('TALLSTACKUI_ICON_STYLE', 'solid'), // [tl! remove]
        'style' => env('TALLSTACKUI_ICON_STYLE', 'regular'), // [tl! add]

        // ...
    ],
    HTML;

    public const string COMMAND_SETUP_ICON = <<<'HTML'
    php artisan tallstackui:setup-icon
    HTML;

    public const string COMPOSER_HOOK = <<<'HTML'
    "scripts": {
        "post-autoload-dump": [
            "Illuminate\\Foundation\\ComposerScripts::postAutoloadDump",
            "@php artisan package:discover --ansi",
            "@php artisan tallstackui:setup-icon --force --ansi" // [tl! add]
        ],
    }
    HTML;
}
