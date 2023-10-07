<?php

namespace App\Http\Controllers\Documentation;

use App\Enums\Example;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class Dialog extends Controller
{
    public function __invoke(): View
    {
        return view('documentation.dialog', Example::Dialog->variables());
    }
}
