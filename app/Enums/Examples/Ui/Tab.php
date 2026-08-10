<?php

declare(strict_types=1);

namespace App\Enums\Examples\Ui;

class Tab
{
    public const string BASIC = <<<'HTML'
    <x-tab selected="Tab 1">
        <x-tab.items tab="Tab 1">
            Tab 1
        </x-tab.items>
        <x-tab.items tab="Tab 2">
            Tab 2
        </x-tab.items>
        <x-tab.items tab="Tab 3">
            Tab 3
        </x-tab.items>
        <x-tab.items tab="Tab 4">
            Tab 4
        </x-tab.items>
        <x-tab.items tab="Tab 5">
            Tab 5
        </x-tab.items>
    </x-tab>
    HTML;

    public const string CENTERED = <<<'HTML'
    <x-tab selected="Tab 1" centered>
        <x-tab.items tab="Tab 1">
            Tab 1
        </x-tab.items>
        <x-tab.items tab="Tab 2">
            Tab 2
        </x-tab.items>
        <x-tab.items tab="Tab 3">
            Tab 3
        </x-tab.items>
    </x-tab>
    HTML;

    public const string MOBILE = <<<'HTML'
    <x-tab selected="Tab 1" scroll-on-mobile>
        <x-tab.items tab="Tab 1">
            Tab 1
        </x-tab.items>
        <x-tab.items tab="Tab 2">
            Tab 2
        </x-tab.items>
        <x-tab.items tab="Tab 3">
            Tab 3
        </x-tab.items>
        <x-tab.items tab="Tab 4">
            Tab 4
        </x-tab.items>
        <x-tab.items tab="Tab 5">
            Tab 5
        </x-tab.items>
        <x-tab.items tab="Tab 6">
            Tab 6
        </x-tab.items>
        <x-tab.items tab="Tab 7">
            Tab 7
        </x-tab.items>
        <x-tab.items tab="Tab 8">
            Tab 8
        </x-tab.items>
    </x-tab>
    HTML;

    public const string SLOTS = <<<'HTML'
    <x-tab selected="Invoices">
        <x-tab.items tab="Invoices">
            <x-slot:right>
                <x-icon name="document-text" class="w-5 h-5" />
            </x-slot:right>
            Invoices
        </x-tab.items>
        <x-tab.items tab="Transactions">
            <x-slot:left>
                <x-icon name="currency-dollar" class="w-5 h-5" />
            </x-slot:left>
            Transactions
        </x-tab.items>
    </x-tab>
    HTML;

    public const string EVENTS = <<<'HTML'
    <x-tab selected="Invoices" x-on:navigate="alert($event.detail.select)">
        <x-tab.items tab="Invoices">
            <x-slot:right>
                <x-icon name="document-text" class="w-5 h-5" />
            </x-slot:right>
            Invoices
        </x-tab.items>
        <x-tab.items tab="Transactions">
            <x-slot:left>
                <x-icon name="currency-dollar" class="w-5 h-5" />
            </x-slot:left>
            Transactions
        </x-tab.items>
    </x-tab>
    HTML;

    public const string ROUTE_BASED = <<<'HTML'
    <x-tab>
        <x-tab.items tab="users" title="Users" :href="route('users.index')" navigate>
            <livewire:users.index />
        </x-tab.items>
        <x-tab.items tab="invoices" title="Invoices" :href="route('invoices.index')" navigate>
            <livewire:invoices.index />
        </x-tab.items>
    </x-tab>
    HTML;

    public const string ROUTE_BASED_NAVIGATE_HOVER = <<<'HTML'
    <x-tab>
        <x-tab.items tab="users" title="Users" :href="route('users.index')" navigate-hover>
            <livewire:users.index />
        </x-tab.items>
        <x-tab.items tab="invoices" title="Invoices" :href="route('invoices.index')" navigate-hover>
            <livewire:invoices.index />
        </x-tab.items>
    </x-tab>
    HTML;

    public const string WIREABLE = <<<'HTML'
    <!--  Livewire string property: $tab - initial value: "Tab 1" -->

    <x-tab wire:model="tab">
        <x-tab.items tab="Tab 1">
            Tab 1
        </x-tab.items>
        <x-tab.items tab="Tab 2">
            Tab 2
        </x-tab.items>
        <x-tab.items tab="Tab 3">
            Tab 3
        </x-tab.items>
        <x-tab.items tab="Tab 4">
            Tab 4
        </x-tab.items>
        <x-tab.items tab="Tab 5">
            Tab 5
        </x-tab.items>
    </x-tab>

    <x-button wire:click="$set('tab', 'Tab 5')">Change to Tab 5</x-button>
    HTML;

    public const string WIREABLE_LIVE = <<<'HTML'
    <!--  Livewire string property: $tab - initial value: "Tab 1" -->

    <x-tab wire:model.live="tab">
        <x-tab.items tab="Tab 1">
            Tab 1
        </x-tab.items>
        <x-tab.items tab="Tab 2">
            Tab 2
        </x-tab.items>
        <x-tab.items tab="Tab 3">
            Tab 3
        </x-tab.items>
        <x-tab.items tab="Tab 4">
            Tab 4
        </x-tab.items>
        <x-tab.items tab="Tab 5">
            Tab 5
        </x-tab.items>
    </x-tab>
    HTML;

    public const string FLAT = <<<'HTML'
    <x-tab selected="Tab 1" shadowless bordered>
        <x-tab.items tab="Tab 1">Content 1</x-tab.items>
        <x-tab.items tab="Tab 2">Content 2</x-tab.items>
    </x-tab>
    HTML;

    public const string PADDINGLESS = <<<'HTML'
    <x-tab selected="Tab 1" paddingless>
        <x-tab.items tab="Tab 1">
            Tall
        </x-tab.items>
        <x-tab.items tab="Tab 2">
            Stack
        </x-tab.items>
        <x-tab.items tab="Tab 3">
            UI 🥰
        </x-tab.items>
    </x-tab>
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->tab()
        ->block('block', 'classes');
    HTML;
}
