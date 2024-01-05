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
            <x-select.native label="Select One Option"
                             hint="You can choose 1, 2 or 3"
                             :options="[1,2,3]"
                             invalidate
            />
        </x-preview>
    </x-section>
    <x-warning>
        This option is also available for the other select components below.
    </x-warning>
    <x-separator text="Styled Select" />
    <x-section title="Basic Usage" anchor="styled-basic-usage" description="Customized styled select component to interact with Livewire.">
        <x-preview language="blade" :contents="$styledBasic">
            <livewire:documentation.ui.select.styled/>
        </x-preview>
    </x-section>
    <x-section title="Label & Hint & Placeholder" anchor="styled-label-hint-placeholder">
        <x-preview language="blade" :contents="$styledLabelHintPlaceholder">
            <livewire:documentation.ui.select.styled :model="2"/>
        </x-preview>
    </x-section>
    <x-section title="Multiple" anchor="styled-multiple">
        <x-preview language="blade" :contents="$styledMultiple">
            <livewire:documentation.ui.select.styled :model="3"/>
        </x-preview>
    </x-section>
    <x-section title="Multi-dimensional Array" anchor="styled-multi-dimensional-array" description="An option to use multi-dimensional array.">
        <x-preview language="blade" :contents="$styledMultidimensional">
            <livewire:documentation.ui.select.styled :model="4"/>
        </x-preview>
    </x-section>
    <x-section title="Searchable" anchor="styled-searchable">
        <x-preview language="blade" :contents="$styledSearchable">
            <livewire:documentation.ui.select.styled :model="5"/>
        </x-preview>
    </x-section>
    <x-section title="Slot After" anchor="styled-slot-after" description="An option to interact with the search term">
        <x-preview language="blade" :contents="$styledSlot">
            <livewire:documentation.ui.select.styled :model="6"/>
        </x-preview>
    </x-section>
    <x-separator text="Styled API Select" />
    <x-section title="Basic Usage" anchor="styled-api-basic-usage" description="Customized styled select component to interact with APIs.">
        <x-preview language="blade" :contents="$searchable">
            <livewire:documentation.ui.select.searchable/>
        </x-preview>
    </x-section>
    <x-section title="Label & Hint & Placeholder" anchor="styled-api-label-hint-placeholder">
        <x-preview language="blade" :contents="$searchableLabelHint">
            <livewire:documentation.ui.select.searchable :model="2"/>
        </x-preview>
    </x-section>
    <x-section title="Multiple" anchor="styled-api-multiple">
        <x-preview language="blade" :contents="$searchableMultiple">
            <livewire:documentation.ui.select.searchable :model="3"/>
        </x-preview>
    </x-section>
    <x-section title="Advanced Usage" anchor="styled-api-advanced-usage">
        <x-preview language="blade" :contents="$searchableAdvanced">
            <livewire:documentation.ui.select.searchable :model="4"/>
        </x-preview>
    </x-section>
    <x-section title="Slot After" anchor="styled-api-slot-after" description="An option to interact with the search term">
        <x-preview language="blade" :contents="$searchableSlot">
            <livewire:documentation.ui.select.searchable :model="5"/>
        </x-preview>
    </x-section>
    <x-section title="Filtering Using Eloquent" anchor="styled-api-filtering-using-eloquent" disable-copy>
        <p>
            If you are using the select component to filter records in the database
            through Eloquent, this code may be useful. This is a snippet code that can be applied
            as a route in the <x-block>routes/api.php</x-block> file.
        </p>
    </x-section>
    <x-code :contents="$eloquent" />
    <x-slot:navigation>
        <x-slot:back>
            <x-layout.footer-navigation :href="route('documentation.ui.modal')" text="Modal" back />
        </x-slot:back>
        <x-slot:next>
            <x-layout.footer-navigation :href="route('documentation.ui.slide')" text="Slide" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
