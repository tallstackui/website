<x-layout>
    <x-slot:title>
        Contribution Guide
    </x-slot:title>
    <x-slot:description>
        TallStackUI Contribuition Guide.
    </x-slot:description>
    <x-section title="Possibilities">
        <p class="text-justify">
            There are several ways to contribute to a library like TallStackUi, <b class="underline">don't think it's just with code.</b>
            Even if you're not an experienced developer, don't worry, there are other ways to help. Do you know
            how to write? Well, you can review the texts on both TallStackUI and our website and point out possible
            flaws. This is a way to contribute. Did you find something wrong with the website, documentation or any component of TallStackUi?
            Create an issue and report the problem. This is a way to contribute. Do you use and like TallStackUi? Why not share it with your friends?
            This is a way to contribute. Are you an experienced developer and want to join the team? Feel free to write
            components, test, bug fix, or other things. This is a way to contribute. Going further, do you like TallStackUi
            so much that you want to sponsor the project? Well, you can contribute with some financial donation. You
            have many ways to contribute. Choose one and go for it!
        </p>
    </x-section>
    <x-section title="Writing Codes">
        <p class="text-justify">
            Before we really get into the step-by-step guide on how to contribute with code, we want you to know a few things:
        </p>
        <ul class="mt-2 ml-4 list-inside list-decimal">
            <li>All codes need to follow the <a href="https://www.php-fig.org/psr/psr-12/" class="underline" target="_blank">PSR12</a></li>
            <li>All codes need to pass in Laravel Pint & PhpStan validations</li>
            <li>All codes need to pass in <a href="https://pestphp.com/docs/type-coverage" target="_blank" class="underline">Pest Type Coverage</a></li>
            <li>All codes need to be tested with <a href="https://pestphp.com" target="_blank" class="underline">Pest</a></li>
        </ul>
    </x-section>
    <x-section title="Prepare Environment">
        <p>Let's prepare your environment for your first contribution:</p>
        <p class="mt-2">1. Fork the <a href="https://github.com/tallstackui/tallstackui" class="underline" target="_blank">repository</a></p>
        <p>2. Clone the repository forked for your computer.</p>
        <p>3. Create a basic Laravel project using <a href="https://laravel.com/docs/10.x/starter-kits#laravel-breeze" class="underline" target="_blank">Laravel Breeze</a> with <b>Livewire (V3)</b> stack.</p>
        <p>4. Prepare any authentication way to access the <x-block>/dashboard</x-block></p>
        <p>5. Create a folder in the root of the Laravel project called <x-block>packages</x-block></p>
        <p>6. Inside the <x-block>packages</x-block> folder create another folder called <x-block>tallstackui</x-block></p>
        <p>7. Inside the <x-block>tallstackui</x-block> folder create a symbolic link to the repository forked at your computer:</p>
        <x-code language="shell" :contents="$link" />
        <p>9. The expected folder structure should be: <x-block>packages/tallstackui/tallstackui</x-block></p>
        <p>10. Open the <x-block>composer.json</x-block> of the Laravel project and insert the following content:</p>
        <x-code language="json" :contents="$composer" :copy="false" />
        <p>11. In the same <x-block>composer.json</x-block> file, change the <x-block>minimum-stability</x-block> to <x-block>dev</x-block></p>
        <p>12. After that, run the following command in the terminal:</p>
        <x-code language="shell" :contents="$command" />
        <p>13. <a href="{{ route('documentation.installation') }}" class="underline">Install the TallStackUi</a> in the Laravel project following the guide <i>(skip the step 1 of the tutorial)</i></p>
        <p>14. You are ready to start the work!</p>
    </x-section>
    <x-section title="Dusk Tests">
        <p class="text-justify">
            Some of the TallStackUI tests are written using <a href="https://laravel.com/docs/10.x/dusk" class="underline" target="_blank">Laravel Dusk</a>
            through the <a href="https://github.com/orchestral/testbench-dusk" class="underline" target="_blank">Orchestral Testbench Dusk.</a>
            Although sometimes difficult, you can run the browser tests on your computer. To do this, it is essential
            to have Chrome installed. Use the commands below to prepare your environment.</p>
        <p class="mt-2">Installing the appropriate Chrome driver according to your Chrome version:</p>
        <x-code language="shell" :contents="$dusk" />
        <p class="mt-2">Alternatively, you can use:</p>
        <x-code language="shell" :contents="$alternative" />
    </x-section>
    <x-section title="Run Tests">
        <p>1. Run the Feature tests:</p>
        <x-code language="shell" :contents="$feature" />
        <p>2. Run the Browser tests:</p>
        <x-code language="shell" :contents="$browser" />
        <p>3. Fixing Code Style:</p>
        <x-code language="shell" :contents="$pint" />
        <p>4. Validate Type Coverage & PhpStan:</p>
        <x-code language="shell" :contents="$analyse" />
    </x-section>
    <x-section title="Synchronize Changes">
        <p class="text-justify">
            Sometimes you can make changes to components, but the change is not noticed, it is
            like a cache state in the Laravel project. If this is the case,
            use the instruction below to synchronize the changes with Composer:
        </p>
        <x-code language="shell" :contents="$synchronize" />
        <x-warning>
            We suggest you to create an alias to facilitate the execution of this command.
        </x-warning>
    </x-section>
    <x-slot:navigation>
        <x-slot:back>
            <x-navigation.link href="{{ route('documentation.dark-theme') }}" text="Dark Theme" back />
        </x-slot:back>
    </x-slot:navigation>
</x-layout>
