<?php

declare(strict_types=1);

namespace App\Enums\Examples\Ui;

class Chart
{
    public const string BASIC = <<<'HTML'
    <x-chart :series="[10, 40, 25, 60, 30, 80]" />
    HTML;

    public const string TYPES = <<<'HTML'
    <x-chart :series="[10, 40, 25, 60, 30, 80]" area />

    <x-chart :series="[10, 40, 25, 60, 30, 80]" line />

    <x-chart :series="[10, 40, 25, 60, 30, 80]" bar />

    <x-chart :series="[35, 25, 20, 20]"
             :labels="['Direct', 'Organic', 'Social', 'Referral']"
             pie
             legend />

    <x-chart :series="[35, 25, 20, 20]"
             :labels="['Direct', 'Organic', 'Social', 'Referral']"
             donut
             legend />
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
             bar
             stacked
             :series="[
                 ['name' => 'Active', 'data' => [12, 18, 15, 22]],
                 ['name' => 'Inactive', 'data' => [30, 26, 34, 28]],
                 ['name' => 'Recurring', 'data' => [18, 41, 12, 62]],
             ]"
             grid
             legend />
    HTML;

    public const string COMBINING = <<<'HTML'
    <x-chart :labels="['Jan', 'Feb', 'Mar', 'Apr']"
             bar
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
    <!-- prefix, suffix and decimals cover the common case -->
    <x-chart :series="$revenue" grid prefix="$" :decimals="2" />

    <!-- Anything beyond it takes a closure -->
    <x-chart :series="$revenue"
             grid
             :formatter="fn (float $value) => Number::currency($value, 'BRL', 'pt_BR')" />

    <!-- The axis arrives as a second argument -->
    <x-chart :formatter="fn (float $value, string $axis) => $axis === 'right'
                 ? $value.' un'
                 : Number::currency($value, 'BRL', 'pt_BR')"
             :series="[
                 ['name' => 'Revenue', 'data' => $revenue],
                 ['name' => 'Orders', 'data' => $orders, 'axis' => 'right'],
             ]"
             grid
             legend
             tooltip />
    HTML;

    public const string SLOTS = <<<'HTML'
    <x-chart :series="[10, 40, 25, 60, 30, 80]" grid>
        <x-slot:header>Monthly Balance</x-slot:header>
        <x-slot:footer>
            <div class="flex justify-end">
                Updated 2 minutes ago
            </div>
        </x-slot:footer>
    </x-chart>
    HTML;

    public const string SKELETON = <<<'HTML'
    <x-chart skeleton />

    <x-chart skeleton="10" bar />

    <x-chart skeleton="5" donut />
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->chart()
        ->block('block', 'classes');
    HTML;
}
