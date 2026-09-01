<?php

declare(strict_types=1);

use Livewire\Component;

new class extends Component {
    public int $mode = 1;

    public mixed $document = null;

    public array $gallery = [];

    public array $files = [];

    public array $photos = [];

    public array $covers = [];
};

?>

<div>
    @if ($mode === 1)
        <div class="space-y-2">
            <x-upload.async
                wire:model.live="document"
                :route="route('demo.async-upload')"
                label="Document"
                accept="application/pdf"
                :max-size="60"
            />
            <p class="dark:text-dark-400 text-sm text-gray-500">
                Bound value:
                <b>{{ $document["real_name"] ?? "null" }}</b>
            </p>
        </div>
    @elseif ($mode === 2)
        <x-upload.async
            wire:model="gallery"
            :route="route('demo.async-upload')"
            label="Gallery"
            accept="application/pdf"
            multiple
            :limit="6"
            :columns="4"
            :max-size="60"
        />
    @elseif ($mode === 3)
        <x-upload.async
            wire:model="files"
            :route="route('demo.async-upload')"
            label="Files"
            accept="application/pdf"
            multiple
            manual
            :max-size="60"
        >
            <x-slot:footer>
                <div
                    x-show="files.length"
                    class="mt-3 flex items-center justify-between"
                >
                    <span
                        x-text="summary()"
                        class="text-xs text-gray-500"
                    ></span>

                    <div class="flex items-center gap-2">
                        <x-button color="red" x-on:click="clear()" round sm>
                            Abort & Clear
                        </x-button>
                        <x-button
                            x-bind:disabled="!sendable() || disabled"
                            x-on:click="send()"
                            round
                        >
                            Upload Now
                        </x-button>
                    </div>
                </div>
            </x-slot>
        </x-upload.async>
    @elseif ($mode === 4)
        <x-upload.async
            wire:model="photos"
            :route="route('demo.async-upload')"
            label="Photos"
            accept="image/*"
            editor
            multiple
            :max-size="60"
        />
    @elseif ($mode === 5)
        <x-upload.async
            wire:model="covers"
            :route="route('demo.async-upload')"
            label="Covers"
            accept="image/*"
            editor
            aspect="16:9"
            multiple
            manual
            :max-size="60"
        >
            <x-slot:footer>
                <div
                    x-show="files.length"
                    class="mt-3 flex items-center justify-between"
                >
                    <span
                        x-text="summary()"
                        class="text-xs text-gray-500"
                    ></span>

                    <div class="flex items-center gap-2">
                        <x-button color="red" x-on:click="clear()" round sm>
                            Abort & Clear
                        </x-button>
                        <x-button
                            x-bind:disabled="!sendable() || disabled"
                            x-on:click="send()"
                            round
                        >
                            Upload Now
                        </x-button>
                    </div>
                </div>
            </x-slot>
        </x-upload.async>
    @endif
</div>
