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
    <x-section title="Concept" disable-copy>
        A WYSIWYG rich text editor with no external JavaScript dependency, built
        on
        <x-block>contenteditable</x-block>
        . It outputs HTML or Markdown. Either
        <x-block>wire:model</x-block>
        or
        <x-block>name</x-block>
        is required. It is content focused rather than a document editor: no
        tables, no resize handles, no slash commands, no embeds.
    </x-section>
    <x-section title="Basic Usage" new>
        <x-preview language="blade" :contents="$basic">
            <x-editor name="content" />
        </x-preview>
    </x-section>
    <x-section title="Label & Hint" new>
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
        new
        description="Twenty buttons across eight groups. Dividers are inserted wherever two consecutive buttons do not share a group. An unknown slug throws."
    >
        <x-preview language="blade" :contents="$toolbar">
            <x-editor
                name="short"
                :toolbar="['style', 'bold', 'italic', 'link', 'image']"
            />
        </x-preview>
        <x-table
            class="mt-4"
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
    </x-section>
    <x-section
        title="Heights"
        new
        description="Any CSS unit. Defaults to 12rem and 40rem."
    >
        <x-preview language="blade" :contents="$heights">
            <x-editor name="tall" min-height="20rem" max-height="60vh" />
        </x-preview>
    </x-section>
    <x-section title="Readonly & Disabled" new>
        <x-preview language="blade" :contents="$readonly">
            <div class="space-y-4">
                <x-editor name="readonly-editor" readonly />
                <x-editor name="disabled-editor" disabled />
            </div>
        </x-preview>
    </x-section>
    <x-section
        title="Counters"
        new
        description="Word and line counters in the footer, on by default."
    >
        <x-preview language="blade" :contents="$counters">
            <x-editor name="no-counters" :counters="false" />
        </x-preview>
    </x-section>
    <x-section
        title="Markdown"
        new
        description="The editing surface stays a WYSIWYG. Markdown is a serialization format at the boundary, so the property holds **bold** instead of <strong>bold</strong>."
    >
        <x-preview language="blade" :contents="$markdown">
            <x-editor name="markdown-editor" markdown />
        </x-preview>
    </x-section>
    <x-section
        title="Markdown Mapping"
        new
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
        new
        description="Applied as it is typed. Every transform lands in the browser undo stack, so Ctrl+Z reverts the formatting and leaves the characters. Nothing is transformed inside a code block."
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
        new
        description="The editor does not decide where an image lives. Point it at a WithFileUploads property and a method that persists the file and returns its URL."
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
    <x-section
        title="Without Livewire"
        new
        description="With name the HTML is mirrored into a hidden input, so the editor works in a plain form."
    >
        <x-code language="blade" :contents="$native" />
    </x-section>
    <x-section
        title="Events"
        new
        description="Dispatched on the component root. editor:change always carries html, and adds a markdown key while markdown is on."
    >
        <x-code language="blade" :contents="$events" />
        <x-table
            class="mt-4"
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
    </x-section>
    <x-section title="Keyboard" new>
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
    <x-section
        title="Livewire"
        new
        description="The component is wire:ignore'd, so nothing about it reacts to the server. Reach for wire:key when an attribute has to change at runtime."
    >
        <x-code language="blade" :contents="$livewire" />
    </x-section>
    <x-section title="Security" new>
        <div class="space-y-4">
            <p>
                The sanitizer strips tags, attributes and style properties
                outside the configured whitelist, over pasted markup and over
                the value the editor boots with.
                <x-block>href</x-block>
                and
                <x-block>src</x-block>
                are additionally checked by scheme.
            </p>
            <x-warning error title="This is defense in depth, not the defense">
                Sanitize the content on the server before persisting it and
                before rendering it back. Markdown mode is not safer: Markdown
                permits raw HTML.
            </x-warning>
        </div>
    </x-section>
    <x-section
        title="Configuration"
        new
        description="allowed_styles is applied after allowed_attributes, so widening the tags that may carry a style cannot widen what that style does. SVG is deliberately absent from the upload mimes."
    >
        <x-code language="php" :contents="$configuration" />
    </x-section>
    <x-section
        title="Scoped Customization"
        new
        description="The dialogs and the toolbar dropdowns are other components under fixed scopes."
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
            ]"
        >
            @interact("column_scope", $row)
                <x-block>{{ $row["scope"] }}</x-block>
            @endinteract

            @interact("column_component", $row)
                <x-block>{{ $row["component"] }}</x-block>
            @endinteract
        </x-table>
        <x-warning class="mt-4">
            These are the names the editor renders with. Customizing the plain
            <x-block>modal</x-block>
            or
            <x-block>dropdown</x-block>
            without a scope reaches every instance on the page, the editor's
            included.
        </x-warning>
    </x-section>
</x-layout>
