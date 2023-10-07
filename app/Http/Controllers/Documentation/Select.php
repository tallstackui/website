<?php

namespace App\Http\Controllers\Documentation;

use App\Enums\Example;
use App\Http\Controllers\Controller;

class Select extends Controller
{
    public function __invoke()
    {
        return view('documentation.select', Example::Select->variables());
    }
}
