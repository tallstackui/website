<x-layout>
    <x-slot:title>
        Button
    </x-slot:title>
    <x-slot:description>
        Button components.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="button" />
        <livewire:documentation.personalization :personalization="$personalizationCircle" component="button.circle" />
    </x-slot:personalization>
    <x-section>
        <x-preview title="Basic Button"
                   language="blade"
                   :contents="$basic">
            <x-button>TallStackUi</x-button>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Tag A Usage"
                   language="blade"
                   :contents="$a">
            <x-button href="https://google.com.br" target="_blank">TallStackUi</x-button>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Square Variation"
                   language="blade"
                   :contents="$square">
            <x-button square>TallStackUi</x-button>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Round Variation"
                   language="blade"
                   :contents="$round">
            <x-button round>TallStackUi</x-button>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Icon Slot"
                   description="An option to use any Heroicon."
                   language="blade"
                   :contents="$icons">
            <div class="inline-flex space-x-2">
                <x-button icon="cog" position="left">TallStackUi</x-button>
                <x-button icon="users" position="right">TallStackUi</x-button>
            </div>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Size Variations"
                   language="blade"
                   :contents="$sizes">
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
    <x-section>
        <x-preview title="Loading Effect"
                   language="blade"
                   :contents="$loadings">
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
    <x-section>
        <x-preview title="Color Variations"
                   language="blade"
                   :contents="$colors">
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
    <x-section>
        <x-preview title="Outline Variations"
                   language="blade"
                   :contents="$outlines">
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
    <x-separator/>
    <x-section>
        <x-preview title="Circle Button"
                   language="blade"
                   :contents="$circle">
            <x-button.circle>TS</x-button.circle>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Circle Tag A Button"
                   language="blade"
                   :contents="$circleA">
            <x-button.circle href="https://google.com.br" target="_blank">TS</x-button.circle>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Icon Slot"
                   description="An option to use any Heroicon."
                   language="blade"
                   :contents="$circleIcons">
            <x-button.circle icon="pencil"/>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Size Variations"
                   description="An option to use any Heroicon."
                   language="blade"
                   :contents="$circleSizes">
            <x-button.circle text="SM" sm/>
            <x-button.circle text="MD" />
            <x-button.circle text="LG" lg/>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Loading Effect"
                   language="blade"
                   :contents="$circleLoadings">
            <div class="inline-flex items-center space-x-2">
                <livewire:documentation.ui.button :model="2" />
                <livewire:documentation.ui.button :model="2" :type="2" />
                <livewire:documentation.ui.button :model="2" :type="3" />
            </div>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Color Variations"
                   language="blade"
                   :contents="$circleColors">
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
    <x-section>
        <x-preview title="Outline Variations"
                   language="blade"
                   :contents="$circleOutlines">
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
