<?php

namespace App\Http\Controllers\Documentation;

use App\Enums\Example;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use ReflectionException;
use Throwable;

class Error extends Controller
{
    /** @throws ReflectionException|Throwable */
    public function __invoke(Request $request)
    {
        return view('documentation.errors', Example::Error->variables());
    }
}