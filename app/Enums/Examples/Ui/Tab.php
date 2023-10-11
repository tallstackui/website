<?php

namespace App\Enums\Examples\Ui;

class Tab
{
    public const BASIC = <<<'HTML'
    <x-tabs selected="Tab 1">
        <x-tabs.items tab="Tab 1">
            Tab 1
        </x-tabs.items>
        <x-tabs.items tab="Tab 2">
            Tab 2
        </x-tabs.items>
        <x-tabs.items tab="Tab 3">
            Tab 3
        </x-tabs.items>
        <x-tabs.items tab="Tab 4">
            Tab 4
        </x-tabs.items>
        <x-tabs.items tab="Tab 5">
            Tab 5
        </x-tabs.items>
    </x-tabs>
    HTML;

    public const WIREABLE = <<<'HTML'
    <!--  Livewire string property: $tab - initial value: "Tab 1" -->

    <x-tabs wire:model="tab">
        <x-tabs.items tab="Tab 1">
            Tab 1
        </x-tabs.items>
        <x-tabs.items tab="Tab 2">
            Tab 2
        </x-tabs.items>
        <x-tabs.items tab="Tab 3">
            Tab 3
        </x-tabs.items>
        <x-tabs.items tab="Tab 4">
            Tab 4
        </x-tabs.items>
        <x-tabs.items tab="Tab 5">
            Tab 5
        </x-tabs.items>
    </x-tabs>

    <x-button wire:click="$set('tab', 'Tab 5')">Change to Tab 5</x-button>
    HTML;

    public const WIREABLE_LIVE = <<<'HTML'
    <!--  Livewire string property: $tab - initial value: "Tab 1" -->

    <x-tabs wire:model.live="tab">
        <x-tabs.items tab="Tab 1">
            Tab 1
        </x-tabs.items>
        <x-tabs.items tab="Tab 2">
            Tab 2
        </x-tabs.items>
        <x-tabs.items tab="Tab 3">
            Tab 3
        </x-tabs.items>
        <x-tabs.items tab="Tab 4">
            Tab 4
        </x-tabs.items>
        <x-tabs.items tab="Tab 5">
            Tab 5
        </x-tabs.items>
    </x-tabs>
    HTML;
}
