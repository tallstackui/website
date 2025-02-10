<?php

namespace App\Http\Controllers\Documentation;

use App\Enums\Example;
use App\Traits\VersionDiscovery;
use Illuminate\Contracts\View\View;

class FormController
{
    use VersionDiscovery;

    public function input(): View
    {
        return view('documentation.'.$this->current().'.form.input', Example::Input->variables());
    }
}
