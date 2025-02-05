@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout>
    <x-slot:title>
        Errors
    </x-slot:title>
    <x-slot:description>
        Errors component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:personalization :$personalization component="Errors" />
    </x-slot:personalization>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <livewire:documentation.v1.ui.errors/>
        </x-preview>
    </x-section>
    <x-section title="Filtering Properties" description="An option to show validation errors for specific properties.">
        <x-preview language="blade" :contents="$specific">
            <livewire:documentation.v1.ui.errors :only="['name']"/>
        </x-preview>
    </x-section>
    <x-section title="Title Customization">
        <x-preview language="blade" :contents="$customized">
            <livewire:documentation.v1.ui.errors title="Ops! There are :count validation errors:"/>
        </x-preview>
    </x-section>
    <x-section title="Close Option" description="An option to allow the user to hide the errors">
        <x-preview language="blade" :contents="$close">
            <livewire:documentation.v1.ui.errors close/>
        </x-preview>
    </x-section>
    <x-section title="Footer Slot">
        <x-preview language="blade" :contents="$slot">
            <livewire:documentation.v1.ui.errors slot/>
        </x-preview>
    </x-section>
    <x-section title="Color Variations">
        <x-preview language="blade" :contents="$colors">
            <div class="space-y-2">
                <livewire:documentation.v1.ui.errors />
                <livewire:documentation.v1.ui.errors color="primary" />
                <livewire:documentation.v1.ui.errors color="secondary" />
                <livewire:documentation.v1.ui.errors color="slate" />
                <livewire:documentation.v1.ui.errors color="gray" />
                <livewire:documentation.v1.ui.errors color="zinc" />
                <livewire:documentation.v1.ui.errors color="neutral" />
                <livewire:documentation.v1.ui.errors color="stone" />
                <livewire:documentation.v1.ui.errors color="orange" />
                <livewire:documentation.v1.ui.errors color="amber" />
                <livewire:documentation.v1.ui.errors color="yellow" />
                <livewire:documentation.v1.ui.errors color="lime" />
                <livewire:documentation.v1.ui.errors color="green" />
                <livewire:documentation.v1.ui.errors color="emerald" />
                <livewire:documentation.v1.ui.errors color="teal" />
                <livewire:documentation.v1.ui.errors color="cyan" />
                <livewire:documentation.v1.ui.errors color="sky" />
                <livewire:documentation.v1.ui.errors color="blue" />
                <livewire:documentation.v1.ui.errors color="indigo" />
                <livewire:documentation.v1.ui.errors color="violet" />
                <livewire:documentation.v1.ui.errors color="purple" />
                <livewire:documentation.v1.ui.errors color="fuchsia" />
                <livewire:documentation.v1.ui.errors color="pink" />
                <livewire:documentation.v1.ui.errors color="rose" />
                <livewire:documentation.v1.ui.errors color="black" />
                <livewire:documentation.v1.ui.errors color="white" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Events">
        <x-preview language="blade" :contents="$events">
            <livewire:documentation.v1.ui.errors events />
        </x-preview>
    </x-section>
</x-layout>
