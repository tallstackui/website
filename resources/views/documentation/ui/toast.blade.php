<x-layout>
    <x-slot:title>
        Toast
    </x-slot:title>
    <x-slot:description>
        Toast component. A notification style to interact with Livewire.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="toast" />
    </x-slot:personalization>
    <x-section title="Configuration">
        1. Insert the Toast component on your main layout.
        <x-code language="html" :contents="$tag"/>
        2. Use the Interactions trait in your Livewire component.
        <x-code language="php" :contents="$trait"/>
        3. Dispatch the Toast from a method.
        <x-code language="php" :contents="$dispatch"/>
        <x-warning text="This is an example. You can't dispatch all at the same time." />
    </x-section>
    <x-section>
        <x-preview title="Basic Usage" :contents="$basic">
            <livewire:documentation.interactions.toast.examples/>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Confirmations"
                   description="Interacting with confirmation or cancellation."
                   :contents="$confirmation">
            <livewire:documentation.interactions.toast.confirmation/>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Time Control"
                   description="Increase the time to show the toast."
                   :contents="$time">
            <livewire:documentation.interactions.toast.timeout/>
        </x-preview>
    </x-section>
    <x-available-configuration />
    <x-slot:navigation>
        <x-slot:back>
            <x-navigation.link href="{{ route('documentation.ui.dialog') }}" text="Dialog" back />
        </x-slot:back>
        <x-slot:next>
            <x-navigation.link href="{{ route('documentation.internal.error') }}" text="Internal Error" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
