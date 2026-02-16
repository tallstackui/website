@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content>
    <x-slot:title>
        Banner
    </x-slot:title>
    <x-slot:description>
        Banner component.
    </x-slot:description>
    <x-slot:customization>
        <livewire:customization :$customization component="Banner" />
    </x-slot:customization>
    <x-section title="Concept" anchor="static-concept" disable-copy>
        The banner component is a component intended to display text at the top of the page. It has two usage approaches: static usage
        to display fixed or random messages or Livewire integration to display messages that comes from the backend to the frontend.
        An example of the banner component is the banner at the top of the documentation.
    </x-section>
    <x-section title="Usage" anchor="static-usage" disable-copy>
        <div class="space-y-4">
            <p>To use the component you must add it to your application layout, within the <x-block>body</x-block> tag:</p>
            <x-code language="blade" :contents="$introduction" disable-copy />
        </div>
    </x-section>
    <x-section title="Messages" anchor="static-messages" disable-copy>
        <div class="space-y-4">
            All you need to do is to set the <x-block>text</x-block> attribute with the message you want to display.
            <x-code language="blade" :contents="$text" disable-copy />
            <p>
                You can also set random messages to be displayed:
            </p>
            <x-code language="blade" :contents="$alternative" disable-copy />
        </div>
    </x-section>
    <x-section title="Left Slot" anchor="static-left-slot" disable-copy>
        <x-code language="blade" :contents="$slot" disable-copy />
    </x-section>
    <x-section title="Close Option" anchor="static-close-option" disable-copy>
        <x-code language="blade" :contents="$close" disable-copy />
    </x-section>
    <x-section title="Animations" anchor="static-animations" disable-copy>
        <x-code language="blade" :contents="$animated" disable-copy />
    </x-section>
    <x-section title="Date Limit" anchor="static-date-limit" description="An option to control the final date to display the banner." disable-copy>
        <x-code language="blade" :contents="$dates" disable-copy />
    </x-section>
    <x-section title="Size Variations" anchor="static-size-variations" disable-copy>
        <x-code language="blade" :contents="$sizes" disable-copy />
    </x-section>
    <x-section title="Color Variations & Light Option" anchor="static-color-variations-light-option" disable-copy>
        <x-code language="blade" :contents="$colors" disable-copy />
    </x-section>
    <x-section title="Dispatching via Controllers" new anchor="static-dispatching-via-controllers" disable-copy>
        <x-code :contents="$controllers" disable-copy />
    </x-section>
    <x-separator text="Livewire Integration" />
    <x-section title="Concept" anchor="livewire-integration-concept" disable-copy>
        <div class="space-y-4">
            <p>
                One of the benefits of the banner component is that it can be integrated with Livewire to send messages from the backend to the frontend -
                similar to the concept of using things like Toast or Dialog. When choosing to use the banner in this way, the only configurable attribute
                is the <x-block>size</x-block>, since all other things will be configured through the Livewire integration. Preparing the component is simple,
                just define the <x-block>wire</x-block> attribute in the component so that TallStackUI identifies the usage format integrated with Livewire:
            </p>
            <x-code language="blade" :contents="$livewire" disable-copy />
        </div>
    </x-section>
    <x-section title="Usage" anchor="livewire-integration-usage" disable-copy>
        <ul class="list-decimal list-inside">
            <li>
                Use the Interactions trait in your Livewire component.
                <x-code language="php" :contents="$trait" disable-copy/>
            </li>
            <li>
                Dispatch the Banner from a method.
                <x-code language="php" :contents="$dispatch" disable-copy/>
            </li>
        </ul>
        <x-warning text="This is an example. You can not dispatch all at the same time." />
    </x-section>
    <x-section title="Available Options" anchor="livewire-integration-available-options" disable-copy>
        <x-code language="php" :contents="$options" disable-copy/>
    </x-section>
    <x-section title="Example" anchor="livewire-integration-example">
        <x-preview :contents="$example">
            <livewire:documentation.interactions.banner.examples />
        </x-preview>
    </x-section>
    <x-section title="Display After Redirects" anchor="livewire-integration-display-after-redirects">
        <div class="space-y-4">
            <p>
                When using <x-block>flash()</x-block> method, the banner will not be displayed in the current
                request, but yes stored temporarily in the session and displayed in the next request when you
                redirect to another page.
            </p>
            <x-code :contents="$flash"/>
        </div>
    </x-section>
</x-layout>
