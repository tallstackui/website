<?php

use function Livewire\Volt\{state};

$live = state(live: false);
$tab = state(tab: 'Tab 1');
?>

<div>
    @if ($live)
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
    @else
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
    @endif

    <div class="flex flex-col gap-y-4">
        <p class="mt-4">Selected: {{ $tab }}</p>
    </div>

    @if (!$live)
        <x-button class="mt-2" wire:click="$set('tab', 'Tab 5')">Change to Tab 5</x-button>
    @endif
</div>
