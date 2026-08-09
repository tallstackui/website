@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content ai="banner">
    <x-slot:title>Banner</x-slot>
    <x-slot:description>Banner component.</x-slot>
    <x-slot:customization>
        <livewire:customization :$customization component="Banner" />
    </x-slot>
    <x-section title="Usage" anchor="static-usage">
        <div class="space-y-4">
            <p>
                To use the component you must add it to your application layout,
                within the
                <x-block>body</x-block>
                tag:
            </p>
            <x-preview
                language="blade"
                :contents="$introduction"
                frame="ui/banner/introduction"
                :height="240"
            />
        </div>
    </x-section>
    <x-section title="Messages" anchor="static-messages">
        <div class="space-y-4">
            All you need to do is to set the
            <x-block>text</x-block>
            attribute with the message you want to display.
            <x-preview
                language="blade"
                :contents="$text"
                frame="ui/banner/text"
                :height="220"
            />
            <p>You can also set random messages to be displayed:</p>
            <x-preview
                language="blade"
                :contents="$alternative"
                frame="ui/banner/alternative"
                :height="220"
            />
        </div>
    </x-section>
    <x-section title="Left Slot" anchor="static-left-slot">
        <x-preview
            language="blade"
            :contents="$slot"
            frame="ui/banner/slot"
            :height="220"
        />
    </x-section>
    <x-section title="Close Option" anchor="static-close-option">
        <x-preview
            language="blade"
            :contents="$close"
            frame="ui/banner/close"
            :height="220"
        />
    </x-section>
    <x-section title="Animations" anchor="static-animations">
        <x-preview
            language="blade"
            :contents="$animated"
            frame="ui/banner/animated"
            :height="280"
        />
    </x-section>
    <x-section title="Rotate" anchor="static-rotate">
        <div class="space-y-4">
            <p>
                <x-block>rotate</x-block>
                accepts
                <x-block>true</x-block>
                (or just the bare attribute) for the default speed, or one of
                <x-block>slow</x-block>
                ,
                <x-block>normal</x-block>
                ,
                <x-block>fast</x-block>
                .
            </p>
            <x-preview
                language="blade"
                :contents="$rotate"
                frame="ui/banner/rotate"
                :height="240"
            />
            <p>
                When
                <x-block>text</x-block>
                is an array, all items are joined into a single rolling string
                using the
                <x-block>separator</x-block>
                prop:
            </p>
            <x-code
                language="blade"
                :contents="$rotateSeparator"
                disable-copy
            />
        </div>
    </x-section>
    <x-section
        title="Date Limit"
        anchor="static-date-limit"
        description="An option to control the final date to display the banner."
    >
        <x-preview
            language="blade"
            :contents="$dates"
            frame="ui/banner/dates"
            :height="240"
        />
    </x-section>
    <x-section title="Size Variations" anchor="static-size-variations">
        <x-preview
            language="blade"
            :contents="$sizes"
            frame="ui/banner/sizes"
            :height="220"
        />
    </x-section>
    <x-section
        title="Color Variations & Light Option"
        anchor="static-color-variations-light-option"
    >
        <x-preview
            language="blade"
            :contents="$colors"
            frame="ui/banner/colors"
            :height="220"
        />
    </x-section>
    <x-section
        title="Dispatching via Controllers"
        new
        anchor="static-dispatching-via-controllers"
        disable-copy
    >
        <x-code :contents="$controllers" disable-copy />
    </x-section>
    <x-separator text="Livewire Integration" />
    <x-section
        title="Concept"
        anchor="livewire-integration-concept"
        disable-copy
    >
        <div class="space-y-4">
            <p>
                One of the benefits of the banner component is that it can be
                integrated with Livewire to send messages from the backend to
                the frontend - similar to the concept of using things like Toast
                or Dialog. When choosing to use the banner in this way, the only
                configurable attribute is the
                <x-block>size</x-block>
                , since all other things will be configured through the Livewire
                integration. Preparing the component is simple, just define the
                <x-block>wire</x-block>
                attribute in the component so that TallStackUI identifies the
                usage format integrated with Livewire:
            </p>
            <x-code language="blade" :contents="$livewire" disable-copy />
        </div>
    </x-section>
    <x-section title="Usage" anchor="livewire-integration-usage" disable-copy>
        <ul class="list-inside list-decimal">
            <li>
                Use the Interactions trait in your Livewire component.
                <x-code language="php" :contents="$trait" disable-copy />
            </li>
            <li>
                Dispatch the Banner from a method.
                <x-code language="php" :contents="$dispatch" disable-copy />
            </li>
        </ul>
        <x-warning
            text="This is an example. You can not dispatch all at the same time."
        />
    </x-section>
    <x-section
        title="Available Options"
        anchor="livewire-integration-available-options"
        disable-copy
    >
        <x-code language="php" :contents="$options" disable-copy />
    </x-section>
    <x-section title="Example" anchor="livewire-integration-example">
        <x-preview :contents="$example">
            <livewire:documentation.interactions.banner.examples />
        </x-preview>
    </x-section>
    <x-section
        title="Display After Redirects"
        anchor="livewire-integration-display-after-redirects"
    >
        <div class="space-y-4">
            <p>
                When using
                <x-block>flash()</x-block>
                method, the banner will not be displayed in the current request,
                but yes stored temporarily in the session and displayed in the
                next request when you redirect to another page.
            </p>
            <x-code :contents="$flash" />
        </div>
    </x-section>
</x-layout>
