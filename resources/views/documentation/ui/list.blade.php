@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }

    $preview = [
        ["id" => 1, "name" => "general", "caption" => "1 server"],
        ["id" => 2, "name" => "production", "caption" => "12 servers"],
        ["id" => 3, "name" => "staging", "caption" => "3 servers"],
    ];

    $long = collect(range(1, 50))
        ->map(
            fn (int $id): array => [
                "id" => $id,
                "name" => "tag-{$id}",
                "caption" => $id === 1 ? "1 server" : "{$id} servers",
            ],
        )
        ->all();
@endphp

<x-layout
    :$content
    :ai="['List' => 'list/main', 'List Items' => 'list/items']"
>
    <x-slot:title>List</x-slot>
    <x-slot:description>List component.</x-slot>
    <x-slot:customization>
        <livewire:customization
            :$customization
            component="List\Main"
            title="List"
        />
        <livewire:customization
            :customization="$customizationItems"
            component="List\Items"
            title="List Items"
        />
    </x-slot>
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
    <x-section
        title="Searchable"
        description="An option to perform client-side filtering of rows."
    >
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
            <x-list
                label="Tags"
                searchable
                search-placeholder="Filter tags by name or caption"
            >
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
                    </x-slot>
                </x-list.items>
                <x-list.items name="production" caption="12 servers">
                    <x-slot:menu>
                        <x-dropdown.items text="Edit" />
                        <x-dropdown.items text="Delete" />
                    </x-slot>
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
                @interact("item_menu", $item)
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
                        <p
                            class="text-secondary-700 dark:text-dark-100 text-sm"
                        >
                            No tags configured yet.
                        </p>
                        <x-button text="Create tag" />
                    </div>
                </x-slot>
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
    <x-section
        title="Compact"
        new
        description="Tightens the vertical padding of the rows, the search bar and the empty message. The flag lives on x-list alone and reaches the rows through @aware, so it holds for :items, lazy and slot rows alike."
    >
        <x-preview language="blade" :contents="$compact">
            <div class="grid gap-4 md:grid-cols-2">
                <x-list label="Default" :items="$preview" searchable />
                <x-list label="Compact" :items="$preview" searchable compact />
            </div>
        </x-preview>
    </x-section>
    <x-section
        title="Lazy"
        new
        description="An option to renders rows on the client."
    >
        <x-preview language="blade" :contents="$lazy">
            <x-list
                label="Tags"
                :items="$long"
                searchable
                height="60"
                lazy="4"
            />
        </x-preview>
        <p class="mt-4">
            The row markup is still the same component, so every soft
            customization of
            <x-block>list.items</x-block>
            reaches the lazy rows unchanged. Search still sees the whole
            dataset: the filter runs over the JSON array, not over the rendered
            rows.
        </p>
        <x-warning
            warning
            title="height is required, and the interact slots are refused"
            class="mt-4"
        >
            A scroll container is required for the sentinel to intersect. The
            server resolves the
            <x-block>
                @verbatim
                                @interact('item_caption')
                @endverbatim
            </x-block>
            ,
            <x-block>
                @verbatim
                                @interact('item_action')
                @endverbatim
            </x-block>
            , and
            <x-block>
                @verbatim
                                @interact('item_menu')
                @endverbatim
            </x-block>
            interactions during row rendering. Without a server render for each
            row, these interactions cannot be resolved, so the combination
            throws.
        </x-warning>
    </x-section>
    <x-section
        title="Action Slot"
        new
        description="An option to renders controls on the right of the row."
    >
        <x-preview language="blade" :contents="$actionSlot">
            <x-list label="Environments">
                <x-list.items name="general" caption="1 server">
                    <x-slot:action>
                        <x-button sm>Deploy</x-button>
                    </x-slot>
                    <x-slot:menu>
                        <x-dropdown.items text="Edit" />
                        <x-dropdown.items text="Delete" />
                    </x-slot>
                </x-list.items>
                <x-list.items name="production" caption="12 servers">
                    <x-slot:action>
                        <x-button sm color="red">Deploy</x-button>
                    </x-slot>
                </x-list.items>
            </x-list>
        </x-preview>
    </x-section>
    <x-section
        title="Skeleton"
        new
        description="An option to render a lazy loading state."
    >
        <x-preview language="blade" :contents="$skeleton">
            <div class="grid gap-4 md:grid-cols-2">
                <x-list skeleton />
                <x-list skeleton="6" searchable label="Tags" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Caveats" disable-copy>
        <ul class="list-inside list-disc space-y-2">
            <li>
                <x-block>x-list.items</x-block>
                is an internal child component, it expects the parent
                <x-block>x-list</x-block>
                Alpine scope to be present. Using it standalone will fail with
                Alpine errors. Always wrap inside
                <x-block>x-list</x-block>
                .
            </li>
            <li>
                <x-block>name</x-block>
                is
                <b>required</b>
                on every row (slot or data-driven). An empty or missing
                <x-block>name</x-block>
                throws an
                <x-block>InvalidArgumentException</x-block>
                at render time.
            </li>
            <li>
                <x-block>height</x-block>
                is restricted to the tokens
                <x-block>40</x-block>
                ,
                <x-block>60</x-block>
                ,
                <x-block>80</x-block>
                and
                <x-block>96</x-block>
                , anything else throws.
            </li>
            <li>
                The per-row menu is rendered through an internal
                <x-block>x-floating</x-block>
                at
                <x-block>z-40</x-block>
                so it sits below Dialog/Modal/Slide/Toast overlays at
                <x-block>z-50</x-block>
                . Customize the panel via the
                <x-block>menu.floating</x-block>
                block on
                <x-block>x-list.items</x-block>
                , not via floating's own customization.
            </li>
        </ul>
    </x-section>
</x-layout>
