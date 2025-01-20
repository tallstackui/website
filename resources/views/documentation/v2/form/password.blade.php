@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
    $defaults = config('tallstackui.settings.form.password.rules');
@endphp

<x-layout>
    <x-slot:title>
        Form Password
    </x-slot:title>
    <x-slot:description>
        Form password component. Show or hide password value.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.v1.personalization :$personalization component="password" />
    </x-slot:personalization>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-password value="TallStackUi" />
        </x-preview>
    </x-section>
    <x-section title="Label & Hint">
        <x-preview language="blade" :contents="$labelHint">
            <x-password label="Password" hint="Insert your best password" value="TallStackUi" />
        </x-preview>
    </x-section>
    <x-section title="Required Label Indicator" description="An option to display an asterisk indicating that the field is required.">
        <x-preview language="blade" :contents="$asterisk">
            <x-password label="Password *" hint="Insert your password" value="TallStackUi" />
        </x-preview>
    </x-section>
    <x-section title="Caps Lock Indicator" description="An option to control the caps lock indicator.">
        <x-preview language="blade" :contents="$capsLock">
            <x-password hint="Activate caps lock to see the indicator." />
        </x-preview>
        <x-warning class="mt-4">
            The caps lock indicator does not work on mobile devices.
        </x-warning>
    </x-section>
    <x-section title="Format Validator" description="An option to visually validate the format of the entered password.">
        <x-preview language="blade" :contents="$formatValidator">
            <x-password :rules="['min:8', 'symbols:!@#', 'numbers', 'mixed']" />
        </x-preview>
        <x-warning class="mt-4">
            <ul class="list-decimal list-inside text-sm">
                <li>If you do not specify the <b>min</b> size then the default size will be <b>{{ $defaults['min'] }}</b></li>
                <li>If you do not specify the <b>symbols</b> then the default symbols will be <b>{{ $defaults['symbols'] }}</b></li>
            </ul>
        </x-warning>
    </x-section>
    <x-section title="Password Generator">
        <x-preview language="blade" :contents="$passwordGenerator">
            <x-password generator :rules="['min:8', 'symbols', 'numbers', 'mixed']" />
        </x-preview>
        <x-warning class="mt-4">
            <ul class="list-decimal list-inside text-sm">
                <li class="underline">The generator requires the <b>rules</b> attributes.</li>
                <li>The generated password will match the rules passed to the component.</li>
            </ul>
        </x-warning>
    </x-section>
    <x-section title="Events">
        <x-preview language="blade" :contents="$events">
            <x-password value="TallStackUI"
                        generator
                        :rules="['min:8', 'symbols', 'numbers', 'mixed']"
                        x-on:reveal="alert(`Password Revealed: ${$event.detail.status}`)"
                        x-on:generate="alert(`Password Generated: ${$event.detail.password}`)" />
        </x-preview>
    </x-section>
</x-layout>
