<?php

declare(strict_types=1);

namespace App\Enums\Examples\Ui;

class Layout
{
    public const string LAYOUT = <<<'HTML'
    <x-layout>
        <x-slot:header>
            <x-layout.header>
                <x-slot:left>
                    <span>Dashboard</span>
                </x-slot:left>

                <x-slot:middle>
                    <x-input icon="magnifying-glass" placeholder="Search" sm />
                </x-slot:middle>

                <x-slot:right>
                    <x-dropdown text="Hello, AJ!">
                        <x-slot:header>
                            <x-theme-switch block />
                        </x-slot:header>
                        <x-dropdown.items text="Profile" />
                        <x-dropdown.items text="Logout" />
                    </x-dropdown>
                </x-slot:right>
            </x-layout.header>
        </x-slot:header>

        <x-slot:menu>
            <x-side-bar collapsible thin-scroll>
                <x-slot:brand>
                    <div class="flex justify-center py-4">
                        <img src="{{ asset('logo.svg') }}" class="h-10 w-10" />
                    </div>
                </x-slot:brand>
                <x-slot:brand-collapsed>
                    <div class="flex justify-center py-4">
                        <img src="{{ asset('logo-icon.svg') }}" class="h-8 w-8" />
                    </div>
                </x-slot:brand-collapsed>

                <x-side-bar.item text="Home" icon="home" route="#" current />
                <x-side-bar.item text="Notifications" icon="bell" route="#">
                    <x-slot:badge>5</x-slot:badge>
                </x-side-bar.item>
                <x-side-bar.item text="Messages" icon="envelope" badge-color="blue" route="#">
                    <x-slot:badge>3</x-slot:badge>
                </x-side-bar.item>

                <x-side-bar.separator text="Configurations" line />

                <x-side-bar.item text="Settings" icon="cog-6-tooth" opened>
                    <x-side-bar.item text="General" route="#" />
                    <x-side-bar.item text="Privacy" route="#" />
                </x-side-bar.item>
                <x-side-bar.item text="Account" icon="user">
                    <x-side-bar.item text="Profile" route="#" />
                    <x-side-bar.item text="API Keys" route="#" />
                </x-side-bar.item>

                <x-side-bar.separator text="Resources" line-right />

                <x-side-bar.item text="External Docs" icon="book-open" href="/" />

                <x-slot:footer>
                    <p class="text-sm text-gray-500">v4.0.0</p>
                </x-slot:footer>
            </x-side-bar>
        </x-slot:menu>

        <h1>Welcome back, AJ!</h1>
        <p>A complete layout with header slots and a collapsible sidebar.</p>
    </x-layout>
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
        @if ($top) <!-- [tl! focus:2] -->
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

        @if ($footer) <!-- [tl! focus:2] -->
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
    <x-side-bar.separator text="Configuration" /> <!-- [tl! focus] -->
    <x-side-bar.item text="Settings" icon="cog" :route="route('settings')" />
    HTML;

    public const string STYLES = <<<'HTML'
    <!-- Default, only text -->
    <x-side-bar.separator text="Configuration" />

    <!-- Line separator between text -->
    <x-side-bar.separator text="Configuration" line />

    <!-- Line separator at right -->
    <x-side-bar.separator text="Configuration" line-right />
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
    <x-side-bar.item text="Messages" icon="envelope" badge-color="blue" :route="route('messages')"> <!-- [tl! focus:2] -->
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
