<x-layout :$content>
    <x-slot:title>Upgrade Guide</x-slot>
    <x-section title="Before Start" disable-copy>
        <div class="space-y-4">
            <p>
                Three years later, here I am shipping TallStackUI 4. And you
                know what? I still have the same excitement I had on the first
                days. Version 4 comes with seven new components, and also
                thousands of invisible fixes. Things nobody reported, but they
                were there as bugs. I fixed a lot.
            </p>
            <p>
                Before I start describing the upgrade guide, like I always do, I
                want to thank you for using TallStackUI and for reading this. If
                you are here, you have some interest in it, even if it is just
                to know the basics of what TallStackUI is. I created TallStackUI
                to be my own source of components for TALL projects, with
                Livewire as the main foundation, so I would not depend on third
                parties and would not have to pay for a component library.
            </p>
            <p>
                Now let's talk about what matters.
                <b>First of all, v4 requires Livewire 4 exclusively.</b>
                And also, before you go through the actual upgrade guide,
                remember I currently work on this library alone. If you want to
                help, you are welcome to
                <x-link
                    href="https://github.com/sponsors/devajmeireles"
                    blank
                    colorless
                    underline
                >
                    sponsor the project.
                </x-link>
            </p>
        </div>
    </x-section>
    <x-section title="Whats New" disable-copy>
        <div class="space-y-4">
            <div class="space-y-4 pl-4">
                <div class="space-y-4">
                    <h2
                        class="text-lg font-medium tracking-tight text-pink-600"
                    >
                        🥳 New Components:
                    </h2>
                    <ul class="space-y-2">
                        <li>
                            -
                            <x-refer :doc="['ui', 'chart']">Chart</x-refer>
                            : five types as inline SVG, no charting library.
                        </li>
                        <li>
                            -
                            <x-refer :doc="['ui', 'editor']">Editor</x-refer>
                            : WYSIWYG, no extra JavaScript, HTML or Markdown.
                        </li>
                        <li>
                            -
                            <x-refer :doc="['ui', 'gallery']">Gallery</x-refer>
                            : three layouts and a shared lightbox.
                        </li>
                        <li>
                            -
                            <x-refer :doc="['ui', 'qr-code']">QrCode</x-refer>
                            : ISO/IEC 18004, no dependency.
                        </li>
                        <li>
                            -
                            <x-refer :doc="['ui', 'spinner']">Spinner</x-refer>
                            : thirteen animated variations.
                        </li>
                        <li>
                            -
                            <x-refer :doc="['ui', 'swap']">Swap</x-refer>
                            : cycle a value with buttons, drag, or the keyboard.
                        </li>
                        <li>
                            -
                            <x-refer :doc="['form', 'radio']">
                                Radio Group
                            </x-refer>
                            and
                            <x-refer :doc="['form', 'checkbox']">
                                Checkbox Group
                            </x-refer>
                            : a set of options from one array, in four
                            presentations.
                        </li>
                        <li>
                            -
                            <x-refer :doc="['form', 'upload-async']">
                                Upload Async
                            </x-refer>
                            : chunked uploads straight to your own controller.
                        </li>
                    </ul>
                </div>
                <div class="space-y-4">
                    <h2
                        class="text-lg font-medium tracking-tight text-pink-600"
                    >
                        👀 Cross-cutting:
                    </h2>
                    <ul class="space-y-2">
                        <li>
                            -
                            <x-block>skeleton</x-block>
                            on Card, Stats, Table, List, Step, Chart and QrCode:
                            a placeholder for the first render.
                        </li>
                        <li>
                            -
                            <x-block>compact</x-block>
                            on Table, List and KeyValue: tighter rows. Each
                            affected block gained a
                            <x-block>-compact</x-block>
                            twin, so if you customize both modes you have to
                            cover both blocks.
                        </li>
                        <li>
                            -
                            <x-block>paddingless</x-block>
                            on Modal, Slide, Card, Tab and Errors.
                        </li>
                        <li>
                            -
                            <x-block>shadowless</x-block>
                            and
                            <x-block>bordered</x-block>
                            on Card, Stats, Calendar, Tab and Errors, plus
                            <x-block>shadowless</x-block>
                            alone on Alert, Accordion and Kbd.
                        </li>
                        <li>
                            - Footer slot alignment through
                            <x-block>start</x-block>
                            ,
                            <x-block>center</x-block>
                            ,
                            <x-block>end</x-block>
                            ,
                            <x-block>between</x-block>
                            and
                            <x-block>unwrapped</x-block>
                            on Modal, Slide, Card and Errors.
                        </li>
                        <li>
                            - A neutral
                            <x-block>oklch()</x-block>
                            dark palette and a violet
                            <x-block>secondary</x-block>
                            .
                        </li>
                        <li>
                            -
                            <x-block>floating_scroll_lock</x-block>
                            , which locks page scroll while a popup is open.
                        </li>
                        <li>
                            - Three dependencies dropped:
                            <x-block>tippy.js</x-block>
                            ,
                            <x-block>clipboard.js</x-block>
                            and
                            <x-block>qs</x-block>
                            .
                        </li>
                        <li>
                            -
                            <x-block>x-table</x-block>
                            renders outside Livewire, and so do Autocomplete,
                            Calendar and Upload Async.
                        </li>
                        <li>
                            - Global defaults in
                            <x-block>config/tallstackui.php</x-block>
                            for around twenty components: the flat-look flags,
                            the Table props, Link's
                            <x-block>navigate</x-block>
                            , Back to Top, Modal, Kbd, Accordion, Color, Number,
                            Icon, Tooltip, Spinner, Swap and the Button spinner.
                            The inline prop always wins.
                        </li>
                        <li>
                            -
                            <x-block>select="label:name|value:id"</x-block>
                            remapping on Autocomplete, both selects, the
                            selection groups, Swap and the Command Palette,
                            inline or from the configuration.
                        </li>
                        <li>
                            - Eleven size and 29 color shorthands on
                            <x-refer :doc="['ui', 'icon']">Icon</x-refer>
                            , and a size scale up to
                            <x-block>7xl</x-block>
                            plus
                            <x-block>gravatar</x-block>
                            on
                            <x-refer :doc="['ui', 'avatar']">Avatar</x-refer>
                            .
                        </li>
                        <li>
                            -
                            <x-refer :doc="['ui', 'tooltip']">Tooltip</x-refer>
                            was rebuilt inside the package, with
                            <x-block>delay</x-block>
                            ,
                            <x-block>balloon</x-block>
                            ,
                            <x-block>scale</x-block>
                            ,
                            <x-block>data-tooltip-disabled</x-block>
                            and global settings.
                        </li>
                        <li>
                            -
                            <x-block>--tsui-scrollbar-offset</x-block>
                            and
                            <x-block>.tsui-scrollbar-bleed</x-block>
                            , so a full-bleed element still reaches the edge
                            while the page is locked.
                        </li>
                        <li>
                            -
                            <x-block>extend()</x-block>
                            , to change a scope that already exists instead of
                            starting it over.
                        </li>
                    </ul>
                </div>
            </div>
            <p>The rest is on each component page.</p>
        </div>
    </x-section>
    <x-section title="Breaking Changes" disable-copy>
        <div class="space-y-4">
            <p>
                Read the ones that apply to you. Everything else looks the same
                as
                <x-block>3.x</x-block>
                .
            </p>
            <div class="space-y-4">
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    1. Card:
                    <x-block>bordered</x-block>
                    became
                    <x-block>accent</x-block>
                </h2>
                <p>
                    On Card,
                    <x-block>bordered</x-block>
                    never drew a border around the card. Together with
                    <x-block>color</x-block>
                    , it turned the header from a filled background into a
                    colored top border. That name is now the wrapper border, so
                    the header look moved to
                    <x-block>accent</x-block>
                    . If you still pass
                    <x-block>bordered</x-block>
                    , the header stops being colored and you get the neutral
                    wrapper border instead.
                </p>
                <x-code
                    language="blade"
                    :contents="$cardAccent"
                    disable-copy
                />
            </div>
            <div class="space-y-4">
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    2. Kbd:
                    <x-block>borderless</x-block>
                    keeps the shadow
                </h2>
                <p>
                    It used to strip the border
                    <b>and</b>
                    the shadow, so you could not drop one without the other. Now
                    it only removes the border. Use
                    <x-block>shadowless</x-block>
                    if you want the shadow gone too.
                </p>
                <x-code
                    language="blade"
                    :contents="$kbdShadowless"
                    disable-copy
                />
            </div>
            <div class="space-y-4">
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    3. Clipboard:
                    <x-block>icons</x-block>
                    became
                    <x-block>icon</x-block>
                </h2>
                <p>
                    The two attributes only worked together.
                    <x-block>icons</x-block>
                    did nothing without
                    <x-block>icon</x-block>
                    , and
                    <x-block>icon</x-block>
                    alone was how you asked for the default pair. Now
                    <x-block>icon</x-block>
                    takes the array, and passing an array turns icon mode on by
                    itself.
                </p>
                <x-code
                    language="blade"
                    :contents="$clipboardIcon"
                    disable-copy
                />
                <p>
                    <x-block>icons</x-block>
                    is gone, not deprecated. The attribute bag drops an array
                    attribute the component does not declare, so a leftover
                    <x-block>:icons</x-block>
                    does nothing and does not error. A key other than
                    <x-block>copy</x-block>
                    and
                    <x-block>copied</x-block>
                    now raises instead of falling back to the default icon.
                </p>
            </div>
            <div class="space-y-4">
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    4. Theme: secondary is violet, dark is neutral
                </h2>
                <p>
                    <x-block>--color-secondary-*</x-block>
                    is Tailwind Violet now, and components no longer use it.
                    <x-block>--color-dark-*</x-block>
                    left Slate for a neutral
                    <x-block>oklch()</x-block>
                    scale. If you override either in your own
                    <x-block>@@theme</x-block>
                    , your values still win.
                </p>
                <x-code
                    language="blade"
                    :contents="$secondaryColor"
                    disable-copy
                />
                <p>
                    If you
                    <x-block>replace()</x-block>
                    one of the old
                    <x-block>dark-700</x-block>
                    /
                    <x-block>dark-600</x-block>
                    values, or a
                    <x-block>*-secondary-*</x-block>
                    class inside a component block, point it at the new step and
                    the
                    <x-block>gray-*</x-block>
                    equivalent. Twelve hardcoded
                    <x-block>dark:*-gray-*</x-block>
                    /
                    <x-block>dark:*-slate-*</x-block>
                    classes moved to the matching
                    <x-block>dark-*</x-block>
                    shade (Progress, Upload, Number, Color, Step, Timeline,
                    Gallery and Carousel), so a
                    <x-block>replace()</x-block>
                    aimed at the old class no longer finds it. Details are on
                    the
                    <x-refer :doc="['customization', 'color']">
                        color page
                    </x-refer>
                    .
                </p>
            </div>
            <div class="space-y-4">
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    5. Icon: a bare icon has a size, and 40 names are reserved
                </h2>
                <p>
                    <x-block>&lt;x-icon name="users" /&gt;</x-block>
                    used to reach the browser with no width and no height. It
                    now falls back to
                    <x-block>md</x-block>
                    (20px). Only calls with no
                    <x-block>class</x-block>
                    at all are affected, and those were already rendering at an
                    unusable size. Eleven sizes and 29 colors are taken off the
                    attribute bag, so they cannot be forwarded to the
                    <x-block>svg</x-block>
                    for something else. Passing
                    <x-block>class</x-block>
                    turns both shorthands off, including
                    <x-block>class=""</x-block>
                    . That is why the 190 internal icon usages in the package
                    still look the same.
                </p>
            </div>
            <div class="space-y-4">
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    6. No more external JS dependencies
                </h2>
                <p>
                    <x-block>tippy.js</x-block>
                    ,
                    <x-block>clipboard.js</x-block>
                    and
                    <x-block>qs</x-block>
                    left
                    <x-block>package.json</x-block>
                    . Tooltip, Clipboard and Select Styled stay the same from
                    the outside, and
                    <x-block>@@tallStackUiScript</x-block>
                    needs no change. An application importing
                    <x-block>clipboard</x-block>
                    or
                    <x-block>qs</x-block>
                    directly has to install it on its own.
                </p>
                <p>
                    Anything that reached for
                    <x-block>$el._tippy</x-block>
                    to enable or disable a tooltip has to move to the attribute.
                    A balloon styled through tippy's theme classes has to be
                    restyled through
                    <x-block>[data-tsui-tooltip]</x-block>
                    .
                </p>
                <x-code
                    language="blade"
                    :contents="$tooltipDisabled"
                    disable-copy
                />
            </div>
            <div class="space-y-4">
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    7. Soft customization is stricter
                </h2>
                <p>
                    Two chains on the same block did not stack. The second one
                    silently dropped the first. They accumulate now, so a
                    package and an app can customize the same block. If you were
                    relying on the last chain winning, collapse them into one
                    chain.
                </p>
                <x-code
                    language="php"
                    :contents="$customizationStacking"
                    disable-copy
                />
                <p>
                    <x-block>remove()</x-block>
                    ran a plain
                    <x-block>str_replace</x-block>
                    , so it also ate every longer class that contained the name
                    you gave it.
                </p>
                <x-code language="php" :contents="$customizationRemove" />
                <p>
                    Three calls that used to pass silently now throw, and one
                    global changed how it accumulates.
                </p>
                <x-code
                    language="php"
                    :contents="$customizationStrict"
                    disable-copy
                />
                <p>
                    A scope also layers over the global customization instead of
                    replacing it, so
                    <x-block>&lt;x-card scope="card-shadowless" /&gt;</x-block>
                    keeps whatever you customized on Card globally. And the
                    <x-block>square</x-block>
                    global matches whole tokens now:
                    <x-block>rounded-[10px]</x-block>
                    is removed cleanly, while
                    <x-block>not-rounded</x-block>
                    and
                    <x-block>unrounded-md</x-block>
                    stay.
                </p>
            </div>
            <div class="space-y-4">
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    8. Button: radius blocks and spinner animation
                </h2>
                <p>
                    <x-block>wrapper.border.radius.rounded</x-block>
                    and
                    <x-block>wrapper.border.radius.circle</x-block>
                    were a two-entry map for a two-state prop. The radius blocks
                    are a size map now, in the same place Badge and Environment
                    keep theirs.
                </p>
                <x-code
                    language="php"
                    :contents="$buttonBlocks"
                    disable-copy
                />
                <p>
                    <x-block>icon.spinner-animation</x-block>
                    is gone from both buttons. Each spinner variant has its own
                    animation under the new
                    <x-block>spinner.*</x-block>
                    blocks. The loading indicator no longer reads
                    <x-block>icon.sizes.*</x-block>
                    . That block still applies to regular icons.
                </p>
                <x-code
                    language="php"
                    :contents="$buttonSpinner"
                    disable-copy
                />
                <p>
                    <x-block>round</x-block>
                    is validated now. The button had no
                    <x-block>validate()</x-block>
                    before, so a value outside the six sizes (
                    <x-block>2xl</x-block>
                    and
                    <x-block>circle</x-block>
                    among them) throws at render time instead of being ignored.
                </p>
            </div>
            <div class="space-y-4">
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    9. Table: paginator view split, scope removed
                </h2>
                <p>
                    <x-block>components/table/paginators.blade.php</x-block>
                    no longer exists. It became
                    <x-block>paginators/simple.blade.php</x-block>
                    , and the directory has one file per variation.
                </p>
                <x-code
                    language="blade"
                    :contents="$tablePaginator"
                    disable-copy
                />
                <p>
                    <x-block>paginator</x-block>
                    is no longer only a view path. It also names a look:
                    <x-block>simple</x-block>
                    ,
                    <x-block>minimal</x-block>
                    , or
                    <x-block>compact</x-block>
                    . A value with a
                    <x-block>.</x-block>
                    or
                    <x-block>::</x-block>
                    is still a view, so your own paginator still works. Anything
                    else raises a validation exception listing the bundled
                    names.
                </p>
                <p>
                    The data a custom paginator view receives also changed.
                    <x-block>scrollTo</x-block>
                    and
                    <x-block>simplePagination</x-block>
                    became
                    <x-block>scroll</x-block>
                    ,
                    <x-block>simple</x-block>
                    ,
                    <x-block>name</x-block>
                    ,
                    <x-block>dusk</x-block>
                    and
                    <x-block>fragment</x-block>
                    . The paginator markup changed class by class, so CSS aimed
                    at the old classes needs updating.
                </p>
                <p>
                    The
                    <x-block>table-shadowless</x-block>
                    scope had nothing left to remove, so it was dropped. Remove
                    <x-block>scope="table-shadowless"</x-block>
                    from tables. Rendering stays the same, but extending that
                    scope now throws.
                </p>
            </div>
            <div class="space-y-4">
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    10. Step: previous and next are slot names
                </h2>
                <p>
                    A stray bare
                    <x-block>previous</x-block>
                    or
                    <x-block>next</x-block>
                    used to fall through to the attribute bag. It now hits a
                    slot prop and throws.
                </p>
                <x-code language="blade" :contents="$stepSlots" disable-copy />
                <p>
                    The navigation buttons also left soft customization.
                    <x-block>button.base</x-block>
                    ,
                    <x-block>button.icon</x-block>
                    and
                    <x-block>button.icon-spacing.*</x-block>
                    are gone. Restyle the bar by picking a variation, replacing
                    the buttons through the slots, or pointing
                    <x-block>helpers</x-block>
                    at your own view.
                </p>
                <p>
                    <x-block>helpers</x-block>
                    itself went from a flag to a variation name, the same way
                    Table's
                    <x-block>paginator</x-block>
                    works:
                    <x-block>default</x-block>
                    ,
                    <x-block>minimal</x-block>
                    ,
                    <x-block>compact</x-block>
                    , or a view path. A string that names none of them throws.
                    Before, any truthy value was enough.
                </p>
            </div>
            <div class="space-y-4">
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    11. List: dividers are keyed on a visibility marker
                </h2>
                <p>
                    Hidden rows still take part in CSS sibling matching, which
                    painted a phantom divider above the first visible row after
                    a search. If you override
                    <x-block>items.wrapper</x-block>
                    , key the dividers on
                    <x-block>data-list-on</x-block>
                    , not
                    <x-block>data-list-row</x-block>
                    , or that line comes back.
                </p>
                <x-code language="php" :contents="$listDivider" disable-copy />
                <p>
                    The row also gained a wrapper. When
                    <x-block>action</x-block>
                    and/or
                    <x-block>menu</x-block>
                    are present, both sit inside a new
                    <x-block>content.aside</x-block>
                    block, so a row that used to render only a menu now has one
                    extra
                    <x-block>div</x-block>
                    . If you select the menu wrapper by DOM position instead of
                    by class, you will need to adjust that.
                </p>
            </div>
            <div class="space-y-4">
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    12. Colorful: three blocks became color classes
                </h2>
                <p>
                    Everything that changes by notification type now lives in
                    the color classes.
                </p>
                <x-code
                    language="php"
                    :contents="$colorfulBlocks"
                    disable-copy
                />
                <p>
                    The
                    <x-block>question</x-block>
                    type also follows
                    <x-block>primary</x-block>
                    instead of a grayscale palette, and the two buttons no
                    longer share the same translucent background.
                </p>
            </div>
            <div class="space-y-4">
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    13. Footer slots gained a wrapper
                </h2>
                <p>
                    Modal, Slide, Card and Errors now read footer alignment from
                    the slot. That split their blocks and nested one extra
                    <x-block>div</x-block>
                    .
                </p>
                <x-table
                    :headers="[
                        ['index' => 'component', 'label' => 'Component'],
                        ['index' => 'before', 'label' => '3.x'],
                        ['index' => 'after', 'label' => '4.x'],
                    ]"
                    :rows="[
                        ['component' => 'Modal', 'before' => 'footer', 'after' => 'footer.wrapper + footer.base'],
                        ['component' => 'Slide', 'before' => 'footer.base', 'after' => 'footer.wrapper + footer.base'],
                        ['component' => 'Card', 'before' => 'footer.text', 'after' => 'footer.base'],
                        ['component' => 'Errors', 'before' => 'slots.footer', 'after' => 'slots.footer.wrapper + slots.footer.base'],
                    ]"
                />
                <p>
                    Two behaviours moved with them. A Slide footer with no
                    attribute now defaults to the end, not the start. A Card
                    footer passed as a slot is aligned instead of falling
                    through raw. If you were relying on that raw fall-through,
                    use
                    <x-block>unwrapped</x-block>
                    .
                </p>
            </div>
            <div class="space-y-4">
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    14. Blocks that no longer exist
                </h2>
                <p>
                    Customizing a block that is gone throws, so these are the
                    ones to grep for. Button, Step and Colorful are already
                    covered above.
                </p>
                <x-table
                    :headers="[
                        ['index' => 'component', 'label' => 'Component'],
                        ['index' => 'before', 'label' => '3.x'],
                        ['index' => 'after', 'label' => '4.x'],
                    ]"
                    :rows="[
                        ['component' => 'Date', 'before' => 'floating.expanded', 'after' => 'box.picker.expanded, and h-[17rem] became min-h-[17rem]'],
                        ['component' => 'Calendar', 'before' => 'floating.default, floating.class, box.picker.button-label-wrapper, box.picker.navigate-wrapper', 'after' => 'removed with the floating panel'],
                        ['component' => 'Input', 'before' => 'input.addon.button.left and .right', 'after' => 'moved into input.addon.button.base'],
                        ['component' => 'Carousel', 'before' => 'images.rounded', 'after' => 'images.rounded.*: a default key plus one per size'],
                    ]"
                />
                <p>
                    The calendar's month and year pickers are now a copy of the
                    date picker, rendered in place instead of as a popover, so
                    the
                    <x-block>calendar.floating</x-block>
                    internal scope has nothing left to point at.
                    <x-block>box.picker.wrapper.second</x-block>
                    and
                    <x-block>third</x-block>
                    carry the date picker values, and
                    <x-block>box.picker.today</x-block>
                    is just
                    <x-block>cursor-pointer</x-block>
                    .
                </p>
                <x-code language="php" :contents="$calendarScope" />
            </div>
            <div class="space-y-4">
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    15. Blocks that changed shape
                </h2>
                <p>
                    These kept their names but hold something different now. If
                    you customized them, you will need to revisit those
                    customizations.
                </p>
                <x-table
                    :headers="[
                        ['index' => 'component', 'label' => 'Component'],
                        ['index' => 'blocks', 'label' => 'Blocks'],
                    ]"
                    :rows="[
                        ['component' => 'KeyValue', 'blocks' => 'wrapper, header.wrapper, button.add and list.divider changed; header.neutral and button.neutral are new'],
                        ['component' => 'Layout', 'blocks' => 'the padding transition left wrapper.second.expanded / .collapsed for wrapper.second.transition; wrapper.second.footer and main.grow are new; the header wrapper traded shadow-sm and border-gray-300/10 for a solid border-gray-200'],
                        ['component' => 'SideBar', 'blocks' => 'item.state.base and group.button lost their gap; item.badge and group.badge now style the wrapper around the badge; simple.wrapper lost its padding; item.state.gap, group.button.gap, group.button.collapsed, simple.wrapper.visible / .hidden and the group.flyout.* set are new'],
                        ['component' => 'Step', 'blocks' => 'panels-shape carries the frame, wrapper.panels carries the scroll only; the inactive rings, bars and titles were recolored, so a customization replacing the old values has to target the new ones'],
                        ['component' => 'Stats', 'blocks' => 'wrapper.second-no-slot moved into wrapper.second; header and footer split into .text and .wrapper'],
                        ['component' => 'Toast', 'blocks' => 'wrapper.position gained x-center and top-on-mobile; a stack.* group is new'],
                    ]"
                />
            </div>
            <div class="space-y-4">
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    16. Smaller behaviour changes
                </h2>
                <ul class="list-inside list-disc space-y-2">
                    <li>
                        Currency is 12px tighter on each side, because the slot
                        paddings became
                        <x-block>!important</x-block>
                        and now actually apply.
                    </li>
                    <li>
                        Currency no longer re-emits
                        <x-block>name</x-block>
                        on the visible input, so a native form receives the raw
                        value instead of the formatted one.
                    </li>
                    <li>
                        Radio, Checkbox and Toggle suffix the generated id with
                        the option value, so a group renders
                        <x-block>plan-basic</x-block>
                        instead of three inputs sharing one id.
                    </li>
                    <li>
                        Timeline items in the slot inherit
                        <x-block>horizontal</x-block>
                        ,
                        <x-block>alternate</x-block>
                        ,
                        <x-block>compact</x-block>
                        ,
                        <x-block>color</x-block>
                        and
                        <x-block>style</x-block>
                        from the container. You no longer have to repeat them.
                    </li>
                    <li>
                        Select Styled qualifies a selected grouped item with its
                        group name. A test that asserts the exact text has to
                        expect that qualified form.
                    </li>
                    <li>
                        <x-block>simple-pagination</x-block>
                        implies
                        <x-block>paginate</x-block>
                        . Passing both is just redundant.
                    </li>
                    <li>
                        A published config list of scalars is taken as published
                        instead of being merged entry by entry, so it can be
                        shorter than the default.
                    </li>
                    <li>
                        A nested
                        <x-block>wire:model</x-block>
                        reads correctly on the server now.
                        <x-block>wire:model="form.files"</x-block>
                        and any other dotted binding used to resolve to
                        <x-block>null</x-block>
                        . That is why KeyValue threw and Upload listed nothing.
                    </li>
                    <li>
                        Reaction's panel markup changed shape. Anything that
                        selected into the old structure (a browser test walking
                        an XPath, especially) has to be pointed at the new one.
                    </li>
                    <li>
                        Modal's
                        <x-block>center</x-block>
                        accepts a breakpoint now, and it is validated.
                        <x-block>center="true"</x-block>
                        written as a quoted attribute throws, because Blade
                        hands it over as a string and no
                        <x-block>positions.center-true</x-block>
                        block exists.
                    </li>
                    <li>
                        Avatar reads its eleven size names from the attribute
                        bag and strips them, the same way Icon does, and two at
                        once throws. A medium avatar renders its initials at
                        <x-block>text-base</x-block>
                        instead of inheriting the container's size, because the
                        old
                        <x-block>text-md</x-block>
                        is not a Tailwind class. A published avatar view now
                        reads
                        <x-block>$scale</x-block>
                        and
                        <x-block>$src</x-block>
                        .
                    </li>
                    <li>
                        <x-block>&lt;x-loading&gt;</x-block>
                        locks the body scroll for real.
                        <x-block>Livewire.hook('commit.prepare')</x-block>
                        does not exist in Livewire 4 and failed silently, so
                        only the unlocking half ever ran.
                    </li>
                    <li>
                        Escape closes the topmost popup first and the overlay
                        behind it on the second press, instead of both at once.
                        Closing a popup also hands focus back to its anchor.
                    </li>
                    <li>
                        Radio and Checkbox print the validation message once per
                        property instead of once per option.
                    </li>
                    <li>
                        Stats throws when
                        <x-block>increase</x-block>
                        and
                        <x-block>decrease</x-block>
                        are combined, colors the number through the
                        <x-block>color</x-block>
                        prop rather than a hardcoded
                        <x-block>text-primary-500</x-block>
                        , and renders a clickable card without
                        <x-block>href</x-block>
                        as a
                        <x-block>div</x-block>
                        .
                    </li>
                    <li>
                        The custom palette of
                        <x-block>&lt;x-color&gt;</x-block>
                        is read from
                        <x-block>colors</x-block>
                        in the configuration. The documented
                        <x-block>custom</x-block>
                        key was never read, so anything set under it has to be
                        renamed.
                    </li>
                </ul>
            </div>
        </div>
    </x-section>
    <x-section class="space-y-4" title="How to Upgrade" disable-copy>
        <div class="space-y-4 pl-4">
            <div class="space-y-4">
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    1. Read the breaking changes above
                </h2>
                <p>
                    Only the ones that apply to you. If you write no soft
                    customization and pass none of the renamed attributes, there
                    is nothing to do here.
                </p>
            </div>
            <div class="space-y-4">
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    2. Republish the configuration file
                </h2>
                <p>
                    <x-block>config/tallstackui.php</x-block>
                    gained the
                    <x-block>floating_scroll_lock</x-block>
                    key, per-component settings for the new components, and a
                    global default for most of the props that used to be
                    repeated at every call site. Compare your file with the new
                    one and sync them. Keys your file does not mention keep
                    their default, so nothing is lost if you leave it alone.
                </p>
                <p>
                    Two notes while you are in there. A published list of
                    scalars is taken as published now, instead of being merged
                    entry by entry, so
                    <x-block>table.quantity</x-block>
                    or
                    <x-block>editor.allowed_tags</x-block>
                    can be shorter than the default. And the custom palette of
                    <x-block>&lt;x-color&gt;</x-block>
                    moved from
                    <x-block>custom</x-block>
                    to
                    <x-block>colors</x-block>
                    .
                </p>
            </div>
            <div class="space-y-4">
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    3. Redo deep customization
                </h2>
                <p>
                    If you published TallStackUI Blade files or extended
                    component classes, back up your files, republish the new
                    ones, and reapply your adjustments.
                    <b>If you do not use Deep Customization, skip this step.</b>
                </p>
            </div>
            <div class="space-y-4">
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    4. Clear the application cache
                </h2>
                <p>Clear cached files before updating Composer:</p>
                <x-code language="shell" :contents="$optimizeClear" />
            </div>
            <div class="space-y-4">
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    5. Update Composer
                </h2>
                <p>
                    Edit your
                    <x-block>composer.json</x-block>
                    . Livewire
                    <x-block>^4.3</x-block>
                    is required now, so if you are still on Livewire 3, upgrade
                    that first:
                </p>
                <x-code language="json" :contents="$composer" disable-copy />
                <p>
                    After that, remove the
                    <x-block>vendor</x-block>
                    folder and run:
                </p>
                <x-code language="shell" :contents="$command" />
            </div>
            <div class="space-y-4">
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    6. Rebuild your assets
                </h2>
                <p>
                    The palette moved, so you have to regenerate the CSS. If you
                    override
                    <x-block>--color-secondary-*</x-block>
                    or
                    <x-block>--color-dark-*</x-block>
                    in your own
                    <x-block>@@theme</x-block>
                    , this is also where you check that your values still win.
                </p>
            </div>
        </div>
        <x-warning>
            If you notice anything wrong with this guide,
            <a class="underline" href="{{ route("issue") }}" target="_blank">
                please open an issue.
            </a>
        </x-warning>
    </x-section>
</x-layout>
