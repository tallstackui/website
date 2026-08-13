<x-demo-layout title="Breadcrumbs Named Routes">
    <div class="mx-auto max-w-3xl space-y-4 px-6 py-10">
        <x-breadcrumbs
            :items="[
                ['label' => 'Home', 'link' => '#'],
                ['label' => 'Section', 'link' => '#'],
                ['label' => 'Current Page'],
            ]"
        />

        <p class="dark:text-dark-400 text-xs text-slate-500">
            <x-block>welcome</x-block>
            is a named route resolved via Laravel's
            <x-block>route()</x-block>
            helper.
            <x-block>/</x-block>
            is kept as-is.
        </p>
    </div>
</x-demo-layout>
