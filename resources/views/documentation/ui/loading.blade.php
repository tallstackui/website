<x-layout>
    <x-slot:title>
        Loading
    </x-slot:title>
    <x-slot:description>
        Loading component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="loading" />
    </x-slot:personalization>
    <x-section title="Concept" :copy="false">
        <p>
            <u>Version 1.2.0</u> of TallStackUI introduces a new component: Loading.
            This component aims to be used to display a full-page loading overlay for
            situations where you are waiting for a Livewire component to finish an operation.
        </p>
    </x-section>
    <x-section title="Attributes" :copy="false">
        <p>
            When using the Loading component you shouldn't specify the <x-block>wire:loading</x-block>
            and <x-block>wire:target</x-block> attributes. Instead of it, you need to specify the <x-block>loading</x-block>
            and <x-block>delay</x-block> attributes. Behind the scenes, these attributes contain
            the same effects as Livewire attributes, but with a short way of declaring them.
        </p>
        <x-code language="blade" :contents="$interaction" :copy="false" />
    </x-section>
    <x-section title="Usage" :copy="false">
        <p>
            The correct way to use the Loading component is to call it in the Blade file
            of the Livewire component you want to display the loading overlay. Let's take a look at an example:
        </p>
        <x-code language="blade" :contents="$usage" :copy="false" />
    </x-section>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <livewire:documentation.ui.loading />
        </x-preview>
    </x-section>
    <x-section title="Text Slot">
        <x-preview language="blade" :contents="$text">
            <livewire:documentation.ui.loading :model="1" />
        </x-preview>
    </x-section>
    <x-section title="Target & Delay Options">
        <x-preview language="blade" :contents="$targetDelay">
            <livewire:documentation.ui.loading :model="2" />
        </x-preview>
    </x-section>
    <x-available-configuration />
    <x-slot:navigation>
        <x-slot:back>
            <x-layout.footer-navigation :href="route('documentation.ui.modal')" text="Modal" back />
        </x-slot:back>
        <x-slot:next>
            <x-layout.footer-navigation :href="route('documentation.ui.select')" text="Select" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
