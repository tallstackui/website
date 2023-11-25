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
    <x-section>
        <x-preview title="Basic Usage"
                   language="blade"
                   :contents="$basic">
            <x-password value="TallStackUi" />
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Label & Hint"
                   language="blade"
                   :contents="$labelHint">
            <x-password label="Password" hint="Insert your best password" value="TallStackUi" />
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Required Label Indicator"
                   description="You can use a asterisk in the label to indicate that the field is required."
                   language="blade"
                   :contents="$asterisk">
            <x-password label="Password *" hint="Insert your password" value="TallStackUi" />
        </x-preview>
    </x-section>
    <x-slot:navigation>
        <x-slot:back>
            <x-navigation.link href="{{ route('documentation.form.input') }}" text="Form Input" back />
        </x-slot:back>
        <x-slot:next>
            <x-navigation.link href="{{ route('documentation.form.textarea') }}" text="Form Textarea" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
