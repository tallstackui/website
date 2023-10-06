@props(['id' => null])

<section class="text-gray-600" @if ($id) id="{{ $id }}" @endif>
    {!! $slot !!}
</section>
