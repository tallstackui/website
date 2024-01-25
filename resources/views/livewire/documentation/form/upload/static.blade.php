<?php

use Livewire\Volt\Component;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Finder\SplFileInfo;
use TallStackUi\Traits\Interactions;

new class extends Component {
    use Interactions;

    public array $photos = [];

    public function mount(): void
    {
        $this->photos = collect(File::allFiles(public_path('assets/demo')))->map(fn (SplFileInfo $file) => [
            'name' => $file->getFilename(),
            'extension' => $file->getExtension(),
            'size' => $file->getSize(),
            'path' => $file->getPath(),
            'url' => '/assets/demo/'.$file->getFilename(),
        ])->toArray();
    }

    public function deleteUpload(array $contents): void
    {
        $this->dialog()
            ->error('Ooops!', 'This is a demonstration only 😜')
            ->send();
    }
} ?>

<div>
    <x-upload label="Recently Uploaded Images"
              hint="This is your images uploaded recently"
              :placeholder="count($photos) . ' images'"
              wire:model="photos"
              x-on:remove="show = false"
              static
              delete />
</div>
