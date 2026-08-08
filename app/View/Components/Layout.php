<?php

declare(strict_types=1);

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Layout extends Component
{
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

    /**
     * The major this deployment publishes. Read here rather than from the shared
     * `$version` variable, which the component's own prop shadows inside its view.
     */
    public function current(): string
    {
        return config('documentation.version');
    }

    public function render(): View
    {
        return view('layouts.app');
    }
}
