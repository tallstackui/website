<x-layout>
    <x-slot:title>
        Banner
        <x-slot:version>
            v1.1
        </x-slot:version>
    </x-slot:title>
    <x-slot:description>
        Banner component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="banner" />
    </x-slot:personalization>
    <x-section title="Concept" anchor="static-concept" disable-copy>
        <p>
            <u>Version 1.1.0</u> of TallStackUI introduces a new component: Banner. This component
            has two approaches of use: static use for displaying fixed or random messages or Livewire
            integration for displaying messages from the backend to frontend.
        </p>
    </x-section>
    <x-warning class="mb-4">
        An example of the banner component is the banner at the top of the documentation.
    </x-warning>
    <x-section title="Usage" anchor="static-usage" disable-copy>
        <p>To use the component you must add it to your application's layout, within the body tag, but above anything else:</p>
        <x-code language="blade" :contents="$introduction" disable-copy />
    </x-section>
    <x-section title="Messages" anchor="static-messages" disable-copy>
        <x-code language="blade" :contents="$texts" disable-copy />
        <x-warning>
            You can take advantage of collections to get an array of messages from the database.
        </x-warning>
    </x-section>
    <x-section title="Left Slot" anchor="static-left-slot" disable-copy>
        <x-code language="blade" :contents="$slot" disable-copy />
    </x-section>
    <x-section title="Close Option" anchor="static-close-option" disable-copy>
        <x-code language="blade" :contents="$close" disable-copy />
    </x-section>
    <x-section title="Animations" anchor="static-animations" disable-copy>
        <x-code language="blade" :contents="$animated" disable-copy />
    </x-section>
    <x-section title="Date Limit" anchor="static-date-limit" description="An option to control the final date to display the banner." disable-copy>
        <x-code language="blade" :contents="$dates" disable-copy />
    </x-section>
    <x-section title="Size Variations" anchor="static-size-variations" disable-copy>
        <x-code language="blade" :contents="$sizes" disable-copy />
    </x-section>
    <x-section title="Color Variations & Light Option" anchor="static-color-variations-light-option" disable-copy>
        <x-code language="blade" :contents="$colors" disable-copy />
    </x-section>
    <x-separator text="Livewire Integration" />
    <x-section title="Concept" anchor="livewire-integration-concept" disable-copy>
        <p>
            Unlike the static format, <u>the use of the banner with Livewire integration can
            only have the <x-block>size</x-block> configurable option in the layout.</u> All other available
            options must be configured when dispatching the banner through Livewire,
            so in the layout, the banner must be added as follows:
        </p>
        <x-code language="blade" :contents="$livewire" disable-copy />
        <p>
            When using the banner integrated with Livewire then the banner will be displayed as fixed.
            This is a strategy adopted so that the banner is displayed if the user is below the top of the page.
        </p>
    </x-section>
    <x-section title="Usage" anchor="livewire-integration-usage" disable-copy>
        1. Use the Interactions trait in your Livewire component.
        <x-code language="php" :contents="$trait" disable-copy/>
        2. Dispatch the Banner from a method.
        <x-code language="php" :contents="$dispatch" disable-copy/>
        <x-warning text="This is an example. You can't dispatch all at the same time." />
    </x-section>
    <x-section title="Available Options" anchor="livewire-integration-available-options" disable-copy>
        <x-code language="php" :contents="$options" disable-copy/>
    </x-section>
    <x-section title="Example" anchor="livewire-integration-example">
        <x-preview :contents="$example">
            <livewire:documentation.interactions.banner.examples />
        </x-preview>
    </x-section>
    <x-slot:navigation>
        <x-slot:back>
            <x-layout.footer-navigation :href="route('documentation.ui.banner')" text="Badge" back />
        </x-slot:back>
        <x-slot:next>
            <x-layout.footer-navigation :href="route('documentation.ui.button')" text="Button" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
