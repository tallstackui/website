<?php

declare(strict_types=1);

namespace App\Enums\Examples\Form;

class UploadAsync
{
    public const string CONTROLLER = <<<'PHP'
    use Illuminate\Http\Request;
    use TallStackUi\Http\AsyncUpload\Uploader;

    class UploadController
    {
        use Uploader; // [tl! highlight]

        public function store(Request $request)
        {
            return $this->upload($request, [ // [tl! highlight:4]
                'disk' => 'public',
                'directory' => 'posts/attachments',
                'rules' => ['file' => ['mimes:jpg,png,pdf']],
            ]);
        }
    }
    PHP;

    public const string ROUTE = <<<'PHP'
    // routes/web.php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\UploadController;

    Route::post('/files/upload', [
        UploadController::class, 'store'
    ])->name('files.upload');
    PHP;

    public const string BASIC = <<<'HTML'
    <x-upload.async :route="route('files.upload')" label="Document" />
    HTML;

    public const string FILE_STRUCTURE = <<<'HTML'
    [
      'id'        => '9f1c...-uuid',
      'path'      => 'posts/attachments/8ad2....pdf',
      'real_name' => 'contract.pdf',
      'size'      => 184320,
      'mime'      => 'application/pdf',
      'url'       => 'http://app.test/storage/posts/attachments/8ad2....pdf',
    ]
    HTML;

    public const string MULTIPLE = <<<'HTML'
    <x-upload.async :route="route('files.upload')"
                    label="Gallery"
                    accept="application/pdf"
                    multiple
                    :limit="6"
                    :columns="4"
                    :max-size="60" />
    HTML;

    public const string MANUAL = <<<'HTML'
    <x-upload.async :route="route('files.upload')"
                    label="Files"
                    accept="application/pdf"
                    multiple
                    manual
                    :max-size="60">
        <x-slot:footer>
            <div x-show="files.length" class="mt-3 flex items-center justify-between">
                <span x-text="summary()" class="text-xs text-gray-500"></span>

                <div class="flex items-center gap-2">
                    <x-button color="red" x-on:click="clear()" round sm>Abort & Clear</x-button>
                    <x-button x-bind:disabled="!sendable() || disabled" x-on:click="send()" round>Upload Now</x-button>
                </div>
            </div>
        </x-slot:footer>
    </x-upload.async>
    HTML;

    public const string EDITOR = <<<'HTML'
    <x-upload.async :route="route('files.upload')"
                    label="Photos"
                    accept="image/*"
                    editor
                    multiple />
    HTML;

    public const string EDITOR_MANUAL = <<<'HTML'
    <!-- The edited file waits in the grid until send() -->

    <x-upload.async :route="route('files.upload')"
                    label="Covers"
                    accept="image/*"
                    editor
                    aspect="16:9"
                    multiple
                    manual>
        <x-slot:footer>
            <!-- ... -->
        </x-slot:footer>
    </x-upload.async>
    HTML;

    public const string STORE = <<<'PHP'
    return $this->upload($request, [
        'disk' => 'public',
        'store' => fn (SplFileInfo $file, AsyncUploadRequest $request): string => $post // [tl! highlight:4]
            ->addMedia($file)
            ->usingFileName($request->input('real_name'))
            ->toMediaCollection('attachments')
            ->getPathRelativeToRoot(),
    ]);
    PHP;

    public const string AUTHORIZE = <<<'PHP'
    return $this->upload($request, [
        // ...

        'authorize' => fn (AsyncUploadRequest $request): bool => $request->user()->can('upload', $post), // [tl! focus]
    ]);
    PHP;

    public const string CLEAR = <<<'PHP'
    // routes/console.php

    Schedule::command('tallstackui:async-upload:clear')->daily();
    PHP;

    public const string EVENTS = <<<'HTML'
    <x-upload.async :route="route('files.upload')"
                    x-on:added="console.log($event.detail.file)"
                    x-on:progress="console.log($event.detail.progress)"
                    x-on:success="console.log($event.detail.file)"
                    x-on:error="console.log($event.detail.error)"
                    x-on:complete="console.log($event.detail.files)" />
    HTML;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->form('upload.async')
        ->block('block', 'classes');
    HTML;
}
