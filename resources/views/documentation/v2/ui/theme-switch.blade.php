@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content>
    <x-slot:title>
        Theme Switch
    </x-slot:title>
    <x-slot:description>
        Theme switch component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:personalization :$personalization component="ThemeSwitch" />
    </x-slot:personalization>
    <x-warning class="mt-2">
        You should only use this component if are using the <a href="{{ route('documentation', ['v2', 'helpers', 'dark-theme']) }}" wire:navigate class="underline">dark theme helper.</a>
    </x-warning>
    <x-section class="mt-4" title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-theme-switch />
        </x-preview>
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
    <x-section title="Only Icons" description="An option to only display icons, without the toggle.">
        <x-preview language="blade" :contents="$icons">
            <x-theme-switch only-icons />
        </x-preview>
    </x-section>
</x-layout>
