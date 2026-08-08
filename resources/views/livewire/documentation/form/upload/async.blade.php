<?php

declare(strict_types=1);

use Livewire\Component;

new class extends Component
{
    public int $mode = 1;

    public mixed $document = null;

    public array $gallery = [];

    public array $files = [];
};

?>

<div>
    @if ($mode === 1)
        <div class="space-y-2">
            <x-upload.async
                wire:model.live="document"
                :route="route('demo.async-upload')"
                label="Document"
                accept="image/*"
                :max-size="50"
            />
            <p class="dark:text-dark-400 text-sm text-gray-500">
                Bound value: <b>{{ $document['real_name'] ?? 'null' }}</b>
            </p>
        </div>
    @elseif ($mode === 2)
        <x-upload.async
            wire:model="gallery"
            :route="route('demo.async-upload')"
            label="Gallery"
            accept="image/*"
            multiple
            :limit="6"
            :columns="4"
            :max-size="50"
        />
    @elseif ($mode === 3)
        <x-upload.async
            wire:model="files"
            :route="route('demo.async-upload')"
            label="Files"
            accept="image/*"
            multiple
            manual
            :max-size="50"
        />
    @endif
</div>
