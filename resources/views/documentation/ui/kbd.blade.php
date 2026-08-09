@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content ai="kbd">
    <x-slot:title>Kbd</x-slot>
    <x-slot:description>Kbd component.</x-slot>
    <x-slot:customization>
        <livewire:customization :$customization component="Kbd" />
    </x-slot>
    <x-section title="Basic Usage" new>
        <x-preview language="blade" :contents="$basic">
            <x-kbd text="Ctrl" />
        </x-preview>
    </x-section>
    <x-section title="Key Combination">
        <x-preview language="blade" :contents="$combination">
            <x-kbd text="Ctrl" />
            +
            <x-kbd text="C" />
        </x-preview>
    </x-section>
    <x-section title="Size Variations">
        <x-preview language="blade" :contents="$sizes">
            <div class="flex items-center gap-2">
                <x-kbd text="Ctrl" xs />
                <x-kbd text="Ctrl" sm />
                <x-kbd text="Ctrl" md />
                <x-kbd text="Ctrl" lg />
            </div>
        </x-preview>
    </x-section>
    <x-section
        title="Borderless & Shadowless"
        new
        description="An option to remove shadow and borders."
    >
        <x-preview language="blade" :contents="$borderless">
            <div class="flex items-center gap-3">
                <x-kbd text="Ctrl" borderless />
                <x-kbd text="Ctrl" shadowless />
                <x-kbd text="Ctrl" borderless shadowless />
            </div>
        </x-preview>
    </x-section>
    <x-section
        title="Tooltip"
        description="An option to display a tooltip on hover."
    >
        <x-preview language="blade" :contents="$tooltip">
            <x-kbd text="Esc" tooltip="Go back" />
        </x-preview>
    </x-section>
    <x-section
        title="Slot"
        description="An option to use custom content instead of text."
    >
        <x-preview language="blade" :contents="$slot">
            <x-kbd>
                <x-icon name="arrow-up" class="h-4 w-4" />
            </x-kbd>
        </x-preview>
    </x-section>
</x-layout>
