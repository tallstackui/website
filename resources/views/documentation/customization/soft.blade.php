@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }

    $scopes = app(App\Support\InternalScopes::class)->categorized();
@endphp

<x-layout :$content>
    <x-slot:title>Soft Customization</x-slot>
    <x-slot:description>The soft customization.</x-slot>
    <x-section title="Concept" disable-copy>
        <p>
            The soft customization involves customizing components at runtime,
            either through a service provider like AppServiceProvider or object
            classes. The idea behind soft customization is to explore the
            building blocks of customization for each component. Even if you are
            starting with Laravel, with a little attention to the docs below,
            you will be able to fully customize the components using this
            concept.
        </p>
    </x-section>
    <x-section title="Tracing TailwindCSS Classes" disable-copy>
        <div class="space-y-4">
            <p>
                Since the idea of soft customization is to apply customization
                through PHP object classes, the first thing you need to do is
                make sure that TailwindCSS tracks the classes that will be
                defined from your application's
                <x-block>*.php</x-block>
                files. To do this, you need to edit your
                <x-block>app.css</x-block>
                CSS file by inserting this content:
            </p>
            <x-code language="css" :contents="$tailwindcss" disable-copy />
        </div>
    </x-section>
    <x-section title="Start the Customization" disable-copy>
        <div class="space-y-4">
            <p>
                Now that you have prepared TailwindCSS to track your custom
                classes, let's start customizing your components. Let's take a
                look at an example:
            </p>
            <x-code language="php" :contents="$example" disable-copy />
            <p>
                In this example we are
                <u>touching and replacing all the classes</u>
                in the
                <x-block>input.base</x-block>
                block of the
                <x-block>input</x-block>
                component with the content:
                <x-block>w-full rounded-full</x-block>
                .
                <b>
                    This means that every input component displayed on the
                    application pages will have these classes, instead of the
                    original component classes.
                </b>
            </p>
        </div>
    </x-section>
    <x-section title="Customization Blocks" disable-copy>
        <div class="space-y-4">
            <p>
                At this point you may be wondering how to "discover" the blocks
                of each component. To do this, when browsing the documentation
                of each component individually you will notice a button called
                <x-block>Customize: {Component Name}</x-block>
                which, when clicked, will display a modal containing all the
                blocks - and their names, as well as the original classes that
                are defined by each block, for example:
            </p>
            <livewire:customization :$customization component="Form\Checkbox" />
        </div>
    </x-section>
    <x-section title="Fluent Customization" disable-copy>
        <p>
            Since soft customization was created to be easy to use, just like
            <a href="https://pestphp.com" target="_blank" class="underline">
                Pest
            </a>
            , the soft customization offers a concept of fluency when using the
            <x-block>and</x-block>
            like a property or method. The idea behind this approach is to
            customize more than one component at the same time.
        </p>
        <x-code language="php" :contents="$fluent" disable-copy />
    </x-section>
    <x-section title="Multiple Customization Ways" disable-copy>
        <p>
            Since a component has several blocks that organize the classes
            applied to the component, you can customize one block at a time or
            all of them at once:
        </p>
        <x-code language="php" :contents="$usages" disable-copy />
    </x-section>
    <x-section title="Invokable Class" disable-copy>
        <div class="space-y-4">
            <p>
                You may have noticed that in the example above we used the
                <x-block>InputPersonalization</x-block>
                class. This is a simple invokable object class, because soft
                customization also allows you to make your customization into
                object invokable classes. This approach is ideal if you are
                someone who prioritizes organization above all else. Let's take
                a look at an example:
            </p>
            <p>Preparing:</p>
            <x-code
                language="php"
                :contents="$invokableExample"
                disable-copy
            />
            <p>Customizing:</p>
            <x-code language="php" :contents="$invokableClass" disable-copy />
        </div>
    </x-section>
    <x-section title="Component Data Parameters" disable-copy>
        <div class="space-y-4">
            <p>
                You may have noticed that the example above there is a variable
                called
                <x-block>$data</x-block>
                . This variable is an array containing all the component's
                properties, including the values passed when you used the
                component somewhere in your application.
            </p>
            <p>
                Using the
                <x-block>input</x-block>
                like this:
            </p>
            <x-code language="blade" :contents="$usingComponent" />
            <p>
                The
                <x-block>$data</x-block>
                will be something like:
            </p>
            <x-code language="php" :contents="$data" disable-copy />
        </div>
    </x-section>
    <x-section title="Interacting with Default Classes" disable-copy>
        <div class="space-y-4">
            Although all the examples above are valid, they overwrite the
            original block classes by defining the second parameter of the
            <x-block>block</x-block>
            method, this is a way of doing a
            <u>
                complete replacement of the original component classes by the
                blocks
            </u>
            , an expected behavior when the soft customization was created.
            Luckily we have four special helpers to interact with the original
            classes by touching their content but preserving everything else.
            Let's take a look at an example:
            <x-code :contents="$replace" disable-copy />
            <p>
                Note that in the example above
                <u>
                    we omitted the second parameter of the
                    <x-block>block</x-block>
                    method
                </u>
                , this way we can access
                <b>four useful methods</b>
                that allow us to touch the component's original classes in an
                easy way in order to make modifications while maintaining the
                rest of the original content.
            </p>
            <p>All the four methods:</p>
            <x-code :contents="$helpers" disable-copy />
            <p>
                Now that these methods have been introduced, let's imagine that
                you want to transform all your inputs into a fully round style
                to follow the look of your application, so all the work (🥵) you
                need to do is:
            </p>
            <x-code :contents="$realExample" disable-copy />
        </div>
    </x-section>
    <x-section title="Scoped Soft Customization" disable-copy>
        <div class="space-y-4">
            <p>
                While soft customization is powerful and easy to use, there is a
                catch:
                <u>all soft customization are applied to all components</u>
                , and you cannot assign specific customization to a component
                only once. However, just like in VueJS, where we have scoped CSS
                - CSS applied only to the component that defined the scope, soft
                customization offers the same concept of scoped customization -
                customization that will only be applied to the components that
                have the scope defined. Let's take a look at an example:
            </p>
            <div class="my-4 space-y-4">
                <x-input
                    label="Normal Input"
                    value="This is a normal input"
                    readonly
                />

                <x-input
                    label="Full Rounded Input"
                    value="This is a fully round input"
                    readonly
                    scope="input-rounded"
                />
            </div>
            <p>
                Notice how one input is normal while the other is fully rounded?
                This was only possible thanks to scoped soft customization,
                which instead of turning all inputs into rounded inputs, turned
                only the one that was defined with the circle scope. Now let's
                see how to achieve the same result as in the example above:
            </p>
            <p>
                First, let's do the same soft customization via service
                provider:
            </p>
            <x-code :contents="$scopedCustomizationDefinition" disable-copy />
            <p>
                The difference is that we must instruct that customization to be
                applied to a scope -
                <b>defined by a unique name</b>
                , and as you can see above, there are two ways to define the
                scope name. Just choose one of them and use it as you wish.
            </p>
            <p>You have three different ways to define scopes:</p>
            <x-code :contents="$scopedCustomizationWays" disable-copy />
            <p>
                <b>Lastly and most importantly</b>
                , we must apply the use of the scope to the components that are
                <x-block>input</x-block>
                and that we want to receive the effects of the defined
                customization:
            </p>
            <x-code
                language="blade"
                :contents="$scopedCustomizationUsage"
                disable-copy
            />
            <x-warning>
                You can not set more than one scope in the same component.
            </x-warning>
        </div>
    </x-section>
    <x-section title="Extending a Scope" new disable-copy>
        <div class="space-y-4">
            <p>
                Scopes could only be created, never touched, which made the ones
                the package ships (
                <x-block>card-shadowless</x-block>
                ,
                <x-block>stats-shadowless</x-block>
                ,
                <x-block>calendar-shadowless</x-block>
                ,
                <x-block>tab-shadowless</x-block>
                ) read only from an application's point of view. Calling
                <x-block>scope()</x-block>
                with the same name did not extend the existing one, it started
                over from the component's original classes.
            </p>
            <x-code language="php" :contents="$extend" />
            <p>
                The block keeps everything the original definition did to it and
                the new classes go on top. Requiring the scope to exist is the
                point of having a separate verb:
                <x-block>scope()</x-block>
                creates and silently accepts a typo,
                <x-block>extend()</x-block>
                refuses one.
            </p>
            <x-warning>
                The package's own scopes are registered in the service
                provider's
                <x-block>boot()</x-block>
                , which runs before the application's providers under Laravel's
                default discovery. Applications that disable discovery have to
                make sure their provider boots afterwards.
            </x-warning>
        </div>
    </x-section>
    <x-section title="Customizations Stack" new disable-copy>
        <div class="space-y-4">
            <p>
                Two chains touching one block did not stack: the second silently
                discarded the first. Inside a single chain it already stacked,
                which is what made the behaviour hard to spot.
            </p>
            <x-code language="php" :contents="$stacking" />
            <p>
                It resumes from the compiled state now, so a package and an
                application can each customize the same block without one
                erasing the other. This is also what makes
                <x-block>extend()</x-block>
                work.
            </p>
            <x-warning
                warning
                title="Anything relying on the last chain winning has to change"
            >
                The practical case to watch is a customization that runs more
                than once in the same process: it now accumulates rather than
                settling on a fixed result.
            </x-warning>
        </div>
    </x-section>
    <x-section title="Remove Matches Whole Classes" new disable-copy>
        <div class="space-y-4">
            <p>
                <x-block>remove()</x-block>
                ran a plain
                <x-block>str_replace</x-block>
                , so removing a class also chewed through every longer class
                that contained its name. It works on whitespace-separated tokens
                now and drops only whole classes.
            </p>
            <x-code language="php" :contents="$removeTokens" />
            <x-warning>
                <x-block>replace()</x-block>
                deliberately stays a substring operation &mdash; swapping a
                palette with
                <x-block>replace('gray-', 'zinc-')</x-block>
                depends on it. Which means
                <x-block>replace('rounded', 'rounded-full')</x-block>
                still turns
                <x-block>rounded-md</x-block>
                into
                <x-block>rounded-full-md</x-block>
                ; target the full class name when that is not what you want.
            </x-warning>
        </div>
    </x-section>
    <x-section
        title="Scopes Layer Over the Global Customization"
        new
        disable-copy
    >
        <div class="space-y-4">
            <p>
                A scope only overrides the blocks it names. Every other block
                keeps whatever the global customization did to it, so a scoped
                instance is the global look plus the scope's changes, not a
                reset.
            </p>
            <x-code language="php" :contents="$scopeLayering" />
            <p>
                This applies to the scopes the package ships as well, so
                <x-block>&lt;x-card scope="card-shadowless"&gt;</x-block>
                no longer discards every global customization of Card.
            </p>
            <x-warning>
                Block names containing a dot are keys, not paths. A scope can
                set
                <x-block>body</x-block>
                and
                <x-block>body.paddingless</x-block>
                in the same call without one replacing the other.
            </x-warning>
        </div>
    </x-section>
    <x-section title="Internal Scoped Customization" disable-copy>
        <div class="space-y-4">
            <p>
                Some TallStackUI components use other TallStackUI components
                internally. For example, the Color Picker renders an Input, and
                the Date Picker renders a Floating panel. With internal scoped
                customization, you can target and customize these internal
                instances without publishing Blade templates. The second
                parameter of the
                <x-block>customize</x-block>
                method accepts the scope name of the internal component:
            </p>
            <x-code :contents="$internalScoped" disable-copy />
            <p>
                Below is the full reference of available scopes organized by
                parent component.
            </p>
            <h3 class="text-lg font-semibold dark:text-white">
                Wrapper Components
            </h3>
            <p>
                These scopes affect all form components that use the shared
                wrapper infrastructure.
            </p>
            <x-table
                :headers="[
                    ['index' => 'parent', 'label' => 'Parent'],
                    ['index' => 'child', 'label' => 'Child'],
                    ['index' => 'scope', 'label' => 'Scope'],
                ]"
                :rows="collect($scopes['wrapper'])->flatMap(fn (array $section) => collect($section['rows'])
                                                                                                                                                                                                                                                ->map(fn (array $scope) => ['parent' => $section['label'], 'child' => $scope['child'], 'scope' => $scope['scope']]))"
            >
                @interact("column_scope", $row)
                    <x-block>{{ $row["scope"] }}</x-block>
                @endinteract
            </x-table>
            <h3 class="text-lg font-semibold dark:text-white">
                Form Components
            </h3>
            <x-table
                :headers="[
                    ['index' => 'parent', 'label' => 'Component'],
                    ['index' => 'child', 'label' => 'Child'],
                    ['index' => 'scope', 'label' => 'Scope'],
                ]"
                :rows="collect($scopes['form'])->flatMap(fn (array $section) => collect($section['rows'])
                                                                                                                                                                                                                                                ->map(fn (array $scope) => ['parent' => $section['label'], 'child' => $scope['child'], 'scope' => $scope['scope']]))"
            >
                @interact("column_scope", $row)
                    <x-block>{{ $row["scope"] }}</x-block>
                @endinteract
            </x-table>
            <h3 class="text-lg font-semibold dark:text-white">UI Components</h3>
            <x-table
                :headers="[
                    ['index' => 'parent', 'label' => 'Component'],
                    ['index' => 'child', 'label' => 'Child'],
                    ['index' => 'scope', 'label' => 'Scope'],
                ]"
                :rows="collect($scopes['ui'])->flatMap(fn (array $section) => collect($section['rows'])
                                                                                                                                                                                                                                                ->map(fn (array $scope) => ['parent' => $section['label'], 'child' => $scope['child'], 'scope' => $scope['scope']]))"
            >
                @interact("column_scope", $row)
                    <x-block>{{ $row["scope"] }}</x-block>
                @endinteract
            </x-table>
        </div>
    </x-section>
</x-layout>
