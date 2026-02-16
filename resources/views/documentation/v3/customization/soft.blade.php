@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content>
    <x-slot:title>
        Soft Customization
    </x-slot:title>
    <x-slot:description>
        The soft customization.
    </x-slot:description>
    <x-section title="Concept" disable-copy>
        <p>
            The soft customization involves customizing components at runtime, either through a service provider like
            AppServiceProvider or object classes. The idea behind soft customization is to explore the building blocks
            of customization for each component. Even if you are starting with Laravel, with a little attention to the docs
            below, you will be able to fully customize the components using this concept.
        </p>
    </x-section>
    <x-section title="Tracing TailwindCSS Classes" disable-copy>
        <div class="space-y-4">
            <p>
                Since the idea of soft customization is to apply customization through PHP object classes, the first thing you
                need to do is make sure that TailwindCSS tracks the classes that will be defined from your application's <x-block>*.php</x-block> files.
                To do this, you need to edit your <x-block>app.css</x-block> CSS file by inserting this content:
            </p>
            <x-code language="css" :contents="$tailwindcss" disable-copy/>
        </div>
    </x-section>
    <x-section title="Start the Customization" disable-copy>
        <div class="space-y-4">
            <p>
                Now that you have prepared TailwindCSS to track your custom classes, let's start
                customizing your components. Let's take a look at an example:
            </p>
            <x-code language="php" :contents="$example" disable-copy/>
            <p>
                In this example we are <u>touching and replacing all the classes</u> in the <x-block>input.base</x-block>
                block of the <x-block>input</x-block> component with the content: <x-block>w-full rounded-full</x-block>.
                <b>This means that every input component displayed on the application pages will have these classes, instead of the
                original component classes.</b>
            </p>
        </div>
    </x-section>
    <x-section title="Customization Blocks" disable-copy>
        <div class="space-y-4">
            <p>
                At this point you may be wondering how to "discover" the blocks of each component. To do this, when
                browsing the documentation of each component individually you will notice a button called
                <x-block>Customize: {Component Name}</x-block> which, when clicked, will display a modal containing
                all the blocks - and their names, as well as the original classes that are defined by each block, for example:
            </p>
            <livewire:customization :$customization component="Form\Checkbox" />
        </div>
    </x-section>
    <x-section title="Fluent Customization" disable-copy>
        <p>
            Since soft customization was created to be easy to use, just like <a href="https://pestphp.com" target="_blank" class="underline">Pest</a>,
            the soft customization offers a concept of fluency when using the <x-block>and</x-block> like a property or method.
            The idea behind this approach is to customize more than one component at the same time.
        </p>
        <x-code language="php" :contents="$fluent" disable-copy/>
    </x-section>
    <x-section title="Multiple Customization Ways" disable-copy>
        <p>
            Since a component has several blocks that organize the classes applied to the component,
            you can customize one block at a time or all of them at once:
        </p>
        <x-code language="php" :contents="$usages" disable-copy/>
    </x-section>
    <x-section title="Invokable Class" disable-copy>
        <div class="space-y-4">
            <p>
                You may have noticed that in the example above we used the <x-block>InputPersonalization</x-block> class.
                This is a simple invokable object class, because soft customization also allows you to make your customization into object invokable
                classes. This approach is ideal if you are someone who prioritizes organization above all else. Let's take a look at an example:
            </p>
            <p>Preparing:</p>
            <x-code language="php" :contents="$invokableExample" disable-copy/>
            <p>Customizing:</p>
            <x-code language="php" :contents="$invokableClass" disable-copy/>
        </div>
    </x-section>
    <x-section title="Component Data Parameters" disable-copy>
        <div class="space-y-4">
            <p>
                You may have noticed that the example above there is a variable called <x-block>$data</x-block>. This variable is an array
                containing all the component's properties, including the values passed when you used the component somewhere in your application.
            </p>
            <p>Using the <x-block>input</x-block> like this:</p>
            <x-code language="blade" :contents="$usingComponent"/>
            <p>The <x-block>$data</x-block> will be something like:</p>
            <x-code language="php" :contents="$data" disable-copy/>
        </div>
    </x-section>
    <x-section title="Interacting with Default Classes" disable-copy>
        <div class="space-y-4">
            Although all the examples above are valid, they overwrite the original block classes by defining the second parameter
            of the <x-block>block</x-block> method, this is a way of doing a <u>complete replacement of the original component classes
            by the blocks</u>, an expected behavior when the soft customization was created. Luckily we have four special helpers to interact
            with the original classes by touching their content but preserving everything else. Let's take a look at an example:
            <x-code :contents="$replace" disable-copy/>
            <p>
                Note that in the example above <u>we omitted the second parameter of the <x-block>block</x-block> method</u>,
                this way we can access <b>four useful methods</b> that allow us to touch the component's original
                classes in an easy way in order to make modifications while maintaining the rest of the original content.
            </p>
            <p>All the four methods:</p>
            <x-code :contents="$helpers" disable-copy/>
            <p>
                Now that these methods have been introduced, let's imagine that you want to
                transform all your inputs into a fully round style to follow the look of your
                application, so all the work (🥵) you need to do is:
            </p>
            <x-code :contents="$realExample" disable-copy/>
        </div>
    </x-section>
    <x-section title="Scoped Soft Customization" disable-copy>
        <div class="space-y-4">
            <p>
                While soft customization is powerful and easy to use, there is a catch: <u>all soft customization are applied to all components</u>,
                and you cannot assign specific customization to a component only once. However, just like in VueJS, where we have scoped CSS -
                CSS applied only to the component that defined the scope, soft customization offers the same concept of scoped customization -
                customization that will only be applied to the components that have the scope defined.
                Let's take a look at an example:
            </p>
            <div class="my-4 space-y-4">
                <x-alert>This is a normal Alert component</x-alert>

                <x-alert scope="circle">
                    This is a fully round Alert component
                </x-alert>
            </div>
            <p>
                Notice how one alert is normal while the other is fully rounded? This was
                only possible thanks to scoped soft customization, which instead of turning all alerts into
                rounded alerts, turned only the one that was defined with the circle scope. Now let's see how
                to achieve the same result as in the example above:
            </p>
            <p>
                First, let's do the same soft customization via service provider:
            </p>
            <x-code :contents="$scopedCustomizationDefinition" disable-copy/>
            <p>
                The difference is that we must instruct that customization to be applied to a scope - <b>defined by a unique name</b>,
                and as you can see above, there are two ways to define the scope name. Just choose one of them and use it as you wish.
            </p>
            <p>
                You have three different ways to define scopes:
            </p>
            <x-code :contents="$scopedCustomizationWays" disable-copy/>
            <p>
                <b>Lastly and most importantly</b>, we must apply the use of the scope to the components that are <x-block>alert</x-block>
                and that we want to receive the effects of the defined customization:
            </p>
            <x-code language="blade" :contents="$scopedCustomizationUsage" disable-copy/>
            <x-warning>
                You can not set more than one scope in the same component.
            </x-warning>
        </div>
    </x-section>
</x-layout>
