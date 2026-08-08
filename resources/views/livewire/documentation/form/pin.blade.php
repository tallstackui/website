<?php

declare(strict_types=1);

use Livewire\Component;
use TallStackUi\Traits\Interactions;

new class extends Component
{
    use Interactions;

    public int $mode = 1;

    public string $code = '12345';

    public ?string $pin = null;

    public function verify(): void
    {
        $this->toast()->success('Verified', 'Pin code submitted successfully.')->send();
    }
};

?>

<div>
    @if ($mode === 1)
        <x-pin length="5" wire:model="code" clear />
    @elseif ($mode === 2)
        <form wire:submit="verify">
            <x-pin length="5" wire:model.live="pin" label="Enter your code" smart numbers />
        </form>
    @endif
</div>
