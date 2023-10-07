<?php

namespace App\Http\Controllers\Documentation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GetStarted extends Controller
{
    public function __invoke()
    {
        return view('documentation.get-started');
    }
}
