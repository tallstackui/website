<?php

namespace App\Enums\Examples\V3\Ui;

class CommandPalette
{
    public const string BASIC = <<<'HTML'
    <x-command-palette id="search"
                       :request="route('api.users')"
                       select="label:name|value:id" />

    <x-button x-on:click="$tsui.open.commandPalette('search')">
        Open Command Palette
    </x-button>
    HTML;

    public const string REQUEST_STRING = <<<'HTML'
    <!-- Simple URL string -->
    <x-command-palette request="/api/search" />

    <!-- Using a route name -->
    <x-command-palette request="api.users" />

    <!-- Using full route path -->
    <x-command-palette :request="route('api.users')" />
    HTML;

    public const string REQUEST_ARRAY = <<<'HTML'
    <!-- Array with url, method, and params -->
    <x-command-palette :request="[
        'url' => '/api/search',
        'method' => 'post',
        'params' => ['category' => 'users'],
    ]" />
    HTML;

    public const string FIELD_MAPPING = <<<'HTML'
    <x-command-palette id="users"
                       request="/api/users"
                       select="label:name|value:id|description:email|image:avatar" />

    <x-button x-on:click="$tsui.open.commandPalette('users')">
        Search Users
    </x-button>
    HTML;

    public const string DISABLED_OPTIONS = <<<'HTML'
    [
        { "name": "Active User", "id": 1 },
        { "name": "Inactive User", "id": 2, "disabled": true }
    ]
    HTML;

    public const string RECYCLE = <<<'HTML'
    <!-- Preserves previous results when reopening (default: true) -->
    <x-command-palette request="/api/search" />

    <!-- Clears results every time the palette opens inline -->
    <x-command-palette request="/api/search" :recycle="false" />
    HTML;

    public const string PLACEHOLDERS = <<<'HTML'
    <!-- Available keys: search, empty, navigate, select, close -->
    <x-command-palette request="/api/search"
                       :placeholders="[
                           'search' => 'Type to search...',
                           'empty' => 'Nothing found.',
                       ]" />
    HTML;

    public const string EMPTY_SLOT = <<<'HTML'
    <x-command-palette id="search" request="/api/search">
        <x-slot:empty>
            <div class="flex flex-col items-center gap-2 p-8">
                <x-icon name="magnifying-glass" class="h-8 w-8 text-gray-400" />
                <p class="text-sm text-gray-500">No results match your search.</p>
            </div>
        </x-slot:empty>
    </x-command-palette>

    <x-button x-on:click="$tsui.open.commandPalette('search')">
        Open Command Palette
    </x-button>
    HTML;

    public const string INLINE_EVENT = <<<'HTML'
    <x-command-palette id="search"
                       request="/api/users"
                       select="label:name|value:id"
                       x-on:select="alert('Selected: ' + $event.detail.label)" />

    <x-button x-on:click="$tsui.open.commandPalette('search')">
        Open Command Palette
    </x-button>
    HTML;

    public const string ACTIONABLE_CONFIG = <<<'HTML'
    // ...

    'command-palette' => [
        Components\CommandPalette\Component::class,
        /*
        |----------------------------------------------------------------------
        | Command Palette Settings
        |----------------------------------------------------------------------
        |
        | actionable: the callable class for handling item selection (e.g., App\Support\GlobalSearch::class).
        | request: the data source for the command palette.
        | z-index: controls the default z-index.
        | blur: enables the background blur effect (Allowed: false, sm, md, lg, xl).
        | overflow: avoids hiding the overflow, allowing the scroll of the page.
        | shortcut: keyboard shortcut to toggle the palette (e.g., 'ctrl.k', 'ctrl.shift.p').
        | recycle: when true, preserves previous results when reopening the palette.
        | elements: when true, shows the keyboard hints in the footer.
        | scrollbar: when true, applies a custom minimal scrollbar to the results list.
        */
        [
            'actionable' => App\Actions\CommandPaletteAction::class, // [tl! highlight]
            'request' => null,
            'z-index' => 'z-50',
            'blur' => false,
            'overflow' => false,
            'shortcut' => 'ctrl.k',
            'recycle' => true,
            'elements' => true,
            'scrollbar' => true,
        ],
    ],

    // ...
    HTML;

    public const string ACTIONABLE_CLASS = <<<'HTML'
    use TallStackUi\Support\CommandPalette\Callback;
    use TallStackUi\Support\CommandPalette\ItemSelected;

    class CommandPaletteAction
    {
        public function __invoke(ItemSelected $selected): Callback
        {
            return Callback::redirect("/users/{$selected->value}");
        }
    }
    HTML;

    public const string ACTIONABLE_CALLBACK = <<<'HTML'
    namespace App\Actions;

    use TallStackUi\Support\CommandPalette\Callback;
    use TallStackUi\Support\CommandPalette\ItemSelected;

    class CommandPaletteAction
    {
        public function __invoke(ItemSelected $selected): Callback
        {
            // Redirect to an internal page
            return Callback::redirect("/users/{$selected->value}");

            // Redirect to an external URL (opens in new tab)
            return Callback::redirect('https://example.com')->external();

            // Redirect using Livewire.navigate (SPA-style navigation)
            return Callback::redirect('/dashboard')->navigate();

            // Dispatch a browser event
            return Callback::event('user-selected');

            // Dispatch a browser event with parameters
            return Callback::event('user-selected')->with(['id' => $selected->value]);
        }
    }
    HTML;

    public const string ITEM_SELECTED = <<<'HTML'
    // ItemSelected properties:

    $selected->search;       // string  — the search term
    $selected->label;        // mixed   — option label
    $selected->value;        // mixed   — option value
    $selected->description;  // ?string — optional description
    $selected->image;        // ?string — optional image URL
    $selected->icon;         // ?string — optional icon HTML
    $selected->additional;   // array   — extra fields from the API
    HTML;

    public const string LIFECYCLE_EVENTS = <<<'HTML'
    <!-- Inline lifecycle events -->
    <x-command-palette id="search"
                       request="/api/search"
                       x-on:open="console.log('opened')"
                       x-on:close="console.log('closed')" />

    <!-- Global lifecycle events (event name includes the id) -->
    <div x-on:command-palette:search:select.window="console.log($event.detail)"
         x-on:command-palette:search:open.window="console.log('opened')"
         x-on:command-palette:search:close.window="console.log('closed')">
        <x-command-palette id="search" request="/api/search" />
    </div>
    HTML;

    public const string ALPINEJS = <<<'HTML'
    <x-command-palette id="search" request="/api/search" />

    <!-- Open by id -->
    <x-button x-on:click="$tsui.open.commandPalette('search')">
        Open
    </x-button>

    <!-- Close by id -->
    <x-button x-on:click="$tsui.close.commandPalette('search')">
        Close
    </x-button>
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->commandPalette()
        ->block('block', 'classes');
    HTML;
}
