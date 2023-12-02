<x-layout>
    <x-slot:title>
        Form Number
    </x-slot:title>
    <x-slot:description>
        Form number component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="number" />
    </x-slot:personalization>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <livewire:documentation.form.number />
        </x-preview>
    </x-section>
    <x-section title="Label & Hint">
        <x-preview language="blade" :contents="$labelHint">
            <livewire:documentation.form.number :model="1" />
        </x-preview>
    </x-section>
    <x-section title="Min & Max Control">
        <x-preview language="blade" :contents="$minMax">
            <livewire:documentation.form.number :model="2" />
        </x-preview>
    </x-section>
    <x-section title="Delay Control" description="An option to control the velocity to increase/decrease when pressing">
        <x-preview language="blade" :contents="$delay">
            <livewire:documentation.form.number :model="3" />
        </x-preview>
        <x-warning class="mt-4">
            The delay option is in MS (milliseconds).
        </x-warning>
    </x-section>
    <x-slot:navigation>
        <x-slot:back>
            <x-layout.footer-navigation :href="route('documentation.form.textarea')" text="Form Textarea" back />
        </x-slot:back>
        <x-slot:next>
            <x-layout.footer-navigation :href="route('documentation.form.checkbox')" text="Form Checkbox" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
