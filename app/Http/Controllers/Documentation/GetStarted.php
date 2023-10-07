<?php

namespace App\Http\Controllers\Documentation;

use App\Enums\Example;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use ReflectionException;
use Throwable;

class GetStarted extends Controller
{
    /** @throws ReflectionException|Throwable */
    public function __invoke(): View
    {
        return view('documentation.get-started', Example::GetStarted->variables());
    }
}
