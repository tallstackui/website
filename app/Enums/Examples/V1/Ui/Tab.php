<?php

namespace App\Enums\Examples\V1\Ui;

class Tab
{
    public const BASIC = <<<'HTML'
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

    public const SLOTS = <<<'HTML'
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

    public const EVENTS = <<<'HTML'
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

    public const WIREABLE = <<<'HTML'
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

    public const WIREABLE_LIVE = <<<'HTML'
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

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::customize()
        ->tab()
        ->block('block', 'classes');
    HTML;

    public const PERSONALIZATION_ITEMS = <<<'HTML'
    TallStackUi::customize()
        ->tab('items')
        ->block('block', 'classes');
    HTML;
}
