<x-layout>
    <x-slot:title>
        Select
    </x-slot:title>
    <x-slot:description>
        Varieties of select components.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization component="select" />
        <livewire:documentation.personalization component="select.styled" />
        <livewire:documentation.personalization component="select.searchable" />
    </x-slot:personalization>
    <x-section>
        <x-preview title="Native HTML Select"
                   language="blade"
                   :contents="$basic">
            <x-select :options="[1,2,3]"/>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Select, Label & Hint"
                   language="blade"
                   :contents="$basicLabelHint">
            <x-select label="Select One Option" hint="You can choose 1, 2 or 3" :options="[1,2,3]"/>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Select, Multi-dimensional Array"
                   description="An option to use multi-dimensional array."
                   language="blade"
                   :contents="$basicAdvanced">
            <x-select :options="[
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
                   :contents="$styled">
            <livewire:documentation.ui.select.styled/>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Styled Select, Label & Hint"
                   language="blade"
                   :contents="$styledLabelHint">
            <livewire:documentation.ui.select.styled :model="2"/>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Styled Select, Multiple"
                   language="blade"
                   :contents="$styledMultiple">
            <livewire:documentation.ui.select.styled :model="3"/>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Styled Select, Multi-dimensional Array"
                   description="An option to use multi-dimensional array."
                   language="blade"
                   :contents="$styledAdvanced">
            <livewire:documentation.ui.select.styled :model="4"/>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Styled Select, Searchable"
                   language="blade"
                   :contents="$styledSearchable">
            <livewire:documentation.ui.select.styled :model="5"/>
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
        <x-preview title="Searchable Select, Label & Hint"
                   language="blade"
                   :contents="$searchableLabelHint">
            <livewire:documentation.ui.select.searchable :model="2"/>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Searchable Select, Multiple"
                   language="blade"
                   :contents="$searchableMultiple">
            <livewire:documentation.ui.select.searchable :model="3"/>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Searchable Select, Advanced Usage"
                   language="blade"
                   :contents="$searchableAdvanced">
            <livewire:documentation.ui.select.searchable :model="4"/>
        </x-preview>
    </x-section>
</x-layout>
