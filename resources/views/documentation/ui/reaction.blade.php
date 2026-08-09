@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content ai="reaction">
    <x-slot:title>Reaction</x-slot>
    <x-slot:description>Reaction component.</x-slot>
    <x-slot:customization>
        <livewire:customization :$customization component="Reaction" />
    </x-slot>
    <x-section title="Persist Reaction" disable-copy>
        <p>
            The logic for persisting the reaction in a database, such as SQL,
            SQLite or Redis (cache) is up to its own algorithm. When an emoji is
            pressed, the
            <x-block>react</x-block>
            method is triggered, receiving the name of the reaction as a
            parameter.
        </p>
        <div class="mt-4">
            <x-code :contents="$method" />
            <p>
                You can change the method that will receive the reaction using
                the
                <x-block>react-method</x-block>
                property:
            </p>
            <x-code language="blade" :contents="$usingOtherMethodName" />
        </div>
    </x-section>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <livewire:documentation.ui.reaction :model="1" />
        </x-preview>
    </x-section>
    <x-section
        title="Animated Style"
        description="An option to use GIF format instead of PNG."
    >
        <x-preview language="blade" :contents="$animated">
            <livewire:documentation.ui.reaction :model="2" />
        </x-preview>
    </x-section>
    <x-section title="Tooltip Position">
        <x-preview language="blade" :contents="$position">
            <livewire:documentation.ui.reaction :model="3" />
        </x-preview>
    </x-section>
    <x-section
        title="Quantity Slot"
        description="An option for show the currently quantity of reactions."
    >
        <x-preview language="blade" :contents="$quantity">
            <livewire:documentation.ui.reaction :model="4" />
        </x-preview>
        <div class="mt-4">
            <p>You can bind a property for real-time updates:</p>
            <x-code language="blade" :contents="$quantityBind" />
        </div>
    </x-section>
    <x-section title="Using Less Icons">
        <x-preview language="blade" :contents="$only">
            <livewire:documentation.ui.reaction :model="5" />
        </x-preview>
    </x-section>
    <x-section title="Slot">
        <x-preview language="blade" :contents="$slot">
            <livewire:documentation.ui.reaction :model="6" />
        </x-preview>
    </x-section>
    <x-section title="Events">
        <x-preview language="blade" :contents="$events">
            <livewire:documentation.ui.reaction :model="7" />
        </x-preview>
    </x-section>
    <x-section title="Panel" new disable-copy>
        The emoji picker is now a JavaScript generated panel instead of Tippy's
        default black box. Since it exists outside
        <x-block>customize()</x-block>
        , use
        <x-block>[data-tsui-popover]</x-block>
        to style it.
    </x-section>
</x-layout>
