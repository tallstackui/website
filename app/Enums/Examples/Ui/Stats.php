<?php

namespace App\Enums\Examples\Ui;

class Stats
{
    public const BASIC = <<<'HTML'
    <!-- Single -->
    <x-stats :number="30" />
    
    <!-- Multiple -->
    <div class="grid grid-cols-3 gap-2">
        <x-stats :number="30" />
        <x-stats :number="50" />
        <x-stats :number="100" />
    </div>
    HTML;

    public const TITLE = <<<'HTML'
    <x-stats title="Components" :number="100" />
    HTML;

    public const LINK = <<<'HTML'
    <x-stats href="https://tallstackui.com" target="_blank" :number="100" />
    HTML;

    public const ICONS = <<<'HTML'
    <x-stats icon="swatch" :number="100" />
    <x-stats icon="swatch" :number="100" light />
    <x-stats icon="swatch" :number="100" outline />
    HTML;

    public const COLORS = <<<'HTML'
    <!-- The color is only applied to the icon and its style.-->

    <x-stats :number="100" />
    <x-stats :number="100" color="secondary" />
    <x-stats :number="100" color="slate" />
    <x-stats :number="100" color="gray" />
    <x-stats :number="100" color="zinc" />
    <x-stats :number="100" color="neutral" />
    <x-stats :number="100" color="stone" />
    <x-stats :number="100" color="red" />
    <x-stats :number="100" color="orange" />
    <x-stats :number="100" color="amber" />
    <x-stats :number="100" color="yellow" />
    <x-stats :number="100" color="lime" />
    <x-stats :number="100" color="green" />
    <x-stats :number="100" color="emerald" />
    <x-stats :number="100" color="teal" />
    <x-stats :number="100" color="cyan" />
    <x-stats :number="100" color="sky" />
    <x-stats :number="100" color="blue" />
    <x-stats :number="100" color="indigo" />
    <x-stats :number="100" color="violet" />
    <x-stats :number="100" color="purple" />
    <x-stats :number="100" color="fuchsia" />
    <x-stats :number="100" color="pink" />
    <x-stats :number="100" color="rose" />
    <x-stats :number="100" color="black" />
    <x-stats :number="100" color="white" />
    HTML;

    public const SYMBOLS = <<<'HTML'
    <x-stats :number="50" increase />
    <x-stats :number="100" decrease />

    <!-- These parameters are boolean, so you can do:-->
    @php($status = 2 > 1)
    
    <x-stats :number="50" 
             :increase="$status" 
             :decrease="$status" />
    HTML;

    public const ANIMATED = <<<'HTML'
    <x-stats :number="25" animated />
    HTML;

    public const NUMBER_FORMAT = <<<'HTML'
    <x-stats number="U$ 25,00" />
    HTML;

    public const SLOTS = <<<'HTML'
    <x-stats :number="50" header="TallStackUI" footer="The best TALL Stack component library">
        <x-slot:right>
            <x-icon name="wrench-screwdriver" class="w-6 h-6 text-pink-500" />
        </x-slot:right>
    </x-stats>

    <!-- or -->

    <x-stats :number="50">
        <x-slot:header>
            TallStackUI
        </x-slot:header>
        <x-slot:right>
            <x-icon name="wrench-screwdriver" class="w-6 h-6 text-pink-500" />
        </x-slot:right>
        <x-slot:footer>
            The best TALL Stack component library
        </x-slot:footer>
    </x-stats>
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->stats()
        ->block('block', 'classes');
    HTML;
}
