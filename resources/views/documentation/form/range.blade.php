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
    <x-section
        title="Dual Mode"
        new
        description="An option to pick an interval with two thumbs over a shared track."
    >
        <div class="space-y-4">
            <x-preview language="blade" :contents="$dual">
                <livewire:documentation.form.range :mode="1" />
            </x-preview>
            <p>
                Unlike the single mode, the bound property is always an indexed
                pair,
                <x-block>[start, end]</x-block>
                . When the bound value is blank the pair starts at
                <x-block>[min, max]</x-block>
                . In dual mode
                <x-block>min</x-block>
                ,
                <x-block>max</x-block>
                and
                <x-block>step</x-block>
                default to
                <x-block>0</x-block>
                ,
                <x-block>100</x-block>
                and
                <x-block>1</x-block>
                . The segment between the thumbs is painted with the component
                <x-block>color</x-block>
                .
            </p>
            <p>
                The thumbs never cross. Dragging the starting thumb past the
                ending one stops it at that value, and the other way around.
                Both landing on the same value is allowed, and while they
                overlap the one that still has room to move stays on top, so
                neither gets stuck.
            </p>
            <x-preview language="blade" :contents="$dualTooltip">
                <livewire:documentation.form.range :mode="2" />
            </x-preview>
            <p>
                Use
                <x-block>tooltip</x-block>
                to show the value of the thumb being dragged, hidden on release.
                The bubble is the same balloon the
                <x-refer :doc="['ui', 'tooltip']">tooltip</x-refer>
                component renders, anchored on an invisible marker kept over the
                thumb, so it follows the balloon color, scale and styling set
                for every tooltip and has no color or size settings of its own.
                The pair reaches the server when the thumb is released rather
                than on every intermediate value, so a drag costs a single round
                trip,
                <x-block>wire:model.live</x-block>
                included.
            </p>
            <x-warning class="mt-4">
                <x-block>tooltip</x-block>
                and an array
                <x-block>value</x-block>
                both require
                <x-block>dual</x-block>
                and throw otherwise. In dual mode the component also throws when
                <x-block>min</x-block>
                is not below
                <x-block>max</x-block>
                , when
                <x-block>step</x-block>
                is zero, negative or wider than the distance between the
                boundaries, or when the bound value is not a numeric pair inside
                those boundaries with the first value below the second.
            </x-warning>
        </div>
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
