<?php

namespace App\Enums\Examples\V4\Ui;

class Tooltip
{
    public const string BASIC = <<<'HTML'
    <x-tooltip text="TallStackUI" />
    HTML;

    public const string POSITIONS = <<<'HTML'
    <!-- Available Positions:
         bottom,
         bottom-start,
         bottom-end,
         top,
         top-start,
         top-end,
         left,
         left-start,
         left-end,
         right,
         right-start,
         right-end,
         auto
         auto-start
         auto-end
     -->

    <x-tooltip text="Top" position="top" />
    <x-tooltip text="Bottom" position="bottom" />
    <x-tooltip text="Left" position="left" />
    <x-tooltip text="Right" position="right" />
    HTML;

    public const string ICONS = <<<'HTML'
    <x-tooltip text="Top" position="top" icon="exclamation-circle" />
    <x-tooltip text="Bottom" position="bottom" icon="exclamation-triangle" />
    <x-tooltip text="Left" position="left" icon="shield-exclamation" />
    <x-tooltip text="Right" position="right" icon="shield-check" />
    HTML;

    public const string SIZES = <<<'HTML'
    <x-tooltip text="XS" xs/>
    <x-tooltip text="SM" sm/>
    <x-tooltip text="MD" md/>
    <x-tooltip text="LG" lg/>
    HTML;

    public const string HTML = <<<'HTML'
    <x-tooltip>
        <b>Tall</b><i>Stack</i><u>Ui</u>
    </x-tooltip>
    HTML;

    public const string COLORS = <<<'HTML'
    <x-tooltip text="primary" />
    <x-tooltip text="secondary" color="secondary" />
    <x-tooltip text="slate" color="slate" />
    <x-tooltip text="gray" color="gray" />
    <x-tooltip text="zinc" color="zinc" />
    <x-tooltip text="neutral" color="neutral" />
    <x-tooltip text="stone" color="stone" />
    <x-tooltip text="red" color="red" />
    <x-tooltip text="orange" color="orange" />
    <x-tooltip text="amber" color="amber" />
    <x-tooltip text="yellow" color="yellow" />
    <x-tooltip text="lime" color="lime" />
    <x-tooltip text="green" color="green" />
    <x-tooltip text="emerald" color="emerald" />
    <x-tooltip text="teal" color="teal" />
    <x-tooltip text="cyan" color="cyan" />
    <x-tooltip text="sky" color="sky" />
    <x-tooltip text="blue" color="blue" />
    <x-tooltip text="indigo" color="indigo" />
    <x-tooltip text="violet" color="violet" />
    <x-tooltip text="purple" color="purple" />
    <x-tooltip text="fuchsia" color="fuchsia" />
    <x-tooltip text="pink" color="pink" />
    <x-tooltip text="rose" color="rose" />
    <x-tooltip text="mauve" color="mauve" />
    <x-tooltip text="olive" color="olive" />
    <x-tooltip text="mist" color="mist" />
    <x-tooltip text="taupe" color="taupe" />
    <x-tooltip text="black" color="black" />
    HTML;

    public const string OUTLINES = <<<'HTML'
    <x-tooltip text="primary" outline />
    <x-tooltip text="secondary" color="secondary" outline />
    <x-tooltip text="slate" color="slate" outline />
    <x-tooltip text="gray" color="gray" outline />
    <x-tooltip text="zinc" color="zinc" outline />
    <x-tooltip text="neutral" color="neutral" outline />
    <x-tooltip text="stone" color="stone" outline />
    <x-tooltip text="red" color="red" outline />
    <x-tooltip text="orange" color="orange" outline />
    <x-tooltip text="amber" color="amber" outline />
    <x-tooltip text="yellow" color="yellow" outline />
    <x-tooltip text="lime" color="lime" outline />
    <x-tooltip text="green" color="green" outline />
    <x-tooltip text="emerald" color="emerald" outline />
    <x-tooltip text="teal" color="teal" outline />
    <x-tooltip text="cyan" color="cyan" outline />
    <x-tooltip text="sky" color="sky" outline />
    <x-tooltip text="blue" color="blue" outline />
    <x-tooltip text="indigo" color="indigo" outline />
    <x-tooltip text="violet" color="violet" outline />
    <x-tooltip text="purple" color="purple" outline />
    <x-tooltip text="fuchsia" color="fuchsia" outline />
    <x-tooltip text="pink" color="pink" outline />
    <x-tooltip text="rose" color="rose" outline />
    <x-tooltip text="mauve" color="mauve" outline />
    <x-tooltip text="olive" color="olive" outline />
    <x-tooltip text="mist" color="mist" outline />
    <x-tooltip text="taupe" color="taupe" outline />
    <x-tooltip text="black" color="black" outline />
    HTML;

    public const string DELAY = <<<'HTML'
    <!-- Accepted: slow (400ms), fast (150ms), faster (75ms), flash (0) -->
    <x-tooltip text="TallStackUI" delay="flash" />
    <x-button tooltip="TallStackUI" data-tooltip-delay="slow" />
    <span x-data x-tooltip="TallStackUI" data-tooltip-delay="faster"></span>
    HTML;

    public const string BALLOON = <<<'HTML'
    <!-- color paints the icon, balloon paints the balloon -->
    <x-tooltip text="TallStackUI" balloon="red" />
    <x-button tooltip="TallStackUI" data-tooltip-color="emerald" />
    <x-kbd tooltip="TallStackUI" data-tooltip-color="amber" />
    HTML;

    public const string SCALE = <<<'HTML'
    <!-- Accepted: sm (default), md, lg -->
    <x-tooltip text="TallStackUI" scale="lg" />
    <x-button tooltip="TallStackUI" data-tooltip-size="lg" />
    <span x-data x-tooltip="TallStackUI" data-tooltip-size="md"></span>
    HTML;

    public const string DISABLED = <<<'HTML'
    <span x-tooltip="TallStackUI" x-bind:data-tooltip-disabled="condition"></span>
    HTML;

    public const string SETTINGS = <<<'PHP'
    // config/tallstackui.php

    'tooltip' => [
        Components\Tooltip\Component::class,
        [
            'delay' => null,
            'color' => null,
            'size' => null,
            'invert' => false,
        ],
    ],
    PHP;

    public const string STYLING = <<<'CSS'
    /* The balloon is built by JavaScript and shared by every anchor,
       so it is styled through a stable selector instead of customize() */

    [data-tsui-tooltip] { border-radius: 0; }
    [data-tsui-tooltip] > [data-arrow] { display: none; }
    CSS;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->tooltip()
        ->block('block', 'classes');
    HTML;
}
