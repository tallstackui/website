@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content :ai="['Tab' => 'tab/main', 'Tab Items' => 'tab/items']">
    <x-slot:title>Tab</x-slot>
    <x-slot:description>Tab component.</x-slot>
    <x-slot:customization>
        <livewire:customization
            :$customization
            component="Tab\Main"
            title="Tab"
        />
    </x-slot>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-tab selected="Tab 1">
                <x-tab.items tab="Tab 1">Tab 1</x-tab.items>
                <x-tab.items tab="Tab 2">Tab 2</x-tab.items>
                <x-tab.items tab="Tab 3">Tab 3</x-tab.items>
                <x-tab.items tab="Tab 4">Tab 4</x-tab.items>
                <x-tab.items tab="Tab 5">Tab 5</x-tab.items>
            </x-tab>
        </x-preview>
    </x-section>
    <x-section
        title="Centered"
        description="An option to center the tab navigation items."
    >
        <x-preview language="blade" :contents="$centered">
            <x-tab selected="Tab 1" centered>
                <x-tab.items tab="Tab 1">Tab 1</x-tab.items>
                <x-tab.items tab="Tab 2">Tab 2</x-tab.items>
                <x-tab.items tab="Tab 3">Tab 3</x-tab.items>
            </x-tab>
        </x-preview>
    </x-section>
    <x-section title="Scroll on Mobile">
        <div class="space-y-4">
            <p>
                On mobile devices the tab component displays a HTML select
                element for tab selection. You can change this behavior by using
                the
                <x-block>scroll-on-mobile</x-block>
                attribute, which will disable the select button and allow
                navigation to occur by natural tab selection.
            </p>
            <x-preview language="blade" :contents="$mobile">
                <x-tab selected="Tab 1" scroll-on-mobile>
                    <x-tab.items tab="Tab 1">Tab 1</x-tab.items>
                    <x-tab.items tab="Tab 2">Tab 2</x-tab.items>
                    <x-tab.items tab="Tab 3">Tab 3</x-tab.items>
                    <x-tab.items tab="Tab 4">Tab 4</x-tab.items>
                    <x-tab.items tab="Tab 5">Tab 5</x-tab.items>
                    <x-tab.items tab="Tab 6">Tab 6</x-tab.items>
                    <x-tab.items tab="Tab 7">Tab 7</x-tab.items>
                    <x-tab.items tab="Tab 8">Tab 8</x-tab.items>
                </x-tab>
            </x-preview>
        </div>
    </x-section>
    <x-section title="Slots">
        <x-preview language="blade" :contents="$slots">
            <x-tab selected="Invoices">
                <x-tab.items tab="Invoices">
                    <x-slot:right>
                        <x-icon name="document-text" class="h-5 w-5" />
                    </x-slot>
                    Invoices
                </x-tab.items>
                <x-tab.items tab="Transactions">
                    <x-slot:left>
                        <x-icon name="currency-dollar" class="h-5 w-5" />
                    </x-slot>
                    Transactions
                </x-tab.items>
            </x-tab>
        </x-preview>
    </x-section>
    <x-section title="Route-Based Tabs" disable-copy>
        <div class="space-y-4">
            <p>
                Tabs can be associated with URLs using the
                <x-block>href</x-block>
                attribute on
                <x-block>tab.items</x-block>
                . When set, the tab's content only renders server-side if the
                current URL matches. Clicking a different tab navigates to its
                URL. This avoids rendering heavy Livewire components for
                inactive tabs.
            </p>
            <p>
                You can use the
                <x-block>navigate</x-block>
                attribute to use Livewire SPA navigation:
            </p>
            <x-code language="blade" :contents="$routeBased" />
            <p>
                You can also use
                <x-block>navigate-hover</x-block>
                to prefetch the URL on hover before navigating on click:
            </p>
            <x-code language="blade" :contents="$routeBasedNavigateHover" />
            <p>
                Without
                <x-block>navigate</x-block>
                or
                <x-block>navigate-hover</x-block>
                , clicking a tab with
                <x-block>href</x-block>
                will use plain
                <x-block>window.location.href</x-block>
                navigation. Tabs without
                <x-block>href</x-block>
                continue to work as before with client-side switching.
            </p>
        </div>
    </x-section>
    <x-section title="Events">
        <div class="space-y-4">
            <x-preview language="blade" :contents="$events">
                <x-tab
                    selected="Invoices"
                    x-on:navigate="alert($event.detail.select)"
                >
                    <x-tab.items tab="Invoices">
                        <x-slot:right>
                            <x-icon name="document-text" class="h-5 w-5" />
                        </x-slot>
                        Invoices
                    </x-tab.items>
                    <x-tab.items tab="Transactions">
                        <x-slot:left>
                            <x-icon name="currency-dollar" class="h-5 w-5" />
                        </x-slot>
                        Transactions
                    </x-tab.items>
                </x-tab>
            </x-preview>
            <x-table
                :headers="[
                    ['index' => 'event', 'label' => 'Event'],
                    ['index' => 'detail', 'label' => 'Detail'],
                    ['index' => 'fired', 'label' => 'Fired when'],
                ]"
                :rows="[
                    ['event' => 'navigate', 'detail' => '{ select }', 'fired' => 'The selected tab changes'],
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
        title="Wireable"
        description="An option to control the tab via Livewire."
    >
        <x-preview language="blade" :contents="$wireable">
            <livewire:documentation.ui.tabs />
        </x-preview>
    </x-section>
    <x-section
        title="Live Wireable"
        description="An option to control the tab via Livewire with live updates."
    >
        <x-preview language="blade" :contents="$wireableLive">
            <livewire:documentation.ui.tabs live />
        </x-preview>
    </x-section>
    <x-section
        title="Flat Look"
        new
        description="An option to display the component without shadows."
    >
        <x-preview language="blade" :contents="$flat">
            <div class="space-y-4">
                <x-tab selected="Tab 1" bordered>
                    <x-tab.items tab="Tab 1">Content 1</x-tab.items>
                    <x-tab.items tab="Tab 2">Content 2</x-tab.items>
                </x-tab>
                <x-tab selected="Tab 1" shadowless>
                    <x-tab.items tab="Tab 1">Content 1</x-tab.items>
                    <x-tab.items tab="Tab 2">Content 2</x-tab.items>
                </x-tab>
                <x-tab selected="Tab 1" shadowless bordered>
                    <x-tab.items tab="Tab 1">Content 1</x-tab.items>
                    <x-tab.items tab="Tab 2">Content 2</x-tab.items>
                </x-tab>
            </div>
        </x-preview>
    </x-section>
    <x-section
        title="Paddingless"
        new
        description="An option to display the component without any padding on the body."
    >
        <x-preview language="blade" :contents="$paddingless">
            <x-tab selected="Tab 1" paddingless>
                <x-tab.items tab="Tab 1">Tall</x-tab.items>
                <x-tab.items tab="Tab 2">Stack</x-tab.items>
                <x-tab.items tab="Tab 3">UI 🥰</x-tab.items>
            </x-tab>
        </x-preview>
    </x-section>
</x-layout>
