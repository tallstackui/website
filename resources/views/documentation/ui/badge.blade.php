<x-layout>
    <x-slot:title>
        Badge
    </x-slot:title>
    <x-slot:description>
        Badge component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="badge" />
    </x-slot:personalization>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-badge text="TallStackUi"/>
        </x-preview>
    </x-section>
    <x-section title="Square Variation">
        <x-preview language="blade" :contents="$square">
            <div class="flex items-center gap-2">
                <x-badge text="TallStackUi" square/>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Round Variation">
        <x-preview language="blade" :contents="$round">
            <div class="flex items-center gap-2">
                <x-badge text="TallStackUi" round/>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Left & Right Slots">
        <x-preview language="blade" :contents="$leftRight">
            <div class="flex items-center gap-2">
                <x-badge lg>
                    <x-slot:left>
                        <p class="text-yellow-300 text-xs mr-2">+99</p>
                    </x-slot:left>
                    TallStackUI
                </x-badge>
                <x-badge lg>
                    <x-slot:right>
                        <p class="text-yellow-300 text-xs ml-2">+99</p>
                    </x-slot:right>
                    TallStackUI
                </x-badge>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Icon Slot">
        <x-preview language="blade" :contents="$icons">
            <div class="flex items-center gap-2">
                <x-badge text="TallStackUi" icon="users" position="left"/>
                <x-badge text="TallStackUi" icon="cog" position="right"/>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Size Variations">
        <x-preview language="blade" :contents="$sizes">
            <div class="flex items-center gap-2">
                <x-badge text="Default"/>
                <x-badge text="MD" md/>
                <x-badge text="LG" lg/>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Color Variations">
        <x-preview language="blade" :contents="$colors">
            <div class="gap-2">
                <x-badge text="Primary" />
                <x-badge text="Secondary" color="secondary" />
                <x-badge text="Slate" color="slate" />
                <x-badge text="Gray" color="gray" />
                <x-badge text="Zinc" color="zinc" />
                <x-badge text="Neutral" color="neutral" />
                <x-badge text="Stone" color="stone" />
                <x-badge text="Red" color="red" />
                <x-badge text="Orange" color="orange" />
                <x-badge text="Amber" color="amber" />
                <x-badge text="Yellow" color="yellow" />
                <x-badge text="Lime" color="lime" />
                <x-badge text="Green" color="green" />
                <x-badge text="Emerald" color="emerald" />
                <x-badge text="Teal" color="teal" />
                <x-badge text="Cyan" color="cyan" />
                <x-badge text="Sky" color="sky" />
                <x-badge text="Blue" color="blue" />
                <x-badge text="Indigo" color="indigo" />
                <x-badge text="Violet" color="violet" />
                <x-badge text="Purple" color="purple" />
                <x-badge text="Fuchsia" color="fuchsia" />
                <x-badge text="Pink" color="pink" />
                <x-badge text="Rose" color="rose" />
                <x-badge text="White" color="white" />
                <x-badge text="Black" color="black" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Light Variations">
        <x-preview language="blade" :contents="$lights">
            <div class="gap-2">
                <x-badge text="Primary" light />
                <x-badge text="Secondary" color="secondary" light />
                <x-badge text="Slate" color="slate" light />
                <x-badge text="Gray" color="gray" light />
                <x-badge text="Zinc" color="zinc" light />
                <x-badge text="Neutral" color="neutral" light />
                <x-badge text="Stone" color="stone" light />
                <x-badge text="Red" color="red" light />
                <x-badge text="Orange" color="orange" light />
                <x-badge text="Amber" color="amber" light />
                <x-badge text="Yellow" color="yellow" light />
                <x-badge text="Lime" color="lime" light />
                <x-badge text="Green" color="green" light />
                <x-badge text="Emerald" color="emerald" light />
                <x-badge text="Teal" color="teal" light />
                <x-badge text="Cyan" color="cyan" light />
                <x-badge text="Sky" color="sky" light />
                <x-badge text="Blue" color="blue" light />
                <x-badge text="Indigo" color="indigo" light />
                <x-badge text="Violet" color="violet" light />
                <x-badge text="Purple" color="purple" light />
                <x-badge text="Fuchsia" color="fuchsia" light />
                <x-badge text="Pink" color="pink" light />
                <x-badge text="Rose" color="rose" light />
                <x-badge text="White" color="white" light />
                <x-badge text="Black" color="black" light />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Outline Variations">
        <x-preview language="blade" :contents="$outlines">
            <div class="gap-2">
                <x-badge text="Primary" outline />
                <x-badge text="Secondary" color="secondary" outline />
                <x-badge text="Slate" color="slate" outline />
                <x-badge text="Gray" color="gray" outline />
                <x-badge text="Zinc" color="zinc" outline />
                <x-badge text="Neutral" color="neutral" outline />
                <x-badge text="Stone" color="stone" outline />
                <x-badge text="Red" color="red" outline />
                <x-badge text="Orange" color="orange" outline />
                <x-badge text="Amber" color="amber" outline />
                <x-badge text="Yellow" color="yellow" outline />
                <x-badge text="Lime" color="lime" outline />
                <x-badge text="Green" color="green" outline />
                <x-badge text="Emerald" color="emerald" outline />
                <x-badge text="Teal" color="teal" outline />
                <x-badge text="Cyan" color="cyan" outline />
                <x-badge text="Sky" color="sky" outline />
                <x-badge text="Blue" color="blue" outline />
                <x-badge text="Indigo" color="indigo" outline />
                <x-badge text="Violet" color="violet" outline />
                <x-badge text="Purple" color="purple" outline />
                <x-badge text="Fuchsia" color="fuchsia" outline />
                <x-badge text="Pink" color="pink" outline />
                <x-badge text="Rose" color="rose" outline />
                <x-badge text="White" color="white" outline />
                <x-badge text="Black" color="black" outline />
            </div>
        </x-preview>
    </x-section>
    <x-slot:navigation>
        <x-slot:back>
            <x-layout.footer-navigation href="{{ route('documentation.ui.avatar') }}" text="Avatar" back />
        </x-slot:back>
        <x-slot:next>
            <x-layout.footer-navigation href="{{ route('documentation.ui.banner') }}" text="Banner" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
