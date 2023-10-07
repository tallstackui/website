<?php

namespace App\Http\Controllers\Documentation;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class GetStarted extends Controller
{
    public function __invoke(): View
    {
        $installation = <<<HTML
composer require tallstackui/tallstackui
HTML;

        $layout = <<<HTML
<html>
    <head>
        ...
        <tallstackui:scripts />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
</html>
HTML;

        $command = <<<HTML
php artisan tasteui:install
HTML;

        return view('documentation.get-started', compact('installation', 'layout', 'command'));
    }
}
