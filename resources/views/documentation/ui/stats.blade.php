<x-layout>
    <x-slot:title>
        Stats
        <x-slot:version>
            1.20
        </x-slot:version>
    </x-slot:title>
    <x-slot:description>
        Stats components.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="stats" />
    </x-slot:personalization>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-alert>
                TallStackUi
            </x-alert>
        </x-preview>
    </x-section>
    <x-slot:navigation>
        <x-slot:back>
            <x-layout.footer-navigation :href="route('documentation.ui.slide')" text="Slide" back />
        </x-slot:back>
        <x-slot:next>
            <x-layout.footer-navigation :href="route('documentation.ui.step')" text="Step" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
