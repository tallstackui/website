<?php

namespace App\Http\Controllers\Documentation;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class Internal extends Controller
{
    // It actually is related with `error` component.
    public function index(): View
    {
        return view('documentation.internal.error');
    }

    public function hint(): View
    {
        return view('documentation.internal.hint');
    }

    public function label(): View
    {
        return view('documentation.internal.label');
    }

    public function wrapper(): View
    {
        return view('documentation.internal.wrapper');
    }
}
