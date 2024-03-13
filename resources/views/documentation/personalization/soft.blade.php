@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout>
    <x-slot:title>
        Soft Personalization
    </x-slot:title>
    <x-slot:description>
        The soft personalization.
    </x-slot:description>
    <x-section title="Concept" disable-copy>
        <p class="mb-4">
            <u>Soft personalization consists of personalize components at run time</u>, through a service provider, such as <x-block>AppServiceProvider</x-block>.
            The idea behind soft personalization is to tap into personalizable blocks of each component. Even if you are just starting
            to work with Laravel and Livewire, with a little attention to the documents below you will be able to customize the components
            using this concept.
        </p>
    </x-section>
    <x-section title="Example of Component Structure" disable-copy>
        <div class="mb-4 inline-flex items-center gap-1">
            <p>
                Example of the <a class="underline" href="{{ route('documentation.ui.avatar') }}">Avatar</a> component classes
                <x-outdated-contente-tooltip />
            </p>
        </div>
        <x-code language="php" :contents="$avatar" disable-copy/>
        <p class="mt-2">
            All component classes are divided into class blocks applicable to their appropriate required locations in the
            Blade file associated with the component. TallStackUI was designed with soft personalization in mind: an easy way
            to personalize components, so even if the developer is a beginner, he doesn't need to have difficulty personalizing the components.
        </p>
    </x-section>
    <x-section title="Start the Personalization" disable-copy>
        <p class="mb-4">
            Let's take a look at an example:
        </p>
        <x-code language="php" :contents="$example" disable-copy/>
        <p class="mt-2">
            In this example we are <u>touching and replacing all the classes</u> in the <x-block>input.class.base</x-block>
            block of the <x-block>input</x-block> component with the content: <x-block>w-full rounded-full</x-block>.
            This means that every input component displayed on the application pages will have these classes, instead of the
            original component classes.
        </p>
    </x-section>
    <x-section title="Fluent Personalization" disable-copy>
        <p class="mb-4">
            Just like <a href="https://pestphp.com" target="_blank" class="underline">Pest</a>, TallStackUI offers a concept of
            fluency when using the <x-block>and</x-block> like a property or method:
        </p>
        <x-code language="php" :contents="$fluent" disable-copy/>
        <p class="">
            The idea behind this approach is to personalize more than one component at the same time.
        </p>
    </x-section>
    <x-section title="Multiple Personalization Ways" disable-copy>
        <p class="mb-4">
            You can personalize one block at a time or all at once:
        </p>
        <x-code language="php" :contents="$usages" disable-copy/>
    </x-section>
    <x-section title="Invokable Class" disable-copy>
        <p class="mb-4">
            You may have noticed that in the example above we used the <x-block>InputPersonalization</x-block> class.
            This is a simple invokable class, because TallStackUI also allows you to make your personalization into classes.
            This approach is ideal if you are someone who prioritizes organization above all else. Let's take a look at an example:
        </p>
        <p class="mt-4">1. Preparing:</p>
        <x-code language="php" :contents="$invokableExample" disable-copy/>
        <p class="mt-2">2. Personalizing:</p>
        <x-code language="php" :contents="$invokableClass" disable-copy/>
    </x-section>
    <x-section title="Component Data Parameters" disable-copy>
        <p class="mb-4">
            You may have noticed that the example above there is a variable called <x-block>$data</x-block>. This variable is an array
            containing all the component's properties, <u>including the values passed when you used the component somewhere in your application.</u>
        </p>
        <p class="mt-4">Using the <x-block>input</x-block> like this:</p>
        <x-code language="blade" :contents="$usingComponent"/>
        <p class="mt-2">The <x-block>$data</x-block> will be something like:</p>
        <x-code language="php" :contents="$data" disable-copy/>
        <p class="">
            You can use this to interact with your personalization.
        </p>
    </x-section>
    <x-section title="Interacting with Default Classes" disable-copy>
        <p class="mb-4">
            Although all the examples above are valid, they overwrite the original block classes by defining the second parameter
            of the <x-block>block</x-block> method, this is a way of doing a <u>complete replacement of the original component classes
            by the blocks</u>, an expected behavior when the soft personalization was created. Luckily we have an easy way to interact
            with the original classes by touching their content but preserving everything else. Let's take a look at an example:
            <x-code :contents="$replace" disable-copy/>
            <p class="mt-2">
                Note that in the example above <u>we omitted the second parameter of the <x-block>block</x-block> method</u>,
                this way we can access four useful methods that allow us to touch the component's original
                classes in an easy way in order to make modifications while maintaining the rest of the original content.
            </p>
            <p class="mt-4">All the four methods:</p>
            <x-code :contents="$usefulMethods" disable-copy/>
            <p class="my-4">
                Now that these methods have been introduced, let's imagine that you want to
                transform all your inputs into a fully round style to follow the look of your
                application, so all the work (🥵) you need to do is:
            </p>
            <x-code :contents="$realExample" disable-copy/>
            <p class="mt-4">
                Without spending a lot of time, without a lot of effort, without a lot of technical
                knowledge you have just achieved your goal in an extremely quick, expressive and direct way.
                Isn't that amazing? 😎
            </p>
        </p>
    </x-section>
    <x-section title="Scoped Personalization" disable-copy>
        <p>
            Although soft personalization is powerful and easy to use, there is one problem: all soft
            personalization is applied to all components, and it is not possible to assign specific
            personalization to a component only once. Therefore, <u>starting from version 1.9.0 you can
            set the scoped personalization.</u> Just as in VueJS where we have CSS scoped, CSS applied only
            to the component to be defined, TallStackUI offers the <x-block>personalize</x-block> attribute in all components
            allowing interaction with the classes so that the personalization is applied only to the
            component that defines the personalization. Let's take a look at an example:
        </p>
        <x-code language="blade" :contents="$scopedPersonalization" disable-copy/>
        <p class="mb-2">Considering this code above, then this will be the result:</p>
        <div class="space-y-4">
            <x-alert>This is a normal Alert component</x-alert>

            <x-alert :personalize="[
                'wrapper' => [
                    'replace' => [
                        'rounded-lg' => 'rounded-full',
                    ],
                ]
            ]">
                This is a fully round Alert component
            </x-alert>
        </div>
        <p class="mt-2">
            Just like soft personalization, scoped personalization needs to target a
            specific block that will receive the personalization. Let's take a look at other
            examples and possibilities:
        </p>
        <x-code language="blade" :contents="$scopedPersonalizationExamples" disable-copy/>
        <x-warning class="mt-4">
            Unlike soft personalization, scoped personalization will not throw an exception
            when the block to be personalized does not exist. Therefore, if there is an error
            in the block name or wrong block name, the application will not generate a visual
            error for the end user, the personalization will just not be applied.
        </x-warning>
    </x-section>
    <x-section title="Tracing TailwindCSS Classes" disable-copy>
        <p class="mb-4">
            If you are personalizing your components, there is something you should know. As classes are TailwindCSS
            classes you need to ensure that TailwindCSS watches the files from which the classes you defined come,
            so personalization will take effect. To do this, you must edit your <x-block>tailwind.config.js</x-block>
            file inserting this content:
        </p>
        <x-code language="js" :contents="$tailwindcss" disable-copy/>
    </x-section>
    <x-section title="Personalizable Blocks" disable-copy>
        <p class="mb-4">
            All component documentation mentions their respective blocks in a button at the top of each page.
        </p>
    </x-section>
</x-layout>
