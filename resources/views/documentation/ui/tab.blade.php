@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content :ai="['Tab' => 'tab/main', 'Tab Items' => 'tab/items']">
    <x-slot:title>Tab</x-slot:title>
    <x-slot:description>Tab component.</x-slot:description>
    <x-slot:customization>
        <livewire:customization :$customization component="Tab\Main" title="Tab" />
    </x-slot:customization>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-tab selected="Tab 1">
                <x-tab.items tab="Tab 1"> Tab 1 </x-tab.items>
                <x-tab.items tab="Tab 2"> Tab 2 </x-tab.items>
                <x-tab.items tab="Tab 3"> Tab 3 </x-tab.items>
                <x-tab.items tab="Tab 4"> Tab 4 </x-tab.items>
                <x-tab.items tab="Tab 5"> Tab 5 </x-tab.items>
            </x-tab>
        </x-preview>
    </x-section>
    <x-section title="Centered" description="An option to center the tab navigation items.">
        <x-preview language="blade" :contents="$centered">
            <x-tab selected="Tab 1" centered>
                <x-tab.items tab="Tab 1"> Tab 1 </x-tab.items>
                <x-tab.items tab="Tab 2"> Tab 2 </x-tab.items>
                <x-tab.items tab="Tab 3"> Tab 3 </x-tab.items>
            </x-tab>
        </x-preview>
    </x-section>
    <x-section title="Scroll on Mobile">
        <div class="space-y-4">
            <p>
                On mobile devices the tab component displays a HTML select element for tab selection. You can change
                this behavior by using the <x-block>scroll-on-mobile</x-block> attribute, which will disable the select
                button and allow navigation to occur by natural tab selection.
            </p>
            <x-preview language="blade" :contents="$mobile">
                <x-tab selected="Tab 1" scroll-on-mobile>
                    <x-tab.items tab="Tab 1"> Tab 1 </x-tab.items>
                    <x-tab.items tab="Tab 2"> Tab 2 </x-tab.items>
                    <x-tab.items tab="Tab 3"> Tab 3 </x-tab.items>
                    <x-tab.items tab="Tab 4"> Tab 4 </x-tab.items>
                    <x-tab.items tab="Tab 5"> Tab 5 </x-tab.items>
                    <x-tab.items tab="Tab 6"> Tab 6 </x-tab.items>
                    <x-tab.items tab="Tab 7"> Tab 7 </x-tab.items>
                    <x-tab.items tab="Tab 8"> Tab 8 </x-tab.items>
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
                    </x-slot:right>
                    Invoices
                </x-tab.items>
                <x-tab.items tab="Transactions">
                    <x-slot:left>
                        <x-icon name="currency-dollar" class="h-5 w-5" />
                    </x-slot:left>
                    Transactions
                </x-tab.items>
            </x-tab>
        </x-preview>
    </x-section>
    <x-section title="Route-Based Tabs">
        <div class="space-y-4">
            <p>
                Starting from v3, tabs can be associated with URLs using the <x-block>href</x-block> attribute on
                <x-block>tab.items</x-block>. When set, the tab's content only renders server-side if the current URL
                matches. Clicking a different tab navigates to its URL. This avoids rendering heavy Livewire components
                for inactive tabs.
            </p>
            <p>You can use the <x-block>navigate</x-block> attribute to use Livewire SPA navigation:</p>
            <x-code language="blade" :contents="$routeBased" />
            <p>
                You can also use <x-block>navigate-hover</x-block> to prefetch the URL on hover before navigating on
                click:
            </p>
            <x-code language="blade" :contents="$routeBasedNavigateHover" />
            <p>
                Without <x-block>navigate</x-block> or <x-block>navigate-hover</x-block>, clicking a tab with
                <x-block>href</x-block> will use plain <x-block>window.location.href</x-block> navigation. Tabs without
                <x-block>href</x-block> continue to work as before with client-side switching.
            </p>
        </div>
    </x-section>
    <x-section title="Events">
        <x-preview language="blade" :contents="$events">
            <x-tab selected="Invoices" x-on:navigate="alert($event.detail.select)">
                <x-tab.items tab="Invoices">
                    <x-slot:right>
                        <x-icon name="document-text" class="h-5 w-5" />
                    </x-slot:right>
                    Invoices
                </x-tab.items>
                <x-tab.items tab="Transactions">
                    <x-slot:left>
                        <x-icon name="currency-dollar" class="h-5 w-5" />
                    </x-slot:left>
                    Transactions
                </x-tab.items>
            </x-tab>
        </x-preview>
    </x-section>
    <x-section title="Wireable" description="An option to control the tab via Livewire.">
        <x-preview language="blade" :contents="$wireable">
            <livewire:documentation.ui.tabs />
        </x-preview>
    </x-section>
    <x-section title="Live Wireable" description="An option to control the tab via Livewire with live updates.">
        <x-preview language="blade" :contents="$wireableLive">
            <livewire:documentation.ui.tabs live />
        </x-preview>
    </x-section>
    <x-section
        title="Flat Look"
        new
        description="shadowless drops the shadow, bordered draws a border around the wrapper while keeping it. The predefined tab-shadowless scope keeps working unchanged."
    >
        <x-preview language="blade" :contents="$flat">
            <x-tab selected="Tab 1" shadowless bordered>
                <x-tab.items tab="Tab 1">Content 1</x-tab.items>
                <x-tab.items tab="Tab 2">Content 2</x-tab.items>
            </x-tab>
        </x-preview>
    </x-section>
    <x-section
        title="Paddingless"
        new
        description="Strips the padding of the content area, leaving it flush against the edges."
    >
        <x-preview language="blade" :contents="$paddingless">
            <x-tab selected="Tab 1" paddingless>
                <x-tab.items tab="Tab 1">
                    <x-table
                        :headers="[['index' => 'name', 'label' => 'Name'], ['index' => 'email', 'label' => 'E-mail']]"
                        :rows="[['name' => 'AJ', 'email' => 'aj@tallstackui.com'], ['name' => 'Bob', 'email' => 'bob@tallstackui.com']]"
                    />
                </x-tab.items>
                <x-tab.items tab="Tab 2">Content 2</x-tab.items>
            </x-tab>
        </x-preview>
    </x-section>
</x-layout>
