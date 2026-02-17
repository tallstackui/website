@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content>
    <x-slot:title>
        Command Palette
    </x-slot:title>
    <x-slot:description>
        Command Palette component.
    </x-slot:description>
    <x-slot:customization>
        <livewire:customization :$customization component="CommandPalette" title="Command Palette" />
    </x-slot:customization>
    <x-section title="Concept" disable-copy>
        <p>
            The <x-block>command-palette</x-block> component is a searchable overlay triggered by a keyboard
            shortcut (default: <x-block>Ctrl+K</x-block>). It fetches results from a server endpoint with a
            300ms debounce, supports full keyboard navigation (arrow keys, Enter, Escape), and can display
            images, icons, and descriptions alongside each result. The component is designed to be placed once
            in your application layout for app-wide access, but can also be used on specific pages with inline
            event handling.
        </p>
    </x-section>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-command-palette request="/api/users"
                               select="label:name|value:id" />
            <x-button x-on:click="$tsui.open.commandPalette()">
                Open Command Palette
            </x-button>
        </x-preview>
    </x-section>
    <x-section title="Keyboard Shortcut" disable-copy>
        <div class="space-y-4">
            <p>
                The palette opens when the user presses the configured keyboard shortcut. The default is
                <x-block>Ctrl+K</x-block>, but you can change it in <x-block>config/tallstackui.php</x-block>
                using dot notation:
            </p>
            <x-code language="blade" :contents="$shortcut" />
        </div>
    </x-section>
    <x-section title="Request Configuration" disable-copy>
        <div class="space-y-4">
            <p>
                The <x-block>request</x-block> attribute defines where the component fetches search results
                from. You can use a simple URL string or a Laravel route name:
            </p>
            <x-code language="blade" :contents="$requestString" />
            <p>
                For more control, pass an array with <x-block>url</x-block>, <x-block>method</x-block>, and
                <x-block>params</x-block> keys:
            </p>
            <x-code language="blade" :contents="$requestArray" />
            <x-warning>
                The <x-block pink>request</x-block> attribute must be configured either as an inline attribute or
                in the configuration file. When using an array, the <x-block pink>url</x-block> key is required and
                <x-block pink>method</x-block> must be <x-block pink>get</x-block> or <x-block pink>post</x-block>.
            </x-warning>
        </div>
    </x-section>
    <x-section title="Field Mapping">
        <div class="space-y-4">
            <p>
                The <x-block>select</x-block> attribute maps your API response fields to the component's
                internal structure. The format is <x-block>label:key|value:key|description:key|image:key|icon:key</x-block>:
            </p>
            <x-preview language="blade" :contents="$fieldMapping">
                <x-command-palette request="/api/users"
                                   select="label:name|value:id|image:image" />
                <x-button x-on:click="$tsui.open.commandPalette()">
                    Search Users
                </x-button>
            </x-preview>
        </div>
    </x-section>
    <x-section title="Disabled Options" disable-copy>
        <div class="space-y-4">
            <p>
                Options can be marked as disabled in the API response. Disabled options are displayed with
                muted styles and cannot be selected:
            </p>
            <x-code language="json" :contents="$disabledOptions" />
        </div>
    </x-section>
    <x-section title="Recycle" disable-copy>
        <div class="space-y-4">
            <p>
                By default, the component preserves previous search results when the palette is reopened. Use the
                <x-block>recycle</x-block> attribute to control this behavior:
            </p>
            <x-code language="blade" :contents="$recycle" />
        </div>
    </x-section>
    <x-section title="Placeholders" disable-copy>
        <div class="space-y-4">
            <p>
                Override the default placeholder texts using the <x-block>placeholders</x-block> attribute.
                Available keys are: <x-block>search</x-block>, <x-block>empty</x-block>,
                <x-block>navigate</x-block>, <x-block>select</x-block>, and <x-block>close</x-block>:
            </p>
            <x-code language="blade" :contents="$placeholders" />
        </div>
    </x-section>
    <x-section title="Empty Slot">
        <x-preview language="blade" :contents="$emptySlot">
            <x-command-palette request="/api/users">
                <x-slot:empty>
                    <div class="flex flex-col items-center gap-2 p-8">
                        <x-icon name="magnifying-glass" class="h-8 w-8 text-gray-400" />
                        <p class="text-sm text-gray-500">No results match your search.</p>
                    </div>
                </x-slot:empty>
            </x-command-palette>
            <x-button x-on:click="$tsui.open.commandPalette()">
                Open Command Palette
            </x-button>
        </x-preview>
    </x-section>
    <x-section title="Selection Handling" disable-copy>
        <div class="space-y-4">
            <p>
                When a user selects an option, the component follows a priority chain to determine how to handle it:
            </p>
            <x-code language="blade" :contents="$selectionHandling" />
            <p>
                In all cases, internal keys prefixed with <x-block>__</x-block> are stripped from the option
                data before dispatching.
            </p>
        </div>
    </x-section>
    <x-section title="Inline Event" disable-copy>
        <div class="space-y-4">
            <p>
                Use <x-block>x-on:select</x-block> for component-scoped selection handling. When present, this
                takes the highest priority and suppresses both the actionable and global event:
            </p>
            <x-code language="blade" :contents="$inlineEvent" />
        </div>
    </x-section>
    <x-section title="Actionable" disable-copy>
        <div class="space-y-4">
            <p>
                Configure an invocable PHP class in <x-block>config/tallstackui.php</x-block> to handle
                selections on the server side. The actionable endpoint uses Laravel's signed URLs for security:
            </p>
            <x-code :contents="$actionableConfig" />
            <p>
                The class receives an <x-block>ItemSelected</x-block> value object and must return a
                <x-block>Callback</x-block> response:
            </p>
            <x-code :contents="$actionableClass" />
            <p>
                The <x-block>ItemSelected</x-block> object provides access to all selection data:
            </p>
            <x-code :contents="$itemSelected" />
            <p>
                The <x-block>Callback</x-block> class offers two response types — redirect the user to a page
                or dispatch a browser event:
            </p>
            <x-code :contents="$actionableCallback" />
        </div>
    </x-section>
    <x-section title="Lifecycle Events" disable-copy>
        <div class="space-y-4">
            <p>
                The component dispatches open and close events regardless of the selection mode.
                You can listen to them inline or globally:
            </p>
            <x-code language="blade" :contents="$lifecycleEvents" />
        </div>
    </x-section>
    <x-section title="AlpineJS Helper" description="Helpers to open and close the command palette using AlpineJS.">
        <x-code language="blade" :contents="$alpinejs" />
    </x-section>
    <x-section title="Background Blur" disable-copy>
        <div class="space-y-4">
            <p>
                Add a blur effect to the backdrop using the <x-block>blur</x-block> attribute.
                Accepts <x-block>true</x-block> (defaults to sm), <x-block>md</x-block>,
                <x-block>lg</x-block>, or <x-block>xl</x-block>:
            </p>
            <x-code language="blade" :contents="$blur" />
        </div>
    </x-section>
    <x-section title="Persistent" disable-copy>
        <div class="space-y-4">
            <p>
                Use the <x-block>persistent</x-block> attribute to prevent the palette from closing when the
                user clicks outside. The user can still close it using the <x-block>Escape</x-block> key or
                the AlpineJS helper:
            </p>
            <x-code language="blade" :contents="$persistent" />
        </div>
    </x-section>
</x-layout>
