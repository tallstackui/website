<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Warning extends Component
{
    public string $type;

    public function __construct(
        ?string $type = null,
        bool $info = false,
        bool $success = false,
        bool $warning = false,
        bool $error = false,
        public ?string $title = null,
        public ?string $text = null,
    ) {
        $resolved = match (true) {
            $info => 'info',
            $success => 'success',
            $error => 'error',
            $warning => 'warning',
            default => $type,
        };

        $this->type = in_array($resolved, ['info', 'success', 'warning', 'error'], true) ? $resolved : 'warning';
    }

    public function render(): View
    {
        return view('components.warning');
    }
}
