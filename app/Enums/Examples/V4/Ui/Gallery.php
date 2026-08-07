<?php

namespace App\Enums\Examples\V4\Ui;

class Gallery
{
    public const string BASIC = <<<'HTML'
    <x-gallery :images="[
        ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
        ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
        ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
        ['src' => url('assets/images/wallpapers/4.jpg'), 'alt' => 'Wallpaper 4'],
    ]" />
    HTML;

    public const string GRID = <<<'HTML'
    <x-gallery grid :columns="4" ratio="portrait" :images="$images" />
    HTML;

    public const string MASONRY = <<<'HTML'
    {{-- Supply width and height on each image here, or the layout shifts as they load --}}
    <x-gallery masonry :columns="3" :images="$images" />
    HTML;

    public const string FEATURE = <<<'HTML'
    {{-- The cover is the entry flagged 'cover' => true, falling back to the first --}}
    <x-gallery feature :limit="3" :images="$images" />
    HTML;

    public const string THUMBNAILS = <<<'HTML'
    <x-gallery feature thumbnails="left" ratio="square" :limit="4" :images="$images" class="max-w-md" />
    <x-gallery feature thumbnails="right" ratio="square" :limit="4" :images="$images" class="max-w-md" />
    HTML;

    public const string ROUND = <<<'HTML'
    <x-gallery round :images="$images" />
    HTML;

    public const string HEIGHT = <<<'HTML'
    <x-gallery grid height="60" :columns="3" :images="$images" />
    HTML;

    public const string CLICKABLE = <<<'HTML'
    <x-gallery clickable :images="$images" />
    HTML;

    public const string CAPTION = <<<'HTML'
    <x-gallery clickable caption="overlay" :images="$images" />
    <x-gallery clickable caption="footer" :images="$images" />
    HTML;

    public const string NAVIGABLE = <<<'HTML'
    <x-gallery clickable navigable :images="$images" />

    {{-- Stops at the first and last image --}}
    <x-gallery clickable navigable without-loop :images="$images" />
    HTML;

    public const string SLOTS = <<<'HTML'
    <x-gallery :images="$images">
        <x-slot:header>Wallpapers</x-slot:header>
        <x-slot:footer>4 images</x-slot:footer>
    </x-gallery>
    HTML;

    public const string EVENTS = <<<'HTML'
    <x-gallery clickable
               navigable
               :images="$images"
               x-on:expand="console.log($event.detail.image)"
               x-on:collapse="console.log('closed')"
               x-on:next="console.log($event.detail.current)"
               x-on:previous="console.log($event.detail.current)" />
    HTML;

    public const string PERFORMANCE = <<<'HTML'
    TallStackUi::customize()
        ->gallery()
        ->block('tile.performance', '');
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->gallery()
        ->block('block', 'classes');
    HTML;
}
