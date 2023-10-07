<x-layout>
    <x-slot:title>
        Button
    </x-slot:title>
    <x-slot:description>
        Button components.
    </x-slot:description>
    <x-section>
        <x-preview title="Basic Button"
                   language="blade"
                   :contents="$basic">
            <x-button>TallStackUi</x-button>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Href Usage"
                   language="blade"
                   :contents="$href">
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
            <div class="inline-flex items-center space-x-2">
                <x-button xs>TallStackUi</x-button>
                <x-button sm>TallStackUi</x-button>
                <x-button md>TallStackUi</x-button>
                <x-button lg>TallStackUi</x-button>
            </div>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Color Variations"
                   description="You can use any color from the TailwindCSS palette."
                   language="blade"
                   :contents="$colors">
            <div class="inline-flex items-center space-x-2">
                <x-button>TallStackUi</x-button>
                <x-button color="orange">TallStackUi</x-button>
                <x-button color="sky">TallStackUi</x-button>
                <x-button color="pink">TallStackUi</x-button>
            </div>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Outline Variations"
                   language="blade"
                   :contents="$outlines">
            <div class="inline-flex items-center space-x-2">
                <x-button outline>TallStackUi</x-button>
                <x-button color="orange" outline>TallStackUi</x-button>
                <x-button color="sky" outline>TallStackUi</x-button>
                <x-button color="pink" outline>TallStackUi</x-button>
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
        <x-preview title="Circle Href Button"
                   language="blade"
                   :contents="$circleHref">
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
        <x-preview title="Color Variations"
                   description="You can use any color from the TailwindCSS palette."
                   language="blade"
                   :contents="$circleColors">
            <x-button.circle text="TS"/>
            <x-button.circle text="TS" color="pink"/>
            <x-button.circle text="TS" color="orange"/>
            <x-button.circle text="TS" color="sky"/>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Outline Variations"
                   language="blade"
                   :contents="$circleOutlines">
            <x-button.circle text="TS" outline/>
            <x-button.circle text="TS" color="pink" outline/>
            <x-button.circle text="TS" color="orange" outline/>
            <x-button.circle text="TS" color="sky" outline/>
        </x-preview>
    </x-section>
</x-layout>
