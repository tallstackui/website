@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content>
    <x-slot:title>
        Toast
    </x-slot:title>
    <x-slot:description>
        Toast component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:personalization :$personalization component="Interaction\Toast" title="Toast" />
    </x-slot:personalization>
    <x-section title="Configuration" disable-copy>
        <ul class="list-decimal list-inside space-y-2">
            <li>
                Insert the <x-block>toast</x-block> component on your main layout:
                <x-code language="html" :contents="$tag"/>
            </li>
            <li>
                Use the <x-block>Interactions</x-block> trait in your Livewire component:
                <x-code language="php" :contents="$trait"/>
            </li>
            <li>
                Dispatch the Toast from a Livewire method:
                <x-code language="php" :contents="$dispatch"/>
            </li>
        </ul>
    </x-section>
    <x-section title="Basic Usage">
        <x-preview :contents="$basic">
            <livewire:documentation.interactions.toast.examples/>
        </x-preview>
    </x-section>
    <x-section title="Confirmations" description="Interacting with actions.">
        <div class="space-y-4">
            <x-preview :contents="$confirmation">
                <livewire:documentation.interactions.toast.confirmation/>
            </x-preview>
            <div class="mt-4 space-y-4">
                <x-code :contents="$confirmationExplanation" disable-copy />
            </div>
        </div>
    </x-section>
    <x-section title="Time Control" description="Increase the time to show the toast.">
        <div class="space-y-4">
            <x-preview :contents="$time">
                <livewire:documentation.interactions.toast.timeout/>
            </x-preview>
            <x-code :contents="$defaultTime" disable-copy />
        </div>
    </x-section>
    <x-section title="Persistent" description="An option to not set an expiration time and also hide the progress bar.">
        <div class="space-y-4">
            <x-preview :contents="$persistent">
                <livewire:documentation.interactions.toast.persistent/>
            </x-preview>
        </div>
    </x-section>
    <x-section title="Expandable" description="An option to show minimized description texts.">
        <div class="space-y-4">
            <x-preview :contents="$expandable">
                <livewire:documentation.interactions.toast.expandable/>
            </x-preview>
            <p class="mt-2">
                You can configure Toast to be extensible by default in <a href="{{ route('documentation', ['v3', 'configuration']) }}" wire:navigate class="underline">the configuration file.</a> When you
                do that, you can optionally ignore the expandable for specific Toast:
            </p>
            <x-code :contents="$ignoringExpandable" disable-copy />
        </div>
    </x-section>
    <x-section title="Position" description="An option to control the toast position at runtime.">
        <div class="space-y-4">
            <p class="mt-2">
                By default, the Toast position is configured using <a href="{{ route('documentation', ['v3', 'configuration']) }}" wire:navigate class="underline">the configuration file.</a>.
                However, you can set the Toast position at runtime using the <x-block>position</x-block> method:
            </p>
            <x-preview :contents="$position">
                <livewire:documentation.interactions.toast.position/>
            </x-preview>
            <p class="mt-2">
                If you quickly click on all the buttons above, you will see that the position
                of the Toasts that were already displayed will change. This happens because the
                <x-block>position</x-block> method will control the position of all the Toasts that are fired.
            </p>
        </div>
    </x-section>
    <x-section title="Sole">
        <div class="space-y-4">
            <p class="mt-2">
                Starting from version v2.9.0, you can use the <x-block>sole</x-block> method to clear all other displayed Toasts in favor of displaying only a specific Toast.
            </p>
            <x-preview :contents="$sole">
                <livewire:documentation.interactions.toast.sole/>
            </x-preview>
        </div>
    </x-section>
    <x-section title="Events" description="An option to listen to events.">
        <div class="space-y-4">
            <x-preview language="blade" :contents="$events">
                <livewire:documentation.interactions.toast.events/>
            </x-preview>
            <x-warning class="mt-4">
                We recommend that you use listeners in one place, whether in the base layout or once per component.
            </x-warning>
        </div>
    </x-section>
    <x-section title="Hooks">
        <div class="space-y-4">
            <x-code :contents="$hooks" disable-copy />
            <p>Optionally, you can also set <x-block>params</x-block> as closure:</p>
            <x-code :contents="$hooksCallable" disable-copy />
            <p><u>The closure will be resolved using Laravel container</u> and the result will be passed to the hook.</p>
        </div>
    </x-section>
    <x-section title="JavaScript API" description="JavaScript API to interact with Toast.">
        <div class="space-y-4">
            <x-code language="blade" :contents="$javascript" disable-copy />
            <x-warning>
                The toast hooks are unavailable in the JavaScript API.
            </x-warning>
        </div>
    </x-section>
    <x-section title="Display After Redirects">
        <div class="space-y-4">
            <p>
                You can trigger a toast that will actually be displayed after a redirect action. Regardless of whether
                the redirection is to another Livewire component or to basic controllers, you can still display the toast.
            </p>
            <x-code :contents="$flash"/>
            <p>
                When using <x-block>flash()</x-block> method, the toast will not be displayed in the current
                request, but yes stored temporarily in the session and displayed in the next request.
            </p>
        </div>
    </x-section>
    <x-section title="Dispatching via Controllers">
        <div class="space-y-4">
            <p>
                You can trigger a toast via controllers.
            </p>
            <x-code :contents="$controllers" disable-copy />
            <p>
                <u>Because certain methods were created and designed to be used with Livewire components</u>,
                methods like <x-block>confirm</x-block>, <x-block>cancel</x-block> and <x-block>hooks</x-block>
                will be unavailable and will throw exceptions when you try to use them in controllers.
            </p>
        </div>
    </x-section>
    <x-available-configuration />
</x-layout>
