@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content ai="switcher">
    <x-slot:title>Switcher</x-slot>
    <x-slot:description>Switcher component.</x-slot>
    <x-slot:customization>
        <livewire:customization :$customization component="Switcher" />
    </x-slot>
    <x-section title="Concept" disable-copy>
        <p>
            A two-state control that swaps its own content, a text, an icon or
            both, between the on and off states. It is a native checkbox under
            the hood, so it binds to a boolean like any checkbox. Use the
            <x-refer :doc="['form', 'toggle']">Toggle</x-refer>
            for a labelled on/off field and the
            <x-refer :doc="['ui', 'swap']">Swap</x-refer>
            to cycle through a list of values.
        </p>
    </x-section>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-switcher on="Following" off="Follow" />
        </x-preview>
        <x-warning class="mt-4">
            Click on Follow to see and use the component.
        </x-warning>
    </x-section>
    <x-section title="Icons">
        <x-preview language="blade" :contents="$icons">
            <div class="flex flex-wrap items-center gap-6">
                <x-switcher
                    icon-when-on="speaker-x-mark"
                    icon-when-off="speaker-wave"
                    aria-label="Mute"
                />
                <x-switcher
                    on="Pause"
                    off="Play"
                    icon-when-on="pause"
                    icon-when-off="play"
                />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Icon Position">
        <x-preview language="blade" :contents="$position">
            <x-switcher
                on="Pause"
                off="Play"
                icon-when-on="pause"
                icon-when-off="play"
                position="right"
            />
        </x-preview>
    </x-section>
    <x-section title="Effects">
        <x-preview language="blade" :contents="$effects">
            <div class="flex flex-wrap items-center gap-6">
                <x-switcher
                    icon-when-on="moon"
                    icon-when-off="sun"
                    aria-label="Dark mode"
                />
                <x-switcher
                    icon-when-on="moon"
                    icon-when-off="sun"
                    rotate
                    aria-label="Dark mode"
                />
                <x-switcher
                    icon-when-on="moon"
                    icon-when-off="sun"
                    flip
                    aria-label="Dark mode"
                />
            </div>
        </x-preview>
        <x-warning class="mt-4">
            <x-block>rotate</x-block>
            and
            <x-block>flip</x-block>
            cannot be combined.
        </x-warning>
    </x-section>
    <x-section title="Size Variations">
        <x-preview language="blade" :contents="$sizes">
            <div class="flex flex-wrap items-center gap-6">
                <x-switcher
                    xs
                    on="Pause"
                    off="Play"
                    icon-when-on="pause"
                    icon-when-off="play"
                />
                <x-switcher
                    sm
                    on="Pause"
                    off="Play"
                    icon-when-on="pause"
                    icon-when-off="play"
                />
                <x-switcher
                    md
                    on="Pause"
                    off="Play"
                    icon-when-on="pause"
                    icon-when-off="play"
                />
                <x-switcher
                    lg
                    on="Pause"
                    off="Play"
                    icon-when-on="pause"
                    icon-when-off="play"
                />
            </div>
        </x-preview>
    </x-section>
    <x-section
        title="Slots"
        description="An option to use any content for each state."
    >
        <x-preview language="blade" :contents="$slots">
            <x-switcher aria-label="Like">
                <x-slot:on>
                    <x-icon name="heart" solid class="h-6 w-6 text-red-500" />
                </x-slot>
                <x-slot:off>
                    <x-icon name="heart" outline class="h-6 w-6" />
                </x-slot>
            </x-switcher>
        </x-preview>
    </x-section>
    <x-section
        title="Color Variations"
        description="An option to color each state. Without it, the state inherits the color of where it sits."
    >
        <x-preview language="blade" :contents="$colors">
            <div class="flex flex-wrap items-center gap-6">
                <x-switcher
                    on="Active"
                    off="Inactive"
                    color-when-on="green"
                    color-when-off="red"
                />
                <x-switcher
                    on="Following"
                    off="Follow"
                    color-when-on="primary"
                />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Readonly & Disabled">
        <x-preview language="blade" :contents="$readonlyAndDisabled">
            <div class="flex flex-wrap items-center gap-6">
                <x-switcher readonly on="Pause" off="Play" />
                <x-switcher disabled on="Pause" off="Play" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Events">
        <div class="space-y-4">
            <x-preview language="blade" :contents="$events">
                <x-switcher
                    on="Pause"
                    off="Play"
                    x-on:switch="alert(`Switched: ${$event.detail.value}`)"
                />
            </x-preview>
            <x-table
                :headers="[
                    ['index' => 'event', 'label' => 'Event'],
                    ['index' => 'detail', 'label' => 'Detail'],
                    ['index' => 'fired', 'label' => 'Fired when'],
                ]"
                :rows="[
                    ['event' => 'switch', 'detail' => '{ value }', 'fired' => 'The user switches the state'],
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
    <x-section title="AlpineJS Helper">
        <x-preview language="blade" :contents="$alpine">
            <div x-data="{ open: false }" class="space-y-2">
                <x-switcher
                    x-model="open"
                    on="Hide details"
                    off="Show details"
                />
                <p
                    class="dark:text-dark-400 text-sm text-gray-500"
                    x-show="open"
                >
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
            </div>
        </x-preview>
    </x-section>
</x-layout>
