<x-layout>
    <x-slot:title>
        Banner
    </x-slot:title>
    <x-slot:description>
        Banner component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="banner" />
    </x-slot:personalization>
    <x-section title="Concept" anchor="static-concept" :copy="false">
        <p>
            <u>Version 1.1.0</u> of TallStackUI introduces a new component: Banner. This component
            has two approaches of use: static use for displaying fixed or random messages or Livewire
            integration for displaying messages from the backend to frontend. <b>An example of the banner
            component is the banner at the top of the TallStackUI documentation!</b>
        </p>
    </x-section>
    <x-section title="Usage" anchor="static-usage" :copy="false">
        <p>To use the component you must add it to your application's layout, within the body tag, but above anything else:</p>
        <x-code language="blade" :contents="$introduction" />
    </x-section>
    <x-section title="Messages" anchor="static-messages" :copy="false">
        <x-code language="blade" :contents="$texts" />
        <x-warning>
            You can take advantage of collections to get an array of messages from the database.
        </x-warning>
    </x-section>
    <x-section title="Left Slot" anchor="static-left-slot" :copy="false">
        <x-code language="blade" :contents="$slot" />
    </x-section>
    <x-section title="Close Option" anchor="static-close-option" :copy="false">
        <x-code language="blade" :contents="$close" />
    </x-section>
    <x-section title="Animations" anchor="static-animations" :copy="false">
        <x-code language="blade" :contents="$animated" />
    </x-section>
    <x-section title="Date Limit" anchor="static-date-limit" description="An option to control the final date to display the banner." :copy="false">
        <x-code language="blade" :contents="$dates" />
    </x-section>
    <x-section title="Size Variations" anchor="static-size-variations" :copy="false">
        <x-code language="blade" :contents="$sizes" />
    </x-section>
    <x-section title="Color Variations & Light Option" anchor="static-color-variations-light-option" :copy="false">
        <x-code language="blade" :contents="$colors" />
    </x-section>
    <x-separator text="Livewire Integration" />
    <x-section title="Concept" anchor="livewire-integration-concept" :copy="false">
        <p>
            Unlike the static format, <u>the use of the banner with Livewire integration does
            not have any configurable options in the layout.</u> All available options must be configured
            when launching a banner, so in the layout the banner must be added as follows:
        </p>
        <x-code language="blade" :contents="$livewire" />
    </x-section>
    <x-section title="Usage" anchor="livewire-integration-usage" :copy="false">
        1. Use the Interactions trait in your Livewire component.
        <x-code language="php" :contents="$trait"/>
        2. Dispatch the Banner from a method.
        <x-code language="php" :contents="$dispatch"/>
        <x-warning text="This is an example. You can't dispatch all at the same time." />
    </x-section>
    <x-section title="Available Options" anchor="livewire-integration-available-options" :copy="false">
        <x-code language="php" :contents="$options"/>
    </x-section>
    <x-slot:navigation>
        <x-slot:back>
            <x-layout.footer-navigation href="{{ route('documentation.ui.banner') }}" text="Badge" back />
        </x-slot:back>
        <x-slot:next>
            <x-layout.footer-navigation href="{{ route('documentation.ui.button') }}" text="Button" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
