<?php

namespace App\Enums\Examples\Ui;

class Layout
{
    public const string LAYOUT = <<<'HTML'
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

    public const string HEADER = <<<'HTML'
    <x-slot:header>
        <x-layout.header>
            <!-- ... -->
        </x-layout.header>
    </x-slot:header>
    HTML;

    public const string HEADER_WITHOUT_BUTTON = <<<'HTML'
    <x-layout.header without-mobile-button>
        <!-- ... -->
    </x-layout.header>
    HTML;

    public const string JAVASCRIPT = <<<'HTML'
    <!-- Opening -->
    <button x-on:click="$dispatch('tallstackui-menu-mobile', { status : true })">
        Open Mobile
    </button>

    <!-- Closing -->
    <button x-on:click="$dispatch('tallstackui-menu-mobile', { status : false })">
        Close Mobile
    </button>
    HTML;

    public const string MENU = <<<'HTML'
    <x-slot:menu>
        <x-side-bar>
            <!-- ... -->
        </x-side-bar>
    </x-slot:menu>
    HTML;

    public const string TOP = <<<'HTML'
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

    public const string FOOTER = <<<'HTML'
    <div x-data="{ tallStackUiMenuMobile : false }" x-on:tallstackui-menu-mobile.window="tallStackUiMenuMobile = $event.detail.status">
        <!-- ... -->

        @if ($footer) {{-- [tl! focus:2] --}}
            {{ $footer }}
        @endif
    </div>
    HTML;

    public const string HEADER_SLOTS = <<<'HTML'
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

    public const string SIDEBAR = <<<'HTML'
    <x-side-bar>
        <!-- ... -->
    </x-side-bar>
    HTML;

    public const string SIDEBAR_OPTIONS = <<<'HTML'
    <x-side-bar smart navigate thin-scroll collapsible>
        <x-slot:brand>
            <div class="flex justify-center">
                <img src="..." />
            </div>
        </x-slot:brand>

        <!-- side-bar items goes here... -->
    </x-side-bar>
    HTML;

    public const string ITEM = <<<'HTML'
    <!-- Individual -->
    <x-side-bar.item text="Home" icon="home" :route="route('dashboard')" />

    <!-- Grouped -->
    <x-side-bar.item text="Admin">
        <x-side-bar.item text="Home" icon="home" :route="route('admin.dashboard')" />
    </x-side-bar.item>
    HTML;

    public const string ATTRIBUTES = <<<'HTML'
    <x-side-bar.item text="Admin" opened>
        <x-side-bar.item text="Home" icon="home" current :route="route('admin.dashboard')" />
    </x-side-bar.item>
    HTML;

    public const string MATCH = <<<'HTML'
    <x-side-bar.item text="Admin" :opened="route()->requestIs('admin.*')">
        <x-side-bar.item text="Home"
                         icon="home"
                         :current="route()->requestIs('admin.dashboard')"
                         :route="route('admin.dashboard')" />
    </x-side-bar.item>
    HTML;

    public const string VISIBLE = <<<'HTML'
    <x-side-bar.item text="Admin" :visible="true">
        <x-side-bar.item text="Home" icon="home" current :route="route('admin.dashboard')" />
    </x-side-bar.item>

    <!-- Or -->

    <x-side-bar.item text="Home"
                     icon="home"
                     :route="route('admin.dashboard')"
                     :visible="fn () => true" />
    HTML;

    public const string SEPARATOR = <<<'HTML'
    <x-side-bar.item text="Home" icon="home" :route="route('dashboard')" />
    <x-side-bar.separator text="Configurations" /> <!-- [tl! focus] -->
    <x-side-bar.item text="Settings" icon="cog" :route="route('settings')" />
    HTML;

    public const string STYLES = <<<'HTML'
    <!-- Default, only text -->
    <x-side-bar.separator text="Configurations" />

    <!-- Line separator between text -->
    <x-side-bar.separator text="Configurations" line />

    <!-- Line separator at right -->
    <x-side-bar.separator text="Configurations" line-right />
    HTML;

    public const string BRAND_COLLAPSED = <<<'HTML'
    <x-side-bar collapsible>
        <x-slot:brand>
            <div class="flex justify-center">
                <img src="/logo-full.svg" class="h-8" />
            </div>
        </x-slot:brand>
        <x-slot:brand-collapsed> <!-- [tl! focus:4] -->
            <div class="flex justify-center">
                <img src="/logo-icon.svg" class="h-6" />
            </div>
        </x-slot:brand-collapsed>

        <!-- side-bar items goes here... -->
    </x-side-bar>
    HTML;

    public const string SIDEBAR_FOOTER = <<<'HTML'
    <x-side-bar>
        <!-- side-bar items goes here... -->

        <x-slot:footer> <!-- [tl! focus:2] -->
            <p class="text-sm text-gray-500">v3.0.0</p>
        </x-slot:footer>
    </x-side-bar>
    HTML;

    public const string BADGE = <<<'HTML'
    <x-side-bar.item text="Notifications" icon="bell" :route="route('notifications')">
        <x-slot:badge>5</x-slot:badge> <!-- [tl! focus] -->
    </x-side-bar.item>

    <!-- Custom badge color -->
    <x-side-bar.item text="Messages" icon="envelope" badge-color="blue" :route="route('messages')"> <!-- [tl! focus:1] -->
        <x-slot:badge>3</x-slot:badge>
    </x-side-bar.item>
    HTML;

    public const string HREF = <<<'HTML'
    <!-- Using named route (supports smart matching + wire:navigate) -->
    <x-side-bar.item text="Dashboard" icon="home" :route="route('dashboard')" />

    <!-- Using raw href (bypasses route matching and wire:navigate) --> <!-- [tl! focus:1] -->
    <x-side-bar.item text="External Docs" icon="book-open" href="https://docs.example.com" />
    HTML;

    public const string ITEM_MATCH = <<<'HTML'
    <x-side-bar.item text="Orders"
                     icon="shopping-cart"
                     :route="route('orders.index')"
                     match="orders.*" /> <!-- [tl! focus] -->
    HTML;

    public const string CUSTOMIZATION_LAYOUT = <<<'HTML'
    TallStackUi::customize()
        ->layout()
        ->block('block', 'classes');
    HTML;

    public const string CUSTOMIZATION_LAYOUT_HEADER = <<<'HTML'
    TallStackUi::customize()
        ->layout('header')
        ->block('block', 'classes');
    HTML;

    public const string CUSTOMIZATION_SIDEBAR = <<<'HTML'
    TallStackUi::customize()
        ->sideBar()
        ->block('block', 'classes');
    HTML;

    public const string CUSTOMIZATION_SIDEBAR_ITEM = <<<'HTML'
    TallStackUi::customize()
        ->sideBar('item')
        ->block('block', 'classes');
    HTML;

    public const string CUSTOMIZATION_SIDEBAR_SEPARATOR = <<<'HTML'
    TallStackUi::customize()
        ->sideBar('separator')
        ->block('block', 'classes');
    HTML;
}
