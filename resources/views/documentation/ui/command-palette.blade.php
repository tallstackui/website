@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content ai="command-palette">
    <x-slot:title>Command Palette</x-slot>
    <x-slot:description>
        Command Palette component.
    </x-slot>
    <x-slot:customization>
        <livewire:customization
            :$customization
            component="CommandPalette"
            title="Command Palette"
        />
    </x-slot>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-command-palette
                id="basic"
                :request="route('api.users')"
                x-on:select="alert(`Selected: ${event.detail.value}`)"
            />
            <x-button x-on:click="$tsui.open.commandPalette('basic')">
                Open Command Palette
            </x-button>
        </x-preview>
        <p class="mt-4">
            When you press enter to select an option, the component dispatches a
            <x-block>select</x-block>
            event with the selected option's value in the
            <x-block>event.detail.value</x-block>
            property. Continue reading to learn about all the ways to interact
            with the component and handle selections.
        </p>
    </x-section>
    <x-section title="Keyboard Shortcut" disable-copy>
        <div class="space-y-4">
            <p>
                The command palette opens when the user presses the configured
                keyboard shortcut. The default is
                <x-kbd>Ctrl</x-kbd>
                +
                <x-kbd>K</x-kbd>
                , but you can change it inline or globally in the
                <x-refer doc="configuration">configuration file</x-refer>
                using dot notation:
                <x-block>ctrl.k</x-block>
                ,
                <x-block>ctrl.shift.p</x-block>
                ,
                <x-block>meta.k</x-block>
                , or even inline using the
                <x-block>shortcut</x-block>
                attribute with the same dot notation.
            </p>
        </div>
    </x-section>
    <x-section title="Request Configuration" disable-copy>
        <div class="space-y-4">
            <p>
                The
                <x-block>request</x-block>
                attribute defines where the component fetches search results
                from. You can use a simple URL string or a Laravel route name:
            </p>
            <x-code language="blade" :contents="$requestString" />
            <p>
                For more control, pass an array with
                <x-block>url</x-block>
                ,
                <x-block>method</x-block>
                , and
                <x-block>params</x-block>
                keys:
            </p>
            <x-code language="blade" :contents="$requestArray" />
            <x-warning>
                The request attribute must be configured either as an inline
                attribute or in the
                <x-refer doc="configuration">configuration file.</x-refer>
            </x-warning>
        </div>
    </x-section>
    <x-section title="Field Mapping">
        <div class="space-y-4">
            <p>
                The
                <x-block>select</x-block>
                attribute maps your API response fields to the component's
                internal structure. The format is exactly the same to the
                <x-block>select.styled</x-block>
                component:
            </p>
            <x-code language="blade" :contents="$fieldMapping" disable-copy />
        </div>
    </x-section>
    <x-section
        title="Disabled Options"
        description="An option to disable specific items."
        disable-copy
    >
        <div class="space-y-4">
            <p>The API response should response as it to disable an item:</p>
            <x-code
                language="json"
                :contents="$disabledOptions"
                disable-copy
            />
        </div>
    </x-section>
    <x-section title="Recycle" disable-copy>
        <div class="space-y-4">
            <p>
                By default, the component preserves previous search results when
                the palette is reopened. Use the
                <x-block>recycle</x-block>
                attribute to control this behavior:
            </p>
            <x-code language="blade" :contents="$recycle" disable-copy />
            <p>
                You can also control it globally in the
                <x-refer doc="configuration">configuration file.</x-refer>
            </p>
        </div>
    </x-section>
    <x-section title="Placeholders" disable-copy>
        <div class="space-y-4">
            <x-code language="blade" :contents="$placeholders" disable-copy />
        </div>
    </x-section>
    <x-section title="Empty Slot">
        <x-preview language="blade" :contents="$emptySlot">
            <x-command-palette
                id="empty"
                request="/api/users"
                :placeholders="['search' => 'Search something dummy...']"
            >
                <x-slot:empty>
                    <div class="flex flex-col items-center gap-2 p-8">
                        <x-icon
                            name="magnifying-glass"
                            class="h-8 w-8 text-gray-400"
                        />
                        <p class="text-sm text-gray-500">
                            No results match your search.
                        </p>
                    </div>
                </x-slot>
            </x-command-palette>
            <x-button x-on:click="$tsui.open.commandPalette('empty')">
                Open Command Palette
            </x-button>
        </x-preview>
    </x-section>
    <x-section title="Inline Event" disable-copy>
        <div class="space-y-4">
            <p>
                You have three different ways to interact with an item
                selection. The simplest way is to set
                <x-block>x-on:select</x-block>
                to handle the selection with component scope. When present, this
                option has the highest priority and suppresses both the
                actionable and global events.
            </p>
            <x-code language="blade" :contents="$inlineEvent" disable-copy />
        </div>
    </x-section>
    <x-section title="Actionable" disable-copy>
        <div class="space-y-4">
            <p>
                Since you might want to use the component globally, like in a
                layout file, you can interact with item selection in two other
                ways. You can configure an invocable PHP class in the
                <x-refer doc="configuration">configuration file</x-refer>
                to handle selections on the server side. This way, selecting an
                item will go through an internal TallStackUI route to handle the
                action of creating the instance of your class and invoking it
                through the Laravel container. The internal TallStackUI endpoint
                uses Laravel-signed URLs for added security.
            </p>
            <x-code :contents="$actionableConfig" disable-copy />
            <p>
                The class receives an
                <x-block>ItemSelected</x-block>
                value object and must return a
                <x-block>Callback</x-block>
                response:
            </p>
            <x-code :contents="$actionableClass" disable-copy />
            <p>
                The
                <x-block>ItemSelected</x-block>
                object provides access to all selection data:
            </p>
            <x-code :contents="$itemSelected" disable-copy />
            <p>
                The
                <x-block>Callback</x-block>
                class offers two response types: redirect the user to a page
                (internal ou external) or you can also dispatch a browser event:
            </p>
            <x-code :contents="$actionableCallback" disable-copy />
        </div>
    </x-section>
    <x-section title="Lifecycle Events" disable-copy>
        <div class="space-y-4">
            <x-code
                language="blade"
                :contents="$lifecycleEvents"
                disable-copy
            />
            <x-table
                :headers="[
                    ['index' => 'event', 'label' => 'Event'],
                    ['index' => 'detail', 'label' => 'Detail'],
                    ['index' => 'fired', 'label' => 'Fired when'],
                ]"
                :rows="[
                    ['event' => 'open', 'detail' => '—', 'fired' => 'The palette opens'],
                    ['event' => 'close', 'detail' => '—', 'fired' => 'The palette closes'],
                    ['event' => 'select', 'detail' => '{ ...option }', 'fired' => 'An option is picked, on x-on:select'],
                    ['event' => 'command-palette:{id}:open', 'detail' => '—', 'fired' => 'The palette opens, on window'],
                    ['event' => 'command-palette:{id}:close', 'detail' => '—', 'fired' => 'The palette closes, on window'],
                    ['event' => 'command-palette:{id}:select', 'detail' => '{ ...option }', 'fired' => 'An option is picked, on window when x-on:select is absent'],
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
    <x-section
        title="AlpineJS Helper"
        description="Helpers to open and close the command palette using AlpineJS."
    >
        <x-code language="blade" :contents="$alpinejs" disable-copy />
    </x-section>
    <x-section title="Mobile Centered" disable-copy>
        By default, the command palette is aligned to the bottom of the screen
        on mobile devices. You can change this behavior in the
        <x-refer doc="configuration">configuration file</x-refer>
        using the
        <x-block>centered</x-block>
        configuration. When set to true, the command palette will be centered on
        mobile devices.
    </x-section>
    <x-section title="Overlay">
        <div class="space-y-4">
            <p>
                By default, the command palette renders a dimmed overlay behind
                itself to focus attention on the search. Pass
                <x-block>:overlay="false"</x-block>
                to skip the overlay and let the palette float above the page
                without darkening the surrounding UI:
            </p>
            <x-code language="blade" :contents="$overlay" />
            <p>
                You can also flip the default globally in the
                <x-refer doc="configuration">configuration file</x-refer>
                via the
                <x-block>overlay</x-block>
                key.
            </p>
        </div>
    </x-section>
</x-layout>
