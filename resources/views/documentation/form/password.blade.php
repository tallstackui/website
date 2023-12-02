<x-layout>
    <x-slot:title>
        Form Input Password
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
    <x-slot:navigation>
        <x-slot:back>
            <x-layout.footer-navigation :href="route('documentation.form.input')" text="Form Input" back />
        </x-slot:back>
        <x-slot:next>
            <x-layout.footer-navigation :href="route('documentation.form.textarea')" text="Form Textarea" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
