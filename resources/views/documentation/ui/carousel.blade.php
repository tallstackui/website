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
    <x-section
        title="Thumbnails"
        new
        description="An option to render a row of small square tiles below the slides."
    >
        <div class="space-y-4">
            <x-preview
                language="blade"
                :background="false"
                :contents="$thumbnails"
            >
                <x-carousel
                    :images="[
                        ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
                        ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
                        ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
                    ]"
                    thumbnails
                />
            </x-preview>
            <p>
                Clicking a tile moves the carousel to that slide and restarts
                the autoplay timer, exactly like the dot indicators. The tile of
                the current slide carries a primary ring and
                <x-block>aria-current="true"</x-block>
                , the other tiles carry a subtle gray ring. The strip already
                shows the position, so
                <x-block>thumbnails</x-block>
                implies
                <x-block>without-indicators</x-block>
                . The tiles follow the
                <x-block>shuffle</x-block>
                order and
                <x-block>round</x-block>
                applies to them the same way it applies to the slides.
            </p>
            <x-preview
                language="blade"
                :background="false"
                :contents="$thumbnailsLimit"
            >
                <x-carousel
                    :images="[
                        ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
                        ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
                        ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
                        ['src' => url('assets/images/wallpapers/4.jpg'), 'alt' => 'Wallpaper 4'],
                        ['src' => url('assets/images/wallpapers/5.jpg'), 'alt' => 'Wallpaper 5'],
                        ['src' => url('assets/images/wallpapers/6.jpg'), 'alt' => 'Wallpaper 6'],
                        ['src' => url('assets/images/wallpapers/7.jpg'), 'alt' => 'Wallpaper 7'],
                        ['src' => url('assets/images/wallpapers/8.jpg'), 'alt' => 'Wallpaper 8'],
                        ['src' => url('assets/images/wallpapers/9.jpg'), 'alt' => 'Wallpaper 9'],
                    ]"
                    thumbnails
                    :limit="5"
                    round="xl"
                />
            </x-preview>
            <p>
                <x-block>limit</x-block>
                caps the number of tiles, six by default. When the carousel
                holds more images than the limit, the last tile keeps its image
                under a
                <x-block>+N</x-block>
                overlay counting the images left out of the strip. Clicking it
                moves to that image and the arrows keep going from there. While
                the current slide sits beyond the visible tiles, the last tile
                keeps the highlight.
            </p>
            <x-preview
                language="blade"
                :background="false"
                :contents="$thumbnailsWithoutHighlight"
            >
                <x-carousel
                    :images="[
                        ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
                        ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
                        ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
                    ]"
                    thumbnails
                    without-highlight
                />
            </x-preview>
            <p>
                <x-block>without-highlight</x-block>
                drops the primary ring, so every tile shares the inactive look
                while
                <x-block>aria-current</x-block>
                keeps marking the current slide for assistive technology.
            </p>
            <x-preview
                language="blade"
                :background="false"
                :contents="$thumbnailsAutoplay"
            >
                <x-carousel
                    :images="[
                        ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
                        ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
                        ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
                    ]"
                    thumbnails
                    autoplay
                    :interval="5"
                    stop-on-hover
                >
                    <x-slot:footer>
                        <p class="mt-2 text-sm text-gray-500">
                            Click a thumbnail to jump to that photo.
                        </p>
                    </x-slot>
                </x-carousel>
            </x-preview>
            <p>
                The strip sits between the slides and the
                <x-block>footer</x-block>
                slot.
            </p>
            <x-warning class="mt-4">
                <x-block>limit</x-block>
                and
                <x-block>without-highlight</x-block>
                require
                <x-block>thumbnails</x-block>
                , and
                <x-block>limit</x-block>
                must be at least
                <x-block>2</x-block>
            </x-warning>
            <x-warning info class="mt-4">
                You can turn the strip on for every carousel, and set the
                default
                <x-block>limit</x-block>
                and
                <x-block>without-highlight</x-block>
                , in the
                <x-refer doc="configuration">configuration file.</x-refer>
                The inline attributes always win, so
                <x-block>:thumbnails="false"</x-block>
                hides the strip on a single carousel.
                <x-block>without-highlight</x-block>
                is only read when the strip renders, so a carousel without
                <x-block>thumbnails</x-block>
                ignores it instead of throwing.
            </x-warning>
            <x-code
                language="php"
                :contents="$thumbnailsConfiguration"
                disable-copy
            />
        </div>
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
        <div class="space-y-4">
            <x-preview
                language="blade"
                :background="false"
                :contents="$events"
            >
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
            <x-table
                :headers="[
                    ['index' => 'event', 'label' => 'Event'],
                    ['index' => 'detail', 'label' => 'Detail'],
                    ['index' => 'fired', 'label' => 'Fired when'],
                ]"
                :rows="[
                    ['event' => 'expand', 'detail' => '{ image }', 'fired' => 'The lightbox opens'],
                    ['event' => 'collapse', 'detail' => '{ image: null }', 'fired' => 'The lightbox closes'],
                    ['event' => 'next', 'detail' => '{ current, image }', 'fired' => 'The carousel or lightbox steps forward'],
                    ['event' => 'previous', 'detail' => '{ current, image }', 'fired' => 'The carousel or lightbox steps backward'],
                ]"
            >
                @interact("column_detail", $row)
                    <x-block>{{ $row["detail"] }}</x-block>
                @endinteract

                @interact("column_event", $row)
                    <x-block>{{ $row["event"] }}</x-block>
                @endinteract
            </x-table>
        </div>
    </x-section>
</x-layout>
