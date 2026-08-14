@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content ai="clipboard">
    <x-slot:title>Clipboard</x-slot>
    <x-slot:description>Clipboard component.</x-slot>
    <x-slot:customization>
        <livewire:customization :$customization component="Clipboard" />
    </x-slot>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-clipboard>TallStackUI</x-clipboard>
        </x-preview>
    </x-section>
    <x-section title="Button at Left">
        <x-preview language="blade" :contents="$left">
            <x-clipboard left>TallStackUI</x-clipboard>
        </x-preview>
    </x-section>
    <x-section title="Label & Hint">
        <x-preview language="blade" :contents="$labelHint">
            <x-clipboard label="Library" hint="Copy the name of the library">
                TallStackUI
            </x-clipboard>
        </x-preview>
    </x-section>
    <x-section
        title="Secret Content"
        description="An option to transform the input in a password type."
    >
        <x-preview language="blade" :contents="$secret">
            <x-clipboard
                label="Library"
                hint="Copy the name of the library"
                secret
            >
                TallStackUI
            </x-clipboard>
        </x-preview>
    </x-section>
    <x-section title="Events">
        <div class="space-y-4">
            <x-preview language="blade" :contents="$events">
                <x-clipboard x-on:copy="alert(`Copied: ${$event.detail.text}`)">
                    TallStackUI
                </x-clipboard>
            </x-preview>
            <x-table
                :headers="[
                    ['index' => 'event', 'label' => 'Event'],
                    ['index' => 'detail', 'label' => 'Detail'],
                    ['index' => 'fired', 'label' => 'Fired when'],
                ]"
                :rows="[
                    ['event' => 'copy', 'detail' => '{ text }', 'fired' => 'The text is copied'],
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
    <x-section title="Icon Style">
        <x-preview language="blade" :contents="$icon">
            <x-clipboard icon>TallStackUI</x-clipboard>
        </x-preview>
        <x-warning class="mt-4">
            The icon style does not support label and hint.
        </x-warning>
    </x-section>
    <x-section title="Using Different Icons">
        <x-preview language="blade" :contents="$differentIcons">
            <x-clipboard :icon="['copy' => 'pencil', 'copied' => 'check']">
                TallStackUI
            </x-clipboard>
        </x-preview>
    </x-section>
    <x-section
        title="Copying Programmatically"
        description="An option to copy text using a JavaScript API."
    >
        <x-preview language="blade" :contents="$programmatic">
            <x-button x-on:click="$tsui.copy('TallStackUI')">Copy</x-button>
        </x-preview>
        <div class="mt-4">
            <x-code language="javascript" :contents="$programmaticEvent" />
        </div>
        <x-warning
            warning
            title="Both paths require a user gesture"
            class="mt-4"
        >
            Clipboard content is written with
            <x-block>navigator.clipboard.writeText()</x-block>
            . In insecure contexts, the component uses execCommand instead.
            Common examples include
            <x-block>http://myapp.test</x-block>
            and local IP addresses opened from another device. The write must
            happen during a user interaction and cannot run from a timer or
            after an API response.
        </x-warning>
    </x-section>
</x-layout>
