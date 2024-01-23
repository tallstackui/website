<?php

use Livewire\Volt\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Arr;
use Illuminate\Http\UploadedFile;

new class extends Component {
    use WithFileUploads;

    public $photo1;
    public $photo2;
    public $photo3;
    public $photo4 = [];
    public $photo5;
    public $photo6;
    public $photo7;

    public int $model = 1;

    public function deleteUpload($original, $temporary)
    {
        $property = $this->model === 3 ? 'photo3' : 'photo7';

        if (!$this->{$property}) {
            return;
        }

        $files = Arr::wrap($this->{$property});

        /** @var UploadedFile $file */
        $file = collect($files)->filter(fn(UploadedFile $item) => $item->getFilename() === $temporary)->first();

        rescue(fn() => $file->delete(), report: false);

        $collect = collect($files)->filter(fn(UploadedFile $item) => $item->getFilename() !== $temporary);

        $this->{$property} = is_array($this->{$property}) ? $collect->toArray() : $collect->first();
    }
} ?>

<div>
    @if ($model === 1)
        <x-upload wire:model="photo1"/>
    @elseif ($model === 2)
        <x-upload label="Photos"
                  hint="Sent us your images"
                  tip="Drag and drop your images here"
                  wire:model="photo2"/>
    @elseif ($model === 3)
        <x-upload wire:model="photo3" delete/>
    @elseif ($model === 4)
        <x-upload wire:model="photo4" multiple/>
    @elseif ($model === 5)
        <x-upload wire:model="photo5" tip="Accepting only pdf" accept="application/pdf"/>
    @elseif ($model === 6)
        <x-upload wire:model="photo6" multiple>
            <x-slot:footer>
                <x-button class="w-full">
                    Save
                </x-button>
            </x-slot:footer>
        </x-upload>
    @elseif ($model === 7)
        <x-upload wire:model="photo7" delete x-on:upload="alert('Uploaded!')" x-on:remove="alert('Removed')" />
    @endif
</div>
