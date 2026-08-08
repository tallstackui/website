<?php

declare(strict_types=1);

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

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
            $info    => 'info',
            $success => 'success',
            $error   => 'error',
            $warning => 'warning',
            default  => $type,
        };

        $this->type = in_array($resolved, ['info', 'success', 'warning', 'error'], true) ? $resolved : 'warning';
    }

    public function render(): View
    {
        return view('components.warning');
    }
}
