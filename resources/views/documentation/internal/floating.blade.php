@php
    $customization = <<<'HTML'
    TallStackUi::customize()
        ->floating()
        ->block('block', 'classes');
    HTML;

    $scrollLock = <<<'PHP'
    // config/tallstackui.php

    'floating_scroll_lock' => true,
    PHP;
@endphp

<x-layout :$content :torchlight="false">
    <x-slot:title>Floating Component</x-slot>
    <x-slot:description>
        The generic floating component used in: form date, form time, form
        password, form upload, form color, dropdown, and select styled.
    </x-slot>
    <x-slot:customization>
        <livewire:customization :$customization component="Floating" />
    </x-slot>
    <x-internals-warning customization />
    <x-section class="mt-4">
        <p>
            You can individually customize the floating of each component. Each
            component that uses floating has a special
            <x-block>floating</x-block>
            that allows individual soft customization of that component's
            floating. Here is the list of components that use floating:
        </p>
        <ul class="mt-2 list-inside list-decimal space-y-2">
            <li>
                <x-refer :doc="['form', 'autocomplete']">
                    Form AutoComplete
                </x-refer>
            </li>
            <li>
                <x-refer :doc="['form', 'input']">Form Date</x-refer>
            </li>
            <li>
                <x-refer :doc="['form', 'time']">Form Time</x-refer>
            </li>
            <li>
                <x-refer :doc="['form', 'password']">Form Password</x-refer>
            </li>
            <li>
                <x-refer :doc="['form', 'upload']">Form Upload</x-refer>
            </li>
            <li>
                <x-refer :doc="['form', 'color']">Form Color</x-refer>
            </li>
            <li>
                <x-refer :doc="['ui', 'dropdown']">Dropdown</x-refer>
            </li>
            <li>
                <x-refer :doc="['form', 'select']">Select</x-refer>
            </li>
        </ul>
    </x-section>
    <x-section
        title="Scroll Lock"
        new
        description="An option to block the overflow when the floating is opened."
    >
        <div class="space-y-4">
            <x-code language="php" :contents="$scrollLock" />
            <x-warning>
                Nested and stacked popups share a single lock, counted by
                reference, so the first popup to open takes it and the last to
                close returns it. A popup opened inside a Modal or a Slide does
                not touch it at all, since the overlay already owns it.
            </x-warning>
        </div>
    </x-section>
</x-layout>
