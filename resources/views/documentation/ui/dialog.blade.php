<x-layout>
    <x-slot:title>
        Dialog
    </x-slot:title>
    <x-slot:description>
        Dialog component. A small version of Modal to interact with Livewire.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="dialog" />
    </x-slot:personalization>
    <x-section title="Configuration">
        1. Insert the Dialog component on your main layout.
        <x-code language="html" :contents="$tag"/>
        2. Use the Interactions trait in your Livewire component.
        <x-code language="php" :contents="$trait"/>
        3. Dispatch the Dialog from a method.
        <x-code language="php" :contents="$dispatch"/>
        <x-warning text="This is an example. You can't dispatch all at the same time." />
    </x-section>
    <x-section>
        <x-preview title="Basic Usage" :contents="$basic">
            <livewire:documentation.interactions.dialog.examples/>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Confirmations"
                   description="Interacting with confirmation or cancellation."
                   :contents="$confirmation">
            <livewire:documentation.interactions.dialog.confirmation/>
        </x-preview>
    </x-section>
    <x-available-configuration />
    <x-slot:navigation>
        <x-slot:back>
            <x-navigation.link href="{{ route('documentation.ui.tooltip') }}" text="Tooltip" back />
        </x-slot:back>
        <x-slot:next>
            <x-navigation.link href="{{ route('documentation.ui.toast') }}" text="Toast" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
