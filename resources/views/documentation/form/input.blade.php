<x-layout>
    <x-slot:title>
        Form Input
    </x-slot:title>
    <x-slot:description>
        Form input component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization component="input" />
    </x-slot:personalization>
    <x-section>
        <x-preview title="Basic Usage"
                   language="blade"
                   :contents="$basic">
            <x-input />
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Label & Hint"
                   language="blade"
                   :contents="$labelHint">
            <x-input label="Name" hint="Insert your name" />
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Icon Slot"
                   language="blade"
                   :contents="$icons">
            <div class="space-y-2">
                <x-input label="Name" icon="users" />
                <x-input label="Name" icon="cog" position="right" />
            </div>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Disabled & Readonly"
                   language="blade"
                   :contents="$effects">
            <div class="space-y-2">
                <x-input label="Name" value="TallStackUi" disabled />
                <x-input label="Name" value="TallStackUi" readonly />
            </div>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Livewire Validation Error"
                   description="Press the save button to see the validation error."
                   language="blade"
                   :contents="$livewire">
            <livewire:documentation.form.input />
        </x-preview>
    </x-section>
    <x-available-configuration />
</x-layout>
