<x-layout>
    <x-slot:title>
        Dialog
    </x-slot:title>
    <x-slot:description>
        Dialog component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="dialog" />
    </x-slot:personalization>
    <x-section title="Configuration" disable-copy>
        1. Insert the Dialog component on your main layout.
        <x-code language="html" :contents="$tag"/>
        2. Use the Interactions trait in your Livewire component.
        <x-code language="php" :contents="$trait"/>
        3. Dispatch the Dialog from a method.
        <x-code language="php" :contents="$dispatch"/>
        <x-warning text="This is an example. You can't dispatch all at the same time." />
    </x-section>
    <x-section title="Basic Usage">
        <x-preview :contents="$basic">
            <livewire:documentation.interactions.dialog.examples/>
        </x-preview>
    </x-section>
    <x-section title="Confirmations" description="Interacting with actions.">
        <x-preview :contents="$confirmation">
            <livewire:documentation.interactions.dialog.confirmation/>
        </x-preview>
    </x-section>
    <x-section title="Events" description="An option to listen to events.">
        <x-preview language="blade" :contents="$events">
            <livewire:documentation.interactions.dialog.events/>
        </x-preview>
        <x-warning class="mt-4">
            We recommend that you use listeners in one place, whether in the base layout or once per component.
        </x-warning>
    </x-section>
    <x-section title="JavaScript API" description="JavaScript API to interact with Dialog.">
        <x-code language="blade" :contents="$javascript" disable-copy />
    </x-section>
    <x-section title="Color Personalization">
        <p>
            <x-link :href="route('documentation.personalization.deep')"
                    fragment="override-component-colors"
                    :color="null"
                    underline>
                Starting from version 1.5.3 you can customize Dialog colors through deep personalization.
            </x-link>
        </p>
    </x-section>
    <x-available-configuration />
    <x-slot:navigation>
        <x-slot:back>
            <x-layout.footer-navigation :href="route('documentation.ui.tooltip')" text="Tooltip" back />
        </x-slot:back>
        <x-slot:next>
            <x-layout.footer-navigation :href="route('documentation.interaction.toast')" text="Toast" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
