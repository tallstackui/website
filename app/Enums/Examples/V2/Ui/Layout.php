<?php

namespace App\Enums\Examples\V2\Ui;

class Layout
{
    public const LAYOUT = <<<'HTML'
    <body>

        <x-layout> <!-- [tl! focus:22] -->
            <x-slot:header>
                <x-layout.header>
                    <x-slot:right>
                        <x-dropdown text="Hello, {{ auth()->user()->name }}!">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown.items text="Logout" onclick="event.preventDefault(); this.closest('form').submit();" />
                            </form>
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
        <x-layout.header> 
            <!-- ... -->
        </x-layout.header>
    </x-slot:header>
    HTML;

    public const HEADER_WITHOUT_BUTTON = <<<'HTML'
    <x-layout.header without-mobile-button>
        <!-- ... -->
    </x-layout.header>
    HTML;

    public const JAVASCRIPT = <<<'HTML'
    <!-- Opening -->
    <button x-on:click="$dispatch('tallstackui-menu-mobile', { status : true })">
        Open Mobile    
    </button>
    
    <!-- Closing -->
    <button x-on:click="$dispatch('tallstackui-menu-mobile', { status : false })">
        Close Mobile    
    </button>
    HTML;

    public const MENU = <<<'HTML'
    <x-slot:menu>
        <x-side-bar>
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
        
        <!-- ... -->
    </div>
    HTML;

    public const FOOTER = <<<'HTML'
    <div x-data="{ tallStackUiMenuMobile : false }" x-on:tallstackui-menu-mobile.window="tallStackUiMenuMobile = $event.detail.status">
        <!-- ... -->

        @if ($footer) {{-- [tl! focus:2] --}} 
            {{ $footer }}
        @endif
    </div>
    HTML;

    public const HEADER_SLOTS = <<<'HTML'
    <x-layout.header>  
        <x-slot:left>
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

    public const SIDEBAR = <<<'HTML'
    <x-side-bar>
        <!-- ... -->
    </x-side-bar>
    HTML;

    public const SIDEBAR_OPTIONS = <<<'HTML'
    <x-side-bar smart navigate>
        <x-slot:brand>
            <div class="flex justify-center">
                <img src="..." />
            </div>
        </x-slot:brand>

        <!-- side-bar items goes here... -->
    </x-side-bar>
    HTML;

    public const ITEM = <<<'HTML'
    <!-- Individual -->
    <x-side-bar.item text="Home" icon="home" :route="route('dashboard')" />

    <!-- Grouped -->
    <x-side-bar.item text="Admin">
        <x-side-bar.item text="Home" icon="home" :route="route('admin.dashboard')" />
    </x-side-bar.item>
    HTML;

    public const ATTRIBUTES = <<<'HTML'
    <x-side-bar.item text="Admin" opened>
        <x-side-bar.item text="Home" icon="home" current :route="route('admin.dashboard')" />
    </x-side-bar.item>
    HTML;

    public const MATCH = <<<'HTML'
    <x-side-bar.item text="Admin" :opened="route()->requestIs('admin.*')">
        <x-side-bar.item text="Home" 
                         icon="home" 
                         :current="route()->requestIs('admin.dashboard')" 
                         :route="route('admin.dashboard')" />
    </x-side-bar.item>
    HTML;

    public const SEPARATOR = <<<'HTML'
    <x-side-bar.item text="Home" icon="home" :route="route('dashboard')" />
    <x-side-bar.separator text="Configurations" /> <!-- [tl! focus] -->
    <x-side-bar.item text="Settings" icon="cog" :route="route('settings')" />
    HTML;

    public const STYLES = <<<'HTML'
    <!-- Default, only text -->
    <x-side-bar.separator text="Configurations" />

    <!-- Line separator between text -->
    <x-side-bar.separator text="Configurations" line />

    <!-- Line separator at right -->
    <x-side-bar.separator text="Configurations" line-right />
    HTML;

    public const PERSONALIZATION_LAYOUT = <<<'HTML'
    TallStackUi::personalize()
        ->layout()
        ->block('block', 'classes');
    HTML;

    public const PERSONALIZATION_LAYOUT_HEADER = <<<'HTML'
    TallStackUi::personalize()
        ->layout('header')
        ->block('block', 'classes');
    HTML;

    public const PERSONALIZATION_SIDEBAR = <<<'HTML'
    TallStackUi::personalize()
        ->sideBar()
        ->block('block', 'classes');
    HTML;

    public const PERSONALIZATION_SIDEBAR_ITEM = <<<'HTML'
    TallStackUi::personalize()
        ->sideBar('item')
        ->block('block', 'classes');
    HTML;

    public const PERSONALIZATION_SIDEBAR_SEPARATOR = <<<'HTML'
    TallStackUi::personalize()
        ->sideBar('separator')
        ->block('block', 'classes');
    HTML;
}
