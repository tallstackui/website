@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout>
    <x-slot:title>
        Form Color
    </x-slot:title>
    <x-slot:description>
        Form color component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.v1.personalization :$personalization component="color" />
    </x-slot:personalization>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-color />
        </x-preview>
    </x-section>
    <x-section title="Label & Hint">
        <x-preview language="blade" :contents="$labelHint">
            <x-color label="Color" hint="Select your favorite color or insert a hexadecimal value." />
        </x-preview>
    </x-section>
    <x-section title="Picker Mode" description="An option to pick the color using a different selector.">
        <x-preview language="blade" :contents="$picker">
            <x-color picker />
        </x-preview>
    </x-section>
    <x-section title="Selectable" description="An option to force the color selection through the color selector box.">
        <x-preview language="blade" :contents="$selectable">
            <x-color selectable picker />
        </x-preview>
        <x-warning class="mt-4">
            This will transform the input in readonly and open the color selector box when the input is clicked.
        </x-warning>
    </x-section>
    <x-section title="Custom Colors" description="An option to specific your own hexadecimal colors.">
        <x-preview language="blade" :contents="$custom">
            <x-color :colors="['#83493D', '#3D8357', '#693D83', '#3AB3D1', '#5DD116']" />
        </x-preview>
    </x-section>
    <x-section title="Clearable" description="An option to display an icon that allows quick clearing of the selected color.">
        <x-preview language="blade" :contents="$clearable">
            <x-color selectable picker clearable />
        </x-preview>
    </x-section>
    <x-section title="Events">
        <x-preview language="blade" :contents="$events">
            <x-color picker x-on:set="alert(`Selected Color: ${$event.detail.color}`)" />
        </x-preview>
    </x-section>
    <x-available-configuration />
</x-layout>
