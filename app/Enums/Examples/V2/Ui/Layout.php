<?php

namespace App\Enums\Examples\V2\Ui;

class Layout
{
    public const HTML = <<<'HTML'
    <html class="h-full">
    HTML;

    public const BODY = <<<'HTML'
    <body class="h-full" x-cloak>
    HTML;

    public const LAYOUT = <<<'HTML'
    <body class="h-full">

        <x-layout> <!-- [tl! focus:23] -->
            <x-slot:header>
                <x-layout.header>
                    <x-slot:left>
                        <x-theme-switch />
                    </x-slot:left>
                    <x-slot:right>
                        <x-dropdown text="Hello, John!" position="bottom-start">
                            <x-dropdown.items text="Settings" />
                        </x-dropdown>
                    </x-slot:right>
                </x-layout.header>
            </x-slot:header>

            <x-slot:menu>
                <x-side-bar>
                    <x-side-bar.item text="Home" icon="home" :route="route('dashboard')" />
                    <x-side-bar.item text="Settings" icon="cog" :route="route('settings')" />
                </x-side-bar>
            </x-slot:menu>

            {{ $slot }}
        </x-layout>

        @livewireScripts
    </body>
    HTML;

    public const HEADER = <<<'HTML'
    <x-slot:header>
        <x-layout.header>  <!-- [tl! highlight:2] -->
            <!-- ... -->
        </x-layout.header>
    </x-slot:header>
    HTML;

    public const HEADER_WITHOUT_MOBILE_BUTTON = <<<'HTML'
    <x-slot:header>
        <x-layout.header without-mobile-button>  <!-- [tl! highlight] -->
            <!-- ... -->
        </x-layout.header>
    </x-slot:header>
    HTML;

    public const MENU = <<<'HTML'
    <x-slot:menu>
        <x-side-bar> <!-- [tl! highlight:2] -->
            <!-- ... -->
        </x-side-bar>
    </x-slot:menu>
    HTML;

    public const TOP = <<<'HTML'
    <div x-data="{ tallStackUiMenuMobile : false }" x-on:tallstackui-menu-mobile.window="tallStackUiMenuMobile = $event.detail.status">
        @if ($top) {{-- [tl! focus:2] --}} 
            {{ $top }}
        @endif
        @if ($menu)
            {{ $menu }}
        @endif
        <div class="{{ $personalize['wrapper.first'] }}">
            <div class="{{ $personalize['wrapper.second'] }}">
                @if ($header)
                    {{ $header }}
                @endif
                <main class="{{ $personalize['main'] }}">
                    {{ $slot }}
                </main>
            </div>
        </div>
        @if ($footer)
            {{ $footer }}
        @endif
    </div>
    HTML;

    public const FOOTER = <<<'HTML'
    <div x-data="{ tallStackUiMenuMobile : false }" x-on:tallstackui-menu-mobile.window="tallStackUiMenuMobile = $event.detail.status">
        @if ($top)
            {{ $top }}
        @endif
        @if ($menu)
            {{ $menu }}
        @endif
        <div class="{{ $personalize['wrapper.first'] }}">
            <div class="{{ $personalize['wrapper.second'] }}">
                @if ($header)
                    {{ $header }}
                @endif
                <main class="{{ $personalize['main'] }}">
                    {{ $slot }}
                </main>
            </div>
        </div>
        @if ($footer) {{-- [tl! focus:2] --}} 
            {{ $footer }}
        @endif
    </div>
    HTML;

    public const HEADER_SLOTS = <<<'HTML'
    <x-layout.header>  
        <x-slot:left> <!-- [tl! highlight:10] -->
            <!-- ... -->
        </x-slot:left>

        <x-slot:middle>
            <!-- ... -->
        </x-slot:middle>

        <x-slot:right>
            <!-- ... -->
        </x-slot:right>
    </x-layout.header>
    HTML;

    public const BRAND = <<<'HTML'
    <x-side-bar>
        <x-slot:brand> <!-- [tl! highlight:2] -->
            <!-- ... -->
        </x-slot:brand>
    </x-side-bar>
    HTML;

    public const ITEM = <<<'HTML'
    <x-side-bar>
        <x-side-bar.item text="Home" icon="home" :route="route('dashboard')" /> <!-- [tl! focus:1] -->
        <x-side-bar.item text="Settings" icon="cog" :route="route('settings')" />
    </x-side-bar>
    HTML;

    public const GROUPED = <<<'HTML'
    <x-side-bar>
        <x-side-bar.item text="Others"> <!-- [tl! focus:3] -->
            <x-side-bar.item text="Home" icon="home" :route="route('dashboard')" />
            <x-side-bar.item text="Settings" icon="cog" :route="route('settings')" />
        </x-side-bar.item>
    </x-side-bar>
    HTML;

    public const SEPARATOR = <<<'HTML'
    <x-side-bar>
        <x-side-bar.item text="Home" icon="home" :route="route('dashboard')" />
        <x-side-bar.separator text="Others" /> <!-- [tl! focus] -->
        <x-side-bar.item text="Settings" icon="cog" :route="route('settings')" />
    </x-side-bar>
    HTML;

    public const SEPARATOR_STYLES = <<<'HTML'
    <x-side-bar.separator text="Others" />
    <x-side-bar.separator text="Others" line />
    <x-side-bar.separator text="Others" line-right />
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->layout()
        ->block('block', 'classes');
    HTML;
}
