@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout torchlight>
    <x-slot:title>
        Troubleshooting
    </x-slot:title>
    <x-section>
        <p>
            This page is dedicated to guide you in solving some of the most known problems that can occur when using TallStackUI.
        </p>
    </x-section>
    <x-section title="Non-existent Component">
        <p>
            Whenever you update TallStackUI, check whether there have been changes to the <x-block>config/tallstackui.php</x-block>
            file. As this file can be published for your application, if a new component is added in a new version of TallStackUI, this
            file needs to be updated with the addition of the new component.
        </p>
    </x-section>
    <x-section title="Losing Component Attributes" disable-copy>
        <div class="space-y-4">
            <p>
                If you are using TallStackUI <u>on a version lower than Laravel 10.35</u> you will face
                an issue related to component attributes. <b>This happens due to a bug in Laravel
                below version 10.35</b> that means that when passing attributes to a component that contains child
                components, such as input, buttons, badge, and others, they are not applied:
            </p>
            <x-code language="blade" :contents="$laravel1035Bug" disable-copy />
            <p class="underline decoration-red-500 decoration-4 underline-offset-4">
                To fix this issue, ensure your Laravel is updated to a version higher than 10.35.
            </p>
        </div>
    </x-section>
</x-layout>
