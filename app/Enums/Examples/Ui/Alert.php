<?php

declare(strict_types=1);

namespace App\Enums\Examples\Ui;

class Alert
{
    public const string BASIC = <<<'HTML'
    <x-alert>
        TallStackUi
    </x-alert>

    <!-- or -->

    <x-alert text="TallStackUi" />
    HTML;

    public const string TITLE = <<<'HTML'
    <x-alert>
        <x-slot:title>
            TallStackUi
        </x-slot:title>
        TallStackUi
    </x-alert>

    <!-- or -->

    <x-alert title="TallStackUi">
        TallStackUi
    </x-alert>
    HTML;

    public const string CLOSE = <<<'HTML'
    <x-alert title="TallStackUi" close>
        TallStackUi
    </x-alert>
    HTML;

    public const string ICON = <<<'HTML'
    <x-alert icon="cog">
        TallStackUi
    </x-alert>

    <!-- With title -->

    <x-alert title="TallStackUi" icon="cog">
        TallStackUi
    </x-alert>
    HTML;

    public const string FOOTER = <<<'HTML'
    <x-alert>
        TallStackUi
        <x-slot:footer>
            <div class="flex justify-end">
                <x-badge text="TallStackUi" />
            </div>
        </x-slot:footer>
    </x-alert>
    HTML;

    public const string DISMISS = <<<'HTML'
    <!-- Dismiss after 3 seconds -->
    <x-alert :dismiss="3"> <!-- [tl! focus] -->
        TallStackUi
    </x-alert>

    <!-- Dismiss after 5 seconds with close button -->
    <x-alert :dismiss="5" close> <!-- [tl! focus] -->
        TallStackUi
    </x-alert>
    HTML;

    public const string COLORS = <<<'HTML'
    <x-alert title="TallStackUi" text="Primary" />
    <x-alert title="TallStackUi" text="Secondary" color="secondary" />
    <x-alert title="TallStackUi" text="Slate" color="slate" />
    <x-alert title="TallStackUi" text="Gray" color="gray" />
    <x-alert title="TallStackUi" text="Zinc" color="zinc" />
    <x-alert title="TallStackUi" text="Neutral" color="neutral" />
    <x-alert title="TallStackUi" text="Stone" color="stone" />
    <x-alert title="TallStackUi" text="Red" color="red" />
    <x-alert title="TallStackUi" text="Orange" color="orange" />
    <x-alert title="TallStackUi" text="Amber" color="amber" />
    <x-alert title="TallStackUi" text="Yellow" color="yellow" />
    <x-alert title="TallStackUi" text="Lime" color="lime" />
    <x-alert title="TallStackUi" text="Green" color="green" />
    <x-alert title="TallStackUi" text="Emerald" color="emerald" />
    <x-alert title="TallStackUi" text="Teal" color="teal" />
    <x-alert title="TallStackUi" text="Cyan" color="cyan" />
    <x-alert title="TallStackUi" text="Sky" color="sky" />
    <x-alert title="TallStackUi" text="Blue" color="blue" />
    <x-alert title="TallStackUi" text="Indigo" color="indigo" />
    <x-alert title="TallStackUi" text="Violet" color="violet" />
    <x-alert title="TallStackUi" text="Purple" color="purple" />
    <x-alert title="TallStackUi" text="Fuchsia" color="fuchsia" />
    <x-alert title="TallStackUi" text="Pink" color="pink" />
    <x-alert title="TallStackUi" text="Rose" color="rose" />
    <x-alert title="TallStackUi" text="Mauve" color="mauve" />
    <x-alert title="TallStackUi" text="Olive" color="olive" />
    <x-alert title="TallStackUi" text="Mist" color="mist" />
    <x-alert title="TallStackUi" text="Taupe" color="taupe" />
    <x-alert title="TallStackUi" text="Black" color="black" />
    HTML;

    public const string OUTLINES = <<<'HTML'
    <x-alert title="TallStackUi" text="Primary" outline />
    <x-alert title="TallStackUi" text="Secondary" color="secondary" outline />
    <x-alert title="TallStackUi" text="Slate" color="slate" outline />
    <x-alert title="TallStackUi" text="Gray" color="gray" outline />
    <x-alert title="TallStackUi" text="Zinc" color="zinc" outline />
    <x-alert title="TallStackUi" text="Neutral" color="neutral" outline />
    <x-alert title="TallStackUi" text="Stone" color="stone" outline />
    <x-alert title="TallStackUi" text="Red" color="red" outline />
    <x-alert title="TallStackUi" text="Orange" color="orange" outline />
    <x-alert title="TallStackUi" text="Amber" color="amber" outline />
    <x-alert title="TallStackUi" text="Yellow" color="yellow" outline />
    <x-alert title="TallStackUi" text="Lime" color="lime" outline />
    <x-alert title="TallStackUi" text="Green" color="green" outline />
    <x-alert title="TallStackUi" text="Emerald" color="emerald" outline />
    <x-alert title="TallStackUi" text="Teal" color="teal" outline />
    <x-alert title="TallStackUi" text="Cyan" color="cyan" outline />
    <x-alert title="TallStackUi" text="Sky" color="sky" outline />
    <x-alert title="TallStackUi" text="Blue" color="blue" outline />
    <x-alert title="TallStackUi" text="Indigo" color="indigo" outline />
    <x-alert title="TallStackUi" text="Violet" color="violet" outline />
    <x-alert title="TallStackUi" text="Purple" color="purple" outline />
    <x-alert title="TallStackUi" text="Fuchsia" color="fuchsia" outline />
    <x-alert title="TallStackUi" text="Pink" color="pink" outline />
    <x-alert title="TallStackUi" text="Rose" color="rose" outline />
    <x-alert title="TallStackUi" text="Mauve" color="mauve" outline />
    <x-alert title="TallStackUi" text="Olive" color="olive" outline />
    <x-alert title="TallStackUi" text="Mist" color="mist" outline />
    <x-alert title="TallStackUi" text="Taupe" color="taupe" outline />
    <x-alert title="TallStackUi" text="Black" color="black" outline />
    HTML;

    public const string LIGHTS = <<<'HTML'
    <x-alert title="TallStackUi" text="Primary" light />
    <x-alert title="TallStackUi" text="Secondary" color="secondary" light />
    <x-alert title="TallStackUi" text="Slate" color="slate" light />
    <x-alert title="TallStackUi" text="Gray" color="gray" light />
    <x-alert title="TallStackUi" text="Zinc" color="zinc" light />
    <x-alert title="TallStackUi" text="Neutral" color="neutral" light />
    <x-alert title="TallStackUi" text="Stone" color="stone" light />
    <x-alert title="TallStackUi" text="Red" color="red" light />
    <x-alert title="TallStackUi" text="Orange" color="orange" light />
    <x-alert title="TallStackUi" text="Amber" color="amber" light />
    <x-alert title="TallStackUi" text="Yellow" color="yellow" light />
    <x-alert title="TallStackUi" text="Lime" color="lime" light />
    <x-alert title="TallStackUi" text="Green" color="green" light />
    <x-alert title="TallStackUi" text="Emerald" color="emerald" light />
    <x-alert title="TallStackUi" text="Teal" color="teal" light />
    <x-alert title="TallStackUi" text="Cyan" color="cyan" light />
    <x-alert title="TallStackUi" text="Sky" color="sky" light />
    <x-alert title="TallStackUi" text="Blue" color="blue" light />
    <x-alert title="TallStackUi" text="Indigo" color="indigo" light />
    <x-alert title="TallStackUi" text="Violet" color="violet" light />
    <x-alert title="TallStackUi" text="Purple" color="purple" light />
    <x-alert title="TallStackUi" text="Fuchsia" color="fuchsia" light />
    <x-alert title="TallStackUi" text="Pink" color="pink" light />
    <x-alert title="TallStackUi" text="Rose" color="rose" light />
    <x-alert title="TallStackUi" text="Mauve" color="mauve" light />
    <x-alert title="TallStackUi" text="Olive" color="olive" light />
    <x-alert title="TallStackUi" text="Mist" color="mist" light />
    <x-alert title="TallStackUi" text="Taupe" color="taupe" light />
    <x-alert title="TallStackUi" text="Black" color="black" light />
    HTML;

    public const string ROUNDED = <<<'HTML'
    <!-- xs, sm, md, lg (default), xl -->

    <x-alert title="TallStackUI" text="No rounded corners." square />
    <x-alert title="TallStackUi" text="Extra small" rounded="xs" />
    <x-alert title="TallStackUi" text="Small" rounded="sm" />
    <x-alert title="TallStackUi" text="Medium" rounded="md" />
    <x-alert title="TallStackUi" text="Large" rounded="lg" />
    <x-alert title="TallStackUi" text="Extra large" rounded="xl" />
    HTML;

    public const string BORDERED = <<<'HTML'
    <!-- Side only — color inherited from the alert's `color` -->
    <x-alert title="TallStackUi" text="Inherits the red color" color="red" light bordered="left" />
    <x-alert title="TallStackUi" text="Inherits the green color" color="green" light bordered="right" />

    <!-- Explicit color via `<side>:<color>` syntax -->
    <x-alert title="TallStackUi" text="Explicit blue border" color="primary" light bordered="left:blue" />
    <x-alert title="TallStackUi" text="Explicit rose border" color="primary" light bordered="right:rose" />

    <!-- Combinable with `outline` and `square` -->
    <x-alert title="TallStackUi" text="Outline + side border" color="primary" outline bordered="left:amber" />
    <x-alert title="TallStackUi" text="Square + side border"  color="primary" light square bordered="left:violet" />
    HTML;

    public const string SHADOWLESS = <<<'HTML'
    <x-alert title="TallStackUI" text="Light, with the shadow it ships with" light />
    <x-alert title="TallStackUI" text="Light, flat" light shadowless />
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->alert()
        ->block('block', 'classes');
    HTML;
}
