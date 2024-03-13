@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout>
    <x-slot:title>
        Form Radio
    </x-slot:title>
    <x-slot:description>
        Form radio component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="radio" />
    </x-slot:personalization>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-radio />
        </x-preview>
    </x-section>
    <x-section title="Label">
        <x-preview language="blade" :contents="$label">
            <div class="space-y-2">
                <x-radio label="Receive Alert" />
                <x-radio label="Receive Alert" position="left" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Label Slot">
        <x-preview language="blade" :contents="$html">
            <x-radio>
                <x-slot:label>
                    I agree to the <a href="#">terms and conditions</a>
                </x-slot:label>
            </x-radio>
        </x-preview>
    </x-section>
    <x-section title="Label Alignment">
        <x-preview language="blade" :contents="$alignment">
            <div class="space-y-4">
                <x-radio>
                    <x-slot:label>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    </x-slot:label>
                </x-radio>
                <x-radio>
                    <x-slot:label start>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    </x-slot:label>
                </x-radio>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Size Variations">
        <x-preview language="blade" :contents="$sizes">
            <div class="inline-flex space-x-2">
                <x-radio xs />
                <x-radio sm />
                <x-radio md />
                <x-radio lg />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Color Variations">
        <x-preview language="blade" :contents="$colors">
            <div class="space-y-2">
                <x-radio label="Primary" checked />
                <x-radio color="secondary" label="Secondary" checked />
                <x-radio color="slate" label="Slate" checked />
                <x-radio color="gray" label="Gray" checked />
                <x-radio color="zinc" label="Zinc" checked />
                <x-radio color="neutral" label="Neutral" checked />
                <x-radio color="stone" label="Stone" checked />
                <x-radio color="red" label="Red" checked />
                <x-radio color="orange" label="Orange" checked />
                <x-radio color="amber" label="Amber" checked />
                <x-radio color="yellow" label="Yellow" checked />
                <x-radio color="lime" label="Lime" checked />
                <x-radio color="green" label="Green" checked />
                <x-radio color="emerald" label="Emerald" checked />
                <x-radio color="teal" label="Teal" checked />
                <x-radio color="cyan" label="Cyan" checked />
                <x-radio color="sky" label="Sky" checked />
                <x-radio color="blue" label="Blue" checked />
                <x-radio color="indigo" label="Indigo" checked />
                <x-radio color="violet" label="Violet" checked />
                <x-radio color="purple" label="Purple" checked />
                <x-radio color="fuchsia" label="Fuchsia" checked />
                <x-radio color="pink" label="Pink" checked />
                <x-radio color="rose" label="Rose" checked />
                <x-radio color="black" label="Black" checked />
                <x-radio color="white" label="White" checked />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Invalidate" description="An option to not show validation error message.">
        <x-preview language="blade" :contents="$invalidate">
            <x-radio label="Receive Alert" invalidate />
        </x-preview>
    </x-section>
</x-layout>
