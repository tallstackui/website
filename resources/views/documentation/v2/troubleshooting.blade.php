@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content>
    <x-slot:title>
        Troubleshooting
    </x-slot:title>
    <x-section>
        This page is dedicated to guide you in solving some of the most known problems that can occur when using TallStackUI.
    </x-section>
    <x-section title="Non-existent Component" disable-copy>
        Whenever you update TallStackUI, check whether there have been changes to the <x-block>config/tallstackui.php</x-block>
        file. As this file can be published for your application, if a new component is added in a new version of TallStackUI, this
        file needs to be updated with the addition of the new component.
    </x-section>
    <x-section title="Losing Component Attributes" disable-copy>
        <div class="space-y-4">
            <p>
                If you are using TallStackUI on a version prior to Laravel 10.35, you will face an issue related to component attributes.
                This is due to an issue in Laravel below version 10.35 which means that when passing attributes to a component that has
                child components like input, buttons, badge, etc., the attributes are lost between the parent component and the child
                component. To fix this issue, ensure that your Laravel version is above 10.35.
            </p>
            <x-code language="blade" :contents="$laravel1035Bug" disable-copy />
        </div>
    </x-section>
    <x-section title="JS & CSS, Assets Missing" disable-copy>
        <div class="space-y-4">
            <p>
                In the previous version of the TallStackUI (1.0) several devs reported an issue involving JS and CSS assets when deploying their application using TallStackUI
                to production. While it appeared to be something involving the web server, there was no known reason for the issue, nor was there a correct way
                to reproduce it. For this reason, in version 2.0 of TallStackUI, an asset fallback feature was introduced, configured via the <x-block>TALLSTACKUI_ASSETS_FALLBACK</x-block>
                environment variable, which is enabled by default in version 2.0.
            </p>
            <p>Behind the scenes, this is the logic related to asset fallback:</p>
            <ul class="list-decimal list-inside">
                <li>Using <x-block>tallstackui:script</x-block> - or any TallStackUI Blade directives, prints the assets source - JS or CSS.</li>
                <li>If the desired asset is not found, TallStackUI will use the found asset, be it JS or CSS.</li>
            </ul>
            <p class="font-bold">Do not disable this unless you are sure about what you are doing.</p>
        </div>
    </x-section>
</x-layout>
