<x-layout>
    <x-slot:title>
        Debug Mode
    </x-slot:title>
    <x-slot:description>
        Native debug mode utility.
    </x-slot:description>
    <x-section title="Concept" :copy="false">
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
        <p class="mt-4">... Could you tell me exactly what attributes we are using on this WITHOUT having to go to the editor?</p>
        <p class="mt-4">
            Debug mode solves this problem by providing a complete overview of the state of all
            components on the page, regardless of where they are or whether they were called
            directly or from within other components such as parent and child.
        </p>
    </x-section>
    <x-section title="Example" :copy="false">
        <p>
            Now that you understand the concept, see debug mode in action:
        </p>
        <livewire:documentation.helpers.debug />
        <p class="mt-4">
            Did you notice that there are some little icons next to the button and the
            icon within the button? <u>Put the mouse over them!</u> This is the debug of the
            button component and also the component inside it, the icon. Note that all
            properties, including custom attributes, those that are not component
            properties, are displayed in a list for you.
        </p>
    </x-section>
    <x-section title="Activate Debug Mode" :copy="false">
        <p>
            For a quick and easy activation, you can just create a new env variable in your <x-block>.env</x-block> file:
        </p>
        <x-code language="env" :contents="$env" :copy="false" />
    </x-section>
    <x-section title="Available Configurations" :copy="false">
        <p>
            If you want to set the status other than through the <x-block>.env</x-block> file,
            or control which environments debug will be available in, then
            you will need to publish the TallStackUI configuration file
            and make adjustments to the debug configuration. <a href="{{ route('documentation.configuration') }}" class="underline" target="_blank">
            Click here to know how to publish the configuration file.</a>
        </p>
        <x-code :contents="$configuration" :copy="false" />
    </x-section>
    <x-section title="Cautions" :copy="false">
        <ul class="list-decimal list-inside">
            <li><u>We recommend that you only use debug mode in dev. environment.</u></li>
            <li>Some alerts may be seen in the browser console when debug mode is activated.</li>
        </ul>
    </x-section>
    <x-slot:navigation>
        <x-slot:back>
            <x-layout.footer-navigation :href="route('documentation.personalization.color')" text="Colors" back />
        </x-slot:back>
        <x-slot:next>
            <x-layout.footer-navigation :href="route('documentation.contribution')" text="Contribution Guide" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
