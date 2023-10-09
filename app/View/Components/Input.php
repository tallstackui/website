<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;

class Input extends \TallStackUi\View\Components\Form\Input
{
    public function __construct()
    {
        parent::__construct();
    }

    public function customization(): array
    {
        return [/* ... */];
    }

    public function render(): View
    {
        return view('components.input');
    }
}
