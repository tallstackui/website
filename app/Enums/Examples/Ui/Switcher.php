<?php

declare(strict_types=1);

namespace App\Enums\Examples\Ui;

class Switcher
{
    public const string BASIC = <<<'HTML'
    <x-switcher on="Following" off="Follow" />
    HTML;

    public const string ICONS = <<<'HTML'
    <!-- Icons only -->
    <x-switcher icon-when-on="speaker-x-mark" icon-when-off="speaker-wave" aria-label="Mute" />

    <!-- Text and icons -->
    <x-switcher on="Pause" off="Play" icon-when-on="pause" icon-when-off="play" />
    HTML;

    public const string POSITION = <<<'HTML'
    <x-switcher on="Pause" off="Play" icon-when-on="pause" icon-when-off="play" position="right" />
    HTML;

    public const string EFFECTS = <<<'HTML'
    <!-- Fade, the default -->
    <x-switcher icon-when-on="moon" icon-when-off="sun" aria-label="Dark mode" />

    <!-- Rotate -->
    <x-switcher icon-when-on="moon" icon-when-off="sun" rotate aria-label="Dark mode" />

    <!-- Flip -->
    <x-switcher icon-when-on="moon" icon-when-off="sun" flip aria-label="Dark mode" />
    HTML;

    public const string SIZES = <<<'HTML'
    <x-switcher xs on="Pause" off="Play" icon-when-on="pause" icon-when-off="play" />
    <x-switcher sm on="Pause" off="Play" icon-when-on="pause" icon-when-off="play" />
    <x-switcher md on="Pause" off="Play" icon-when-on="pause" icon-when-off="play" />
    <x-switcher lg on="Pause" off="Play" icon-when-on="pause" icon-when-off="play" />
    HTML;

    public const string SLOTS = <<<'HTML'
    <x-switcher aria-label="Like">
        <x-slot:on>
            <x-icon name="heart" solid class="h-6 w-6 text-red-500" />
        </x-slot:on>
        <x-slot:off>
            <x-icon name="heart" outline class="h-6 w-6" />
        </x-slot:off>
    </x-switcher>
    HTML;

    public const string COLORS = <<<'HTML'
    <x-switcher on="Active" off="Inactive" color-when-on="green" color-when-off="red" />

    <!-- Off state inherits the color around it -->
    <x-switcher on="Following" off="Follow" color-when-on="primary" />
    HTML;

    public const string READONLY_AND_DISABLED = <<<'HTML'
    <x-switcher readonly on="Pause" off="Play" />
    <x-switcher disabled on="Pause" off="Play" />
    HTML;

    public const string EVENTS = <<<'HTML'
    <x-switcher on="Pause" off="Play" x-on:switch="console.log($event.detail.value)" />
    HTML;

    public const string ALPINE = <<<'HTML'
    <div x-data="{ open: false }">
        <x-switcher x-model="open" on="Hide details" off="Show details" />

        <div x-show="open">...</div>
    </div>
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->switcher()
        ->block('block', 'classes');
    HTML;
}
