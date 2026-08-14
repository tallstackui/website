<x-layout :$content>
    <x-slot:title>Upgrade Guide</x-slot>
    <blockquote
        class="my-4 border-s-4 border-gray-500 bg-gray-200/50 p-4 dark:border-gray-400 dark:bg-gray-800"
    >
        <p
            class="text-md leading-relaxed font-medium text-gray-900 italic dark:text-white"
        >
            This page transcribes a conversation between the creator of the
            TallStackUI -
            <a
                href="https://linkedin.com/in/devajmeireles"
                target="_blank"
                class="underline"
            >
                AJ
            </a>
            , and you.
        </p>
    </blockquote>
    <x-section title="Before Start" disable-copy>
        <div class="space-y-4">
            <p>
                <b>Welcome to the TallStackUI 4 upgrade guide!</b>
                Version 4 is a smaller jump than version 3 was: no rename sweeps
                the whole library, and most applications upgrade by bumping the
                constraint and reading the two or three notes that touch what
                they actually use.
            </p>
            <p>
                One requirement moved.
                <x-block>3.x</x-block>
                accepted Livewire
                <x-block>^3.5</x-block>
                or
                <x-block>^4.3</x-block>
                ;
                <x-block>4.x</x-block>
                requires
                <x-block>^4.3</x-block>
                . An application still on Livewire 3 upgrades Livewire first.
                PHP
                <x-block>^8.1</x-block>
                and Laravel 10 through 13 are unchanged.
            </p>
            <p>
                What did change is concentrated in three places: the default
                palette, a handful of attribute names that collided with new
                ones, and the soft customization blocks of the components that
                were restyled or rebuilt. All of them are listed below.
            </p>
            <p>
                I maintain this library solo. If TallStackUI brings value to
                your work, please consider
                <a
                    href="https://github.com/sponsors/devajmeireles"
                    target="_blank"
                    class="text-pink-500 underline"
                >
                    sponsoring the project
                </a>
                , it makes a real difference in keeping development going.
            </p>
        </div>
    </x-section>
    <x-section title="Whats New" disable-copy>
        <div class="space-y-4">
            <div class="space-y-4 pl-4">
                <div>
                    <h2
                        class="text-lg font-medium tracking-tight text-pink-600"
                    >
                        🥳 New Components:
                    </h2>
                    <ul class="space-y-2">
                        <li>
                            -
                            <x-refer :doc="['ui', 'chart']">Chart</x-refer>
                            : five types rendered as inline SVG, with no
                            charting library involved.
                        </li>
                        <li>
                            -
                            <x-refer :doc="['ui', 'editor']">Editor</x-refer>
                            : a WYSIWYG editor with no external JavaScript
                            dependency, outputting HTML or Markdown.
                        </li>
                        <li>
                            -
                            <x-refer :doc="['ui', 'gallery']">Gallery</x-refer>
                            : three layouts and a shared lightbox.
                        </li>
                        <li>
                            -
                            <x-refer :doc="['ui', 'qr-code']">QrCode</x-refer>
                            : the whole of ISO/IEC 18004, dependency free.
                        </li>
                        <li>
                            -
                            <x-refer :doc="['ui', 'spinner']">Spinner</x-refer>
                            : thirteen animated variations.
                        </li>
                        <li>
                            -
                            <x-refer :doc="['ui', 'swap']">Swap</x-refer>
                            : a compact value cycler driven by buttons, drag or
                            the keyboard.
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
                            : a whole set of options from one array, in four
                            presentations.
                        </li>
                        <li>
                            -
                            <x-refer :doc="['form', 'upload-async']">
                                Upload Async
                            </x-refer>
                            : chunked uploads straight to your own controller,
                            so a file no longer has to fit inside the PHP
                            request limits.
                        </li>
                    </ul>
                </div>
                <div>
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
                            a structural placeholder for the first paint.
                        </li>
                        <li>
                            -
                            <x-block>compact</x-block>
                            on Table, List and KeyValue: a denser row rhythm.
                            Each affected block gained a
                            <x-block>-compact</x-block>
                            twin, so a customization that uses both modes has to
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
                            , locking the page scroll while any popup is open.
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
                            - The
                            <x-refer :doc="['ui', 'tooltip']">tooltip</x-refer>
                            rebuilt inside the package, with
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
                            , so a full bleed element keeps reaching the edge
                            while the page is locked.
                        </li>
                        <li>
                            -
                            <x-block>extend()</x-block>
                            , to change a scope that is already defined instead
                            of starting it over.
                        </li>
                    </ul>
                </div>
            </div>
            <p>
                Everything else is described on the respective page for each
                component.
            </p>
        </div>
    </x-section>
    <x-section title="Breaking Changes" disable-copy>
        <div class="space-y-4">
            <p>
                Read the rows that touch what you use. Everything else renders
                exactly as it did on
                <x-block>3.x</x-block>
                .
            </p>
            <div>
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    1. Card:
                    <x-block>bordered</x-block>
                    became
                    <x-block>accent</x-block>
                </h2>
                <p>
                    <x-block>bordered</x-block>
                    on Card never drew a border around the card: combined with
                    <x-block>color</x-block>
                    , it switched the header from a filled background to a
                    colored top border. That name now belongs to the wrapper
                    border, so the header variation moved to
                    <x-block>accent</x-block>
                    . A
                    <x-block>bordered</x-block>
                    left behind stops coloring the header and draws the neutral
                    wrapper border instead.
                </p>
                <x-code language="blade" :contents="$cardAccent" />
            </div>
            <div>
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    2. Kbd:
                    <x-block>borderless</x-block>
                    keeps the shadow
                </h2>
                <p>
                    It stripped the border
                    <b>and</b>
                    the shadow, which left no way to drop one without the other.
                    It removes only the border now, and a new
                    <x-block>shadowless</x-block>
                    removes only the shadow.
                </p>
                <x-code language="blade" :contents="$kbdShadowless" />
            </div>
            <div>
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    3. Clipboard:
                    <x-block>icons</x-block>
                    folded into
                    <x-block>icon</x-block>
                </h2>
                <p>
                    The two attributes could not be used apart:
                    <x-block>icons</x-block>
                    did nothing without
                    <x-block>icon</x-block>
                    , and
                    <x-block>icon</x-block>
                    alone was the only way to ask for the default pair.
                    <x-block>icon</x-block>
                    takes the array directly now, and an array turns the icon
                    mode on by itself.
                </p>
                <x-code language="blade" :contents="$clipboardIcon" />
                <p>
                    <x-block>icons</x-block>
                    is gone, not deprecated, and an array attribute the
                    component does not declare is dropped by the attribute bag
                    &mdash; so a leftover
                    <x-block>:icons</x-block>
                    neither renders nor raises, it simply stops having any
                    effect. A key other than
                    <x-block>copy</x-block>
                    and
                    <x-block>copied</x-block>
                    now raises instead of falling back to the default icon.
                </p>
            </div>
            <div>
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    4. Theme: secondary is violet, dark is neutral
                </h2>
                <p>
                    <x-block>--color-secondary-*</x-block>
                    is Tailwind Violet now, and component chrome no longer
                    references it at all.
                    <x-block>--color-dark-*</x-block>
                    dropped Slate for a neutral
                    <x-block>oklch()</x-block>
                    scale. Applications that override either in their own
                    <x-block>@@theme</x-block>
                    keep winning and see no difference.
                </p>
                <x-code language="blade" :contents="$secondaryColor" />
                <p>
                    A customization that
                    <x-block>replace()</x-block>
                    s one of the old
                    <x-block>dark-700</x-block>
                    /
                    <x-block>dark-600</x-block>
                    values, or a
                    <x-block>*-secondary-*</x-block>
                    class inside a component block, should target the new step
                    and the
                    <x-block>gray-*</x-block>
                    equivalent. Twelve hardcoded
                    <x-block>dark:*-gray-*</x-block>
                    /
                    <x-block>dark:*-slate-*</x-block>
                    classes moved to the equivalent
                    <x-block>dark-*</x-block>
                    shade along the way &mdash; Progress, Upload, Number, Color,
                    Step, Timeline, Gallery and Carousel &mdash; so a
                    <x-block>replace()</x-block>
                    aimed at one of those no longer finds it. Full detail on the
                    <x-refer :doc="['customization', 'color']">
                        color page
                    </x-refer>
                    .
                </p>
            </div>
            <div>
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    5. Icon: a bare icon has a size, and 40 attribute names are
                    reserved
                </h2>
                <p>
                    <x-block>&lt;x-icon name="users" /&gt;</x-block>
                    used to reach the browser with no width and no height. It
                    falls back to
                    <x-block>md</x-block>
                    (20px) now. Only calls that pass no
                    <x-block>class</x-block>
                    at all are affected, and those were rendering at an unusable
                    default size before. Eleven sizes and 29 colors are consumed
                    and stripped from the attribute bag, so they cannot be
                    forwarded to the
                    <x-block>svg</x-block>
                    for any other purpose. Declaring
                    <x-block>class</x-block>
                    turns both shorthands off, including an empty
                    <x-block>class=""</x-block>
                    , which is what keeps the 190 internal icon usages of the
                    package rendering exactly as they did.
                </p>
            </div>
            <div>
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    6. Tooltip: tippy.js is gone
                </h2>
                <p>
                    The directive is built by the package now.
                    <x-block>$el._tippy</x-block>
                    no longer exists, so anything reaching for the instance to
                    enable or disable a tooltip has to move to the attribute.
                </p>
                <x-code language="blade" :contents="$tooltipDisabled" />
                <p>
                    <x-block>tippy.js</x-block>
                    left
                    <x-block>package.json</x-block>
                    along with the
                    <x-block>tippy.css</x-block>
                    the package used to serve, and
                    <x-block>js/tallstackui-tooltip.js</x-block>
                    is gone. Loading is driven by the manifest, so
                    <x-block>@@tallStackUiScript</x-block>
                    needs no change. A balloon styled through tippy's theme
                    classes has to be restyled through
                    <x-block>[data-tsui-tooltip]</x-block>
                    .
                </p>
            </div>
            <div>
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    7. Two more dependencies left package.json
                </h2>
                <p>
                    <x-block>clipboard</x-block>
                    and
                    <x-block>qs</x-block>
                    are gone. An application importing either directly has to
                    install it on its own. The public surface of both consumers
                    is unchanged: the Clipboard component still resolves to a
                    boolean and still dispatches
                    <x-block>ts-ui:copy</x-block>
                    , and the parameters Select Styled puts on the wire are
                    identical.
                </p>
            </div>
            <div>
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    8. Soft customization: chains stack, remove() matches whole
                    classes, and the API refuses what it used to swallow
                </h2>
                <p>
                    Two chains touching one block did not stack: the second
                    silently discarded the first. They accumulate now, which is
                    what lets a package and an application customize the same
                    block. Anything relying on the last chain winning has to be
                    collapsed into one chain.
                </p>
                <x-code language="php" :contents="$customizationStacking" />
                <p>
                    <x-block>remove()</x-block>
                    ran a plain
                    <x-block>str_replace</x-block>
                    , so it chewed through every longer class containing the
                    name it was given.
                </p>
                <x-code language="php" :contents="$customizationRemove" />
                <p>
                    Three calls that used to pass silently now throw, and one
                    global changed how it accumulates.
                </p>
                <x-code language="php" :contents="$customizationStrict" />
                <p>
                    A scope also layers over the global customization instead of
                    replacing it, so
                    <x-block>&lt;x-card scope="card-shadowless" /&gt;</x-block>
                    keeps whatever was customized on Card globally. And the
                    <x-block>square</x-block>
                    global matches whole tokens now:
                    <x-block>rounded-[10px]</x-block>
                    is removed cleanly, while
                    <x-block>not-rounded</x-block>
                    and
                    <x-block>unrounded-md</x-block>
                    are left alone.
                </p>
            </div>
            <div>
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    9. Button: the radius blocks moved, and the spinner
                    animation left
                </h2>
                <p>
                    <x-block>wrapper.border.radius.rounded</x-block>
                    and
                    <x-block>wrapper.border.radius.circle</x-block>
                    were a two-entry map for a two-state prop. The radius blocks
                    are a size map now, sitting where Badge and Environment keep
                    theirs.
                </p>
                <x-code language="php" :contents="$buttonBlocks" />
                <p>
                    <x-block>icon.spinner-animation</x-block>
                    is gone from both buttons. Each spinner variant carries its
                    own animation now, under the new
                    <x-block>spinner.*</x-block>
                    blocks, and the loading indicator no longer reads
                    <x-block>icon.sizes.*</x-block>
                    &mdash; which still applies to regular icons.
                </p>
                <x-code language="php" :contents="$buttonSpinner" />
                <p>
                    <x-block>round</x-block>
                    is validated for the first time: the button had no
                    <x-block>validate()</x-block>
                    at all until now, so a value outside the six sizes &mdash;
                    <x-block>2xl</x-block>
                    and
                    <x-block>circle</x-block>
                    among them &mdash; throws at render time instead of being
                    ignored.
                </p>
            </div>
            <div>
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    10. Table: the paginator view split, and the scope is gone
                </h2>
                <p>
                    <x-block>components/table/paginators.blade.php</x-block>
                    no longer exists. It became
                    <x-block>paginators/simple.blade.php</x-block>
                    , and the directory holds one file per variation.
                </p>
                <x-code language="blade" :contents="$tablePaginator" />
                <p>
                    <x-block>paginator</x-block>
                    also stopped being only a view path and started naming a
                    look &mdash;
                    <x-block>simple</x-block>
                    ,
                    <x-block>minimal</x-block>
                    or
                    <x-block>compact</x-block>
                    . A value carrying a
                    <x-block>.</x-block>
                    or
                    <x-block>::</x-block>
                    is still read as a view, so a paginator of your own keeps
                    working; anything else raises a validation exception listing
                    the bundled names.
                </p>
                <p>
                    The data a custom paginator view receives also changed
                    shape:
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
                    . The paginator markup changed class by class, so
                    application CSS aimed at the old classes needs re-pointing.
                </p>
                <p>
                    The
                    <x-block>table-shadowless</x-block>
                    scope had nothing left to remove and was dropped. Drop
                    <x-block>scope="table-shadowless"</x-block>
                    from tables &mdash; the rendering does not change, but
                    extending it now throws.
                </p>
            </div>
            <div>
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    11. Step: previous and next are slot names
                </h2>
                <p>
                    A stray bare
                    <x-block>previous</x-block>
                    or
                    <x-block>next</x-block>
                    attribute used to fall through to the attribute bag. It now
                    lands on a slot prop and throws.
                </p>
                <x-code language="blade" :contents="$stepSlots" />
                <p>
                    The navigation buttons also left soft customization:
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
                    itself widened from a flag to a variation name, the way the
                    Table's
                    <x-block>paginator</x-block>
                    reads:
                    <x-block>default</x-block>
                    ,
                    <x-block>minimal</x-block>
                    ,
                    <x-block>compact</x-block>
                    or a view path. A string that names none of them throws,
                    where it used to be read as a truthy flag.
                </p>
            </div>
            <div>
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    12. List: dividers are keyed on a visibility marker
                </h2>
                <p>
                    Hidden rows still participate in CSS sibling matching, which
                    painted a phantom divider above the first visible row after
                    a search. Applications overriding the
                    <x-block>items.wrapper</x-block>
                    block must key their dividers on
                    <x-block>data-list-on</x-block>
                    rather than
                    <x-block>data-list-row</x-block>
                    , or the artifact comes back.
                </p>
                <x-code language="php" :contents="$listDivider" />
                <p>
                    The row also gained a wrapper. With
                    <x-block>action</x-block>
                    and/or
                    <x-block>menu</x-block>
                    present, both are grouped inside a new
                    <x-block>content.aside</x-block>
                    block, so a row that used to render only a menu now carries
                    one extra
                    <x-block>div</x-block>
                    . Anything selecting the menu wrapper by DOM position rather
                    than by class needs adjusting.
                </p>
            </div>
            <div>
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    13. Colorful: three blocks became color classes
                </h2>
                <p>
                    Everything that varies by notification type lives in the
                    color classes now.
                </p>
                <x-code language="php" :contents="$colorfulBlocks" />
                <p>
                    The
                    <x-block>question</x-block>
                    type also follows
                    <x-block>primary</x-block>
                    instead of a grayscale palette, and the two buttons no
                    longer share the same translucent background.
                </p>
            </div>
            <div>
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    14. Footer slots gained a wrapper
                </h2>
                <p>
                    Modal, Slide, Card and Errors read their footer alignment
                    from the slot now, which split their blocks and nested one
                    extra
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
                <p class="mt-2">
                    Two behaviours moved with them: a Slide footer with no
                    attribute now defaults to the end instead of the start, and
                    a Card footer passed as a slot is aligned instead of falling
                    through raw. A Card relying on that raw fall-through wants
                    <x-block>unwrapped</x-block>
                    .
                </p>
            </div>
            <div>
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    15. Blocks that no longer exist
                </h2>
                <p>
                    Customizing a block that is gone throws, so these are the
                    ones to grep for. The Button, Step and Colorful removals are
                    described above and are not repeated here.
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
                        ['component' => 'Input', 'before' => 'input.addon.button.left and .right', 'after' => 'folded into input.addon.button.base'],
                        ['component' => 'Carousel', 'before' => 'images.rounded', 'after' => 'images.rounded.* — a default key plus one per size'],
                    ]"
                />
                <p class="mt-2">
                    The calendar's month and year pickers are a copy of the date
                    picker now, rendered in place instead of as a popover, so
                    the
                    <x-block>calendar.floating</x-block>
                    internal scope has nothing left to point at.
                    <x-block>box.picker.wrapper.second</x-block>
                    and
                    <x-block>third</x-block>
                    carry the date picker values, and
                    <x-block>box.picker.today</x-block>
                    slimmed down to
                    <x-block>cursor-pointer</x-block>
                    .
                </p>
                <x-code language="php" :contents="$calendarScope" />
            </div>
            <div>
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    16. Blocks that changed shape
                </h2>
                <p>
                    These kept their names but hold something different now, so
                    a customization written against them has to be revisited.
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
                        ['component' => 'Stats', 'blocks' => 'wrapper.second-no-slot folded into wrapper.second; header and footer split into .text and .wrapper'],
                        ['component' => 'Toast', 'blocks' => 'wrapper.position gained x-center and top-on-mobile; a stack.* group is new'],
                    ]"
                />
            </div>
            <div>
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    17. Smaller behaviour changes
                </h2>
                <ul class="list-inside list-disc space-y-2">
                    <li>
                        Currency is 12px tighter on each side, since the slot
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
                        Radio, Checkbox and Toggle suffix their generated id
                        with the option value, so a group renders
                        <x-block>plan-basic</x-block>
                        rather than three inputs sharing one id.
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
                        from the container. Repeating them is no longer
                        necessary.
                    </li>
                    <li>
                        Select Styled qualifies a selected grouped item with its
                        group name. A test asserting the exact text has to
                        expect the qualified form.
                    </li>
                    <li>
                        <x-block>simple-pagination</x-block>
                        implies
                        <x-block>paginate</x-block>
                        . Passing both is merely redundant.
                    </li>
                    <li>
                        A published config list of scalars is taken as published
                        rather than merged entry by entry, which is what lets it
                        be shorter than the default.
                    </li>
                    <li>
                        A nested
                        <x-block>wire:model</x-block>
                        reads correctly on the server now.
                        <x-block>wire:model="form.files"</x-block>
                        and any other dotted binding used to resolve to
                        <x-block>null</x-block>
                        , which is what made KeyValue throw and Upload list
                        nothing.
                    </li>
                    <li>
                        Reaction's panel markup changed shape. Anything
                        selecting into the old structure, a browser test walking
                        an XPath most of all, has to be repointed.
                    </li>
                    <li>
                        Modal's
                        <x-block>center</x-block>
                        accepts a breakpoint now, and is validated:
                        <x-block>center="true"</x-block>
                        written as a quoted attribute throws, since Blade hands
                        it over as a string and no
                        <x-block>positions.center-true</x-block>
                        block exists.
                    </li>
                    <li>
                        Avatar reads its eleven size names from the attribute
                        bag and strips them, the way Icon does, and two at once
                        throws. A medium avatar renders its initials at
                        <x-block>text-base</x-block>
                        instead of inheriting the container's size, since the
                        old
                        <x-block>text-md</x-block>
                        is not a Tailwind class. A published avatar view reads
                        <x-block>$scale</x-block>
                        and
                        <x-block>$src</x-block>
                        now.
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
                        behind it on the second press, instead of both at once,
                        and closing a popup hands the focus back to its anchor.
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
            <div>
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    1. Read the breaking changes above
                </h2>
                <p>
                    Only the rows that touch what you use. If you write no soft
                    customization and pass none of the renamed attributes, there
                    is nothing to do here.
                </p>
            </div>
            <div>
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    2. Republish the configuration file
                </h2>
                <p>
                    <x-block>config/tallstackui.php</x-block>
                    gained the
                    <x-block>floating_scroll_lock</x-block>
                    key, per-component settings for the new components and a
                    global default for most of the props that used to be
                    repeated at every call site. Compare your file with the new
                    one and synchronize. Keys your file does not mention keep
                    their default, so nothing is lost by leaving it alone.
                </p>
                <p>
                    Two notes while you are in there. A published list of
                    scalars is taken as published now instead of being merged
                    entry by entry, which is what finally lets
                    <x-block>table.quantity</x-block>
                    or
                    <x-block>editor.allowed_tags</x-block>
                    be shorter than the default. And the custom palette of
                    <x-block>&lt;x-color&gt;</x-block>
                    moved from
                    <x-block>custom</x-block>
                    to
                    <x-block>colors</x-block>
                    .
                </p>
            </div>
            <div>
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    3. Redo deep customization
                </h2>
                <p>
                    If you have published TallStackUI Blade files or extended
                    component classes, back up your files, republish the new
                    ones and reapply your adjustments.
                    <b>If you do not use Deep Customization, skip this step.</b>
                </p>
            </div>
            <div>
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    4. Clear the application cache
                </h2>
                <p>
                    Before updating the Composer dependencies, clear all cached
                    files. This prevents errors caused by stale cached
                    references to classes or configurations that have changed:
                </p>
                <x-code language="shell" :contents="$optimizeClear" />
            </div>
            <div>
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    5. Update Composer
                </h2>
                <p>
                    Edit your
                    <x-block>composer.json</x-block>
                    file. Livewire
                    <x-block>^4.3</x-block>
                    is a requirement now, so an application still on Livewire 3
                    upgrades that first:
                </p>
                <x-code language="json" :contents="$composer" disable-copy />
                <p>
                    After that, remove the
                    <x-block>vendor</x-block>
                    folder and run:
                </p>
                <x-code language="shell" :contents="$command" />
            </div>
            <div>
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    6. Rebuild your assets
                </h2>
                <p>
                    The palette moved, so the CSS has to be regenerated. If you
                    override
                    <x-block>--color-secondary-*</x-block>
                    or
                    <x-block>--color-dark-*</x-block>
                    in your own
                    <x-block>@@theme</x-block>
                    , this is also where you confirm your values still win.
                </p>
            </div>
        </div>
        <x-warning>
            If you notice any inconsistencies with this guide,
            <a class="underline" href="{{ route("issue") }}" target="_blank">
                please help us by reporting as an issue.
            </a>
        </x-warning>
    </x-section>
</x-layout>
