@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content>
    <x-slot:title>
        Troubleshooting
    </x-slot:title>
    <x-section>
        <p>
            This page is dedicated to guide you in solving some of the most known problems that can occur when using TallStackUI.
        </p>
    </x-section>
    <x-section title="Non-existent Component" disable-copy>
        <p>
            Whenever you update TallStackUI, check whether there have been changes to the <x-block>config/tallstackui.php</x-block>
            file. As this file can be published for your application, if a new component is added in a new version of TallStackUI, this
            file needs to be updated with the addition of the new component.
        </p>
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
</x-layout>
