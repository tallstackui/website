<?php

namespace App\Http\Controllers\Documentation;

use App\Enums\Example;
use App\Http\Controllers\Controller;
use ReflectionException;
use Throwable;

class Tab extends Controller
{
    /** @throws ReflectionException|Throwable */
    public function __invoke()
    {
        return view('documentation.tab', Example::Tab->variables());
    }
}
