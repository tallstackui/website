<?php

namespace App\Enums\Examples;

class Tab
{
    public const BASIC = <<<'HTML'
    <x-tabs :options="['Tab 1', 'Tab 2']" selected="Tab 1">
        <x-tabs.items tab="Tab 1">
            Tab 1
        </x-tabs.items>
        <x-tabs.items tab="Tab 2">
            Tab 2
        </x-tabs.items>
    </x-tabs>
    HTML;
}
