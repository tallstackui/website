@props(["customization" => false])

<x-card shadowless bordered>
    <p>
        TallStackUI has several components that were created for internal use
        only. This documentation serves only to reflect the
        {{ $customization ? "customizable" : "personalizable" }} blocks of
        these components so that you can customize them using soft or deep
        {{ $customization ? "customization" : "personalization" }}.
    </p>
</x-card>
