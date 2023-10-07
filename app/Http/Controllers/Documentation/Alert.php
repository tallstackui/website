<?php

namespace App\Http\Controllers\Documentation;

use App\Http\Controllers\Controller;
class Alert extends Controller
{
    public function __invoke()
    {
        return view('documentation.alert');
    }
}
