<x-layout :$content>
    <x-slot:title>
        Upgrade Guide
    </x-slot:title>
    <blockquote class="p-4 my-4 border-s-4 border-gray-500 bg-gray-200/50 dark:border-gray-400 dark:bg-gray-800">
        <p class="text-md italic font-medium leading-relaxed text-gray-900 dark:text-white">
            This page transcribes a conversation between the creator of the TallStackUI - <a href="https://linkedin.com/in/devajmeireles" target="_blank" class="underline">AJ</a>, and you.
        </p>
    </blockquote>
    <x-section title="Before Start" disable-copy>
        <div class="space-y-4">
            <p>
                First, I owe you an apology. Version 3 took longer than expected, and the main reason is simple: I
                maintain this library solo. If TallStackUI brings value to your work, please consider
                <a href="https://github.com/sponsors/devajmeireles" target="_blank" class="underline text-pink-500">sponsoring the project</a>,
                it makes a real difference in keeping development going.
            </p>
            <p>
                That said, I love TallStackUI and have no intention of abandoning it. I use it in every Tall Stack
                project I build, and that's exactly what drove version 3 forward: real needs from real projects shaped
                into new features.
            </p>
            <p>
                Now, to the good stuff. <b>Welcome to the TallStackUI 3 upgrade guide!</b> I'm excited to share this major
                release with you. Version 3 is a significant milestone that brings TailwindCSS v4 support, Laravel 13
                compatibility, brand new components, AI-powered development tools, and dozens of enhancements across the
                board.
            </p>
            <p>
                Thank you for being part of the TallStackUI community. Your feedback and contributions have been invaluable in shaping this release.
            </p>
        </div>
    </x-section>
    <x-section title="Whats New" disable-copy>
        <div class="space-y-4">
            <p>
                TallStackUI 3 is a big release. Beyond new components, it introduces AI integration, a revamped customization
                system, and broad compatibility upgrades. Here's what you can expect 👇
            </p>
            <div class="pl-4 space-y-4">
                <div>
                    <h2 class="text-lg tracking-tight text-pink-600 font-medium">👀 Internal:</h2>
                    <ul>
                        <li>- TailwindCSS v4 support (TailwindCSS v3 dropped).</li>
                        <li>- Laravel 13 support.</li>
                        <li>- Performance improvements across multiple components.</li>
                        <li>- Isolated JS bundles.</li>
                        <li>- Refactored asset controller.</li>
                        <li>- New vendor publishable name: <x-block>ts-ui</x-block>.</li>
                        <li>- AI-ready <x-block>.ai/</x-block> documentation directory for AI assistants.</li>
                    </ul>
                </div>
                <div>
                    <h2 class="text-lg tracking-tight text-pink-600 font-medium">🥳 New Components:</h2>
                    <ul>
                        <li>- Back to Top</li>
                        <li>- Breadcrumbs</li>
                        <li>- Command Palette</li>
                        <li>- Dial</li>
                        <li>- Kbd</li>
                    </ul>
                </div>
                <div>
                    <h2 class="text-lg tracking-tight text-pink-600 font-medium">🤖 AI Integration:</h2>
                    <ul>
                        <li>- <x-block>.ai/</x-block> directory with component instruction files for AI assistants (GitHub Copilot, Claude, Cursor, etc.).</li>
                        <li>- MCP server hosted on the documentation website for real-time component documentation access.</li>
                        <li>- Learn more on the <a href="{{ route('documentation', ['ai']) }}" wire:navigate class="font-bold underline">AI documentation page</a>.</li>
                    </ul>
                </div>
                <div>
                    <h2 class="text-lg tracking-tight text-pink-600 font-medium">🌐 Others:</h2>
                    <ul>
                        <li>- Dozens of community feature requests addressed.</li>
                        <li>- <b>"Personalization" renamed to "Customization"</b> across the entire library.</li>
                        <li>
                            - New <a href="{{ route('documentation', ['customization', 'globals']) }}" wire:navigate class="underline">Globals customization</a> concept (flash, square, colorful) -
                            <i>think of them as presets.</i>
                        </li>
                        <li>- New <a href="{{ route('documentation', ['configuration']) }}" wire:navigate class="underline">configuration file structure</a> documentation.</li>
                        <li>- New <a href="{{ route('documentation', ['customization', 'soft']) }}" wire:navigate class="underline">Internal Scoped Customization</a> concept.</li>
                        <li>- New <x-block>$tsui</x-block> JavaScript helper.</li>
                        <li>- New TailwindCSS colors added in v4.2 of TailwindCSS</li>
                        <li>- <x-block>Avatar</x-block> Component: group and presence indicators.</li>
                        <li>- <x-block>Button</x-block> Component: block style.</li>
                        <li>- <x-block>Card</x-block> Component: loading effect and events.</li>
                        <li>- <x-block>Table</x-block> Component: empty state, highlight, and expandable rows.</li>
                        <li>- <x-block>Tab</x-block> Component: centered and route-based tabs.</li>
                        <li>- <x-block>Layout</x-block> Component: brand collapsed, sidebar footer, new attributes, and dozens of general improvements.</li>
                        <li>- <x-block>Dialog</x-block> and <x-block>Toast</x-block>: persistent and colorful modes.</li>
                        <li>- <x-block>Modal</x-block> Component: mobile device adaptations.</li>
                        <li>- <x-block>Form Input</x-block> Component: better button positioning.</li>
                        <li>- <x-block>Form Select Styled</x-block> Component: grouped options, AlpineJS helper, and recycle option.</li>
                        <li>- <x-block>Form Color</x-block> Component: exclude specific colors or color steps.</li>
                        <li>- <x-block>Radio</x-block>, <x-block>Checkbox</x-block> and <x-block>Toggle</x-block>: custom color customization individually.</li>
                        <li>- <x-block>Radio</x-block> Component: no longer requires explicit value/id.</li>
                        <li>- <x-block>Pin</x-block> Component: smart mode with auto-submit.</li>
                        <li>- <x-block>ThemeSwitch</x-block> Component: redesigned with <x-block>simple</x-block> and <x-block>only-icons</x-block> modes, block style for dropdown usage.</li>
                        <li>- <x-block>Icon</x-block> Component: custom local icons, raw icons in all icon slots, and fully customized SVG as Blade component.</li>
                        <li>- <x-block>$tsui.focus()</x-block> helper: now supports focusing elements based on <x-block>x-ref</x-block>.</li>
                    </ul>
                </div>
            </div>
            <p>
                With the exception of the "Internal" section, all details are described on the respective pages for each component.
            </p>
        </div>
    </x-section>
    <x-section class="space-y-4" title="How to Upgrade" disable-copy>
        <p>
            Now let's talk about how to upgrade your application from version 2.x to 3. The amount of work will depend on
            how much customization you've done. If you use TallStackUI "in a basic way", the upgrade should be straightforward.
        </p>
        <div class="pl-4 space-y-4">
            <div>
                <h2 class="text-lg tracking-tight text-pink-600 font-medium">1. Rename "personalization" to "customization":</h2>
                <p>
                    The terminology has changed across the entire library: "Soft Personalization" is now "Soft Customization", "Deep Personalization"
                    is now "Deep Customization", and so on. The main facade method has also changed from <x-block>personalize()</x-block> to
                    <x-block>customize()</x-block>. Update any references in your code accordingly:
                </p>
                <x-code language="php" :contents="$personalization" />
                <p>
                    <b>If you do not use any personalization/customization features, then just skip this step!</b>
                </p>
            </div>
            <div>
                <h2 class="text-lg tracking-tight text-pink-600 font-medium">2. Check soft customization keys:</h2>
                <p>
                    Some soft customization keys may have been renamed for better organization. Before upgrading, review the
                    <a href="{{ route('documentation', ['customization', 'soft']) }}" wire:navigate class="underline">Soft Customization documentation</a>
                    to verify your keys are up to date. <b>If you do not use Soft Customization, then just skip this step!</b>
                </p>
            </div>
            <div>
                <h2 class="text-lg tracking-tight text-pink-600 font-medium">3. Redo deep customization:</h2>
                <p>
                    If you have published TallStackUI Blade files or extended component classes, we recommend that you back up your files,
                    republish the new ones, and reapply your adjustments. Internal changes require fresh files to work properly.
                    <b>If you do not use Deep Customization, then just skip this step!</b>
                </p>
            </div>
            <div>
                <h2 class="text-lg tracking-tight text-pink-600 font-medium">4. Internal Scoped Customization:</h2>
                <p>
                    If you used to publish Blade files to customize internal components within other components, this is no longer necessary.
                    Learn about the <a href="{{ route('documentation', ['customization', 'soft']) }}" wire:navigate class="underline font-bold">Internal Scoped Customization</a>:
                    a way to customize internal components without publishing Blade files or changing all components globally.
                </p>
            </div>
            <div>
                <h2 class="text-lg tracking-tight text-pink-600 font-medium">5. Update TailwindCSS to v4:</h2>
                <p>
                    <b>TallStackUI 3 requires TailwindCSS v4. Support for TailwindCSS v3 has been discontinued.</b> Follow the
                    <a href="https://tailwindcss.com/docs/upgrade-guide" target="_blank" class="underline">official TailwindCSS v4 migration guide</a>
                    to update your project. <b>This is an important step for all users.</b>
                </p>
            </div>
            <div>
                <h2 class="text-lg tracking-tight text-pink-600 font-medium">6. Update vendor publishable tag:</h2>
                <p>
                    <b>Important:</b> The vendor publishable tag has been renamed from <x-block>tallstackui</x-block> to <x-block>ts-ui</x-block>.
                    This affects all <x-block>php artisan vendor:publish</x-block> commands. If you have any scripts, CI pipelines, or documentation
                    referencing the old tag name, make sure to update them to use <x-block>ts-ui</x-block> instead.
                </p>
                <x-warning class="pt-2">
                    All publishable resources (configuration files, Blade views, etc.) now use the ts-ui tag.
                    The old tallstackui tag will no longer work in version 3.
                </x-warning>
            </div>
            <div>
                <h2 class="text-lg tracking-tight text-pink-600 font-medium">7. Republish the configuration file:</h2>
                <p>
                    The TallStackUI configuration file - <x-block>config/tallstackui.php</x-block>, contains changes and additions in version 3.
                    <b>Be sure to compare your changes with the new file and synchronize accordingly so that your file has the necessary modifications and additions.</b>
                </p>
            </div>
            <div>
                <h2 class="text-lg tracking-tight text-pink-600 font-medium">8. Migrate to the <x-block>$tsui</x-block> JavaScript helper:</h2>
                <p>
                    In version 3, all individual JavaScript helpers have been unified into a single global <x-block>$tsui</x-block> object.
                    If you use any of the old helpers in your Alpine.js expressions or Blade templates, you must update them:
                </p>
                <div class="my-2">
                    <x-table :headers="[
                        ['index' => 'before', 'label' => 'Before (v2)'],
                        ['index' => 'after', 'label' => 'After (v3)'],
                    ]" :rows="[
                        ['before' => '$modalOpen(\'name\')', 'after' => '$tsui.open.modal(\'name\')'],
                        ['before' => '$modalClose(\'name\')', 'after' => '$tsui.close.modal(\'name\')'],
                        ['before' => '$slideOpen(\'name\')', 'after' => '$tsui.open.slide(\'name\')'],
                        ['before' => '$slideClose(\'name\')', 'after' => '$tsui.close.slide(\'name\')'],
                        ['before' => '$selectOpen(\'name\')', 'after' => '$tsui.open.select(\'name\')'],
                        ['before' => '$selectClose(\'name\')', 'after' => '$tsui.close.select(\'name\')'],
                        ['before' => '$focusOn(\'id\')', 'after' => '$tsui.focus(\'id\')'],
                    ]">
                        @interact('column_before', $row)
                            <x-block>{{ $row['before'] }}</x-block>
                        @endinteract
                        @interact('column_after', $row)
                            <x-block>{{ $row['after'] }}</x-block>
                        @endinteract
                    </x-table>
                </div>
                <x-warning>
                    The old JavaScript helpers ($modalOpen, $focusOn, $selectOpen, etc.)
                    are no longer available in version 3. <b>You must migrate all usages to the new helper.</b>
                </x-warning>
            </div>
            <div>
                <h2 class="text-lg tracking-tight text-pink-600 font-medium">9. Rename environment variable:</h2>
                <p>
                    The environment variable <x-block>TALLSTACKUI_AVOID_LAYOUT_REGISTRATION</x-block> has been renamed to
                    <x-block>TALLSTACKUI_IGNORE_LAYOUT_REGISTRATION</x-block>. If you use this variable in your <x-block>.env</x-block>
                    file or CI/CD pipelines, make sure to update it. <b>The old variable name will not be recognized in version 3.</b>
                </p>
            </div>
            <div>
                <h2 class="text-lg tracking-tight text-pink-600 font-medium">10. Component attributes:</h2>
                <p>
                    Most component attributes remain the same. New attributes have been added to several components (check individual component
                    documentation pages for details). In this regard, you should not have any breaking changes.
                </p>
            </div>
            <div>
                <h2 class="text-lg tracking-tight text-pink-600 font-medium">11. Clear application cache:</h2>
                <p>
                    Before updating the Composer dependencies, you <b>must</b> clear all cached files. This prevents errors caused
                    by stale cached references to classes or configurations that have changed in version 3:
                </p>
                <x-code language="shell" :contents="$optimizeClear" />
            </div>
            <div>
                <h2 class="text-lg tracking-tight text-pink-600 font-medium">12. Update the Composer:</h2>
                <p>
                    Finally, it's time to update your application to version 3. Edit your <x-block>composer.json</x-block> file:
                </p>
                <x-code language="json" :contents="$composer" disable-copy />
                <p>
                    After that, remove the <x-block>vendor</x-block> folder and then run this command to reinstall all your dependencies:
                </p>
                <x-code language="shell" :contents="$command" />
            </div>
        </div>
        <x-warning>
            If you notice any inconsistencies with this guide, <a class="underline" href="{{ route('issue') }}" target="_blank">please help us by reporting as an issue.</a>
        </x-warning>
    </x-section>
</x-layout>
