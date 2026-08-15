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
        <x-preview language="blade" :contents="$basic">
            <x-editor name="content" />
        </x-preview>
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
            <li>
                The default output is raw HTML content, but you can stamp a
                class on every element. Learn more about it below.
            </li>
        </ul>
    </x-section>
    <x-section title="Output Classes">
        <div class="space-y-4">
            <p>
                The default output of the
                <x-block>editor</x-block>
                is raw HTML content. Tailwind's Preflight strips the list
                markers and the heading sizes, so the same markup reads as
                plain lines once it is rendered anywhere else.
                <x-block>output-classes</x-block>
                stamps a class on every element the editor writes, so the
                content can be styled wherever it lands.
            </p>
            <x-preview language="blade" :contents="$outputClasses">
                <x-editor name="styled" output-classes />
            </x-preview>
            <p>
                After enable
                <x-block>output-classes</x-block>
                , every element will carries a class of its own:
            </p>
            <x-code language="html" :contents="$outputClassesHtml" disable-copy />
            <p>
                So you will be able to customize the output of the editor with your own CSS, for example:
            </p>
            <x-code language="css" :contents="$outputClassesCss" disable-copy />
            <x-warning>
                TallStackUI defines none of them. They are hooks, empty until your the application fills them.
            </x-warning>
            <p>
                An array changes only the tags it lists and leaves the rest
                alone. A name has to keep the prefix, which is what the
                sanitizer recognizes on the way back in, and anything else
                throws.
            </p>
            <x-code language="blade" :contents="$outputClassesRename" disable-copy />
            <p>
                A string is the prefix itself:
            </p>
            <x-code language="blade" :contents="$outputClassesPrefix" disable-copy />
            <x-code language="html" :contents="$outputClassesPrefixHtml" disable-copy />
            <p>
                Without a string, the prefix comes from
                <x-block>output_classes_prefix</x-block>
                in the
                <x-refer doc="configuration">configuration file</x-refer>
                when
                <x-block>output_classes</x-block>
                is enable
                , defaulting to
                <x-block>tsui-editor-</x-block>
                . The option is off by default, under
                <x-block>output_classes</x-block>
                , and ignored while
                <x-block>markdown</x-block>
                is on, since Markdown carries no classes.
            </p>
            <x-code language="php" :contents="$outputClassesConfig" disable-copy />
            <p>The default tags and classes are:</p>
            <x-table
                :headers="[
                    ['index' => 'tag', 'label' => 'Tag'],
                    ['index' => 'class', 'label' => 'Class'],
                ]"
                :rows="[
                    ['tag' => 'p', 'class' => 'tsui-editor-paragraph'],
                    ['tag' => 'div', 'class' => 'tsui-editor-block'],
                    ['tag' => 'h1', 'class' => 'tsui-editor-heading-1'],
                    ['tag' => 'h2', 'class' => 'tsui-editor-heading-2'],
                    ['tag' => 'h3', 'class' => 'tsui-editor-heading-3'],
                    ['tag' => 'h4', 'class' => 'tsui-editor-heading-4'],
                    ['tag' => 'h5', 'class' => 'tsui-editor-heading-5'],
                    ['tag' => 'ul', 'class' => 'tsui-editor-bullet-list'],
                    ['tag' => 'ol', 'class' => 'tsui-editor-numeric-list'],
                    ['tag' => 'li', 'class' => 'tsui-editor-list-item'],
                    ['tag' => 'blockquote', 'class' => 'tsui-editor-quote'],
                    ['tag' => 'pre', 'class' => 'tsui-editor-code-block'],
                    ['tag' => 'code', 'class' => 'tsui-editor-code'],
                    ['tag' => 'hr', 'class' => 'tsui-editor-rule'],
                    ['tag' => 'a', 'class' => 'tsui-editor-link'],
                    ['tag' => 'img', 'class' => 'tsui-editor-image'],
                    ['tag' => 'strong', 'class' => 'tsui-editor-bold'],
                    ['tag' => 'em', 'class' => 'tsui-editor-italic'],
                    ['tag' => 'u', 'class' => 'tsui-editor-underline'],
                    ['tag' => 's', 'class' => 'tsui-editor-strike'],
                ]"
            >
                @interact("column_tag", $row)
                <x-block>{{ $row["tag"] }}</x-block>
                @endinteract

                @interact("column_class", $row)
                <x-block>{{ $row["class"] }}</x-block>
                @endinteract
            </x-table>
            <p>
                The stamp is authoritative rather than incremental. On the
                way in and after every command the classes are wiped and
                written again from the tag, so a renamed class, a duplicate,
                and a class the browser carried onto the wrong element all
                settle on the next pass. Turning it off stops the stamping,
                it does not rewrite what is stored.
            </p>
            <x-warning warning>
                The prefix should be lowercase, dash separated and end with a dash.
            </x-warning>
        </div>
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
    </x-section>
    <x-section
        title="Image Upload"
        description="An option to allow upload of image using normal Livewire way"
    >
        <div class="space-y-4">
            <x-code language="blade" :contents="$uploadBlade" />
            <x-code language="php" :contents="$uploadPhp" />
            <x-warning warning>
                You need to use both attributes in order to make it work. The
                <x-block>upload-property</x-block>
                is used to upload the image following the Livewire's way, and the
                <x-block>upload-method</x-block>
                is used to handle the uploaded image and return the URL of the image.
            </x-warning>
        </div>
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
                @interact("column_detail", $row)
                <x-block>{{ $row["detail"] }}</x-block>
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
    <x-section
        title="Security"
        description="The sanitizer is defense in depth, not the defense."
    >
        <div class="space-y-4">
            <p>
                The sanitizer strips tags, attributes and style properties
                outside the configured whitelist, over pasted markup and over
                the value the editor boots with. The stamped output classes
                are the one exception: they pass whether the option is on or
                off, bounded by the prefix.
                <x-block>href</x-block>
                and
                <x-block>src</x-block>
                are additionally checked by scheme.
                <x-block>allowed_styles</x-block>
                is applied after
                <x-block>allowed_attributes</x-block>
                , so widening the tags that may carry a style cannot widen what
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
            There are a lot things that can be configured using the
            <x-refer doc="configuration">configuration file.</x-refer>
            For example, you can turn
            <x-block>markdown</x-block>
            or
            <x-block>output-classes</x-block>
            on for every editor, or set the default
            <x-block>toolbar</x-block>
            ,
            <x-block>output_classes_prefix</x-block>
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
    <x-section title="Soft Customization" disable-copy>
        <div class="space-y-4">
            <p>
                The
                <x-block>editor</x-block>
                component reuse other components internally, such as
                <x-block>modal</x-block> and <x-block>dropdown</x-block>
                . You can customize the internal components by using the
                <x-block>scopes</x-block>
                following the guide of the <x-refer :doc="['customization', 'soft']">soft customization</x-refer>.
            </p>
            <x-code language="php" :contents="$scopes" disable-copy />
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
        </div>
    </x-section>
</x-layout>
