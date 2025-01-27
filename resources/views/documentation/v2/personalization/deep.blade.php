@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout>
    <x-slot:title>
        Deep Personalization
    </x-slot:title>
    <x-slot:description>
        The deep personalization.
    </x-slot:description>
    <x-section title="Concept" disable-copy>
        <p>
            Deep customization is a way to customize components more deeply by overriding the original component
            class. This form of customization requires more work and technical knowledge, and can create potential
            upgrade roadblocks since you will have to overwrite component classes and publish TallStackUI Blades files.
            <b>We strongly recommend that you opt for soft customization, which does not require as much technical knowledge from you.</b>
        </p>
    </x-section>
    <x-section title="Publishing Configuration File" disable-copy>
        <p>
            <a class="underline" href="{{ route('documentation.v2.configuration') }}" wire:navigate>To start deep personalization you must publish the TallStackUI configuration file.</a>
        </p>
    </x-section>
    <x-section title="Override Component Class" disable-copy>
        <div class="space-y-4">
            <p>
                As deep personalization consists of having absolute control over the component, the idea behind
                this form of personalization is to overwrite the original TallStackUI component class, which is
                why more technical knowledge is necessary. Let's take look at an example:
            </p>
            <p class="mt-2">1. Create a Blade component:</p>
            <x-code language="shell" :contents="$command"/>
            <p>2. Edit the TallStackUI configuration file by replacing the original component class with your component:</p>
            <x-code language="php" :contents="$override" disable-copy/>
            <p>3. In your component, extends the original TallStackUI component class:</p>
            <x-code language="php" :contents="$extends" disable-copy/>
            <p>4. In your component, override the <x-block>personalization</x-block> method:</p>
            <x-code language="php" :contents="$customization" disable-copy/>
            <p class="my-2">
                Every component that can be personalized has a method called <x-block>personalization</x-block>, which is where the
                classes come from. This method must return an array with the name of the personalize blocks and
                their respective values which must be the TailwindCSS classes to be applied. To learn about personalize blocks,
                visit the documentation for the component you are personalizing.
            </p>
            <x-warning>
                Even if you prefer to use deep personalization,
                <a href="{{ route('documentation.v2.personalization.soft') }}" wire:navigate class="underline">soft personalization</a> can still be applied to components.
            </x-warning>
        </div>
    </x-section>
    <x-section title="Tracing TailwindCSS Classes" disable-copy>
        <div class="space-y-4">
            <p class="mb-4">
                Just like soft personalization, if you are using deep personalization to personalize components that have
                replaced the original component classes, you must have TailwindCSS be able to track and build the CSS classes
                defined in your components' PHP files. Edit your <x-block>tailwind.config.js</x-block> file with the following content:
            </p>
            <x-code language="js" :contents="$tailwindcss" disable-copy />
        </div>
    </x-section>
    <x-section title="Publish Blade Files" disable-copy>
        <div class="space-y-4">
            <p>
                You can also edit the Blade files of TallStackUI components by publishing them to your application level.
                This will allow you to customize the HTML content of the components. Use this command to deploy the Blade files:
            </p>
            <x-code language="shell" :contents="$views" />
            <p>
                While this means you have the freedom to edit whatever you want - adding or removing divs, p tags, h1 tags, etc.,
                you need to keep in mind that any updates you make that make changes to the HTML of the components will require
                you to republish the Blade files and add your own personalizations.
            </p>
        </div>
    </x-section>
</x-layout>
