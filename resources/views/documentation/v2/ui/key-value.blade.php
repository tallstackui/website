@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content>
    <x-slot:title>
        KeyValue
    </x-slot:title>
    <x-slot:description>
        KeyValue component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:personalization :$personalization component="KeyValue" />
    </x-slot:personalization>
    <x-section title="Concept" disable-copy>
        <div class="space-y-4">
            <p>
                Built on top of Filament's <x-block>KeyValue</x-block> Form Component with features like Stripe's Product and Price <x-block>metadata</x-block>
                in mind, the <x-block>KeyValue</x-block> component was ideally designed to handle json values where you have a value associated with a key.
                You must make sure to use the <x-block>KeyValue</x-block> inside a Livewire component to bind a <x-block>wire:model</x-block>
                that has an array of arrays containing <x-block>key</x-block> and <x-block>value</x-block>:
            </p>
            <x-code :contents="$basicPhp" disable-copy />
            <x-code :contents="$basicBlade" language="blade" />
        </div>
    </x-section>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <livewire:documentation.ui.key-value />
        </x-preview>
    </x-section>
    <x-section title="Label & Value" description="An option to personalize the headers of the component.">
        <div class="space-y-4">
            <x-preview language="blade" :contents="$labelValue">
                <livewire:documentation.ui.key-value :model="2" />
            </x-preview>
            <p>
                You can personalize all translations of the component by <a href="{{ route('documentation', ['v2', 'translation']) }}" class="underline" wire:navigate>publishing the translations files.</a>
            </p>
        </div>
    </x-section>
    <x-section title="Without Placeholders">
        <x-preview language="blade" :contents="$placeholders">
            <livewire:documentation.ui.key-value :model="3" />
        </x-preview>
    </x-section>
    <x-section title="Limit">
        <x-preview language="blade" :contents="$limit">
            <livewire:documentation.ui.key-value :model="4" />
        </x-preview>
    </x-section>
    <x-section title="Static" description="An option to do not display the add row button.">
        <x-preview language="blade" :contents="$static">
            <livewire:documentation.ui.key-value :model="5" />
        </x-preview>
    </x-section>
    <x-section title="Deletable">
        <div class="space-y-4">
            <p>
                By default, the <x-block>delete</x-block> parameter will only enable the button on the right side of the row to
                allow the person to delete the row visually, if you are using <x-block>wire:model</x-block>. To delete on the
                server, you have two options available. The first is to use <x-block>wire:model.live</x-block> to enable Livewire's "live" behavior.
            </p>
            <x-preview language="blade" :contents="$delete">
                <livewire:documentation.ui.key-value :model="6" />
            </x-preview>
            <p>
                Alternatively, you can add the <x-block>delete-method</x-block> parameter specifying the name of a public method in
                the component. This way, when the button is pressed, the row will be deleted in the client-side (visually) and also the method
                will be called and it will receive two arguments: <x-block>index</x-block> and <x-block>rows</x-block>.
            </p>
            <x-code :contents="$deleteMethodPhp" />
            <x-code :contents="$deleteMethod" language="blade" />
        </div>
    </x-section>
    <x-section title="Change Delete Icon">
        <x-preview language="blade" :contents="$deleteIcon">
            <livewire:documentation.ui.key-value :model="7" />
        </x-preview>
    </x-section>
    <x-section title="Slots">
        <x-preview language="blade" :contents="$slots">
            <livewire:documentation.ui.key-value :model="8" />
        </x-preview>
    </x-section>
    <x-section title="Events">
        <x-preview language="blade" :contents="$events">
            <livewire:documentation.ui.key-value :model="9" />
        </x-preview>
    </x-section>
</x-layout>
