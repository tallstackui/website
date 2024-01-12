<x-layout torchlight>
    <x-slot:title>
        Troubleshooting
    </x-slot:title>
    <x-section title="Non-existent Component" disable-copy>
        <p>
            Whenever you update TallStackUI, check whether there have been changes to the <x-block>config.php</x-block>
            file. As this file can be published for your application, if a new component is added,
            this file needs to be updated with the addition of the new component.
        </p>
    </x-section>
    <x-section title="Losing Component Attributes" disable-copy>
        <p>
            If you are using TallStackUI <u>on a version lower than Laravel 10.35</u> you will face
            an issue related to component attributes. This happens due to a bug in Laravel
            below version 10.35 that means that when passing attributes to a component that contains child
            components, such as input, buttons, badge, and others, they are not applied:
        </p>
        <x-code language="blade" :contents="$laravel1035Bug" disable-copy />
        <p>
            <span class="underline decoration-red-500 decoration-4 underline-offset-4">To fix this issue, ensure your Laravel is updated to a version higher
                than 10.35.</span> This issue was found by AJ and <a href="https://github.com/laravel/framework/issues/49206" class="underline" target="_blank">reported to the Laravel team.</a> A Laravel
            community member fixed the issue in <a href="https://github.com/laravel/framework/pull/49216" class="underline" target="_blank">a pull request.</a>
        </p>
    </x-section>
    <x-section title="Errors When Using Livewire in SPA Mode" disable-copy>
        <p>
            If you are using the new Livewire SPA mode you must load the TallStackUI in the first page rendered
            in your application and persist in all other pages that want to use TallStackUI. For example, if your
            applications has a <x-block>welcome.blade.php</x-block> which is the first page rendered, so it must
            contain the script of the TallStackUI <i>(step 3 of the installation page, at this same page)</i> and
            also the next ones, when navigating using <x-block>wire:navigate</x-block>. This is necessary
            because using Livewire's SPA mode, Livewire only evaluates what is a script and the TallStackUI
            script loader is not actually a script, but rather a route to a script.
        </p>
    </x-section>
</x-layout>
