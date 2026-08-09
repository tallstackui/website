@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content ai="spinner">
    <x-slot:title>Spinner</x-slot>
    <x-slot:description>Spinner component.</x-slot>
    <x-slot:customization>
        <livewire:customization :$customization component="Spinner" />
    </x-slot>
    <x-section title="Basic Usage" new>
        <x-preview language="blade" :contents="$basic">
            <x-spinner />
        </x-preview>
    </x-section>
    <x-section title="Variations" new>
        <x-preview language="blade" :contents="$variations">
            <div class="flex flex-wrap items-center gap-8">
                <x-spinner ring />
                <x-spinner throbber />
                <x-spinner gradient />
                <x-spinner ping />
                <x-spinner dots />
                <x-spinner pulse />
                <x-spinner typing />
                <x-spinner bars />
                <x-spinner wave />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Textual Variations" new>
        <x-preview language="blade" :contents="$textual">
            <div class="flex flex-col gap-4">
                <x-spinner shimmer text="Loading the report" />
                <x-spinner caret text="Generating" />
                <x-spinner terminal text="npm run build" />
                <x-spinner thinking />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Size Variations" new>
        <x-preview language="blade" :contents="$sizes">
            <div class="flex items-center gap-6">
                <x-spinner xs />
                <x-spinner sm />
                <x-spinner md />
                <x-spinner lg />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Colors" new>
        <x-preview language="blade" :contents="$colors">
            <div class="flex flex-wrap items-center gap-8">
                <x-spinner color="red" />
                <x-spinner bars color="emerald" />
                <x-spinner wave color="amber" />
                <x-spinner dots color="blue" />
                <x-spinner class="text-[#ff5f1f]" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Label" new>
        <x-preview language="blade" :contents="$label">
            <div class="flex flex-col gap-4">
                <x-spinner />
                <x-spinner text="Sending the file" />
                <x-spinner>
                    Sending
                    <b>3</b>
                    files
                </x-spinner>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Thinking" new>
        <x-preview language="blade" :contents="$thinking">
            <div class="flex flex-col gap-4">
                <x-spinner thinking />
                <x-spinner thinking text="Analyzing" />
                <x-spinner thinking :text="false" />
                <x-spinner thinking :interval="250" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Inside a Button" new>
        <x-preview language="blade" :contents="$button">
            <x-button color="primary">
                <x-slot:left>
                    <x-spinner xs class="text-white" />
                </x-slot>
                Saving
            </x-button>
        </x-preview>
    </x-section>
</x-layout>
