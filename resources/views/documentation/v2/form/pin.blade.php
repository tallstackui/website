@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout>
    <x-slot:title>
        Form Pin
    </x-slot:title>
    <x-slot:description>
        Form pin component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:personalization :$personalization component="Form\Pin" />
    </x-slot:personalization>
    <x-section title="Concept">
        Many modern applications need to validate and authorize things such
        as user registration or even login, through mechanisms such as 2FA.
        Pin input is an ideal component for situations where you need to
        request a pin (short code) from the user.
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
    <x-section title="Events">
        <x-preview language="blade" :contents="$events">
            <div class="space-y-2">
                <x-pin length="5" label="Filled Event" x-on:filled="alert(`Filled: ${$event.detail.model}`)" />
                <x-pin length="5" label="Clear Event" clear x-on:clear="alert(`Cleared: ${$event.detail.model}`)" />
            </div>
        </x-preview>
        <x-warning class="mt-4">
            The clear event needs the clear option to be enabled.
        </x-warning>
    </x-section>
</x-layout>
