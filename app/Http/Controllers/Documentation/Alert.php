<?php

namespace App\Http\Controllers\Documentation;

use App\Http\Controllers\Controller;
class Alert extends Controller
{
    public function __invoke()
    {
        $basic = <<<HTML
<x-alert>
    TallStackUi
</x-alert>
HTML;
        $title = <<<HTML
<x-alert title="TallStackUi">
    TallStackUi
</x-alert>
HTML;
        $closeable = <<<HTML
<x-alert title="TallStackUi" closeable>
    TallStackUi
</x-alert>
HTML;
        $colors = <<<HTML
<x-alert title="TallStackUi">
    TallStackUi
</x-alert>
<x-alert title="TallStackUi" color="yellow">
    TallStackUi
</x-alert>
<x-alert title="TallStackUi" color="red">
    TallStackUi
</x-alert>
<x-alert title="TallStackUi" color="sky">
    TallStackUi
</x-alert>
<x-alert title="TallStackUi" color="orange">
    TallStackUi
</x-alert>
HTML;
        $translucents = <<<HTML
<x-alert title="TallStackUi" translucent>
    TallStackUi
</x-alert>
<x-alert title="TallStackUi" color="yellow" translucent>
    TallStackUi
</x-alert>
<x-alert title="TallStackUi" color="red" translucent>
    TallStackUi
</x-alert>
<x-alert title="TallStackUi" color="sky" translucent>
    TallStackUi
</x-alert>
<x-alert title="TallStackUi" color="orange" translucent>
    TallStackUi
</x-alert>
HTML;

        return view('documentation.alert', compact('basic', 'title', 'closeable', 'colors', 'translucents'));
    }
}
