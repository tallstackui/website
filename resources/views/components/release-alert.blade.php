@if (config('custom.top_bar.status'))
    <x-top-bar>
        <a href="{{ config('custom.top_bar.release') }}" target="_blank" class="underline decoration-dotted underline-offset-4">TallStackUI 1.0 is here! 🎉</a>
    </x-top-bar>
@endif
