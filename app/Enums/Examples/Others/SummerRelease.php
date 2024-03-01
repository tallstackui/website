<?php

namespace App\Enums\Examples\Others;

class SummerRelease
{
    public const OLD_ICONS_CONFIG = <<<'HTML'
    /*
    |--------------------------------------------------------------------------
    | Icon Style
    |--------------------------------------------------------------------------
    |
    | Control the default icon style (Allowed: solid, outline)
    */
    'icon' => 'solid',
    HTML;

    public const NEW_ICONS_CONFIG = <<<'HTML'
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
    ]
    HTML;

    public const DATE = <<<'HTML'
    <!-- Single Selection -->
    <x-date format="DD MMMM YYYY" />

    <!-- Range Selection -->
    <x-date range format="DD MMMM YYYY" />

    <!-- Multiple Selection -->
    <x-date multiple format="DD MMMM YYYY" />
    HTML;

    public const TIME = <<<'HTML'
    <!-- Format 12 Hours -->
    <x-time />
    
    <!-- Format 24 Hours -->
    <x-time format="24" />
    HTML;

    public const STEP = <<<'HTML'
    <x-step selected="1" helpers simple>
        <x-step.items step="1"
                      title="Starting"
                      description="Tall">
            Step one...
        </x-step.items>
        <x-step.items step="2"
                      title="Advancing"
                      description="Stack">
            Step two...
        </x-step.items>
        <x-step.items step="3"
                      title="Finishing"
                      description="UI 🚀"
                      completed>
            Step three... <b>finished!</b>
        </x-step.items>
    </x-step>
    HTML;

    public const STATS = <<<'HTML'
    <div class="grid grid-cols-3 gap-2">
        <div class="col-span-full sm:col-span-1">
            <x-stats number="50"
                     title="Components"
                     footer="TallStackUI goals"
                     icon="wrench-screwdriver"
                     outline
                     animated
                     increase />
        </div>
        <div class="col-span-full sm:col-span-1">
            <x-stats number="0"
                     title="Weeks W/O Updates"
                     footer="TallStackUI has frequent updates"
                     icon="arrow-path"
                     outline
                     animated
                     decrease />
        </div>
        <div class="col-span-full sm:col-span-1">
            <x-stats number="100000"
                     title="Downloads"
                     footer="TallStackUI is growing fast"
                     icon="arrow-down-on-square"
                     outline
                     animated
                     increase />
        </div>
    </div>
    HTML;

    public const THEME_SWITCH = <<<'HTML'
    <x-theme-switch />
    HTML;
}
