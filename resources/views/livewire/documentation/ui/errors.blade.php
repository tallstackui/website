<?php

use Livewire\Volt\Component;

new class extends Component {
    public array $only = [];
    public ?string $title = null;
    public ?string $color = 'red';
    public ?bool $close = false;
    public ?bool $slot = false;
    public ?bool $events = false;

    public function mount(): void
    {
        $this->addError('name', 'The name field is required.');
        $this->addError('description', 'The description field is required.');
    }
} ?>

<div>
    @if ($events)
        <x-errors close x-on:close="alert('Errors Closed')" />
    @else
        @if (!$slot)
            <x-errors :$only :$title :$color :$close />
        @else
            <x-errors :$only :$title :$color :$close>
                <x-slot:footer>
                    <div class="flex justify-end">
                        <p class="text-sm text-red-500">
                            Footer Slot
                        </p>
                    </div>
                </x-slot:footer>
            </x-errors>
        @endif
    @endif
</div>
