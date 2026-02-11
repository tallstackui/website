@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content>
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
            <u>We strongly recommend that you opt for soft customization, which does not require as much technical knowledge from you.</u>
        </p>
    </x-section>
    <x-section title="Publishing Configuration File" disable-copy>
        <p>
            <a class="underline" href="{{ route('documentation', ['v3', 'configuration']) }}" wire:navigate>To start deep personalization you must publish the TallStackUI configuration file.</a>
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
                <a href="{{ route('documentation', ['v3', 'personalization', 'soft']) }}" wire:navigate class="underline">soft personalization</a> can still be applied to components.
            </x-warning>
        </div>
    </x-section>
    <x-section title="Tracing TailwindCSS Classes" disable-copy>
        <div class="space-y-4">
            @if (!$tailwindcss)
                <p class="mb-4">
                    Just like soft personalization, if you are using deep personalization to personalize components that have
                    replaced the original component classes, you must have TailwindCSS be able to track and build the CSS classes
                    defined in your components' PHP files. Edit your <x-block>tailwind.config.js</x-block> file by inserting the following content:
                </p>
                <x-code language="js" :contents="$tailwindcssV3" disable-copy />
            @else
                <p class="mb-4">
                    Just like soft personalization, if you are using deep personalization to personalize components that have
                    replaced the original component classes, you must have TailwindCSS be able to track and build the CSS classes
                    defined in your components' PHP files. Edit your <x-block>app.css</x-block> CSS file by inserting the following content:
                </p>
                <x-code language="js" :contents="$tailwindcssV4" />
            @endif
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
                you to republish the Blade files and add your own personalization.
            </p>
            <p>
                Also, when publishing Blade files you may notice some peculiar things, such as: 99% of the files only have one php block at the top of the file,
                or certain variables that may not seem defined anywhere, such as <x-block>$colors</x-block> and <x-block>$configurations</x-block> . This is a result of
                a new internal concept created in version 2.x to ensure that you can change anything in the Blade files without
                necessarily having to worry about maintaining possible logic coming from <x-block>php/endphp</x-block> blocks. <b>All you have to do
                is preserve the use of any existing variables - mentioned here, in their specific current locations.</b>
            </p>
        </div>
    </x-section>
</x-layout>
