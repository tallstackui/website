<x-layout :torchlight="false">
    <x-slot:title>
        Get Started
    </x-slot:title>
    <x-section disable-copy>
        <p>
            This is the TallStackUI, a <b class="text-pink-600">powerful suite of 30+ ready-to-use components for TALL Stack applications.</b>
            TallStackUI is unlike anything you've ever seen, from its conception to construction and general
            availability. Beforehand we want to tell you a little about our motivation.
        </p>
    </x-section>
    <x-section class="space-y-4" title="History & Motivation" disable-copy>
        <p>
            TallStackUI was created by <a href="https://github.com/devajmeireles" class="underline" target="_blank">AJ</a>,
            a <i>FullStack</i> PHP developer for 10 years, passionate about the Laravel and Livewire ecosystem, especially the TALL Stack,
            a universe of possibilities with little time and effort. <a href="https://github.com/devajmeireles" class="underline" target="_blank">AJ</a> is an active developer in the community,
            contributing to Laravel, Livewire, PestPHP and other open-source solutions.
        </p>
        <p>
            Because <a href="https://github.com/devajmeireles" class="underline" target="_blank">AJ</a> has several SaaS applications, the motivation for creating TallStackUI was to avoid dependencies
            on libraries that over time became outdated, without improvements or new features, generating
            possible impacts on large projects that depend on everything working well.
        </p>
        <p>
            Feel invited to <a href="{{ $discord }}" class="underline" target="_blank">join our Discord</a> server to interact with the community and get early access to news.
        </p>
    </x-section>
    <x-slot:navigation>
        <x-slot:next>
            <x-layout.footer-navigation href="{{ route('documentation.installation') }}" text="Installation" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
