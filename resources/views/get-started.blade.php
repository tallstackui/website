<x-layout :torchlight="false">
    <x-slot:title>
        Welcome to TallStackUi
    </x-slot:title>
    <x-section>
        <p class="text-justify">
            This is the TallStackUi, a library of ready-to-use components for TALL Stack applications.
            TallStackUi is unlike anything you've ever seen, from its conception to construction and general
            availability. Beforehand we want to tell you a little about our motivation.
        </p>
    </x-section>
    <x-section class="space-y-4" title="Motivation Behinds TallStackUi">
        <p class="text-justify">
            Hey! I'm <a href="https://github.com/devajmeireles" class="underline" target="_blank">AJ</a>,
            creator of TallStackUi and FullStack PHP developer since 9 years ago. I'm passionate about TALL
            Stack and addicted to the Laravel ecosystem, especially <a href="https://pestphp.com" class="underline" target="_blank">Pest</a>,
            the best PHP testing framework that I help maintain.
        </p>
        <p class="text-justify">
            As the owner of a few TALL Stack SaaS, I often came across situations where the component
            library I was using left me without new features, updates, or even worse bugs affecting my
            applications. I decided to stop using component libraries and create my components manually
            – who has never done this? The main problem I found with this was that I needed to recreate
            the components in new projects even if I copied them, which would cost me time and money.
        </p>
        <p class="text-justify">
            TallStackUi is a solution to solve a personal problem while serving the community. <u>The main
                guarantee you will have is the fact that I, the author, and all contributors are the main
                users of the library</u>, guaranteeing useful components and frequent updates.
        </p>
    </x-section>
    <x-slot:navigation>
        <x-slot:next>
            <x-navigation.link href="{{ route('documentation.installation') }}" text="Installation" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
