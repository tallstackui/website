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
    <x-section title="Data for Table" :copy="false">
        You have two ways to provide data to create a table: <b>1)</b> Simple data through an array
        or <b>2)</b> Data that comes from the database, using <a href="https://laravel.com/docs/10.x/pagination#paginating-eloquent-results" class="underline" target="_blank">
        Laravel Eloquent Pagination.</a> The main difference between the two ways is that
        when choosing to create a <u>table with an array of data, features such as filtering,
        sorting and pagination will be more difficult to implement.</u>
        <p class="mt-4"><b>1)</b> Table using array</p>
        <x-code language="blade" :contents="$exampleArray" :copy="false" />
        <p class="mt-4"><b>2)</b> Table using Laravel Eloquent</p>
        <x-code language="blade" :contents="$exampleEloquent" :copy="false" />
    </x-section>
    <x-warning class="mb-4">
        All examples below use Livewire components through Laravel Volt.
    </x-warning>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic" :background="false">
            <livewire:documentation.ui.table :mode="1" />
        </x-preview>
    </x-section>
    <x-section title="Without Header">
        <x-preview language="blade" :contents="$withoutHeader" :background="false">
            <livewire:documentation.ui.table :mode="2" />
        </x-preview>
    </x-section>
    <x-section title="Striped Style">
        <x-preview language="blade" :contents="$striped" :background="false">
            <livewire:documentation.ui.table :mode="3" />
        </x-preview>
    </x-section>
    <x-section title="Filters">
        <x-preview language="blade" :contents="$filters" :background="false">
            <livewire:documentation.ui.table :mode="4" />
        </x-preview>
    </x-section>
    <x-section title="Loading Effect" description="An option to display a loading effect when interacts with the table.">
        <x-preview language="blade" :contents="$loading" :background="false">
            <livewire:documentation.ui.table :mode="5" />
        </x-preview>
    </x-section>
    <x-section title="Sorting" description="Sorting when clicking on the header names of the table.">
        <x-preview language="blade" :contents="$sort" :background="false">
            <livewire:documentation.ui.table :mode="6" />
        </x-preview>
    </x-section>
    <x-section title="Pagination">
        <x-preview language="blade" :contents="$basic" :background="false">
            <livewire:documentation.ui.table :mode="7" />
        </x-preview>
    </x-section>
</x-layout>
