@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content ai="carousel">
    <x-slot:title>Carousel</x-slot>
    <x-slot:description>Carousel component.</x-slot>
    <x-slot:customization>
        <livewire:customization :$customization component="Carousel" />
    </x-slot>
    <x-section title="Basic Usage">
        <x-preview language="blade" :background="false" :contents="$basic">
            <x-carousel
                :images="[
                    ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
                    ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
                    ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
                ]"
            />
        </x-preview>
    </x-section>
    <x-section title="Round">
        <x-preview language="blade" :background="false" :contents="$round">
            <x-carousel
                :images="[
                    ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
                    ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
                    ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
                ]"
                round
            />
        </x-preview>
    </x-section>
    <x-section title="Different Cover Image">
        <x-preview language="blade" :background="false" :contents="$cover">
            <x-carousel
                :images="[
                    ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
                    ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
                    ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
                ]"
                :cover="2"
            />
        </x-preview>
    </x-section>
    <x-section
        title="Shuffle"
        description="An option to shuffle the images in the carousel."
    >
        <x-preview language="blade" :background="false" :contents="$shuffle">
            <x-carousel
                :images="[
                    ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
                    ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
                    ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
                ]"
                shuffle
            />
        </x-preview>
    </x-section>
    <x-section title="Autoplay">
        <x-preview language="blade" :background="false" :contents="$autoplay">
            <x-carousel
                :images="[
                    ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
                    ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
                    ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
                ]"
                autoplay
                interval="2"
            />
        </x-preview>
    </x-section>
    <x-section title="Autoplay, Stop on Hover">
        <x-preview
            language="blade"
            :background="false"
            :contents="$autoplayStopOnHover"
        >
            <x-carousel
                :images="[
                    ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
                    ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
                    ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
                ]"
                autoplay
                interval="2"
                stop-on-hover
            />
        </x-preview>
    </x-section>
    <x-section title="Autoplay, Without Loop">
        <x-preview
            language="blade"
            :background="false"
            :contents="$autoplayWithoutLoop"
        >
            <x-carousel
                :images="[
                    ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
                    ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
                    ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
                ]"
                autoplay
                interval="2"
                without-loop
            />
        </x-preview>
    </x-section>
    <x-section title="Without Indicators">
        <x-preview
            language="blade"
            :background="false"
            :contents="$indicators"
        >
            <x-carousel
                :images="[
                    ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
                    ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
                    ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
                ]"
                without-indicators
            />
        </x-preview>
    </x-section>
    <x-section title="Image Title & Description">
        <x-preview
            language="blade"
            :background="false"
            :contents="$titleDescription"
        >
            <x-carousel
                :images="[
                    ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1', 'title' => 'Image 1', 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'],
                    ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2', 'title' => 'Image 2', 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'],
                    ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3', 'title' => 'Image 3', 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'],
                ]"
            />
        </x-preview>
    </x-section>
    <x-section
        title="Clickable"
        description="An option to allow the images to be expanded when clicked."
    >
        <x-preview
            language="blade"
            :background="false"
            :contents="$clickable"
        >
            <x-carousel
                :images="[
                    ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
                    ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
                    ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
                ]"
                clickable
            />
        </x-preview>
    </x-section>
    <x-section
        title="Clickable Caption"
        description="An option to display a title and description in the lightbox."
    >
        <div class="space-y-4">
            <x-preview
                language="blade"
                :background="false"
                :contents="$caption"
            >
                <x-carousel
                    clickable
                    caption="overlay"
                    :images="[
                        ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1', 'title' => 'Image 1', 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'],
                        ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2', 'title' => 'Image 2', 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'],
                        ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3', 'title' => 'Image 3', 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'],
                    ]"
                />
            </x-preview>
            <p>
                You can also set
                <x-block>caption="footer"</x-block>
                to display the title and description out of the image.
            </p>
            <x-preview
                language="blade"
                :background="false"
                :contents="$captionFooter"
            >
                <x-carousel
                    clickable
                    caption="footer"
                    :images="[
                        ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1', 'title' => 'Image 1', 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'],
                        ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2', 'title' => 'Image 2', 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'],
                        ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3', 'title' => 'Image 3', 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'],
                    ]"
                />
            </x-preview>
        </div>
    </x-section>
    <x-section
        title="Clickable Navigable"
        description="An option to browse the gallery from inside the lightbox."
    >
        <div class="space-y-4">
            <x-preview
                language="blade"
                :background="false"
                :contents="$navigable"
            >
                <x-carousel
                    :images="[
                        ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
                        ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
                        ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
                    ]"
                    clickable
                    navigable
                />
            </x-preview>
            <x-warning>
                The
                <x-block>navigable</x-block>
                prop requires
                <x-block>clickable</x-block>
                .
            </x-warning>
        </div>
    </x-section>
    <x-section title="Clickable Navigable, Caption">
        <x-preview
            language="blade"
            :background="false"
            :contents="$navigableCaption"
        >
            <x-carousel
                clickable
                navigable
                caption="overlay"
                :images="[
                    ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1', 'title' => 'Image 1', 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'],
                    ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2', 'title' => 'Image 2', 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'],
                    ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3', 'title' => 'Image 3', 'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'],
                ]"
            />
        </x-preview>
    </x-section>
    <x-section title="Clickable Navigable, Without Loop">
        <x-preview
            language="blade"
            :background="false"
            :contents="$navigableWithoutLoop"
        >
            <x-carousel
                :images="[
                    ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
                    ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
                    ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
                ]"
                clickable
                navigable
                without-loop
            />
        </x-preview>
    </x-section>
    <x-section title="Fixed Aspect Radio">
        <div class="space-y-4">
            <x-preview
                language="blade"
                :background="false"
                :contents="$aspect"
            >
                <x-carousel
                    :images="[
                        ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
                        ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
                        ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
                    ]"
                    wrapper="aspect-[3/1]"
                />
            </x-preview>
            <x-warning>
                Remember to rebuild your assets to tell TailwindCSS to build
                these aspect ratio classes.
            </x-warning>
        </div>
    </x-section>
    <x-section title="Slots">
        <x-preview language="blade" :background="false" :contents="$slots">
            <x-carousel
                :images="[
                    ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
                    ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
                    ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
                ]"
            >
                <x-slot:header>Header</x-slot>
                <x-slot:footer>Footer</x-slot>
            </x-carousel>
        </x-preview>
    </x-section>
    <x-section title="Events">
        <x-preview language="blade" :background="false" :contents="$events">
            <x-carousel
                :images="[
                    ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
                    ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
                    ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
                ]"
                x-on:next="alert('Navigated to the next image')"
                x-on:previous="alert('Navigated to the previous image')"
            />
        </x-preview>
    </x-section>
</x-layout>
