<?php

namespace App\Http\Controllers\Documentation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Tooltip extends Controller
{

    public function __invoke()
    {
        $basic =  <<<HTML
<x-tooltip text="Top" position="top" />
<x-tooltip text="Bottom" position="bottom" />
<x-tooltip text="Left" position="left" />
<x-tooltip text="Right" position="right" />
HTML;

        $icons = <<<HTML
<x-tooltip text="Top" position="top" icon="exclamation-circle" />
<x-tooltip text="Bottom" position="bottom" icon="exclamation-triangle" />
<x-tooltip text="Left" position="left" icon="shield-exclamation" />
<x-tooltip text="Right" position="right" />
HTML;

        $sizes = <<<HTML
<x-tooltip text="SM" position="top" sm />
<x-tooltip text="MD" position="bottom" md />
<x-tooltip text="LG" position="left" lg />
HTML;

        $colors = <<<HTML
<x-tooltip text="Primary" position="top" color="primary" />
<x-tooltip text="Secondary" position="bottom" color="secondary" />
<x-tooltip text="Sky" position="left" color="sky" />
<x-tooltip text="Orange" position="right" color="orange" />
HTML;
        $outlines = <<<HTML
<x-tooltip text="Primary" position="top" color="primary" outline />
<x-tooltip text="Secondary" position="bottom" color="secondary" outline />
<x-tooltip text="Sky" position="left" color="sky" outline />
<x-tooltip text="Orange" position="right" color="orange" outline />
HTML;

        return view('documentation.tooltip', compact('basic', 'icons', 'sizes', 'colors', 'outlines'));
    }
}
