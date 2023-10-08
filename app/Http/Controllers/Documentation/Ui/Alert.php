<?php

namespace App\Http\Controllers\Documentation\Ui;

use App\Enums\Example;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class Alert extends Controller
{
    public function __invoke(): View
    {
        return view('documentation.ui.alert', Example::Alert->variables());
    }
}
