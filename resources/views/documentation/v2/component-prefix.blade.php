<x-layout torchlight>
    <x-slot:title>
        Component Prefix
    </x-slot:title>
    <x-section class="space-y-4" disable-copy>
        <p>
            Since TallStackUI offers a variety of components, you may encounter a component name conflict at some point.
            For example, if you initialize a project using Laravel Breeze - which offers a Blade component called <x-block>dropdown</x-block>
            - then there will be a conflict. In such cases, the best thing to do is to use the prefix component. The process
            is simple, but there is a downside: <u>you need to remember to ALWAYS use the prefix on any TallStackUI components that you want to use.</u>
        </p>
        <p>
            There are three different ways to prefix the TallStackUI components that you want to use. We will describe each option
            below, but first it is important to know that you can apply the same prefix to the examples here in the documentation
            so that you can copy any documentation examples with your own prefix, which will make your day easier. Just press the
            <x-block>Prefixing Examples</x-block> at the left side of this page and set your desired prefix.
        </p>
    </x-section>
    <x-section title="Configuration File" disable-copy>
        <p>
            As you can imagine, TallStackUI has a very complete configuration file, and there you can configure the prefix,
            however keep in mind that you need to publish the configuration file to perform this process. Just run the command:
            <x-block>php artisan vendor:publish --tag=tallstackui.config</x-block> and set the prefix in the file created in the <x-block>config/</x-block> folder.
        </p>
        <x-code :contents="$configuration" disable-copy />
        <p>
            Run the following command after setting the prefix: <x-block>php artisan optimize:clear</x-block>
        </p>
    </x-section>
    <x-section title="Environment Variable" disable-copy>
        <p>
            "I don't want to have to publish the configuration file for something so simple!", you might think, right? Well,
            that's why we provide an environment variable that you can use to set the prefix:
        </p>
        <x-code :contents="$environment" />
        <p>
            Run the following command after setting the prefix: <x-block>php artisan optimize:clear</x-block>
        </p>
    </x-section>
    <x-section title="Command" disable-copy>
        <p>
            Even easier, run this command:
        </p>
        <x-code :contents="$command" language="shell" />
        <p>
            Behind the scenes, TallStackUI will create the environment variable <x-block>TALLSTACKUI_PREFIX</x-block> with the defined prefix for you.
            Run the following command after setting the prefix: <x-block>php artisan optimize:clear</x-block>
        </p>
    </x-section>
    <x-section title="Using Prefix" disable-copy>
        <p>
            When set a prefix, for example <x-block>ts-</x-block>, then all you need todo is set <x-block>ts-</x-block> <b>BEFORE the component name</b>, for example:
        </p>
        <x-code language="blade" :contents="$examples" disable-copy />
    </x-section>
</x-layout>
