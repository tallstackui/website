@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content ai="form/input-select">
    <x-slot:title>
        Input Select
    </x-slot:title>
    <x-slot:description>
        Input select component.
    </x-slot:description>
    <x-slot:customization>
        <livewire:customization :$customization component="Form\InputSelect" title="Form Input Select" />
    </x-slot:customization>
    <x-section title="Concept" disable-copy>
        The Input Select component is a combination of the normal input component with <x-block>select.native</x-block> or
        <x-block>select.styled</x-block> components. This combination allows you to create more complex and feature-rich select
        inputs, with the possibility of adding icons, prefixes, suffixes, hints and more. All available options of each component
        are still available when using the Input Select component, so you can mix and match the features of both components to create
        the perfect select input for your application.
        <x-warning class="mt-4">
            One of the position is mandatory for the input select component, either left or right.
        </x-warning>
    </x-section>
    <x-section title="Select Native">
        <x-preview language="blade" :contents="$native">
            <x-input.select label="Phone Number" icon="phone" clearable>
                <x-slot:left>
                    <x-select.native :options="['+1', '+44', '+55', '+91']" />
                </x-slot:left>
            </x-input.select>
        </x-preview>
    </x-section>
    <x-section title="Select Styled" anchor="styled-left-addon">
        <x-preview language="blade" :contents="$styled">
            <x-input.select label="E-mail Provider" icon="envelope" clearable>
                <x-slot:right>
                    <x-select.styled :options="['@gmail.com', '@yahoo.com', '@outlook.com']" />
                </x-slot:right>
            </x-input.select>
        </x-preview>
    </x-section>
</x-layout>
