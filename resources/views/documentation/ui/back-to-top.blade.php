@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content ai="back-to-top">
    <x-slot:title>Back to Top</x-slot>
    <x-slot:description>Back to Top component.</x-slot>
    <x-slot:customization>
        <livewire:customization
            :$customization
            component="BackToTop"
            title="Back to Top"
        />
    </x-slot>
    <x-section title="Basic Usage">
        <x-preview
            language="blade"
            :contents="$basic"
            frame="ui/back-to-top"
            :height="420"
        />
    </x-section>
    <x-section title="Positions" disable-copy>
        <x-code language="blade" :contents="$positions"/>
    </x-section>
    <x-section title="Icon" disable-copy>
        <div class="space-y-4">
            <p>
                The button displays a
                <x-block>chevron-up</x-block>
                icon by default. You can change it using the
                <x-block>icon</x-block>
                attribute:
            </p>
            <x-code language="blade" :contents="$icon"/>
        </div>
    </x-section>
    <x-section title="Square Variation" disable-copy>
        <div class="space-y-4">
            <p>
                Use the
                <x-block>square</x-block>
                attribute to render the button with rounded corners instead of a
                full circle:
            </p>
            <x-code language="blade" :contents="$square"/>
        </div>
    </x-section>
    <x-section title="Size Variations" disable-copy>
        <x-code language="blade" :contents="$sizes"/>
    </x-section>
    <x-section title="Color Variations" disable-copy>
        <x-code language="blade" :contents="$colors"/>
    </x-section>
    <x-section title="Anchor Observer" disable-copy>
        <div class="space-y-4">
            <p>
                Instead of relying on scroll position, you can pass a CSS
                selector to the
                <x-block>anchor</x-block>
                attribute. The component uses the IntersectionObserver API to
                detect when the observed element leaves the viewport, then shows
                the button:
            </p>
            <x-code language="blade" :contents="$anchor"/>
        </div>
    </x-section>
    <x-section title="Immediate" description="An option to scroll to top instantly without any animation." disable-copy>
        <x-code language="blade" :contents="$immediate"/>
    </x-section>
</x-layout>
