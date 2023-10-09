<x-layout :torchlight="false">
    <x-slot:title>
        Soft Personalization
    </x-slot:title>
    <x-slot:description>
        The soft personalization. Easy way to personalize all TallStackUi components.
    </x-slot:description>
    <x-section>
        <p class="text-justify">
            When we wrote this feature we thought about a single criterion: <i>"A way to customize components WITHOUT having to create
            hundreds of files that overwrite the original components."</i>, as many other libraries do. <b class="underline">Read the information carefully
            and do not skip steps to be able to use soft customization successfully.</b>
        </p>
    </x-section>
    <x-section title="Concept">
        <p class="text-justify">
            <b class="underline">Soft personalization consists of customizing components at run time</b>, through a service provider, such as <x-block>AppServiceProvider</x-block>.
            The idea behind soft customization is to tap into customizable blocks of each component. The classes of each TallStackUi
            component are divided into blocks that allow the classes to be overwritten at run time. Let's first look at a simple example.
        </p>
        <x-code language="php" :contents="$example"/>
        <p class="text-justify mt-2">
            In this example we are touching and replacing all the classes in the <x-block>base</x-block>
            block of the <x-block>form.input</x-block> component with the content <x-block>w-full rounded-full</x-block>.
            This means that every input component displayed on the application pages will have these classes, instead of the original component classes.
        </p>
    </x-section>
    <x-section title="Fluent Personalization">
        <p class="text-justify">
            We've introduced a fluency style in TallStackUi. Let's first look at a simple example:
        </p>
        <x-code language="php" :contents="$pest"/>
        <p class="text-justify mt-2">
            With that, we are able to customize two or more components at the same time, thanks to the concept of fluency that we see in <a href="https://pestphp.com" target="_blank" class="underline">Pest</a>.
        </p>
    </x-section>
    <x-section title="Multiple Personalization Ways">
        <p class="text-justify">
            You can customize one block at a time or all at once. Let's look at an example:
        </p>
        <x-code language="php" :contents="$ways"/>
    </x-section>
    <x-section title="Invokable Class">
        <p class="text-justify">
            You can also send customization to be done in a callable class. Let's look at a simple example:
        </p>
        <x-code language="php" :contents="$invokableExample"/>
        <p class="mt-2">And then:</p>
        <x-code language="php" :contents="$invokableClass"/>
    </x-section>
    <x-section title="Component Parameters">
        <p class="text-justify">
            In the example above there is a variable called <x-block>$data</x-block>. This variable is an array containing
            all the component's properties, <b class="underline">including the values passed when you used the component.</b> Let's look at an example:
        </p>
        <p class="mt-2">Using the <x-block>form.input</x-block> like this:</p>
        <x-code language="blade" :contents="$usingComponent"/>
        <p class="mt-2">The <x-block>$data</x-block> will be:</p>
        <x-code language="php" :contents="$data"/>
    </x-section>
    <x-section title="Component Blocks">
        <p class="text-justify">
            All component documentation mentions their respective personalized blocks.
        </p>
    </x-section>
    <x-section title="Original Content vs. Rewritten Content">
        <p class="text-justify">
            One of the precautions you should take with soft personalization is to customize what you want,
            but <b>preserve the rest of the original classes.</b> Without preserving the original classes after
            touching some point in the customization, the component may be completely modified, leading to
            an unpleasant appearance. For example, suppose you want to make a component square instead of
            originally round, for this we need to remove the <x-block>rounded-md</x-block>, so <b>the correct thing to do is
            to return the entire component's original class WITHOUT</b> the <x-block>rounded-md</x-block>.
        </p>
    </x-section>
</x-layout>
