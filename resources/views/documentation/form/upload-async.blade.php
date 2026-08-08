@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content ai="form/upload/async">
    <x-slot:title>Form Upload Async</x-slot:title>
    <x-slot:description>Form upload async component.</x-slot:description>
    <x-slot:customization>
        <livewire:customization :$customization component="Form\Upload\Async" title="Upload Async" />
    </x-slot:customization>
    <x-warning class="mb-4">
        The previews on this page post to a throwaway endpoint that accepts images up to 50 MB and discards them on a
        schedule. Nothing you drop here is kept.
    </x-warning>
    <x-section title="Concept" new disable-copy>
        <div class="space-y-4">
            <p>
                <x-block>&lt;x-upload.async&gt;</x-block> slices each file in the browser and posts the pieces straight
                to a controller of your own, bypassing the Livewire upload pipeline, so a file no longer has to fit
                inside the PHP request limits. Files around 1 GB are the target.
            </p>
            <p>
                It shares nothing with
                <a href="{{ route('documentation', ['form', 'upload']) }}" wire:navigate class="underline">
                    <x-block>&lt;x-upload&gt;</x-block></a>
                beyond the namespace, and unlike it, this one works outside Livewire too.
            </p>
        </div>
    </x-section>
    <x-section
        title="Basic Usage"
        new
        description="route accepts a named route or a plain URL. Either wire:model or name is required."
    >
        <x-preview language="blade" :contents="$basic">
            <livewire:documentation.form.upload.async :mode="1" />
        </x-preview>
    </x-section>
    <x-section title="Multiple" new>
        <x-preview language="blade" :contents="$multiple">
            <livewire:documentation.form.upload.async :mode="2" />
        </x-preview>
    </x-section>
    <x-section
        title="Manual"
        new
        description="Stages the files and waits for the Send button. The footer slot replaces the built-in Send and Clear buttons."
    >
        <x-preview language="blade" :contents="$manual">
            <livewire:documentation.form.upload.async :mode="3" />
        </x-preview>
    </x-section>
    <x-section
        title="Without Livewire"
        new
        description="The same array is rendered as hidden inputs, so a plain form submit carries it."
    >
        <x-code language="blade" :contents="$native" />
    </x-section>
    <x-section
        title="Bound Value"
        new
        description="With multiple off, a single object or null. url is null when the destination disk has no public URL."
    >
        <x-code language="php" :contents="$value" />
    </x-section>
    <x-section
        title="Backend"
        new
        description="The method is called once per chunk. Intermediate chunks answer 204; the last one assembles the file, validates it, stores it and answers 200."
    >
        <x-code language="php" :contents="$controller" />
        <x-warning warning title="directory is required" class="mt-4">
            Without it, and without a <x-block>store</x-block> callback, the handler throws instead of guessing a
            destination. A package-wide fallback would quietly pile every upload into one folder.
        </x-warning>
    </x-section>
    <x-section title="Backend Options" new>
        <x-table
            :headers="[
            ['index' => 'option', 'label' => 'Option'],
            ['index' => 'type', 'label' => 'Type'],
            ['index' => 'default', 'label' => 'Default'],
            ['index' => 'description', 'label' => 'Description'],
        ]"
            :rows="[
            ['option' => 'disk', 'type' => 'string', 'default' => 'config', 'description' => 'Destination disk. Any driver, including S3'],
            ['option' => 'directory', 'type' => 'string', 'default' => 'required', 'description' => 'Destination directory on that disk'],
            ['option' => 'rules', 'type' => 'array', 'default' => 'null', 'description' => 'Laravel rules applied to the assembled file, under the file key'],
            ['option' => 'store', 'type' => 'callable', 'default' => 'null', 'description' => 'Returns the final path, skipping the built-in move'],
            ['option' => 'authorize', 'type' => 'callable', 'default' => 'null', 'description' => 'Returning false aborts with 403'],
            ['option' => 'max_size', 'type' => 'int', 'default' => 'config', 'description' => 'Per-endpoint override of the megabyte ceiling'],
            ['option' => 'tmp_disk', 'type' => 'string', 'default' => 'config', 'description' => 'Staging disk. Must use the local driver'],
        ]"
        >
            @interact('column_option', $row)
                <x-block>{{ $row['option'] }}</x-block>
            @endinteract
        </x-table>
    </x-section>
    <x-section
        title="Taking Over Persistence"
        new
        description="Runs once per file, after the pieces are joined and validated. The returned path must exist on the disk named in disk."
    >
        <x-code language="php" :contents="$store" />
    </x-section>
    <x-section title="Guards" new disable-copy>
        <div class="space-y-4">
            <p>
                <x-block>max-size</x-block> on the component is feedback for the user. The handler re-checks the
                declared size on every chunk and compares the assembled bytes at the end, and
                <x-block>rules</x-block> run against the real bytes rather than the mime the browser claimed. Route
                middleware stays yours; <x-block>authorize</x-block> sits on top of it, running on every chunk before
                anything is written.
            </p>
            <x-code language="php" :contents="$authorize" />
        </div>
    </x-section>
    <x-section title="Staging" new disable-copy>
        <div class="space-y-4">
            <p>
                Chunks are staged as one part file per index and joined at the end. They are uploaded
                <x-block>concurrency</x-block> at a time and arrive out of order, so appending them to a single file
                would interleave the payload. One part per chunk removes ordering from the equation and turns
                <i>is it complete?</i> into a file count.
            </p>
            <p>
                Two atomic filesystem operations carry the coordination: creating the directory elects the request that
                fires <x-block>AsyncUploadStarted</x-block>, and renaming the staging directory elects the single
                request that finalizes. Counting parts alone is not enough, since two requests can observe a complete
                set at the same moment.
            </p>
            <x-warning class="mt-4">
                Staging is always local, the destination is not. Joining the pieces needs real paths and stream handles,
                which object stores do not have. The finished file then goes wherever you name, S3 included.
            </x-warning>
        </div>
    </x-section>
    <x-section
        title="Cleaning Up"
        new
        description="An upload that starts and never finishes leaves its pieces staged. Nothing else collects them. Finalized files are never touched."
    >
        <x-code language="php" :contents="$clear" />
    </x-section>
    <x-section title="AlpineJS Events" new>
        <x-code language="blade" :contents="$events" />
        <x-table
            class="mt-4"
            :headers="[
            ['index' => 'event', 'label' => 'Event'],
            ['index' => 'when', 'label' => 'When'],
            ['index' => 'detail', 'label' => 'Detail'],
        ]"
            :rows="[
            ['event' => 'added', 'when' => 'File passed the client-side checks and entered the queue', 'detail' => '{ file }'],
            ['event' => 'rejected', 'when' => 'File blocked by accept, max-size or limit', 'detail' => '{ file, reason }'],
            ['event' => 'start', 'when' => 'Chunk loop began for a file', 'detail' => '{ file }'],
            ['event' => 'progress', 'when' => 'Per-file progress update', 'detail' => '{ file, progress }'],
            ['event' => 'success', 'when' => 'Backend accepted the file', 'detail' => '{ file, response }'],
            ['event' => 'error', 'when' => 'Definitive failure, retries exhausted', 'detail' => '{ file, error, status }'],
            ['event' => 'removed', 'when' => 'File removed from the grid', 'detail' => '{ file }'],
            ['event' => 'complete', 'when' => 'Whole queue finished, whatever the outcome', 'detail' => '{ files }'],
        ]"
        >
            @interact('column_event', $row)
                <x-block>{{ $row['event'] }}</x-block>
            @endinteract
        </x-table>
    </x-section>
    <x-section
        title="Laravel Events"
        new
        description="For side effects: queueing a thumbnail, scanning, auditing. There is deliberately no per-chunk event."
    >
        <x-table
            :headers="[
            ['index' => 'event', 'label' => 'Event'],
            ['index' => 'when', 'label' => 'When'],
            ['index' => 'payload', 'label' => 'Payload'],
        ]"
            :rows="[
            ['event' => 'AsyncUploadStarted', 'when' => 'First chunk of a file landed', 'payload' => 'uuid, realName, mime, totalSize, totalChunks'],
            ['event' => 'AsyncUploadCompleted', 'when' => 'File assembled, validated and stored', 'payload' => 'response, disk, uuid'],
            ['event' => 'AsyncUploadFailed', 'when' => 'A guard, the rules or the integrity check rejected it', 'payload' => 'reason, uuid, realName, errors'],
        ]"
        >
            @interact('column_event', $row)
                <x-block>{{ $row['event'] }}</x-block>
            @endinteract
        </x-table>
        <x-warning warning title="AsyncUploadCompleted is not the place to write a database row" class="mt-4">
            A finished upload is not a submitted form, and the user may still close the tab. That write belongs where
            the form is handled, reading the array the component synced out.
        </x-warning>
    </x-section>
    <x-section
        title="Configuration"
        new
        description="Under components.upload.async. Raising chunk_size requires raising the PHP limits with it, or every chunk is rejected before reaching Laravel."
    >
        <x-table
            :headers="[
            ['index' => 'setting', 'label' => 'Setting'],
            ['index' => 'default', 'label' => 'Default'],
            ['index' => 'description', 'label' => 'Description'],
        ]"
            :rows="[
            ['setting' => 'chunk_size', 'default' => '2 MB', 'description' => 'Bytes per chunk. Must stay below the PHP upload_max_filesize'],
            ['setting' => 'concurrency', 'default' => '3', 'description' => 'Chunks uploaded in parallel, per component'],
            ['setting' => 'retries', 'default' => '3', 'description' => 'Attempts per chunk on 5xx, 408, 429 and network errors'],
            ['setting' => 'retry_delay', 'default' => '1000', 'description' => 'Milliseconds between retries, with exponential backoff'],
            ['setting' => 'max_size', 'default' => 'null', 'description' => 'Maximum megabytes per file. null = unlimited'],
            ['setting' => 'accept', 'default' => 'null', 'description' => 'Default mime/extension filter. null = any'],
            ['setting' => 'tmp_disk', 'default' => 'local', 'description' => 'Disk used to stage the chunks. Must use the local driver'],
            ['setting' => 'tmp_directory', 'default' => 'async-uploads', 'description' => 'Directory, inside tmp_disk, used to stage the chunks'],
            ['setting' => 'disk', 'default' => 'local', 'description' => 'Destination disk of the finalized files'],
            ['setting' => 'keep', 'default' => '6 hours', 'description' => 'Seconds an unfinished upload is kept before the clear command drops it'],
        ]"
        >
            @interact('column_setting', $row)
                <x-block>{{ $row['setting'] }}</x-block>
            @endinteract
        </x-table>
    </x-section>
</x-layout>
