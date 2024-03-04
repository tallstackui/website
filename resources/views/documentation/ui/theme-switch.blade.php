<x-layout>
    <x-slot:title>
        Theme Switch
        <x-slot:version>
            1.20
        </x-slot:version>
    </x-slot:title>
    <x-slot:description>
        Theme switch components.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="theme-switch" />
    </x-slot:personalization>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-theme-switch />
        </x-preview>
    </x-section>
    <x-slot:navigation>
        <x-slot:back>
            <x-layout.footer-navigation :href="route('documentation.ui.step')" text="Step" back />
        </x-slot:back>
        <x-slot:next>
            <x-layout.footer-navigation :href="route('documentation.ui.tab')" text="Tab" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
