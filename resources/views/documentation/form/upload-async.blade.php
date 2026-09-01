@php
    foreach (apply_prefix($__data) as $key => $value) {
        $$key = $value;
    }
@endphp

<x-layout :$content ai="form/upload/async">
    <x-slot:title>Form Upload Async</x-slot>
    <x-slot:description>
        Asynchronous form upload component.
    </x-slot>
    <x-slot:customization>
        <livewire:customization
            :$customization
            component="Form\Upload\Async"
            title="Upload Async"
        />
    </x-slot>
    <x-warning class="mb-4">
        <b>This is not the basic way to upload files using Livewire!</b>
        This is a special component that lets you upload files asynchronously by
        splitting a large file into small chunks sent one by one until the
        upload is complete. If you are looking for the basic way to upload a
        file using Livewire,
        <x-refer :doc="['form', 'upload']">
            learn more about the upload component.
        </x-refer>
    </x-warning>
    <x-section title="Concept" disable-copy>
        TallStackUI v4 introduces a new and extremely useful component for file
        uploads:
        <x-block>upload.async</x-block>
        . Asynchronous uploading splits the file into smaller parts, allowing
        you to upload large files without changing the default PHP settings. The
        main difference between
        <x-block>upload</x-block>
        and
        <x-block>upload.async</x-block>
        is how the file is sent. While
        <x-block>upload</x-block>
        is good for simplifying and speeding up file uploads, it requires some
        changes to the default PHP settings to allow large files.
        <x-block>upload.async</x-block>
        , on the other hand, allows uploading large files without necessarily
        changing anything in PHP, but requires a bit more code to work.
    </x-section>
    <x-section title="Prepare Backend" disable-copy>
        <p>
            With
            <x-block>upload.async</x-block>
            , the selected file is divided into chunks. Each chunk is sent to
            the backend as an individual POST request. To process them, you need
            to create a Laravel controller with an upload method, use the
            TallStackUI upload trait, and point a route to the controller. Here
            is a basic example:
        </p>
        <x-code language="php" :contents="$controller" disable-copy />
        The route:
        <x-code language="php" :contents="$route" disable-copy />
        <p class="mb-4">Finally, you can use the component:</p>
        <x-code language="blade" :contents="$basic" disable-copy />
    </x-section>
    <x-section title="Caveats" disable-copy>
        <p>Before continuing, it is important to know:</p>
        <ul class="list mt-4 list-inside list-decimal space-y-2">
            <li>The component can be used outside Livewire components.</li>
            <li>
                You need to use a
                <x-block>wire:model</x-block>
                or
                <x-block>name</x-block>
                (outside Livewire components) to receive the uploaded file.
            </li>
            <li>
                Without a
                <x-block>wire:model</x-block>
                or
                <x-block>name</x-block>
                , the component will throw an exception.
            </li>
            <li>
                When the file is successfully uploaded, you will receive an
                array of data that represents the file:
            </li>
        </ul>
        <x-code language="php" :contents="$fileStructure" disable-copy />
    </x-section>
    <x-warning info>
        For a better understanding of the examples,
        <x-link
            href="https://testfile.org/all-pdf-sample-test-file-download-direct/"
            blank
            underline
            colorless
        >
            try uploading a PDF of 60 MB or less.
        </x-link>
    </x-warning>
    <x-section class="mt-4" title="Basic Usage">
        <div class="space-y-4">
            <x-preview language="blade" :contents="$basic">
                <livewire:documentation.form.upload.async :mode="1" />
            </x-preview>
            <x-warning info>
                You can use
                <x-block>:preview="false"</x-block>
                to disable the preview of images when uploading images.
            </x-warning>
        </div>
    </x-section>
    <x-section title="Multiple">
        <x-preview language="blade" :contents="$multiple">
            <livewire:documentation.form.upload.async :mode="2" />
        </x-preview>
    </x-section>
    <x-section
        title="Manual"
        description="An option to stage the files and wait for the send button."
    >
        <x-preview language="blade" :contents="$manual">
            <livewire:documentation.form.upload.async :mode="3" />
        </x-preview>
    </x-section>
    <x-section
        title="Image Editor"
        new
        description="An option to crop and rotate images before they are uploaded."
    >
        <div class="space-y-4">
            <x-preview language="blade" :contents="$editor">
                <livewire:documentation.form.upload.async :mode="4" />
            </x-preview>
            <p>
                Images open a crop and rotate dialog before the first chunk is
                sent; the edited file is what gets chunked, validated and
                stored. Documents go straight to the upload, and cancelling the
                dialog drops the file. With
                <x-block>multiple</x-block>
                the dialog opens once per image, in sequence.
            </p>
            <x-preview language="blade" :contents="$editorManual">
                <livewire:documentation.form.upload.async :mode="5" />
            </x-preview>
            <p>
                In
                <x-block>manual</x-block>
                mode the edited file waits in the grid until
                <x-block>send()</x-block>
                . The
                <x-block>editor</x-block>
                and
                <x-block>aspect</x-block>
                attributes accept the same values as the
                <x-refer :doc="['form', 'upload']">upload component</x-refer>
                :
                <x-block>true</x-block>
                ,
                <x-block>crop</x-block>
                ,
                <x-block>rotate</x-block>
                or
                <x-block>false</x-block>
                for the editor and a
                <x-block>width:height</x-block>
                ratio for the aspect.
            </p>
        </div>
    </x-section>
    <x-section
        title="Uploader Trait"
        description="All options of the upload method."
    >
        <div class="space-y-4">
            <p>
                As you may have noticed, implementing async upload is relatively
                simple:
            </p>
            <x-code language="php" :contents="$controller" disable-copy />
            <p>
                However, the
                <x-block>upload</x-block>
                method has several useful options:
            </p>
            <x-table
                :headers="[
                    ['index' => 'option', 'label' => 'Option'],
                    ['index' => 'type', 'label' => 'Type'],
                    ['index' => 'default', 'label' => 'Default'],
                    ['index' => 'description', 'label' => 'Description'],
                ]"
                :rows="[
                    ['option' => 'disk', 'type' => 'string', 'default' => 'config', 'description' => 'Destination disk. Any driver, including S3.'],
                    ['option' => 'directory', 'type' => 'string', 'default' => 'required', 'description' => 'Destination directory on that disk.'],
                    ['option' => 'rules', 'type' => 'array', 'default' => 'null', 'description' => 'Laravel rules applied to the assembled file, under the file key.'],
                    ['option' => 'store', 'type' => 'callable', 'default' => 'null', 'description' => 'Returns the final path, skipping the built-in move.'],
                    ['option' => 'authorize', 'type' => 'callable', 'default' => 'null', 'description' => 'Returning false aborts with 403.'],
                    ['option' => 'max_size', 'type' => 'int', 'default' => 'config', 'description' => 'Per-endpoint override of the megabyte ceiling.'],
                    ['option' => 'tmp_disk', 'type' => 'string', 'default' => 'config', 'description' => 'Staging disk. Must use the local driver.'],
                ]"
            >
                @interact("column_option", $row)
                    <x-block>{{ $row["option"] }}</x-block>
                @endinteract
            </x-table>
        </div>
    </x-section>
    <x-section title="Taking Over Persistence" disable-copy>
        <p>
            You can use
            <x-block>store</x-block>
            to control how the file is persisted after a complete upload. This
            runs only once when the file is fully uploaded successfully.
        </p>
        <x-code language="php" :contents="$store" disable-copy />
        <p>
            Without
            <x-block>store</x-block>
            , the file is persisted based on the
            <x-block>directory</x-block>
            . Without either of them, the component will throw an
            <x-block>AsyncUploadException</x-block>
            .
        </p>
    </x-section>
    <x-section title="Authorization" disable-copy>
        <div class="space-y-4">
            <p>
                If you need to decide whether a user is allowed to upload files,
                use
                <x-block>authorize</x-block>
                to check upload permission. The callback must return
                <x-block>true</x-block>
                to allow the upload.
            </p>
            <x-code language="php" :contents="$authorize" disable-copy />
            <p>
                Internally,
                <x-block>AsyncUploadRequest</x-block>
                is a form request that performs internal validations by
                extending Laravel's default
                <x-block>FormRequest</x-block>
                class.
            </p>
        </div>
    </x-section>
    <x-section title="Staging" disable-copy>
        <div class="space-y-4">
            <p>
                Chunks are written to individual part files by index, then
                combined when the upload is complete. Since
                <x-block>concurrency</x-block>
                controls how many chunks upload at once, they can arrive in any
                order. Storing each chunk separately avoids interleaved data and
                lets the handler detect completion by counting files.
            </p>
            <p>
                Coordination relies on atomic directory creation and renaming.
                Directory creation determines which request fires
                <x-block>AsyncUploadStarted</x-block>
                , while the rename determines which request performs
                finalization. A file count cannot provide this guarantee because
                two requests may detect completion at the same time.
            </p>
            <x-warning class="mt-4">
                Staging is always local; the destination is not. Joining the
                pieces needs real paths and stream handles, which object stores
                do not have. The finished file then goes wherever you specify,
                including S3.
            </x-warning>
        </div>
    </x-section>
    <x-section
        title="Cleaning Up"
        description="An option to clean up old temporary upload files."
        disable-copy
    >
        <x-code language="php" :contents="$clear" disable-copy />
    </x-section>
    <x-section title="JavaScript Events" disable-copy>
        <div class="space-y-4">
            <x-code language="blade" :contents="$events" disable-copy />
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
                @interact("column_event", $row)
                    <x-block>{{ $row["event"] }}</x-block>
                @endinteract

                @interact("column_detail", $row)
                    <x-block>{{ $row["detail"] }}</x-block>
                @endinteract
            </x-table>
        </div>
    </x-section>
    <x-section title="Laravel Events" disable-copy>
        <x-table
            :headers="[
                ['index' => 'event', 'label' => 'Event'],
                ['index' => 'when', 'label' => 'When'],
                ['index' => 'payload', 'label' => 'Payload'],
            ]"
            :rows="[
                ['event' => 'AsyncUploadStarted', 'when' => 'First chunk of a file landed', 'payload' => 'uuid, realName, mime, totalSize, totalChunks'],
                ['event' => 'AsyncUploadCompleted', 'when' => 'File assembled, validated and stored', 'payload' => 'response, disk, uuid'],
                ['event' => 'AsyncUploadFailed', 'when' => 'A guard, the rules, or the integrity check rejected it', 'payload' => 'reason, uuid, realName, errors'],
            ]"
        >
            @interact("column_event", $row)
                <x-block>{{ $row["event"] }}</x-block>
            @endinteract

            @interact("column_payload", $row)
                <x-block>{{ $row["payload"] }}</x-block>
            @endinteract
        </x-table>
    </x-section>
    <x-section title="Configuration" disable-copy>
        There are many configuration options that you can control globally via
        the
        <x-refer doc="configuration">configuration file.</x-refer>
    </x-section>
</x-layout>
