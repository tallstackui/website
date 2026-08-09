@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout
    :$content
    :ai="['Dial' => 'dial/main', 'Dial Items' => 'dial/items']"
>
    <x-slot:title>Dial</x-slot>
    <x-slot:description>Dial component.</x-slot>
    <x-slot:customization>
        <livewire:customization
            :$customization
            component="Dial\Main"
            title="Dial"
        />
        <livewire:customization
            :customization="$customizationItems"
            component="Dial\Items"
            title="Dial Items"
        />
    </x-slot>
    <x-section title="Basic Usage">
        <x-preview
            language="blade"
            :contents="$basic"
            frame="ui/dial/basic"
            :height="380"
        />
    </x-section>
    <x-section title="Positions">
        <x-preview
            language="blade"
            :contents="$positions"
            frame="ui/dial/positions"
            :height="380"
        />
    </x-section>
    <x-section title="Horizontal">
        <x-preview
            language="blade"
            :contents="$horizontal"
            frame="ui/dial/horizontal"
            :height="320"
        />
    </x-section>
    <x-section title="Hover Mode">
        <x-preview
            language="blade"
            :contents="$hover"
            frame="ui/dial/hover"
            :height="380"
        />
    </x-section>
    <x-section title="Labels">
        <x-preview
            language="blade"
            :contents="$labels"
            frame="ui/dial/labels"
            :height="460"
        />
        <x-warning class="mt-4">The label is not mandatory.</x-warning>
    </x-section>
    <x-section title="Without Tooltip">
        <x-preview
            language="blade"
            :contents="$withoutTooltip"
            frame="ui/dial/without-tooltip"
            :height="380"
        />
    </x-section>
    <x-section title="Icon">
        <x-preview
            language="blade"
            :contents="$icon"
            frame="ui/dial/icon"
            :height="320"
        />
        <x-warning class="mt-4">
            You can use
            <x-block>prevent-rotate</x-block>
            to prevent the rotation of the icon.
        </x-warning>
    </x-section>
    <x-section title="Square Variation">
        <div class="space-y-4">
            <p>
                Use the
                <x-block>square</x-block>
                attribute to render the main button and items with square
                corners instead of a full circle.
            </p>
            <x-preview
                language="blade"
                :contents="$square"
                frame="ui/dial/square"
                :height="380"
            />
        </div>
    </x-section>
    <x-section title="Links">
        <div class="space-y-4">
            <x-preview
                language="blade"
                :contents="$links"
                frame="ui/dial/links"
                :height="320"
            />
            <p>
                You can also use the
                <x-block>navigate</x-block>
                or
                <x-block>navigate-hover</x-block>
                attributes for
                <a
                    href="https://livewire.laravel.com/docs/navigate"
                    target="_blank"
                    class="underline"
                >
                    Livewire SPA navigation
                </a>
                :
            </p>
            <x-preview
                language="blade"
                :contents="$linksNavigate"
                frame="ui/dial/links-navigate"
                :height="320"
            />
        </div>
    </x-section>
    <x-section title="Size Variations">
        <x-preview
            language="blade"
            :contents="$sizes"
            frame="ui/dial/sizes"
            :height="480"
        />
    </x-section>
    <x-section title="Color Variations">
        <x-preview
            language="blade"
            :contents="$colors"
            frame="ui/dial/colors"
            :height="380"
        />
    </x-section>
    <x-section title="Item Colors">
        <x-preview
            language="blade"
            :contents="$itemColors"
            frame="ui/dial/item-colors"
            :height="460"
        />
    </x-section>
</x-layout>
