@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content ai="form/autocomplete">
    <x-slot:title>
        AutoComplete
    </x-slot:title>
    <x-slot:description>
        Form auto-complete component.
    </x-slot:description>
    <x-slot:customization>
        <livewire:customization :$customization component="Form\Autocomplete" title="Form Auto Complete" />
    </x-slot:customization>
    <x-section title="Basic Usage">
        <div class="space-y-4">
            <p>
                Provide a list of items via the <x-block>items</x-block> attribute. Each item must have a
                <x-block>value</x-block> key, which is both the visible text and the value bound to
                <x-block>wire:model</x-block>. Filtering is case-insensitive and runs fully client-side.
            </p>
            <x-preview language="blade" :contents="$basic">
                <x-autocomplete :items="[
                    ['value' => 'São Paulo'],
                    ['value' => 'Rio de Janeiro'],
                    ['value' => 'Belo Horizonte'],
                    ['value' => 'Curitiba'],
                    ['value' => 'Porto Alegre'],
                ]" />
            </x-preview>
        </div>
    </x-section>
    <x-section title="Label & Hint">
        <x-preview language="blade" :contents="$labelHint">
            <x-autocomplete label="City"
                            hint="Start typing to filter the list"
                            placeholder="Choose a city"
                            :items="[
                                ['value' => 'São Paulo'],
                                ['value' => 'Rio de Janeiro'],
                                ['value' => 'Belo Horizonte'],
                            ]" />
        </x-preview>
    </x-section>
    <x-section title="Description">
        <x-preview language="blade" :contents="$description">
            <x-autocomplete label="Assignee" :items="[
                ['value' => 'Taylor Otwell', 'description' => 'Creator of Laravel'],
                ['value' => 'Nuno Maduro',   'description' => 'Creator of PestPHP'],
                ['value' => 'Jess Archer',   'description' => 'Creator of Laravel Prompts'],
            ]" />
        </x-preview>
    </x-section>
    <x-section title="Image">
        <x-preview language="blade" :contents="$image">
            <x-autocomplete label="Assignee" :items="[
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
            ]" />
        </x-preview>
    </x-section>
    <x-section title="Metadata" description="An option to pass special or additional values.">
        <x-code language="php" :contents="$metadata" />
        <x-code class="mt-4" language="blade" :contents="$metadataUsage" />
        <p class="mt-4">Works identically for local items and remote results, since both go through the same normalization step.</p>
        <p  class="mt-4">What it does <b>not</b> do:</p>
        <ul class="mt-2 list-inside list-disc">
            <li>it is not matched by the search filter, only <x-block>value</x-block> and <x-block>description</x-block> are;</li>
            <li>it is not rendered in the dropdown row;</li>
            <li>it is not sent to <x-block>wire:model</x-block>, which still receives <x-block>value</x-block>.</li>
        </ul>
    </x-section>
    <x-section title="Disabled Items" description="An option to dim a row and block its selection.">
        <x-preview language="blade" :contents="$disabledItems">
            <x-autocomplete label="Status" :items="[
                ['value' => 'Pending'],
                ['value' => 'Approved'],
                ['value' => 'Rejected', 'disabled' => true],
            ]" />
        </x-preview>
    </x-section>
    <x-section title="Clearable">
        <x-preview language="blade" :contents="$clearable">
            <x-autocomplete label="City" clearable :items="[
                ['value' => 'São Paulo'],
                ['value' => 'Rio de Janeiro'],
                ['value' => 'Belo Horizonte'],
            ]" />
        </x-preview>
    </x-section>
    <x-section title="Prefix & Suffix">
        <x-preview language="blade" :contents="$prefixSuffix">
            <x-autocomplete label="IA"
                            prefix="www"
                            suffix=".com"
                            :items="[
                                ['value' => 'claude'],
                                ['value' => 'chatgpt'],
                                ['value' => 'gemini.google'],
                            ]" />
        </x-preview>
    </x-section>
    <x-section title="Lazy">
        <div class="space-y-4">
            <p>
                The <x-block>lazy</x-block> attribute defines the minimum number of characters the user must
                type before the dropdown is allowed to open. Below the threshold the panel stays closed; once
                the user crosses it, the panel opens normally.
            </p>
            <x-preview language="blade" :contents="$lazy">
                <x-autocomplete label="City" lazy="2" :items="[
                    ['value' => 'São Paulo'],
                    ['value' => 'Rio de Janeiro'],
                    ['value' => 'Belo Horizonte'],
                    ['value' => 'Curitiba'],
                    ['value' => 'Porto Alegre'],
                    ['value' => 'Salvador'],
                    ['value' => 'Recife'],
                    ['value' => 'Fortaleza'],
                ]" />
            </x-preview>
        </div>
    </x-section>
    <x-section title="Strict Mode">
        <div class="space-y-4">
            <p>
                By default, <x-block>wire:model</x-block> reflects whatever the user types, even values that
                don't appear in the list. With <x-block>strict</x-block>, the binding only updates when a row
                is picked from the dropdown. If the user blurs or presses Esc with an unmatched query, the
                input reverts to the last selected value (or empties if nothing was ever picked).
            </p>
            <x-preview language="blade" :contents="$strict">
                <x-autocomplete label="Status" strict :items="[
                    ['value' => 'Pending'],
                    ['value' => 'Approved'],
                    ['value' => 'Rejected'],
                ]" />
            </x-preview>
        </div>
    </x-section>
    <x-section title="Remote Source" anchor="remote-source">
        <div class="space-y-4">
            <p>
                Similar to the <x-block>select.styled</x-block> component, the autocomplete can fetch items from a remote endpoint as the user types.
            </p>
            <x-code language="blade" :contents="$requestString" disable-copy />
            <p>
                For finer control and similar to the <x-block>select.styled</x-block>, you can pass <x-block>request</x-block> as an array containing: the <x-block>url</x-block>
                key; also <x-block>method</x-block> which accepts <x-block>get</x-block> or
                <x-block>post</x-block> and <x-block>params</x-block>, that is are hydrated on every request,
                so reactive Livewire properties placed there stay up to date.
            </p>
            <x-code language="blade" :contents="$requestArray" disable-copy />
            <p>
                The endpoint must return items shaped the same way as <x-block>:items</x-block>,
                <x-block>value</x-block>, optional <x-block>description</x-block>, optional
                <x-block>image</x-block>, optional <x-block>disabled</x-block>. Here is an example of the code:
            </p>
            <x-code language="php" :contents="$requestResponseShape" disable-copy />
            <x-warning>
                The <x-block>items</x-block> and <x-block>request</x-block> attributes are mutually exclusive
                and cannot be defined at the same time.
            </x-warning>
        </div>
    </x-section>
    <x-section title="Lazy with Remote Source">
        <div class="space-y-4">
            <p>
                You can combine <x-block>request</x-block> with <x-block>lazy</x-block> to avoid firing a request on
                every keystroke. The list of options only opens (and the request only goes out) once the query
                crosses the threshold.
            </p>
            <x-code language="blade" :contents="$requestLazy" disable-copy />
            <p>
                You can also control it based on language files, learn more about it by navigating to the <x-refer doc="translation">translation page.</x-refer>
            </p>
        </div>
    </x-section>
    <x-section title="Disabled">
        <x-preview language="blade" :contents="$disabled">
            <x-autocomplete label="City" disabled :items="[
                ['value' => 'São Paulo'],
                ['value' => 'Rio de Janeiro'],
            ]" />
        </x-preview>
    </x-section>
    <x-section title="Placeholders">
        <div class="space-y-4">
            <p>
                You can override the translation strings used inside the component. All available keys are
                <x-block>default</x-block> (input placeholder), <x-block>empty</x-block> (no results message),
                and <x-block>loading</x-block> (remote-source spinner caption).
            </p>
            <x-code language="blade" :contents="$placeholders" disable-copy />
        </div>
    </x-section>
    <x-section title="Slot After" description="An option for dealing with an empty search result and doing something with the searched value.">
        <x-preview language="blade" :contents="$slotAfter">
            <x-autocomplete label="City" hint="Try searching for a non-existent value" :items="[
                ['value' => 'São Paulo'],
                ['value' => 'Rio de Janeiro'],
            ]">
                <x-slot:after>
                    <div class="my-2 flex items-center justify-center px-2">
                        <x-button block x-on:click="$tsui.interaction('dialog').success('Done!', `Term: ${search}`).send()">
                            <span x-html="`Create city <b>${search}</b>`"></span>
                        </x-button>
                    </div>
                </x-slot:after>
            </x-autocomplete>
        </x-preview>
    </x-section>
    <x-section title="Events">
        <div class="space-y-4">
            <x-preview language="blade" :contents="$events">
                <x-autocomplete label="User" :items="[
                    ['value' => 'Alice', 'description' => 'admin'],
                    ['value' => 'Bob',   'description' => 'editor'],
                ]"
                    x-on:select="alert(`Selected: ${$event.detail.item.value}`)"
                    x-on:clear="alert('Cleared')"
                    x-on:open="console.log('opened')"
                    x-on:close="console.log('closed')" />
            </x-preview>
        </div>
    </x-section>
</x-layout>
