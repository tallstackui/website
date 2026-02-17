<?php

namespace App\Enums\Examples\V3\Ui;

class CommandPalette
{
    public const string BASIC = <<<'HTML'
    <x-command-palette request="/api/users"
                       select="label:name|value:id" />

    <x-button x-on:click="$tsui.open.commandPalette()">
        Open Command Palette
    </x-button>
    HTML;

    public const string SHORTCUT = <<<'HTML'
    <!-- Default: Ctrl+K (configurable in tallstackui.php) -->

    <!-- Using dot notation for shortcuts: -->
    <!-- ctrl.k, ctrl.shift.p, meta.k -->
    HTML;

    public const string REQUEST_STRING = <<<'HTML'
    <!-- Simple URL string -->
    <x-command-palette request="/api/search" />

    <!-- Using a route name -->
    <x-command-palette request="api.users" />
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
    <x-command-palette request="/api/users"
                       select="label:name|value:id|description:email|image:avatar" />

    <x-button x-on:click="$tsui.open.commandPalette()">
        Search Users
    </x-button>
    HTML;

    public const string DISABLED_OPTIONS = <<<'HTML'
    // The API response can include a "disabled" key
    // to prevent selection of specific options:

    [
        { "name": "Active User", "id": 1 },
        { "name": "Inactive User", "id": 2, "disabled": true }
    ]
    HTML;

    public const string RECYCLE = <<<'HTML'
    <!-- Preserves previous results when reopening (default: true) -->
    <x-command-palette request="/api/search" />

    <!-- Clears results every time the palette opens -->
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
    <x-command-palette request="/api/search">
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
    HTML;

    public const string SELECTION_HANDLING = <<<'HTML'
    <!-- Priority chain when a user selects an option:

         1. Inline event (x-on:select) — component-scoped
         2. Actionable (config) — server-side invocable class
         3. Global event (fallback) — window event
    -->
    HTML;

    public const string INLINE_EVENT = <<<'HTML'
    <x-command-palette request="/api/users"
                       select="label:name|value:id"
                       x-on:select="alert('Selected: ' + $event.detail.label)" />

    <x-button x-on:click="$tsui.open.commandPalette()">
        Open Command Palette
    </x-button>
    HTML;

    public const string ACTIONABLE_CONFIG = <<<'HTML'
    // config/tallstackui.php

    'command-palette' => [
        TallStackUi\Components\CommandPalette\Component::class,
        [
            'actionable' => App\Actions\CommandPaletteAction::class, // [tl! highlight]
            'request' => '/api/search',
            // ...
        ],
    ],
    HTML;

    public const string ACTIONABLE_CLASS = <<<'HTML'
    use TallStackUi\Support\CommandPalette\Callback;
    use TallStackUi\Support\CommandPalette\ItemSelected;

    class CommandPaletteAction
    {
        public function __invoke(ItemSelected $selected): Callback
        {
            // Redirect to an internal page
            return Callback::redirect("/users/{$selected->value}");
        }
    }
    HTML;

    public const string ACTIONABLE_CALLBACK = <<<'HTML'
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

    public const string GLOBAL_EVENT = <<<'HTML'
    <!-- When no inline x-on:select or actionable is configured,
         a window event is dispatched as fallback. -->

    <div x-on:command-palette:select.window="alert('Selected: ' + $event.detail.label)">
        <x-command-palette request="/api/users"
                           select="label:name|value:id" />
    </div>

    <x-button x-on:click="$tsui.open.commandPalette()">
        Open Command Palette
    </x-button>
    HTML;

    public const string LIFECYCLE_EVENTS = <<<'HTML'
    <!-- Inline lifecycle events -->
    <x-command-palette request="/api/search"
                       x-on:open="console.log('opened')"
                       x-on:close="console.log('closed')" />

    <!-- Global lifecycle events -->
    <div x-on:command-palette:open.window="console.log('opened')"
         x-on:command-palette:close.window="console.log('closed')">
        <x-command-palette request="/api/search" />
    </div>
    HTML;

    public const string ALPINEJS = <<<'HTML'
    <x-command-palette request="/api/search" />

    <!-- Open -->
    <x-button x-on:click="$tsui.open.commandPalette()">
        Open
    </x-button>

    <!-- Close -->
    <x-button x-on:click="$tsui.close.commandPalette()">
        Close
    </x-button>
    HTML;

    public const string BLUR = <<<'HTML'
    <!-- sm, md, lg, xl -->

    <x-command-palette request="/api/search" blur /> <!-- sm blur -->
    <x-command-palette request="/api/search" blur="md" />
    <x-command-palette request="/api/search" blur="lg" />
    <x-command-palette request="/api/search" blur="xl" />
    HTML;

    public const string PERSISTENT = <<<'HTML'
    <x-command-palette request="/api/search" persistent />
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->commandPalette()
        ->block('block', 'classes');
    HTML;
}
