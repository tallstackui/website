<?php

namespace App\Enums\Examples\V4\Ui;

class Editor
{
    public const string BASIC = <<<'HTML'
    <x-editor wire:model="content" />
    HTML;

    public const string LABEL_HINT = <<<'HTML'
    <x-editor wire:model="content" label="Article" hint="Keep it under a thousand words" />
    HTML;

    public const string TOOLBAR = <<<'HTML'
    <x-editor wire:model="content" :toolbar="['style', 'bold', 'italic', 'link', 'image']" />
    HTML;

    public const string HEIGHTS = <<<'HTML'
    <x-editor wire:model="content" min-height="20rem" max-height="60vh" />
    HTML;

    public const string READONLY = <<<'HTML'
    <x-editor wire:model="content" readonly />
    <x-editor wire:model="content" disabled />
    HTML;

    public const string COUNTERS = <<<'HTML'
    <x-editor wire:model="content" :counters="false" />
    HTML;

    public const string MARKDOWN = <<<'HTML'
    <x-editor wire:model="content" markdown />
    HTML;

    public const string NATIVE = <<<'HTML'
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <x-editor name="body" label="Body" />
        <x-button type="submit" text="Save" />
    </form>
    HTML;

    public const string UPLOAD_BLADE = <<<'HTML'
    <x-editor wire:model="content" upload-property="picture" upload-method="storeImage" />
    HTML;

    public const string UPLOAD_PHP = <<<'PHP'
    use Livewire\WithFileUploads;

    class PostForm extends Component
    {
        use WithFileUploads;

        public string $content = '';

        public $picture = null;

        public function storeImage(): string
        {
            $this->validate(['picture' => ['image', 'max:5120']]);

            return asset('storage/'.$this->picture->store('posts', 'public'));
        }
    }
    PHP;

    public const string EVENTS = <<<'HTML'
    <x-editor wire:model="content"
              x-on:editor:change="words = $event.detail.words"
              x-on:editor:link-inserted="console.log($event.detail.href)"
              x-on:editor:image-inserted="console.log($event.detail.src)"
              x-on:editor:fullscreen-toggled="console.log($event.detail.on)" />
    HTML;

    public const string LIVEWIRE = <<<'HTML'
    {{-- The component is wire:ignore'd, so a runtime attribute change needs a wire:key --}}
    <x-editor wire:model="content" :readonly="$locked" wire:key="editor-{{ $locked ? 'locked' : 'open' }}" />
    HTML;

    public const string CONFIGURATION = <<<'PHP'
    // config/tallstackui.php

    'editor' => [
        Components\Editor\Component::class,
        [
            'markdown' => false,
            'toolbar' => ['style', 'blockquote', 'bold', '...', 'redo', 'fullscreen'],
            'counters' => true,
            'min_height' => '12rem',
            'max_height' => '40rem',
            'upload' => [
                'mimes' => ['image/png', 'image/jpeg', 'image/gif', 'image/webp'],
                'max_size' => 5120,
            ],
            'sanitization' => [
                'allowed_tags' => ['p', 'br', 'strong', '...', 'blockquote', 'hr'],
                'allowed_attributes' => ['a' => ['href', 'target', 'rel']],
                'allowed_styles' => ['font-size', 'text-align', 'margin-left'],
            ],
        ],
    ],
    PHP;

    public const string SCOPES = <<<'PHP'
    // The two dialogs are <x-modal> instances under a fixed scope
    TallStackUi::customize('modal', scope: 'editor-link')->block('wrapper.fourth', 'rounded-2xl');
    TallStackUi::customize('modal', scope: 'editor-image')->block('wrapper.fourth', 'rounded-2xl');

    // The toolbar dropdowns are <x-dropdown> instances
    TallStackUi::customize('dropdown', scope: 'editor-toolbar')->block('slot.wrapper', 'p-1');
    PHP;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->editor()
        ->block('block', 'classes');
    HTML;
}
