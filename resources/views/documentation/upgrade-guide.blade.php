<x-layout :$content>
    <x-slot:title>Upgrade Guide</x-slot:title>
    <blockquote class="my-4 border-s-4 border-gray-500 bg-gray-200/50 p-4 dark:border-gray-400 dark:bg-gray-800">
        <p class="text-md leading-relaxed font-medium text-gray-900 italic dark:text-white">
            This page transcribes a conversation between the creator of the TallStackUI -
            <a href="https://linkedin.com/in/devajmeireles" target="_blank" class="underline">AJ</a>, and you.
        </p>
    </blockquote>
    <x-section title="Before Start" disable-copy>
        <div class="space-y-4">
            <p>
                <b>Welcome to the TallStackUI 4 upgrade guide!</b> Version 4 is a smaller jump than version 3 was: there
                is no framework requirement to change and no rename sweeping the whole library. Most applications
                upgrade by bumping the constraint and reading the two or three notes that touch what they actually use.
            </p>
            <p>
                What did change is concentrated in three places: the default palette, a handful of attribute names that
                collided with new ones, and the soft customization blocks of the components that were restyled. All of
                them are listed below.
            </p>
            <p>
                I maintain this library solo. If TallStackUI brings value to your work, please consider
                <a href="https://github.com/sponsors/devajmeireles" target="_blank" class="text-pink-500 underline"
                    >sponsoring the project</a
                >, it makes a real difference in keeping development going.
            </p>
        </div>
    </x-section>
    <x-section title="Whats New" disable-copy>
        <div class="space-y-4">
            <div class="space-y-4 pl-4">
                <div>
                    <h2 class="text-lg font-medium tracking-tight text-pink-600">🥳 New Components:</h2>
                    <ul>
                        <li>
                            -
                            <a href="{{ route('documentation', ['ui', 'chart']) }}" wire:navigate class="underline"
                                >Chart</a
                            >: five types rendered as inline SVG, with no charting library involved.
                        </li>
                        <li>
                            -
                            <a href="{{ route('documentation', ['ui', 'editor']) }}" wire:navigate class="underline"
                                >Editor</a
                            >: a WYSIWYG editor with no external JavaScript dependency, outputting HTML or Markdown.
                        </li>
                        <li>
                            -
                            <a href="{{ route('documentation', ['ui', 'gallery']) }}" wire:navigate class="underline"
                                >Gallery</a
                            >: three layouts and a shared lightbox.
                        </li>
                        <li>
                            -
                            <a href="{{ route('documentation', ['ui', 'qr-code']) }}" wire:navigate class="underline"
                                >QrCode</a
                            >: the whole of ISO/IEC 18004, dependency free.
                        </li>
                        <li>
                            -
                            <a href="{{ route('documentation', ['ui', 'spinner']) }}" wire:navigate class="underline"
                                >Spinner</a
                            >: thirteen animated variations.
                        </li>
                        <li>
                            -
                            <a href="{{ route('documentation', ['ui', 'swap']) }}" wire:navigate class="underline"
                                >Swap</a
                            >: a compact value cycler driven by buttons, drag or the keyboard.
                        </li>
                        <li>
                            -
                            <a href="{{ route('documentation', ['form', 'radio']) }}" wire:navigate class="underline"
                                >Radio Group</a>
                            and
                            <a href="{{ route('documentation', ['form', 'checkbox']) }}" wire:navigate class="underline"
                                >Checkbox Group</a
                            >: a whole set of options from one array, in four presentations.
                        </li>
                        <li>
                            -
                            <a
                                href="{{ route('documentation', ['form', 'upload-async']) }}"
                                wire:navigate
                                class="underline"
                                >Upload Async</a
                            >: chunked uploads straight to your own controller, so a file no longer has to fit inside
                            the PHP request limits.
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="text-lg font-medium tracking-tight text-pink-600">👀 Cross-cutting:</h2>
                    <ul>
                        <li>
                            - <x-block>skeleton</x-block> on Card, Stats, Table, List, Step, Chart and QrCode: a
                            structural placeholder for the first paint.
                        </li>
                        <li>- <x-block>compact</x-block> on Table, List and KeyValue: a denser row rhythm.</li>
                        <li>- <x-block>paddingless</x-block> on Modal, Slide, Card and Tab.</li>
                        <li>
                            - <x-block>shadowless</x-block> and <x-block>bordered</x-block> on Card, Stats, Calendar and
                            Tab.
                        </li>
                        <li>
                            - Footer slot alignment through <x-block>start</x-block>, <x-block>center</x-block>,
                            <x-block>end</x-block>, <x-block>between</x-block> and <x-block>unwrapped</x-block> on
                            Modal, Slide, Card and Errors.
                        </li>
                        <li>
                            - A neutral <x-block>oklch()</x-block> dark palette and a violet
                            <x-block>secondary</x-block>.
                        </li>
                        <li>
                            - <x-block>floating_scroll_lock</x-block>, locking the page scroll while any popup is open.
                        </li>
                        <li>
                            - Three dependencies dropped: <x-block>tippy.js</x-block>,
                            <x-block>clipboard.js</x-block> and <x-block>qs</x-block>.
                        </li>
                        <li>
                            - <x-block>x-table</x-block> renders outside Livewire, and so do Autocomplete, Calendar and
                            Upload Async.
                        </li>
                    </ul>
                </div>
            </div>
            <p>Everything else is described on the respective page for each component.</p>
        </div>
    </x-section>
    <x-section title="Breaking Changes" disable-copy>
        <div class="space-y-4">
            <p>
                Read the rows that touch what you use. Everything else renders exactly as it did on
                <x-block>3.x</x-block>.
            </p>
            <div>
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    1. Card: <x-block>bordered</x-block> became <x-block>accent</x-block>
                </h2>
                <p>
                    <x-block>bordered</x-block> on Card never drew a border around the card: combined with
                    <x-block>color</x-block>, it switched the header from a filled background to a colored top border.
                    That name now belongs to the wrapper border, so the header variation moved to
                    <x-block>accent</x-block>. A <x-block>bordered</x-block> left behind stops coloring the header and
                    draws the neutral wrapper border instead.
                </p>
                <x-code language="blade" :contents="$cardAccent" />
            </div>
            <div>
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    2. Kbd: <x-block>borderless</x-block> keeps the shadow
                </h2>
                <p>
                    It stripped the border <b>and</b> the shadow, which left no way to drop one without the other. It
                    removes only the border now, and a new <x-block>shadowless</x-block> removes only the shadow.
                </p>
                <x-code language="blade" :contents="$kbdShadowless" />
            </div>
            <div>
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    3. Theme: secondary is violet, dark is neutral
                </h2>
                <p>
                    <x-block>--color-secondary-*</x-block> is Tailwind Violet now, and component chrome no longer
                    references it at all. <x-block>--color-dark-*</x-block> dropped Slate for a neutral
                    <x-block>oklch()</x-block> scale. Applications that override either in their own
                    <x-block>@@theme</x-block> keep winning and see no difference.
                </p>
                <x-code language="blade" :contents="$secondaryColor" />
                <p>
                    A customization that <x-block>replace()</x-block>s one of the old <x-block>dark-700</x-block> /
                    <x-block>dark-600</x-block> values, or a <x-block>*-secondary-*</x-block> class inside a component
                    block, should target the new step and the <x-block>gray-*</x-block> equivalent. Full detail on the
                    <a href="{{ route('documentation', ['customization', 'color']) }}" wire:navigate class="underline"
                        >color page</a
                    >.
                </p>
            </div>
            <div>
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    4. Icon: a bare icon has a size, and 40 attribute names are reserved
                </h2>
                <p>
                    <x-block>&lt;x-icon name="users" /&gt;</x-block> used to reach the browser with no width and no
                    height. It falls back to <x-block>md</x-block> (20px) now. Only calls that pass no
                    <x-block>class</x-block> at all are affected, and those were rendering at an unusable default size
                    before. Eleven sizes and 29 colors are consumed and stripped from the attribute bag, so they cannot
                    be forwarded to the <x-block>svg</x-block> for any other purpose.
                </p>
            </div>
            <div>
                <h2 class="text-lg font-medium tracking-tight text-pink-600">5. Tooltip: tippy.js is gone</h2>
                <p>
                    The directive is built by the package now. <x-block>$el._tippy</x-block> no longer exists, so
                    anything reaching for the instance to enable or disable a tooltip has to move to the attribute.
                </p>
                <x-code language="blade" :contents="$tooltipDisabled" />
                <p>
                    <x-block>tippy.js</x-block> left <x-block>package.json</x-block> along with the
                    <x-block>tippy.css</x-block> the package used to serve, and
                    <x-block>js/tallstackui-tooltip.js</x-block> is gone. Loading is driven by the manifest, so
                    <x-block>@@tallStackUiScript</x-block> needs no change. A balloon styled through tippy's theme
                    classes has to be restyled through <x-block>[data-tsui-tooltip]</x-block>.
                </p>
            </div>
            <div>
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    6. Two more dependencies left package.json
                </h2>
                <p>
                    <x-block>clipboard</x-block> and <x-block>qs</x-block> are gone. An application importing either
                    directly has to install it on its own. The public surface of both consumers is unchanged: the
                    Clipboard component still resolves to a boolean and still dispatches <x-block>ts-ui:copy</x-block>,
                    and the parameters Select Styled puts on the wire are identical.
                </p>
            </div>
            <div>
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    7. Soft customization: chains stack, and remove() matches whole classes
                </h2>
                <p>
                    Two chains touching one block did not stack: the second silently discarded the first. They
                    accumulate now, which is what lets a package and an application customize the same block. Anything
                    relying on the last chain winning has to be collapsed into one chain.
                </p>
                <x-code language="php" :contents="$customizationStacking" />
                <p>
                    <x-block>remove()</x-block> ran a plain <x-block>str_replace</x-block>, so it chewed through every
                    longer class containing the name it was given.
                </p>
                <x-code language="php" :contents="$customizationRemove" />
            </div>
            <div>
                <h2 class="text-lg font-medium tracking-tight text-pink-600">8. Button: the radius blocks moved</h2>
                <p>
                    <x-block>wrapper.border.radius.rounded</x-block> and
                    <x-block>wrapper.border.radius.circle</x-block> were a two-entry map for a two-state prop. The
                    radius blocks are a size map now, sitting where Badge and Environment keep theirs.
                </p>
                <x-code language="php" :contents="$buttonBlocks" />
            </div>
            <div>
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    9. Table: the paginator view split, and the scope is gone
                </h2>
                <p>
                    <x-block>components/table/paginators.blade.php</x-block> no longer exists. It became
                    <x-block>paginators/simple.blade.php</x-block>, and the directory holds one file per variation.
                </p>
                <x-code language="blade" :contents="$tablePaginator" />
                <p>
                    The data a custom paginator view receives also changed shape: <x-block>scrollTo</x-block> and
                    <x-block>simplePagination</x-block> became <x-block>scroll</x-block>, <x-block>simple</x-block>,
                    <x-block>name</x-block>, <x-block>dusk</x-block> and <x-block>fragment</x-block>. The paginator
                    markup changed class by class, so application CSS aimed at the old classes needs re-pointing.
                </p>
                <p>
                    The <x-block>table-shadowless</x-block> scope had nothing left to remove and was dropped. Drop
                    <x-block>scope="table-shadowless"</x-block> from tables &mdash; the rendering does not change, but
                    extending it now throws.
                </p>
            </div>
            <div>
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    10. Step: previous and next are slot names
                </h2>
                <p>
                    A stray bare <x-block>previous</x-block> or <x-block>next</x-block> attribute used to fall through
                    to the attribute bag. It now lands on a slot prop and throws.
                </p>
                <x-code language="blade" :contents="$stepSlots" />
                <p>
                    The navigation buttons also left soft customization: <x-block>button.base</x-block>,
                    <x-block>button.icon</x-block> and <x-block>button.icon-spacing.*</x-block> are gone. Restyle the
                    bar by picking a variation, replacing the buttons through the slots, or pointing
                    <x-block>helpers</x-block> at your own view.
                </p>
            </div>
            <div>
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    11. List: dividers are keyed on a visibility marker
                </h2>
                <p>
                    Hidden rows still participate in CSS sibling matching, which painted a phantom divider above the
                    first visible row after a search. Applications overriding the <x-block>items.wrapper</x-block> block
                    must key their dividers on <x-block>data-list-on</x-block> rather than
                    <x-block>data-list-row</x-block>, or the artifact comes back.
                </p>
                <x-code language="php" :contents="$listDivider" />
            </div>
            <div>
                <h2 class="text-lg font-medium tracking-tight text-pink-600">
                    12. Colorful: three blocks became color classes
                </h2>
                <p>Everything that varies by notification type lives in the color classes now.</p>
                <x-code language="php" :contents="$colorfulBlocks" />
                <p>
                    The <x-block>question</x-block> type also follows <x-block>primary</x-block> instead of a grayscale
                    palette, and the two buttons no longer share the same translucent background.
                </p>
            </div>
            <div>
                <h2 class="text-lg font-medium tracking-tight text-pink-600">13. Footer slots gained a wrapper</h2>
                <p>
                    Modal, Slide, Card and Errors read their footer alignment from the slot now, which split their
                    blocks and nested one extra <x-block>div</x-block>.
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
                    Two behaviours moved with them: a Slide footer with no attribute now defaults to the end instead of
                    the start, and a Card footer passed as a slot is aligned instead of falling through raw. A Card
                    relying on that raw fall-through wants <x-block>unwrapped</x-block>.
                </p>
            </div>
            <div>
                <h2 class="text-lg font-medium tracking-tight text-pink-600">14. Blocks that changed shape</h2>
                <p>
                    These kept their names but hold something different now, so a customization written against them has
                    to be revisited.
                </p>
                <x-table
                    :headers="[
                    ['index' => 'component', 'label' => 'Component'],
                    ['index' => 'blocks', 'label' => 'Blocks'],
                ]"
                    :rows="[
                    ['component' => 'KeyValue', 'blocks' => 'wrapper, header.wrapper, button.add and list.divider changed; header.neutral and button.neutral are new'],
                    ['component' => 'Layout', 'blocks' => 'the padding transition left wrapper.second.expanded / .collapsed for wrapper.second.transition; wrapper.second.footer and main.grow are new'],
                    ['component' => 'SideBar', 'blocks' => 'item.state.base and group.button lost their gap; item.badge and group.badge now style the wrapper around the badge; simple.wrapper lost its padding'],
                    ['component' => 'Step', 'blocks' => 'panels-shape carries the frame, wrapper.panels carries the scroll only'],
                    ['component' => 'Stats', 'blocks' => 'wrapper.second-no-slot folded into wrapper.second; header and footer split into .text and .wrapper'],
                    ['component' => 'Toast', 'blocks' => 'wrapper.position gained x-center and top-on-mobile; a stack.* group is new'],
                ]"
                />
            </div>
            <div>
                <h2 class="text-lg font-medium tracking-tight text-pink-600">15. Smaller behaviour changes</h2>
                <ul class="list-inside list-disc">
                    <li>
                        Currency is 12px tighter on each side, since the slot paddings became
                        <x-block>!important</x-block> and now actually apply.
                    </li>
                    <li>
                        Currency no longer re-emits <x-block>name</x-block> on the visible input, so a native form
                        receives the raw value instead of the formatted one.
                    </li>
                    <li>
                        Radio, Checkbox and Toggle suffix their generated id with the option value, so a group renders
                        <x-block>plan-basic</x-block> rather than three inputs sharing one id.
                    </li>
                    <li>
                        Timeline items in the slot inherit <x-block>horizontal</x-block>, <x-block>alternate</x-block>,
                        <x-block>compact</x-block>, <x-block>color</x-block> and <x-block>style</x-block> from the
                        container. Repeating them is no longer necessary.
                    </li>
                    <li>
                        Select Styled qualifies a selected grouped item with its group name. A test asserting the exact
                        text has to expect the qualified form.
                    </li>
                    <li>
                        <x-block>simple-pagination</x-block> implies <x-block>paginate</x-block>. Passing both is merely
                        redundant.
                    </li>
                    <li>
                        A published config list of scalars is taken as published rather than merged entry by entry,
                        which is what lets it be shorter than the default.
                    </li>
                    <li>
                        A nested <x-block>wire:model</x-block> reads correctly on the server now.
                        <x-block>wire:model="form.files"</x-block> and any other dotted binding used to resolve to
                        <x-block>null</x-block>, which is what made KeyValue throw and Upload list nothing.
                    </li>
                    <li>
                        Reaction's panel markup changed shape. Anything selecting into the old structure, a browser test
                        walking an XPath most of all, has to be repointed.
                    </li>
                </ul>
            </div>
        </div>
    </x-section>
    <x-section class="space-y-4" title="How to Upgrade" disable-copy>
        <div class="space-y-4 pl-4">
            <div>
                <h2 class="text-lg font-medium tracking-tight text-pink-600">1. Read the breaking changes above</h2>
                <p>
                    Only the rows that touch what you use. If you write no soft customization and pass none of the
                    renamed attributes, there is nothing to do here.
                </p>
            </div>
            <div>
                <h2 class="text-lg font-medium tracking-tight text-pink-600">2. Republish the configuration file</h2>
                <p>
                    <x-block>config/tallstackui.php</x-block> gained the <x-block>floating_scroll_lock</x-block> key and
                    per-component settings for the new components. Compare your file with the new one and synchronize.
                    Keys your file does not mention keep their default, so nothing is lost by leaving it alone.
                </p>
            </div>
            <div>
                <h2 class="text-lg font-medium tracking-tight text-pink-600">3. Redo deep customization</h2>
                <p>
                    If you have published TallStackUI Blade files or extended component classes, back up your files,
                    republish the new ones and reapply your adjustments.
                    <b>If you do not use Deep Customization, skip this step.</b>
                </p>
            </div>
            <div>
                <h2 class="text-lg font-medium tracking-tight text-pink-600">4. Clear the application cache</h2>
                <p>
                    Before updating the Composer dependencies, clear all cached files. This prevents errors caused by
                    stale cached references to classes or configurations that have changed:
                </p>
                <x-code language="shell" :contents="$optimizeClear" />
            </div>
            <div>
                <h2 class="text-lg font-medium tracking-tight text-pink-600">5. Update Composer</h2>
                <p>Edit your <x-block>composer.json</x-block> file:</p>
                <x-code language="json" :contents="$composer" disable-copy />
                <p>After that, remove the <x-block>vendor</x-block> folder and run:</p>
                <x-code language="shell" :contents="$command" />
            </div>
            <div>
                <h2 class="text-lg font-medium tracking-tight text-pink-600">6. Rebuild your assets</h2>
                <p>
                    The palette moved, so the CSS has to be regenerated. If you override
                    <x-block>--color-secondary-*</x-block> or <x-block>--color-dark-*</x-block> in your own
                    <x-block>@@theme</x-block>, this is also where you confirm your values still win.
                </p>
            </div>
        </div>
        <x-warning>
            If you notice any inconsistencies with this guide,
            <a class="underline" href="{{ route('issue') }}" target="_blank"
                >please help us by reporting as an issue.</a>
        </x-warning>
    </x-section>
</x-layout>
