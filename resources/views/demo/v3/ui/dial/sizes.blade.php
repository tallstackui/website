<x-demo-layout title="Dial Sizes">
    <div class="flex min-h-[440px] flex-col items-center justify-center px-6 py-10 text-sm text-slate-500 dark:text-slate-400">
        <p class="text-center">
            Four size variations, one in each corner: <br>
            <b>xs</b> (top-left) · <b>sm</b> (top-right) · <b>md</b> (bottom-left) · <b>lg</b> (bottom-right)
        </p>
    </div>

    <x-dial xs position="top-left">
        <x-dial.items icon="pencil" label="Edit" />
        <x-dial.items icon="share" label="Share" />
    </x-dial>

    <x-dial sm position="top-right">
        <x-dial.items icon="pencil" label="Edit" />
        <x-dial.items icon="share" label="Share" />
    </x-dial>

    <x-dial position="bottom-left">
        <x-dial.items icon="pencil" label="Edit" />
        <x-dial.items icon="share" label="Share" />
    </x-dial>

    <x-dial lg position="bottom-right">
        <x-dial.items icon="pencil" label="Edit" />
        <x-dial.items icon="share" label="Share" />
    </x-dial>
</x-demo-layout>
