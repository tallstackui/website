<x-layout>
    <x-slot:title>
        Errors
    </x-slot:title>
    <x-slot:description>
        Errors component to display Livewire validation errors.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="errors" />
    </x-slot:personalization>
    <x-section>
        <x-preview title="Basic Usage"
                   language="blade"
                   :contents="$basic">
            <livewire:documentation.ui.errors/>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Filtering Properties"
                   description="An option to show validation errors for specific properties."
                   language="blade"
                   :contents="$specific">
            <livewire:documentation.ui.errors :only="['name']"/>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Title Customization"
                   language="blade"
                   :contents="$customized">
            <livewire:documentation.ui.errors title="Ops! There are :count validation errors:"/>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Color Variations"
                   language="blade"
                   :contents="$colors">
            <div class="space-y-2">
                <livewire:documentation.ui.errors />
                <livewire:documentation.ui.errors color="primary" />
                <livewire:documentation.ui.errors color="secondary" />
                <livewire:documentation.ui.errors color="slate" />
                <livewire:documentation.ui.errors color="gray" />
                <livewire:documentation.ui.errors color="zinc" />
                <livewire:documentation.ui.errors color="neutral" />
                <livewire:documentation.ui.errors color="stone" />
                <livewire:documentation.ui.errors color="orange" />
                <livewire:documentation.ui.errors color="amber" />
                <livewire:documentation.ui.errors color="yellow" />
                <livewire:documentation.ui.errors color="lime" />
                <livewire:documentation.ui.errors color="green" />
                <livewire:documentation.ui.errors color="emerald" />
                <livewire:documentation.ui.errors color="teal" />
                <livewire:documentation.ui.errors color="cyan" />
                <livewire:documentation.ui.errors color="sky" />
                <livewire:documentation.ui.errors color="blue" />
                <livewire:documentation.ui.errors color="indigo" />
                <livewire:documentation.ui.errors color="violet" />
                <livewire:documentation.ui.errors color="purple" />
                <livewire:documentation.ui.errors color="fuchsia" />
                <livewire:documentation.ui.errors color="pink" />
                <livewire:documentation.ui.errors color="rose" />
                <livewire:documentation.ui.errors color="black" />
                <livewire:documentation.ui.errors color="white" />
            </div>
        </x-preview>
    </x-section>
    <x-slot:navigation>
        <x-slot:back>
            <x-navigation.link href="{{ route('documentation.ui.dropdown') }}" text="Dropdown" back />
        </x-slot:back>
        <x-slot:next>
            <x-navigation.link href="{{ route('documentation.ui.icon') }}" text="Icon" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
