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
    <x-section title="Required Label Indicator" description="An asterisk in the label to indicate that the field is required.">
        <x-preview language="blade" :contents="$asterisk">
            <x-textarea label="Description *" />
        </x-preview>
    </x-section>
    <x-section title="Resize">
        <x-preview language="blade" :contents="$resize">
            <x-textarea resize />
        </x-preview>
    </x-section>
    <x-section title="Resize Auto" description="Start to type in the textarea to see the resize-auto in action.">
        <x-preview language="blade" :contents="$resizeAuto">
            <x-textarea :rows="1" resize-auto />
        </x-preview>
    </x-section>
    <x-slot:navigation>
        <x-slot:back>
            <x-layout.footer-navigation :href="route('documentation.form.password')" text="Form Password" back />
        </x-slot:back>
        <x-slot:next>
            <x-layout.footer-navigation :href="route('documentation.form.number')" text="Form Number" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
