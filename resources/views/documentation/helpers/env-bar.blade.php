@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content>
    <x-slot:title>Env Bar</x-slot>
    <x-slot:description>
        A fixed bar utility at the top of the page.
    </x-slot>
    <x-section title="Concept" disable-copy>
        Many applications can have different environments, such as local,
        staging, sandbox, and production. In this scenario, it becomes a bit
        risky to have the same application open in different browser tabs,
        interacting with each of the environments. The TallStackUI EnvBar is a
        sticky helper at the top of the page that allows you to easily identify
        the environment you are interacting with through various visual
        information associated with different cores per environment. The EnvBar
        is different from the
        <x-refer :doc="['ui', 'environment']">environment component</x-refer>
        , the environment component is very simple compared to the EnvBar. The
        EnvBar is an official TallStackUI package installed via composer.
    </x-section>
    <x-section title="Demonstration" disable-copy>
        <div class="space-y-4">
            <img src="{{ url("assets/images/env-bar.png") }}"/>
            <p>
                As you can see in the example above, the environment is "local",
                so this determines the green color for all visual elements of
                the EnvBar. There are colors for: local, staging and sandbox,
                because we understand that EnvBar will not be used in production
                - although it is possible, through a visualization scheme by
                authenticated user. By default the defined color scheme is:
            </p>
            <ul class="space-y-2">
                <li>
                    <x-block>local</x-block>
                    - shades of
                    <b class="text-green-700">green</b>
                    colors
                </li>
                <li>
                    <x-block>staging</x-block>
                    - shades of
                    <b class="text-yellow-700">yellow</b>
                    colors
                </li>
                <li>
                    <x-block>sandbox</x-block>
                    - shades of
                    <b class="text-orange-700">orange</b>
                    colors
                </li>
            </ul>
        </div>
    </x-section>
    <x-section title="Installation" disable-copy>
        <div class="space-y-4">
            <x-code language="shell" :contents="$installation"/>
            <p>
                <span class="underline">
                    EnvBar will be automatically injected into your application.
                </span>
                If you prefer to determine where it should be injected instead
                of accepting automatic injection, you can use
                <x-block>@envbar</x-block>
                anywhere in your layout.
            </p>
        </div>
    </x-section>
    <x-section title="Available Configurations" disable-copy>
        <x-code language="shell" :contents="$configuration"/>
        <p class="mb-2">
            There are several useful settings available through the
            <x-block>config/envbar.php</x-block>
            configuration file, however most of them can be set through
            environment variables. Here is the list of all available environment
            variables:
        </p>
        <x-table
            :headers="[
                    ['index' => 'variable', 'label' => 'Variable'],
                    ['index' => 'description', 'label' => 'Description'],
                ]"
            :rows="[
                    ['variable' => 'ENVBAR_ENABLED', 'description' => 'Enable/disable the EnvBar.'],
                    ['variable' => 'ENVBAR_DISABLE_ON_TESTS', 'description' => 'Enable/disable the EnvBar on tests.'],
                    ['variable' => 'ENVBAR_SIZE', 'description' => 'Set the size of the EnvBar. Allowed: xs, sm, md, lg, xl.'],
                    ['variable' => 'ENVBAR_FIXED', 'description' => 'If the EnvBar should be fixed at the top.'],
                    ['variable' => 'ENVBAR_BOTTOM', 'description' => 'If the EnvBar should be fixed at the bottom instead of the top.'],
                    ['variable' => 'ENVBAR_TAILWIND_BREAKING_POINTS', 'description' => 'If the TailwindCSS breakpoints should be displayed.'],
                    ['variable' => 'ENVBAR_WARNING_MESSAGE', 'description' => 'Allows you to set a warning message.'],
                    ['variable' => 'ENVBAR_CLOSABLE_ENABLED', 'description' => 'If the close button should be displayed.'],
                    ['variable' => 'ENVBAR_CLOSABLE_TIMEOUT', 'description' => 'If after closing the EnvBar, it should be displayed again after a certain time, in minutes.'],
                    ['variable' => 'ENVBAR_LINKS', 'description' => 'Set a list of links to be displayed on the right side of the EnvBar as a dropdown.'],
                    ['variable' => 'ENVBAR_FOR_AUTHENTICATED_USERS_ENABLED', 'description' => 'If the EnvBar should be displayed only for authenticated users.'],
                    ['variable' => 'ENVBAR_FOR_AUTHENTICATED_USERS_GUARD', 'description' => 'The default guard to be used for authenticated users.'],
                    ['variable' => 'ENVBAR_ON_MOBILE', 'description' => 'If the EnvBar should be displayed on mobile.'],
                    ['variable' => 'ENVBAR_PROVIDER', 'description' => 'The provider to be used for fetching the last release. Allowed: github, bitbucket, envoyer.'],
                    ['variable' => 'ENVBAR_GITHUB_TOKEN', 'description' => 'GitHub token to be used for fetching the last release.'],
                    ['variable' => 'ENVBAR_GITHUB_REPOSITORY', 'description' => 'GitHub repository to be used for fetching the last release.'],
                    ['variable' => 'ENVBAR_GITHUB_DAYS_FOR_CACHE', 'description' => 'The time in days to cache the last GitHub release.'],
                    ['variable' => 'ENVBAR_BITBUCKET_TOKEN', 'description' => 'BitBucket token to be used for fetching the last release.'],
                    ['variable' => 'ENVBAR_BITBUCKET_REPOSITORY', 'description' => 'BitBucket repository to be used for fetching the last release.'],
                    ['variable' => 'ENVBAR_BITBUCKET_DAYS_FOR_CACHE', 'description' => 'The time in days to cache the last release.'],
                    ['variable' => 'ENVBAR_ENVOYER_TOKEN', 'description' => 'Envoyer token to be used for fetching the last release.'],
                    ['variable' => 'ENVBAR_ENVOYER_PROJECT_ID', 'description' => 'Envoyer project id to be used for fetching the last release.'],
                    ['variable' => 'ENVBAR_ENVOYER_DAYS_FOR_CACHE', 'description' => 'The time in days to cache the last release.'],
                ]">
            @interact('column_variable', $row)
            <x-block>{{ $row['variable'] }}</x-block>
            @endinteract
        </x-table>
    </x-section>
    <x-section title="Production Environment" disable-copy>
        <div class="space-y-4">
            <p>
                By default, EnvBar does not work in the production environment.
                This is because it is important to read this documentation in
                its entirety before using it in production. Therefore, to
                activate EnvBar in production you must:
            </p>
            <ul class="list-inside list-decimal space-y-2">
                <li>
                    Enable the
                    <x-block>production</x-block>
                    environment in the configuration file.
                </li>
                <li>
                    Set the
                    <x-block>ENVBAR_FOR_AUTHENTICATED_USERS_ENABLED</x-block>
                    environment variable as
                    <x-block>true</x-block>
                    .
                </li>
                <li>
                    Optionally, set
                    <x-block>ENVBAR_FOR_AUTHENTICATED_USERS_GUARD</x-block>
                    auth guard. Default is
                    <x-block>web</x-block>
                    .
                </li>
                <li>
                    Optionally, create a Laravel Gate to control which users
                    will see the EnvBar.
                </li>
            </ul>
            <x-code :contents="$gate" disable-copy/>
        </div>
    </x-section>
    <x-section title="Configure Color Scheme" disable-copy>
        <div class="space-y-4">
            <p>
                You can customize the color scheme for each environment in the
                <x-refer doc="configuration">configuration file:</x-refer>
            </p>
            <x-code :contents="$colors" disable-copy/>
            <p>
                All colors are based on the TailwindCSS color scheme.
            </p>
        </div>
    </x-section>
    <x-section title="Ignores" disable-copy>
        <div class="space-y-4">
            <p>
                You can control which pages the EnvBar will be ignored on via
                <x-refer doc="configuration">the configuration file.</x-refer>
            </p>
            <x-code :contents="$ignores" disable-copy/>
            <p>
                Behind the scenes, this feature uses
                <x-block>Request::routeIs</x-block>
                to check the current route.
            </p>
        </div>
    </x-section>
    <x-section title="Commands" disable-copy>
        <div class="space-y-4">
            <p>
                To avoid multiple requests to the git provider, the latest
                release is cached for
                <x-block>ENVBAR_*_CACHED_FOR</x-block>
                day(s). If you want to clear the release cache, you can clear
                the entire application cache or run the following command to
                clear the release cache only, without affecting the other cache:
            </p>
            <x-code language="shell" :contents="$flush"/>
            <p>
                If you are using
                <x-block>ENVBAR_CLOSABLE_TIMEOUT</x-block>
                and you closed the EnvBar, you can use the command below to show
                the EnvBar again without waiting for the final minutes timeout
                to run out:
            </p>
            <x-code language="shell" :contents="$show"/>
        </div>
    </x-section>
    <x-section title="Helper Links" disable-copy>
        <div class="space-y-4">
            <p>
                The EnvBar has the ability to display links in a dropdown to
                serve as a collection of documents or development materials. You
                have two ways to define these links, either through the
                <x-block>ENVBAR_LINKS</x-block>
                environment variable or through the configuration file. In
                addition, links can have a label associated with a link or just
                links, where the label will be the link itself.
            </p>
            <ul class="list-inside list-decimal">
                <li>
                    Only link:
                    <x-code language="env" :contents="$links"/>
                </li>
                <li>
                    Label and link:
                    <x-code language="env" :contents="$labels"/>
                </li>
            </ul>
        </div>
    </x-section>
    <x-section title="Dedicated Repository" disable-copy>
        <a
            href="https://github.com/tallstackui/envbar"
            class="underline"
            target="_blank"
        >
            EnvBar has its own dedicated repository.
        </a>
        For this reason, issues, pull requests should be submitted to this
        repository instead of the official TallStackUI repository. We don't have
        releases on there, only tags.
    </x-section>
</x-layout>
