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
</x-layout>
