@props([
    'id',
    'contents' => null,
    'title' => null,
    'description' => null,
    'numbers' => false,
    'background' => true,
    'language' => 'php',
])

<div x-data="{ code : false }" @isset($id) id="{{ $id }}" @endisset>
    <div {{ $attributes->merge(['class' => 'flex items-center justify-between']) }}>
        <div>
            @if ($title)
                <h1 @class(['text-xl tracking-tight text-pink-600 font-medium', 'mb-4' => !$description])>
                    {{ $title }}
                </h1>
            @endif
            @if ($description)
                <p class="mb-4 text-sm text-slate-500">{{ $description }}</p>
            @endif
        </div>
        @if ($contents)
        <div class="flex rounded-md bg-white dark:bg-slate-600">
            <button class="flex items-center gap-x-1 overflow-hidden rounded-md p-1 text-sm transition focus:outline-none sm:px-2"
                    :class="{
                    'text-pink-500 font-semibold': code,
                    'text-gray-400 dark:text-slate-300': !code
                }" type="button" x-on:click="code = !code" x-cloak>
                <x-icon name="code-bracket" class="h-3 w-3" />
                Code
            </button>
        </div>
        @endif
    </div>
    <div>
        <div x-show="!code" @class(['rounded-lg p-6', 'bg-white dark:bg-slate-800' => $background])>
            {{ $slot }}
        </div>
        @if ($contents)
            <div x-cloak x-show="code">
                <x-code :language="$language" :$contents />
            </div>
        @endif
    </div>
</div>
