@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content ai="theme-switch">
    <x-slot:title>
        Theme Switch
    </x-slot:title>
    <x-slot:description>
        Theme switch component.
    </x-slot:description>
    <x-slot:customization>
        <livewire:customization :$customization component="ThemeSwitch" />
    </x-slot:customization>
    <x-warning class="mt-2">
        You should only use this component if are using the <a href="{{ route('documentation', ['helpers', 'dark-theme']) }}" wire:navigate class="underline">dark theme helper.</a>
    </x-warning>
    <x-section class="mt-4" title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-theme-switch />
        </x-preview>
    </x-section>
    <x-section class="mt-4" title="Block">
        <div class="space-y-4">
            <x-preview language="blade" :contents="$basicBlock">
                <x-theme-switch block />
            </x-preview>
            <x-warning>
                This attribute is designed to allow you to use the component within the header slot of the dropdown component.
            </x-warning>
        </div>
    </x-section>
    <x-section title="Sizes">
        <x-preview language="blade" :contents="$sizes">
            <div class="space-y-2">
                <x-theme-switch xs />
                <x-theme-switch sm />
                <x-theme-switch md />
                <x-theme-switch lg />
                <x-theme-switch xl />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Simple" description="An option to allow you restore the previous unique visual of the component.">
        <x-preview language="blade" :contents="$simple">
            <x-theme-switch simple />
        </x-preview>
    </x-section>
    <x-section title="Only Icons" description="An option to only display icons, without the toggle.">
        <x-preview language="blade" :contents="$icons">
            <x-theme-switch simple only-icons />
        </x-preview>
    </x-section>
</x-layout>
