@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content>
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
    </x-section>
    <x-section title="Basic Usage">
        <x-code language="blade" :contents="$basic" />
    </x-section>
    <x-section title="Positions">
        <div class="space-y-4">
            <p>
                You can control which corner of the screen the dial appears in using the <x-block>position</x-block> attribute.
                The default position is <x-block>bottom-right</x-block>.
            </p>
            <x-code language="blade" :contents="$positions" />
        </div>
    </x-section>
    <x-section title="Horizontal">
        <div class="space-y-4">
            <p>
                By default, items fan out vertically from the main button. Use the <x-block>horizontal</x-block>
                attribute to display them in a horizontal row instead:
            </p>
            <x-code language="blade" :contents="$horizontal" />
        </div>
    </x-section>
    <x-section title="Hover Mode">
        <div class="space-y-4">
            <p>
                By default, the dial opens on click. Use the <x-block>hover</x-block> attribute
                to reveal items when the user hovers over the main button:
            </p>
            <x-code language="blade" :contents="$hover" />
        </div>
    </x-section>
    <x-section title="Labels">
        <div class="space-y-4">
            <p>
                Each <x-block>dial.items</x-block> accepts a <x-block>label</x-block> attribute
                that displays a tooltip-style text next to the item, helping users identify each action:
            </p>
            <x-code language="blade" :contents="$labels" />
        </div>
    </x-section>
    <x-section title="Without Tooltip">
        <div class="space-y-4">
            <p>
                If you prefer to hide all labels at once, use the <x-block>without-tooltip</x-block>
                attribute on the main <x-block>dial</x-block> component:
            </p>
            <x-code language="blade" :contents="$withoutTooltip" />
        </div>
    </x-section>
    <x-section title="Icon">
        <div class="space-y-4">
            <p>
                The main button displays a <x-block>plus</x-block> icon by default, which rotates 45 degrees
                when the dial is open. You can change it using the <x-block>icon</x-block> attribute:
            </p>
            <x-code language="blade" :contents="$icon" />
        </div>
    </x-section>
    <x-section title="Square Variation">
        <div class="space-y-4">
            <p>
                Use the <x-block>square</x-block> attribute to render the main
                button and items with square corners instead of a full circle.
            </p>
            <x-code language="blade" :contents="$square" />
        </div>
    </x-section>
    <x-section title="Links">
        <div class="space-y-4">
            <p>
                Each <x-block>dial.items</x-block> can act as a link by providing the <x-block>href</x-block> attribute.
                When set, the item renders as an anchor tag instead of a button:
            </p>
            <x-code language="blade" :contents="$links" />
            <p>
                You can also use the <x-block>navigate</x-block> or <x-block>navigate-hover</x-block>
                attributes for <a href="https://livewire.laravel.com/docs/navigate" target="_blank" class="underline">Livewire SPA navigation</a>:
            </p>
            <x-code language="blade" :contents="$linksNavigate" />
        </div>
    </x-section>
    <x-section title="Size Variations">
        <x-code language="blade" :contents="$sizes" />
    </x-section>
    <x-section title="Color Variations">
        <div class="space-y-4">
            <p>
                The <x-block>color</x-block> attribute changes the main button color.
                All TallStackUI colors are available:
            </p>
            <x-code language="blade" :contents="$colors" />
        </div>
    </x-section>
</x-layout>
