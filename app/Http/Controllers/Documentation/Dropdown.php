<?php

namespace App\Http\Controllers\Documentation;

use App\Enums\Example;
use App\Http\Controllers\Controller;

class Dropdown extends Controller
{
    public function __invoke()
    {
        return view('documentation.ui.dropdown', Example::Dropdown->variables());
    }
}
