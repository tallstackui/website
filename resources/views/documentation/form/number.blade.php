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
    <x-section title="Delay Control" description="An option to control the velocity to increase/decrease when pressing buttons">
        <x-preview language="blade" :contents="$delay">
            <livewire:documentation.form.number :model="3" />
        </x-preview>
        <x-warning class="mt-4">
            The delay calculation happens as delay * 100.
        </x-warning>
    </x-section>
    <x-section title="Chevron Icons" description="An option to use other icons instead of defaults.">
        <x-preview language="blade" :contents="$icon">
            <livewire:documentation.form.number :model="4" />
        </x-preview>
    </x-section>
    <x-section title="Invalidate" description="An option to not show validation error message.">
        <x-preview language="blade" :contents="$invalidate">
            <x-number label="Quantity" invalidate />
        </x-preview>
    </x-section>
    <x-section title="Livewire Bind Concern">
        <p>
            Although the number component can be used with <x-block>wire:model.live</x-block> and <x-block>wire:model.blur</x-block>, due to the way Livewire works,
            we recommend that you use it with <x-block>wire:model</x-block> to avoid value
            synchronization issues between the component and the Livewire updates.
        </p>
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
