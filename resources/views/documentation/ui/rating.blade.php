@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content ai="rating">
    <x-slot:title>Rating</x-slot>
    <x-slot:description>Rating component.</x-slot>
    <x-slot:customization>
        <livewire:customization :$customization component="Rating" />
    </x-slot>
    <x-section title="Persist Rating" disable-copy>
        <p>
            The logic for persisting the rating in a database, is up to its own
            algorithm. When a star is pressed, the
            <x-block>evaluate</x-block>
            method is triggered, receiving the quantity of rating as a
            parameter. Let's take a look at an example:
        </p>
        <p class="mt-4">The Livewire component:</p>
        <x-code :contents="$php" disable-copy />
        <p>The associated Blade file:</p>
        <x-code :contents="$blade" language="blade" disable-copy />
        <p>
            With this example, when clicking on a star in the component, the
            <x-block>evaluate</x-block>
            method will be triggered, receiving in the
            <x-block>$quantity</x-block>
            parameter the value related to the number of rating selected. You
            can change the method used to receive the rating event by using
            <x-block>evaluate-method</x-block>
            :
        </p>
        <x-code :contents="$method" language="blade" disable-copy />
        <p>
            As the
            <x-block>rate</x-block>
            parameter is only used to define the current number of selected
            rating, you are not required to use
            <x-block>wire:model</x-block>
            . Using this approach with
            <x-block>static</x-block>
            parameter you will be able to use this component out of Livewire
            components:
        </p>
        <x-code :contents="$normal" language="blade" disable-copy />
    </x-section>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <livewire:documentation.ui.rating />
        </x-preview>
    </x-section>
    <x-section title="Rating Quantity">
        <x-preview language="blade" :contents="$quantity">
            <livewire:documentation.ui.rating :model="2" />
        </x-preview>
    </x-section>
    <x-section title="Text">
        <x-preview language="blade" :contents="$label">
            <livewire:documentation.ui.rating :model="3" />
        </x-preview>
    </x-section>
    <x-section title="Size Variations">
        <x-preview language="blade" :contents="$size">
            <livewire:documentation.ui.rating :model="4" />
        </x-preview>
    </x-section>
    <x-section title="Color Variations">
        <x-preview language="blade" :contents="$color">
            <livewire:documentation.ui.rating :model="5" />
        </x-preview>
    </x-section>
    <x-section title="Events">
        <div class="space-y-4">
            <x-preview language="blade" :contents="$events">
                <livewire:documentation.ui.rating :model="6" />
            </x-preview>
            <x-table
                :headers="[
                    ['index' => 'event', 'label' => 'Event'],
                    ['index' => 'detail', 'label' => 'Detail'],
                    ['index' => 'fired', 'label' => 'Fired when'],
                ]"
                :rows="[
                    ['event' => 'evaluate', 'detail' => '{ evaluate: { method, rate } }', 'fired' => 'A rating is set'],
                ]"
            >
                @interact("column_detail", $row)
                    <x-block>{{ $row["detail"] }}</x-block>
                @endinteract

                @interact("column_event", $row)
                    <x-block>{{ $row["event"] }}</x-block>
                @endinteract
            </x-table>
        </div>
    </x-section>
</x-layout>
