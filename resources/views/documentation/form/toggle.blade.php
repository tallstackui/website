@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout>
    <x-slot:title>
        Form Toggle
    </x-slot:title>
    <x-slot:description>
        Form toggle component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="toggle" />
    </x-slot:personalization>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-toggle />
        </x-preview>
    </x-section>
    <x-section title="Label">
        <x-preview language="blade" :contents="$label">
            <div class="space-y-2">
                <x-toggle label="Receive Alert" />
                <x-toggle label="Receive Alert" position="left" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Label Slot">
        <x-preview language="blade" :contents="$html">
            <x-toggle>
                <x-slot:label>
                    I agree to the <a href="#">terms and conditions</a>
                </x-slot:label>
            </x-toggle>
        </x-preview>
    </x-section>
    <x-section title="Label Alignment">
        <x-preview language="blade" :contents="$alignment">
            <div class="space-y-4">
                <x-toggle>
                    <x-slot:label>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    </x-slot:label>
                </x-toggle>
                <x-toggle>
                    <x-slot:label start>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    </x-slot:label>
                </x-toggle>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Size Variations">
        <x-preview language="blade" :contents="$sizes">
            <div class="inline-flex space-x-2">
                <x-toggle xs />
                <x-toggle sm />
                <x-toggle md />
                <x-toggle lg />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Color Variations">
        <x-preview language="blade" :contents="$colors">
            <div class="space-y-2">
                <x-toggle label="Primary" checked />
                <x-toggle color="secondary" label="Secondary" checked />
                <x-toggle color="slate" label="Slate" checked />
                <x-toggle color="gray" label="Gray" checked />
                <x-toggle color="zinc" label="Zinc" checked />
                <x-toggle color="neutral" label="Neutral" checked />
                <x-toggle color="stone" label="Stone" checked />
                <x-toggle color="red" label="Red" checked />
                <x-toggle color="orange" label="Orange" checked />
                <x-toggle color="amber" label="Amber" checked />
                <x-toggle color="yellow" label="Yellow" checked />
                <x-toggle color="lime" label="Lime" checked />
                <x-toggle color="green" label="Green" checked />
                <x-toggle color="emerald" label="Emerald" checked />
                <x-toggle color="teal" label="Teal" checked />
                <x-toggle color="cyan" label="Cyan" checked />
                <x-toggle color="sky" label="Sky" checked />
                <x-toggle color="blue" label="Blue" checked />
                <x-toggle color="indigo" label="Indigo" checked />
                <x-toggle color="violet" label="Violet" checked />
                <x-toggle color="purple" label="Purple" checked />
                <x-toggle color="fuchsia" label="Fuchsia" checked />
                <x-toggle color="pink" label="Pink" checked />
                <x-toggle color="rose" label="Rose" checked />
                <x-toggle color="black" label="Black" checked />
                <x-toggle color="white" label="White" checked />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Invalidate" description="An option to not show validation error message.">
        <x-preview language="blade" :contents="$invalidate">
            <x-toggle label="Receive Alert" invalidate />
        </x-preview>
    </x-section>
</x-layout>
