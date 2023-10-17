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
    <x-section>
        <x-preview title="Basic"
                   language="blade"
                   :background="false"
                   :contents="$basic">
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
    <x-section>
        <x-preview title="Wireable"
                   description="An option to control the tab entangled with a Livewire property."
                   language="blade"
                   :background="false"
                   :contents="$wireable">
            <livewire:documentation.ui.tabs />
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Wireable Live Property"
                   description="An option to control the tab entangled live with a Livewire property."
                   language="blade"
                   :background="false"
                   :contents="$wireableLive">
            <livewire:documentation.ui.tabs live />
        </x-preview>
    </x-section>
    <x-available-configuration />
</x-layout>
