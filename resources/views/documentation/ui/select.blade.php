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
        <x-preview title="Native HTML Select"
                   language="blade"
                   :contents="$nativeBasic">
            <x-select.native :options="[1,2,3]"/>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Label & Hint"
                   language="blade"
                   :contents="$nativeLabelHint">
            <x-select.native label="Select One Option" hint="You can choose 1, 2 or 3" :options="[1,2,3]"/>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Multi-dimensional Array"
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
        <x-preview title="Livewire Styled Select"
                   description="Customized select component to interact with Livewire."
                   language="blade"
                   :contents="$styledBasic">
            <livewire:documentation.ui.select.styled/>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Label & Hint"
                   language="blade"
                   :contents="$styledLabelHint">
            <livewire:documentation.ui.select.styled :model="2"/>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Multiple"
                   language="blade"
                   :contents="$styledMultiple">
            <livewire:documentation.ui.select.styled :model="3"/>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Multi-dimensional Array"
                   description="An option to use multi-dimensional array."
                   language="blade"
                   :contents="$styledMultidimensional">
            <livewire:documentation.ui.select.styled :model="4"/>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Searchable"
                   language="blade"
                   :contents="$styledSearchable">
            <livewire:documentation.ui.select.styled :model="5"/>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Slot After"
                   description="An option to interact with the search term"
                   language="blade"
                   :contents="$styledSlot">
            <livewire:documentation.ui.select.styled :model="6"/>
        </x-preview>
    </x-section>
    <x-separator />
    <x-section>
        <x-preview title="Livewire Searchable Select"
                   description="Customized searchable select component to interact with search through API."
                   language="blade"
                   :contents="$searchable">
            <livewire:documentation.ui.select.searchable/>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Label & Hint"
                   language="blade"
                   :contents="$searchableLabelHint">
            <livewire:documentation.ui.select.searchable :model="2"/>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Multiple"
                   language="blade"
                   :contents="$searchableMultiple">
            <livewire:documentation.ui.select.searchable :model="3"/>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Advanced Usage"
                   language="blade"
                   :contents="$searchableAdvanced">
            <livewire:documentation.ui.select.searchable :model="4"/>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Slot After"
                   description="An option to interact with the search term"
                   language="blade"
                   :contents="$searchableSlot">
            <livewire:documentation.ui.select.searchable :model="5"/>
        </x-preview>
    </x-section>
</x-layout>
