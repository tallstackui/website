<x-layout :torchlight="false">
    <x-slot:title>
        Floating Component
    </x-slot:title>
    <x-slot:description>
        The generic floating component used in: form date, form time, form
        password, form upload, form color, dropdown, and select styled.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="floating" />
    </x-slot:personalization>
    <x-internals-warning />
    <x-slot:navigation>
        <x-slot:back>
            <x-layout.footer-navigation :href="route('documentation.internal.error')" text="Internal Error" back />
        </x-slot:back>
        <x-slot:next>
            <x-layout.footer-navigation :href="route('documentation.internal.hint')" text="Internal Hint" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
