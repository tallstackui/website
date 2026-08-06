<?php

namespace App\Enums\Examples\V4\Ui;

class BackToTop
{
    public const string BASIC = <<<'HTML'
    <x-back-to-top />
    HTML;

    public const string POSITIONS = <<<'HTML'
    <!-- Available Positions: bottom-right (default), bottom-left -->

    <x-back-to-top position="bottom-left" />
    HTML;

    public const string ICON = <<<'HTML'
    <x-back-to-top icon="arrow-up" />
    HTML;

    public const string SQUARE = <<<'HTML'
    <x-back-to-top square />
    HTML;

    public const string SIZES = <<<'HTML'
    <x-back-to-top xs />
    <x-back-to-top sm />
    <x-back-to-top /> {{-- md (default) --}}
    <x-back-to-top lg />
    HTML;

    public const string COLORS = <<<'HTML'
    <x-back-to-top color="red" />
    <x-back-to-top color="emerald" />
    <x-back-to-top color="blue" />
    HTML;

    public const string ANCHOR = <<<'HTML'
    <!-- The button appears when the observed element scrolls out of the viewport. -->

    <div id="hero">
        <!-- Hero section content -->
    </div>

    <x-back-to-top anchor="#hero" />
    HTML;

    public const string IMMEDIATE = <<<'HTML'
    <x-back-to-top immediate />
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->backToTop()
        ->block('block', 'classes');
    HTML;
}
