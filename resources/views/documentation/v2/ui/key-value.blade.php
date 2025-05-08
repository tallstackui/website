@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content>
    <x-slot:title>
        KeyValue
    </x-slot:title>
    <x-slot:description>
        KeyValue component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:personalization :$personalization component="KeyValue" />
    </x-slot:personalization>
    <x-section title="Concept" disable-copy>
        Built on top of Filament's <x-block>KeyValue</x-block> Form Component with features like Stripe's Product and Price <x-block>metadata</x-block>
        in mind, the KeyValue component was ideally designed to handle json values where you have a value associated with a key.
    </x-section>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <livewire:documentation.ui.key-value />
        </x-preview>
    </x-section>
    <x-section title="Label & Value" description="An option to personalize the headers of the component.">
        <x-preview language="blade" :contents="$basic">
            <livewire:documentation.ui.key-value :model="2" />
        </x-preview>
    </x-section>
    <x-section title="Without Placeholders">
        <x-preview language="blade" :contents="$basic">
            <livewire:documentation.ui.key-value :model="3" />
        </x-preview>
    </x-section>
    <x-section title="Limit">
        <x-preview language="blade" :contents="$basic">
            <livewire:documentation.ui.key-value :model="4" />
        </x-preview>
    </x-section>
    <x-section title="Static" description="An option to do not accept new entries.">
        <x-preview language="blade" :contents="$basic">
            <livewire:documentation.ui.key-value :model="5" />
        </x-preview>
    </x-section>
    <x-section title="Deletable">
        <x-preview language="blade" :contents="$basic">
            <livewire:documentation.ui.key-value :model="6" />
        </x-preview>
    </x-section>
    <x-section title="Change Delete Icon">
        <x-preview language="blade" :contents="$basic">
            <livewire:documentation.ui.key-value :model="7" />
        </x-preview>
    </x-section>
    <x-section title="Slots">
        <x-preview language="blade" :contents="$basic">
            <livewire:documentation.ui.key-value :model="8" />
        </x-preview>
    </x-section>
    <x-section title="Events">
        <x-preview language="blade" :contents="$basic">
            <livewire:documentation.ui.key-value :model="9" />
        </x-preview>
    </x-section>
</x-layout>
