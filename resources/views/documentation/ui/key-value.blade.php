@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content ai="key-value">
    <x-slot:title>
        KeyValue
    </x-slot:title>
    <x-slot:description>
        KeyValue component.
    </x-slot:description>
    <x-slot:customization>
        <livewire:customization :$customization component="KeyValue" />
    </x-slot:customization>
    <x-section title="Concept" disable-copy>
        <div class="space-y-4">
            <p>
                Built on top of Filament's <x-block>KeyValue</x-block> form component with features like Stripe's Product and Price <x-block>metadata</x-block>
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
    <x-section title="Label & Value" description="An option to customize the headers of the component.">
        <div class="space-y-4">
            <x-preview language="blade" :contents="$labelValue">
                <livewire:documentation.ui.key-value :model="2" />
            </x-preview>
            <p>
                You can customize all translations of the component by <a href="{{ route('documentation', ['translation']) }}" class="underline" wire:navigate>publishing the translations files.</a>
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
    <x-section title="Compact" new description="Tightens the vertical padding of the header, the rows, the empty message and the add button, leaving the horizontal padding, the type scale and the colors alone.">
        <x-preview language="blade" :contents="$compact">
            <livewire:documentation.ui.key-value :model="10" />
        </x-preview>
        <x-warning class="mt-4">
            A compact row carries the same <x-block>py-2.5</x-block> as a compact <x-block>x-table</x-block> data cell,
            so a page holding both reads as one rhythm. <x-block>deletable</x-block> is the exception: those rows
            already carry no vertical padding, so there is nothing left for <x-block>compact</x-block> to take.
        </x-warning>
    </x-section>
    <x-section title="Color" new description="Tints the header text and the add button, keeping the flat treatment. Accepts every TallStackUI color plus black.">
        <x-preview language="blade" :contents="$color">
            <livewire:documentation.ui.key-value :model="11" />
        </x-preview>
        <x-warning class="mt-4">
            The header and the button do not default alike. The header is a caption, so it stays neutral until a color
            is asked for; the button is an action, so it carries <x-block>primary</x-block> unasked.
        </x-warning>
    </x-section>
    <x-section title="Colorless" new description="color has no off value: leaving it out is what gives the button its primary. colorless is that way, in light and dark, and it wins over an explicit color.">
        <x-preview language="blade" :contents="$colorless">
            <livewire:documentation.ui.key-value :model="12" />
        </x-preview>
    </x-section>
</x-layout>
