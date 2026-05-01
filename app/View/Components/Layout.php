<?php

namespace App\View\Components;

use App\Traits\VersionDiscovery;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Layout extends Component
{
    use VersionDiscovery;

    public function __construct(
        public ?string $title = null,
        public ?string $version = null,
        public ?string $section = null,
        public ?string $description = null,
        public ?string $personalization = null,
        public ?string $customization = null,
        public string|array|null $ai = null,
        /* on this page section */
        public array $content = [],
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
