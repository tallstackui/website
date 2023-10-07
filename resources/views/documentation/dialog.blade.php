<x-layout>
    <x-slot:title>
        Dialog
    </x-slot:title>
    <x-slot:description>
        Dialog component. A small version of Modal to interact with Livewire.
    </x-slot:description>
    <x-section>
        1. Insert the dialog tag on your layout.
        <x-code language="html" :contents="$tag" />
        2. Insert the Interactions trait in your Livewire component.
        <x-code language="php" :contents="$trait" />
        3. Dispatch the Dialog from a method.
        <x-code language="php" :contents="$dispatch" />
    </x-section>
    <x-section>
        <x-code-preview title="Basic Usage" :contents="$basic">
            <livewire:documentation.interactions.dialog.examples />
        </x-code-preview>
    </x-section>
    <x-section>
        <x-code-preview title="Confirmations Examples"
                        description="Interacting with confirmation or cancellation."
                        :contents="$confirmation">
            <livewire:documentation.interactions.dialog.confirmation-examples />
        </x-code-preview>
    </x-section>
</x-layout>
