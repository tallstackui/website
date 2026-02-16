@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content>
    <x-slot:title>
        Card
    </x-slot:title>
    <x-slot:description>
        Card component.
    </x-slot:description>
    <x-slot:customization>
        <livewire:customization :$customization component="Card" />
    </x-slot:customization>
    <x-section title="Basic Usage">
        <x-preview language="blade" :background="false" :contents="$basic">
            <x-card>
                TallStackUI
            </x-card>
        </x-preview>
    </x-section>
    <x-section title="Header Slot">
        <x-preview language="blade" :background="false" :contents="$header">
            <x-card header="Header">
                Body
            </x-card>
        </x-preview>
    </x-section>
    <x-section title="Footer Slot">
        <x-preview language="blade" :background="false" :contents="$footer">
            <x-card footer="Footer">
                Body
            </x-card>
        </x-preview>
    </x-section>
    <x-section title="Minimizable">
        <div class="space-y-4">
            <div>
                <x-preview language="blade" :background="false" :contents="$minimize">
                    <x-card header="TallStackUI" minimize>
                        Minimize
                    </x-card>
                </x-preview>
                <x-warning>
                    Since the icon is positioned in the header, you need to define a header to use minimize.
                </x-warning>
            </div>
            <div>
                <p>You can also mount as minimized:</p>
                <x-preview language="blade" :background="false" :contents="$minimizeFromMount">
                    <x-card header="TallStackUI" minimize initialize-minimized>
                        Initialized as minimized
                    </x-card>
                </x-preview>
            </div>
        </div>
    </x-section>
    <x-section title="Image">
        <x-preview language="blade" :background="false" :contents="$image">
            <div class="space-y-4">
                <x-card image="{{ url('assets/images/wallpapers/1.jpg') }}">
                    Image at top
                </x-card>
                <x-card position="bottom" image="{{ url('assets/images/wallpapers/2.jpg') }}">
                    Image at bottom
                </x-card>
            </div>
        </x-preview>
    </x-section>
    <x-section title="Color Variations">
        <x-preview language="blade" :background="false" :contents="$color">
            <div class="space-y-4">
                <x-card header="TallStackUI" color="primary">
                    Normal
                </x-card>
                <x-card header="TallStackUI" color="primary" light>
                    Normal, Light
                </x-card>
                <x-card header="TallStackUI" color="primary" bordered>
                    Bordered
                </x-card>
            </div>
        </x-preview>
        <x-warning>
            Just like the minimizeable option, the colors are only applied when the Card has a header.
        </x-warning>
    </x-section>
    <x-section title="Loading" description="An option to set the card in a loading state.">
        <x-preview language="blade" :contents="$loading">
            <livewire:documentation.ui.card />
        </x-preview>
        <p class="mt-4">Even if you use the <x-block>header</x-block> slot to set a raw HTML content the loading effect will be visible</p>
    </x-section>
</x-layout>
