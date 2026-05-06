<x-demo-layout title="Breadcrumbs Tooltips">
    <div class="mx-auto max-w-3xl px-6 py-10 space-y-4">
        <x-breadcrumbs :items="[
            ['label' => 'Home', 'link' => '/', 'tooltip' => 'Back to homepage'],
            ['label' => 'Users', 'link' => '/', 'tooltip' => 'View all users'],
            ['label' => 'John Doe'],
        ]" />

        <p class="text-xs text-slate-500 dark:text-slate-400">Hover any item with a tooltip to see it pop up.</p>
    </div>
</x-demo-layout>
