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
        <ul class="mt-2 list-inside list-decimal">
            <li>
                <a
                    href="{{ route("documentation", ["form", "autocomplete"]) }}"
                    wire:navigate
                >
                    Form AutoComplete
                </a>
            </li>
            <li>
                <a
                    href="{{ route("documentation", ["form", "input"]) }}"
                    wire:navigate
                >
                    Form Date
                </a>
            </li>
            <li>
                <a
                    href="{{ route("documentation", ["form", "time"]) }}"
                    wire:navigate
                >
                    Form Time
                </a>
            </li>
            <li>
                <a
                    href="{{ route("documentation", ["form", "password"]) }}"
                    wire:navigate
                >
                    Form Password
                </a>
            </li>
            <li>
                <a
                    href="{{ route("documentation", ["form", "upload"]) }}"
                    wire:navigate
                >
                    Form Upload
                </a>
            </li>
            <li>
                <a
                    href="{{ route("documentation", ["form", "color"]) }}"
                    wire:navigate
                >
                    Form Color
                </a>
            </li>
            <li>
                <a
                    href="{{ route("documentation", ["ui", "dropdown"]) }}"
                    wire:navigate
                >
                    Dropdown
                </a>
            </li>
            <li>
                <a
                    href="{{ route("documentation", ["form", "select"]) }}"
                    wire:navigate
                >
                    Select
                </a>
            </li>
        </ul>
    </x-section>
    <x-section
        title="Scroll Lock"
        new
        description="A modal locks the page behind it; a dropdown never did, so the content under an open popup kept scrolling while the popup stayed anchored where it was."
    >
        <div class="space-y-4">
            <x-code language="php" :contents="$scrollLock" />
            <p>
                One top-level key reaches Dropdown and its Submenu,
                Autocomplete, Color, Date, Password, Select Styled, Time,
                Upload, Calendar and the List Items menu at once. Off by
                default, and there is no per-instance opt out: locking the page
                reads very differently on a three-item dropdown than on a modal,
                so enabling it is a deliberate choice about how the whole
                application should feel.
            </p>
            <x-warning>
                Nested and stacked popups share a single lock, counted by
                reference, so the first popup to open takes it and the last to
                close returns it. A popup opened inside a Modal or a Slide does
                not touch it at all, since the overlay already owns it.
            </x-warning>
        </div>
    </x-section>
    <x-section title="Escape" new disable-copy>
        <div class="space-y-4">
            <p>
                Both the popup and the overlay behind it listen on
                <x-block>window</x-block>
                , so neither could stop the other: pressing Escape with a select
                open inside a modal closed the select
                <b>and</b>
                the modal, taking the form in progress with it.
            </p>
            <p>
                An open panel now claims the press and the overlays ask before
                acting, so the first Escape closes the popup and the second
                closes the overlay. This reaches every component built on the
                floating.
            </p>
        </div>
    </x-section>
    <x-section title="Focus" new disable-copy>
        <div class="space-y-4">
            <p>
                The panel is teleported to the end of
                <x-block>body</x-block>
                , and keyboard navigation moves the focus into it. Closing the
                panel used to hand
                <x-block>activeElement</x-block>
                back to the body, so the next Tab restarted from the first
                focusable element on the page.
            </p>
            <p>
                The panel now returns the focus to its anchor when it closes
                holding it. Since the anchor is not always focusable, the first
                focusable descendant is used when the anchor itself cannot take
                it. Nothing is restored when the anchor is no longer visible,
                which is the case where the popup closed precisely because the
                anchor left layout.
            </p>
        </div>
    </x-section>
    <x-section title="Auto Positions" new disable-copy>
        <div class="space-y-4">
            <p>
                <x-block>auto</x-block>
                ,
                <x-block>auto-start</x-block>
                and
                <x-block>auto-end</x-block>
                were accepted by the validator and then dropped by the
                positioning engine, so the placement came out
                <x-block>undefined</x-block>
                and fell back to
                <x-block>bottom</x-block>
                with no warning anywhere.
            </p>
            <p>
                They are resolved now, mapping onto
                <x-block>bottom*</x-block>
                . That keeps the side that was already being fallen back to
                while recovering the
                <x-block>-start</x-block>
                /
                <x-block>-end</x-block>
                alignment that used to be silently discarded.
            </p>
        </div>
    </x-section>
</x-layout>
