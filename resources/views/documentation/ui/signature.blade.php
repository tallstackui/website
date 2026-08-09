@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content ai="signature">
    <x-slot:title>Signature</x-slot>
    <x-slot:description>Signature component.</x-slot>
    <x-slot:customization>
        <livewire:customization :$customization component="Signature"/>
    </x-slot>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <livewire:documentation.ui.signature/>
        </x-preview>
        <x-warning class="mt-4">
            The signature component can only be used inside a Livewire component.
        </x-warning>
    </x-section>
    <x-section title="Label & Hint">
        <x-preview language="blade" :contents="$labelHint">
            <livewire:documentation.ui.signature :model="2"/>
        </x-preview>
    </x-section>
    <x-section title="Pen Color">
        <x-preview language="blade" :contents="$pen">
            <livewire:documentation.ui.signature :model="3"/>
        </x-preview>
    </x-section>
    <x-section title="Background Color">
        <x-preview language="blade" :contents="$background">
            <livewire:documentation.ui.signature :model="4"/>
        </x-preview>
    </x-section>
    <x-section title="Line Weight">
        <x-preview language="blade" :contents="$line">
            <livewire:documentation.ui.signature :model="5"/>
        </x-preview>
    </x-section>
    <x-section title="Height">
        <x-preview language="blade" :contents="$height">
            <livewire:documentation.ui.signature :model="6"/>
        </x-preview>
    </x-section>
    <x-section title="Clearable">
        <x-preview language="blade" :contents="$clearable">
            <livewire:documentation.ui.signature :model="7"/>
        </x-preview>
    </x-section>
    <x-section title="Exportable">
        <x-preview language="blade" :contents="$exportable">
            <livewire:documentation.ui.signature :model="8"/>
        </x-preview>
    </x-section>
    <x-section title="Events">
        <x-preview language="blade" :contents="$event">
            <livewire:documentation.ui.signature :model="9"/>
        </x-preview>
    </x-section>
    <x-section
        title="Persistent"
        new
        description="An option to do not clear the signature when resizing the window."
    >
        <x-preview language="blade" :contents="$persistent">
            <livewire:documentation.ui.signature :model="10"/>
        </x-preview>
        <x-warning class="mt-4">
            Strokes are stored as points and redrawn when the width changes. This keeps the signature sharp because no
            image resampling occurs. However, the drawing scales only horizontally, which may change its proportions.
        </x-warning>
    </x-section>
</x-layout>
