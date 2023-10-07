<?php

namespace App\Http\Controllers\Documentation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Modal extends Controller
{
    public function __invoke(Request $request)
    {
        $basic = <<<HTML
<x-modal>
    TallStackUi
</x-modal>
HTML;

        $title = <<<HTML
<x-modal>
    <x-slot:title>
        TallStackUi
    </x-slot:title>
    TallStackUi
</x-modal>

<!-- or -->

<x-modal title="TallStackUi">
    TallStackUi
</x-modal>
HTML;

        $footer = <<<HTML
<x-modal>
    TallStackUi
    <x-slot:footer>
        TallStackUi
    </x-slot:footer>
</x-modal>

<!-- or -->

<x-modal footer="TallStackUi">
    TallStackUi
</x-modal>
HTML;

        $blur = <<<HTML
<x-modal title="TallStackUi" blur>
    TallStackUi
</x-modal>
HTML;

        $sizes = <<<HTML
<!-- sm, md, lg, xl, 2xl, 3xl, 4xl, 5xl, 6xl, 7xl -->

<x-modal title="TallStackUi" size="2xl">
    TallStackUi
</x-modal>
HTML;

        $uncloseable = <<<HTML
<x-modal title="TallStackUi" :closeable="false">
    TallStackUi
</x-modal>
HTML;

        $wireable = <<<HTML
<!-- Livewire boolean property: modal -->

<x-modal title="TallStackUi" wire>
    TallStackUi
</x-modal>
HTML;

        $wireableCustomized = <<<HTML
<!-- Livewire boolean property: tallstackui -->

<x-modal title="TallStackUi" wire entangle="tallstackui">
    TallStackUi
</x-modal>
HTML;

        return view('documentation.modal', compact(
            'basic',
            'title',
            'footer',
            'blur',
            'sizes',
            'uncloseable',
            'wireable',
            'wireableCustomized',
            )
        );
    }
}
