@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content ai="table">
    <x-slot:title>
        Table
    </x-slot:title>
    <x-slot:description>
        Table component.
    </x-slot:description>
    <x-slot:customization>
        <livewire:customization :$customization component="Table" />
    </x-slot:customization>
    <x-section title="Concept" disable-copy>
        <p>
            Although many packages can add table features to your project, TallStackUI offers you a simple table
            component, but with all the basic features necessary for a table to work through Livewire components.
        </p>
    </x-section>
    <x-section title="Data for Table" disable-copy>
        <p>
            You have two ways to provide data to create a table: <b>1)</b> Simple data through an array
            or <b>2)</b> Data that comes from the database, using <a href="https://laravel.com/docs/10.x/pagination#paginating-eloquent-results" class="underline" target="_blank">
            Laravel Eloquent Pagination.</a> The main difference between the two ways is that
            when choosing to create a <u>table with an array of data, features such as filtering,
            sorting and pagination will be more difficult to implement.</u>
        </p>
        <p class="mt-4"><b>1)</b> Simple data through an array</p>
        <x-code language="blade" :contents="$exampleArray" disable-copy />
        <p class="mt-4"><b>2)</b> Data that comes from the database</p>
        <x-code language="blade" :contents="$exampleEloquent" disable-copy />
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
    </x-section>
    <x-section title="Slots">
        <x-preview language="blade" :contents="$slots" :background="false">
            <livewire:documentation.ui.table :mode="8" />
        </x-preview>
    </x-section>
    <x-section title="Selection">
        <x-preview language="blade" :contents="$selectable" :background="false">
            <livewire:documentation.ui.table :mode="9" />
        </x-preview>
    </x-section>
    <x-section title="Clickable">
        <x-preview language="blade" :contents="$clickable" :background="false">
            <livewire:documentation.ui.table :mode="10" />
        </x-preview>
    </x-section>
    <x-section title="Empty State" description="An option to display a custom message when the table is empty.">
        <x-preview language="blade" :contents="$empty" :background="false">
            <livewire:documentation.ui.table :mode="13" />
        </x-preview>
    </x-section>
    <x-section title="Highlight" description="An option to highlight rows based on a color property.">
        <x-preview language="blade" :contents="$highlight" :background="false">
            <livewire:documentation.ui.table :mode="11" />
        </x-preview>
    </x-section>
    <x-section title="Interacting With Data" disable-copy>
        <p>
            The table component provides a custom Blade directive <x-block>@verbatim @interact @endverbatim</x-block>
            to allow you to interact with the table columns about the data provided in each row. Allowing you to
            interact with the table and make things like add an action button for each row.
        </p>
        <x-code :contents="$columns" disable-copy />
        <p>
            <a href="https://livewire.laravel.com/docs/nesting#rendering-children-in-a-loop" class="underline" target="_blank">
            As mentioned in the Livewire documentation</a>, for cases where you want to render
            components in a loop, using the Blade <x-block>@verbatim @interact @endverbatim</x-block>
            directive, you must specify a unique key for each component:
        </p>
        <x-code :contents="$loop" disable-copy />
        <p>
            You can use <x-block>$loop</x-block> inside the <x-block>@verbatim @interact @endverbatim</x-block> directive to
            interact with the data of each row. The <x-block>$loop</x-block> variable is a special variable
            provided by Blade that contains information about the current iteration of the loop.
        </p>
    </x-section>
    <x-section title="Expandable" description="An option to expand rows to display sub-content such as nested tables.">
        <div class="space-y-4">
            <x-code language="blade" :contents="$expandableNested" />
        </div>
    </x-section>
    <x-section title="Compact" new description="Tightens the vertical padding of the header cells, the data cells, the empty message and the expandable content. Unrelated to paginator=&quot;compact&quot;, which names a pagination look. The two combine.">
        <x-preview language="blade" :contents="$compact" :background="false">
            <x-table compact :headers="[
                ['index' => 'id', 'label' => '#'],
                ['index' => 'name', 'label' => 'Name'],
                ['index' => 'email', 'label' => 'E-mail'],
            ]" :rows="[
                ['id' => 1, 'name' => 'AJ Meireles', 'email' => 'aj@tallstackui.com'],
                ['id' => 2, 'name' => 'Bob Doe', 'email' => 'bob@tallstackui.com'],
                ['id' => 3, 'name' => 'Carol Fox', 'email' => 'carol@tallstackui.com'],
            ]" />
        </x-preview>
        <x-warning class="mt-4">
            Each affected block gained a <x-block>-compact</x-block> twin, and the flag swaps the whole string. An
            application customizing <x-block>table.td</x-block> has to customize <x-block>table.td-compact</x-block>
            too if it uses both modes.
        </x-warning>
    </x-section>
    <x-section title="Outside Livewire" new description="The three features that depended on a round trip now travel through the query string. The search and quantity parameter names come from filter, so the application still owns them.">
        <x-preview language="blade" :contents="$outsideLivewire" :background="false">
            <x-table filter :headers="[
                ['index' => 'id', 'label' => '#'],
                ['index' => 'name', 'label' => 'Name'],
                ['index' => 'email', 'label' => 'E-mail'],
            ]" :rows="[
                ['id' => 1, 'name' => 'AJ Meireles', 'email' => 'aj@tallstackui.com'],
                ['id' => 2, 'name' => 'Bob Doe', 'email' => 'bob@tallstackui.com'],
                ['id' => 3, 'name' => 'Carol Fox', 'email' => 'carol@tallstackui.com'],
            ]" />
        </x-preview>
        <x-code class="mt-4" language="text" :contents="$outsideLivewireQuery" />
        <x-table class="mt-4" :headers="[
            ['index' => 'feature', 'label' => 'Feature'],
            ['index' => 'inside', 'label' => 'Inside Livewire'],
            ['index' => 'outside', 'label' => 'Outside'],
        ]" :rows="[
            ['feature' => 'pagination', 'inside' => 'wire:click=\'gotoPage\'', 'outside' => '<a href>, built from the URLs the paginator already exposes'],
            ['feature' => 'sorting', 'inside' => 'wire:click=\'$set\'', 'outside' => '<a href> with the inverted direction'],
            ['feature' => 'filter', 'inside' => 'wire:model.live', 'outside' => 'AlpineJS rewriting location'],
            ['feature' => 'loading', 'inside' => 'wire:loading', 'outside' => 'not rendered'],
            ['feature' => 'selectable', 'inside' => 'entangled array', 'outside' => 'plain array, reported through events'],
        ]" />
        <x-warning class="mt-4">
            Filtering or sorting drops <x-block>page</x-block>; every other parameter survives. Outside Livewire the
            paginator is also passed through <x-block>withQueryString()</x-block>, or paginating would silently drop
            the active filter and sort.
        </x-warning>
    </x-section>
    <x-section title="Paginator Variations" new description="paginator names a look now, and the same name styles both the numbered mode and simple-pagination. A dotted value is still treated as a view path; anything else throws.">
        <x-code language="blade" :contents="$paginators" />
        <x-table class="mt-4" :headers="[
            ['index' => 'variant', 'label' => 'Variant'],
            ['index' => 'numbered', 'label' => 'Numbered'],
            ['index' => 'simple', 'label' => 'simple-pagination'],
        ]" :rows="[
            ['variant' => 'simple', 'numbered' => 'Rail with a floating pill, chevrons outside it', 'simple' => 'Two tinted rounded-full buttons'],
            ['variant' => 'minimal', 'numbered' => 'No surfaces at all, current page ruled underneath', 'simple' => 'Two underline-on-hover text links'],
            ['variant' => 'compact', 'numbered' => 'One bordered shell holding the page indicator', 'simple' => 'The same shell, page number only'],
        ]" />
    </x-section>
    <x-section title="Simple Pagination" new description="simple-pagination now implies paginate. An explicit :paginate=&quot;false&quot; still wins, and passing both is merely redundant.">
        <x-code language="blade" :contents="$simplePagination" />
    </x-section>
    <x-section title="Persistent" new description="Scrolls back to the table after paginating. Inside Livewire that is a scrollIntoView; outside, every link is a full page load, so the fragment does the work.">
        <x-code language="blade" :contents="$persistent" />
        <x-table class="mt-4" :headers="[
            ['index' => 'value', 'label' => 'Value'],
            ['index' => 'anchor', 'label' => 'Anchor'],
        ]" :rows="[
            ['value' => 'false', 'anchor' => 'Nothing'],
            ['value' => 'persistent', 'anchor' => 'The table itself'],
            ['value' => 'persistent=\'users\'', 'anchor' => 'The given element'],
        ]" />
        <x-warning class="mt-4">
            An empty string is rejected: it would render <x-block>href="...#"</x-block>, which scrolls to the top, and
            the failure would be silent.
        </x-warning>
    </x-section>
    <x-section title="Selected Event" new description="select fires from the row checkbox with the full row, and never fired for select all. selected carries the whole selection and covers both paths.">
        <x-code language="blade" :contents="$selected" />
        <x-warning class="mt-4">
            It comes from a <x-block>$watch</x-block>, which also picks up changes pushed from the server into the
            entangled property. Inside Livewire <x-block>selected</x-block> can therefore fire on a re-render and not
            only on a click.
        </x-warning>
    </x-section>
    <x-section title="Global Defaults" new description="Four props that were repeated on every table can now be set once. Each is a default, not a lock: an explicit value always wins, including turning one back off.">
        <x-code language="php" :contents="$globalDefaults" />
        <x-code class="mt-4" language="blade" :contents="$globalDefaultsOff" />
    </x-section>
    <x-section title="Skeleton" new description="A structural placeholder shaped like the table itself. The real header labels stay legible; only the unknown becomes a bar.">
        <x-preview language="blade" :contents="$skeleton" :background="false">
            <x-table skeleton="4" :headers="[
                ['index' => 'id', 'label' => '#'],
                ['index' => 'name', 'label' => 'Name'],
                ['index' => 'email', 'label' => 'E-mail'],
            ]" />
        </x-preview>
        <p class="mt-4">It belongs in the <x-block>placeholder()</x-block> of a <x-block>#[Lazy]</x-block> component:</p>
        <x-code class="mt-4" language="php" :contents="$skeletonLazy" />
        <x-warning class="mt-4">
            Livewire skips <x-block>mount()</x-block> when rendering a placeholder but does hand over the class-level
            property defaults, so headers declared as a class default survive and the skeleton draws the real column
            count. Headers assigned inside <x-block>mount()</x-block> do not, and it falls back to four generic columns.
        </x-warning>
    </x-section>
</x-layout>
