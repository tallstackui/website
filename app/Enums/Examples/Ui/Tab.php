<?php

namespace App\Enums\Examples\Ui;

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
    TallStackUi::personalize()
        ->tab()
        ->block('block', 'classes');
    HTML;

    public const PERSONALIZATION_ITEMS = <<<'HTML'
    TallStackUi::personalize()
        ->tab('items')
        ->block('block', 'classes');
    HTML;
}
