<?php

use function Livewire\Volt\{state};

$live = state(live: false);
$tab = state(tab: 'Tab 1');
?>

<div>
    @if ($live)
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
    @else
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
    @endif

    <div class="flex flex-col gap-y-4">
        <p class="mt-4">Selected: {{ $tab }}</p>
    </div>

    @if (!$live)
        <x-button class="mt-2" wire:click="$set('tab', 'Tab 5')">Change to Tab 5</x-button>
    @endif
</div>
