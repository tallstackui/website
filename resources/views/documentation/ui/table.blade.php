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
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="table" />
    </x-slot:personalization>
    <x-warning class="mb-4">
        All examples in this page use Livewire through Laravel Volt because the TallStackUI
        documentation uses Livewire through Laravel Volt instead of pure Livewire components.
        You can use the table component in pure Livewire components, i.e. without Laravel Volt.
    </x-warning>
    <x-section title="Concept" :copy="false">
        <p>
            Although many packages can add table features to your project, <u>starting from
                version 1.6.0</u> of TallStackUI you can take advantage of the simple table component,
            but with all the basic features necessary for a table to work through Livewire components.
        </p>
    </x-section>
    <x-section title="Data for Table" :copy="false">
        <p>
            You have two ways to provide data to create a table: <b>1)</b> Simple data through an array
            or <b>2)</b> Data that comes from the database, using <a href="https://laravel.com/docs/10.x/pagination#paginating-eloquent-results" class="underline" target="_blank">
            Laravel Eloquent Pagination.</a> The main difference between the two ways is that
            when choosing to create a <u>table with an array of data, features such as filtering,
            sorting and pagination will be more difficult to implement.</u>
        </p>
        <p class="mt-4"><b>1)</b> Simple data through an array</p>
        <x-code language="blade" :contents="$exampleArray" :copy="false" />
        <p class="mt-4"><b>2)</b> Data that comes from the database</p>
        <x-code language="blade" :contents="$exampleEloquent" :copy="false" />
    </x-section>
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
        <x-warning class="mb-4">
            The search input bind the property using wire:model.live with debounce of 500ms.
        </x-warning>
    </x-section>
    <x-section title="Loading Effect" description="An option to display a loading effect when interacts with the table elements.">
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
        <x-preview language="blade" :contents="$paginate" :background="false">
            <livewire:documentation.ui.table :mode="7" />
        </x-preview>
        <x-warning>
            The paginator element has a different style when in mobile.
        </x-warning>
    </x-section>
    <x-section title="Interacting With Data" :copy="false">
        <p>
            The table component provides a custom Blade directive <x-block>@verbatim @column @endverbatim</x-block>
            to allow you to interact with the table columns about the data provided in each row. Allowing you to
            interact with the table and make things like add an action button for each row.
        </p>
        <x-code :contents="$columns" :copy="false" />
        <p>
            <a href="https://livewire.laravel.com/docs/nesting#rendering-children-in-a-loop" class="underline" target="_blank">
            As mentioned in the Livewire documentation</a>, for cases where you want to render
            components in a loop, using the Blade <x-block>@verbatim @column @endverbatim</x-block>
            directive, you must specify a unique key for each component:
        </p>
        <x-code :contents="$loop" :copy="false" />
    </x-section>
    <x-slot:navigation>
        <x-slot:back>
            <x-layout.footer-navigation :href="route('documentation.ui.tab')" text="Tab" back />
        </x-slot:back>
        <x-slot:next>
            <x-layout.footer-navigation :href="route('documentation.ui.tooltip')" text="Tooltip" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
