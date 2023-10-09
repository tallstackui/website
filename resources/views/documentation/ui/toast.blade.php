<x-layout>
    <x-slot:title>
        Toast
    </x-slot:title>
    <x-slot:description>
        Toast component. A notification style to interact with Livewire.
    </x-slot:description>
    <x-section>
        1. Insert the Toast component on your main layout.
        <x-code language="html" :contents="$tag"/>
        2. Use the Interactions trait in your Livewire component.
        <x-code language="php" :contents="$trait"/>
        3. Dispatch the Toast from a method.
        <x-code language="php" :contents="$dispatch"/>
        <x-alert text="This is an example. You can't dispatch all at the same time." color="pink" icon="exclamation-circle" translucent />
    </x-section>
    <x-section>
        <x-preview title="Basic Usage" :contents="$basic">
            <livewire:documentation.interactions.toast.examples/>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Confirmations Examples"
                   description="Interacting with confirmation or cancellation."
                   :contents="$confirmation">
            <livewire:documentation.interactions.toast.confirmation/>
        </x-preview>
    </x-section>
    <x-section title="Personalizations">
        1. You can personalize the
        <x-block>z-index</x-block>
        of the Toast component:
        <x-code language="html" :contents="$zIndex"/>
        1. You can personalize the positions of the Toast component:
        <x-code language="html" :contents="$positions"/>
    </x-section>
</x-layout>
