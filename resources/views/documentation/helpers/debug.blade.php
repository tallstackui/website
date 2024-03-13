@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout>
    <x-slot:title>
        Debug Mode
        <x-slot:version>
            v1.5
        </x-slot:version>
    </x-slot:title>
    <x-slot:description>
        Native debug mode utility.
    </x-slot:description>
    <x-section title="Concept" disable-copy>
        <p>
            If you use TallStackUI you must suffer from a common problem among all developers,
            even those who do not use TallStackUI: to know the attributes of a component we
            need to go to our editor, look for the component, and thus see the attributes that
            were configured. This is a problem because we waste considerable time having to
            constantly switch between the browser and the code editor.
        </p>
        <p class="mt-4">
            Looking at the button below...
        </p>
        <div class="mt-4 flex justify-center">
            <x-button text="This is the TallStackUI" color="purple" icon="photo" position="right" using="custom" attributes="of laravel" />
        </div>
        <p class="mt-4">... Could you tell me exactly what attributes we are using on this?</p>
        <p class="mt-4">
            Debug mode solves this problem by providing a complete overview of the state of all
            components on the page, regardless of where they are or whether they were called
            directly or from within other components such as parent and child.
        </p>
    </x-section>
    <x-section title="Example" disable-copy>
        <p>
            Now that you understand the concept, see debug mode in action:
        </p>
        <livewire:documentation.helpers.debug />
        <p class="mt-4">
            <u>Did you notice that there are some little icons next to the button and the
            icon within the button? Put the mouse over them!</u> This is the debug of the
            button component and also the component inside it, the icon. Note that all
            properties, including custom attributes, those that are not component
            properties, are displayed in a list for you.
        </p>
    </x-section>
    <x-section title="Activate Debug Mode" disable-copy>
        <p>
            For a quick and easy activation, you can just create a new env variable in your <x-block>.env</x-block> file:
        </p>
        <x-code language="env" :contents="$env" disable-copy />
    </x-section>
    <x-section title="Available Configurations" disable-copy>
        <p>
            Debug mode has a settings section in the TallStackUI configuration file.
            Through this configuration, you can configure several things, such as ignore debug
            mode for specific components. <a href="{{ route('documentation.configuration') }}" class="underline" target="_blank">
            Click here to know how to publish the configuration file.</a>
        </p>
        <x-code :contents="$configuration" disable-copy />
    </x-section>
    <x-section title="Cautions" disable-copy>
        <ul class="list-decimal list-inside">
            <li><u>We recommend that you only use debug mode in dev. environments.</u></li>
            <li>Debug mode is skipped when running unit tests.</li>
            <li>The <x-block>slot mode</x-block> in debug tooltip indicates you are set the component content through slots.</li>
            <li>Only string-type attributes will be captured.</li>
            <li>Some alerts may be seen in the browser console when debug mode is activated.</li>
        </ul>
    </x-section>
</x-layout>
