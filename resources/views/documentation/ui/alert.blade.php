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
    <x-section>
        <x-preview title="Basic Usage"
                   language="blade"
                   :contents="$basic">
            <x-alert>
                TallStackUi
            </x-alert>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Title"
                   language="blade"
                   :contents="$title">
            <x-alert title="TallStackUi">
                TallStackUi
            </x-alert>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Closeable"
                   description="An option to allow the user to hide the alert"
                   language="blade"
                   :contents="$closeable">
            <x-alert title="TallStackUi" closeable>
                TallStackUi
            </x-alert>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Icon Slot"
                   description="An option to use an icon when title is not defined"
                   language="blade"
                   :contents="$icon">
            <x-alert icon="cog">
                TallStackUi
            </x-alert>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Pulse Effect"
                   language="blade"
                   :contents="$pulse">
            <x-alert icon="cog" pulse>
                TallStackUi
            </x-alert>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Color Variations"
                   language="blade"
                   :contents="$colors">
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
    <x-section>
        <x-preview title="Translucent Variations"
                   language="blade"
                   :contents="$translucents">
            <div class="space-y-2">
                <x-alert title="TallStackUi" text="Primary" translucent />
                <x-alert title="TallStackUi" text="Secondary" color="secondary" translucent />
                <x-alert title="TallStackUi" text="Slate" color="slate" translucent />
                <x-alert title="TallStackUi" text="Gray" color="gray" translucent />
                <x-alert title="TallStackUi" text="Zinc" color="zinc" translucent />
                <x-alert title="TallStackUi" text="Neutral" color="neutral" translucent />
                <x-alert title="TallStackUi" text="Stone" color="stone" translucent />
                <x-alert title="TallStackUi" text="Red" color="red" translucent />
                <x-alert title="TallStackUi" text="Orange" color="orange" translucent />
                <x-alert title="TallStackUi" text="Amber" color="amber" translucent />
                <x-alert title="TallStackUi" text="Yellow" color="yellow" translucent />
                <x-alert title="TallStackUi" text="Lime" color="lime" translucent />
                <x-alert title="TallStackUi" text="Green" color="green" translucent />
                <x-alert title="TallStackUi" text="Emerald" color="emerald" translucent />
                <x-alert title="TallStackUi" text="Teal" color="teal" translucent />
                <x-alert title="TallStackUi" text="Cyan" color="cyan" translucent />
                <x-alert title="TallStackUi" text="Sky" color="sky" translucent />
                <x-alert title="TallStackUi" text="Blue" color="blue" translucent />
                <x-alert title="TallStackUi" text="Indigo" color="indigo" translucent />
                <x-alert title="TallStackUi" text="Violet" color="violet" translucent />
                <x-alert title="TallStackUi" text="Purple" color="purple" translucent />
                <x-alert title="TallStackUi" text="Fuchsia" color="fuchsia" translucent />
                <x-alert title="TallStackUi" text="Pink" color="pink" translucent />
                <x-alert title="TallStackUi" text="Rose" color="rose" translucent />
                <x-alert title="TallStackUi" text="Black" color="black" translucent />
                <x-alert title="TallStackUi" text="White" color="white" translucent />
            </div>
        </x-preview>
    </x-section>
</x-layout>
