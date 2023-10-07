<?php

namespace App\Http\Controllers\Documentation;

use App\Enums\Example;
use App\Http\Controllers\Controller;

class Dialog extends Controller
{
    public function __invoke()
    {
        return view('documentation.dialog', Example::Dialog->variables());
    }
}
