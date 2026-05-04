@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content ai="signature">
    <x-slot:title>
        Signature
    </x-slot:title>
    <x-slot:description>
        Signature component.
    </x-slot:description>
    <x-slot:customization>
        <livewire:customization :$customization component="Signature" />
    </x-slot:customization>
    <x-section title="Concept" disable-copy>
        <div class="space-y-4">
            <p>
                Many modern applications need to capture a user's signature, and the signature
                component is ideal for this. The signature component capturing and exporting
                signatures. The signature will be a base64 that you can display as an image or store in your database.
            </p>
            <x-warning>
                You should use it inside Livewire components with wire:model to some property as a string.
            </x-warning>
        </div>
    </x-section>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <livewire:documentation.ui.signature />
        </x-preview>
    </x-section>
    <x-section title="Label & Hint">
        <x-preview language="blade" :contents="$labelHint">
            <livewire:documentation.ui.signature :model="2" />
        </x-preview>
    </x-section>
    <x-section title="Pen Color">
        <x-preview language="blade" :contents="$pen">
            <livewire:documentation.ui.signature :model="3" />
        </x-preview>
    </x-section>
    <x-section title="Background Color">
        <x-preview language="blade" :contents="$background">
            <livewire:documentation.ui.signature :model="4" />
        </x-preview>
    </x-section>
    <x-section title="Line Weight">
        <x-preview language="blade" :contents="$line">
            <livewire:documentation.ui.signature :model="5" />
        </x-preview>
    </x-section>
    <x-section title="Height">
        <x-preview language="blade" :contents="$height">
            <livewire:documentation.ui.signature :model="6" />
        </x-preview>
    </x-section>
    <x-section title="Clearable">
        <x-preview language="blade" :contents="$clearable">
            <livewire:documentation.ui.signature :model="7" />
        </x-preview>
    </x-section>
    <x-section title="Exportable">
        <x-preview language="blade" :contents="$exportable">
            <livewire:documentation.ui.signature :model="8" />
        </x-preview>
    </x-section>
    <x-section title="Events">
        <x-preview language="blade" :contents="$event">
            <livewire:documentation.ui.signature :model="9" />
        </x-preview>
    </x-section>
</x-layout>
