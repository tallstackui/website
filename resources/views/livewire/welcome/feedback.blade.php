<?php

use Livewire\Component;

new class extends Component {
    public int $rating = 5;

    public bool $notifications = true;

    public function evaluate(int $value): void
    {
        $this->rating = $value;
    }
};

?>

<div class="space-y-3">
    <x-toggle label="Notifications" wire:model.live="notifications" />
    <x-rating :rate="$rating" />
</div>
