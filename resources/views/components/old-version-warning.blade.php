<div>
    <x-alert title="WARNING!" color="red">
        You are browsing the docs for an old version of TallStackUI.
        <a
            href="{{ version_url(latest_version(), "upgrade-guide") }}"
            class="cursor-pointer underline"
        >
            Consider upgrade your project to TallStackUI
            {{ latest_version() }}.
        </a>
    </x-alert>
</div>
