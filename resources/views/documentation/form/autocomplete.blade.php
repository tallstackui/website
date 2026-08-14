@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content ai="form/autocomplete">
    <x-slot:title>AutoComplete</x-slot>
    <x-slot:description>
        Form auto-complete component.
    </x-slot>
    <x-slot:customization>
        <livewire:customization
            :$customization
            component="Form\Autocomplete"
            title="Form Auto Complete"
        />
    </x-slot>
    <x-section title="Basic Usage">
        <div class="space-y-4">
            <x-preview language="blade" :contents="$basic">
                <x-autocomplete
                    :items="[
                        ['value' => 'São Paulo'],
                        ['value' => 'Rio de Janeiro'],
                        ['value' => 'Belo Horizonte'],
                        ['value' => 'Curitiba'],
                        ['value' => 'Porto Alegre'],
                    ]"
                />
            </x-preview>
        </div>
    </x-section>
    <x-section title="Label & Hint">
        <x-preview language="blade" :contents="$labelHint">
            <x-autocomplete
                label="City"
                hint="Start typing to filter the list"
                placeholder="Choose a city"
                :items="[
                    ['value' => 'São Paulo'],
                    ['value' => 'Rio de Janeiro'],
                    ['value' => 'Belo Horizonte'],
                ]"
            />
        </x-preview>
    </x-section>
    <x-section title="Description">
        <x-preview language="blade" :contents="$description">
            <x-autocomplete
                label="Assignee"
                :items="[
                    ['value' => 'Taylor Otwell', 'description' => 'Creator of Laravel'],
                    ['value' => 'Nuno Maduro',   'description' => 'Creator of PestPHP'],
                    ['value' => 'Jess Archer',   'description' => 'Creator of Laravel Prompts'],
                ]"
            />
        </x-preview>
    </x-section>
    <x-section title="Image">
        <x-preview language="blade" :contents="$image">
            <x-autocomplete
                label="Assignee"
                :items="[
                    [
                        'value' => 'Taylor Otwell',
                        'description' => 'Creator of Laravel',
                        'image' => 'https://unavatar.io/github/taylorotwell',
                    ],
                    [
                        'value' => 'Nuno Maduro',
                        'description' => 'Creator of PestPHP',
                        'image' => 'https://unavatar.io/github/nunomaduro',
                    ],
                    [
                        'value' => 'Jess Archer',
                        'description' => 'Creator of Laravel Prompts',
                        'image' => 'https://unavatar.io/github/jessarcher',
                    ],
                ]"
            />
        </x-preview>
    </x-section>
    <x-section
        title="Metadata"
        description="An option to pass special or additional values."
    >
        <x-code language="php" :contents="$metadata" />
        <x-code class="mt-4" language="blade" :contents="$metadataUsage" />
        <p class="mt-4">
            Works identically for local items and remote results, since both go
            through the same normalization step.
        </p>
    </x-section>
    <x-section
        title="Field Mapping"
        description="An option to remap the item keys when they do not match the expected structure."
    >
        <div class="space-y-4">
            <p>
                When the items — local or remote — name their fields
                differently, the
                <x-block>select</x-block>
                attribute remaps them instead of forcing a reshape at the
                source. Any part left out falls back to the key of the same
                name, and
                <x-block>disabled</x-block>
                is always read from
                <x-block>disabled</x-block>
                .
            </p>
            <x-code language="blade" :contents="$fieldMapping" disable-copy />
            <p>
                Optionally, you can set the mapping globally through the
                TallStackUI
                <x-refer doc="configuration">configuration file</x-refer>
            </p>
        </div>
    </x-section>
    <x-section
        title="Disabled Items"
        description="An option for passing custom or additional values."
    >
        <x-preview language="blade" :contents="$disabledItems">
            <x-autocomplete
                label="Status"
                :items="[
                    ['value' => 'Pending'],
                    ['value' => 'Approved'],
                    ['value' => 'Rejected', 'disabled' => true],
                ]"
            />
        </x-preview>
    </x-section>
    <x-section title="Clearable">
        <x-preview language="blade" :contents="$clearable">
            <x-autocomplete
                label="City"
                clearable
                :items="[
                    ['value' => 'São Paulo'],
                    ['value' => 'Rio de Janeiro'],
                    ['value' => 'Belo Horizonte'],
                ]"
            />
        </x-preview>
    </x-section>
    <x-section title="Prefix & Suffix">
        <x-preview language="blade" :contents="$prefixSuffix">
            <x-autocomplete
                label="IA"
                prefix="www"
                suffix=".com"
                :items="[
                    ['value' => 'claude'],
                    ['value' => 'chatgpt'],
                    ['value' => 'gemini.google'],
                ]"
            />
        </x-preview>
    </x-section>
    <x-section
        title="Lazy"
        description="An option to set the minimum number of characters for the search."
    >
        <div class="space-y-4">
            <x-preview language="blade" :contents="$lazy">
                <x-autocomplete
                    label="City"
                    lazy="2"
                    :items="[
                        ['value' => 'São Paulo'],
                        ['value' => 'Rio de Janeiro'],
                        ['value' => 'Belo Horizonte'],
                        ['value' => 'Curitiba'],
                        ['value' => 'Porto Alegre'],
                        ['value' => 'Salvador'],
                        ['value' => 'Recife'],
                        ['value' => 'Fortaleza'],
                    ]"
                />
            </x-preview>
        </div>
    </x-section>
    <x-section title="Strict Mode">
        <div class="space-y-4">
            <p>
                Without strict,
                <x-block>wire:model</x-block>
                accepts any typed value. With
                <x-block>strict</x-block>
                , the binding updates only after the user selects an item from
                the dropdown. If the current query does not match and the user
                leaves the field or presses Esc, the previous selection is
                restored. The field clears if there is no previous selection.
            </p>
            <x-preview language="blade" :contents="$strict">
                <x-autocomplete
                    label="Status"
                    strict
                    :items="[
                        ['value' => 'Pending'],
                        ['value' => 'Approved'],
                        ['value' => 'Rejected'],
                    ]"
                />
            </x-preview>
        </div>
    </x-section>
    <x-section title="Remote Source" anchor="remote-source">
        <div class="space-y-4">
            <p>
                Similar to the
                <x-block>select.styled</x-block>
                , the autocomplete can fetch items from a remote source:
            </p>
            <x-code language="blade" :contents="$requestString" disable-copy />
            <p>
                The example below queries the same endpoint used by the
                <x-refer :doc="['form', 'select']">styled select</x-refer>
                . It returns the user name under
                <x-block>label</x-block>
                , so
                <x-block>select</x-block>
                points the autocomplete
                <x-block>value</x-block>
                at it, while
                <x-block>description</x-block>
                and
                <x-block>image</x-block>
                already match:
            </p>
            <x-preview language="blade" :contents="$requestLive">
                <x-autocomplete
                    label="User"
                    placeholder="Type a user name..."
                    :request="route('api.users')"
                    select="value:label"
                    clearable
                />
            </x-preview>
            <x-code
                language="php"
                :contents="$requestLiveEndpoint"
                disable-copy
            />
            <p>
                Like
                <x-block>select.styled</x-block>
                , this component accepts a request array for custom requests.
                Set
                <x-block>url</x-block>
                , choose get or post as the
                <x-block>method</x-block>
                , and add
                <x-block>params</x-block>
                . The component hydrates params before each request to keep
                Livewire properties current.
            </p>
            <x-code language="blade" :contents="$requestArray" disable-copy />
            <p>
                Each item returned by the endpoint must match the
                <x-block>:items</x-block>
                structure. The
                <x-block>value</x-block>
                field is required, while
                <x-block>description</x-block>
                ,
                <x-block>image</x-block>
                , and
                <x-block>disabled</x-block>
                are optional. Example:
            </p>
            <x-code
                language="php"
                :contents="$requestResponseShape"
                disable-copy
            />
            <x-warning>
                The
                <x-block>items</x-block>
                and
                <x-block>request</x-block>
                attributes are mutually exclusive and cannot be defined at the
                same time.
            </x-warning>
        </div>
    </x-section>
    <x-section title="Readonly & Disabled">
        <x-preview language="blade" :contents="$readonlyDisabled">
            <div class="space-y-2">
                <x-autocomplete
                    label="Readonly"
                    value="São Paulo"
                    readonly
                    :items="[
                        ['value' => 'São Paulo'],
                        ['value' => 'Rio de Janeiro'],
                    ]"
                />
                <x-autocomplete
                    label="Disabled"
                    value="São Paulo"
                    disabled
                    :items="[
                        ['value' => 'São Paulo'],
                        ['value' => 'Rio de Janeiro'],
                    ]"
                />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Placeholders" disable-copy>
        <x-code language="blade" :contents="$placeholders" disable-copy />
    </x-section>
    <x-section
        title="Slot After"
        description="An option for dealing with an empty search result and doing something with the searched value."
    >
        <x-preview language="blade" :contents="$slotAfter">
            <x-autocomplete
                label="City"
                hint="Try searching for a non-existent value"
                :items="[
                    ['value' => 'São Paulo'],
                    ['value' => 'Rio de Janeiro'],
                ]"
            >
                <x-slot:after>
                    <div class="my-2 flex items-center justify-center px-2">
                        <x-button
                            block
                            x-on:click="$tsui.interaction('dialog').success('Done!', `Term: ${search}`).send()"
                        >
                            <span
                                x-html="`Create city <b>${search}</b>`"
                            ></span>
                        </x-button>
                    </div>
                </x-slot>
            </x-autocomplete>
        </x-preview>
    </x-section>
    <x-section title="Events">
        <div class="space-y-4">
            <x-preview language="blade" :contents="$events">
                <x-autocomplete
                    label="User"
                    :items="[
                        ['value' => 'Alice', 'description' => 'admin'],
                        ['value' => 'Bob',   'description' => 'editor'],
                    ]"
                    x-on:select="alert(`Selected: ${$event.detail.item.value}`)"
                    x-on:clear="alert('Cleared')"
                    x-on:open="console.log('opened')"
                    x-on:close="console.log('closed')"
                />
            </x-preview>
            <x-table
                :headers="[
                    ['index' => 'event', 'label' => 'Event'],
                    ['index' => 'detail', 'label' => 'Detail'],
                    ['index' => 'fired', 'label' => 'Fired when'],
                ]"
                :rows="[
                    ['event' => 'select', 'detail' => '{ item }', 'fired' => 'An item is picked'],
                    ['event' => 'clear', 'detail' => '—', 'fired' => 'The value is cleared'],
                    ['event' => 'open', 'detail' => '—', 'fired' => 'The dropdown opens'],
                    ['event' => 'close', 'detail' => '—', 'fired' => 'The dropdown closes'],
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
</x-layout>
