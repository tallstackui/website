<x-layout>
    <x-slot:title>
        Alert
    </x-slot:title>
    <x-slot:description>
        Alert components.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="alert" />
    </x-slot:personalization>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-alert>
                TallStackUi
            </x-alert>
        </x-preview>
    </x-section>
    <x-section title="Title">
        <x-preview language="blade" :contents="$title">
            <x-alert title="TallStackUi">
                TallStackUi
            </x-alert>
        </x-preview>
    </x-section>
    <x-section title="Close Option" description="An option to allow the user to hide the alert">
        <x-preview language="blade" :contents="$close">
            <x-alert title="TallStackUi" close>
                TallStackUi
            </x-alert>
        </x-preview>
    </x-section>
    <x-section title="Icon Slot">
        <x-preview language="blade" :contents="$icon">
            <div class="space-y-2">
                <x-alert icon="cog">
                    TallStackUi
                </x-alert>
                <x-alert title="TallStackUi" icon="cog">
                    TallStackUi
                </x-alert>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Color Variations">
        <x-preview language="blade" :contents="$colors">
            <div class="space-y-2">
                <x-alert title="TallStackUi" text="Primary" />
                <x-alert title="TallStackUi" text="Secondary" color="secondary" />
                <x-alert title="TallStackUi" text="Slate" color="slate" />
                <x-alert title="TallStackUi" text="Gray" color="gray" />
                <x-alert title="TallStackUi" text="Zinc" color="zinc" />
                <x-alert title="TallStackUi" text="Neutral" color="neutral" />
                <x-alert title="TallStackUi" text="Stone" color="stone" />
                <x-alert title="TallStackUi" text="Red" color="red" />
                <x-alert title="TallStackUi" text="Orange" color="orange" />
                <x-alert title="TallStackUi" text="Amber" color="amber" />
                <x-alert title="TallStackUi" text="Yellow" color="yellow" />
                <x-alert title="TallStackUi" text="Lime" color="lime" />
                <x-alert title="TallStackUi" text="Green" color="green" />
                <x-alert title="TallStackUi" text="Emerald" color="emerald" />
                <x-alert title="TallStackUi" text="Teal" color="teal" />
                <x-alert title="TallStackUi" text="Cyan" color="cyan" />
                <x-alert title="TallStackUi" text="Sky" color="sky" />
                <x-alert title="TallStackUi" text="Blue" color="blue" />
                <x-alert title="TallStackUi" text="Indigo" color="indigo" />
                <x-alert title="TallStackUi" text="Violet" color="violet" />
                <x-alert title="TallStackUi" text="Purple" color="purple" />
                <x-alert title="TallStackUi" text="Fuchsia" color="fuchsia" />
                <x-alert title="TallStackUi" text="Pink" color="pink" />
                <x-alert title="TallStackUi" text="Rose" color="rose" />
                <x-alert title="TallStackUi" text="Black" color="black" />
                <x-alert title="TallStackUi" text="White" color="white" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Light Variations">
        <x-preview language="blade" :contents="$lights">
            <div class="space-y-2">
                <x-alert title="TallStackUi" text="Primary" light />
                <x-alert title="TallStackUi" text="Secondary" color="secondary" light />
                <x-alert title="TallStackUi" text="Slate" color="slate" light />
                <x-alert title="TallStackUi" text="Gray" color="gray" light />
                <x-alert title="TallStackUi" text="Zinc" color="zinc" light />
                <x-alert title="TallStackUi" text="Neutral" color="neutral" light />
                <x-alert title="TallStackUi" text="Stone" color="stone" light />
                <x-alert title="TallStackUi" text="Red" color="red" light />
                <x-alert title="TallStackUi" text="Orange" color="orange" light />
                <x-alert title="TallStackUi" text="Amber" color="amber" light />
                <x-alert title="TallStackUi" text="Yellow" color="yellow" light />
                <x-alert title="TallStackUi" text="Lime" color="lime" light />
                <x-alert title="TallStackUi" text="Green" color="green" light />
                <x-alert title="TallStackUi" text="Emerald" color="emerald" light />
                <x-alert title="TallStackUi" text="Teal" color="teal" light />
                <x-alert title="TallStackUi" text="Cyan" color="cyan" light />
                <x-alert title="TallStackUi" text="Sky" color="sky" light />
                <x-alert title="TallStackUi" text="Blue" color="blue" light />
                <x-alert title="TallStackUi" text="Indigo" color="indigo" light />
                <x-alert title="TallStackUi" text="Violet" color="violet" light />
                <x-alert title="TallStackUi" text="Purple" color="purple" light />
                <x-alert title="TallStackUi" text="Fuchsia" color="fuchsia" light />
                <x-alert title="TallStackUi" text="Pink" color="pink" light />
                <x-alert title="TallStackUi" text="Rose" color="rose" light />
                <x-alert title="TallStackUi" text="Black" color="black" light />
                <x-alert title="TallStackUi" text="White" color="white" light />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Outline Variations">
        <x-preview language="blade" :contents="$outlines">
            <div class="space-y-2">
                <x-alert title="TallStackUi" text="Primary" outline />
                <x-alert title="TallStackUi" text="Secondary" color="secondary" outline />
                <x-alert title="TallStackUi" text="Slate" color="slate" outline />
                <x-alert title="TallStackUi" text="Gray" color="gray" outline />
                <x-alert title="TallStackUi" text="Zinc" color="zinc" outline />
                <x-alert title="TallStackUi" text="Neutral" color="neutral" outline />
                <x-alert title="TallStackUi" text="Stone" color="stone" outline />
                <x-alert title="TallStackUi" text="Red" color="red" outline />
                <x-alert title="TallStackUi" text="Orange" color="orange" outline />
                <x-alert title="TallStackUi" text="Amber" color="amber" outline />
                <x-alert title="TallStackUi" text="Yellow" color="yellow" outline />
                <x-alert title="TallStackUi" text="Lime" color="lime" outline />
                <x-alert title="TallStackUi" text="Green" color="green" outline />
                <x-alert title="TallStackUi" text="Emerald" color="emerald" outline />
                <x-alert title="TallStackUi" text="Teal" color="teal" outline />
                <x-alert title="TallStackUi" text="Cyan" color="cyan" outline />
                <x-alert title="TallStackUi" text="Sky" color="sky" outline />
                <x-alert title="TallStackUi" text="Blue" color="blue" outline />
                <x-alert title="TallStackUi" text="Indigo" color="indigo" outline />
                <x-alert title="TallStackUi" text="Violet" color="violet" outline />
                <x-alert title="TallStackUi" text="Purple" color="purple" outline />
                <x-alert title="TallStackUi" text="Fuchsia" color="fuchsia" outline />
                <x-alert title="TallStackUi" text="Pink" color="pink" outline />
                <x-alert title="TallStackUi" text="Rose" color="rose" outline />
                <x-alert title="TallStackUi" text="Black" color="black" outline />
                <x-alert title="TallStackUi" text="White" color="white" outline />
            </div>
        </x-preview>
    </x-section>
    <x-slot:navigation>
        <x-slot:back>
            <x-layout.footer-navigation :href="route('documentation.form.toggle')" text="Form Toggle" back />
        </x-slot:back>
        <x-slot:next>
            <x-layout.footer-navigation :href="route('documentation.ui.avatar')" text="Avatar" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
