<?php

namespace App\Enums\Examples\V4\Ui;

class ListComponent
{
    public const string BASIC = <<<'HTML'
    <x-list>
        <x-list.items name="general" caption="1 server" />
        <x-list.items name="production" caption="12 servers" />
        <x-list.items name="staging" caption="3 servers" />
    </x-list>

    <!-- or -->

    @php
        // `$items` may be an array, a Collection, or any object that implements
        // `Illuminate\Contracts\Support\Arrayable`. Each entry is read with
        // `data_get`, so accessors and array keys both work. The only required
        // key is `name` — every other key is optional and accessible inside
        // `@interact('item_menu', $item)` as `$item['extra_key']`.
        $items = [
            ['name' => 'general',    'caption' => '1 server'],
            ['name' => 'production', 'caption' => '12 servers'],
            ['name' => 'staging',    'caption' => '3 servers'],
        ];
    @endphp

    <x-list :items="$items" />
    HTML;

    public const string LABEL_HINT = <<<'HTML'
    <x-list label="Tags" hint="Manage your tags here.">
        <x-list.items name="general" caption="1 server" />
        <x-list.items name="production" caption="12 servers" />
    </x-list>
    HTML;

    public const string SEARCHABLE = <<<'HTML'
    <x-list label="Tags" searchable>
        <x-list.items name="general" caption="1 server" />
        <x-list.items name="production" caption="12 servers" />
        <x-list.items name="staging" caption="3 servers" />
    </x-list>
    HTML;

    public const string SEARCH_PLACEHOLDER = <<<'HTML'
    <x-list label="Tags" searchable search-placeholder="Filter tags by name or caption">
        <x-list.items name="general" caption="1 server" />
        <x-list.items name="production" caption="12 servers" />
    </x-list>
    HTML;

    public const string PER_ITEM_MENU = <<<'HTML'
    <x-list label="Tags" hint="Click an ellipsis to act on a tag.">
        <x-list.items name="general" caption="1 server">
            <x-slot:menu>
                <x-dropdown.items text="Edit" wire:click="edit('general')" />
                <x-dropdown.items text="Delete" wire:click="delete('general')" />
            </x-slot:menu>
        </x-list.items>
        <x-list.items name="production" caption="12 servers">
            <x-slot:menu>
                <x-dropdown.items text="Edit" wire:click="edit('production')" />
                <x-dropdown.items text="Delete" wire:click="delete('production')" />
            </x-slot:menu>
        </x-list.items>
    </x-list>
    HTML;

    public const string LOOP_ITEMS = <<<'HTML'
    <x-list label="Tags" searchable>
        @foreach ($tags as $tag)
            <x-list.items :name="$tag->name" :caption="$tag->servers_count.' server(s)'">
                <x-slot:menu>
                    <x-dropdown.items text="Edit" wire:click="edit({{ $tag->id }})" />
                    <x-dropdown.items text="Delete" wire:click="delete({{ $tag->id }})" />
                </x-slot:menu>
            </x-list.items>
        @endforeach
    </x-list>
    HTML;

    public const string DATA_DRIVEN = <<<'HTML'
    @php
        $tags = [
            ['name' => 'general',    'caption' => '1 server'],
            ['name' => 'production', 'caption' => '12 servers'],
            ['name' => 'staging',    'caption' => '3 servers'],
        ];
    @endphp

    <x-list label="Tags" :items="$tags" searchable />
    HTML;

    public const string DATA_DRIVEN_MENU = <<<'HTML'
    @php
        $tags = [
            ['id' => 1, 'name' => 'general',    'caption' => '1 server'],
            ['id' => 2, 'name' => 'production', 'caption' => '12 servers'],
            ['id' => 3, 'name' => 'staging',    'caption' => '3 servers'],
        ];
    @endphp

    <x-list label="Tags" :items="$tags" searchable>
        @interact('item_menu', $item)
            <x-dropdown.items text="Edit" wire:click="edit('{{ $item['id'] }}')" />
            <x-dropdown.items text="Delete" wire:click="delete('{{ $item['id'] }}')" />
        @endinteract
    </x-list>
    HTML;

    public const string HEIGHT = <<<'HTML'
    <!--
        The `height` attribute accepts one of `'40'`, `'60'`, `'80'` or `'96'`,
        which translate to `max-h-{n}` plus a custom-styled scrollbar.
    -->
    <x-list label="Tags" :items="$tags" searchable height="60" />
    HTML;

    public const string EMPTY_SLOT = <<<'HTML'
    <!--
        The empty slot is shown when the list has zero items AND when
        the search filter matches none. The default falls back to the
        `ts-ui::messages.list.empty` translation key.
     -->
    <x-list label="Tags" searchable>
        <x-slot:empty>
            <div class="flex flex-col items-center gap-2 py-4">
                <p class="text-sm text-secondary-700 dark:text-dark-100">No tags configured yet.</p>
                <x-button text="Create tag" wire:click="create" />
            </div>
        </x-slot:empty>
        <x-list.items name="general" caption="1 server" />
    </x-list>
    HTML;

    public const string RICH_INLINE = <<<'HTML'
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
    HTML;

    public const string COMPACT = <<<'HTML'
    <x-list compact :items="$tags" />
    HTML;

    public const string LAZY = <<<'HTML'
    {{-- First slice of 20 --}}
    <x-list :items="$tags" height="60" lazy />

    {{-- First slice of 10 --}}
    <x-list :items="$tags" height="60" lazy="10" />
    HTML;

    public const string ACTION_SLOT = <<<'HTML'
    <x-list.items name="general" caption="1 server">
        <x-slot:action>
            <x-button sm wire:click="deploy('general')">Deploy</x-button>
        </x-slot:action>
        <x-slot:menu>
            <x-dropdown.items text="Edit" wire:click="edit('general')" />
        </x-slot:menu>
    </x-list.items>
    HTML;

    public const string CAPTION_SLOT = <<<'HTML'
    <x-list.items name="production">
        <x-slot:caption>
            <x-badge text="12 servers" color="red" sm />
        </x-slot:caption>
    </x-list.items>
    HTML;

    public const string SKELETON = <<<'HTML'
    <x-list skeleton />
    <x-list skeleton="6" searchable label="Tags" />
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->list()
        ->block('block', 'classes');
    HTML;

    public const string CUSTOMIZATION_ITEMS = <<<'HTML'
    TallStackUi::customize()
        ->list('items')
        ->block('block', 'classes');
    HTML;
}
