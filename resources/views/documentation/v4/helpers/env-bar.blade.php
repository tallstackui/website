@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content>
    <x-slot:title>
        Env Bar
    </x-slot:title>
    <x-slot:description>
        A fixed bar utility at the top of the page.
    </x-slot:description>
    <x-section title="Concept" disable-copy>
        Many applications can have different environments, such as local, staging, sandbox, and production. In this scenario, it becomes
        a bit risky to have the same application open in different browser tabs, interacting with each of the environments. The TallStackUI
        EnvBar is a sticky helper at the top of the page that allows you to easily identify the environment you are interacting with through
        various visual information associated with different cores per environment. The EnvBar is different from the <a href="{{ route('documentation', ['v4', 'ui', 'environment']) }}" class="underline">environment component</a>,
        the environment component is very simple compared to the EnvBar. The EnvBar is an official TallStackUI package installed via composer.
    </x-section>
    <x-section title="Demonstration" disable-copy>
        <div class="space-y-4">
            <img src="{{ url('assets/images/env-bar.png') }}" />
            <p>
                As you can see in the example above, the environment is "local", so this determines the green color for all
                visual elements of the EnvBar. There are colors for: local, staging and sandbox, because we understand that
                EnvBar will not be used in production - although it is possible, through a visualization scheme by authenticated
                user. By default the defined color scheme is:
            </p>
            <ul class="space-y-2">
                <li><x-block>local</x-block> - shades of <b class="text-green-700">green</b> colors</li>
                <li><x-block>staging</x-block> - shades of <b class="text-yellow-700">yellow</b> colors</li>
                <li><x-block>sandbox</x-block> - shades of <b class="text-orange-700">orange</b> colors</li>
            </ul>
        </div>
    </x-section>
    <x-section title="Installation" disable-copy>
        <div class="space-y-4">
            <x-code language="shell" :contents="$installation" />
            <p>
                <span class="underline">EnvBar will be automatically injected into your application.</span> Starting with v1.2.0, if you prefer
                to determine where it should be injected instead of accepting automatic injection, you can use <x-block>@envbar</x-block> anywhere in your layout.
            </p>
        </div>
    </x-section>
    <x-section title="Available Configurations" disable-copy>
        <div class="space-y-4">
            <x-code language="shell" :contents="$configuration" />
            There are several useful settings available through the <x-block>config/envbar.php</x-block>
            configuration file, however most of them can be set through environment variables. Here is
            the list of all available environment variables:
            <ul class="list-decimal list-inside">
                <li><x-block>ENVBAR_ENABLED</x-block>: Enable/disable the EnvBar.</li>
                <li><x-block>ENVBAR_DISABLE_ON_TESTS</x-block>: Enable/disable the EnvBar on tests.</li>
                <li><x-block>ENVBAR_SIZE</x-block>: Set the size of the EnvBar: Allowed: xs, sm, md, lg, xl</li>
                <li><x-block>ENVBAR_FIXED</x-block>: If the EnvBar should be fixed at the top.</li>
                <li><x-block>ENVBAR_BOTTOM</x-block>: If the EnvBar should be fixed at the bottom instead of the top.</li>
                <li><x-block>ENVBAR_TAILWIND_BREAKING_POINTS</x-block>: If the TailwindCSS breakpoints should be displayed.</li>
                <li><x-block>ENVBAR_WARNING_MESSAGE</x-block>: Allows you to set a warning message.</li>
                <li><x-block>ENVBAR_CLOSABLE_ENABLED</x-block>: If the close button should be displayed.</li>
                <li><x-block>ENVBAR_CLOSABLE_TIMEOUT</x-block>: If after closing the EnvBar, it should be displayed again after a certain time, in minutes.</li>
                <li><x-block>ENVBAR_LINKS</x-block>: Set a list of links to be displayed on the right side of the EnvBar as a dropdown.</li>
                <li><x-block>ENVBAR_FOR_AUTHENTICATED_USERS_ENABLED</x-block>: If the EnvBar should be displayed only for authenticated users.</li>
                <li><x-block>ENVBAR_FOR_AUTHENTICATED_USERS_GUARD</x-block>: The default guard to be used for authenticated users.</li>
                <li><x-block>ENVBAR_ON_MOBILE</x-block>: If the EnvBar should be displayed on mobile.</li>
                <li><x-block>ENVBAR_PROVIDER</x-block>: The provider to be used for fetching the last release. Allowed: github, bitbucket, envoyer.</li>
                <li><x-block>ENVBAR_GITHUB_TOKEN</x-block>: GitHub token to be used for fetching the last release.</li>
                <li><x-block>ENVBAR_GITHUB_REPOSITORY</x-block>: GitHub repository to be used for fetching the last release.</li>
                <li><x-block>ENVBAR_GITHUB_DAYS_FOR_CACHE</x-block>: The time in days to cache the last GitHub release.</li>
                <li><x-block>ENVBAR_BITBUCKET_TOKEN</x-block>: BitBucket token to be used for fetching the last release.</li>
                <li><x-block>ENVBAR_BITBUCKET_REPOSITORY</x-block>: BitBucket repository to be used for fetching the last release.</li>
                <li><x-block>ENVBAR_BITBUCKET_DAYS_FOR_CACHE</x-block>: The time in days to cache the last release.</li>
                <li><x-block>ENVBAR_ENVOYER_TOKEN</x-block>: Envoyer token to be used for fetching the last release.</li>
                <li><x-block>ENVBAR_ENVOYER_PROJECT_ID</x-block>: Envoyer project id to be used for fetching the last release.</li>
                <li><x-block>ENVBAR_ENVOYER_DAYS_FOR_CACHE</x-block>: The time in days to cache the last release.</li>
            </ul>
        </div>
    </x-section>
    <x-section title="Production Environment" disable-copy>
        <div class="space-y-4">
            <p>
                By default, EnvBar does not work in the production environment. This is because it is important to read
                this documentation in its entirety before using it in production. Therefore, to activate EnvBar in production
                you must:
            </p>
            <ul class="list-decimal list-inside">
                <li>Enable the <x-block>production</x-block> environment in the configuration file.</li>
                <li>Set the <x-block>ENVBAR_FOR_AUTHENTICATED_USERS_ENABLED</x-block> environment variable as <x-block>true</x-block>.</li>
                <li>Optionally, set <x-block>ENVBAR_FOR_AUTHENTICATED_USERS_GUARD</x-block> auth guard. Default is <x-block>web</x-block>.</li>
                <li class="font-bold">Optionally, create a Laravel Gate to control which users will see the EnvBar.</li>
            </ul>
            <p>
                As mentioned above, you can create a Laravel Gate to control which users will see the EnvBar in production.
                <a href="https://laravel.com/docs/11.x/horizon#dashboard-authorization" class="underline" target="_blank">The process is similar to what is done for Horizon</a>,
                however the gate name should be <x-block>envbar::view</x-block>:
            </p>
            <x-code :contents="$gate" disable-copy />
        </div>
    </x-section>
    <x-section title="Configure Color Scheme" disable-copy>
        <div class="space-y-4">
            <p>
                You can customize the color scheme for each environment in the configuration file. The default value will be similar to the following:
            </p>
            <x-code :contents="$colors" disable-copy />
            <p>
                All colors are based on the TailwindCSS color scheme, and <b>we strongly suggest to use <x-block>production</x-block> as <x-block>red</x-block> if you will activate it.</b>
            </p>
        </div>
    </x-section>
    <x-section title="Ignores" disable-copy>
        <div class="space-y-4">
            <p>
                You can control which pages the EnvBar will be ignored on via the configuration file:
            </p>
            <x-code :contents="$ignores" disable-copy />
            <p>
                Behind the scenes, this feature uses <x-block>Request::routeIs</x-block> to check the current route.
            </p>
        </div>
    </x-section>
    <x-section title="Commands" disable-copy>
        <div class="space-y-4">
            <p>
                To avoid multiple requests to the git provider, the latest release is cached for <x-block>ENVBAR_*_CACHED_FOR</x-block> day(s).
                If you want to clear the release cache, you can clear the entire application cache or run the following command to clear the
                release cache only, without affecting the other cache:
            </p>
            <x-code language="shell" :contents="$flush" />
            <p>
                If you are using <x-block>ENVBAR_CLOSABLE_TIMEOUT</x-block> and you closed the EnvBar, you can use the
                command below to show the EnvBar again without waiting for the final minutes timeout to run out:
            </p>
            <x-code language="shell" :contents="$show" />
        </div>
    </x-section>
    <x-section title="Helper Links" disable-copy>
        <div class="space-y-4">
            <p>
                The EnvBar has the ability to display links in a dropdown to serve as a collection of documents or development
                materials. You have two ways to define these links, either through the <x-block>ENVBAR_LINKS</x-block> environment variable or
                through the configuration file. In addition, links can have a label associated with a link or just links,
                where the label will be the link itself.
            </p>
            <ul class="list-inside list-decimal">
                <li>
                    Only link:
                    <x-code language="env" :contents="$links" />
                </li>
                <li>
                    Label and link:
                    <x-code language="env" :contents="$labels" />
                </li>
            </ul>
        </div>
    </x-section>
    <x-section title="Dedicated Repository" disable-copy>
        <a href="https://github.com/tallstackui/envbar" class="underline" target="_blank">EnvBar has its own dedicated repository.</a> For this
        reason, issues, pull requests should be submitted to this repository instead of the official TallStackUI repository. We don't have releases on there,
        only tags.
    </x-section>
</x-layout>
