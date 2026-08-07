<?php

namespace App\Enums\Examples\Ui;

class Carousel
{
    public const string BASIC = <<<'HTML'
    <!-- Basic array -->
    <x-carousel :images="[
        ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
        ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
        ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
    ]" />

    <!-- Also accept Laravel collection -->
    <x-carousel :images="collect([
        ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
        ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
        ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
    ])" />
    HTML;

    public const string ROUND = <<<'HTML'
    <x-carousel :images="[
        ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
        ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
        ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
    ]" round />
    HTML;

    public const string COVER = <<<'HTML'
    <!-- Using a dedicated attribute -->
    <x-carousel :images="[
        ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
        ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
        ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
    ]" :cover="2" />

    <!-- Setting per file -->
    <x-carousel :images="[
        ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
        ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2', 'cover' => true],
        ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
    ]" />
    HTML;

    public const string SHUFFLE = <<<'HTML'
    <x-carousel :images="[
        ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
        ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
        ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
    ]" shuffle />
    HTML;

    public const string AUTOPLAY = <<<'HTML'
    <x-carousel :images="[
        ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
        ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
        ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
    ]" autoplay />

    <!-- You can use "interval" to control the time in seconds. -->
    <x-carousel ... autoplay interval="2" />
    HTML;

    public const string AUTOPLAY_STOP_ON_HOVER = <<<'HTML'
    <x-carousel :images="[
        ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
        ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
        ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
    ]" autoplay stop-on-hover />
    HTML;

    public const string AUTOPLAY_WITHOUT_LOOP = <<<'HTML'
    <x-carousel :images="[
        ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
        ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
        ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
    ]" autoplay without-loop />
    HTML;

    public const string INDICATORS = <<<'HTML'
    <x-carousel :images="[
        ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
        ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
        ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
    ]" without-indicators />
    HTML;

    public const string TITLE_DESCRIPTION = <<<'HTML'
    <x-carousel :images="[
        [
            'src' => url('assets/images/wallpapers/1.jpg'),
            'alt' => 'Wallpaper 1',
            'title' => 'Image 1',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
        ],
        [
            'src' => url('assets/images/wallpapers/2.jpg'),
            'alt' => 'Wallpaper 2',
            'title' => 'Image 2',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
        ],
        [
            'src' => url('assets/images/wallpapers/3.jpg'),
            'alt' => 'Wallpaper 3',
            'title' => 'Image 3',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
        ],
    ]" />
    HTML;

    public const string CLICKABLE = <<<'HTML'
    <!-- When clickable is set, clicking any image opens it in a fullscreen
         lightbox with a close button at the top-right. Esc and clicking
         outside the image also close it. -->
    <x-carousel :images="[
        ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
        ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
        ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
    ]" clickable />

    <!-- The lightbox dispatches expand/collapse events on the carousel root.
         $event.detail will receive: {image: object|null} -->
    <x-carousel :images="[...]" clickable
        x-on:expand="alert('Lightbox opened: ' + $event.detail.image.alt)"
        x-on:collapse="alert('Lightbox closed')" />
    HTML;

    public const string CAPTION = <<<'HTML'
    <x-carousel clickable caption="overlay" :images="$images" />
    HTML;

    public const string CAPTION_FOOTER = <<<'HTML'
    <x-carousel clickable caption="footer" :images="$images" />
    HTML;

    public const string NAVIGABLE = <<<'HTML'
    <x-carousel :images="[
        ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
        ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
        ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
    ]" clickable navigable />
    HTML;

    public const string NAVIGABLE_CAPTION = <<<'HTML'
    <x-carousel clickable navigable caption="overlay" :images="[
        [
            'src' => url('assets/images/wallpapers/1.jpg'),
            'alt' => 'Wallpaper 1',
            'title' => 'Image 1',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
        ],
        [
            'src' => url('assets/images/wallpapers/2.jpg'),
            'alt' => 'Wallpaper 2',
            'title' => 'Image 2',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
        ],
        [
            'src' => url('assets/images/wallpapers/3.jpg'),
            'alt' => 'Wallpaper 3',
            'title' => 'Image 3',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
        ],
    ]" />
    HTML;

    public const string NAVIGABLE_WITHOUT_LOOP = <<<'HTML'
    <x-carousel :images="[
        ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
        ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
        ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
    ]" clickable navigable without-loop />
    HTML;

    public const string ASPECT = <<<'HTML'
    <x-carousel :images="[
        ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
        ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
        ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
    ]" wrapper="aspect-[3/1]" />
    HTML;

    public const string SLOTS = <<<'HTML'
    <x-carousel :images="[
        ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
        ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
        ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
    ]">
        <x-slot:header>
            Header
        </x-slot:header>
        <x-slot:footer>
            Footer
        </x-slot:footer>
    </x-carousel>
    HTML;

    public const string EVENTS = <<<'HTML'
    <!-- The "next" and "previous" events fire both for the main carousel view
         and for in-lightbox navigation when "navigable" is enabled. The same
         listeners cover both cases without changes.
         $event.detail will receive: {current: integer, image: object{current image}} -->

    <x-carousel :images="[
        ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
        ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
        ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
    ]" x-on:next="alert('Navigated to the next image')"
       x-on:previous="alert('Navigated to the previous image')" />

    <!-- "expand" and "collapse" fire only on the actual open/close transitions
         of the lightbox — not on each step of the in-lightbox navigation. Use
         "next" / "previous" to track navigation inside the lightbox. -->
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->carousel()
        ->block('block', 'classes');
    HTML;
}
