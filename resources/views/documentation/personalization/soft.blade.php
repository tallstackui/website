<x-layout>
    <x-slot:title>
        Soft Personalization
    </x-slot:title>
    <x-slot:description>
        The soft personalization. Easy way to personalize all TallStackUi components.
    </x-slot:description>
    <x-section title="Concept">
        <p class="text-justify">
            <b class="underline">Soft personalization consists of customizing components at run time</b>, through a service provider, such as <x-block>AppServiceProvider</x-block>.
            The idea behind soft personalization is to tap into customizable blocks of each component. The classes of each TallStackUi
            component are divided into blocks that allow the classes to be overwritten at run time. Let's take a look at a simple example.
        </p>
        <x-code language="php" :contents="$example"/>
        <p class="mt-2 text-justify">
            In this example we are touching and replacing all the classes in the <x-block>base</x-block>
            block of the <x-block>form.input</x-block> component with the content <x-block>w-full rounded-full</x-block>.
            This means that every input component displayed on the application pages will have these classes, instead of the original component classes.
        </p>
    </x-section>
    <x-section title="Fluent Personalization">
        <p class="text-justify">
            We've introduced a fluency style in TallStackUi soft personalization. Let's take a look at a simple example:
        </p>
        <x-code language="php" :contents="$pest"/>
        <p class="mt-2 text-justify">
            With that, we are able to customize two or more components at the same time, thanks to the concept of fluency that we see in <a href="https://pestphp.com" target="_blank" class="underline">Pest</a>.
        </p>
    </x-section>
    <x-section title="Multiple Personalization Ways">
        <p class="text-justify">
            You can customize one block at a time or all at once. Let's take a look at an example:
        </p>
        <x-code language="php" :contents="$ways"/>
    </x-section>
    <x-section title="Invokable Class">
        <p class="text-justify">
            You can also send personalization to be done in a callable class. Let's take a look at a example:
        </p>
        <x-code language="php" :contents="$invokableExample"/>
        <p class="mt-2">And then:</p>
        <x-code language="php" :contents="$invokableClass"/>
    </x-section>
    <x-section title="Component Parameters">
        <p class="text-justify">
            In the example above there is a variable called <x-block>$data</x-block>. This variable is an array containing
            all the component's properties, <b class="underline">including the values passed when you used the component.</b> Let's take a look at an example:
        </p>
        <p class="mt-4">Using the <x-block>form.input</x-block> like this:</p>
        <x-code language="blade" :contents="$usingComponent"/>
        <p class="mt-2">The <x-block>$data</x-block> will be:</p>
        <x-code language="php" :contents="$data"/>
    </x-section>
    <x-section title="Component Blocks">
        <p class="text-justify">
            All component documentation mentions their respective personalized blocks in a pink button at the top of the page.
        </p>
    </x-section>
    <x-section title="Tracing TailwindCSS Classes">
        <p class="text-justify">
            If you really want to personalize your components, make sure you track your component classes
            so that TailwindCSS generates all the classes that come out of the component files. Your
            <x-block>tailwindcss.config.js</x-block> needs to receive the following content:
        </p>
        <x-code language="js" :contents="$tailwindcss"/>
    </x-section>
    <x-section title="Real Example">
        <p class="text-justify">
            Let's assume that you only use the <x-block>sm</x-block> button variation in your application,
            but you are noticing the small texts and therefore want to increase the text without modify the
            other features of the TallStackUi buttons. If this is the case, see an example of how to personalize
            the button component to achieve this result:
        </p>
        <x-code :contents="$realExample"/>
        <p class="text-justify">
            As difficult as it may seem, this is just the original content of customizing the buttons with a
            change in text size for the <x-block>sm</x-block> variation. Thanks to the fact that TallStackUi shares properties through
            the <x-block>$data</x-block> variable we can do this kind of thing. Did you notice that in the example above we executed
            a function through the array? As confusing as it may seem, this is common and acceptable. We are just executing a closure saved at an index of the array.
        </p>
        <p class="mt-4 font-semibold underline">With that, you are not replacing the original component content.</p>
    </x-section>
    <x-section title="Preserve the Original Content">
        <p class="text-justify">
            One of the precautions you should take with soft personalization is to customize what you want,
            but <b>preserve the original content classes.</b> Without preserving the original classes after
            touching some point in the personalization, the component may be completely modified, leading to
            an unpleasant appearance. For example, suppose you want to make a component square instead of
            originally round, for this we need to remove the <x-block>rounded-md</x-block>, so <b>the correct thing to do is
            to return the entire component's original class WITHOUT</b> the <x-block>rounded-md</x-block>.
        </p>
    </x-section>
    <x-section title="Special Tips">
        <ul class="list-inside list-decimal">
            <li>Have doubts about the real content of a block? Take a look at the original content of the component, <a href="https://github.com/tallstackui/tallstackui/blob/main/src/View/Components/Button/Index.php#L50" class="underline" target="_blank">for example this.</a></li>
            <li>Start your personalization by debugging the <x-block>$data</x-block> to meet all the available properties.</li>
        </ul>
    </x-section>
</x-layout>
