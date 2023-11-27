<x-layout>
    <x-slot:title>
        Select
    </x-slot:title>
    <x-slot:description>
        Varieties of select components.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :personalization="$personalizationNative" component="select.native" />
        <livewire:documentation.personalization :personalization="$personalizationStyled" component="select.styled" />
    </x-slot:personalization>
    <x-section>
        <x-preview title="Basic Usage"
                   anchor="native-basic-usage"
                   language="blade"
                   :contents="$nativeBasic">
            <x-select.native :options="[1,2,3]"/>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Label & Hint"
                   anchor="native-label-hint"
                   language="blade"
                   :contents="$nativeLabelHint">
            <x-select.native label="Select One Option" hint="You can choose 1, 2 or 3" :options="[1,2,3]"/>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Multi-dimensional Array"
                   anchor="native-multi-dimensional-array"
                   description="An option to use multi-dimensional array."
                   language="blade"
                   :contents="$nativeAdvanced">
            <x-select.native :options="[
                ['label' => 'TALL', 'value' => 1],
                ['label' => 'LIVT', 'value' => 2],
            ]" select="label:label|value:value"/>
        </x-preview>
    </x-section>
    <x-separator />
    <x-section>
        <x-preview title="Basic Usage"
                   anchor="styled-basic-usage"
                   description="Customized styled select component to interact with Livewire."
                   language="blade"
                   :contents="$styledBasic">
            <livewire:documentation.ui.select.styled/>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Label & Hint"
                   anchor="styled-label-hint"
                   language="blade"
                   :contents="$styledLabelHint">
            <livewire:documentation.ui.select.styled :model="2"/>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Multiple"
                   anchor="styled-multiple"
                   language="blade"
                   :contents="$styledMultiple">
            <livewire:documentation.ui.select.styled :model="3"/>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Multi-dimensional Array"
                   anchor="styled-multi-dimensional-array"
                   description="An option to use multi-dimensional array."
                   language="blade"
                   :contents="$styledMultidimensional">
            <livewire:documentation.ui.select.styled :model="4"/>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Searchable"
                   anchor="styled-searchable"
                   language="blade"
                   :contents="$styledSearchable">
            <livewire:documentation.ui.select.styled :model="5"/>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Slot After"
                   anchor="styled-slot-after"
                   description="An option to interact with the search term"
                   language="blade"
                   :contents="$styledSlot">
            <livewire:documentation.ui.select.styled :model="6"/>
        </x-preview>
    </x-section>
    <x-separator />
    <x-section>
        <x-preview title="Basic Usage"
                   anchor="styled-api-basic-usage"
                   description="Customized styled select component to interact with search through API."
                   language="blade"
                   :contents="$searchable">
            <livewire:documentation.ui.select.searchable/>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Label & Hint"
                   anchor="styled-api-label-hint"
                   language="blade"
                   :contents="$searchableLabelHint">
            <livewire:documentation.ui.select.searchable :model="2"/>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Multiple"
                   anchor="styled-api-multiple"
                   language="blade"
                   :contents="$searchableMultiple">
            <livewire:documentation.ui.select.searchable :model="3"/>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Advanced Usage"
                   anchor="styled-api-advanced-usage"
                   language="blade"
                   :contents="$searchableAdvanced">
            <livewire:documentation.ui.select.searchable :model="4"/>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Slot After"
                   anchor="styled-api-slot-after"
                   description="An option to interact with the search term"
                   language="blade"
                   :contents="$searchableSlot">
            <livewire:documentation.ui.select.searchable :model="5"/>
        </x-preview>
    </x-section>
    <x-slot:navigation>
        <x-slot:back>
            <x-navigation.link href="{{ route('documentation.ui.modal') }}" text="Modal" back />
        </x-slot:back>
        <x-slot:next>
            <x-navigation.link href="{{ route('documentation.ui.slide') }}" text="Slide" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
