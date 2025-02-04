@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout>
    <x-slot:title>
        Carousel
    </x-slot:title>
    <x-slot:description>
        Carousel component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.v1.personalization :$personalization component="carousel" />
    </x-slot:personalization>
    <x-section title="Basic Usage">
        <x-preview language="blade" :background="false" :contents="$basic">
            <x-carousel :images="[
                ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
                ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
                ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
            ]" />
        </x-preview>
    </x-section>
    <x-section title="Different Cover Image">
        <x-preview language="blade" :background="false" :contents="$basic">
            <x-carousel :images="[
                ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
                ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
                ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
            ]" :cover="2" />
        </x-preview>
    </x-section>
    <x-section title="Round">
        <x-preview language="blade" :background="false" :contents="$basic">
            <x-carousel :images="[
                ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
                ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
                ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
            ]" round />
        </x-preview>
    </x-section>
    <x-section title="Autoplay">
        <x-preview language="blade" :background="false" :contents="$basic">
            <x-carousel :images="[
                ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
                ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
                ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
            ]" autoplay interval="2" />
        </x-preview>
    </x-section>
    <x-section title="Autoplay, Stop on Hover">
        <x-preview language="blade" :background="false" :contents="$basic">
            <x-carousel :images="[
                ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
                ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
                ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
            ]" autoplay interval="2" stop-on-hover />
        </x-preview>
    </x-section>
    <x-section title="Autoplay, Without Loop">
        <x-preview language="blade" :background="false" :contents="$basic">
            <x-carousel :images="[
                ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
                ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
                ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
            ]" autoplay interval="2" without-loop />
        </x-preview>
    </x-section>
    <x-section title="Without Indicators">
        <x-preview language="blade" :background="false" :contents="$basic">
            <x-carousel :images="[
                ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
                ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
                ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
            ]" without-indicators />
        </x-preview>
    </x-section>
    <x-section title="Image Title & Description">
        <x-preview language="blade" :background="false" :contents="$basic">
            <x-carousel :images="[
                ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1', 'title' => 'Image 1', 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'],
                ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2', 'title' => 'Image 2', 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'],
                ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3', 'title' => 'Image 3', 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'],
            ]" without-indicators />
        </x-preview>
    </x-section>
    <x-section title="Fixed Aspect Radio">
        <x-preview language="blade" :background="false" :contents="$basic">
            <x-carousel :images="[
                ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1', 'title' => 'Image 1', 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'],
                ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2', 'title' => 'Image 2', 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'],
                ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3', 'title' => 'Image 3', 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'],
            ]" wrapper="aspect-3/1" />
        </x-preview>
    </x-section>
</x-layout>
