<x-layout>
    <x-slot:title>
        Welcome to TallStackUi
    </x-slot:title>
    <x-section>
        <p class="text-justify">
            This is TallStackUi, a library of ready-to-use components for TALL Stack applications, based on Livewire V3.
            TallStackUi is unlike anything you've ever seen, from its conception to construction and general
            availability. Beforehand we want to tell you a little about the history of TallStackUi.
        </p>
    </x-section>
    <x-section class="space-y-4" title="History of TallStackUi">
        <p class="text-justify">
            Hey! I'm <a href="https://github.com/devajmeireles" class="underline underline-offset-4" target="_blank">AJ</a>,
            creator of TallStackUi. I'm a FullStack developer passionate about TALL Stack and addicted to the Laravel ecosystem.
            I also cooperate with the PestPHP community and other open-source projects.
        </p>
        <p class="text-justify">
            For a long time, I have used a variety of component libraries to create TALL Stack applications.
            As time went by I started to notice that component libraries started to be abandoned: without new
            features, improvements or even bug fixes. Meanwhile, I was creating components manually to avoid
            relying on libraries that I knew could stop being supported at any time.
        </p>
        <p class="text-justify">
            After a while I came up with the idea of creating TallStackUi: a library of TALL Stack components
            to serve me and anyone who wants to believe in the project. <u>The main differentiator you will find
            in TallStackUi will be the fact that I use the library myself in my TALL Stack projects.</u> This
            encourages me to maintain the library with constant news, improvements and updates.
        </p>
    </x-section>
    <x-section class="mt-2" title="Maintainers">
        <p class="text-justify">
            As no one gets anywhere alone, TallStackUi has a team of developers who work to provide the
            support that the library deserves. I am grateful to the people who believed in the project
            and made it happen. You can check the list of contributors by <a href="https://github.com/tallstackui/tallstackui/graphs/contributors" class="underline" target="_blank">clicking here.</a>
            Feel invited to join our team by reading the <a href="{{ route('documentation.contribution') }}" class="underline">contribution guide.</a>
        </p>
    </x-section>
</x-layout>
