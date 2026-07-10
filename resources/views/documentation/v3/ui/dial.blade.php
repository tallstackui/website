@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content :ai="['Dial' => 'dial/main', 'Dial Items' => 'dial/items']">
    <x-slot:title>
        Dial
    </x-slot:title>
    <x-slot:description>
        Dial component.
    </x-slot:description>
    <x-slot:customization>
        <livewire:customization :$customization component="Dial\Main" title="Dial" />
        <livewire:customization :customization="$customizationItems" component="Dial\Items" title="Dial Items" />
    </x-slot:customization>
    <x-section title="Concept" disable-copy>
        <p>
            The <x-block>dial</x-block> component is a speed dial, also known as a Floating Action Button (FAB).
            It renders a fixed-position button in one of the screen corners that, when activated, reveals
            a set of action items. Each action item is defined using the <x-block>dial.items</x-block> component
            inside the main <x-block>dial</x-block> tag. Because the component uses fixed positioning,
            only one dial should be used per page.
        </p>
        <p>
            Clicking any action item automatically closes the dial. When the dial opens, its items
            animate in from the direction it expands toward — rising from a bottom corner, dropping
            from a top corner, or sliding sideways when <x-block>horizontal</x-block>.
        </p>
    </x-section>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic" frame="v3/ui/dial/basic" :height="380" />
    </x-section>
    <x-section title="Positions">
        <div class="space-y-4">
            <p>
                You can control which corner of the screen the dial appears in using the <x-block>position</x-block> attribute.
                The default position is <x-block>bottom-right</x-block>.
            </p>
            <x-preview language="blade" :contents="$positions" frame="v3/ui/dial/positions" :height="380" />
        </div>
    </x-section>
    <x-section title="Horizontal">
        <div class="space-y-4">
            <p>
                By default, items fan out vertically from the main button. Use the <x-block>horizontal</x-block>
                attribute to display them in a horizontal row instead:
            </p>
            <x-preview language="blade" :contents="$horizontal" frame="v3/ui/dial/horizontal" :height="320" />
        </div>
    </x-section>
    <x-section title="Hover Mode">
        <div class="space-y-4">
            <p>
                By default, the dial opens on click. Use the <x-block>hover</x-block> attribute
                to reveal items when the user hovers over the main button:
            </p>
            <x-preview language="blade" :contents="$hover" frame="v3/ui/dial/hover" :height="380" />
        </div>
    </x-section>
    <x-section title="Labels">
        <div class="space-y-4">
            <p>
                Each <x-block>dial.items</x-block> accepts a <x-block>label</x-block> attribute
                that displays a tooltip-style text next to the item, helping users identify each action.
            </p>
            <x-preview language="blade" :contents="$labels" frame="v3/ui/dial/labels" :height="460" />
            <x-warning>
                The label is not mandatory.
            </x-warning>
        </div>
    </x-section>
    <x-section title="Without Tooltip">
        <div class="space-y-4">
            <p>
                If you prefer to hide all labels at once, use the <x-block>without-tooltip</x-block>
                attribute on the main <x-block>dial</x-block> component:
            </p>
            <x-preview language="blade" :contents="$withoutTooltip" frame="v3/ui/dial/without-tooltip" :height="380" />
        </div>
    </x-section>
    <x-section title="Icon">
        <div class="space-y-4">
            <p>
                The main button displays a <x-block>plus</x-block> icon by default, which rotates 45 degrees
                when the dial is open. You can change it using the <x-block>icon</x-block> attribute:
            </p>
            <x-preview language="blade" :contents="$icon" frame="v3/ui/dial/icon" :height="320" />
        </div>
    </x-section>
    <x-section title="Prevent Rotation">
        <div class="space-y-4">
            <p>
                By default, the main button icon rotates 45 degrees when the dial opens.
                Use the <x-block>prevent-rotate</x-block> attribute to keep the icon
                static, which is useful when the icon is not meant to morph (for example,
                a menu or ellipsis icon):
            </p>
            <x-preview language="blade" :contents="$preventRotate" frame="v3/ui/dial/prevent-rotate" :height="320" />
        </div>
    </x-section>
    <x-section title="Square Variation">
        <div class="space-y-4">
            <p>
                Use the <x-block>square</x-block> attribute to render the main
                button and items with square corners instead of a full circle.
            </p>
            <x-preview language="blade" :contents="$square" frame="v3/ui/dial/square" :height="380" />
        </div>
    </x-section>
    <x-section title="Links">
        <div class="space-y-4">
            <p>
                Each <x-block>dial.items</x-block> can act as a link by providing the <x-block>href</x-block> attribute.
                When set, the item renders as an anchor tag instead of a button:
            </p>
            <x-preview language="blade" :contents="$links" frame="v3/ui/dial/links" :height="320" />
            <p>
                You can also use the <x-block>navigate</x-block> or <x-block>navigate-hover</x-block>
                attributes for <a href="https://livewire.laravel.com/docs/navigate" target="_blank" class="underline">Livewire SPA navigation</a>:
            </p>
            <x-preview language="blade" :contents="$linksNavigate" frame="v3/ui/dial/links-navigate" :height="320" />
        </div>
    </x-section>
    <x-section title="Size Variations">
        <x-preview language="blade" :contents="$sizes" frame="v3/ui/dial/sizes" :height="480" />
    </x-section>
    <x-section title="Color Variations">
        <div class="space-y-4">
            <p>
                The <x-block>color</x-block> attribute changes the main button color.
                All TallStackUI colors are available:
            </p>
            <x-preview language="blade" :contents="$colors" frame="v3/ui/dial/colors" :height="380" />
        </div>
    </x-section>
    <x-section title="Item Colors">
        <div class="space-y-4">
            <p>
                While <x-block>Color Variations</x-block> colors the main button, each
                <x-block>dial.items</x-block> can have its own color through the <x-block>color</x-block>
                attribute, optionally combined with a <x-block>style</x-block> (<x-block>solid</x-block>,
                <x-block>light</x-block>, or <x-block>outline</x-block>). Items without a
                <x-block>color</x-block> keep the default neutral appearance.
            </p>
            <x-preview language="blade" :contents="$itemColors" frame="v3/ui/dial/item-colors" :height="460" />
        </div>
    </x-section>
</x-layout>
