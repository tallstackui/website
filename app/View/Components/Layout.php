<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Layout extends Component
{
    public function __construct(
        public ?string $title = null,
        public ?string $section = null,
        public ?string $description = null,
        public ?string $personalization = null,
        /* footer navigation */
        public ?string $navigation = null,
        public ?string $back = null,
        public ?string $next = null,
        /* on this page section */
        public bool $right = true,
        public bool $torchlight = true,
    ) {
        //
    }

    public function render(): View
    {
        return view('layouts.app');
    }
}
