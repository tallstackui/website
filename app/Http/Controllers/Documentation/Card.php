<?php

namespace App\Http\Controllers\Documentation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Card extends Controller
{
    public function __invoke(Request $request)
    {
        $basic = <<<HTML
<x-card>
    TallStackUi
</x-card>
HTML;

        $header = <<<HTML
<x-card>
    <x-slot:header>
        TallStackUi
    </x-slot:header>
    TallStackUi
</x-card>

<!-- or -->

<x-card header="TallStackUi">
    TallStackUi
</x-card>
HTML;

        $footer = <<<HTML
<x-card>
    TallStackUi
    <x-slot:footer>
        TallStackUi
    </x-slot:footer>
</x-card>

<!-- or -->

<x-card footer="TallStackUi">
    TallStackUi
</x-card>
HTML;

        return view('documentation.card', compact('basic', 'header', 'footer'));
    }
}
