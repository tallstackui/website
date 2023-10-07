<?php

namespace App\Http\Controllers\Documentation;

use App\Http\Controllers\Controller;

class Tab extends Controller
{
    public function __invoke()
    {
        $basic = <<<HTML
<x-tabs :options="['Tab 1', 'Tab 2']" selected="Tab 1">
    <x-tabs.items tab="Tab 1">
        Tab 1
    </x-tabs.items>
    <x-tabs.items tab="Tab 2">
        Tab 2
    </x-tabs.items>
</x-tabs>
HTML;

        return view('documentation.tab', compact('basic'));
    }
}
