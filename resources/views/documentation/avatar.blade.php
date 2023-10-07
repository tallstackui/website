<x-layout>
    <x-slot:title>
        Avatar
    </x-slot:title>
    <x-slot:description>
        Avatar component.
    </x-slot:description>
    <x-section>
        <x-preview title="Basic Usage"
                        language="blade"
                        :contents="$basic">
            <x-avatar label="TS" />
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Color Variations"
                   language="blade"
                   :contents="$colors">
            <div class="space-y-2 gap-2">
                <x-avatar label="TS" />
                <x-avatar label="TS" color="secondary" />
                <x-avatar label="TS" color="white" />
                <x-avatar label="TS" color="black" />
                <x-avatar label="TS" color="slate" />
                <x-avatar label="TS" color="gray" />
                <x-avatar label="TS" color="zinc" />
                <x-avatar label="TS" color="neutral" />
                <x-avatar label="TS" color="stone" />
                <x-avatar label="TS" color="red" />
                <x-avatar label="TS" color="orange" />
                <x-avatar label="TS" color="amber" />
                <x-avatar label="TS" color="yellow" />
                <x-avatar label="TS" color="lime" />
                <x-avatar label="TS" color="green" />
                <x-avatar label="TS" color="emerald" />
                <x-avatar label="TS" color="teal" />
                <x-avatar label="TS" color="cyan" />
                <x-avatar label="TS" color="sky" />
                <x-avatar label="TS" color="blue" />
                <x-avatar label="TS" color="indigo" />
                <x-avatar label="TS" color="violet" />
                <x-avatar label="TS" color="purple" />
                <x-avatar label="TS" color="fuchsia" />
                <x-avatar label="TS" color="pink" />
                <x-avatar label="TS" color="rose" />
            </div>
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Size Variations"
                   language="blade"
                   :contents="$sizes">
            <x-avatar label="SM" sm />
            <x-avatar label="MD" md />
            <x-avatar label="LG" lg />
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Square Variations"
                   language="blade"
                   :contents="$square">
            <x-avatar label="TS" sm square />
            <x-avatar label="TS" md square />
            <x-avatar label="TS" lg square />
        </x-preview>
    </x-section>
    <x-section class="space-y-4">
        <x-preview title="Modelable"
                   description="An option to generate a UI Avatar from a model based on name property."
                   language="blade"
                   :contents="$modelable">
            <x-avatar.modelable :model="auth()->user()" />
        </x-preview>
        <x-preview title="Modelable Custom Property"
                   description="An option to generate a UI Avatar from a model based on a property different than name."
                   language="blade"
                   :contents="$modelableCustomized">
            <x-avatar.modelable :model="auth()->user()" property="email" />
        </x-preview>
        <x-preview title="Customizing Colors"
                   description="An option to generate a UI Avatar from a model based customizing the colors."
                   language="blade"
                   :contents="$modelableCustomizedColors">
            <x-avatar.modelable :model="auth()->user()" property="email" background="ff0000" color="f2f2f2" />
        </x-preview>
    </x-section>
    <x-section>
        <x-preview title="Placeholder"
                   description="An option generate avatar with a svg placeholder with any color from the TailwindCSS palette."
                   language="blade"
                   :contents="$placeholder">
            <div class="space-y-2 gap-2">
                <x-avatar />
                <x-avatar color="secondary" />
                <x-avatar color="white" />
                <x-avatar color="black" />
                <x-avatar color="slate" />
                <x-avatar color="gray" />
                <x-avatar color="zinc" />
                <x-avatar color="neutral" />
                <x-avatar color="stone" />
                <x-avatar color="red" />
                <x-avatar color="orange" />
                <x-avatar color="amber" />
                <x-avatar color="yellow" />
                <x-avatar color="lime" />
                <x-avatar color="green" />
                <x-avatar color="emerald" />
                <x-avatar color="teal" />
                <x-avatar color="cyan" />
                <x-avatar color="sky" />
                <x-avatar color="blue" />
                <x-avatar color="indigo" />
                <x-avatar color="violet" />
                <x-avatar color="purple" />
                <x-avatar color="fuchsia" />
                <x-avatar color="pink" />
                <x-avatar color="rose" />
            </div>
        </x-preview>
    </x-section>
</x-layout>
