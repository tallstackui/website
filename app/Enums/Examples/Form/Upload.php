<?php

namespace App\Enums\Examples\Form;

class Upload
{
    public const BASIC = <<<'HTML'
    <x-upload />
    HTML;

    public const LABEL_HINT_TIP = <<<'HTML'
    <x-upload label="Screenshot"
              hint="We need to analyze your screenshot"
              tip="Drag and drop your screenshot here" />
    HTML;

    public const DELETE = <<<'HTML'
    <!-- The Livewire component should have the "deleteUpload" method -->
    
    <x-upload delete />

    <!-- Or you can specify a different method name -->

    <x-upload delete delete-method="deleting" />
    HTML;

    public const DELETE_METHOD = <<<'HTML'
    use Illuminate\Http\UploadedFile;
    
    public function deleteUpload(string $originalName, string $temporaryName): void
    {
        // Change this for the name of the property
        // that you are using to store the temporary files
        if (!$this->photos) {
            return;
        }

        $files = Arr::wrap($this->photos);

        /** @var UploadedFile $file */
        $file = collect($files)->filter(fn (UploadedFile $item) => $item->getFilename() === $temporaryName)->first();

        // 1. Here we delete the file. Even if we have a error here, we simply 
        // ignore it because as long as the file is not persisted, it is 
        // temporary and will be deleted at some point if there is a failure here.
        rescue(fn () => $file->delete(), report: false);

        $collect = collect($files)->filter(fn (UploadedFile $item) => $item->getFilename() !== $temporaryName);

        // 2. We guarantee restore of remaining files regardless of upload 
        // type, whether you are dealing with multiple or single uploads
        $this->photos = is_array($this->photos) ? $collect->toArray() : $collect->first();
    }
    HTML;

    public const MULTIPLE = <<<'HTML'
    <!-- The Livewire property must be an array -->
    
    <x-upload multiple />
    HTML;

    public const MULTIPLE_BATCHES = <<<'HTML'
    use Livewire\Component;
    use Livewire\WithFileUploads;
    use Illuminate\Http\UploadedFile;

    class MyComponent extends Component
    {
        use WithFileUploads;
    
        // For multiple files the property must be an array [tl! highlight:1]
        public $photos = [];

        // 1. We create a property that will temporarily store the uploaded files
        public $backup = [];

        public function updatingPhotos(): void
        {
            // 2. We store the uploaded files in the temporary property
            $this->backup = $this->photos;
        }
    
        public function updatedPhotos(): void
        {
            if (!$this->photos) {
                return;
            }
    
            // 3. We merge the newly uploaded files with the saved ones 
            $file = Arr::flatten(array_merge($this->backup, [$this->photos]));
    
            // 4. We finishing by removing the duplicates
            $this->photos = collect($file)->unique(fn (UploadedFile $item) => $item->getClientOriginalName())->toArray();
        }
    }
    HTML;

    public const MULTIPLE_BATCHES_OTHER_PROPERTIES = <<<'HTML'
    // Supposing you want to use $files instead of $photos:

    public $photos = []; // [tl! remove]
    public $files = []; // [tl! add]
    
    public function updatingPhotos(): void {} // [tl! remove]
    public function updatingFiles(): void {} // [tl! add]
    
    public function updatedPhotos(): void {} // [tl! remove]
    public function updatedFiles(): void {} // [tl! add]
    HTML;

    public const ACCEPT = <<<'HTML'
    <x-upload accept="application/pdf" />
    HTML;

    public const FOOTER_SLOT = <<<'HTML'
    <x-upload>
        <x-slot:footer>
            <x-button class="w-full">
                Save
            </x-button>
        </x-slot:footer>
    </x-upload>
    HTML;

    public const FOOTER_SLOT_WHEN_UPLOADED = <<<'HTML'
    <x-upload>
        <x-slot:footer when-uploaded> {{-- [tl! highlight] --}}
            <x-button class="w-full" wire:click="store">
                Save
            </x-button>
        </x-slot:footer>
    </x-upload>
    HTML;

    public const EVENTS = <<<'HTML'
    <!-- The listener receive the uploaded file $event.detail.files -->
    <x-upload x-on:upload="console.log($event.detail.files)" />
    
    <!-- The listener receive the uploaded file $event.detail.file -->
    <x-upload delete x-on:remove="console.log($event.detail.file)" />
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->form('upload')
        ->block('block', 'classes');
    HTML;
}
