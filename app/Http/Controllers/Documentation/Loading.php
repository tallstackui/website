<?php

namespace App\Http\Controllers\Documentation;

use App\Enums\Example;
use App\Http\Controllers\Controller;

class Loading extends Controller
{
    public function __invoke()
    {
        return view('documentation.ui.loading', Example::Loading->variables());
    }
}
