<x-layout>
    <x-slot:title>
        Avatar
    </x-slot:title>
    <x-slot:description>
        Avatar component.
    </x-slot:description>
    <x-section>
        <x-code-preview title="Basic Usage"
                        language="blade"
                        :contents="$basic">
            <x-avatar label="TS" />
        </x-code-preview>
    </x-section>
    <x-section>
        <x-code-preview title="Color Variations"
                        description="You can use any color from the TailwindCSS palette."
                        language="blade"
                        :contents="$colors">
            <x-avatar label="TS" color="secondary" />
            <x-avatar label="TS" color="orange" />
            <x-avatar label="TS" color="sky" />
        </x-code-preview>
    </x-section>
    <x-section>
        <x-code-preview title="Size Variations"
                        language="blade"
                        :contents="$sizes">
            <x-avatar label="SM" sm />
            <x-avatar label="MD" md />
            <x-avatar label="LG" lg />
        </x-code-preview>
    </x-section>
    <x-section>
        <x-code-preview title="Square Variations"
                        language="blade"
                        :contents="$square">
            <x-avatar label="TS" sm square />
            <x-avatar label="TS" md square />
            <x-avatar label="TS" lg square />
        </x-code-preview>
    </x-section>
    <x-section class="space-y-4">
        <x-code-preview title="Modelable"
                        description="An option to generate a UI Avatar from a model based on name property."
                        language="blade"
                        :contents="$modelable">
            <x-avatar.modelable :model="auth()->user()" />
        </x-code-preview>
        <x-code-preview title="Modelable Custom Property"
                        description="An option to generate a UI Avatar from a model based on a property different than name."
                        language="blade"
                        :contents="$modelableCustomized">
            <x-avatar.modelable :model="auth()->user()" property="email" />
        </x-code-preview>
        <x-code-preview title="Customizing Colors"
                        description="An option to generate a UI Avatar from a model based customizing the colors."
                        language="blade"
                        :contents="$modelableCustomizedColors">
            <x-avatar.modelable :model="auth()->user()" property="email" background="ff0000" color="f2f2f2" />
        </x-code-preview>
    </x-section>
    <x-section>
        <x-code-preview title="Placeholder"
                        description="An option generate avatar with a svg placeholder with any color from the TailwindCSS palette."
                        language="blade"
                        :contents="$placeholder">
            <x-avatar />
            <x-avatar color="secondary" />
            <x-avatar color="orange" />
            <x-avatar color="sky" />
            <x-avatar color="blue" />
        </x-code-preview>
    </x-section>
</x-layout>
