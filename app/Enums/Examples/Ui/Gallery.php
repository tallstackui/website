<?php

declare(strict_types=1);

namespace App\Enums\Examples\Ui;

class Gallery
{
    public const string BASIC = <<<'HTML'
    <x-gallery :images="[
        ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1', 'title' => 'Wallpaper 1', 'description' => 'The first one'],
        ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2', 'title' => 'Wallpaper 2', 'description' => 'The second one'],
        ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3', 'title' => 'Wallpaper 3', 'description' => 'The third one'],
        ['src' => url('assets/images/wallpapers/4.jpg'), 'alt' => 'Wallpaper 4', 'title' => 'Wallpaper 4', 'description' => 'The fourth one'],
        ['src' => url('assets/images/wallpapers/5.jpg'), 'alt' => 'Wallpaper 5', 'title' => 'Wallpaper 5', 'description' => 'The fifth one'],
        ['src' => url('assets/images/wallpapers/6.jpg'), 'alt' => 'Wallpaper 6', 'title' => 'Wallpaper 6', 'description' => 'The sixth one'],
        ['src' => url('assets/images/wallpapers/7.jpg'), 'alt' => 'Wallpaper 7', 'title' => 'Wallpaper 7', 'description' => 'The seventh one'],
        ['src' => url('assets/images/wallpapers/8.jpg'), 'alt' => 'Wallpaper 8', 'title' => 'Wallpaper 8', 'description' => 'The eighth one'],
        ['src' => url('assets/images/wallpapers/9.jpg'), 'alt' => 'Wallpaper 9', 'title' => 'Wallpaper 9', 'description' => 'The ninth one'],
    ]" />
    HTML;

    public const string GRID = <<<'HTML'
    <!-- ratio can be one of them: square, video, portrait -->

    <x-gallery grid :columns="4" ratio="portrait" :images="$images" />
    HTML;

    public const string MASONRY = <<<'HTML'
    <!-- Supply width and height on each image here, or the layout shifts as they load -->

    <x-gallery masonry :columns="3" :images="$images" />
    HTML;

    public const string FEATURE = <<<'HTML'
    <!-- The cover is the entry flagged 'cover' => true, falling back to the first -->
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
    <!-- height can be one of them: 40, 60, 80 or 96 -->

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

    <!-- Stops at the first and last image -->
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
