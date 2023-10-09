<?php

namespace App\Http\Controllers\Documentation;

use App\Enums\Example;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class Personalization extends Controller
{
    public function concept(): View
    {
        return view('documentation.personalization.concept');
    }

    public function soft(): View
    {
        return view('documentation.personalization.soft', Example::Personalization->variables());
    }

    public function deep(): View
    {
        return view('documentation.personalization.deep');
    }
}
