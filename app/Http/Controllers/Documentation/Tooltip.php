<?php

namespace App\Http\Controllers\Documentation;

use App\Enums\Example;
use App\Http\Controllers\Controller;

class Tooltip extends Controller
{
    public function __invoke()
    {
        return view('documentation.tooltip', Example::Tooltip->variables());
    }
}
