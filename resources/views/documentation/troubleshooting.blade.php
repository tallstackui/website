<x-layout torchlight>
    <x-slot:title>
        Troubleshooting
    </x-slot:title>
    <x-section title="Losing Component Attributes" :copy="false">
        <p>
            If you are using TallStackUI <u>on a version lower than Laravel 10.35</u> you will face
            an issue related to component attributes. This happens due to a bug in Laravel
            below version 10.35 that means that when passing attributes to a component that contains child
            components, such as input, buttons, badge, and others, they are not applied:
        </p>
        <x-code language="blade" :contents="$laravel1035Bug" :copy="false" />
        <p>
            To fix this issue, <span class="underline decoration-red-500 decoration-4 underline-offset-4">ensure your Laravel is updated to a version higher
                than 10.35.</span> This issue was found by AJ and <a href="https://github.com/laravel/framework/issues/49206" class="underline" target="_blank">reported to the Laravel team.</a> A Laravel
            community member fixed the issue in <a href="https://github.com/laravel/framework/pull/49216" class="underline" target="_blank">a pull request.</a>
        </p>
    </x-section>
</x-layout>
