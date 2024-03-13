@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout>
    <x-slot:title>
        Form Pin
        <x-slot:version>
            v1.5
        </x-slot:version>
    </x-slot:title>
    <x-slot:description>
        Form pin component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="pin" />
    </x-slot:personalization>
    <x-section title="Concept">
        Many modern applications need to validate and authorize things such
        as user registration or even login, through mechanisms such as 2FA.
        Pin input is an ideal component for situations where you need to
        request a pin (short code) from the user. <u>Starting from version 1.5.3</u>,
        the pin component has a behavior to forces typing to start from the
        first entry, following the logic of the component.
    </x-section>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-pin length="5" />
        </x-preview>
        <x-warning class="mt-4">
            The length is mandatory in any use case.
        </x-warning>
    </x-section>
    <x-section title="Label & Hint">
        <x-preview language="blade" :contents="$labelHint">
            <x-pin length="5" label="Insert the code" hint="We sent a 5-digit code to your email." />
        </x-preview>
    </x-section>
    <x-section title="Prefix" description="An option to prefix a character related to the desired short code format.">
        <x-preview language="blade" :contents="$prefix">
            <x-pin prefix="G-" length="5" />
        </x-preview>
    </x-section>
    <x-section title="Clear" description="An option to append a clear button.">
        <x-preview language="blade" :contents="$clear">
            <livewire:documentation.form.pin />
        </x-preview>
        <x-warning class="mt-4">
            The clear button will only be displayed when the input is not empty.
        </x-warning>
    </x-section>
    <x-section title="Masks" description="An option to limit the input types.">
        <x-preview language="blade" :contents="$masks">
            <div class="space-y-2">
                <x-pin length="5" label="Only Numbers" numbers />
                <x-pin length="5" label="Only Letters" letters />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Invalidate" description="An option to not show validation error message.">
        <x-preview language="blade" :contents="$invalidate">
            <x-pin length="5" invalidate />
        </x-preview>
    </x-section>
</x-layout>
