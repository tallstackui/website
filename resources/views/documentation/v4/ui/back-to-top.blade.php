@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content ai="back-to-top">
    <x-slot:title>
        Back to Top
    </x-slot:title>
    <x-slot:description>
        Back to Top component.
    </x-slot:description>
    <x-slot:customization>
        <livewire:customization :$customization component="BackToTop" title="Back to Top" />
    </x-slot:customization>
    <x-section title="Concept" disable-copy>
        <p>
            The <x-block>back-to-top</x-block> component renders a fixed-position floating button that
            appears when the user scrolls down the page. Clicking it smoothly scrolls back to the top.
            By default, the button appears after scrolling 200px and uses a smooth scroll animation.
            You can also configure it to observe a specific element using the
            <a href="https://developer.mozilla.org/en-US/docs/Web/API/Intersection_Observer_API" target="_blank" class="underline">IntersectionObserver API</a>,
            showing the button when that element leaves the viewport.
        </p>
    </x-section>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic" frame="v3/ui/back-to-top" :height="420" />
    </x-section>
    <x-section title="Positions" disable-copy>
        <div class="space-y-4">
            <p>
                You can control which corner of the screen the button appears in using the
                <x-block>position</x-block> attribute. The default position is <x-block>bottom-right</x-block>.
            </p>
            <x-code language="blade" :contents="$positions" />
        </div>
    </x-section>
    <x-section title="Icon" disable-copy>
        <div class="space-y-4">
            <p>
                The button displays a <x-block>chevron-up</x-block> icon by default. You can change it
                using the <x-block>icon</x-block> attribute with any Heroicon name:
            </p>
            <x-code language="blade" :contents="$icon" />
        </div>
    </x-section>
    <x-section title="Square Variation" disable-copy>
        <div class="space-y-4">
            <p>
                Use the <x-block>square</x-block> attribute to render the button with rounded corners
                instead of a full circle:
            </p>
            <x-code language="blade" :contents="$square" />
        </div>
    </x-section>
    <x-section title="Size Variations" disable-copy>
        <x-code language="blade" :contents="$sizes" />
    </x-section>
    <x-section title="Color Variations" disable-copy>
        <div class="space-y-4">
            <p>
                The <x-block>color</x-block> attribute changes the button color. All TailwindCSS colors are available.
            </p>
            <x-code language="blade" :contents="$colors" />
        </div>
    </x-section>
    <x-section title="Anchor Observer" disable-copy>
        <div class="space-y-4">
            <p>
                Instead of relying on scroll position, you can pass a CSS selector to the
                <x-block>anchor</x-block> attribute. The component uses the IntersectionObserver API
                to detect when the observed element leaves the viewport, then shows the button:
            </p>
            <x-code language="blade" :contents="$anchor" />
        </div>
    </x-section>
    <x-section title="Immediate" disable-copy>
        <div class="space-y-4">
            <p>
                Use the <x-block>immediate</x-block> attribute to scroll back to the top instantly
                instead of using a smooth animation:
            </p>
            <x-code language="blade" :contents="$immediate" />
        </div>
    </x-section>
</x-layout>
