<x-layout :torchlight="false">
    <x-slot:title>
        Error Component
    </x-slot:title>
    <x-slot:description>
        The generic error component used in form components.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="error" />
    </x-slot:personalization>
    <x-internals-warning />
</x-layout>
