@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content ai="qr-code">
    <x-slot:title>QrCode</x-slot>
    <x-slot:description>QrCode component.</x-slot>
    <x-slot:customization>
        <livewire:customization :$customization component="QrCode" />
    </x-slot>
    <x-section title="Basic Usage" new>
        <x-preview language="blade" :contents="$basic">
            <x-qr-code link="https://tallstackui.com" />
        </x-preview>
    </x-section>
    <x-section title="Colors" new>
        <x-preview language="blade" :contents="$colors">
            <div class="flex flex-wrap items-center gap-4">
                <x-qr-code link="https://tallstackui.com" />
                <x-qr-code link="https://tallstackui.com" color="blue" />
                <x-qr-code link="https://tallstackui.com" color="emerald" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Size Variations" new>
        <x-preview language="blade" :contents="$sizes">
            <div class="flex flex-wrap items-end gap-4">
                <x-qr-code link="https://tallstackui.com" size="xs" />
                <x-qr-code link="https://tallstackui.com" size="sm" />
                <x-qr-code link="https://tallstackui.com" size="md" />
                <x-qr-code link="https://tallstackui.com" size="lg" />
                <x-qr-code link="https://tallstackui.com" size="xl" />
                <x-qr-code link="https://tallstackui.com" size="2xl" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Watermark" new>
        <x-preview language="blade" :contents="$watermark">
            <div class="flex flex-wrap items-center gap-4">
                <x-qr-code
                    link="https://tallstackui.com"
                    watermark="bolt"
                    size="lg"
                />
                <x-qr-code
                    link="https://tallstackui.com"
                    watermark="TALL"
                    size="lg"
                />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Copy & Download" new>
        <x-preview language="blade" :contents="$actions">
            <div class="flex flex-wrap items-start gap-4">
                <x-qr-code link="https://tallstackui.com" copy />
                <x-qr-code link="https://tallstackui.com" download />
                <x-qr-code link="https://tallstackui.com" download="svg" />
                <x-qr-code link="https://tallstackui.com" copy download="svg" />
            </div>
        </x-preview>
    </x-section>
    <x-section
        title="Skeleton"
        new
        description="An option to display a lazy loading skeleton indicator."
    >
        <x-preview language="blade" :contents="$skeleton">
            <x-qr-code skeleton size="lg" />
        </x-preview>
    </x-section>
</x-layout>
