<?php

namespace App\Http\Controllers\Documentation\Ui;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class Dropdown extends Controller
{
    public function __invoke(): View
    {
        return view('documentation.ui.dropdown');
    }
}
