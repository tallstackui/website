@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content>
    <x-slot:title>Contribution Guide</x-slot:title>
    <x-slot:description>TallStackUI Contribuition Guide.</x-slot:description>
    <x-section title="Possibilities" disable-copy>
        There are several ways to contribute to a library like TallStackUI,
        <b class="underline">it’s not just about code!</b>
        Even if you’re not an experienced developer, don’t worry, there are other ways to help. Do you enjoy writing?
        You can review the texts on both TallStackUI and our website, identifying and pointing out possible mistakes.
        Did you find an issue on the website, documentation, or any TallStackUI component? Create an issue and report
        the problem. Are you a fan of TallStackUI? Share it with your friends and community! Spreading the word is also
        a valuable contribution. If you’re an experienced developer and want to join the team, feel free to contribute
        by writing components, testing, fixing bugs, or improving the project in other ways. Want to go even further? If
        you love TallStackUI and wish to support it, consider making a financial donation. There are many ways to
        contribute, choose one and make a difference!
    </x-section>
    <x-section title="TallStackUI Way" disable-copy>
        <div class="space-y-4">
            <p>Before we really get into the guide on how to contribute with code, we want you to know a few things:</p>
            <ul class="list-inside list-decimal">
                <li>
                    All codes must follow the
                    <a href="https://www.php-fig.org/psr/psr-12/" class="underline" target="_blank">PSR12</a>
                </li>
                <li>All codes must pass in Laravel Pint & PhpStan validations</li>
                <li>
                    All codes must pass in
                    <a href="https://pestphp.com/docs/type-coverage" target="_blank" class="underline"
                        >Pest Type Coverage</a>
                </li>
                <li>
                    All codes must be tested with
                    <a href="https://pestphp.com" target="_blank" class="underline">Pest</a>
                </li>
            </ul>
        </div>
    </x-section>
    <x-section title="Prepare Environment" disable-copy>
        <div class="space-y-4">
            <ul class="list-inside list-decimal">
                <li>
                    Fork the <x-block>3.x</x-block> branch of the
                    <a href="https://github.com/tallstackui/tallstackui" class="underline" target="_blank"
                        >TallStackUI repository</a>
                </li>
                <li>Clone the repository forked for your computer.</li>
                <li>
                    Create a new branch based on <x-block>3.x</x-block> -
                    <b class="italic">THIS IS A MANDATORY REQUIREMENT!</b>
                </li>
                <li>
                    Create a basic Laravel project using
                    <a
                        href="https://laravel.com/docs/10.x/starter-kits#laravel-breeze"
                        class="underline"
                        target="_blank"
                    >Laravel Breeze</a>
                    with <b>Livewire (V3)</b> stack.
                </li>
                <li>Prepare any authentication way to access the <x-block>/dashboard</x-block></li>
                <li>
                    Update the <x-block>composer.json</x-block> of the Laravel project with the following code:
                    <x-code language="json" :contents="$composer" disable-copy />
                </li>
                <li>
                    Run the following command:
                    <x-code language="shell" :contents="$composerInstallCommand" />
                </li>
                <li class="font-bold">
                    You are ready to start the contribution 🎉 Create a new branch and start to code!
                </li>
            </ul>
        </div>
    </x-section>
    <x-section title="Dusk Tests" disable-copy>
        <div class="space-y-4">
            <p>
                Some of the TallStackUI tests are written using Laravel Dusk via Orchestral Testbench Dusk. While it can
                be tricky to set up an environment to run this type of test - including having Google Chrome installed -
                you can run browser tests on your computer. Use the commands below to set up your environment.
            </p>
            <p>Installing the appropriate Chrome driver according to your Chrome version:</p>
            <x-code language="shell" :contents="$dusk" />
            <p>Alternatively, you can use:</p>
            <x-code language="shell" :contents="$alternative" />
        </div>
    </x-section>
    <x-section title="Run Tests" disable-copy>
        <ul class="list-inside list-decimal">
            <li>
                Run all tests:
                <x-code language="shell" :contents="$allTests" />
            </li>
            <li>
                Run only the Feature tests:
                <x-code language="shell" :contents="$feature" />
            </li>
            <li>
                Run only the Browser tests:
                <x-code language="shell" :contents="$browser" />
            </li>
            <li>
                Fixing Code Style:
                <x-code language="shell" :contents="$pint" />
            </li>
            <li>
                Validate Type Coverage & PhpStan:
                <x-code language="shell" :contents="$analyse" />
            </li>
        </ul>
    </x-section>
    <x-section title="Synchronize Changes" disable-copy>
        <div class="space-y-4">
            <p>
                Sometimes you can make changes to components, but the change is not noticed, it is like a cache state in
                the Laravel project. If this is the case, use the instruction below to synchronize the changes:
            </p>
            <x-code language="shell" :contents="$synchronize" />
        </div>
    </x-section>
</x-layout>
