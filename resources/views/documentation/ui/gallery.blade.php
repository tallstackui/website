@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }

    $images = [
        ["src" => url("assets/images/wallpapers/1.jpg"), "alt" => "Wallpaper 1", "title" => "Wallpaper 1", "description" => "The first one"],
        ["src" => url("assets/images/wallpapers/2.jpg"), "alt" => "Wallpaper 2", "title" => "Wallpaper 2", "description" => "The second one"],
        ["src" => url("assets/images/wallpapers/3.jpg"), "alt" => "Wallpaper 3", "title" => "Wallpaper 3", "description" => "The third one"],
        ["src" => url("assets/images/wallpapers/4.jpg"), "alt" => "Wallpaper 4", "title" => "Wallpaper 4", "description" => "The fourth one"],
    ];
@endphp

<x-layout :$content ai="gallery">
    <x-slot:title>Gallery</x-slot>
    <x-slot:description>Gallery component.</x-slot>
    <x-slot:customization>
        <livewire:customization :$customization component="Gallery" />
    </x-slot>
    <x-section title="Concept" disable-copy>
        An image gallery with three layouts and an opt-in lightbox. The layout
        is chosen by a boolean flag, and the flags are mutually exclusive.
        Without
        <x-block>clickable</x-block>
        the component emits no JavaScript at all.
    </x-section>
    <x-section title="Basic Usage" new>
        <x-preview language="blade" :contents="$basic">
            <x-gallery :images="$images" />
        </x-preview>
    </x-section>
    <x-section
        title="Grid"
        new
        description="Uniform tiles in a responsive grid. Tile shape comes from ratio: square, video or portrait."
    >
        <x-preview language="blade" :contents="$grid">
            <x-gallery grid :columns="4" ratio="portrait" :images="$images" />
        </x-preview>
    </x-section>
    <x-section
        title="Masonry"
        new
        description="Equal-width columns where each image keeps its natural height. Reading order runs down each column. ratio does not apply."
    >
        <x-preview language="blade" :contents="$masonry">
            <x-gallery masonry :columns="3" :images="$images" />
        </x-preview>
    </x-section>
    <x-section
        title="Feature"
        new
        description="One cover above a thumbnail row. When the array holds more images than limit, the last thumbnail gets a +N overlay."
    >
        <x-preview language="blade" :contents="$feature">
            <x-gallery feature :limit="3" :images="$images" />
        </x-preview>
    </x-section>
    <x-section
        title="Thumbnail Position"
        new
        description="Moves the row beside the cover. Below sm the thumbnails always wrap under it."
    >
        <x-preview language="blade" :contents="$thumbnails">
            <div class="space-y-6">
                <x-gallery
                    feature
                    thumbnails="left"
                    ratio="square"
                    :limit="4"
                    :images="$images"
                    class="max-w-md"
                />
                <x-gallery
                    feature
                    thumbnails="right"
                    ratio="square"
                    :limit="4"
                    :images="$images"
                    class="max-w-md"
                />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Round" new>
        <x-preview language="blade" :contents="$round">
            <x-gallery round :images="$images" />
        </x-preview>
    </x-section>
    <x-section
        title="Height"
        new
        description="Caps the tile area and scrolls inside it: 40, 60, 80 or 96. The slots stay outside the scrolling region."
    >
        <x-preview language="blade" :contents="$height">
            <x-gallery grid height="60" :columns="3" :images="$images" />
        </x-preview>
    </x-section>
    <x-section
        title="Clickable"
        new
        description="Expands a tile fullscreen through an overlay teleported to the body. Closes on Esc, on the backdrop and on the close button."
    >
        <x-preview language="blade" :contents="$clickable">
            <x-gallery clickable :images="$images" />
        </x-preview>
    </x-section>
    <x-section
        title="Caption"
        new
        description="overlay keeps the caption on the image, footer separates it onto its own row."
    >
        <x-preview language="blade" :contents="$caption">
            <div class="space-y-6">
                <x-gallery clickable caption="overlay" :images="$images" />
                <x-gallery clickable caption="footer" :images="$images" />
            </div>
        </x-preview>
    </x-section>
    <x-section
        title="Navigable"
        new
        description="Side arrows and the arrow keys inside the lightbox. without-loop stops the traversal at both ends."
    >
        <x-preview language="blade" :contents="$navigable">
            <div class="space-y-6">
                <x-gallery clickable navigable :images="$images" />
                <x-gallery
                    clickable
                    navigable
                    without-loop
                    :images="$images"
                />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Slots" new>
        <x-preview language="blade" :contents="$slots">
            <x-gallery :images="$images">
                <x-slot:header>Wallpapers</x-slot>
                <x-slot:footer>4 images</x-slot>
            </x-gallery>
        </x-preview>
    </x-section>
    <x-section
        title="Events"
        new
        description="Dispatched on the root element when clickable is enabled."
    >
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
            @interact("column_event", $row)
                <x-block>{{ $row["event"] }}</x-block>
            @endinteract
        </x-table>
    </x-section>
    <x-section title="Image Object" new>
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
    <x-section
        title="Performance"
        new
        description='Every tile carries loading="lazy", decoding="async" and content-visibility: auto. The last one lives in its own block and can be dropped.'
    >
        <x-code language="php" :contents="$performance" />
    </x-section>
    <x-section
        title="Validation"
        new
        description="Attributes passed to a layout that ignores them raise instead of being dropped."
    >
        <x-table
            :headers="[
                ['index' => 'rule', 'label' => 'Rule'],
            ]"
            :rows="[
                ['rule' => 'grid, masonry and feature cannot be used together'],
                ['rule' => 'columns cannot be used with feature'],
                ['rule' => 'limit can only be used with feature'],
                ['rule' => 'ratio cannot be used with masonry'],
                ['rule' => 'thumbnails can only be used with feature'],
                ['rule' => 'caption, navigable and without-loop require clickable'],
                ['rule' => 'columns must be between 2 and 6'],
                ['rule' => 'limit must be at least 2'],
                ['rule' => 'height must be 40, 60, 80 or 96'],
            ]"
        />
    </x-section>
</x-layout>
