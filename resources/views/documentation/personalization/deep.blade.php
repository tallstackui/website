<x-layout>
    <x-slot:title>
        Deep Personalization
    </x-slot:title>
    <x-slot:description>
        The deep personalization. Deep way to personalize all TallStackUi components.
    </x-slot:description>
    <x-section>
        <p class="text-justify">
            The deep personalization is a way to customize components more deeply by <b class="underline">overriding the component's original class.</b>
            This form of personalization requires more work and more technical knowledge. <b class="underline">We strongly suggest that you prefer
            soft personalization</b>, which does not require as much technical knowledge from you.
        </p>
    </x-section>
    <x-section title="Publish Configuration File">
        <p class="text-justify">
            To start deep personalization you must publish the TallStackUi configuration file.
            <a class="underline" href="{{ route('documentation.configuration') }}">Click here to visit the documentation.</a>
        </p>
    </x-section>
    <x-section title="Overriding Component Class">
        <p class="text-justify">
            As deep personalization consists of having absolute control over the component, <b class="underline">the idea behind
            this form of personalization is to overwrite the original TallStackUi component</b>, which is why more
            technical knowledge is necessary. Let's look at an example:
        </p>
        <p class="mt-2">1. Create a Blade component:</p>
        <x-code language="shell" :contents="$command"/>
        <p>2. Edit the TallStackUi configuration file pointing the original component class to your component:</p>
        <x-code language="php" :contents="$override"/>
        <p>3. In your component, extends the original TallStackUi component:</p>
        <x-code language="php" :contents="$extends"/>
        <p>4. In your component, override the <x-block>customization</x-block> method:</p>
        <x-code language="php" :contents="$customization"/>
        <p class="mt-2 text-justify">
            Every customizable component has a method called <x-block>customization</x-block>, which is where the
            classes come from. <u>This method must return an array with the name of the customizable blocks and
            their respective values which must be the CSS classes to be applied.</u> To learn about customizable blocks,
            visit the documentation for the component you are customizing.
        </p>
    </x-section>
    <x-section title="Publish Blade Views">
        <p class="text-justify">
            You can also edit the Blade files of the TallStackUi components. Use this command to publish the files:
        </p>
        <x-code language="shell" :contents="$views"/>
    </x-section>
    <x-section title="Tracing TailwindCSS Classes">
        <p class="text-justify">
            If you really want to personalize your components, make sure you track your component classes
            so that TailwindCSS generates all the classes that come out of the component files. Your
            <x-block>tailwindcss.config.js</x-block> needs to receive the following content:
        </p>
        <x-code language="js" :contents="$tailwindcss"/>
    </x-section>
</x-layout>
