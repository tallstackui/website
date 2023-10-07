<?php

use Livewire\Volt\Component;

new class extends Component {
    public array $only = [];
    public ?string $title = null;

    public function mount(): void
    {
        $this->addError('name', 'The name field is required.');
        $this->addError('description', 'The description field is required.');
    }
} ?>

<div>
    <x-errors :$only :$title />
</div>
