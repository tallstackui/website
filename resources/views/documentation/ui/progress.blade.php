@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout>
    <x-slot:title>
        Progress
        <x-slot:version>
            v1.21
        </x-slot:version>
    </x-slot:title>
    <x-slot:description>
        Progress bar component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="progress" />
        <livewire:documentation.personalization :$personalization component="progress.circle" />
    </x-slot:personalization>
    <x-section title="Basic Usage" anchor="normal-basic">
        <x-preview language="blade" :contents="$basic">
            <x-progress :percent="50" />
        </x-preview>
    </x-section>
    <x-section title="Title" anchor="normal-size">
        <x-preview language="blade" :contents="$basic">
            <div class="space-y-2">
                <x-progress :percent="50" title="Percentage" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Title" anchor="normal-size">
        <x-preview language="blade" :contents="$basic">
            <div class="space-y-2">
                <x-progress :percent="50" simple />
                <x-progress :percent="50" floating />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Size Variations" anchor="normal-size">
        <x-preview language="blade" :contents="$basic">
            <div class="space-y-2">
                <x-progress :percent="50" xs />
                <x-progress :percent="50" sm />
                <x-progress :percent="50" md />
                <x-progress :percent="50" lg />
            </div>
        </x-preview>
    </x-section>
</x-layout>
