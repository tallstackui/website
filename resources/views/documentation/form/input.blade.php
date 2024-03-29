@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout>
    <x-slot:title>
        Form Input
    </x-slot:title>
    <x-slot:description>
        Form input component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="input" />
    </x-slot:personalization>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-input />
        </x-preview>
        <x-warning class="mt-4">
            The input type will be set to <b>text</b> when not specified.
        </x-warning>
    </x-section>
    <x-section title="Label & Hint">
        <x-preview language="blade" :contents="$labelHint">
            <x-input label="Name" hint="Insert your name" />
        </x-preview>
    </x-section>
    <x-section title="Required Label Indicator" description="An option to display an asterisk indicating that the field is required.">
        <x-preview language="blade" :contents="$asterisk">
            <x-input label="Name *" hint="Insert your name" />
        </x-preview>
    </x-section>
    <x-section title="Icon Slot">
        <x-preview language="blade" :contents="$icons">
            <div class="space-y-2">
                <x-input label="Name" icon="users" />
                <x-input label="Name" icon="cog" position="right" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Prefix & Suffix">
        <x-preview language="blade" :contents="$prefixSuffix">
            <div class="space-y-2">
                <x-input prefix="https://" label="Domain" />
                <x-input suffix="@gmail.com" label="E-mail" />
            </div>
        </x-preview>
        <x-warning class="mt-4">
            Using a prefix or suffix will disable browser autocomplete as long as this is not explicitly defined.
        </x-warning>
    </x-section>
    <x-section title="Invalidate" description="An option to not show validation error message.">
        <x-preview language="blade" :contents="$invalidate">
            <x-input label="Name" invalidate />
        </x-preview>
    </x-section>
</x-layout>
