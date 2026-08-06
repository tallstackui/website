@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content ai="form/textarea">
    <x-slot:title>
        Form Textarea
    </x-slot:title>
    <x-slot:description>
        Form textarea component.
    </x-slot:description>
    <x-slot:customization>
        <livewire:customization :$customization component="Form\Textarea" />
    </x-slot:customization>
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
            <x-textarea resize-auto />
        </x-preview>
    </x-section>
    <x-section title="Character Count" description="An option to show the number of characters.">
        <div class="space-y-4">
            <x-preview language="blade" :contents="$count">
                <div class="mb-2 space-y-8">
                    <x-textarea maxlength="10" count />
                    <x-textarea count />
                </div>
            </x-preview>
            <x-warning>
                The character count element uses an absolute position, make sure to leave space between the elements below the component. Otherwise the number may appear on top of the HTML elements.
            </x-warning>
        </div>
    </x-section>
</x-layout>
