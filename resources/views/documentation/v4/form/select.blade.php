@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content :ai="['Select Native' => 'form/select/native', 'Select Styled' => 'form/select/styled']">
    <x-slot:title>
        Select
    </x-slot:title>
    <x-slot:description>
        Select components.
    </x-slot:description>
    <x-slot:customization>
        <livewire:customization :customization="$customizationNative" component="Form\Select\Native" title="Select Native" />
        <livewire:customization :customization="$customizationStyled" component="Form\Select\Styled" title="Select Styled" />
    </x-slot:customization>
    <x-section title="Basic Usage" anchor="native-basic-usage">
        <x-preview language="blade" :contents="$nativeBasic">
            <x-select.native :options="[1,2,3]"/>
        </x-preview>
    </x-section>
    <x-section title="Label & Hint" anchor="native-label-hint">
        <x-preview language="blade" :contents="$nativeLabelHint">
            <x-select.native label="Select One Option" hint="You can choose 1, 2 or 3" :options="[1,2,3]"/>
        </x-preview>
    </x-section>
    <x-section title="Multi-dimensional Array" anchor="native-multi-dimensional-array" description="An option to use multi-dimensional array.">
        <div class="space-y-2">
            <x-preview language="blade" :contents="$nativeAdvanced">
                <x-select.native :options="[
                ['label' => 'TALL', 'value' => 1],
                ['label' => 'LIVT', 'value' => 2],
            ]" />
            </x-preview>
            <p>
                When the value and label do not come from the <x-block>label</x-block> and <x-block>value</x-block>
                positions respectively, you must specify this manually using the <x-block>select</x-block> attribute:
            </p>
            <x-code language="blade" :contents="$nativeAdvancedDifferentIndexes" disable-copy />
        </div>
    </x-section>
    <x-warning>
        This option is also available for the other select components below.
    </x-warning>
    <x-separator text="Styled Select" />
    <x-section title="Basic Usage" anchor="styled-basic-usage" description="Customized styled select component to interact with Livewire.">
        <div class="space-y-4">
            <x-preview language="blade" :contents="$styledBasic">
                <x-select.styled :options="[1,2,3]" />
            </x-preview>
            <p>
                While there are no explicit examples in the documentation, you're free to use multiple <x-block>select.styled</x-block> on the same page,
                and also make options reactive based on other properties using <x-block>wire:model.live</x-block>. If you encounter any misbehavior
                in this regard, try to fully explore options like <x-block>wire:ignore</x-block> or <x-block>wire:replace</x-block>, with <x-block>.self</x-block> variants of the directives.
            </p>
        </div>
    </x-section>
    <x-section title="Label & Hint" anchor="styled-label-hint">
        <x-preview language="blade" :contents="$styledLabelHint">
            <x-select.styled label="Select One Option"
                             hint="You can choose 1, 2 or 3"
                             :options="[1,2,3]" />
        </x-preview>
    </x-section>
    <x-section title="Placeholders" anchor="styled-placeholders">
        <x-preview language="blade" :contents="$styledPlaceholders">
            <x-select.styled :placeholders="[
                                'default' => 'This is the default placeholder',
                                'search' => 'This is the search placeholder',
                                'empty' => 'This is the empty placeholder',
                            ]" searchable :options="[1,2,3]" />
        </x-preview>
    </x-section>
    <x-section title="Required" description="An option to make the select component required." anchor="styled-required">
        <x-preview language="blade" :contents="$styledRequired">
            <x-select.styled :options="[1,2,3]" required />
        </x-preview>
        <x-warning class="mt-4">
            The user will not be able to deselect the selected option after selecting an option.
        </x-warning>
    </x-section>
    <x-section title="Multiple" anchor="styled-multiple">
        <x-preview language="blade" :contents="$styledMultiple">
            <x-select.styled :options="[1,2,3,4,5,6]" multiple />
        </x-preview>
    </x-section>
    <x-section title="Multi-dimensional Array" anchor="styled-multi-dimensional-array" description="An option to use multi-dimensional array.">
        <div class="space-y-2">
            <x-preview language="blade" :contents="$styledMultidimensional">
                <x-select.styled :options="[
                ['label' => 'TALL', 'value' => 1],
                ['label' => 'LIVT', 'value' => 2],
            ]"  />
            </x-preview>
            <p>
                When the value and label do not come from the <x-block>label</x-block> and <x-block>value</x-block>
                positions respectively, you must specify this manually using the <x-block>select</x-block> attribute:
            </p>
            <x-code language="blade" :contents="$styledMultidimensionalDifferentIndexes" disable-copy />
        </div>
    </x-section>
    <x-section title="Disable Options" description="An option to disable specific options." anchor="styled-disable-options">
        <x-preview language="blade" :contents="$styledDisabled">
            <x-select.styled :options="[
                ['label' => 'TALL', 'value' => 1, 'disabled' => true],
                ['label' => 'LIVT', 'value' => 2],
            ]"  />
        </x-preview>
    </x-section>
    <x-section title="Grouped Options" anchor="styled-grouped-options">
        <div class="space-y-4">
            <p>
                Options can be organized into groups. When an option's <x-block>value</x-block> is an array of sub-options,
                the component automatically detects grouped mode. Group headers display the label, optional description,
                and optional image, but only the nested items within groups are selectable.
            </p>
            <x-preview language="blade" :contents="$styledGrouped">
                <x-select.styled :options="[
                    [
                        'label' => 'Brazil',
                        'description' => 'South America',
                        'value' => [
                            ['label' => 'São Paulo', 'value' => 4],
                            ['label' => 'Rio de Janeiro', 'value' => 5],
                        ]
                    ],
                    [
                        'label' => 'United States',
                        'description' => 'North America',
                        'value' => [
                            ['label' => 'New York', 'value' => 7],
                            ['label' => 'Los Angeles', 'value' => 8],
                        ]
                    ],
                ]" select="label:label|value:value" />
            </x-preview>
            <p>
                Search filters items within groups and hides groups with no matching items. Grouped options
                work with both single and multiple selection modes.
            </p>
        </div>
    </x-section>
    <x-section title="Limit Selection" description="An option to limit the number of selections." anchor="styled-limit-selection">
        <x-preview language="blade" :contents="$styledLimit">
            <x-select.styled :limit="2" :options="[
                ['label' => 'TALL', 'value' => 1],
                ['label' => 'LIVT', 'value' => 2],
                ['label' => 'Blade', 'value' => 3],
                ['label' => 'API', 'value' => 4],
            ]"  multiple />
        </x-preview>
    </x-section>
    <x-section title="Image Preview" anchor="styled-image-preview">
        <div class="space-y-4">
            <p>
                The styled select allows you to display an image next to the option label. To do this,
                the options simply have an index called <x-block>image</x-block> with the image URL.
            </p>
            <x-preview language="blade" :contents="$styledImage">
                <x-select.styled :options="[
                ['label' => 'Taylor Otwell', 'value' => 1, 'image' => 'https://unavatar.io/github/taylorotwell'],
                ['label' => 'Nuno Maduro', 'value' => 2, 'image' => 'https://unavatar.io/github/nunomaduro'],
                ['label' => 'Jess Archer', 'value' => 3, 'image' => 'https://unavatar.io/github/jessarcher'],
            ]"  />
            </x-preview>
            <p>
                You can also set a different index to the <x-block>image</x-block> via the <x-block>select</x-block> attribute.
            </p>
            <x-code language="blade" :contents="$styledImageDifferentIndex" />
        </div>
    </x-section>
    <x-section title="Description" anchor="styled-description">
        <div class="space-y-4">
            <p>
                You can also set a description for each option. To do this, the options simply have an index called <x-block>description</x-block>.
            </p>
            <x-preview language="blade" :contents="$styledDescription">
                <x-select.styled :options="[
                ['label' => 'Taylor Otwell', 'value' => 1, 'description' => 'Taylor Otwell is the creator of Laravel'],
                ['label' => 'Nuno Maduro', 'value' => 2, 'description' => 'Nuno Maduro is the creator of PestPHP'],
                ['label' => 'Jess Archer', 'value' => 3, 'description' => 'Jess Archer is the creator of Laravel Prompts'],
            ]"  />
            </x-preview>
            <p>
                You can also set a different index to the <x-block>description</x-block> via the <x-block>select</x-block> attribute:
            </p>
            <x-code language="blade" :contents="$styledDescriptionDifferentIndex" />
        </div>
    </x-section>
    <x-section title="Searchable" anchor="styled-searchable">
        <x-preview language="blade" :contents="$styledSearchable">
            <x-select.styled :options="[
                ['label' => 'TALL', 'value' => 1],
                ['label' => 'LIVT', 'value' => 2],
            ]"  searchable />
        </x-preview>
    </x-section>
    <x-section title="Lazy Load" anchor="styled-lazy-load">
        <div class="space-y-4">
            <p>
                Lazy loading is a way to slowly load options as you scroll down the floating element that displays the available options.
                <u>While this is extremely useful for delaying the loading of large amounts of options</u>, there is two major caveat:
            </p>
            <ul class="list-inside list-decimal">
                <li>The <x-block>searchable</x-block> attribute will not work to search for options that have not yet been loaded.</li>
                <li>The <x-block>lazy</x-block> attribute expects to receive values greater than or equal to 10.</li>
            </ul>
            <x-preview language="blade" :contents="$styledLazy">
                <x-select.styled :options="[
                    ['label' => 'PHP', 'value' => 1],
                    ['label' => 'JavaScript', 'value' => 2],
                    ['label' => 'Python', 'value' => 3],
                    ['label' => 'Java', 'value' => 4],
                    ['label' => 'C#', 'value' => 5],
                    ['label' => 'C++', 'value' => 6],
                    ['label' => 'Ruby', 'value' => 7],
                    ['label' => 'Swift', 'value' => 8],
                    ['label' => 'Kotlin', 'value' => 9],
                    ['label' => 'Go', 'value' => 10],
                    ['label' => 'TypeScript', 'value' => 11],
                    ['label' => 'C', 'value' => 12],
                    ['label' => 'Objective-C', 'value' => 13],
                    ['label' => 'R', 'value' => 14],
                    ['label' => 'Perl', 'value' => 15],
                    ['label' => 'Scala', 'value' => 16],
                    ['label' => 'Haskell', 'value' => 17],
                    ['label' => 'Lua', 'value' => 18],
                    ['label' => 'Rust', 'value' => 19],
                    ['label' => 'Dart', 'value' => 20],
                    ['label' => 'Assembly', 'value' => 21],
                    ['label' => 'SQL', 'value' => 22],
                    ['label' => 'NoSQL', 'value' => 23],
                    ['label' => 'HTML', 'value' => 24],
                    ['label' => 'CSS', 'value' => 25],
                    ['label' => 'Bash', 'value' => 26],
                    ['label' => 'PowerShell', 'value' => 27],
                    ['label' => 'Groovy', 'value' => 28],
                    ['label' => 'Visual Basic', 'value' => 29],
                    ['label' => 'Fortran', 'value' => 30],
                ]" lazy="10" />
            </x-preview>
        </div>
    </x-section>
    <x-section title="Slot After" anchor="styled-slot-after" description="An option to interact with the search term when nothing is found.">
        <x-preview language="blade" :contents="$styledSlot">
            <x-select.styled searchable :options="[1,2,3]">
                <x-slot:after>
                    <div class="mb-2 flex items-center justify-center px-2">
                        <x-button x-on:click="show = false; $tsui.interaction('dialog').success('Done!', `Term: ${search}`).send()">
                            <span x-html="`Create user <b>${search}</b>`"></span>
                        </x-button>
                    </div>
                </x-slot:after>
            </x-select.styled>
        </x-preview>
    </x-section>
    <x-section title="Events" anchor="styled-events">
        <x-preview language="blade" :contents="$styledEvents">
            <x-select.styled :options="[
                ['label' => 'TALL', 'value' => 1],
                ['label' => 'LIVT', 'value' => 2],
            ]"
               x-on:select="alert(`Select: ${JSON.stringify($event.detail.select)}`)"
               x-on:remove="alert(`Remove: ${JSON.stringify($event.detail.select)}`)"
               multiple />
        </x-preview>
    </x-section>
    <x-section title="AlpineJS Helper" description="Helpers to open and close the styled select using AlpineJS." anchor="styled-alpinejs-helper" disable-copy>
        <x-code language="blade" :contents="$styledAlpinejs" disable-copy />
    </x-section>
    {{-- Styled API Select --}}
    <x-separator text="Styled API Select" />
    <x-section title="Concept" anchor="styled-api-concept" disable-copy>
        The styled select component allows you to query for values via an API. In this mode, all the options available above
        remain available for use, the difference is that instead of setting the options using the <x-block>options</x-block> parameter, you must
        specify the API URL where the results will come from. For identification purposes, a header called <x-block>X-Tallstack-Ui</x-block> will be added to all requests.
    </x-section>
    <x-section title="Basic Usage" anchor="styled-api-basic-usage">
        <div class="space-y-4">
            <x-preview language="blade" :contents="$styledApi">
                <x-select.styled :request="route('api.users')" />
            </x-preview>
            <p>
                When the value and label do not come from the <x-block>label</x-block> and <x-block>value</x-block>
                positions respectively, you must specify this manually using the <x-block>select</x-block> attribute,
                like mentioned in the multi-dimensional array section. This example do not set the <x-block>select</x-block> attribute
                because the API returns the values in the correct format.
            </p>
        </div>
    </x-section>
    <x-section title="Unfiltered Results" anchor="styled-api-unfiltered-results">
        <div class="space-y-4">
            <p>
                The styled select component filters the API results using internal logic to search for the desired option based on the term entered in the input only in the item's
                <x-block>label</x-block> or  <x-block>description</x-block>. You can disable this behavior to make the filters apply only in the API. In other words, you need to
                ensure that, for example, the value search applies a <x-block>where</x-block> based on the term sent in the search and appended to the query string <x-block>search</x-block>.
            </p>
            <x-preview language="blade" :contents="$styledApiUnfiltered">
                <x-select.styled :request="route('api.users')" unfiltered />
            </x-preview>
            <x-warning>
                This is only available in the styled API select.
            </x-warning>
            <p>
                In this example, the query was builded as follows:
            </p>
            <x-code :contents="$styledApiUnfilteredQuery" />
            <p>
                Which means:
            </p>
            <ul class="list-inside list-decimal">
                <li>When <x-block>search</x-block> is set, then the query will be filtered by the <x-block>name</x-block> column.</li>
                <li>When <x-block>search</x-block> is not set, then the query will return only 10 results.</li>
            </ul>
            <p>
                Optionally, you can set the <x-block>unfiltered</x-block> globally by the TallStackUI <a href="{{ route('documentation', ['v4', 'configuration']) }}" wire:navigate class="underline">configuration file.</a>
            </p>
        </div>
    </x-section>
    <x-section title="Advanced Usage" anchor="styled-api-advanced-usage">
        <div class="space-y-4">
            <p class="mt-4">
                You have the possibility to customize some things related to the request, such as the method used: <x-block>get</x-block> or <x-block>post</x-block>, and also add more <x-block>params</x-block> to the request.
                One of the big advantages of using these advanced options is the <x-block>params</x-block> parameter, because it is hydrated. This means that if you are using this component within the Livewire components and create a variable
                to be used in params , when making any changes to this variable and Livewire hydrates the page, the next time the select is opened to make a new request, params will be updated in the request.
            </p>
            <x-preview language="blade" :contents="$styledApiAdvanced">
                <x-select.styled :request="[
                               'url' => route('api.users'),
                               'method' => 'get',
                               'params' => [
                                   'library' => 'TallStackUI',
                               ],
                           ]" />
            </x-preview>
        </div>
    </x-section>
    <x-section title="Recycle" anchor="styled-api-recycle" disable-copy>
        <p>
            By default, the styled API select clears previous results every time it is reopened. You can use the
            <x-block>recycle</x-block> attribute to preserve the previous results when reopening the select. You can
            also control this globally in the <a href="{{ route('documentation', ['v4', 'configuration']) }}" wire:navigate class="underline">configuration file</a>,
            where the default is <x-block>false</x-block>.
        </p>
    </x-section>
</x-layout>
