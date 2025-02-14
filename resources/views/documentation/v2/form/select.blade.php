@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content>
    <x-slot:title>
        Select
    </x-slot:title>
    <x-slot:description>
        Select components.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:personalization :personalization="$personalizationNative" component="Form\Select\Native" title="Select Native" />
        <livewire:personalization :personalization="$personalizationStyled" component="Form\Select\Styled" title="Select Styled" />
    </x-slot:personalization>
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
    <x-section title="Grouped" anchor="native-grouped">
        <div class="space-y-2">
            <x-preview language="blade" :contents="$nativeGrouped">
                <x-select.native group :options="[
                     [
                         'label' => 'Brazil',
                         'value' => [
                             ['label' => 'São Paulo', 'value' => 4],
                             ['label' => 'Rio de Janeiro', 'value' => 5],
                             ['label' => 'Brasília', 'value' => 6]
                         ]
                     ],
                     [
                         'label' => 'United States',
                         'value' => [
                             ['label' => 'New York', 'value' => 7],
                             ['label' => 'Los Angeles', 'value' => 8],
                             ['label' => 'Chicago', 'value' => 9]
                         ]
                     ],
                ]" />
            </x-preview>
        </div>
    </x-section>
    <x-warning>
        This option is also available for the other select components below.
    </x-warning>
    <x-separator text="Styled Select" />
    <x-section title="Basic Usage" anchor="styled-basic-usage" description="Customized styled select component to interact with Livewire.">
        <x-preview language="blade" :contents="$styledBasic">
            <x-select.styled :options="[1,2,3]" />
        </x-preview>
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
        <x-preview language="blade" :contents="$styledImage">
            <x-select.styled :options="[
                ['label' => 'Taylor Otwell', 'value' => 1, 'image' => 'https://unavatar.io/github/taylorotwell'],
                ['label' => 'Nuno Maduro', 'value' => 2, 'image' => 'https://unavatar.io/github/nunomaduro'],
                ['label' => 'Jess Archer', 'value' => 3, 'image' => 'https://unavatar.io/github/jessarcher'],
            ]"  />
        </x-preview>
    </x-section>
    <x-section title="Description" anchor="styled-description">
        <x-preview language="blade" :contents="$styledDescription">
            <x-select.styled :options="[
                ['label' => 'Taylor Otwell', 'value' => 1, 'description' => 'Taylor Otwell is the creator of Laravel'],
                ['label' => 'Nuno Maduro', 'value' => 2, 'description' => 'Nuno Maduro is the creator of PestPHP'],
                ['label' => 'Jess Archer', 'value' => 3, 'description' => 'Jess Archer is the creator of Laravel Prompts'],
            ]"  />
        </x-preview>
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
                <li>The <x-block>searchable</x-block> attribute, will not work to search for options that have not yet been loaded.</li>
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
    <x-section title="Grouped" anchor="styled-grouped">
        <x-preview language="blade" :contents="$styledGrouped">
            <x-select.styled group :options="[
                [
                    'label' => 'Brazil',
                    'image' => 'https://placehold.co/15x15/cyan/white',
                    'description' => 'Brazil is a country known for being the land of samba.',
                    'value' => [
                         ['label' => 'São Paulo', 'value' => 4, 'image' => 'https://placehold.co/15x15/orange/white'],
                         ['label' => 'Rio de Janeiro', 'value' => 5, 'image' => 'https://placehold.co/15x15/orange/white'],
                         ['label' => 'Brasília', 'value' => 6, 'image' => 'https://placehold.co/15x15/orange/white']
                    ]
                ],
                [
                    'label' => 'United States',
                    'image' => 'https://placehold.co/15x15/purple/white',
                    'description' => 'The United States is a country known for being the land of opportunity.',
                    'value' => [
                        ['label' => 'New York', 'value' => 7, 'image' => 'https://placehold.co/15x15/blue/white'],
                        ['label' => 'Los Angeles', 'value' => 8, 'image' => 'https://placehold.co/15x15/blue/white'],
                        ['label' => 'Chicago', 'value' => 9, 'image' => 'https://placehold.co/15x15/blue/white']
                    ]
                ],
            ]" />
        </x-preview>
    </x-section>
    <x-section title="Slot After" anchor="styled-slot-after" description="An option to interact with the search term when nothing is found.">
        <x-preview language="blade" :contents="$styledSlot">
            <x-select.styled searchable :options="[1,2,3]">
                <x-slot:after>
                    <div class="mb-2 flex items-center justify-center px-2">
                        <x-button x-on:click="show = false; $interaction('dialog').success('Done!', `Term: ${search}`).send()">
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
</x-layout>
