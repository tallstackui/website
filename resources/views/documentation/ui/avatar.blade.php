<x-layout>
    <x-slot:title>
        Avatar
    </x-slot:title>
    <x-slot:description>
        Avatar component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="avatar" />
    </x-slot:personalization>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-avatar text="TS" />
        </x-preview>
    </x-section>
    <x-section title="Color Variations">
        <x-preview language="blade" :contents="$colors">
            <div class="space-y-2 gap-2">
                <x-avatar text="TS" color="primary" />
                <x-avatar text="TS" color="secondary" />
                <x-avatar text="TS" color="slate" />
                <x-avatar text="TS" color="gray" />
                <x-avatar text="TS" color="zinc" />
                <x-avatar text="TS" color="neutral" />
                <x-avatar text="TS" color="stone" />
                <x-avatar text="TS" color="red" />
                <x-avatar text="TS" color="orange" />
                <x-avatar text="TS" color="amber" />
                <x-avatar text="TS" color="yellow" />
                <x-avatar text="TS" color="lime" />
                <x-avatar text="TS" color="green" />
                <x-avatar text="TS" color="emerald" />
                <x-avatar text="TS" color="teal" />
                <x-avatar text="TS" color="cyan" />
                <x-avatar text="TS" color="sky" />
                <x-avatar text="TS" color="blue" />
                <x-avatar text="TS" color="indigo" />
                <x-avatar text="TS" color="violet" />
                <x-avatar text="TS" color="purple" />
                <x-avatar text="TS" color="fuchsia" />
                <x-avatar text="TS" color="pink" />
                <x-avatar text="TS" color="rose" />
                <x-avatar text="TS" color="black" />
                <x-avatar text="TS" color="white" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Size Variations">
        <x-preview language="blade" :contents="$sizes">
            <x-avatar text="SM" sm />
            <x-avatar text="MD" md />
            <x-avatar text="LG" lg />
        </x-preview>
    </x-section>
    <x-section title="Square Variations">
        <x-preview language="blade" :contents="$square">
            <x-avatar text="TS" square />
        </x-preview>
    </x-section>
    <x-section title="Placeholder" description="An option generate avatar with a svg placeholder.">
        <x-preview language="blade" :contents="$placeholder">
            <div class="space-y-2 gap-2">
                <x-avatar color="primary" />
                <x-avatar color="secondary" />
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
                <x-avatar color="black" />
                <x-avatar color="white" />
            </div>
        </x-preview>
    </x-section>
    <x-separator text="Modelable" />
    <x-section title="Modelable">
        <x-slot:description>
            An option to generate a <a href="https://ui-avatars.com/" class="underline" target="_blank">UI Avatar</a> from a model based on name property.
        </x-slot:description>
        <x-preview language="blade" :contents="$modelable">
            <x-avatar :model="auth()->user()" color="fff" />
        </x-preview>
    </x-section>
    <x-section title="Custom Property">
        <x-slot:description>
            Generate a <a href="https://ui-avatars.com/" class="underline" target="_blank">UI Avatar</a> from a model based on a property different from name.
        </x-slot:description>
        <x-preview language="blade" :contents="$modelableCustomized">
            <x-avatar :model="auth()->user()" property="email" color="fff" />
        </x-preview>
    </x-section>
    <x-section title="Customizing Colors">
        <x-slot:description>
            Generate a <a href="https://ui-avatars.com/" class="underline" target="_blank">UI Avatar</a> from a model based customizing the colors.
        </x-slot:description>
        <x-preview language="blade" :contents="$modelableCustomizedColors">
            <x-avatar :model="auth()->user()" property="email" background="ff0000" color="fff" />
        </x-preview>
    </x-section>
    <x-section title="Other Options">
        <x-slot:description>
            Interact with all other <a href="https://ui-avatars.com/" class="underline" target="_blank">UI Avatar</a> configuration options.
        </x-slot:description>
        <x-preview language="blade" :contents="$modelableOptions">
            <x-avatar :model="auth()->user()"
                      property="email"
                      background="ff0000"
                      color="fff"
                      :options="[
                          'uppercase' => false,
                          'rounded' => true,
                      ]"
            />
        </x-preview>
    </x-section>
    <x-slot:navigation>
        <x-slot:back>
            <x-navigation.link href="{{ route('documentation.ui.alert') }}" text="Alert" back />
        </x-slot:back>
        <x-slot:next>
            <x-navigation.link href="{{ route('documentation.ui.badge') }}" text="Badge" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
