<x-layout>
    <x-slot:title>
        Tabs
    </x-slot:title>
    <x-slot:description>
        Tabs components to organize the content.
    </x-slot:description>
    <x-section title="Basic Usage" class="space-y-4">
        <x-tabs :options="['Tab 1', 'Tab 2']" selected="Tab 1">
            <x-tabs.items tab="Tab 1">
                Tab 1
            </x-tabs.items>
            <x-tabs.items tab="Tab 2">
                Tab 2
            </x-tabs.items>
        </x-tabs>
        <x-code language="blade">
        @verbatim
<x-tabs :options="['Tab 1', 'Tab 2']" selected="Tab 1">
    <x-tabs.items tab="Tab 1">
        Tab 1
    </x-tabs.items>
    <x-tabs.items tab="Tab 1">
        Tab 2
    </x-tabs.items>
</x-tabs>
        @endverbatim
        </x-code>
    </x-section>
    <p class="mt-4 text-gray-700">Tabs can also be displayed square by managing the TasteUi configuration file.</p>
</x-layout>
