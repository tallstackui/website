@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content ai="form/color">
    <x-slot:title>Form Color</x-slot:title>
    <x-slot:description>Form color component.</x-slot:description>
    <x-slot:customization>
        <livewire:customization :$customization component="Form\Color" />
    </x-slot:customization>
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
    <x-section title="Clearable">
        <x-preview language="blade" :contents="$clearable">
            <x-color selectable picker clearable />
        </x-preview>
    </x-section>
    <x-section title="Exclude Step" description="An option to exclude a step from the color selector in picker mode.">
        <x-preview language="blade" :contents="$excludeStep">
            <x-color picker excluded-step="500" />
        </x-preview>
        <x-warning class="mt-4"> Excluded step can only be used with <x-block>picker</x-block> mode. </x-warning>
    </x-section>
    <x-section
        title="Exclude Color"
        description="An option to exclude a specific color from the color selector in picker mode."
    >
        <x-preview language="blade" :contents="$excludeColor">
            <x-color picker excluded-color="red" />
        </x-preview>
        <x-warning class="mt-4"> Excluded step can only be used with <x-block>picker</x-block> mode. </x-warning>
    </x-section>
    <x-section title="Events">
        <x-preview language="blade" :contents="$events">
            <x-color picker x-on:set="alert(`Selected Color: ${$event.detail.color}`)" />
        </x-preview>
    </x-section>
    <x-section
        title="Configuration"
        new
        description="picker, selectable and clearable exist as global defaults, resolved through the usual rule: the inline prop always wins. excluded-step keeps requiring the picker, whichever side enables it."
    >
        <x-code language="php" :contents="$configuration" />
        <x-warning warning title="The custom colors key was renamed" class="mt-4">
            The configuration documented <x-block>custom</x-block> while the resolution read <x-block>colors</x-block>,
            so the global palette silently did nothing. The key is now <x-block>colors</x-block>, matching the prop it
            feeds. Applications that guessed <x-block>colors</x-block> keep working; anything set under
            <x-block>custom</x-block> must be renamed.
        </x-warning>
    </x-section>
    <x-available-configuration />
</x-layout>
