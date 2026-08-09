@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content ai="form/number">
    <x-slot:title>Form Number</x-slot>
    <x-slot:description>Form number component.</x-slot>
    <x-slot:customization>
        <livewire:customization :$customization component="Form\Number" />
    </x-slot>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-number />
        </x-preview>
    </x-section>
    <x-section
        title="Step"
        description="An option to increase/decrease for specific quantities."
    >
        <div class="space-y-4">
            <x-preview language="blade" :contents="$step">
                <x-number step="5" />
            </x-preview>
            <p>
                You can also set the step to be a decimal number:
                <x-preview language="blade" :contents="$stepDecimal">
                    <x-number step="0.3" />
                </x-preview>
            </p>
        </div>
    </x-section>
    <x-section title="Label & Hint">
        <x-preview language="blade" :contents="$labelHint">
            <x-number
                label="Quantity"
                hint="Press the plus button to increase one by one"
            />
        </x-preview>
    </x-section>
    <x-section title="Min & Max Control">
        <x-preview language="blade" :contents="$minMax">
            <x-number
                label="Quantity"
                hint="Press the plus button to increase one by one"
                min="1"
                max="10"
            />
        </x-preview>
    </x-section>
    <x-section title="Centralized">
        <x-preview language="blade" :contents="$centralized">
            <x-number centralized />
        </x-preview>
    </x-section>
    <x-section
        title="Selectable"
        description="An option to do not allow the interaction with the input."
    >
        <x-preview language="blade" :contents="$selectable">
            <x-number selectable />
        </x-preview>
    </x-section>
    <x-section
        title="Delay Control"
        description="An option to control the velocity to increase/decrease when pressing buttons"
    >
        <x-preview language="blade" :contents="$delay">
            <x-number delay="1" min="1" max="10" />
        </x-preview>
        <x-warning class="mt-4">
            The delay calculation happens as delay * 100.
        </x-warning>
    </x-section>
    <x-section
        title="Chevron Icons"
        description="An option to use other icons instead of defaults."
    >
        <x-preview language="blade" :contents="$icon">
            <x-number chevron />
        </x-preview>
    </x-section>
</x-layout>
