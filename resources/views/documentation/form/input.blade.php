<x-layout>
    <x-slot:title>
        Form Input
    </x-slot:title>
    <x-slot:description>
        Form input component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="input" />
    </x-slot:personalization>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-input />
        </x-preview>
    </x-section>
    <x-section title="Label & Hint">
        <x-preview language="blade" :contents="$labelHint">
            <x-input label="Name" hint="Insert your name" />
        </x-preview>
    </x-section>
    <x-section title="Required Label Indicator" description="An asterisk in the label to indicate that the field is required.">
        <x-preview language="blade" :contents="$asterisk">
            <x-input label="Name *" hint="Insert your name" />
        </x-preview>
    </x-section>
    <x-section title="Icon Slot">
        <x-preview language="blade" :contents="$icons">
            <div class="space-y-2">
                <x-input label="Name" icon="users" />
                <x-input label="Name" icon="cog" position="right" />
            </div>
        </x-preview>
    </x-section>
    <x-slot:navigation>
        <x-slot:back>
            <x-navigation.link href="{{ route('documentation.installation') }}" text="Installation" back />
        </x-slot:back>
        <x-slot:next>
            <x-navigation.link href="{{ route('documentation.form.password') }}" text="Form Password" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
