<x-layout>
    <x-slot:title>
        Alert
    </x-slot:title>
    <x-slot:description>
        Alert components similar to the Bootstrap alerts.
    </x-slot:description>
    <x-section>
        <x-code-preview title="Basic Usage"
                        language="blade"
                        :contents="$basic">
            <x-alert>
                TallStackUi
            </x-alert>
        </x-code-preview>
    </x-section>
    <x-section>
        <x-code-preview title="Title"
                        language="blade"
                        :contents="$title">
            <x-alert title="TallStackUi">
                TallStackUi
            </x-alert>
        </x-code-preview>
    </x-section>
    <x-section>
        <x-code-preview title="Closeable"
                        description="An option to allow the user to hide the alert"
                        language="blade"
                        :contents="$closeable">
            <x-alert title="TallStackUi" closeable>
                TallStackUi
            </x-alert>
        </x-code-preview>
    </x-section>
    <x-section>
        <x-code-preview title="Color Variations"
                        description="You can use any color from the TailwindCSS palette."
                        language="blade"
                        :contents="$colors">
            <div class="space-y-2">
                <x-alert title="TallStackUi">
                    TallStackUi
                </x-alert>
                <x-alert title="TallStackUi" color="yellow">
                    TallStackUi
                </x-alert>
                <x-alert title="TallStackUi" color="red">
                    TallStackUi
                </x-alert>
                <x-alert title="TallStackUi" color="sky">
                    TallStackUi
                </x-alert>
                <x-alert title="TallStackUi" color="orange">
                    TallStackUi
                </x-alert>
            </div>
        </x-code-preview>
    </x-section>
    <x-section>
        <x-code-preview title="Translucent Variations"
                        language="blade"
                        :contents="$translucents">
            <div class="space-y-2">
                <x-alert title="TallStackUi" translucent>
                    TallStackUi
                </x-alert>
                <x-alert title="TallStackUi" color="yellow" translucent>
                    TallStackUi
                </x-alert>
                <x-alert title="TallStackUi" color="red" translucent>
                    TallStackUi
                </x-alert>
                <x-alert title="TallStackUi" color="sky" translucent>
                    TallStackUi
                </x-alert>
                <x-alert title="TallStackUi" color="orange" translucent>
                    TallStackUi
                </x-alert>
            </div>
        </x-code-preview>
    </x-section>
</x-layout>
