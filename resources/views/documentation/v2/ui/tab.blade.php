@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content>
    <x-slot:title>
        Tabs
    </x-slot:title>
    <x-slot:description>
        Tabs component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:personalization :$personalization component="Tab" />
    </x-slot:personalization>
    <x-section title="Basic Usage">
        <x-preview language="blade" :background="false" :contents="$basic">
            <x-tab selected="Tab 1">
                <x-tab.items tab="Tab 1">
                    Tab 1
                </x-tab.items>
                <x-tab.items tab="Tab 2">
                    Tab 2
                </x-tab.items>
                <x-tab.items tab="Tab 3">
                    Tab 3
                </x-tab.items>
                <x-tab.items tab="Tab 4">
                    Tab 4
                </x-tab.items>
                <x-tab.items tab="Tab 5">
                    Tab 5
                </x-tab.items>
            </x-tab>
        </x-preview>
    </x-section>
    <x-section title="Scroll on Mobile">
        <div class="space-y-4">
            <p>
                On mobile devices the tab component displays a HTML select element for tab selection. You can change this behavior
                by using the <x-block>scroll-on-mobile</x-block> attribute, which will disable the select button and allow navigation
                to occur by natural tab selection.
            </p>
            <x-preview language="blade" :background="false" :contents="$mobile">
                <x-tab selected="Tab 1" scroll-on-mobile>
                    <x-tab.items tab="Tab 1">
                        Tab 1
                    </x-tab.items>
                    <x-tab.items tab="Tab 2">
                        Tab 2
                    </x-tab.items>
                    <x-tab.items tab="Tab 3">
                        Tab 3
                    </x-tab.items>
                    <x-tab.items tab="Tab 4">
                        Tab 4
                    </x-tab.items>
                    <x-tab.items tab="Tab 5">
                        Tab 5
                    </x-tab.items>
                    <x-tab.items tab="Tab 6">
                        Tab 6
                    </x-tab.items>
                    <x-tab.items tab="Tab 7">
                        Tab 7
                    </x-tab.items>
                    <x-tab.items tab="Tab 8">
                        Tab 8
                    </x-tab.items>
                </x-tab>
            </x-preview>
        </div>
    </x-section>
    <x-section title="Slots">
        <x-preview language="blade" :background="false" :contents="$slots">
            <x-tab selected="Invoices">
                <x-tab.items tab="Invoices">
                    <x-slot:right>
                        <x-icon name="document-text" class="w-5 h-5" />
                    </x-slot:right>
                    Invoices
                </x-tab.items>
                <x-tab.items tab="Transactions">
                    <x-slot:left>
                        <x-icon name="currency-dollar" class="w-5 h-5" />
                    </x-slot:left>
                    Transactions
                </x-tab.items>
            </x-tab>
        </x-preview>
    </x-section>
    <x-section title="Events">
        <x-preview language="blade" :background="false" :contents="$events">
            <x-tab selected="Invoices" x-on:navigate="alert($event.detail.select)">
                <x-tab.items tab="Invoices">
                    <x-slot:right>
                        <x-icon name="document-text" class="w-5 h-5" />
                    </x-slot:right>
                    Invoices
                </x-tab.items>
                <x-tab.items tab="Transactions">
                    <x-slot:left>
                        <x-icon name="currency-dollar" class="w-5 h-5" />
                    </x-slot:left>
                    Transactions
                </x-tab.items>
            </x-tab>
        </x-preview>
    </x-section>
    <x-section title="Wireable" description="An option to control the tab via Livewire.">
        <x-preview language="blade" :background="false" :contents="$wireable">
            <livewire:documentation.ui.tabs />
        </x-preview>
    </x-section>
    <x-section title="Live Wireable" description="An option to control the tab via Livewire with live updates.">
        <x-preview language="blade" :background="false" :contents="$wireableLive">
            <livewire:documentation.ui.tabs live />
        </x-preview>
    </x-section>
</x-layout>
