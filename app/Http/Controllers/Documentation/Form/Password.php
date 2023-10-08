<?php

namespace App\Http\Controllers\Documentation\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Password extends Controller
{
    public function __invoke(Request $request)
    {
        return view('documentation.form.password');
    }
}
