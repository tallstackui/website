<?php

namespace App\Http\Controllers\Documentation;

use App\Enums\Example;
use App\Http\Controllers\Controller;

class Tab extends Controller
{
    public function __invoke()
    {
        return view('documentation.tab', Example::Tab->variables());
    }
}
