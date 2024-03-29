@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout>
    <x-slot:title>
        Select
    </x-slot:title>
    <x-slot:description>
        Select components.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :personalization="$personalizationNative" component="select.native" />
        <livewire:documentation.personalization :personalization="$personalizationStyled" component="select.styled" />
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
        <x-preview language="blade" :contents="$nativeAdvanced">
            <x-select.native :options="[
                ['label' => 'TALL', 'value' => 1],
                ['label' => 'LIVT', 'value' => 2],
            ]" select="label:label|value:value"/>
        </x-preview>
    </x-section>
    <x-section title="Invalidate" description="An option to not show validation error message." anchor="native-invalidate">
        <x-preview language="blade" :contents="$nativeInvalidate">
            <x-select.native :options="[1,2,3]" invalidate />
        </x-preview>
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
        <x-preview language="blade" :contents="$styledMultidimensional">
            <x-select.styled :options="[
                ['label' => 'TALL', 'value' => 1],
                ['label' => 'LIVT', 'value' => 2],
            ]" select="label:label|value:value" />
        </x-preview>
    </x-section>
    <x-section title="Disable Options" description="An option to disable specific options." anchor="styled-disable-options">
        <x-preview language="blade" :contents="$styledDisabled">
            <x-select.styled :options="[
                ['label' => 'TALL', 'value' => 1, 'disabled' => true],
                ['label' => 'LIVT', 'value' => 2],
            ]" select="label:label|value:value" />
        </x-preview>
    </x-section>
    <x-section title="Limit Selection" description="An option to limit the number of selections." anchor="styled-limit-selection">
        <x-preview language="blade" :contents="$styledLimit">
            <x-select.styled :limit="2" :options="[
                ['label' => 'TALL', 'value' => 1],
                ['label' => 'LIVT', 'value' => 2],
                ['label' => 'Blade', 'value' => 3],
                ['label' => 'API', 'value' => 4],
            ]" select="label:label|value:value" multiple />
        </x-preview>
    </x-section>
    <x-section title="Image Preview" anchor="styled-image-preview">
        <x-preview language="blade" :contents="$styledImage">
            <x-select.styled :options="[
                ['label' => 'Taylor Otwell', 'value' => 1, 'image' => 'https://unavatar.io/github/taylorotwell'],
                ['label' => 'Nuno Maduro', 'value' => 2, 'image' => 'https://unavatar.io/github/nunomaduro'],
                ['label' => 'Jess Archer', 'value' => 3, 'image' => 'https://unavatar.io/github/jessarcher'],
            ]" select="label:label|value:value" />
        </x-preview>
    </x-section>
    <x-section title="Description" anchor="styled-description">
        <x-preview language="blade" :contents="$styledDescription">
            <x-select.styled :options="[
                ['label' => 'Taylor Otwell', 'value' => 1, 'description' => 'Taylor Otwell is the creator of Laravel'],
                ['label' => 'Nuno Maduro', 'value' => 2, 'description' => 'Nuno Maduro is the creator of PestPHP'],
                ['label' => 'Jess Archer', 'value' => 3, 'description' => 'Jess Archer is the creator of Laravel Prompts'],
            ]" select="label:label|value:value" />
        </x-preview>
    </x-section>
    <x-section title="Searchable" anchor="styled-searchable">
        <x-preview language="blade" :contents="$styledSearchable">
            <x-select.styled :options="[
                ['label' => 'TALL', 'value' => 1],
                ['label' => 'LIVT', 'value' => 2],
            ]" select="label:label|value:value" searchable />
        </x-preview>
    </x-section>
    <x-section title="Slot After" anchor="styled-slot-after" description="An option to interact with the search term when nothing is found.">
        <x-preview language="blade" :contents="$styledSlot">
            <x-select.styled searchable :options="[1,2,3]">
                <x-slot:after>
                    <div class="px-2 mb-2 flex justify-center items-center">
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
            ]" select="label:label|value:value"
               x-on:select="alert(`Select: ${JSON.stringify($event.detail.select)}`)"
               x-on:remove="alert(`Remove: ${JSON.stringify($event.detail.select)}`)"
               multiple />
        </x-preview>
    </x-section>
    {{-- Styled API Select --}}
    <x-separator text="Styled API Select" />
    <x-section title="Concept" anchor="styled-api-concept">
        The styled select component allows you to search for values through an API.
        In this mode, all the options available above remain available to be used,
        the difference is that instead of defining the options using the <x-block>options</x-block>
        parameter, you must specify the URL from which the results will come, together
        with the <x-block>select</x-block> parameter, which is mandatory for this mode.
        <x-warning class="mt-4">
            For identification purposes, a header <b>X-Tallstack-Ui</b> is sent in the request.

        </x-warning>
    </x-section>
    <x-section title="Basic Usage" anchor="styled-api-basic-usage" description="Customized styled select component to interact with APIs.">
        <x-preview language="blade" :contents="$styledApi">
            <x-select.styled :request="route('api.users')"
                             select="label:name|value:id" />
        </x-preview>
    </x-section>
    <x-section title="Advanced Usage" anchor="styled-api-advanced-usage">
        <x-preview language="blade" :contents="$styledApiAdvanced">
            <x-select.styled :request="[
                           'url' => route('api.users'),
                           'method' => 'get',
                           'params' => [
                               'library' => 'TallStackUI',
                           ],
                       ]" select="label:name|value:id" />
        </x-preview>
        <p class="mt-4">
            The <x-block>params</x-block> are updated when you make changes. This means that if you are using this
            component within the Livewire components and create a variable to be used in <x-block>params</x-block>, when
            making any changes to this variable and Livewire hydrate the page, the next time the select
            is opened to make a new request, <x-block>params</x-block> will be updated in the request. This is useful
            to allow you to use the <x-block>params</x-block> to interact dynamically with the query of the request.
        </p>
    </x-section>
</x-layout>
