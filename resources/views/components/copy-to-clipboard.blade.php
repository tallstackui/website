@props(['contents' => null])

<div x-data="{
    text: @js($contents),
    notification: false,
    copy() {
        try {
            navigator.clipboard.writeText(this.copyText);
            this.notification = true;
        } catch (err) { alert('Failed to copy to clipboard.'); }

        setTimeout(() => this.notification = false, 3000);
    }
}" class="relative z-20 flex items-center m-2">
    <button x-on:click="copy()">
        <x-icon name="document" class="text-gray-500 h-5 w-5" x-show="!notification" />
        <x-icon name="document-check" class="h-5 w-5 text-pink-500" x-show="notification" />
    </button>
</div>
