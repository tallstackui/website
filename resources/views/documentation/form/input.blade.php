@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content ai="form/input">
    <x-slot:title>Form Input</x-slot>
    <x-slot:description>Form input component.</x-slot>
    <x-slot:customization>
        <livewire:customization :$customization component="Form\Input" />
    </x-slot>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-input />
        </x-preview>
        <x-warning class="mt-4">
            The input type will be set to
            <b>text</b>
            when not specified.
        </x-warning>
    </x-section>
    <x-section title="Label & Hint">
        <div class="space-y-4">
            <x-preview language="blade" :contents="$labelHint">
                <x-input label="Name" hint="Insert your name" />
            </x-preview>
            <p>
                You can also set raw HTML in the
                <x-block>label</x-block>
                attribute:
            </p>
            <x-code language="blade" :contents="$labelRawHtml" />
        </div>
    </x-section>
    <x-section
        title="Required Label Indicator"
        description="An option to display an asterisk indicating that the field is required."
    >
        <x-preview language="blade" :contents="$asterisk">
            <x-input label="Name *" hint="Insert your name" />
        </x-preview>
    </x-section>
    <x-section title="Icon Slot">
        <x-preview language="blade" :contents="$icons">
            <div class="space-y-2">
                <x-input label="Name" icon="users" />
                <x-input label="Name" icon="cog" position="right" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Prefix & Suffix">
        <x-preview language="blade" :contents="$prefixSuffix">
            <div class="space-y-2">
                <x-input prefix="https://" label="Domain" />
                <x-input suffix="@gmail.com" label="E-mail" />
            </div>
        </x-preview>
        <x-warning class="mt-4">
            Using a prefix or suffix will disable browser autocomplete as long
            as this is not explicitly defined.
        </x-warning>
    </x-section>
    <x-section title="Button Support">
        <div class="space-y-4">
            <p>
                You can place buttons inside the
                <x-block>prefix</x-block>
                and
                <x-block>suffix</x-block>
                slots by adding the
                <x-block>button</x-block>
                attribute. This activates addon mode, where the button sits
                flush against the input with a unified ring and focus style:
            </p>
            <x-preview language="blade" :contents="$buttonAddonSuffix">
                <x-input label="Search">
                    <x-slot:suffix button>
                        <x-button text="Go" sm />
                    </x-slot>
                </x-input>
            </x-preview>
            <p>The same works for the prefix side:</p>
            <x-preview language="blade" :contents="$buttonAddonPrefix">
                <x-input label="URL">
                    <x-slot:prefix button>
                        <x-button text="https" sm />
                    </x-slot>
                </x-input>
            </x-preview>
            <p>You can also place buttons on both sides:</p>
            <x-preview language="blade" :contents="$buttonAddonBoth">
                <x-input label="Amount">
                    <x-slot:prefix button>
                        <x-button icon="minus" sm />
                    </x-slot>
                    <x-slot:suffix button>
                        <x-button icon="plus" sm />
                    </x-slot>
                </x-input>
            </x-preview>
        </div>
    </x-section>
    <x-section title="Clearable">
        <x-preview language="blade" :contents="$clearable">
            <div class="space-y-2">
                <x-input value="TallStackUI" clearable />
            </div>
        </x-preview>
    </x-section>
    <x-section
        title="Strip Zeros"
        description="An option to remove the first zero characters"
    >
        <x-preview language="blade" :contents="$stripZeros">
            <x-input strip-zeros />
        </x-preview>
    </x-section>
    <x-section
        title="Invalidate"
        description="An option to not show validation error message."
    >
        <div class="space-y-4">
            <x-preview language="blade" :contents="$invalidate">
                <x-input label="Name" invalidate />
            </x-preview>
            <x-warning class="mt-4">
                This option is available for all components that can display
                form validation errors, basically all form components.
                Additionally, you can enable the "invalidate" state globally by
                setting it via the
                <x-refer doc="configuration">configuration file.</x-refer>
                This way, all components that can display validation errors will
                no longer display them.
            </x-warning>
        </div>
    </x-section>
</x-layout>
