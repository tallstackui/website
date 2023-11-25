<x-layout :torchlight="false">
    <x-slot:title>
        Wrapper Component
    </x-slot:title>
    <x-slot:description>
        The generic error component used in form components.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :personalization="$personalization['input']" component="wrapper.input" />
        <livewire:documentation.personalization :personalization="$personalization['radio']" component="wrapper.radio" />
    </x-slot:personalization>
    <x-internals-warning />
    <x-slot:navigation>
        <x-slot:back>
            <x-navigation.link href="{{ route('documentation.internal.label') }}" text="Internal Label" back />
        </x-slot:back>
        <x-slot:next>
            <x-navigation.link href="{{ route('documentation.configuration') }}" text="Configurations" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
