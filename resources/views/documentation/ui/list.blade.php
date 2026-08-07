@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;

    $preview = [
        ['id' => 1, 'name' => 'general',    'caption' => '1 server'],
        ['id' => 2, 'name' => 'production', 'caption' => '12 servers'],
        ['id' => 3, 'name' => 'staging',    'caption' => '3 servers'],
    ];

    $long = [
        ['id' => 1,  'name' => 'general',     'caption' => '1 server'],
        ['id' => 2,  'name' => 'production',  'caption' => '12 servers'],
        ['id' => 3,  'name' => 'staging',     'caption' => '3 servers'],
        ['id' => 4,  'name' => 'monitoring',  'caption' => '4 servers'],
        ['id' => 5,  'name' => 'database',    'caption' => '6 servers'],
        ['id' => 6,  'name' => 'cache',       'caption' => '2 servers'],
        ['id' => 7,  'name' => 'queue',       'caption' => '3 servers'],
        ['id' => 8,  'name' => 'analytics',   'caption' => '5 servers'],
        ['id' => 9,  'name' => 'mailer',      'caption' => '1 server'],
        ['id' => 10, 'name' => 'logging',     'caption' => '4 servers'],
    ];
@endphp

<x-layout :$content :ai="['List' => 'list/main', 'List Items' => 'list/items']">
    <x-slot:title>
        List
    </x-slot:title>
    <x-slot:description>
        List component.
    </x-slot:description>
    <x-slot:customization>
        <livewire:customization :$customization component="List\Main" title="List" />
        <livewire:customization :customization="$customizationItems" component="List\Items" title="List Items" />
    </x-slot:customization>
    <x-section title="Concept" disable-copy>
        <div class="space-y-4">
            <p>
                The list component is a card-shaped, action-oriented list for browsing or managing
                collections of items. Each row displays a bold <x-block>name</x-block>, an optional
                inline <x-block>caption</x-block> (or arbitrary Blade content), and an optional
                ellipsis-vertical menu trigger that opens a per-row dropdown. Optional client-side
                search filters rows by name and caption.
            </p>
            <p>
                The component can be populated in two ways:
            </p>
            <ul class="list list-decimal list-inside">
                <li>slot composition (recommended for static lists or <x-block>@verbatim @foreach @endverbatim</x-block>with rich per-row Blade)</li>
                <li>data-driven via the <x-block>:items</x-block> attribute</li>
            </ul>
        </div>
    </x-section>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-list>
                <x-list.items name="general" caption="1 server" />
                <x-list.items name="production" caption="12 servers" />
                <x-list.items name="staging" caption="3 servers" />
            </x-list>
        </x-preview>
    </x-section>
    <x-section title="Label & Hint">
        <x-preview language="blade" :contents="$labelHint">
            <x-list label="Tags" hint="Manage your tags here.">
                <x-list.items name="general" caption="1 server" />
                <x-list.items name="production" caption="12 servers" />
            </x-list>
        </x-preview>
    </x-section>
    <x-section title="Searchable" description="An option to perform client-side filtering of rows.">
        <x-preview language="blade" :contents="$searchable">
            <x-list label="Tags" searchable>
                <x-list.items name="general" caption="1 server" />
                <x-list.items name="production" caption="12 servers" />
                <x-list.items name="staging" caption="3 servers" />
            </x-list>
        </x-preview>
    </x-section>
    <x-section title="Search Placeholder">
        <x-preview language="blade" :contents="$searchPlaceholder">
            <x-list label="Tags" searchable
                    search-placeholder="Filter tags by name or caption">
                <x-list.items name="general" caption="1 server" />
                <x-list.items name="production" caption="12 servers" />
            </x-list>
        </x-preview>
    </x-section>
    <x-section title="Per-Item Menu">
        <x-preview language="blade" :contents="$perItemMenu">
            <x-list label="Tags" hint="Click an ellipsis to act on a tag.">
                <x-list.items name="general" caption="1 server">
                    <x-slot:menu>
                        <x-dropdown.items text="Edit" />
                        <x-dropdown.items text="Delete" />
                    </x-slot:menu>
                </x-list.items>
                <x-list.items name="production" caption="12 servers">
                    <x-slot:menu>
                        <x-dropdown.items text="Edit" />
                        <x-dropdown.items text="Delete" />
                    </x-slot:menu>
                </x-list.items>
            </x-list>
        </x-preview>
    </x-section>
    <x-section title="Loop Items" disable-copy>
        <x-code language="blade" :contents="$loopItems" disable-copy />
    </x-section>
    <x-section title="Data-Driven">
        <x-preview language="blade" :contents="$dataDriven">
            <x-list label="Tags" :items="$preview" searchable />
        </x-preview>
    </x-section>
    <x-section title="Data-Driven Menu">
        <x-preview language="blade" :contents="$dataDrivenMenu">
            <x-list label="Tags" :items="$preview" searchable>
                @interact('item_menu', $item)
                    <x-dropdown.items text="Edit" />
                    <x-dropdown.items text="Delete" />
                @endinteract
            </x-list>
        </x-preview>
    </x-section>
    <x-section title="Scrollable Height">
        <x-preview language="blade" :contents="$height">
            <x-list label="Tags" :items="$long" searchable height="60" />
        </x-preview>
    </x-section>
    <x-section title="Custom Empty State">
        <x-preview language="blade" :contents="$emptySlot">
            <x-list label="Tags" searchable>
                <x-slot:empty>
                    <div class="flex flex-col items-center gap-2 py-4">
                        <p class="text-sm text-secondary-700 dark:text-dark-100">No tags configured yet.</p>
                        <x-button text="Create tag" />
                    </div>
                </x-slot:empty>
                <x-list.items name="general" caption="1 server" />
            </x-list>
        </x-preview>
    </x-section>
    <x-section title="Rich Inline Content">
        <x-preview language="blade" :contents="$richInline">
            <x-list label="Features">
                <x-list.items name="signup-flow">
                    <x-badge color="green" round xs>active</x-badge>
                </x-list.items>
                <x-list.items name="checkout-v2">
                    <x-badge color="amber" round xs>rolling out</x-badge>
                </x-list.items>
                <x-list.items name="legacy-onboarding">
                    <x-badge color="red" round xs>retired</x-badge>
                </x-list.items>
            </x-list>
        </x-preview>
    </x-section>
    <x-section title="Caveats" disable-copy>
        <ul class="list-disc list-inside space-y-2">
            <li>
                <x-block>x-list.items</x-block> is an internal child component, it expects the
                parent <x-block>x-list</x-block> Alpine scope to be present. Using it standalone
                will fail with Alpine errors. Always wrap inside <x-block>x-list</x-block>.
            </li>
            <li>
                <x-block>name</x-block> is <b>required</b> on every row (slot or data-driven). An
                empty or missing <x-block>name</x-block> throws an
                <x-block>InvalidArgumentException</x-block> at render time.
            </li>
            <li>
                <x-block>height</x-block> is restricted to the tokens
                <x-block>40</x-block>, <x-block>60</x-block>,
                <x-block>80</x-block> and <x-block>96</x-block>, anything else throws.
            </li>
            <li>
                The per-row menu is rendered through an internal
                <x-block>x-floating</x-block> at <x-block>z-40</x-block> so it sits below
                Dialog/Modal/Slide/Toast overlays at <x-block>z-50</x-block>. Customize the panel
                via the <x-block>menu.floating</x-block> block on
                <x-block>x-list.items</x-block>, not via floating's own customization.
            </li>
        </ul>
    </x-section>
    <x-section title="Compact" new description="Tightens the vertical padding of the rows, the search bar and the empty message. The flag lives on x-list alone and reaches the rows through @aware, so it holds for :items, lazy and slot rows alike.">
        <x-preview language="blade" :contents="$compact">
            <div class="grid gap-4 md:grid-cols-2">
                <x-list label="Default" :items="$preview" searchable />
                <x-list label="Compact" :items="$preview" searchable compact />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Lazy" new description="Moves the rows to the client. The server serializes :items into a single JSON array and AlpineJS renders a slice of it, growing it as a sentinel at the bottom of the scroll container comes into view.">
        <x-preview language="blade" :contents="$lazy">
            <x-list label="Tags" :items="$long" searchable height="60" lazy="4" />
        </x-preview>
        <p class="mt-4">
            The row markup is still the same component, so every soft customization of <x-block>list.items</x-block>
            reaches the lazy rows unchanged. Search still sees the whole dataset: the filter runs over the JSON array,
            not over the rendered rows.
        </p>
        <x-warning warning title="height is required, and the interact slots are refused" class="mt-4">
            The sentinel needs a scroll container to intersect with. And
            <x-block>@verbatim @interact('item_caption') @endverbatim</x-block>,
            <x-block>@verbatim @interact('item_action') @endverbatim</x-block> and
            <x-block>@verbatim @interact('item_menu') @endverbatim</x-block> are closures the server resolves while
            rendering each row, and there is no per-row server render left to resolve them, so the combination throws.
        </x-warning>
    </x-section>
    <x-section title="Action Slot" new description="Renders controls on the right of the row without the ellipsis dropdown chrome, and coexists with the menu slot.">
        <x-preview language="blade" :contents="$actionSlot">
            <x-list label="Environments">
                <x-list.items name="general" caption="1 server">
                    <x-slot:action>
                        <x-button sm>Deploy</x-button>
                    </x-slot:action>
                    <x-slot:menu>
                        <x-dropdown.items text="Edit" />
                        <x-dropdown.items text="Delete" />
                    </x-slot:menu>
                </x-list.items>
                <x-list.items name="production" caption="12 servers">
                    <x-slot:action>
                        <x-button sm color="red">Deploy</x-button>
                    </x-slot:action>
                </x-list.items>
            </x-list>
        </x-preview>
        <x-warning class="mt-4">
            When <x-block>action</x-block> and/or <x-block>menu</x-block> are present, both are grouped inside a new
            <x-block>content.aside</x-block> wrapper. Rows that previously rendered only a menu now carry one extra
            <x-block>div</x-block>.
        </x-warning>
    </x-section>
    <x-section title="Caption Slot" new description="caption keeps working as a plain string attribute and additionally accepts a slot for arbitrary markup. Search still matches its visible text, through a plain-text projection of the slot.">
        <x-preview language="blade" :contents="$captionSlot">
            <x-list label="Environments" searchable>
                <x-list.items name="production">
                    <x-slot:caption>
                        <x-badge text="12 servers" color="red" sm />
                    </x-slot:caption>
                </x-list.items>
                <x-list.items name="staging">
                    <x-slot:caption>
                        <x-badge text="3 servers" color="amber" sm />
                    </x-slot:caption>
                </x-list.items>
            </x-list>
        </x-preview>
    </x-section>
    <x-section title="Skeleton" new description="A structural placeholder shaped like the list itself. A bare flag draws 4 items; an integer sets the count. It follows compact, so a list that opens as a placeholder does not change height when the rows arrive.">
        <x-preview language="blade" :contents="$skeleton">
            <div class="grid gap-4 md:grid-cols-2">
                <x-list skeleton />
                <x-list skeleton="6" searchable label="Tags" />
            </div>
        </x-preview>
    </x-section>
</x-layout>
