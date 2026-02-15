@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content>
    <x-slot:title>
        Kbd
    </x-slot:title>
    <x-slot:description>
        Kbd component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:personalization :$personalization component="Kbd" />
    </x-slot:personalization>
    <x-section title="Basic Usage" new>
        <x-preview language="blade" :contents="$basic">
            <x-kbd text="Ctrl" />
        </x-preview>
    </x-section>
    <x-section title="Key Combination">
        <x-preview language="blade" :contents="$combination">
            <x-kbd text="Ctrl" /> + <x-kbd text="C" />
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
    <x-section title="Borderless" description="An option to remove the border and shadow for a minimal appearance.">
        <x-preview language="blade" :contents="$borderless">
            <x-kbd text="Ctrl" borderless />
        </x-preview>
    </x-section>
    <x-section title="Tooltip" description="An option to display a tooltip on hover.">
        <x-preview language="blade" :contents="$tooltip">
            <x-kbd text="Esc" tooltip="Go back" />
        </x-preview>
    </x-section>
    <x-section title="Slot" description="An option to use custom content instead of text.">
        <x-preview language="blade" :contents="$slot">
            <x-kbd>
                <x-icon name="arrow-up" class="h-4 w-4" />
            </x-kbd>
        </x-preview>
    </x-section>
</x-layout>
