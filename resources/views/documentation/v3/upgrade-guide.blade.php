<x-layout :$content>
    <x-slot:title>
        Upgrade Guide
    </x-slot:title>
    <blockquote class="p-4 my-4 border-s-4 border-gray-500 bg-gray-200/50 dark:border-gray-400 dark:bg-gray-800">
        <p class="text-md italic font-medium leading-relaxed text-gray-900 dark:text-white">
            This page transcribes a conversation between the creator of the TallStackUI - <a href="https://github.com/devajmeireles" target="_blank" class="underline">AJ</a>, and you.
        </p>
    </blockquote>
    <x-section title="Before Start" disable-copy>
        <div class="space-y-4">
            <p>
                Before you start updating your application to TallStackUI 2.x, I, <a href="https://github.com/devajmeireles" target="_blank" class="underline">AJ</a>,
                would like to thank you for using TallStackUI. I am very happy to know that by solving my problem, I was able to help you too, because TallStackUI
                was designed to solve my problem of not relying on other component libraries that are abandoned over time.
            </p>
            <p>
                Also, I would like to apologize for the delay! Yes, I consider it a big delay. My goal was to release version 2.x on the same date as version 1.x,
                on November 28th. Unfortunately, I was unable to meet this deadline due to several issues I had in my office.
            </p>
        </div>
    </x-section>
    <x-section title="Whats News" disable-copy>
        <div class="space-y-4">
            <p>
                TallStackUI 2.x brings a number of things that I consider important. You can think of components, components, and components, but a library like TallStackUI
                isn't just about new components. Version 2.x brings new components, improvements to current components, and hundreds of small bug fixes.
            </p>
            <p>
                Here's a quick list of what you can expect from version 2.x 👇
            </p>
            <div class="pl-4 space-y-4">
                <div>
                    <h2 class="text-lg tracking-tight text-pink-600 font-medium">👀 Internal:</h2>
                    <ul>
                        <li>- Redesigned internal structure for better long-term maintenance.</li>
                        <li>- Internal documentation in important logic sections.</li>
                        <li>- New internal concepts to improve Blade file structure.</li>
                        <li class="font-bold">- Increased performance for rendering various components by up to 10%</li>
                    </ul>
                </div>
                <div>
                    <h2 class="text-lg tracking-tight text-pink-600 font-medium">🥳 New Components and Helper:</h2>
                    <ul>
                        <li>- Carousel</li>
                        <li>- Environment</li>
                        <li>- Layout</li>
                        <li>- Signature</li>
                        <li>- New Helper: <a href="{{ route('documentation', ['v3', 'helpers', 'env-bar']) }}" wire:navigate class="font-bold underline">EnvBar</a></li>
                    </ul>
                </div>
                <div>
                    <h2 class="text-lg tracking-tight text-pink-600 font-medium">🌐 Others:</h2>
                    <ul>
                        <li>- New Scoped Soft Customization concept.</li>
                        <li>- New colors customization concept.</li>
                        <li>- New icons concept.</li>
                        <li>- New <x-block>tallstackui:ide</x-block> command.</li>
                        <li>- <x-block>Card</x-block> Component: support of colors, image and minimize effect.</li>
                        <li>- <x-block>Dropdown</x-block> Component: support to nested dropdown.</li>
                        <li>- <x-block>Floating</x-block> Component: ability to customize floating class per component.</li>
                        <li>- <x-block>Form Color</x-block> Component: support of clearable option.</li>
                        <li>- <x-block>Form Input</x-block> Component: support of clearable option.</li>
                        <li>- <x-block>Form Input</x-block> Component: ability to globally <x-block>invalidate</x-block> form validation errors.</li>
                        <li>- <x-block>Form Select Styled</x-block> Component: support of a basic lazy loading.</li>
                        <li>- <x-block>Form Select Styled</x-block> Component: support of group options.</li>
                        <li>- <x-block>Form Select Styled</x-block> Component: support of set <x-block>select</x-block> with default values.</li>
                        <li>- <x-block>Form Select Styled</x-block> Component: addition of <x-block>unfiltered</x-block> attribute.</li>
                        <li>- <x-block>Form Password</x-block> Component: ability to change password generator algorithm.</li>
                        <li>- <x-block>Form Number</x-block> Component: ability to increase/decrease by using <x-block>step</x-block> attribute.</li>
                        <li>- <x-block>Form Upload</x-block> Component: ability to validate BEFORE the upload.</li>
                        <li>- <x-block>Form Upload</x-block>Component: ability to control the floating closing effect after upload.</li>
                        <li>- <x-block>Rating</x-block> Component: ability to use any icon.</li>
                        <li>- <x-block>Slide</x-block> Component: ability of opening via new positions: top and bottom.</li>
                        <li>- <x-block>Stats</x-block> Component: support to <x-block>wire:click</x-block>.</li>
                        <li>- Helper <x-block>darkTheme</x-block>: several enhancements.</li>
                        <li>- Helper <x-block>Debug Mode</x-block>: now the ignore works with component class name instead of pure string.</li>
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
            Now that I've listed everything I've done in this new version so far, let's talk about how to upgrade your application
            from version 1.x to the new version, 2.x. First of all, it's important to mention that how much work it will be to upgrade
            to version 2.x will depend on how your application is doing. I've upgraded two of my SaaS applications by simply changing
            the version reference in <x-block>composer.json</x-block>
        </p>
        <div class="pl-4 space-y-4">
            <div>
                <h2 class="text-lg tracking-tight text-pink-600 font-medium">1. Check soft customization keys:</h2>
                <p>
                    Before starting the update process, check if the names of the Soft Customization keys remain the same. I've renamed some of them
                    for better internal organization regarding the naming logic. <b>If you do not use Soft Customization, then just skip this step!</b>
                </p>
            </div>
            <div>
                <h2 class="text-lg tracking-tight text-pink-600 font-medium">2. Redo deep customization:</h2>
                <p>
                    While I know this is a lot of work, if you have published TallStackUI Blade files or extended component classes to change specific behaviors -
                    such as the 1.x color scheme customization, we recommend that you back up your files, republish the new ones, and adjust the new files with your
                    adjustments. This is necessary because since we are talking about a new version, several internal changes have been made, so your current files
                    will be out of date. <b>If you do not use Soft Customization, then just skip this step!</b>
                </p>
            </div>
            <div>
                <h2 class="text-lg tracking-tight text-pink-600 font-medium">3. Save soft customization scoped:</h2>
                <p>
                    The concept of Scoped Soft Customization has changed in version 2.x, and the change is for the better! So save all your customizations to
                    apply them using the new concept. I explain everything about this on the Soft Customization page. <b>If you do not use Soft Customization, then just skip this step!</b>
                </p>
            </div>
            <div>
                <h2 class="text-lg tracking-tight text-pink-600 font-medium">4. Component attributes:</h2>
                <p>
                    As for the components and their attributes, there is no change, they are the same. In this regard, I hope you will not have any problems.
                    That is why if you use TallStackUI "in a basic way", then the upgrade process becomes extremely easy, as in my personal projects.
                </p>
            </div>
            <div>
                <h2 class="text-lg tracking-tight text-pink-600 font-medium">5. Republish the configuration file:</h2>
                <p>
                    The TallStackUI configuration file - <x-block>config/tallstackui.php</x-block>, will contain changes and additions to content in this new version, 2.x.
                    <b>Be sure to compare your changes with the new file and synchronize accordingly so that your file has the necessary modifications and additions</b>, such as the addition of new components.
                </p>
            </div>
            <div>
                <h2 class="text-lg tracking-tight text-pink-600 font-medium">6. Redo your custom icons:</h2>
                <p>
                    Since custom icon support has changed in version 2.x, we recommend that you read the <a href="{{ route('documentation', ['v3', 'ui', 'icon']) }}" wire:navigate class="underline">new icon documentation page</a>
                    to understand the changes and make any necessary adjustments. <b>If you do not use custom icons, then just skip this step!</b>
                </p>
            </div>
            <div>
                <h2 class="text-lg tracking-tight text-pink-600 font-medium">7. Update the Composer:</h2>
                <p>
                    Finally, it's time to update your application to the beta version 2.x. Edit your <x-block>composer.json</x-block> file:
                </p>
                <x-code language="json" :contents="$composer" disable-copy />
                <p>
                    After that remove the <x-block>vendor</x-block> folder and them run this command to reinstall all your dependencies:
                </p>
                <x-code language="shell" :contents="$command" />
            </div>
        </div>
        <x-warning>
            If you notice any inconsistencies with this guide or any unexpected behavior during the beta phase, <a class="underline" href="{{ route('issue') }}" target="_blank">please help us by reporting as an issue.</a>
        </x-warning>
    </x-section>
</x-layout>
