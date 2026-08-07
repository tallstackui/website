<?php

namespace App\Enums\Examples\V4\Ui;

class Chart
{
    public const string BASIC = <<<'HTML'
    {{-- A flat list of numbers is a single unnamed series --}}
    <x-chart :series="[10, 40, 25, 60, 30, 80]" />
    HTML;

    public const string TYPES = <<<'HTML'
    <x-chart :series="[10, 40, 25, 60, 30, 80]" type="area" />
    <x-chart :series="[10, 40, 25, 60, 30, 80]" type="line" />
    <x-chart :series="[10, 40, 25, 60, 30, 80]" type="bar" />
    <x-chart :series="[35, 25, 20, 20]" :labels="['Direct', 'Organic', 'Social', 'Referral']" type="pie" legend />
    <x-chart :series="[35, 25, 20, 20]" :labels="['Direct', 'Organic', 'Social', 'Referral']" type="donut" legend />
    HTML;

    public const string MULTIPLE = <<<'HTML'
    <x-chart :labels="['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun']"
             :series="[
                 ['name' => '2026', 'data' => [10, 40, 25, 60, 30, 80]],
                 ['name' => '2025', 'data' => [8, 30, 33, 41, 22, 55]],
             ]"
             grid
             legend
             tooltip
             markers />
    HTML;

    public const string STACKED = <<<'HTML'
    <x-chart :labels="['Jan', 'Feb', 'Mar', 'Apr']"
             type="bar"
             stacked
             :series="[
                 ['name' => 'New', 'data' => [12, 18, 15, 22]],
                 ['name' => 'Returning', 'data' => [30, 26, 34, 28]],
             ]"
             grid
             legend />
    HTML;

    public const string COMBINING = <<<'HTML'
    <x-chart :labels="['Jan', 'Feb', 'Mar', 'Apr']"
             type="bar"
             stacked
             :series="[
                 ['name' => 'New', 'data' => [12, 18, 15, 22]],
                 ['name' => 'Returning', 'data' => [30, 26, 34, 28]],
                 ['name' => 'Total', 'data' => [42, 44, 49, 50], 'type' => 'line'],
             ]"
             grid
             legend
             tooltip />
    HTML;

    public const string SECONDARY_AXIS = <<<'HTML'
    <x-chart :labels="['Jan', 'Feb', 'Mar', 'Apr']"
             :series="[
                 ['name' => 'Revenue', 'data' => [1200, 1900, 1500, 2100]],
                 ['name' => 'Orders', 'data' => [8, 14, 11, 16], 'axis' => 'right'],
             ]"
             grid
             legend
             :prefix="['left' => '$']"
             :suffix="['right' => ' un']" />
    HTML;

    public const string COLORS = <<<'HTML'
    <x-chart :series="[10, 40, 25, 60, 30, 80]" color="emerald" />

    <x-chart :labels="['Jan', 'Feb', 'Mar', 'Apr']"
             :colors="['red', 'blue', 'amber']"
             :series="[
                 ['name' => 'A', 'data' => [10, 40, 25, 60]],
                 ['name' => 'B', 'data' => [22, 18, 40, 30]],
                 ['name' => 'C', 'data' => [5, 30, 15, 45]],
             ]"
             legend />
    HTML;

    public const string FORMATTING = <<<'HTML'
    {{-- prefix, suffix and decimals cover the common case --}}
    <x-chart :series="$revenue" grid prefix="$" :decimals="2" />

    {{-- Anything beyond it takes a closure --}}
    <x-chart :series="$revenue"
             grid
             :formatter="fn (float $value) => Number::currency($value, 'BRL', 'pt_BR')" />

    {{-- The axis arrives as a second argument --}}
    <x-chart :formatter="fn (float $value, string $axis) => $axis === 'right'
                 ? $value.' un'
                 : Number::currency($value, 'BRL', 'pt_BR')"
             :series="[
                 ['name' => 'Revenue', 'data' => $revenue],
                 ['name' => 'Orders', 'data' => $orders, 'axis' => 'right'],
             ]"
             grid />
    HTML;

    public const string CHROME = <<<'HTML'
    <x-chart :series="[10, 40, 25, 60, 30, 80]"
             :labels="['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun']"
             grid
             legend
             tooltip
             markers />
    HTML;

    public const string SLOTS = <<<'HTML'
    <x-chart :series="[10, 40, 25, 60, 30, 80]" grid>
        <x-slot:header>Monthly Balance</x-slot:header>
        <x-slot:footer>Updated 2 minutes ago</x-slot:footer>
    </x-chart>
    HTML;

    public const string CARD = <<<'HTML'
    <x-card paddingless>
        <x-slot:header>Monthly Balance</x-slot:header>
        <x-chart :series="[10, 40, 25, 60, 30, 80]" grid prefix="$" class="p-4" />
    </x-card>
    HTML;

    public const string SKELETON = <<<'HTML'
    <x-chart skeleton />
    <x-chart skeleton="10" type="bar" :height="240" />
    <x-chart skeleton="5" type="donut" />
    HTML;

    public const string CONFIGURATION = <<<'PHP'
    // config/tallstackui.php

    'chart' => [
        Components\Chart\Component::class,
        [
            'height' => 64,
            'grid' => false,
            'legend' => false,
            'tooltip' => false,
            'markers' => false,
        ],
    ],
    PHP;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->chart()
        ->block('block', 'classes');
    HTML;
}
