@props(['contents' => null])

<div x-data="{
    copyText: @js($contents),
    copyNotification: false,
    copyToClipboard() {
        navigator.clipboard.writeText(this.copyText);
        this.copyNotification = true;
        let that = this;
        setTimeout(function() {
            that.copyNotification = false;
        }, 3000);
    }
}" class="relative z-20 flex items-center">
    <button @click="copyToClipboard();"
        class="flex items-center gap-x-1 overflow-hidden rounded-md p-1 text-sm transition focus:outline-none sm:px-2">
        <x-icon name="clipboard" outline class="h-3 w-3" x-show="!copyNotification" />
        <span x-show="!copyNotification" class="text-gray-400">Copy</span>
        <x-icon name="clipboard-document-check" outline class="h-3 w-3 text-pink-500" x-show="copyNotification" />
        <span x-show="copyNotification" class="tracking-tight text-pink-500" x-cloak>Copied</span>
    </button>
</div>
