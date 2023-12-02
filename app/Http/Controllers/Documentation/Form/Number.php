<?php

namespace App\Http\Controllers\Documentation\Form;

use App\Enums\Example;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Number extends Controller
{
    public function __invoke(Request $request)
    {
        return view('documentation.form.number', Example::Number->variables());
    }
}
