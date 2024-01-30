@php($defaults = \TallStackUi\View\Components\Form\Password::defaults())

<x-layout>
    <x-slot:title>
        Form Password
    </x-slot:title>
    <x-slot:description>
        Form password component. Show or hide password value.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="password" />
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
    <x-section title="Required Label Indicator" description="An asterisk in the label to indicate that the field is required.">
        <x-preview language="blade" :contents="$asterisk">
            <x-password label="Password *" hint="Insert your password" value="TallStackUi" />
        </x-preview>
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
            <x-password value="TallStackUI" x-on:reveal="alert('Password Revealed')" />
        </x-preview>
    </x-section>
    <x-section title="Invalidate" description="An option to not show validation error message">
        <x-preview language="blade" :contents="$invalidate">
            <x-password label="Password" hint="Insert your best password" value="TallStackUi"  invalidate />
        </x-preview>
    </x-section>
    <x-slot:navigation>
        <x-slot:back>
            <x-layout.footer-navigation :href="route('documentation.form.input')" text="Form Input" back />
        </x-slot:back>
        <x-slot:next>
            <x-layout.footer-navigation :href="route('documentation.form.textarea')" text="Form Textarea" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
