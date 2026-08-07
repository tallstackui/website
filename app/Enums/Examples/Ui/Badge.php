<?php

namespace App\Enums\Examples\Ui;

class Badge
{
    public const string BASIC = <<<'HTML'
    <x-badge text="TallStackUi" />
    HTML;

    public const string SQUARE = <<<'HTML'
    <x-badge text="TallStackUi" square />
    HTML;

    public const string ROUND = <<<'HTML'
    <!-- Boolean: applies rounded-full -->
    <x-badge text="Full" round />

    <!-- Size keys: xs, sm, md, lg, xl -->
    <x-badge text="xs" round="xs" />
    <x-badge text="sm" round="sm" />
    <x-badge text="md" round="md" />
    <x-badge text="lg" round="lg" />
    <x-badge text="xl" round="xl" />

    <!-- Without the prop, the badge falls back to rounded-md -->
    <x-badge text="default" />
    HTML;

    public const string LEFT_RIGHT = <<<'HTML'
    <x-badge lg>
        <x-slot:left>
            <p class="text-yellow-300 text-xs mr-2">+99</p>
        </x-slot:left>
        TallStackUI
    </x-badge>
    <x-badge lg>
        <x-slot:right>
            <p class="text-yellow-300 text-xs ml-2">+99</p>
        </x-slot:right>
        TallStackUI
    </x-badge>
    HTML;

    public const string ICONS = <<<'HTML'
    <x-badge text="TallStackUi" icon="users" position="left" />
    <x-badge text="TallStackUi" icon="cog" position="right" />
    HTML;

    public const string SIZES = <<<'HTML'
    <x-badge text="XS" xs />
    <x-badge text="SM" sm />
    <x-badge text="MD" md />
    <x-badge text="LG" lg />
    HTML;

    public const string COLORS = <<<'HTML'
    <x-badge text="Primary" />
    <x-badge text="Secondary" color="secondary" />
    <x-badge text="Slate" color="slate" />
    <x-badge text="Gray" color="gray" />
    <x-badge text="Zinc" color="zinc" />
    <x-badge text="Neutral" color="neutral" />
    <x-badge text="Stone" color="stone" />
    <x-badge text="Red" color="red" />
    <x-badge text="Orange" color="orange" />
    <x-badge text="Amber" color="amber" />
    <x-badge text="Yellow" color="yellow" />
    <x-badge text="Lime" color="lime" />
    <x-badge text="Green" color="green" />
    <x-badge text="Emerald" color="emerald" />
    <x-badge text="Teal" color="teal" />
    <x-badge text="Cyan" color="cyan" />
    <x-badge text="Sky" color="sky" />
    <x-badge text="Blue" color="blue" />
    <x-badge text="Indigo" color="indigo" />
    <x-badge text="Violet" color="violet" />
    <x-badge text="Purple" color="purple" />
    <x-badge text="Fuchsia" color="fuchsia" />
    <x-badge text="Pink" color="pink" />
    <x-badge text="Rose" color="rose" />
    <x-badge text="Mauve" color="mauve" />
    <x-badge text="Olive" color="olive" />
    <x-badge text="Mist" color="mist" />
    <x-badge text="Taupe" color="taupe" />
    <x-badge text="Black" color="black" />
    HTML;

    public const string LIGHTS = <<<'HTML'
    <x-badge text="Primary" light />
    <x-badge text="Secondary" color="secondary" light />
    <x-badge text="Slate" color="slate" light />
    <x-badge text="Gray" color="gray" light />
    <x-badge text="Zinc" color="zinc" light />
    <x-badge text="Neutral" color="neutral" light />
    <x-badge text="Stone" color="stone" light />
    <x-badge text="Red" color="red" light />
    <x-badge text="Orange" color="orange" light />
    <x-badge text="Amber" color="amber" light />
    <x-badge text="Yellow" color="yellow" light />
    <x-badge text="Lime" color="lime" light />
    <x-badge text="Green" color="green" light />
    <x-badge text="Emerald" color="emerald" light />
    <x-badge text="Teal" color="teal" light />
    <x-badge text="Cyan" color="cyan" light />
    <x-badge text="Sky" color="sky" light />
    <x-badge text="Blue" color="blue" light />
    <x-badge text="Indigo" color="indigo" light />
    <x-badge text="Violet" color="violet" light />
    <x-badge text="Purple" color="purple" light />
    <x-badge text="Fuchsia" color="fuchsia" light />
    <x-badge text="Pink" color="pink" light />
    <x-badge text="Rose" color="rose" light />
    <x-badge text="Mauve" color="mauve" light />
    <x-badge text="Olive" color="olive" light />
    <x-badge text="Mist" color="mist" light />
    <x-badge text="Taupe" color="taupe" light />
    <x-badge text="Black" color="black" light />
    HTML;

    public const string OUTLINES = <<<'HTML'
    <x-badge text="Primary" outline />
    <x-badge text="Secondary" color="secondary" outline />
    <x-badge text="Slate" color="slate" outline />
    <x-badge text="Gray" color="gray" outline />
    <x-badge text="Zinc" color="zinc" outline />
    <x-badge text="Neutral" color="neutral" outline />
    <x-badge text="Stone" color="stone" outline />
    <x-badge text="Red" color="red" outline />
    <x-badge text="Orange" color="orange" outline />
    <x-badge text="Amber" color="amber" outline />
    <x-badge text="Yellow" color="yellow" outline />
    <x-badge text="Lime" color="lime" outline />
    <x-badge text="Green" color="green" outline />
    <x-badge text="Emerald" color="emerald" outline />
    <x-badge text="Teal" color="teal" outline />
    <x-badge text="Cyan" color="cyan" outline />
    <x-badge text="Sky" color="sky" outline />
    <x-badge text="Blue" color="blue" outline />
    <x-badge text="Indigo" color="indigo" outline />
    <x-badge text="Violet" color="violet" outline />
    <x-badge text="Purple" color="purple" outline />
    <x-badge text="Fuchsia" color="fuchsia" outline />
    <x-badge text="Pink" color="pink" outline />
    <x-badge text="Rose" color="rose" outline />
    <x-badge text="Mauve" color="mauve" outline />
    <x-badge text="Olive" color="olive" outline />
    <x-badge text="Mist" color="mist" outline />
    <x-badge text="Taupe" color="taupe" outline />
    <x-badge text="Black" color="black" outline />
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->badge()
        ->block('block', 'classes');
    HTML;
}
