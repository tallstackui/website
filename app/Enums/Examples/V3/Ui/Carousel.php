<?php

namespace App\Enums\Examples\V3\Ui;

class Carousel
{
    public const BASIC = <<<'HTML'
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

    public const ROUND = <<<'HTML'
    <x-carousel :images="[
        ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
        ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
        ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
    ]" round />
    HTML;

    public const COVER = <<<'HTML'
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

    public const SHUFFLE = <<<'HTML'
    <x-carousel :images="[
        ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
        ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
        ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
    ]" shuffle />
    HTML;

    public const AUTOPLAY = <<<'HTML'
    <x-carousel :images="[
        ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
        ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
        ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
    ]" autoplay />

    <!-- You can use "interval" to control the time in seconds. -->
    <x-carousel ... autoplay interval="2" />
    HTML;

    public const AUTOPLAY_STOP_ON_HOVER = <<<'HTML'
    <x-carousel :images="[
        ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
        ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
        ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
    ]" autoplay stop-on-hover />
    HTML;

    public const AUTOPLAY_WITHOUT_LOOP = <<<'HTML'
    <x-carousel :images="[
        ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
        ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
        ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
    ]" autoplay without-loop />
    HTML;

    public const INDICATORS = <<<'HTML'
    <x-carousel :images="[
        ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
        ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
        ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
    ]" without-indicators />
    HTML;

    public const TITLE_DESCRIPTION = <<<'HTML'
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

    public const ASPECT = <<<'HTML'
    <x-carousel :images="[
        ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
        ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
        ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
    ]" wrapper="aspect-[3/1]" />
    HTML;

    public const SLOTS = <<<'HTML'
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

    public const EVENTS = <<<'HTML'
    <!-- $event.detail will receive: {current: integer, image: object{current image}} -->

    <x-carousel :images="[
        ['src' => url('assets/images/wallpapers/1.jpg'), 'alt' => 'Wallpaper 1'],
        ['src' => url('assets/images/wallpapers/2.jpg'), 'alt' => 'Wallpaper 2'],
        ['src' => url('assets/images/wallpapers/3.jpg'), 'alt' => 'Wallpaper 3'],
    ]" x-on:next="alert('Navigated to the next image')"
       x-on:previous="alert('Navigated to the previous image')" />
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::customize()
        ->carousel()
        ->block('block', 'classes');
    HTML;
}
