@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout>
    <x-slot:title>
        Card
    </x-slot:title>
    <x-slot:description>
        Card component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:personalization :$personalization component="card" />
    </x-slot:personalization>
    <x-section title="Basic Usage">
        <x-preview language="blade" :background="false" :contents="$basic">
            <x-card>
                TallStackUI
            </x-card>
        </x-preview>
    </x-section>
    <x-section title="Header Slot">
        <x-preview language="blade" :background="false" :contents="$header">
            <x-card>
                <x-slot:header>
                    TallStackUI
                </x-slot:header>
                TallStackUI
            </x-card>
        </x-preview>
    </x-section>
    <x-section title="Footer Slot">
        <x-preview language="blade" :background="false" :contents="$footer">
            <x-card>
                TallStackUI
                <x-slot:footer>
                    TallStackUI
                </x-slot:footer>
            </x-card>
        </x-preview>
    </x-section>
</x-layout>
