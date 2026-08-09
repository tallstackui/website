@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout
    :$content
    :ai="['Avatar' => 'avatar', 'Avatar Group' => 'avatar/group']"
>
    <x-slot:title>Avatar</x-slot>
    <x-slot:description>Avatar component.</x-slot>
    <x-slot:customization>
        <livewire:customization :$customization component="Avatar" />
    </x-slot>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-avatar text="TS" />
        </x-preview>
    </x-section>
    <x-section title="Color Variations">
        <x-preview language="blade" :contents="$colors">
            <div class="gap-2 space-y-2">
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
                <x-avatar text="TS" color="mauve" />
                <x-avatar text="TS" color="olive" />
                <x-avatar text="TS" color="mist" />
                <x-avatar text="TS" color="taupe" />
                <x-avatar text="TS" color="black" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Size Variations">
        <x-preview language="blade" :contents="$sizes">
            <x-avatar text="XS" xs />
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
    <x-section
        title="Placeholder"
        description="An option generate avatar with a svg placeholder."
    >
        <x-preview language="blade" :contents="$placeholder">
            <div class="gap-2 space-y-2">
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
                <x-avatar color="mauve" />
                <x-avatar color="olive" />
                <x-avatar color="mist" />
                <x-avatar color="taupe" />
                <x-avatar color="black" />
            </div>
        </x-preview>
    </x-section>
    <x-section
        title="Borderless"
        description="An option to remove the default border."
    >
        <x-preview language="blade" :contents="$borderless">
            <x-avatar color="primary" borderless />
        </x-preview>
    </x-section>
    <x-separator text="Modelable" />
    <x-section title="Modelable">
        <x-slot:description>
            An option to generate a
            <a href="https://ui-avatars.com/" class="underline" target="_blank">
                UI Avatar
            </a>
            from a model based on name property.
        </x-slot>
        <x-preview language="blade" :contents="$modelable">
            <x-avatar :model="auth()->user()" color="fff" />
        </x-preview>
    </x-section>
    <x-section title="Custom Property">
        <x-slot:description>
            Generate a
            <a href="https://ui-avatars.com/" class="underline" target="_blank">
                UI Avatar
            </a>
            from a model based on a property different from name.
        </x-slot>
        <x-preview language="blade" :contents="$modelableCustomized">
            <x-avatar :model="auth()->user()" property="email" color="fff" />
        </x-preview>
    </x-section>
    <x-section title="Customizing Colors">
        <x-slot:description>
            Generate a
            <a href="https://ui-avatars.com/" class="underline" target="_blank">
                UI Avatar
            </a>
            from a model based customizing the colors.
        </x-slot>
        <x-preview language="blade" :contents="$modelableCustomizedColors">
            <x-avatar
                :model="auth()->user()"
                property="email"
                background="ff0000"
                color="fff"
            />
        </x-preview>
    </x-section>
    <x-section title="Other Options">
        <x-slot:description>
            Interact with all other
            <a href="https://ui-avatars.com/" class="underline" target="_blank">
                UI Avatar
            </a>
            configuration options.
        </x-slot>
        <x-preview language="blade" :contents="$modelableOptions">
            <x-avatar
                :model="auth()->user()"
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
    <x-separator text="Image" />
    <x-section title="Image" description="An option to use an image as avatar.">
        <div class="space-y-4">
            <x-preview language="blade" :contents="$image">
                <x-avatar image="https://i.pravatar.cc/300" xs />
                <x-avatar image="https://i.pravatar.cc/300" sm />
                <x-avatar image="https://i.pravatar.cc/300" md />
                <x-avatar image="https://i.pravatar.cc/300" lg />
            </x-preview>
            <p>
                You can also set the image via
                <x-block>x-bind:src</x-block>
                from AlpineJS:
            </p>
            <x-code language="blade" :contents="$imageBindSrc" />
        </div>
    </x-section>
    <x-section title="Default Alt Text">
        <x-preview language="blade" :contents="$imageAlt">
            <x-avatar
                image="https://i.pravatar.cc/300"
                text="Taylor Otwell, Creator of Laravel"
            />
        </x-preview>
    </x-section>
    <x-section title="Group">
        <x-preview language="blade" :contents="$avatarGroup">
            <x-avatar.group>
                <x-avatar image="https://i.pravatar.cc/300" borderless />
                <x-avatar image="https://i.pravatar.cc/200" borderless />
                <x-avatar image="https://i.pravatar.cc/100" borderless />
            </x-avatar.group>
        </x-preview>
    </x-section>
    <x-section
        title="Group Reverse"
        description="An option to invert the avatar overlap layering."
    >
        <x-preview language="blade" :contents="$avatarGroupReverse">
            <x-avatar.group reverse>
                <x-avatar text="A" color="indigo" />
                <x-avatar text="B" color="emerald" />
                <x-avatar text="C" color="amber" />
                <x-avatar text="D" color="pink" />
                <x-avatar text="E" color="sky" />
            </x-avatar.group>
        </x-preview>
    </x-section>
    <x-section
        title="Presence"
        description="An option to indicate the presence status of the avatar."
    >
        <x-preview language="blade" :contents="$presence">
            <x-avatar image="https://i.pravatar.cc/300" presence />
            <x-avatar image="https://i.pravatar.cc/300" presence pulse />
        </x-preview>
    </x-section>
    <x-section title="Presence Color">
        <x-preview language="blade" :contents="$presenceColors">
            <x-avatar
                image="https://i.pravatar.cc/30"
                presence
                presence-color="green"
            />
            <x-avatar
                image="https://i.pravatar.cc/50"
                presence
                presence-color="red"
            />
        </x-preview>
    </x-section>
    <x-section title="Presence Positions">
        <x-preview language="blade" :contents="$presencePositions">
            <x-avatar
                image="https://i.pravatar.cc/500"
                presence
                presence-position="right-top"
            />
            <x-avatar
                image="https://i.pravatar.cc/500"
                presence
                presence-position="right-bottom"
            />
            <x-avatar
                image="https://i.pravatar.cc/500"
                presence
                presence-position="left-top"
            />
            <x-avatar
                image="https://i.pravatar.cc/500"
                presence
                presence-position="left-bottom"
            />
        </x-preview>
    </x-section>
</x-layout>
