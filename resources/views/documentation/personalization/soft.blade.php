<x-layout>
    <x-slot:title>
        Soft Personalization
    </x-slot:title>
    <x-slot:description>
        The soft personalization. Easy way to personalize all TallStackUi components.
    </x-slot:description>
    <x-section title="Concept">
        <p class="text-justify">
            <u>Soft personalization consists of customizing components at run time</u>, through a service provider, such as <x-block>AppServiceProvider</x-block>.
            The idea behind soft personalization is to tap into personalizable blocks of each component. Let's take a look at an example:
        </p>
        <x-code language="php" :contents="$example"/>
        <p class="mt-2 text-justify">
            In this example we are touching and replacing all the classes in the <x-block>input.class</x-block>
            block of the <x-block>input</x-block> component with the content: <x-block>w-full rounded-full</x-block>.
            This means that every input component displayed on the application pages will have these classes, instead of the original component classes.
        </p>
    </x-section>
    <x-section title="Component Example">
        <div class="inline-flex items-center gap-1">
            <p class="text-justify">
                This is an example of the <a class="underline" href="{{ route('documentation.ui.avatar') }}">Avatar</a> component classes
                <x-outdated-contente-tooltip />
            </p>
        </div>
        <x-code language="php" :contents="$avatar"/>
        <p class="mt-2 text-justify">
            All component classes are divided into class blocks applicable to their appropriate required locations in the
            Blade file associated with the component. TallStackUi was designed with soft personalization in mind: an easy way
            to personalize components, so even if the developer is a beginner, he doesn't need to have difficulty personalizing the components.
        </p>
    </x-section>
    <x-section title="Fluent Personalization">
        <p class="text-justify">
            Just like <a href="https://pestphp.com" target="_blank" class="underline">Pest</a>, TallStackUi offers a concept of
            fluency when using the <x-block>and</x-block> like a property or method:
        </p>
        <x-code language="php" :contents="$fluent"/>
        <p class="text-justify">
            The idea behind this approach is to personalize more than one component at the same time.
        </p>
    </x-section>
    <x-section title="Multiple Personalization Usage">
        <p class="text-justify">
            You can personalize one block at a time or all at once:
        </p>
        <x-code language="php" :contents="$usages"/>
    </x-section>
    <x-section title="Invokable Class">
        <p class="text-justify">
            You may have noticed that in the example above we used the <x-block>InputPersonzaliation</x-block> class.
            This is a simple invokable class, because TallStackUi also allows you to make your personalization into classes.
            This approach is ideal if you are someone who prioritizes organization above all else. Let's take a look at an example:
        </p>
        <p class="mt-4">1. Preparing:</p>
        <x-code language="php" :contents="$invokableExample"/>
        <p class="mt-2">2. Personalizing:</p>
        <x-code language="php" :contents="$invokableClass"/>
    </x-section>
    <x-section title="Component Data Parameters">
        <p class="text-justify">
            You may have noticed that the example above there is a variable called <x-block>$data</x-block>. This variable is an array
            containing all the component's properties, <u>including the values passed when you used the component somewhere in your application.</u>
        </p>
        <p class="mt-4">Using the <x-block>input</x-block> like this:</p>
        <x-code language="blade" :contents="$usingComponent"/>
        <p class="mt-2">The <x-block>$data</x-block> will be this array:</p>
        <x-code language="php" :contents="$data"/>
        <p class="text-justify">
            You can use this to interact with your personalization.
        </p>
    </x-section>
    <x-section title="Component Blocks">
        <p class="text-justify">
            All component documentation mentions their respective blocks in a button at the top of the page.
        </p>
    </x-section>
    <x-non-personalized-thigs />
    <x-section title="Tracing TailwindCSS Classes">
        <p class="text-justify">
            If you are personalizing your components, there is something you should know. As classes are TailwindCSS
            classes you need to ensure that TailwindCSS watches the files from which the classes you defined come,
            so personalizations will take effect. To do this, you must edit your <x-block>tailwindcss.config.js</x-block>
            file inserting this content:
        </p>
        <x-code language="js" :contents="$tailwindcss"/>
    </x-section>
    <x-section title="Preserve the Original Content">
        <p class="text-justify">
            One of the precautions you should take with soft personalization is to personalize what you want,
            but <u>preserve the original content classes.</u> Without preserving the original classes after
            touching some point in the personalization, the component may be completely modified, leading to
            an unpleasant appearance.
        </p>
    </x-section>
</x-layout>
