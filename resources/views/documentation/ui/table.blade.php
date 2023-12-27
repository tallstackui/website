<x-layout>
    <x-slot:title>
        Table
        <x-slot:version>
            1.6
        </x-slot:version>
    </x-slot:title>
    <x-slot:description>
        Table component.
    </x-slot:description>
    <x-section title="Concept" :copy="false">
        Although many packages can add table features to your project, <u>starting from
        version 1.6.0</u> of TallStackUI you can take advantage of the simple table component,
        but with all the basic features necessary for a table to work through Livewire components.
    </x-section>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic" :background="false">
            <livewire:documentation.ui.table :mode="1" />
        </x-preview>
    </x-section>
    <x-section title="Without Header">
        <x-preview language="blade" :contents="$basic" :background="false">
            <livewire:documentation.ui.table :mode="2" />
        </x-preview>
    </x-section>
    <x-section title="Striped Style">
        <x-preview language="blade" :contents="$basic" :background="false">
            <livewire:documentation.ui.table :mode="3" />
        </x-preview>
    </x-section>
    <x-section title="Filters">
        <x-preview language="blade" :contents="$basic" :background="false">
            <livewire:documentation.ui.table :mode="4" />
        </x-preview>
    </x-section>
    <x-section title="Loading Effect" description="An option to display a loading effect when interacts with the table.">
        <x-preview language="blade" :contents="$basic" :background="false">
            <livewire:documentation.ui.table :mode="5" />
        </x-preview>
    </x-section>
    <x-section title="Sort" description="Sort feature when clicking on the header names of the table.">
        <x-preview language="blade" :contents="$basic" :background="false">
            <livewire:documentation.ui.table :mode="6" />
        </x-preview>
    </x-section>
    <x-section title="Pagination">
        <x-preview language="blade" :contents="$basic" :background="false">
            <livewire:documentation.ui.table :mode="7" />
        </x-preview>
    </x-section>
</x-layout>
