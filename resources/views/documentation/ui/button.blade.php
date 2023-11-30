<x-layout>
    <x-slot:title>
        Button
    </x-slot:title>
    <x-slot:description>
        Button component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="button" />
        <livewire:documentation.personalization :personalization="$personalizationCircle" component="button.circle" />
    </x-slot:personalization>
    <x-section title="Basic Usage" anchor="normal-basic-usage">
        <x-preview language="blade" :contents="$basic">
            <x-button>TallStackUi</x-button>
        </x-preview>
    </x-section>
    <x-section title="Tag A Usage" anchor="normal-tag-a-usage">
        <x-preview language="blade" :contents="$a">
            <x-button href="https://google.com.br" target="_blank">TallStackUi</x-button>
        </x-preview>
    </x-section>
    <x-section title="Square Variation"
               anchor="normal-square-variation">
        <x-preview language="blade" :contents="$square">
            <x-button square>TallStackUi</x-button>
        </x-preview>
    </x-section>
    <x-section title="Round Variation" anchor="normal-round-variation">
        <x-preview language="blade" :contents="$round">
            <x-button round>TallStackUi</x-button>
        </x-preview>
    </x-section>
    <x-section title="Icon Slot" anchor="normal-icon-slot" description="An option to use any Heroicon.">
        <x-preview language="blade" :contents="$icons">
            <div class="inline-flex space-x-2">
                <x-button icon="cog" position="left">TallStackUi</x-button>
                <x-button icon="users" position="right">TallStackUi</x-button>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Size Variations" anchor="normal-size-variations">
        <x-preview language="blade" :contents="$sizes">
            <div class="flex flex-col items-center justify-center space-y-2 sm:space-x-2 sm:space-y-0 sm:flex-row sm:justify-start">
                <div>
                    <x-button xs>TallStackUi</x-button>
                </div>
                <div>
                    <x-button sm>TallStackUi</x-button>
                </div>
                <div>
                    <x-button md>TallStackUi</x-button>
                </div>
                <div>
                    <x-button lg>TallStackUi</x-button>
                </div>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Loading Effect" anchor="normal-loading-effect">
        <x-preview language="blade" :contents="$loadings">
            <div class="flex flex-col items-center justify-center space-y-2 sm:space-x-2 sm:space-y-0 sm:flex-row sm:justify-start">
                <div>
                    <livewire:documentation.ui.button :model="1" />
                </div>
                <div>
                    <livewire:documentation.ui.button :model="1" :type="2" />
                </div>
                <div>
                    <livewire:documentation.ui.button :model="1" :type="3" />
                </div>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Color Variations" anchor="normal-color-variations">
        <x-preview language="blade" :contents="$colors">
            <div class="gap-2 space-y-2">
                <x-button text="Primary" />
                <x-button text="Secondary" color="secondary" />
                <x-button text="Slate" color="slate" />
                <x-button text="Gray" color="gray" />
                <x-button text="Zinc" color="zinc" />
                <x-button text="Neutral" color="neutral" />
                <x-button text="Stone" color="stone" />
                <x-button text="Red" color="red" />
                <x-button text="Orange" color="orange" />
                <x-button text="Amber" color="amber" />
                <x-button text="Yellow" color="yellow" />
                <x-button text="Lime" color="lime" />
                <x-button text="Green" color="green" />
                <x-button text="Emerald" color="emerald" />
                <x-button text="Teal" color="teal" />
                <x-button text="Cyan" color="cyan" />
                <x-button text="Sky" color="sky" />
                <x-button text="Blue" color="blue" />
                <x-button text="Indigo" color="indigo" />
                <x-button text="Violet" color="violet" />
                <x-button text="Purple" color="purple" />
                <x-button text="Fuchsia" color="fuchsia" />
                <x-button text="Pink" color="pink" />
                <x-button text="Rose" color="rose" />
                <x-button text="Black" color="black" />
                <x-button text="White" color="white" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Light Variations" anchor="normal-light-variations">
        <x-preview language="blade" :contents="$lights">
            <div class="gap-2 space-y-2">
                <x-button text="Primary" light />
                <x-button text="Secondary" color="secondary" light />
                <x-button text="Slate" color="slate" light />
                <x-button text="Gray" color="gray" light />
                <x-button text="Zinc" color="zinc" light />
                <x-button text="Neutral" color="neutral" light />
                <x-button text="Stone" color="stone" light />
                <x-button text="Red" color="red" light />
                <x-button text="Orange" color="orange" light />
                <x-button text="Amber" color="amber" light />
                <x-button text="Yellow" color="yellow" light />
                <x-button text="Lime" color="lime" light />
                <x-button text="Green" color="green" light />
                <x-button text="Emerald" color="emerald" light />
                <x-button text="Teal" color="teal" light />
                <x-button text="Cyan" color="cyan" light />
                <x-button text="Sky" color="sky" light />
                <x-button text="Blue" color="blue" light />
                <x-button text="Indigo" color="indigo" light />
                <x-button text="Violet" color="violet" light />
                <x-button text="Purple" color="purple" light />
                <x-button text="Fuchsia" color="fuchsia" light />
                <x-button text="Pink" color="pink" light />
                <x-button text="Rose" color="rose" light />
                <x-button text="Black" color="black" light />
                <x-button text="White" color="white" light />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Outline Variations" anchor="normal-outline-variations">
        <x-preview language="blade" :contents="$outlines">
            <div class="gap-2 space-y-2">
                <x-button text="Primary" outline />
                <x-button text="Secondary" color="secondary" outline />
                <x-button text="Slate" color="slate" outline />
                <x-button text="Gray" color="gray" outline />
                <x-button text="Zinc" color="zinc" outline />
                <x-button text="Neutral" color="neutral" outline />
                <x-button text="Stone" color="stone" outline />
                <x-button text="Red" color="red" outline />
                <x-button text="Orange" color="orange" outline />
                <x-button text="Amber" color="amber" outline />
                <x-button text="Yellow" color="yellow" outline />
                <x-button text="Lime" color="lime" outline />
                <x-button text="Green" color="green" outline />
                <x-button text="Emerald" color="emerald" outline />
                <x-button text="Teal" color="teal" outline />
                <x-button text="Cyan" color="cyan" outline />
                <x-button text="Sky" color="sky" outline />
                <x-button text="Blue" color="blue" outline />
                <x-button text="Indigo" color="indigo" outline />
                <x-button text="Violet" color="violet" outline />
                <x-button text="Purple" color="purple" outline />
                <x-button text="Fuchsia" color="fuchsia" outline />
                <x-button text="Pink" color="pink" outline />
                <x-button text="Rose" color="rose" outline />
                <x-button text="Black" color="black" outline />
                <x-button text="White" color="white" outline />
            </div>
        </x-preview>
    </x-section>
    <x-separator text="Circle Button" />
    <x-section title="Basic Usage" anchor="circle-basic-usage">
        <x-preview language="blade" :contents="$circle">
            <x-button.circle>TS</x-button.circle>
        </x-preview>
    </x-section>
    <x-section title="Tag A Button" anchor="circle-tag-a-usage">
        <x-preview language="blade" :contents="$circleA">
            <x-button.circle href="https://google.com.br" target="_blank">TS</x-button.circle>
        </x-preview>
    </x-section>
    <x-section title="Icon Slot" anchor="circle-icon-slot" description="An option to use any Heroicon.">
        <x-preview language="blade" :contents="$circleIcons">
            <x-button.circle icon="pencil"/>
        </x-preview>
    </x-section>
    <x-section title="Size Variations"
               anchor="circle-size-variations"
               description="An option to use any Heroicon.">
        <x-preview language="blade" :contents="$circleSizes">
            <x-button.circle text="SM" sm/>
            <x-button.circle text="MD" />
            <x-button.circle text="LG" lg/>
        </x-preview>
    </x-section>
    <x-section title="Loading Effect" anchor="circle-loading-effect">
        <x-preview language="blade" :contents="$circleLoadings">
            <div class="inline-flex items-center space-x-2">
                <livewire:documentation.ui.button :model="2" />
                <livewire:documentation.ui.button :model="2" :type="2" />
                <livewire:documentation.ui.button :model="2" :type="3" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Color Variations" anchor="circle-color-variations">
        <x-preview language="blade" :contents="$circleColors">
            <div class="gap-2 space-y-2">
                <x-button.circle text="TS" />
                <x-button.circle text="TS" color="secondary" />
                <x-button.circle text="TS" color="slate" />
                <x-button.circle text="TS" color="gray" />
                <x-button.circle text="TS" color="zinc" />
                <x-button.circle text="TS" color="neutral" />
                <x-button.circle text="TS" color="stone" />
                <x-button.circle text="TS" color="red" />
                <x-button.circle text="TS" color="orange" />
                <x-button.circle text="TS" color="amber" />
                <x-button.circle text="TS" color="yellow" />
                <x-button.circle text="TS" color="lime" />
                <x-button.circle text="TS" color="green" />
                <x-button.circle text="TS" color="emerald" />
                <x-button.circle text="TS" color="teal" />
                <x-button.circle text="TS" color="cyan" />
                <x-button.circle text="TS" color="sky" />
                <x-button.circle text="TS" color="blue" />
                <x-button.circle text="TS" color="indigo" />
                <x-button.circle text="TS" color="violet" />
                <x-button.circle text="TS" color="purple" />
                <x-button.circle text="TS" color="fuchsia" />
                <x-button.circle text="TS" color="pink" />
                <x-button.circle text="TS" color="rose" />
                <x-button.circle text="TS" color="black" />
                <x-button.circle text="TS" color="white" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Light Variations" anchor="circle-light-variations">
        <x-preview language="blade" :contents="$circleLights">
            <div class="gap-2 space-y-2">
                <x-button.circle text="TS" light />
                <x-button.circle text="TS" color="secondary" light />
                <x-button.circle text="TS" color="slate" light />
                <x-button.circle text="TS" color="gray" light />
                <x-button.circle text="TS" color="zinc" light />
                <x-button.circle text="TS" color="neutral" light />
                <x-button.circle text="TS" color="stone" light />
                <x-button.circle text="TS" color="red" light />
                <x-button.circle text="TS" color="orange" light />
                <x-button.circle text="TS" color="amber" light />
                <x-button.circle text="TS" color="yellow" light />
                <x-button.circle text="TS" color="lime" light />
                <x-button.circle text="TS" color="green" light />
                <x-button.circle text="TS" color="emerald" light />
                <x-button.circle text="TS" color="teal" light />
                <x-button.circle text="TS" color="cyan" light />
                <x-button.circle text="TS" color="sky" light />
                <x-button.circle text="TS" color="blue" light />
                <x-button.circle text="TS" color="indigo" light />
                <x-button.circle text="TS" color="violet" light />
                <x-button.circle text="TS" color="purple" light />
                <x-button.circle text="TS" color="fuchsia" light />
                <x-button.circle text="TS" color="pink" light />
                <x-button.circle text="TS" color="rose" light />
                <x-button.circle text="TS" color="black" light />
                <x-button.circle text="TS" color="white" light />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Outline Variations" anchor="circle-outline-variations">
        <x-preview language="blade" :contents="$circleOutlines">
            <div class="gap-2 space-y-2">
                <x-button.circle text="TS" outline />
                <x-button.circle text="TS" color="secondary" outline />
                <x-button.circle text="TS" color="slate" outline />
                <x-button.circle text="TS" color="gray" outline />
                <x-button.circle text="TS" color="zinc" outline />
                <x-button.circle text="TS" color="neutral" outline />
                <x-button.circle text="TS" color="stone" outline />
                <x-button.circle text="TS" color="red" outline />
                <x-button.circle text="TS" color="orange" outline />
                <x-button.circle text="TS" color="amber" outline />
                <x-button.circle text="TS" color="yellow" outline />
                <x-button.circle text="TS" color="lime" outline />
                <x-button.circle text="TS" color="green" outline />
                <x-button.circle text="TS" color="emerald" outline />
                <x-button.circle text="TS" color="teal" outline />
                <x-button.circle text="TS" color="cyan" outline />
                <x-button.circle text="TS" color="sky" outline />
                <x-button.circle text="TS" color="blue" outline />
                <x-button.circle text="TS" color="indigo" outline />
                <x-button.circle text="TS" color="violet" outline />
                <x-button.circle text="TS" color="purple" outline />
                <x-button.circle text="TS" color="fuchsia" outline />
                <x-button.circle text="TS" color="pink" outline />
                <x-button.circle text="TS" color="rose" outline />
                <x-button.circle text="TS" color="black" outline />
                <x-button.circle text="TS" color="white" outline />
            </div>
        </x-preview>
    </x-section>
    <x-slot:navigation>
        <x-slot:back>
            <x-navigation.link href="{{ route('documentation.ui.badge') }}" text="Badge" back />
        </x-slot:back>
        <x-slot:next>
            <x-navigation.link href="{{ route('documentation.ui.card') }}" text="Card" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
