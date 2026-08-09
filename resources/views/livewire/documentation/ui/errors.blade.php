<?php

declare(strict_types=1);

use Livewire\Component;

new class extends Component {
    public array $only = [];

    public ?string $title = null;

    public ?string $color = "red";

    public ?bool $close = false;

    public ?bool $showSlot = false;

    public ?bool $events = false;

    public ?bool $withoutTitle = false;

    public ?bool $listNumeric = false;

    public ?bool $footerEnd = false;

    public ?bool $paddingless = false;

    public ?bool $shadowless = false;

    public ?bool $bordered = false;

    public function mount(): void
    {
        $this->addError("name", "The name field is required.");
        $this->addError("description", "The description field is required.");
    }
};

?>

<div>
    @if ($events)
        <x-errors close x-on:close="alert('Errors Closed')" />
    @elseif ($footerEnd)
        <x-errors :$only :$title :$color :$close>
            <x-slot:footer end>
                <x-button color="red" sm round>Fix now</x-button>
            </x-slot>
        </x-errors>
    @elseif ($showSlot)
        <x-errors :$only :$title :$color :$close>
            <x-slot:footer>
                <div class="flex justify-end">
                    <p class="text-sm text-red-500">Footer Slot</p>
                </div>
            </x-slot>
        </x-errors>
    @else
        <x-errors
            :$only
            :$title
            :$color
            :$close
            :$paddingless
            :$shadowless
            :$bordered
            :without-title="$withoutTitle"
            :list-numeric="$listNumeric"
        />
    @endif
</div>
