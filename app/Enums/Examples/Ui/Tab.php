<?php

namespace App\Enums\Examples\Ui;

class Tab
{
    public const BASIC = <<<'HTML'
    <x-tabs :options="['Tab 1', 'Tab 2', 'Tab 3', 'Tab 4', 'Tab 5']" selected="Tab 1">
        <x-tabs.items tab="Tab 1">
            Tab 1
        </x-tabs.items>
        <x-tabs.items tab="Tab 2">
            Tab 2
        </x-tabs.items>
        <x-tabs.items tab="Tab 3">
            Tab 3
        </x-tabs.items>
        <x-tabs.items tab="Tab 4">
            Tab 4
        </x-tabs.items>
        <x-tabs.items tab="Tab 5">
            Tab 5
        </x-tabs.items>
    </x-tabs>
    HTML;
}
