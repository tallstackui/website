<?php

namespace App\Enums\Examples\Form;

class UploadAsync
{
    public const string BASIC = <<<'HTML'
    <x-upload.async wire:model="document" :route="route('uploads.store')" label="Document" />
    HTML;

    public const string MULTIPLE = <<<'HTML'
    <x-upload.async wire:model="gallery"
                    :route="route('uploads.gallery')"
                    label="Gallery"
                    accept="image/*"
                    multiple
                    :limit="6"
                    :columns="4"
                    :max-size="512" />
    HTML;

    public const string MANUAL = <<<'HTML'
    <x-upload.async wire:model="files" :route="route('uploads.store')" multiple manual />
    HTML;

    public const string NATIVE = <<<'HTML'
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <x-upload.async name="attachments" :route="route('uploads.store')" multiple />
        <x-button type="submit" text="Save" />
    </form>
    HTML;

    public const string VALUE = <<<'PHP'
    [
        [
            'id' => '9f8c2b1e-...',
            'path' => 'posts/attachments/abc-def.jpg',
            'real_name' => 'photo.jpg',
            'size' => 1234567,
            'mime' => 'image/jpeg',
            'url' => '/storage/posts/attachments/abc-def.jpg',
        ],
    ]
    PHP;

    public const string CONTROLLER = <<<'PHP'
    use Illuminate\Http\Request;
    use TallStackUi\Http\AsyncUpload\Uploader;

    class UploadController
    {
        use Uploader;

        public function store(Request $request)
        {
            return $this->upload($request, [
                'disk' => 'public',
                'directory' => 'posts/attachments',
                'rules' => ['file' => ['mimes:jpg,png,pdf']],
            ]);
        }
    }
    PHP;

    public const string STORE = <<<'PHP'
    return $this->upload($request, [
        'disk' => 'public',
        'store' => fn (SplFileInfo $file, AsyncUploadRequest $request): string => $post
            ->addMedia($file)
            ->usingFileName($request->input('real_name'))
            ->toMediaCollection('attachments')
            ->getPathRelativeToRoot(),
    ]);
    PHP;

    public const string AUTHORIZE = <<<'PHP'
    'authorize' => fn (AsyncUploadRequest $request): bool => $request->user()->can('upload', $post),
    PHP;

    public const string CLEAR = <<<'PHP'
    // routes/console.php

    Schedule::command('tallstackui:async-upload:clear')->daily();
    PHP;

    public const string EVENTS = <<<'HTML'
    <x-upload.async wire:model="files"
                    :route="route('uploads.store')"
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
