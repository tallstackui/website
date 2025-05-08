<?php

use Livewire\Volt\Component;

new class extends Component {
    use \TallStackUi\Traits\Interactions;

    public ?int $model = 1;

    public array $metadata = [
        [
            'key' => 'tallstackui',
            'value' => 'AJ Meireles',
        ],
        [
            'key' => 'flxui',
            'value' => 'Caleb Porzio',
        ],
    ];

    public array $empty = [
        [
            'key' => '',
            'value' => '',
        ],
    ];

    public function deleted($index, $row)
    {
        $this->dialog()
            ->success('Deleted', "Key <b>{$row[$index]['key']}</b> deleted successfully.")
            ->send();
    }
} ?>

<div>
    @if ($model === 1)
        <x-key-value wire:model="metadata" />
    @elseif ($model === 2)
        <x-key-value wire:model="metadata" label="LIBRARY" value="CREATOR" />
    @elseif ($model === 3)
        <x-key-value wire:model="empty" :placeholders="false" />
    @elseif ($model === 4)
        <x-key-value wire:model="metadata" :limit="3" />
    @elseif ($model === 5)
        <x-key-value wire:model="metadata" static />
    @elseif ($model === 6)
        <x-key-value wire:model="metadata" deletable delete-method="deleted" />
    @elseif ($model === 7)
        <x-key-value wire:model="metadata" icon="x-mark" deletable delete-method="deleted" />
    @elseif ($model === 8)
        <x-key-value wire:model="metadata">
            <x-slot:header>
                Header Slot
            </x-slot:header>
        </x-key-value>
    @elseif ($model === 9)
        <x-key-value wire:model="metadata"
                     x-on:add="alert('Added')"
                     x-on:remove="alert('Removed')"
                     deletable />
    @endif
</div>
