@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }

    $nine = [
        ["src" => url("assets/images/wallpapers/1.jpg"), "alt" => "Wallpaper 1", "title" => "Wallpaper 1", "description" => "The first one"],
        ["src" => url("assets/images/wallpapers/2.jpg"), "alt" => "Wallpaper 2", "title" => "Wallpaper 2", "description" => "The second one"],
        ["src" => url("assets/images/wallpapers/3.jpg"), "alt" => "Wallpaper 3", "title" => "Wallpaper 3", "description" => "The third one"],
        ["src" => url("assets/images/wallpapers/4.jpg"), "alt" => "Wallpaper 4", "title" => "Wallpaper 4", "description" => "The fourth one"],
        ["src" => url("assets/images/wallpapers/5.jpg"), "alt" => "Wallpaper 5", "title" => "Wallpaper 5", "description" => "The fifth one"],
        ["src" => url("assets/images/wallpapers/6.jpg"), "alt" => "Wallpaper 6", "title" => "Wallpaper 6", "description" => "The sixth one"],
        ["src" => url("assets/images/wallpapers/7.jpg"), "alt" => "Wallpaper 7", "title" => "Wallpaper 7", "description" => "The seventh one"],
        ["src" => url("assets/images/wallpapers/8.jpg"), "alt" => "Wallpaper 8", "title" => "Wallpaper 8", "description" => "The eighth one"],
        ["src" => url("assets/images/wallpapers/9.jpg"), "alt" => "Wallpaper 9", "title" => "Wallpaper 9", "description" => "The ninth one"],
    ];

    $eight = [
        ["src" => url("assets/images/wallpapers/1.jpg"), "alt" => "Wallpaper 1", "title" => "Wallpaper 1", "description" => "The first one"],
        ["src" => url("assets/images/wallpapers/2.jpg"), "alt" => "Wallpaper 2", "title" => "Wallpaper 2", "description" => "The second one"],
        ["src" => url("assets/images/wallpapers/3.jpg"), "alt" => "Wallpaper 3", "title" => "Wallpaper 3", "description" => "The third one"],
        ["src" => url("assets/images/wallpapers/4.jpg"), "alt" => "Wallpaper 4", "title" => "Wallpaper 4", "description" => "The fourth one"],
        ["src" => url("assets/images/wallpapers/5.jpg"), "alt" => "Wallpaper 5", "title" => "Wallpaper 5", "description" => "The fifth one"],
        ["src" => url("assets/images/wallpapers/6.jpg"), "alt" => "Wallpaper 6", "title" => "Wallpaper 6", "description" => "The sixth one"],
        ["src" => url("assets/images/wallpapers/7.jpg"), "alt" => "Wallpaper 7", "title" => "Wallpaper 7", "description" => "The seventh one"],
        ["src" => url("assets/images/wallpapers/8.jpg"), "alt" => "Wallpaper 8", "title" => "Wallpaper 8", "description" => "The eighth one"],
    ];
@endphp

<x-layout :$content ai="gallery">
    <x-slot:title>Gallery</x-slot>
    <x-slot:description>Gallery component.</x-slot>
    <x-slot:customization>
        <livewire:customization :$customization component="Gallery" />
    </x-slot>
    <x-section title="Basic Usage">
        <div class="space-y-4">
            <x-preview language="blade" :contents="$basic">
                <x-gallery :images="$nine" />
            </x-preview>
            <x-warning>All images are lazy loaded by default.</x-warning>
        </div>
    </x-section>
    <x-section
        title="Grid"
        description="An option to uniform tiles in a responsive grid."
    >
        <x-preview language="blade" :contents="$grid">
            <x-gallery grid :columns="4" ratio="portrait" :images="$eight" />
        </x-preview>
    </x-section>
    <x-section title="Masonry">
        <x-preview language="blade" :contents="$masonry">
            <x-gallery masonry :columns="3" :images="$nine" />
        </x-preview>
    </x-section>
    <x-section title="Feature" description="An option to feature an image">
        <x-preview language="blade" :contents="$feature">
            <x-gallery feature :limit="7" :images="$nine" />
        </x-preview>
    </x-section>
    <x-section title="Thumbnail Position">
        <x-preview language="blade" :contents="$thumbnails">
            <div class="space-y-6">
                <x-gallery
                    feature
                    thumbnails="left"
                    ratio="square"
                    :images="$nine"
                    class="max-w-xl"
                />
                <x-gallery
                    feature
                    thumbnails="right"
                    ratio="square"
                    :images="$nine"
                    class="max-w-xl"
                />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Round">
        <x-preview language="blade" :contents="$round">
            <x-gallery round :images="$nine" />
        </x-preview>
    </x-section>
    <x-section
        title="Height"
        description="An option to caps the tile area and scrolls inside it: 40, 60, 80 or 96."
    >
        <div class="space-y-4">
            <x-preview language="blade" :contents="$height">
                <x-gallery grid height="60" :columns="3" :images="$nine" />
            </x-preview>
            <x-warning>
                The
                <x-block>height</x-block>
                should be one of them: 40, 60, 80 or 96.
            </x-warning>
        </div>
    </x-section>
    <x-section title="Clickable">
        <x-preview language="blade" :contents="$clickable">
            <x-gallery clickable :images="$nine" />
        </x-preview>
    </x-section>
    <x-section title="Caption">
        <x-preview language="blade" :contents="$caption">
            <div class="space-y-6">
                <x-gallery clickable caption="overlay" :images="$nine" />
                <x-gallery clickable caption="footer" :images="$nine" />
            </div>
        </x-preview>
    </x-section>
    <x-section
        title="Navigable"
        description="Side arrows and the arrow keys inside the lightbox. without-loop stops the traversal at both ends."
    >
        <x-preview language="blade" :contents="$navigable">
            <div class="space-y-6">
                <x-gallery clickable navigable :images="$nine" />
                <x-gallery clickable navigable without-loop :images="$nine" />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Slots">
        <x-preview language="blade" :contents="$slots">
            <x-gallery :images="$nine">
                <x-slot:header>Wallpapers</x-slot>
                <x-slot:footer>4 images</x-slot>
            </x-gallery>
        </x-preview>
    </x-section>
    <x-section title="Events">
        <div class="space-y-4">
            <x-code language="blade" :contents="$events" />
            <x-table
                :headers="[
                    ['index' => 'event', 'label' => 'Event'],
                    ['index' => 'detail', 'label' => 'Detail'],
                    ['index' => 'fired', 'label' => 'Fired when'],
                ]"
                :rows="[
                    ['event' => 'expand', 'detail' => '{ image }', 'fired' => 'The lightbox opens'],
                    ['event' => 'collapse', 'detail' => '{ image: null }', 'fired' => 'The lightbox closes'],
                    ['event' => 'next', 'detail' => '{ current, image }', 'fired' => 'The lightbox steps forward'],
                    ['event' => 'previous', 'detail' => '{ current, image }', 'fired' => 'The lightbox steps backward'],
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
    <x-section title="Image Object">
        <x-table
            :headers="[
                ['index' => 'key', 'label' => 'Key'],
                ['index' => 'type', 'label' => 'Type'],
                ['index' => 'required', 'label' => 'Required'],
                ['index' => 'description', 'label' => 'Description'],
            ]"
            :rows="[
                ['key' => 'src', 'type' => 'string', 'required' => 'Yes', 'description' => 'Image source URL'],
                ['key' => 'alt', 'type' => 'string', 'required' => 'Yes', 'description' => 'Alt text for accessibility'],
                ['key' => 'title', 'type' => 'string', 'required' => 'No', 'description' => 'Lightbox caption title'],
                ['key' => 'description', 'type' => 'string', 'required' => 'No', 'description' => 'Lightbox caption description'],
                ['key' => 'width', 'type' => 'int', 'required' => 'No', 'description' => 'Intrinsic width, reserving space while the image loads'],
                ['key' => 'height', 'type' => 'int', 'required' => 'No', 'description' => 'Intrinsic height, reserving space while the image loads'],
                ['key' => 'url', 'type' => 'string', 'required' => 'No', 'description' => 'Makes the tile a link. Ignored when clickable is set'],
                ['key' => 'target', 'type' => 'string', 'required' => 'No', 'description' => 'Link target'],
                ['key' => 'cover', 'type' => 'bool', 'required' => 'No', 'description' => 'Marks this image as the cover in the feature layout'],
            ]"
        >
            @interact("column_key", $row)
                <x-block>{{ $row["key"] }}</x-block>
            @endinteract
        </x-table>
    </x-section>
</x-layout>
