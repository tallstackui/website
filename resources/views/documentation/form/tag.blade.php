<x-layout>
    <x-slot:title>
        Form Tag
        <x-slot:version>
            v1.10
        </x-slot:version>
    </x-slot:title>
    <x-slot:description>
        Form tag component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="tag" />
    </x-slot:personalization>
    <x-warning class="mb-4">
        The tags can be inserted by pressing the <b>enter</b> or <b>comma</b> keys, and can be removed by pressing the <b>backspace</b> key.
    </x-warning>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-tag />
        </x-preview>
    </x-section>
    <x-section title="Label & Hint">
        <x-preview language="blade" :contents="$labelHint">
            <x-tag label="Frameworks"
                   hint="Select your preferred frameworks"
                   :value="['Laravel', 'Symfony', 'CodeIgniter']" />
        </x-preview>
    </x-section>
    <x-section title="Limit Options" description="An option to limit the number of tags that can be added.">
        <x-preview language="blade" :contents="$limit">
            <x-tag label="Frameworks"
                   hint="Select your preferred frameworks"
                   :limit="2"
                   :value="['Laravel']" />
        </x-preview>
    </x-section>
    <x-section title="Prefix" description="An option to set a single-character prefix.">
        <x-preview language="blade" :contents="$prefix">
            <x-tag prefix="#"
                   :value="['Laravel', 'Symfony', 'CodeIgniter']" />
        </x-preview>
        <x-warning class="mt-4">
            The prefix must be a single character.
        </x-warning>
    </x-section>
    <x-section title="Events">
        <x-preview language="blade" :contents="$events">
            <x-tag :value="['Laravel', 'Symfony', 'CodeIgniter']"
                   x-on:add="alert(`Introduced: ${$event.detail.tag}`)"
                   x-on:remove="alert(`Removed: ${$event.detail.tag}`)"
                   x-on:erase="alert(`Erased: ${$event.detail.tags}`)" />
        </x-preview>
        <x-warning class="mt-4">
            The prefix must be a single character.
        </x-warning>
    </x-section>
    <x-section title="Invalidate" description="An option to not show validation error message.">
        <x-preview language="blade" :contents="$invalidate">
            <x-tag invalidate />
        </x-preview>
    </x-section>
    <x-slot:navigation>
        <x-slot:back>
            <x-layout.footer-navigation :href="route('documentation.form.radio')" text="Form Radio" back />
        </x-slot:back>
        <x-slot:next>
            <x-layout.footer-navigation :href="route('documentation.form.toggle')" text="Form Toggle" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
