<x-layout>
    <x-slot:title>
        Tabs
    </x-slot:title>
    <x-slot:description>
        Tabs components to display content in tabs.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="tab" />
        <livewire:documentation.personalization :personalization="$personalizationItems" component="tab.items" />
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
    <x-section title="Wireable" description="An option to control the tab entangled with a Livewire property.">
        <x-preview language="blade" :background="false" :contents="$wireable">
            <livewire:documentation.ui.tabs />
        </x-preview>
    </x-section>
    <x-section title="Live Wireable" description="An option to control the tab entangled live with a Livewire property.">
        <x-preview language="blade" :background="false" :contents="$wireableLive">
            <livewire:documentation.ui.tabs live />
        </x-preview>
    </x-section>
    <x-slot:navigation>
        <x-slot:back>
            <x-navigation.link href="{{ route('documentation.ui.slide') }}" text="Slide" back />
        </x-slot:back>
        <x-slot:next>
            <x-navigation.link href="{{ route('documentation.ui.tooltip') }}" text="Tooltip" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
