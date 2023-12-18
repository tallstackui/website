<x-layout>
    <x-slot:title>
        Link
        <x-slot:version>
            v1.5
        </x-slot:version>
    </x-slot:title>
    <x-slot:description>
        Link component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="link" />
    </x-slot:personalization>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-link :href="route('documentation.ui.link')">
                TallStackUI
            </x-link>
        </x-preview>
        <x-warning class="mt-4">
            The href attribute will be mandatory unless the fragment is defined.
        </x-warning>
    </x-section>
    <x-section title="Size Variations">
        <x-preview language="blade" :contents="$sizes">
            <x-link :href="route('documentation.ui.link')" text="TallStackUI" sm />
            <x-link :href="route('documentation.ui.link')" text="TallStackUI" md />
            <x-link :href="route('documentation.ui.link')" text="TallStackUI" lg />
        </x-preview>
    </x-section>
    <x-section title="Icon Slot">
        <x-preview language="blade" :contents="$icons">
            <div class="flex items-center gap-x-2">
                <x-link :href="route('documentation.ui.link')"
                        text="TallStackUI"
                        icon="link" />
                <x-link :href="route('documentation.ui.link')"
                        text="TallStackUI"
                        icon="arrow-up-right"
                        position="right" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Target Blank & Style Options">
        <x-preview language="blade" :contents="$blankBoldUnderline">
            <div class="flex items-center gap-x-2">
                <x-link :href="route('documentation.ui.link')" text="TallStackUI" blank />
                <x-link :href="route('documentation.ui.link')" text="TallStackUI" bold />
                <x-link :href="route('documentation.ui.link')" text="TallStackUI" underline />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Query String & Fragment Options" description="Hover the mouse to see the options in the browser link preview.">
        <x-preview language="blade" :contents="$queryFragment">
            <div class="flex items-center gap-x-2">
                <x-link :href="route('documentation.ui.link')"
                        text="TallStackUI"
                        :query="['status' => 'active']" />
                <x-link :href="route('documentation.ui.link')"
                        text="TallStackUI"
                        fragment="#query-string-fragment-options" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Color Variations">
        <x-preview language="blade" :contents="$colors">
            <div class="flex flex-col gap-x-2">
                <x-link :href="route('documentation.ui.link')" text="Primary" />
                <x-link :href="route('documentation.ui.link')" text="Secondary" color="secondary" />
                <x-link :href="route('documentation.ui.link')" text="Slate" color="slate" />
                <x-link :href="route('documentation.ui.link')" text="Gray" color="gray" />
                <x-link :href="route('documentation.ui.link')" text="Zinc" color="zinc" />
                <x-link :href="route('documentation.ui.link')" text="Neutral" color="neutral" />
                <x-link :href="route('documentation.ui.link')" text="Stone" color="stone" />
                <x-link :href="route('documentation.ui.link')" text="Red" color="red" />
                <x-link :href="route('documentation.ui.link')" text="Orange" color="orange" />
                <x-link :href="route('documentation.ui.link')" text="Amber" color="amber" />
                <x-link :href="route('documentation.ui.link')" text="Yellow" color="yellow" />
                <x-link :href="route('documentation.ui.link')" text="Lime" color="lime" />
                <x-link :href="route('documentation.ui.link')" text="Green" color="green" />
                <x-link :href="route('documentation.ui.link')" text="Emerald" color="emerald" />
                <x-link :href="route('documentation.ui.link')" text="Teal" color="teal" />
                <x-link :href="route('documentation.ui.link')" text="Cyan" color="cyan" />
                <x-link :href="route('documentation.ui.link')" text="Sky" color="sky" />
                <x-link :href="route('documentation.ui.link')" text="Blue" color="blue" />
                <x-link :href="route('documentation.ui.link')" text="Indigo" color="indigo" />
                <x-link :href="route('documentation.ui.link')" text="Violet" color="violet" />
                <x-link :href="route('documentation.ui.link')" text="Purple" color="purple" />
                <x-link :href="route('documentation.ui.link')" text="Fuchsia" color="fuchsia" />
                <x-link :href="route('documentation.ui.link')" text="Pink" color="pink" />
                <x-link :href="route('documentation.ui.link')" text="Rose" color="rose" />
                <x-link :href="route('documentation.ui.link')" text="White" color="white" />
                <x-link :href="route('documentation.ui.link')" text="Black" color="black" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Without Color">
        <x-preview language="blade" :contents="$withoutColor">
            <div class="flex flex-col gap-x-2">
                <x-link :href="route('documentation.ui.link')" text="TallStackUI" :color="null" />
            </div>
        </x-preview>
    </x-section>
    <x-slot:navigation>
        <x-slot:back>
            <x-layout.footer-navigation :href="route('documentation.ui.modal')" text="Modal" back />
        </x-slot:back>
        <x-slot:next>
            <x-layout.footer-navigation :href="route('documentation.ui.loading')" text="Loading" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
