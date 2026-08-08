@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content ai="breadcrumbs">
    <x-slot:title>Breadcrumbs</x-slot:title>
    <x-slot:description>Breadcrumbs component.</x-slot:description>
    <x-slot:customization>
        <livewire:customization :$customization component="Breadcrumbs" />
    </x-slot:customization>
    <x-section title="Concept" disable-copy>
        <div class="space-y-4">
            <p>
                The breadcrumbs component displays a navigation trail of links helping users understand their position
                within the application hierarchy. You can provide items manually as an array or let the component
                auto-resolve them from a route-based breadcrumb registry.
            </p>
        </div>
    </x-section>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic" frame="ui/breadcrumbs/basic" :height="200" />
    </x-section>
    <x-section title="Named Routes">
        <div class="space-y-4">
            <p>
                The <x-block>link</x-block> field accepts both URLs and Laravel named routes. Values starting with
                <x-block>/</x-block> or <x-block>http</x-block> are kept as-is. Any other string is treated as a named
                route and resolved automatically via the Laravel <x-block>route()</x-block> helper.
            </p>
            <x-preview language="blade" :contents="$namedRoutes" frame="ui/breadcrumbs/named-routes" :height="220" />
        </div>
    </x-section>
    <x-section title="Icons">
        <x-preview language="blade" :contents="$icons" frame="ui/breadcrumbs/icons" :height="200" />
    </x-section>
    <x-section title="Tooltips">
        <x-preview language="blade" :contents="$tooltips" frame="ui/breadcrumbs/tooltips" :height="240" />
    </x-section>
    <x-section title="Sizes">
        <x-preview language="blade" :contents="$sizes" frame="ui/breadcrumbs/sizes" :height="280" />
    </x-section>
    <x-section title="Separator">
        <div class="space-y-4">
            <p>The default separator is <x-block>/</x-block>. You can customize it with any text:</p>
            <x-preview
                language="blade"
                :contents="$separatorText"
                frame="ui/breadcrumbs/separator-text"
                :height="240"
            />
            <p>Or use an icon as separator by prefixing the icon name with <x-block>icon:</x-block>:</p>
            <x-preview
                language="blade"
                :contents="$separatorIcon"
                frame="ui/breadcrumbs/separator-icon"
                :height="200"
            />
        </div>
    </x-section>
    <x-section title="Separator Class">
        <div class="space-y-4">
            <p>Apply additional CSS classes to all separator elements:</p>
            <x-preview
                language="blade"
                :contents="$separatorClass"
                frame="ui/breadcrumbs/separator-class"
                :height="200"
            />
        </div>
    </x-section>
    <x-section title="Slots">
        <div class="space-y-4">
            <p>
                Add custom content before or after the breadcrumb trail using the
                <x-block>left</x-block> and <x-block>right</x-block> slots:
            </p>
            <x-preview language="blade" :contents="$slots" frame="ui/breadcrumbs/slots" :height="200" />
        </div>
    </x-section>
    <x-section title="Route-Aware Builder" disable-copy>
        <div class="space-y-4">
            <p>
                Instead of passing items manually, you can register breadcrumb definitions for named routes and let the
                component auto-resolve the trail based on the current route. There are two ways to register definitions:
            </p>
            <p><b>1)</b> Publish a dedicated breadcrumb file (recommended):</p>
            <x-code language="shell" :contents="$publishCommand" />
            <p>
                This command will creates a <x-block>routes/breadcrumbs.php</x-block> file. Define your breadcrumbs
                there:
            </p>
            <x-code language="php" :contents="$registryFile" disable-copy />
            <p>
                Additionally, you can load any other breadcrumb files in <x-block>config/tallstackui.php</x-block>. The
                paths are relative to <x-block>base_path()</x-block> and non-existent files are silently skipped:
            </p>
            <x-code language="php" :contents="$config" disable-copy />
            <p><b>2)</b> Or you can register breadcrumbs in any service provider's <x-block>boot</x-block> method:</p>
            <x-code language="php" :contents="$serviceProvider" disable-copy />
            <p>
                Once registered, use the component without passing <x-block>items</x-block> to auto-resolve breadcrumbs
                from the current route. The component will automatically detect the current route and use the breadcrumb
                definitions to build the trail:
            </p>
            <x-code language="blade" :contents="$autoResolve" />
        </div>
    </x-section>
    <x-section title="Parent Chaining" disable-copy>
        <div class="space-y-4">
            <p>
                You can create a relationship of children and parent routes by using the
                <x-block>parent()</x-block> method to inherit breadcrumb items from a parent route. Parents are resolved
                recursively, allowing deep hierarchies:
            </p>
            <x-code language="php" :contents="$parentChaining" />
            <p>
                In the code above, note that <x-block>parent</x-block> is defined after the base (parent) route is
                defined, not before. Now when you visiting the page that is associated with the route
                <x-block>settings.profile</x-block> you will see something like this:
                <x-block>Home / Settings / Profile</x-block>
            </p>
        </div>
    </x-section>
    <x-section title="Route Model Binding" disable-copy>
        <div class="space-y-4">
            <p>
                Callback parameters are automatically injected from the current route's model bindings via Laravel's
                container. Type-hint any route-bound model to receive it:
            </p>
            <x-code language="php" :contents="$routeModelBinding" />
        </div>
    </x-section>
</x-layout>
