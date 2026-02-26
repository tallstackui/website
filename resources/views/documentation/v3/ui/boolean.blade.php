@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content>
    <x-slot:title>
        Boolean
    </x-slot:title>
    <x-slot:description>
        Boolean component.
    </x-slot:description>
    <x-slot:customization>
        <livewire:customization :$customization component="Boolean" />
    </x-slot:customization>
    <x-section title="Concept" disable-copy>
        <p>
            In many cases when we are building the UI of an application, we need to
            display icons according to the boolean status of something.
        </p>
    </x-section>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <div class="inline-flex gap-0.5">
                <x-boolean :boolean="true" />
                <x-boolean :boolean="false" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Icon Variations">
        <x-preview language="blade" :contents="$icons">
            <div class="inline-flex gap-0.5">
                <x-boolean :boolean="true" icon-when-true="hand-thumb-up" />
                <x-boolean :boolean="false" icon-when-false="hand-thumb-down" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Color Variations">
        <x-preview language="blade" :contents="$colors" disable-copy>
            <div class="gap-2 space-y-2">
                <x-boolean :boolean="true" color-when-true="primary" />
                <x-boolean :boolean="true" color-when-true="secondary" />
                <x-boolean :boolean="true" color-when-true="slate" />
                <x-boolean :boolean="true" color-when-true="gray" />
                <x-boolean :boolean="true" color-when-true="zinc" />
                <x-boolean :boolean="true" color-when-true="neutral" />
                <x-boolean :boolean="true" color-when-true="stone" />
                <x-boolean :boolean="true" color-when-true="red" />
                <x-boolean :boolean="true" color-when-true="orange" />
                <x-boolean :boolean="true" color-when-true="amber" />
                <x-boolean :boolean="true" color-when-true="yellow" />
                <x-boolean :boolean="true" color-when-true="lime" />
                <x-boolean :boolean="true" color-when-true="green" />
                <x-boolean :boolean="true" color-when-true="emerald" />
                <x-boolean :boolean="true" color-when-true="teal" />
                <x-boolean :boolean="true" color-when-true="cyan" />
                <x-boolean :boolean="true" color-when-true="sky" />
                <x-boolean :boolean="true" color-when-true="blue" />
                <x-boolean :boolean="true" color-when-true="indigo" />
                <x-boolean :boolean="true" color-when-true="violet" />
                <x-boolean :boolean="true" color-when-true="purple" />
                <x-boolean :boolean="true" color-when-true="fuchsia" />
                <x-boolean :boolean="true" color-when-true="pink" />
                <x-boolean :boolean="true" color-when-true="rose" />
                <x-boolean :boolean="true" color-when-true="mauve" />
                <x-boolean :boolean="true" color-when-true="olive" />
                <x-boolean :boolean="true" color-when-true="mist" />
                <x-boolean :boolean="true" color-when-true="taupe" />
                <x-boolean :boolean="true" color-when-true="black" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Livewire Click Actions" description="An option to use a Livewire click action in the icons.">
        <x-preview language="blade" :contents="$click">
            <livewire:documentation.ui.boolean />
        </x-preview>
    </x-section>
</x-layout>
