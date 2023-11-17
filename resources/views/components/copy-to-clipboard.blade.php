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
}" class="relative z-20 flex items-center m-2">
    <button x-on:click="copyToClipboard();">
        <x-icon name="document" class="text-gray-500 h-5 w-5" x-show="!copyNotification" />
        <x-icon name="document-check" class="h-5 w-5 text-pink-500" x-show="copyNotification" />
    </button>
</div>
