@php
    $now = now();
    $current = $now->format('h:i A');
@endphp

<x-layout>
    <x-slot:title>
        Form Time
        <x-slot:version>
            v1.20
        </x-slot:version>
    </x-slot:title>
    <x-slot:description>
        Form time component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="time" />
    </x-slot:personalization>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-time />
        </x-preview>
    </x-section>
    <x-section title="Label & Hint">
        <x-preview language="blade" :contents="$basic">
            <x-time label="Date" hint="Select your DoB" />
        </x-preview>
    </x-section>
    <x-section title="Available Formats">
        <x-preview language="blade" :contents="$basic">
            <div class="space-y-2">
                <x-time :value="$current" />
                <x-time :value="$current" format="24" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Helper">
        <x-preview language="blade" :contents="$basic">
            <x-time format="24" helper />
        </x-preview>
    </x-section>
    <x-section title="Invalidate" description="An option to not show validation error message.">
        <x-preview language="blade" :contents="$basic">
            <x-time invalidate />
        </x-preview>
    </x-section>
</x-layout>
