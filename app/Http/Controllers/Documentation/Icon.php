<?php

namespace App\Http\Controllers\Documentation;

use App\Enums\Example;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Icon extends Controller
{
    public function __invoke(Request $request)
    {
        return view('documentation.icon', Example::Icon->variables());
    }
}
