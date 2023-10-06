<?php

namespace App\Http\Controllers\Documentation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Tooltip extends Controller
{

    public function __invoke()
    {
        $test =  <<<HTML
        <x-button label="Default" />
        <x-button primary label="Primary" />
        <x-button secondary label="Secondary" />
        <x-button positive label="Positive" />
    HTML;

        return view('pages.docs.tooltip', compact('test'));
    }
}
