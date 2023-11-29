<x-layout :torchlight="false">
    <x-slot:title>
        Label Component
    </x-slot:title>
    <x-slot:description>
        The generic label component used in form components.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="label" />
    </x-slot:personalization>
    <x-internals-warning />
    <x-slot:navigation>
        <x-slot:back>
            <x-navigation.link href="{{ route('documentation.internal.hint') }}" text="Internal Hint" back />
        </x-slot:back>
        <x-slot:next>
            <x-navigation.link href="{{ route('documentation.internal.wrapper') }}" text="Internal Wrapper" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
