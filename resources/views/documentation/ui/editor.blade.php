@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content ai="editor">
    <x-slot:title>Editor</x-slot>
    <x-slot:description>Editor component.</x-slot>
    <x-slot:customization>
        <livewire:customization :$customization component="Editor" />
    </x-slot>
    <x-section title="Basic Usage">
        <div class="space-y-4">
            <x-preview language="blade" :contents="$basic">
                <x-editor name="content" />
            </x-preview>
            <p>
                A WYSIWYG editor built on
                <x-block>contenteditable</x-block>
                ,
                <b>with no external JavaScript.</b> It outputs HTML or Markdown.
            </p>
        </div>
    </x-section>
    <x-section title="Caveats" disable-copy>
        <p>Before continuing, it is important to know:</p>
        <ul class="list mt-4 list-inside list-decimal space-y-2">
            <li>The component can be used inside or outside Livewire.</li>
            <li>
                Inside Livewire, use
                <x-block>wire:model</x-block>
                to bind the content.
            </li>
            <li>
                In a normal form, use
                <x-block>name</x-block>
                . The HTML is mirrored into a hidden input.
            </li>
            <li>
                Without a
                <x-block>wire:model</x-block>
                or
                <x-block>name</x-block>
                , the component will throw an exception.
            </li>
        </ul>
    </x-section>
    <x-section
        title="Label & Hint"
        description="An option to display a label and a hint below the editor."
    >
        <x-preview language="blade" :contents="$labelHint">
            <x-editor
                name="article"
                label="Article"
                hint="Keep it under a thousand words"
            />
        </x-preview>
    </x-section>
    <x-section
        title="Toolbar"
        description="Twenty buttons across eight groups. Dividers sit between groups. An unknown slug throws."
    >
        <div class="space-y-4">
            <x-preview language="blade" :contents="$toolbar">
                <x-editor
                    name="short"
                    :toolbar="['style', 'bold', 'italic', 'link', 'image']"
                />
            </x-preview>
            <x-table
                :headers="[
                ['index' => 'slug', 'label' => 'Slug'],
                ['index' => 'group', 'label' => 'Group'],
                ['index' => 'does', 'label' => 'Does'],
            ]"
                :rows="[
                ['slug' => 'style', 'group' => 'formatting', 'does' => 'Dropdown: Paragraph, Heading 1 to 3'],
                ['slug' => 'blockquote', 'group' => 'formatting', 'does' => 'Quote'],
                ['slug' => 'bold', 'group' => 'inline', 'does' => 'Bold'],
                ['slug' => 'italic', 'group' => 'inline', 'does' => 'Italic'],
                ['slug' => 'underline', 'group' => 'inline', 'does' => 'Underline'],
                ['slug' => 'strikethrough', 'group' => 'inline', 'does' => 'Strikethrough'],
                ['slug' => 'ordered-list', 'group' => 'lists', 'does' => 'Numbered list'],
                ['slug' => 'unordered-list', 'group' => 'lists', 'does' => 'Bulleted list'],
                ['slug' => 'indent', 'group' => 'lists', 'does' => 'Nests a list item, or indents any other block by 2rem'],
                ['slug' => 'outdent', 'group' => 'lists', 'does' => 'The reverse'],
                ['slug' => 'align', 'group' => 'align', 'does' => 'Dropdown: Left, Center, Right, Justify'],
                ['slug' => 'code', 'group' => 'code', 'does' => 'Inline code'],
                ['slug' => 'code-block', 'group' => 'code', 'does' => 'Code block'],
                ['slug' => 'clear-format', 'group' => 'code', 'does' => 'Strips formatting from the selection'],
                ['slug' => 'link', 'group' => 'insert', 'does' => 'Opens the link dialog'],
                ['slug' => 'image', 'group' => 'insert', 'does' => 'Opens the image dialog'],
                ['slug' => 'hr', 'group' => 'insert', 'does' => 'Inserts a horizontal rule'],
                ['slug' => 'undo', 'group' => 'history', 'does' => 'Undo'],
                ['slug' => 'redo', 'group' => 'history', 'does' => 'Redo'],
                ['slug' => 'fullscreen', 'group' => 'view', 'does' => 'Fills the viewport'],
            ]"
            >
                @interact("column_slug", $row)
                <x-block>{{ $row["slug"] }}</x-block>
                @endinteract
            </x-table>
        </div>
    </x-section>
    <x-section
        title="Heights"
        description="An option to set min-height and max-height. Any CSS unit. Defaults to 12rem and 40rem."
    >
        <x-preview language="blade" :contents="$heights">
            <x-editor name="tall" min-height="20rem" max-height="60vh" />
        </x-preview>
    </x-section>
    <x-section
        title="Readonly & Disabled"
        description="An option to lock the editor. They cannot be used together."
    >
        <x-preview language="blade" :contents="$readonly">
            <div class="space-y-4">
                <x-editor name="readonly-editor" readonly />
                <x-editor name="disabled-editor" disabled />
            </div>
        </x-preview>
    </x-section>
    <x-section
        title="Counters"
        description="An option to display word and line counters in the footer. On by default."
    >
        <x-preview language="blade" :contents="$counters">
            <x-editor name="no-counters" :counters="false" />
        </x-preview>
    </x-section>
    <x-section
        title="Markdown"
        description="The editor stays a WYSIWYG. The bound property stores Markdown instead of HTML."
    >
        <x-preview language="blade" :contents="$markdown">
            <x-editor name="markdown-editor" markdown />
        </x-preview>
    </x-section>
    <x-section
        title="Markdown Mapping"
        description="Tables, task lists and footnotes are not covered, in either direction."
    >
        <x-table
            :headers="[
                ['index' => 'html', 'label' => 'HTML'],
                ['index' => 'markdown', 'label' => 'Markdown'],
            ]"
            :rows="[
                ['html' => 'h1 to h5', 'markdown' => '# to #####'],
                ['html' => 'p', 'markdown' => 'line, then a blank line'],
                ['html' => 'strong', 'markdown' => '**text**'],
                ['html' => 'em', 'markdown' => '*text*'],
                ['html' => 's', 'markdown' => '~~text~~'],
                ['html' => 'code', 'markdown' => '`text`'],
                ['html' => 'pre > code', 'markdown' => 'triple backtick fence'],
                ['html' => 'ul > li', 'markdown' => '- '],
                ['html' => 'ol > li', 'markdown' => '1. '],
                ['html' => 'nested list', 'markdown' => 'two-space indent'],
                ['html' => 'blockquote', 'markdown' => '> '],
                ['html' => 'hr', 'markdown' => '---'],
                ['html' => 'a', 'markdown' => '[text](href)'],
                ['html' => 'img', 'markdown' => '![alt](src)'],
                ['html' => 'br', 'markdown' => 'two trailing spaces'],
            ]"
        />
    </x-section>
    <x-section
        title="Markdown Autoformat"
        description="Applied as you type. Ctrl+Z undoes the formatting and keeps the characters. Nothing changes inside a code block."
    >
        <x-table
            :headers="[
                ['index' => 'type', 'label' => 'Type'],
                ['index' => 'get', 'label' => 'Get'],
            ]"
            :rows="[
                ['type' => '# , ## , ###', 'get' => 'Heading 1 to 3'],
                ['type' => '- , *', 'get' => 'Bulleted list'],
                ['type' => '1. ', 'get' => 'Numbered list'],
                ['type' => '> ', 'get' => 'Quote'],
                ['type' => '--- then Enter', 'get' => 'Horizontal rule'],
                ['type' => 'triple backtick then Enter', 'get' => 'Code block'],
                ['type' => '**text**', 'get' => 'Bold'],
                ['type' => '*text*', 'get' => 'Italic'],
                ['type' => '`text`', 'get' => 'Inline code'],
                ['type' => '~~text~~', 'get' => 'Strikethrough'],
            ]"
        />
        <x-warning warning title="What Markdown cannot carry" class="mt-4">
            <x-block>underline</x-block>
            and
            <x-block>align</x-block>
            have no syntax, so they are dropped from the toolbar quietly.
            <x-block>indent</x-block>
            and
            <x-block>outdent</x-block>
            survive only inside a list.
        </x-warning>
    </x-section>
    <x-section
        title="Image Upload"
        description="An option to allow upload of image using normal Livewire way"
    >
        <x-code language="blade" :contents="$uploadBlade" />
        <x-code class="mt-4" language="php" :contents="$uploadPhp" />
        <x-warning
            warning
            title="Both attributes are required together"
            class="mt-4"
        >
            They only work inside Livewire, and either rule broken throws.
            Without them the image dialog is URL only.
        </x-warning>
    </x-section>
    <x-section title="Without Livewire">
        <x-code language="blade" :contents="$native" />
    </x-section>
    <x-section title="Events">
        <div class="space-y-4">
            <x-code language="blade" :contents="$events" />
            <x-table
                :headers="[
                ['index' => 'event', 'label' => 'Event'],
                ['index' => 'detail', 'label' => 'Detail'],
                ['index' => 'fires', 'label' => 'Fires'],
            ]"
                :rows="[
                ['event' => 'editor:change', 'detail' => '{ id, html, words, lines }', 'fires' => 'After the debounced sync, on a real change'],
                ['event' => 'editor:link-inserted', 'detail' => '{ id, href, text }', 'fires' => 'A link was inserted'],
                ['event' => 'editor:image-inserted', 'detail' => '{ id, src, alt, source }', 'fires' => 'An image was inserted'],
                ['event' => 'editor:fullscreen-toggled', 'detail' => '{ id, on }', 'fires' => 'Fullscreen was toggled'],
            ]"
            >
                @interact("column_event", $row)
                <x-block>{{ $row["event"] }}</x-block>
                @endinteract
            </x-table>
        </div>
    </x-section>
    <x-section title="Keyboard">
        <x-table
            :headers="[
                ['index' => 'shortcut', 'label' => 'Shortcut'],
                ['index' => 'does', 'label' => 'Does'],
            ]"
            :rows="[
                ['shortcut' => 'Ctrl/Cmd + B, I, U', 'does' => 'Bold, italic, underline (no U in Markdown mode)'],
                ['shortcut' => 'Ctrl/Cmd + Z', 'does' => 'Undo'],
                ['shortcut' => 'Ctrl/Cmd + Shift + Z, Ctrl + Y', 'does' => 'Redo'],
                ['shortcut' => 'Ctrl/Cmd + K', 'does' => 'Opens the link dialog with the selection filled'],
                ['shortcut' => 'Ctrl/Cmd + 0 to 3', 'does' => 'Paragraph, Heading 1 to 3'],
                ['shortcut' => 'Tab, Shift + Tab in a list', 'does' => 'Indent, outdent'],
                ['shortcut' => 'Enter in a code block', 'does' => 'Newline instead of a new paragraph'],
                ['shortcut' => 'Ctrl/Cmd + Enter in a code block', 'does' => 'Leaves the block'],
                ['shortcut' => 'Escape', 'does' => 'Closes the dialog, then leaves fullscreen'],
                ['shortcut' => 'Arrow keys on the toolbar', 'does' => 'Moves between buttons'],
            ]"
        />
    </x-section>
    <x-section title="Livewire">
        <x-code language="blade" :contents="$livewire" />
    </x-section>
    <x-section
        title="Security"
        description="The sanitizer is defense in depth, not the defense."
    >
        <div class="space-y-4">
            <p>
                The sanitizer strips tags, attributes and style properties
                outside the configured whitelist, over pasted markup and over
                the value the editor boots with.
                <x-block>href</x-block>
                and
                <x-block>src</x-block>
                are additionally checked by scheme.
                <x-block>allowed_styles</x-block>
                is applied after
                <x-block>allowed_attributes</x-block>
                ,
                so widening the tags that may carry a style cannot widen what
                that style does. SVG is deliberately absent from the default
                upload mimes.
            </p>
            <x-warning error>
                Sanitize the content on the server before persisting it and
                before rendering it back.
            </x-warning>
        </div>
    </x-section>
    <x-section title="Configuration">
        <p>
            There are a few things that can be configured using the
            <x-refer doc="configuration">configuration file.</x-refer>
            For example, you can turn
            <x-block>markdown</x-block>
            on for every editor, or set the default
            <x-block>toolbar</x-block>
            and heights. The default
            <x-block>min-height</x-block>
            is
            <x-block>12rem</x-block>
            and the default
            <x-block>max-height</x-block>
            is
            <x-block>40rem</x-block>
            in the
            <x-refer doc="configuration">configuration file.</x-refer>
        </p>
    </x-section>
    <x-section
        title="Soft Customization"
        description="An option to customize components used inside of the editor."
        disable-copy
    >
        <x-code language="php" :contents="$scopes" />
        <x-table
            class="mt-4"
            :headers="[
                ['index' => 'scope', 'label' => 'Scope'],
                ['index' => 'component', 'label' => 'Component'],
                ['index' => 'covers', 'label' => 'Covers'],
            ]"
            :rows="[
                ['scope' => 'editor.toolbar', 'component' => 'dropdown', 'covers' => 'The style and the alignment dropdowns of the toolbar'],
                ['scope' => 'editor.modal.link', 'component' => 'modal', 'covers' => 'The dialog that inserts a link'],
                ['scope' => 'editor.modal.image', 'component' => 'modal', 'covers' => 'The dialog that inserts an image'],
            ]">
            @interact("column_scope", $row)
                <x-block>{{ $row["scope"] }}</x-block>
            @endinteract

            @interact("column_component", $row)
            <x-block>{{ $row["component"] }}</x-block>
            @endinteract
        </x-table>
    </x-section>
    <x-section
        title="Invalid Input"
        description="What happens when the data cannot be used."
    >
        <x-table
            :headers="[
                ['index' => 'input', 'label' => 'Input'],
                ['index' => 'result', 'label' => 'Result'],
            ]"
            :rows="[
                ['input' => 'Absent wire:model and name', 'result' => 'Throw an exception'],
                ['input' => 'Empty toolbar', 'result' => 'Throw an exception'],
                ['input' => 'Unknown toolbar slug', 'result' => 'Throw an exception'],
                ['input' => 'upload-property without upload-method, or the reverse', 'result' => 'Throw an exception'],
                ['input' => 'Image upload outside Livewire', 'result' => 'Throw an exception'],
                ['input' => 'readonly and disabled together', 'result' => 'Throw an exception'],
            ]"
        />
    </x-section>
</x-layout>
