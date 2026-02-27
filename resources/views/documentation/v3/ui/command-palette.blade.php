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
            Many modern applications use a command palette to help users quickly find and navigate
            to anything (pages, actions, contacts, or settings) without leaving the keyboard.
            The <x-block>command-palette</x-block> component provides exactly that: searchable overlay
            that fetches results from your server, supports keyboard navigation, and can display
            images, icons, and descriptions alongside each result. Place it once in your layout for
            app-wide access using a keyboard shortcut (default: <x-block>Ctrl+K</x-block>), or use it
            on specific pages with inline event handling.
        </p>
    </x-section>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-command-palette id="basic" :request="route('api.users')" x-on:select="alert(`Selected: ${event.detail.value}`)" />
            <x-button x-on:click="$tsui.open.commandPalette('basic')">
                Open Command Palette
            </x-button>
        </x-preview>
        <p class="mt-4">
            When you press enter to select an option, the component dispatches a <x-block>select</x-block> event with the selected
            option's value in the <x-block>event.detail.value</x-block> property. Continue reading to learn about all the ways to
            interact with the component and handle selections.
        </p>
    </x-section>
    <x-section title="Keyboard Shortcut" disable-copy>
        <div class="space-y-4">
            <p>
                The command palette opens when the user presses the configured keyboard shortcut. The default is
                <x-kbd>Ctrl</x-kbd> + <x-kbd>K</x-kbd>, but you can change it inline or globally in the
                <a href="{{ route('documentation', ['v3', 'configuration']) }}" wire:navigate class="underline">configuration file</a>
                using dot notation: <x-block>ctrl.k</x-block>, <x-block>ctrl.shift.p</x-block>, <x-block>meta.k</x-block>, or even
                inline using the <x-block>shortcut</x-block> attribute with the same dot notation.
            </p>
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
                internal structure. The format is similar to the <x-block>select.styled</x-block> component:
            </p>
            <x-code language="blade" :contents="$fieldMapping" disable-copy />
        </div>
    </x-section>
    <x-section title="Disabled Options" disable-copy>
        <div class="space-y-4">
            <p>
                Options can be marked as disabled in the API response. Disabled options are displayed with
                muted styles and cannot be selected:
            </p>
            <x-code language="json" :contents="$disabledOptions" disable-copy />
            <p>
                Talking about the API response, you can also set an extra field called <x-block>additional</x-block> to include
                any other data from your API response in array format. This additional data will be available in the selection
                event, allowing you to use it for various purposes.
            </p>
        </div>
    </x-section>
    <x-section title="Recycle" disable-copy>
        <div class="space-y-4">
            <p>
                By default, the component preserves previous search results when the palette is reopened. Use the
                <x-block>recycle</x-block> attribute to control this behavior:
            </p>
            <x-code language="blade" :contents="$recycle" disable-copy />
            <p>
                You can also control it globally in the <a href="{{ route('documentation', ['v3', 'configuration']) }}" wire:navigate class="underline">configuration file.</a>
            </p>
        </div>
    </x-section>
    <x-section title="Placeholders" disable-copy>
        <div class="space-y-4">
            <p>
                Override the default placeholder texts using the <x-block>placeholders</x-block> attribute.
                Available keys are: <x-block>search</x-block>, <x-block>empty</x-block>,
                <x-block>navigate</x-block>, <x-block>select</x-block>, and <x-block>close</x-block>:
            </p>
            <x-code language="blade" :contents="$placeholders" disable-copy />
        </div>
    </x-section>
    <x-section title="Empty Slot" disable-copy>
        <x-preview language="blade" :contents="$emptySlot">
            <x-command-palette id="empty" request="/api/users" :placeholders="['search' => 'Search something dummy...']">
                <x-slot:empty>
                    <div class="flex flex-col items-center gap-2 p-8">
                        <x-icon name="magnifying-glass" class="h-8 w-8 text-gray-400" />
                        <p class="text-sm text-gray-500">No results match your search.</p>
                    </div>
                </x-slot:empty>
            </x-command-palette>
            <x-button x-on:click="$tsui.open.commandPalette('empty')">
                Open Command Palette
            </x-button>
        </x-preview>
    </x-section>
    <x-section title="Inline Event" disable-copy>
        <div class="space-y-4">
            <p>
                You have three different ways to interact with an item selection. The simplest way is to set <x-block>x-on:select</x-block>
                to handle the selection with component scope. When present, this option has the highest priority and suppresses both the actionable and global events.
            </p>
            <x-code language="blade" :contents="$inlineEvent" disable-copy />
        </div>
    </x-section>
    <x-section title="Actionable" disable-copy>
        <div class="space-y-4">
            <p>
                Since you might want to use the component globally, like in a layout file, you can interact with
                item selection in two other ways. You can configure an invocable PHP class in the <a href="{{ route('documentation', ['v3', 'configuration']) }}" wire:navigate class="underline">configuration file</a>
                to handle selections on the server side. This way, selecting an item will go through an internal
                TallStackUI route to handle the action of creating the instance of your class and invoking it through
                the Laravel container. The internal TallStackUI endpoint uses Laravel-signed URLs for added security.
            </p>
            <x-code :contents="$actionableConfig" disable-copy />
            <p>
                The class receives an <x-block>ItemSelected</x-block> value object and must return a
                <x-block>Callback</x-block> response:
            </p>
            <x-code :contents="$actionableClass" disable-copy />
            <p>
                The <x-block>ItemSelected</x-block> object provides access to all selection data:
            </p>
            <x-code :contents="$itemSelected" disable-copy />
            <p>
                The <x-block>Callback</x-block> class offers two response types: redirect the user to a page (internal ou external)
                or dispatch a browser event:
            </p>
            <x-code :contents="$actionableCallback" disable-copy />
        </div>
    </x-section>
    <x-section title="Lifecycle Events" disable-copy>
        <div class="space-y-4">
            <p>
                The component triggers opening and closing events, as well as a global event when something is selected
                – this is the third option available for handling item selection, regardless of the selection mode.
                You can listen for them inline or globally. The window's global events include the component's <x-block>id</x-block> in the event name:
            </p>
            <x-code language="blade" :contents="$lifecycleEvents" disable-copy />
        </div>
    </x-section>
    <x-section title="AlpineJS Helper" description="Helpers to open and close the command palette using AlpineJS.">
        <x-code language="blade" :contents="$alpinejs" disable-copy />
    </x-section>
    <x-section title="Background Blur" disable-copy>
        Since you generally won't want to change this all the time, the blur setting is defined
        exclusively via a <a href="{{ route('documentation', ['v3', 'configuration']) }}" wire:navigate class="underline">configuration file</a>,
        with four available variables: <x-block>false</x-block>, <x-block>sm</x-block>, <x-block>md</x-block>, and <x-block>lg</x-block>. The default is <x-block>md</x-block>.
    </x-section>
    <x-section title="Mobile Centered" disable-copy>
        By default, the command palette is aligned to the bottom of the screen on mobile devices. You can change this behavior
        in the <a href="{{ route('documentation', ['v3', 'configuration']) }}" wire:navigate class="underline">configuration file</a> using the <x-block>centered</x-block> configuration.
        When set to true, the command palette will be centered on mobile devices.
    </x-section>
</x-layout>
