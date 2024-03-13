@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout>
    <x-slot:title>
        Form Number
        <x-slot:version>
            v1.2
        </x-slot:version>
    </x-slot:title>
    <x-slot:description>
        Form number component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="number" />
    </x-slot:personalization>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-number />
        </x-preview>
    </x-section>
    <x-section title="Label & Hint">
        <x-preview language="blade" :contents="$labelHint">
            <x-number label="Quantity" hint="Press the plus button to increase one by one" />
        </x-preview>
    </x-section>
    <x-section title="Min & Max Control">
        <x-preview language="blade" :contents="$minMax">
            <x-number label="Quantity" hint="Press the plus button to increase one by one" min="1" max="10" />
        </x-preview>
    </x-section>
    <x-section title="Centralized">
        <x-preview language="blade" :contents="$centralized">
            <x-number centralized />
        </x-preview>
    </x-section>
    <x-section title="Selectable" description="An option to do not allow the interaction with the input.">
        <x-preview language="blade" :contents="$selectable">
            <x-number selectable />
        </x-preview>
    </x-section>
    <x-section title="Delay Control" description="An option to control the velocity to increase/decrease when pressing buttons">
        <x-preview language="blade" :contents="$delay">
            <x-number delay="1" min="1" max="10" />
        </x-preview>
        <x-warning class="mt-4">
            The delay calculation happens as delay * 100.
        </x-warning>
    </x-section>
    <x-section title="Chevron Icons" description="An option to use other icons instead of defaults.">
        <x-preview language="blade" :contents="$icon">
            <x-number chevron />
        </x-preview>
    </x-section>
    <x-section title="Invalidate" description="An option to not show validation error message.">
        <x-preview language="blade" :contents="$invalidate">
            <x-number label="Quantity" invalidate />
        </x-preview>
    </x-section>
    <x-section title="Livewire Bind Concern">
        <p>
            Although the number component can be used with <x-block>wire:model.live</x-block> and <x-block>wire:model.blur</x-block>, due to the way Livewire works,
            we recommend that you use it with <x-block>wire:model</x-block> to avoid value
            synchronization issues between the component and the Livewire updates.
        </p>
    </x-section>
</x-layout>
