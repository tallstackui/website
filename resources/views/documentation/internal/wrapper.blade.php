<x-layout :torchlight="false">
    <x-slot:title>
        Wrapper Component
    </x-slot:title>
    <x-slot:description>
        The generic wrapper component used to wrapper form components.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :personalization="$personalization['input']" component="wrapper.input" />
        <livewire:documentation.personalization :personalization="$personalization['radio']" component="wrapper.radio" />
    </x-slot:personalization>
    <x-internals-warning />
</x-layout>
