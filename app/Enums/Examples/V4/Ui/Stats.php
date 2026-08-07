<?php

namespace App\Enums\Examples\V4\Ui;

class Stats
{
    public const string BASIC = <<<'HTML'
    <!-- Single -->
    <x-stats :number="30" />

    <!-- Multiple -->
    <div class="grid grid-cols-3 gap-2">
        <x-stats :number="30" />
        <x-stats :number="50" />
        <x-stats :number="100" />
    </div>
    HTML;

    public const string TITLE = <<<'HTML'
    <x-stats title="Components" :number="100" />
    HTML;

    public const string LINK = <<<'HTML'
    <x-stats href="https://tallstackui.com" target="_blank" :number="100" />

    <!-- Also accepts wire:click to call a Livewire method. -->
    <x-stats wire:click="updateQuantity" :number="$quantity" />
    HTML;

    public const string NAVIGATE = <<<'HTML'
    <x-stats ... navigate />

    <x-stats ... navigate-hover />
    HTML;

    public const string ICONS = <<<'HTML'
    <x-stats icon="swatch" :number="100" />
    <x-stats icon="swatch" :number="100" light />
    <x-stats icon="swatch" :number="100" outline />
    HTML;

    public const string ICON_SLOT = <<<'HTML'
    <x-stats :number="100">
        <x-slot:icon>
            <x-avatar :model="auth()->user()" color="fff" />
        </x-slot:icon>
    </x-stats>
    HTML;

    public const string COLORS = <<<'HTML'
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
    <x-stats :number="100" color="mauve" />
    <x-stats :number="100" color="olive" />
    <x-stats :number="100" color="mist" />
    <x-stats :number="100" color="taupe" />
    <x-stats :number="100" color="black" />
    HTML;

    public const string SYMBOLS = <<<'HTML'
    <x-stats :number="50" increase />
    <x-stats :number="100" decrease />

    <!-- These parameters are boolean, so you can do:-->
    @php($status = 2 > 1)

    <x-stats :number="50"
             :increase="$status"
             :decrease="$status" />
    HTML;

    public const string ANIMATED = <<<'HTML'
    <x-stats :number="25" animated />
    HTML;

    public const string NUMBER_FORMAT = <<<'HTML'
    <x-stats number="U$ 25,00" />
    HTML;

    public const string SLOTS = <<<'HTML'
    <!-- Default Styles -->
    <x-stats :number="50" header="TallStackUI" footer="The best TALL Stack component library">
        <x-slot:right>
            <x-icon name="wrench-screwdriver" class="w-6 h-6 text-pink-500" />
        </x-slot:right>
    </x-stats>

    <!-- or -->

    <!-- Raw Content -->
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

    public const string CHART = <<<'HTML'
    {{-- The array shorthand renders the chart internally and inherits the card's color --}}
    <x-stats :number="45231" title="Revenue" increase :chart="[10, 40, 25, 60, 30, 80]" />

    {{-- The slot takes over completely --}}
    <x-stats :number="45231" title="Revenue">
        <x-slot:chart>
            <x-chart :series="$revenue" color="emerald" class="h-full w-full" />
        </x-slot:chart>
    </x-stats>
    HTML;

    public const string DURATION = <<<'HTML'
    <x-stats :number="45231" animated :duration="3" />
    HTML;

    public const string FLAT = <<<'HTML'
    <x-stats :number="100" shadowless />
    <x-stats :number="100" bordered />
    <x-stats :number="100" shadowless bordered />
    HTML;

    public const string SKELETON = <<<'HTML'
    <x-stats skeleton />
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->stats()
        ->block('block', 'classes');
    HTML;
}
