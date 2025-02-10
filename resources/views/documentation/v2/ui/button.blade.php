@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content>
    <x-slot:title>
        Button
    </x-slot:title>
    <x-slot:description>
        Button component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:personalization :$personalization component="Button\Button" />
        <livewire:personalization :personalization="$personalizationCircle" component="Button\Circle" />
    </x-slot:personalization>
    <x-section title="Basic Usage" anchor="normal-basic-usage">
        <x-preview language="blade" :contents="$basic">
            <x-button>TallStackUI</x-button>
        </x-preview>
    </x-section>
    <x-section title="Button as Link" anchor="normal-button-as-link">
        <x-preview language="blade" :contents="$a">
            <x-button href="https://google.com.br" target="_blank">TallStackUI</x-button>
        </x-preview>
    </x-section>
    <x-section title="Square Variation"
               anchor="normal-square-variation">
        <x-preview language="blade" :contents="$square">
            <x-button square>TallStackUI</x-button>
        </x-preview>
    </x-section>
    <x-section title="Round Variation" anchor="normal-round-variation">
        <x-preview language="blade" :contents="$round">
            <x-button round>TallStackUI</x-button>
        </x-preview>
    </x-section>
    <x-section title="Left & Right Slots" anchor="normal-left-right-slots">
        <x-preview language="blade" :contents="$leftRight">
            <div class="inline-flex space-x-2">
                <x-button>
                    <x-slot:left>
                        <x-badge color="yellow" text="+99" round light />
                    </x-slot:left>
                    TallStackUI
                </x-button>
                <x-button>
                    <x-slot:right>
                        <x-badge color="yellow" text="+99" round light />
                    </x-slot:right>
                    TallStackUI
                </x-button>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Icon Slot" anchor="normal-icon-slot" description="An option to use any Heroicon.">
        <x-preview language="blade" :contents="$icon">
            <div class="inline-flex space-x-2">
                <x-button icon="cog" position="left">TallStackUI</x-button>
                <x-button icon="users" position="right">TallStackUI</x-button>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Size Variations" anchor="normal-size-variations">
        <x-preview language="blade" :contents="$size">
            <div class="flex flex-col items-center justify-center space-y-2 sm:space-x-2 sm:space-y-0 sm:flex-row sm:justify-start">
                <div>
                    <x-button xs>TallStackUI</x-button>
                </div>
                <div>
                    <x-button sm>TallStackUI</x-button>
                </div>
                <div>
                    <x-button md>TallStackUI</x-button>
                </div>
                <div>
                    <x-button lg>TallStackUI</x-button>
                </div>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Loading Effect" anchor="normal-loading-effect">
        <x-preview language="blade" :contents="$loading">
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
        <p class="mt-2">
            <u>Starting from version 1.35.0</u> you can use the <x-block>position</x-block> attribute
            to define the position of the loading icon: <x-block>left</x-block> or <x-block>right</x-block>,
            by default it will be on the left.
        </p>
    </x-section>
    <x-section title="Color Variations" anchor="normal-color-variations">
        <x-preview language="blade" :contents="$color">
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
        <x-preview language="blade" :contents="$light">
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
        <x-preview language="blade" :contents="$outline">
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
    <x-section title="Flat Variations" anchor="normal-flat-variations">
        <x-preview language="blade" :contents="$flat">
            <div class="gap-2 space-y-2">
                <x-button text="Primary" flat />
                <x-button text="Secondary" color="secondary" flat />
                <x-button text="Slate" color="slate" flat />
                <x-button text="Gray" color="gray" flat />
                <x-button text="Zinc" color="zinc" flat />
                <x-button text="Neutral" color="neutral" flat />
                <x-button text="Stone" color="stone" flat />
                <x-button text="Red" color="red" flat />
                <x-button text="Orange" color="orange" flat />
                <x-button text="Amber" color="amber" flat />
                <x-button text="Yellow" color="yellow" flat />
                <x-button text="Lime" color="lime" flat />
                <x-button text="Green" color="green" flat />
                <x-button text="Emerald" color="emerald" flat />
                <x-button text="Teal" color="teal" flat />
                <x-button text="Cyan" color="cyan" flat />
                <x-button text="Sky" color="sky" flat />
                <x-button text="Blue" color="blue" flat />
                <x-button text="Indigo" color="indigo" flat />
                <x-button text="Violet" color="violet" flat />
                <x-button text="Purple" color="purple" flat />
                <x-button text="Fuchsia" color="fuchsia" flat />
                <x-button text="Pink" color="pink" flat />
                <x-button text="Rose" color="rose" flat />
                <x-button text="Black" color="black" flat />
                <x-button text="White" color="white" flat />
            </div>
        </x-preview>
    </x-section>
    <x-separator text="Circle" />
    <x-section title="Basic Usage" anchor="circle-basic-usage">
        <x-preview language="blade" :contents="$circle">
            <x-button.circle icon="users" />
        </x-preview>
    </x-section>
    <x-section title="Button as Link" anchor="circle-button-as-link">
        <x-preview language="blade" :contents="$circleA">
            <x-button.circle href="https://google.com.br" target="_blank" icon="arrow-up-right" />
        </x-preview>
    </x-section>
    <x-section title="Icon Slot" anchor="circle-icon-slot" description="An option to use any Heroicon.">
        <x-preview language="blade" :contents="$circleIcon">
            <x-button.circle icon="pencil"/>
        </x-preview>
    </x-section>
    <x-section title="Size Variations"
               anchor="circle-size-variations"
               description="An option to use any Heroicon.">
        <x-preview language="blade" :contents="$circleSize">
            <x-button.circle icon="pencil" xs/>
            <x-button.circle icon="pencil" sm/>
            <x-button.circle icon="pencil" />
            <x-button.circle icon="pencil" lg/>
        </x-preview>
    </x-section>
    <x-section title="Loading Effect" anchor="circle-loading-effect">
        <x-preview language="blade" :contents="$circleLoading">
            <div class="inline-flex items-center space-x-2">
                <livewire:documentation.ui.button :model="2" />
                <livewire:documentation.ui.button :model="2" :type="2" />
                <livewire:documentation.ui.button :model="2" :type="3" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Color Variations" anchor="circle-color-variations">
        <x-preview language="blade" :contents="$circleColor">
            <div class="gap-2 space-y-2">
                <x-button.circle icon="bookmark" />
                <x-button.circle icon="bookmark" color="secondary" />
                <x-button.circle icon="bookmark" color="slate" />
                <x-button.circle icon="bookmark" color="gray" />
                <x-button.circle icon="bookmark" color="zinc" />
                <x-button.circle icon="bookmark" color="neutral" />
                <x-button.circle icon="bookmark" color="stone" />
                <x-button.circle icon="bookmark" color="red" />
                <x-button.circle icon="bookmark" color="orange" />
                <x-button.circle icon="bookmark" color="amber" />
                <x-button.circle icon="bookmark" color="yellow" />
                <x-button.circle icon="bookmark" color="lime" />
                <x-button.circle icon="bookmark" color="green" />
                <x-button.circle icon="bookmark" color="emerald" />
                <x-button.circle icon="bookmark" color="teal" />
                <x-button.circle icon="bookmark" color="cyan" />
                <x-button.circle icon="bookmark" color="sky" />
                <x-button.circle icon="bookmark" color="blue" />
                <x-button.circle icon="bookmark" color="indigo" />
                <x-button.circle icon="bookmark" color="violet" />
                <x-button.circle icon="bookmark" color="purple" />
                <x-button.circle icon="bookmark" color="fuchsia" />
                <x-button.circle icon="bookmark" color="pink" />
                <x-button.circle icon="bookmark" color="rose" />
                <x-button.circle icon="bookmark" color="black" />
                <x-button.circle icon="bookmark" color="white" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Light Variations" anchor="circle-light-variations">
        <x-preview language="blade" :contents="$circleLight">
            <div class="gap-2 space-y-2">
                <x-button.circle icon="bookmark" light />
                <x-button.circle icon="bookmark" color="secondary" light />
                <x-button.circle icon="bookmark" color="slate" light />
                <x-button.circle icon="bookmark" color="gray" light />
                <x-button.circle icon="bookmark" color="zinc" light />
                <x-button.circle icon="bookmark" color="neutral" light />
                <x-button.circle icon="bookmark" color="stone" light />
                <x-button.circle icon="bookmark" color="red" light />
                <x-button.circle icon="bookmark" color="orange" light />
                <x-button.circle icon="bookmark" color="amber" light />
                <x-button.circle icon="bookmark" color="yellow" light />
                <x-button.circle icon="bookmark" color="lime" light />
                <x-button.circle icon="bookmark" color="green" light />
                <x-button.circle icon="bookmark" color="emerald" light />
                <x-button.circle icon="bookmark" color="teal" light />
                <x-button.circle icon="bookmark" color="cyan" light />
                <x-button.circle icon="bookmark" color="sky" light />
                <x-button.circle icon="bookmark" color="blue" light />
                <x-button.circle icon="bookmark" color="indigo" light />
                <x-button.circle icon="bookmark" color="violet" light />
                <x-button.circle icon="bookmark" color="purple" light />
                <x-button.circle icon="bookmark" color="fuchsia" light />
                <x-button.circle icon="bookmark" color="pink" light />
                <x-button.circle icon="bookmark" color="rose" light />
                <x-button.circle icon="bookmark" color="black" light />
                <x-button.circle icon="bookmark" color="white" light />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Outline Variations" anchor="circle-outline-variations">
        <x-preview language="blade" :contents="$circleOutline">
            <div class="gap-2 space-y-2">
                <x-button.circle icon="bookmark" outline />
                <x-button.circle icon="bookmark" color="secondary" outline />
                <x-button.circle icon="bookmark" color="slate" outline />
                <x-button.circle icon="bookmark" color="gray" outline />
                <x-button.circle icon="bookmark" color="zinc" outline />
                <x-button.circle icon="bookmark" color="neutral" outline />
                <x-button.circle icon="bookmark" color="stone" outline />
                <x-button.circle icon="bookmark" color="red" outline />
                <x-button.circle icon="bookmark" color="orange" outline />
                <x-button.circle icon="bookmark" color="amber" outline />
                <x-button.circle icon="bookmark" color="yellow" outline />
                <x-button.circle icon="bookmark" color="lime" outline />
                <x-button.circle icon="bookmark" color="green" outline />
                <x-button.circle icon="bookmark" color="emerald" outline />
                <x-button.circle icon="bookmark" color="teal" outline />
                <x-button.circle icon="bookmark" color="cyan" outline />
                <x-button.circle icon="bookmark" color="sky" outline />
                <x-button.circle icon="bookmark" color="blue" outline />
                <x-button.circle icon="bookmark" color="indigo" outline />
                <x-button.circle icon="bookmark" color="violet" outline />
                <x-button.circle icon="bookmark" color="purple" outline />
                <x-button.circle icon="bookmark" color="fuchsia" outline />
                <x-button.circle icon="bookmark" color="pink" outline />
                <x-button.circle icon="bookmark" color="rose" outline />
                <x-button.circle icon="bookmark" color="black" outline />
                <x-button.circle icon="bookmark" color="white" outline />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Flat Variations" anchor="circle-flat-variations">
        <x-preview language="blade" :contents="$circleFlat">
            <div class="gap-2 space-y-2">
                <x-button.circle icon="bookmark" flat />
                <x-button.circle icon="bookmark" color="secondary" flat />
                <x-button.circle icon="bookmark" color="slate" flat />
                <x-button.circle icon="bookmark" color="gray" flat />
                <x-button.circle icon="bookmark" color="zinc" flat />
                <x-button.circle icon="bookmark" color="neutral" flat />
                <x-button.circle icon="bookmark" color="stone" flat />
                <x-button.circle icon="bookmark" color="red" flat />
                <x-button.circle icon="bookmark" color="orange" flat />
                <x-button.circle icon="bookmark" color="amber" flat />
                <x-button.circle icon="bookmark" color="yellow" flat />
                <x-button.circle icon="bookmark" color="lime" flat />
                <x-button.circle icon="bookmark" color="green" flat />
                <x-button.circle icon="bookmark" color="emerald" flat />
                <x-button.circle icon="bookmark" color="teal" flat />
                <x-button.circle icon="bookmark" color="cyan" flat />
                <x-button.circle icon="bookmark" color="sky" flat />
                <x-button.circle icon="bookmark" color="blue" flat />
                <x-button.circle icon="bookmark" color="indigo" flat />
                <x-button.circle icon="bookmark" color="violet" flat />
                <x-button.circle icon="bookmark" color="purple" flat />
                <x-button.circle icon="bookmark" color="fuchsia" flat />
                <x-button.circle icon="bookmark" color="pink" flat />
                <x-button.circle icon="bookmark" color="rose" flat />
                <x-button.circle icon="bookmark" color="black" flat />
                <x-button.circle icon="bookmark" color="white" flat />
            </div>
        </x-preview>
    </x-section>
</x-layout>
