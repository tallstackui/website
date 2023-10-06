@props(['title' => null, 'id' => null])

<section {{ $attributes->merge(['class' => 'text-gray-600 mb-4']) }} @if ($id) id="{{ $id }}" @endif>
    @if ($title)
        <h1 class="mb-4 text-2xl tracking-tight text-slate-900 font-medium dark:text-white">{{ $title }}</h1>
    @endif
    {!! $slot !!}
</section>
