@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout>
    <x-slot:title>
        Form Textarea
    </x-slot:title>
    <x-slot:description>
        Form textarea component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="textarea" />
    </x-slot:personalization>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-textarea />
        </x-preview>
    </x-section>
    <x-section title="Label & Hint">
        <x-preview language="blade" :contents="$labelHint">
            <x-textarea label="Name" hint="Insert the description" />
        </x-preview>
    </x-section>
    <x-section title="Required Label Indicator" description="An option to display an asterisk indicating that the field is required.">
        <x-preview language="blade" :contents="$asterisk">
            <x-textarea label="Description *" />
        </x-preview>
    </x-section>
    <x-section title="Resize">
        <x-preview language="blade" :contents="$resize">
            <x-textarea resize />
        </x-preview>
    </x-section>
    <x-section title="Resize Auto" description="An option to auto increase the size of textarea.">
        <x-preview language="blade" :contents="$resizeAuto">
            <x-textarea :rows="1" resize-auto />
        </x-preview>
    </x-section>
    <x-section title="Invalidate" description="An option to not show validation error message.">
        <x-preview language="blade" :contents="$invalidate">
            <x-textarea label="Name" hint="Insert the description" invalidate />
        </x-preview>
    </x-section>
</x-layout>
