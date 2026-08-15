<?php

declare(strict_types=1);

namespace App\Enums\Examples\Ui;

class Editor
{
    public const string BASIC = <<<'HTML'
    <x-editor />
    HTML;

    public const string OUTPUT_CLASSES = <<<'HTML'
    <x-editor output-classes />
    HTML;

    public const string OUTPUT_CLASSES_HTML = <<<'HTML'
    <ol class="tsui-editor-numeric-list">
        <li class="tsui-editor-list-item">…</li>
    </ol>
    HTML;

    public const string OUTPUT_CLASSES_CSS = <<<'CSS'
    .tsui-editor-numeric-list { @apply my-2 list-decimal pl-6; }
    .tsui-editor-heading-1 { @apply text-3xl font-bold; }
    .tsui-editor-paragraph { @apply my-2; }
    CSS;

    public const string OUTPUT_CLASSES_RENAME = <<<'HTML'
    <x-editor :output-classes="['ol' => 'tsui-editor-steps']" />
    HTML;

    public const string OUTPUT_CLASSES_PREFIX = <<<'HTML'
    <x-editor output-classes="blog-" />
    HTML;

    public const string OUTPUT_CLASSES_PREFIX_HTML = <<<'HTML'
    <ol class="blog-numeric-list">
        <li class="blog-list-item">…</li>
    </ol>
    HTML;

    public const string OUTPUT_CLASSES_CONFIG = <<<'PHP'
    // ...

    'editor' => [
        Components\Editor\Component::class,
        // ...
        [
            'markdown'              => false,
            'output_classes'        => true, // [tl! focus:1]
            'output_classes_prefix' => null,
            'toolbar'               => [/* ... */],

            // ...
    // ...
    PHP;

    public const string LABEL_HINT = <<<'HTML'
    <x-editor label="Article" hint="Keep it under a thousand words" />
    HTML;

    public const string TOOLBAR = <<<'HTML'
    <x-editor :toolbar="['style', 'bold', 'italic', 'link', 'image']" />
    HTML;

    public const string HEIGHTS = <<<'HTML'
    <x-editor min-height="20rem" max-height="60vh" />
    HTML;

    public const string READONLY = <<<'HTML'
    <x-editor readonly />

    <x-editor disabled />
    HTML;

    public const string COUNTERS = <<<'HTML'
    <x-editor :counters="false" />
    HTML;

    public const string MARKDOWN = <<<'HTML'
    <x-editor markdown />
    HTML;

    public const string NATIVE = <<<'HTML'
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <x-editor name="body" label="Body" />
        <x-button type="submit" text="Save" />
    </form>
    HTML;

    public const string UPLOAD_BLADE = <<<'HTML'
    <x-editor upload-property="picture" upload-method="storeImage" />
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
    <x-editor x-on:editor:change="words = $event.detail.words"
              x-on:editor:link-inserted="console.log($event.detail.href)"
              x-on:editor:image-inserted="console.log($event.detail.src)"
              x-on:editor:fullscreen-toggled="console.log($event.detail.on)" />
    HTML;

    public const string LIVEWIRE = <<<'HTML'
    <!-- The component is wire:ignore, so a runtime attribute change needs a wire:key -->
    <x-editor :readonly="$locked" wire:key="editor-{{ $locked ? 'locked' : 'open' }}" />
    HTML;

    public const string SCOPES = <<<'PHP'
    // The two dialogs are <x-modal> instances under a fixed scope
    TallStackUi::customize('modal', scope: 'editor.modal.link')
        ->block('wrapper.fourth', 'rounded-2xl');

    TallStackUi::customize('modal', scope: 'editor.modal.image')
        ->block('wrapper.fourth', 'rounded-2xl');

    // The toolbar dropdowns are <x-dropdown> instances
    TallStackUi::customize('dropdown', scope: 'editor.toolbar')
        ->block('slot.wrapper', 'p-1');
    PHP;

    public const string CUSTOMIZATION = <<<'HTML'
    TallStackUi::customize()
        ->editor()
        ->block('block', 'classes');
    HTML;
}
