<?php

namespace App\Http\Controllers\Documentation\Interactions;

use App\Enums\Example;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class Dialog extends Controller
{
    public function __invoke(): View
    {
        return view('documentation.interactions.dialog', Example::Dialog->variables());
    }
}
