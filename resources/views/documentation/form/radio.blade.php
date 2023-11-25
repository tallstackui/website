<x-layout>
    <x-slot:title>
        Form Radio
    </x-slot:title>
    <x-slot:description>
        Form radio component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="radio" />
    </x-slot:personalization>
    <x-section>
        <x-preview title="Basic Usage"
                   language="blade"
                   :contents="$basic">
            <x-radio />
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Label"
                   language="blade"
                   :contents="$label">
            <div class="space-y-2">
                <x-radio label="Receive Alert" />
                <x-radio label="Receive Alert" position="left" />
            </div>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Size Variations"
                   language="blade"
                   :contents="$sizes">
            <div class="inline-flex space-x-2">
                <x-radio sm />
                <x-radio md />
                <x-radio lg />
            </div>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Color Variations"
                   language="blade"
                   :contents="$colors">
            <div class="space-y-2">
                <x-radio label="Primary" />
                <x-radio color="secondary" label="Secondary" />
                <x-radio color="slate" label="Slate" />
                <x-radio color="gray" label="Gray" />
                <x-radio color="zinc" label="Zinc" />
                <x-radio color="neutral" label="Neutral" />
                <x-radio color="stone" label="Stone" />
                <x-radio color="red" label="Red" />
                <x-radio color="orange" label="Orange" />
                <x-radio color="amber" label="Amber" />
                <x-radio color="yellow" label="Yellow" />
                <x-radio color="lime" label="Lime" />
                <x-radio color="green" label="Green" />
                <x-radio color="emerald" label="Emerald" />
                <x-radio color="teal" label="Teal" />
                <x-radio color="cyan" label="Cyan" />
                <x-radio color="sky" label="Sky" />
                <x-radio color="blue" label="Blue" />
                <x-radio color="indigo" label="Indigo" />
                <x-radio color="violet" label="Violet" />
                <x-radio color="purple" label="Purple" />
                <x-radio color="fuchsia" label="Fuchsia" />
                <x-radio color="pink" label="Pink" />
                <x-radio color="rose" label="Rose" />
                <x-radio color="black" label="Black" />
                <x-radio color="white" label="White" />
            </div>
        </x-preview>
    </x-section>
    <x-slot:navigation>
        <x-slot:back>
            <x-navigation.link href="{{ route('documentation.form.checkbox') }}" text="Form Checkbox" back />
        </x-slot:back>
        <x-slot:next>
            <x-navigation.link href="{{ route('documentation.form.toggle') }}" text="Form Toggle" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
