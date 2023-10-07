<?php

namespace App\Http\Controllers\Documentation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Avatar extends Controller
{
    public function __invoke(Request $request)
    {
        $basic = <<<HTML
<x-avatar label="TS" />
HTML;

        $colors = <<<HTML
<x-avatar label="TS" color="secondary" />
<x-avatar label="TS" color="orange" />
<x-avatar label="TS" color="sky" />
HTML;

        $sizes = <<<HTML
<x-avatar label="SM" sm />
<x-avatar label="MD" md />
<x-avatar label="LG" lg />
HTML;

        $square = <<<HTML
<x-avatar label="TS" sm square />
<x-avatar label="TS" md square />
<x-avatar label="TS" lg square />
HTML;

        $modelable = <<<HTML
<x-avatar.modelable :model="auth()->user()" />
HTML;

        $modelableCustomized = <<<HTML
<x-avatar.modelable :model="auth()->user()" property="email" />
HTML;

        $modelableCustomizedColors = <<<HTML
<x-avatar.modelable :model="auth()->user()" property="email" background="ff0000" color="f2f2f2" />
HTML;

        $placeholder = <<<HTML
<x-avatar />
<x-avatar color="secondary" />
<x-avatar color="orange" />
<x-avatar color="sky" />
<x-avatar color="blue" />
HTML;

        return view('documentation.avatar', compact('basic', 'sizes', 'colors', 'square', 'modelable', 'modelableCustomized', 'modelableCustomizedColors', 'placeholder'));
    }
}
