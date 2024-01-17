<x-layout torchlight>
    <x-slot:title>
        Frequently Asked Questions
    </x-slot:title>
    <x-slot:description>
        Answers to the most frequently asked questions about TallStackUI.
    </x-slot:description>
    <x-section title="Why use TallStackUI instead of something like FilamentPHP?" disable-copy>
        <p>
            <u>FilamentPHP is one of the best form builders</u>, with little time and effort
            you can have a complete CRUD panel, however, there are some scenarios
            in which using a tool like it is not favorable. TallStackUI, on the other hand,
            is a component library for UI, that is: <span class="font-semibold">TallStackUI does not generate PHP code,
            and it does not take care of business rules, so the code that makes the application
            work is completely under your control, only the UI - visually, will be available through
            the TallStackUI components.</span> If you need something fast, tools like Filament are always
            the best way to go. However, if you or your project are careful about dependencies, or
            you want to have control over all PHP code but save time just on the UI, TallStackUI is the best way.
        </p>
    </x-section>
    <x-section title="Why use TallStackUI and not other UI libraries?" disable-copy>
        <p>
            TallStackUI was created and is maintained by people who, in addition to being users of the library itself,
            are people fully connected with the TallStack ecosystem, mainly Laravel and Livewire, capable developers
            who know everything about this ecosystem. <u>Therefore, when using TallStackUI the biggest guarantee you and
            your project will have is frequent updates.</u> After all, the TallStackUI developer team are also TallStackUI
            users. <span class="font-semibold">No updates for TallStackUI = no updates for our projects, which doesn't make sense.</span>
        </p>
    </x-section>
    <x-section title="Can I use TallStackUI at the same time as using other UI libraries?" disable-copy>
        <p>
            Yes, totally! TallStackUI components support a <a href="{{ route('documentation.installation').'#component-prefix' }}" class="underline">prefix key</a>,
            which consists of prefixing TallStackUI components avoiding conflicts in component names of other libraries.
        </p>
    </x-section>
    <x-section title="What can and cannot I personalize in TallStackUI?" disable-copy>
        <p>
            From concept to creation, TallStackUI was designed to offer forms of personalization,
            so you can personalize TallStackUI components however you want, using two different
            methods available, which we will explain below.
        </p>
        <ul class="mt-4 space-y-4 list-decimal list-inside">
            <li>
                <span class="font-semibold">Soft Personalization:</span>
                <p class="mt-2">
                    <a href="{{ route('documentation.personalization.soft') }}" class="underline">Soft Personalization is an innovative and unique method, created exclusively by TallStackUI,</a>
                    which allows components to be personalized at runtime, through a service provider.
                    <span class="font-semibold">The idea behind soft personalization is to tap into personalizable blocks of each
                    component and change your content.</span> Although it may seem limited, soft personalization
                    is very powerful and offers, in addition to facilitating the personalization process,
                    countless possibilities including a way to personalize "inline" components, that is,
                    personalization is applied with a kind of scope to a single component instead of all components.
                </p>
            </li>
            <li>
                <span class="font-semibold">Deep Personalization:</span>
                <p class="mt-2">
                    While soft personalization is, let's say, superficial, but still powerful for tasks of changing
                    the original content, <a href="{{ route('documentation.personalization.deep') }}" class="underline">
                    deep personalization consists of extending the original PHP component classes
                    and changing their content as you want, as well as directly changing the related Blade files to the
                    component.</a> This method of personalization will undoubtedly require more technical knowledge, which is
                    why <a href="{{ route('documentation.personalization.soft') }}" class="underline">Soft Personalization</a>
                    was created so that even if the developer is a beginner, he can personalize the components with ease.
                </p>
            </li>
        </ul>
    </x-section>
    <x-section title="Are there any roadmap of upcoming TallStackUI releases?" disable-copy>
        <p>
            Internally, yes. We like to prepare things with surprises, so the roadmap remains solely with the team, internally.
            We currently have over 30 components and expect the release of over 15 more new components in 2024.
        </p>
    </x-section>
    <x-section title="What makes TallStackUI a special library for my projects?" disable-copy>
        <p>
            TallStackUI was built by developers who are experts in PHP, JavaScript, and automated testing.
            This causes us to adopt some strict stances on quality control, written code, and testing.
            TallStackUI is guided for PHP 8.1 (support for PHP 8.1 or more!), following the PSR 12, with
            automated unit and browser tests with PestPHP, code analyses with LaraStan, without TypeScript
            to write simple and easy-to-understand JavaScript code, generating easy maintenance and less
            chance of bugs. Furthermore, our components do not have direct coupling, for example: a component
            that is used within 10 other components, meaning that possible bugs are isolated per component,
            with no chance of globally affecting other components.
        </p>
    </x-section>
    <x-section title="Is there a release schedule?" disable-copy>
        <p class="mb-4">
            No! <u>As we find things worthy of release we simply ship them immediately, except for days like Friday,
            Saturday, and Sunday.</u> That's why it's always good to pay attention and periodically update the TallStackUI
            in your project. To do that, just run this command through your terminal in the root of the project:
        </p>
        <x-clipboard text="composer update tallstackui/tallstackui"/>
    </x-section>
    <x-section title="Is there a price to pay to use TallStackUI?" disable-copy>
        <p>
            Although there is a sponsorship program, which raises funds to encourage the work of developers
            of tools like TallStackUI, <span class="font-semibold">TallStackUI itself is free and does not require payment.</span> However,
            if you agree to support the library, <a href="https://github.com/sponsors/devajmeireles" class="underline" target="_blank">you can do so by sponsoring the creator.</a>
        </p>
    </x-section>
    <x-section title="How can I contribute to TallStackUI?" disable-copy>
        <p>
            There are several ways to contribute to TallStackUI, from the sponsorship program, as mentioned above,
            to share the library or offering help with code by sending pull requests.
            <a href="{{ route('documentation.contribution') }}" class="underline">Read the guide on how to prepare a development environment to submit a pull request to TallStackUI.</a>
        </p>
    </x-section>
    <x-section title="How to follow news from TallStackUI?" disable-copy>
        <p>
            You can follow AJ, the creator of TallStackUI, on social media: <a href="https://www.linkedin.com/in/devajmeireles/" class="underline" target="_blank">LinkedIn</a> and <a href="https://twitter.com/devajmeireles" class="underline" target="_blank">X</a>, and also join our
            <a href="{{ $discord }}" class="underline" target="_blank">Discord server</a>, which already has more than 100 people, so you'll have access to early updates and news.
        </p>
    </x-section>
    <x-warning>
        Is there an answer missing here? Join our <a href="{{ $discord }}" class="underline" target="_blank">Discord server</a> to help us.
    </x-warning>
    <x-slot:navigation>
        <x-slot:back>
            <x-layout.footer-navigation :href="route('documentation.updates')" text="Updates" back />
        </x-slot:back>
        <x-slot:next>
            <x-layout.footer-navigation :href="route('documentation.form.input')" text="Form Input" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
