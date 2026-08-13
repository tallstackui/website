@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content ai="form/range">
    <x-slot:title>Form Range</x-slot>
    <x-slot:description>Form range component.</x-slot>
    <x-slot:customization>
        <livewire:customization :$customization component="Form\Range" />
    </x-slot>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-range />
        </x-preview>
    </x-section>
    <x-section title="Label & Hint">
        <x-preview language="blade" :contents="$labelHint">
            <div class="space-y-2">
                <x-range
                    label="Quantity"
                    hint="Select an average desired salary"
                />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Readonly & Disabled">
        <x-preview language="blade" :contents="$readonlyDisabled">
            <div class="space-y-2">
                <x-range label="Readonly" value="50" readonly />
                <x-range label="Disabled" value="50" disabled />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Size Variations">
        <x-preview language="blade" :contents="$sizes">
            <div class="space-y-2">
                <x-range sm />
                <x-range md />
                <x-range lg />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Color Variations">
        <x-preview language="blade" :contents="$colors">
            <div class="space-y-2">
                <x-range label="Primary" />
                <x-range color="secondary" label="Secondary" />
                <x-range color="slate" label="Slate" />
                <x-range color="gray" label="Gray" />
                <x-range color="zinc" label="Zinc" />
                <x-range color="neutral" label="Neutral" />
                <x-range color="stone" label="Stone" />
                <x-range color="red" label="Red" />
                <x-range color="orange" label="Orange" />
                <x-range color="amber" label="Amber" />
                <x-range color="yellow" label="Yellow" />
                <x-range color="lime" label="Lime" />
                <x-range color="green" label="Green" />
                <x-range color="emerald" label="Emerald" />
                <x-range color="teal" label="Teal" />
                <x-range color="cyan" label="Cyan" />
                <x-range color="sky" label="Sky" />
                <x-range color="blue" label="Blue" />
                <x-range color="indigo" label="Indigo" />
                <x-range color="violet" label="Violet" />
                <x-range color="purple" label="Purple" />
                <x-range color="fuchsia" label="Fuchsia" />
                <x-range color="pink" label="Pink" />
                <x-range color="rose" label="Rose" />
                <x-range color="mauve" label="Mauve" />
                <x-range color="olive" label="Olive" />
                <x-range color="mist" label="Mist" />
                <x-range color="taupe" label="Taupe" />
                <x-range color="black" label="Black" />
            </div>
        </x-preview>
    </x-section>
</x-layout>
