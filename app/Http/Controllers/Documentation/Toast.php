<?php

namespace App\Http\Controllers\Documentation;

use App\Enums\Example;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class Toast extends Controller
{
    public function __invoke(): View
    {
        return view('documentation.ui.toast', Example::Toast->variables());
    }
}
