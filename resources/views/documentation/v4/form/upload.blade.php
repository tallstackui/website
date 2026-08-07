@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout :$content :ai="['Upload' => 'form/upload', 'Upload Async' => 'form/upload/async']">
    <x-slot:title>
        Form Upload
    </x-slot:title>
    <x-slot:description>
        Form upload component.
    </x-slot:description>
    <x-slot:customization>
        <livewire:customization :$customization component="Form\Upload" title="Upload" />
        <livewire:customization :customization="$asyncCustomization" component="Form\Upload\Async" title="Upload Async" />
    </x-slot:customization>
    <x-warning class="mb-4">
        Files can be uploaded through selection or drag-and-drop. Also, when
        sending a <u>png, jpg, jpeg or gif file</u>, a preview is offered when clicking on the
        file image. To disable the preview, simply pass the <b>:preview="false"</b> parameter
        to the component.
        <p class="mt-4 text-xs font-semibold underline">
            All files uploaded as part of tests on this page are deleted each hour.
        </p>
    </x-warning>
    <x-section title="Basic Usage" anchor="upload-basic-usage">
        <x-preview language="blade" :contents="$basic">
            <livewire:documentation.form.upload.upload :model="1" />
        </x-preview>
    </x-section>
    <x-section title="Label & Hint & Tip" anchor="upload-label-hint-tip">
        <x-preview language="blade" :contents="$labelHintTip">
            <livewire:documentation.form.upload.upload :model="2" />
        </x-preview>
    </x-section>
    <x-section title="Close After Upload" description="An option to optionally close the float after upload the file" anchor="upload-close-after-upload">
        <x-preview language="blade" :contents="$closeAfterUpload">
            <livewire:documentation.form.upload.upload :model="8" />
        </x-preview>
    </x-section>
    <x-section title="Validation Error" anchor="upload-validation-error" disable-copy>
        <div class="space-y-4">
            <p>
                Since after selecting the file to be sent it is common for the floating element to be closed, if there is
                a validation error in the file, it will probably not be visible. For this reason a validation error message
                will appear below the input, similar to what happens with normal <x-block>input</x-block>. However, unlike input, this message
                cannot be disabled.
            </p>
            <x-preview language="blade" disable-copy>
                <livewire:documentation.form.upload.upload :model="9" />
            </x-preview>
        </div>
    </x-section>
    <x-section title="Delete" anchor="upload-delete">
        <div class="space-y-4">
            <x-preview language="blade" :contents="$delete">
                <livewire:documentation.form.upload.upload :model="3" />
            </x-preview>
            <p>
                You can use this algorithm to be the base of the method of deleting temporary files.
            </p>
            <x-code :contents="$deleteMethod" disable-copy />
        </div>
    </x-section>
    <x-section title="Multiple" anchor="upload-multiple">
        <div class="space-y-4">
            <x-preview language="blade" :contents="$multiple">
                <livewire:documentation.form.upload.upload :model="4" />
            </x-preview>
            <p>
                If you have ever uploaded multiple files, you may have already encountered this issue: after
                selecting some files, if new files are selected they replace the selected ones with the new
                selected files, instead of merging them. To solve this problem and allow your user to select
                multiple files, in batches, you can use an algorithm like this:
            </p>
            <x-code :contents="$multipleBatches" disable-copy />
            <p>
                The only thing to pay attention to with this approach is that <b>real-time validations
                may not work correctly to display validation errors linked to the correct files</b>,
                so if you want to use this strategy we suggest that you use a single validation
                with properties bind with <x-block>wire:model</x-block>. Also, remember to update
                the methods with the name of the property you are using to upload files,
                <a href="https://livewire.laravel.com/docs/lifecycle-hooks" target="_blank" class="underline">following Livewire lifecycle hooks convention:</a>
            </p>
            <x-code :contents="$multipleBatchesOtherProperties" disable-copy />
        </div>
    </x-section>
    <x-section title="Restricting File Types" anchor="upload-restricting-file-types">
        <x-preview language="blade" :contents="$accept">
            <livewire:documentation.form.upload.upload :model="5" />
        </x-preview>
    </x-section>
    <x-section title="Footer Slot" anchor="upload-footer-slot">
        <div class="space-y-4">
            <x-preview language="blade" :contents="$footerSlot">
                <livewire:documentation.form.upload.upload :model="6" />
            </x-preview>
            <p>
                You can use the <x-block>when-uploaded</x-block> parameter directly in the slot
                to <b>only render the slot as a file has been uploaded:</b>
            </p>
            <x-code language="blade" :contents="$footerSlotWhenUploaded" disable-copy />
        </div>
    </x-section>
    <x-section title="Validate Before Upload" anchor="upload-validate-before-upload" disable-copy>
        <div class="space-y-4">
            <p>
                You can perform validations on selected files before they are actually uploaded to the server.
            </p>
            <x-code language="blade" :contents="$before" disable-copy />
            <p>
                In this case, <x-block>files</x-block> will be an array of the files. You should return <x-block>false</x-block> to prevent the upload.
            </p>
        </div>
    </x-section>
    <x-section title="Events">
        <x-preview language="blade" :contents="$events">
            <livewire:documentation.form.upload.upload :model="7" />
        </x-preview>
    </x-section>
    <x-separator text="Static Mode" />
    <x-section title="Concept" anchor="static-concept" disable-copy>
        Although the Upload component was created to handle file uploads, it also allows you
        to display any type of file that already exists in the application, that is: files
        that were uploaded at another time. The main benefit of this usage format is that it
        allows people to view files, including preview images, and can choose to delete them.
    </x-section>
    <x-section title="Prepare the Usage" anchor="static-prepare-the-usage">
        <div class="space-y-4">
            <ul class="list-inside list-decimal">
                <li>
                    Use the Livewire component <x-block>mount</x-block> method to prepare and store
                    the files in a property that will be bind in the component Blade file:
                    <x-code :contents="$prepareStaticUsage" disable-copy />
                </li>
                <li>
                    Prepare the Blade file of the component:
                    <x-code language="blade" :contents="$bladeComponentForStaticUsage" disable-copy />
                </li>
                <li>
                    <u>If you intend to offer the option to delete files,</u> then the approach to deleting
                    files will be a little different from the used when file is uploading, for example:
                    <x-code :contents="$deletingFileInStaticUsage" />
                </li>
            </ul>
        </div>
    </x-section>
    <x-section title="Demonstration" anchor="static-demonstration" disable-copy>
        <x-preview>
            <livewire:documentation.form.upload.static />
        </x-preview>
    </x-section>
    <x-separator text="Async Mode" />
    <x-section title="Concept" new anchor="async-concept" disable-copy>
        <x-block>&lt;x-upload.async&gt;</x-block> slices each file in the browser and posts the pieces straight to a
        controller of your own, bypassing the Livewire upload pipeline, so a file no longer has to fit inside the PHP
        request limits. Files around 1 GB are the target. It shares nothing with <x-block>&lt;x-upload&gt;</x-block>
        beyond the namespace, and it works outside Livewire too.
    </x-section>
    <x-section title="Basic Usage" new anchor="async-basic-usage" description="route accepts a named route or a plain URL. Either wire:model or name is required.">
        <x-code language="blade" :contents="$asyncBasic" />
    </x-section>
    <x-section title="Multiple" new anchor="async-multiple">
        <x-code language="blade" :contents="$asyncMultiple" />
    </x-section>
    <x-section title="Manual" new anchor="async-manual" description="Stages the files and waits for the Send button. The footer slot replaces the built-in Send and Clear buttons.">
        <x-code language="blade" :contents="$asyncManual" />
    </x-section>
    <x-section title="Without Livewire" new anchor="async-without-livewire" description="The same array is rendered as hidden inputs, so a plain form submit carries it.">
        <x-code language="blade" :contents="$asyncNative" />
    </x-section>
    <x-section title="Bound Value" new anchor="async-bound-value" description="With multiple off, a single object or null. url is null when the destination disk has no public URL.">
        <x-code language="php" :contents="$asyncValue" />
    </x-section>
    <x-section title="Backend" new anchor="async-backend" description="The method is called once per chunk. Intermediate chunks answer 204; the last one assembles the file, validates it, stores it and answers 200.">
        <x-code language="php" :contents="$asyncController" />
        <x-warning warning title="directory is required" class="mt-4">
            Without it, and without a <x-block>store</x-block> callback, the handler throws instead of guessing a
            destination. A package-wide fallback would quietly pile every upload into one folder.
        </x-warning>
    </x-section>
    <x-section title="Backend Options" new anchor="async-backend-options">
        <x-table :headers="[
            ['index' => 'option', 'label' => 'Option'],
            ['index' => 'type', 'label' => 'Type'],
            ['index' => 'default', 'label' => 'Default'],
            ['index' => 'description', 'label' => 'Description'],
        ]" :rows="[
            ['option' => 'disk', 'type' => 'string', 'default' => 'config', 'description' => 'Destination disk. Any driver, including S3'],
            ['option' => 'directory', 'type' => 'string', 'default' => 'required', 'description' => 'Destination directory on that disk'],
            ['option' => 'rules', 'type' => 'array', 'default' => 'null', 'description' => 'Laravel rules applied to the assembled file, under the file key'],
            ['option' => 'store', 'type' => 'callable', 'default' => 'null', 'description' => 'Returns the final path, skipping the built-in move'],
            ['option' => 'authorize', 'type' => 'callable', 'default' => 'null', 'description' => 'Returning false aborts with 403'],
            ['option' => 'max_size', 'type' => 'int', 'default' => 'config', 'description' => 'Per-endpoint override of the megabyte ceiling'],
            ['option' => 'tmp_disk', 'type' => 'string', 'default' => 'config', 'description' => 'Staging disk. Must use the local driver'],
        ]">
            @interact('column_option', $row)
                <x-block>{{ $row['option'] }}</x-block>
            @endinteract
        </x-table>
    </x-section>
    <x-section title="Taking Over Persistence" new anchor="async-taking-over-persistence" description="Runs once per file, after the pieces are joined and validated. The returned path must exist on the disk named in disk.">
        <x-code language="php" :contents="$asyncStore" />
    </x-section>
    <x-section title="Guards" new anchor="async-guards" disable-copy>
        <div class="space-y-4">
            <p>
                <x-block>max-size</x-block> on the component is feedback for the user. The handler re-checks the declared
                size on every chunk and compares the assembled bytes at the end, and <x-block>rules</x-block> run against
                the real bytes rather than the mime the browser claimed. Route middleware stays yours;
                <x-block>authorize</x-block> sits on top of it, running on every chunk before anything is written.
            </p>
            <x-code language="php" :contents="$asyncAuthorize" />
        </div>
    </x-section>
    <x-section title="Cleaning Up" new anchor="async-cleaning-up" description="An upload that starts and never finishes leaves its pieces staged. Nothing else collects them. Finalized files are never touched.">
        <x-code language="php" :contents="$asyncClear" />
    </x-section>
    <x-section title="AlpineJS Events" new anchor="async-alpinejs-events">
        <x-code language="blade" :contents="$asyncEvents" />
        <x-table class="mt-4" :headers="[
            ['index' => 'event', 'label' => 'Event'],
            ['index' => 'when', 'label' => 'When'],
            ['index' => 'detail', 'label' => 'Detail'],
        ]" :rows="[
            ['event' => 'added', 'when' => 'File passed the client-side checks and entered the queue', 'detail' => '{ file }'],
            ['event' => 'rejected', 'when' => 'File blocked by accept, max-size or limit', 'detail' => '{ file, reason }'],
            ['event' => 'start', 'when' => 'Chunk loop began for a file', 'detail' => '{ file }'],
            ['event' => 'progress', 'when' => 'Per-file progress update', 'detail' => '{ file, progress }'],
            ['event' => 'success', 'when' => 'Backend accepted the file', 'detail' => '{ file, response }'],
            ['event' => 'error', 'when' => 'Definitive failure, retries exhausted', 'detail' => '{ file, error, status }'],
            ['event' => 'removed', 'when' => 'File removed from the grid', 'detail' => '{ file }'],
            ['event' => 'complete', 'when' => 'Whole queue finished, whatever the outcome', 'detail' => '{ files }'],
        ]">
            @interact('column_event', $row)
                <x-block>{{ $row['event'] }}</x-block>
            @endinteract
        </x-table>
    </x-section>
    <x-section title="Laravel Events" new anchor="async-laravel-events" description="For side effects: queueing a thumbnail, scanning, auditing. There is deliberately no per-chunk event.">
        <x-table :headers="[
            ['index' => 'event', 'label' => 'Event'],
            ['index' => 'when', 'label' => 'When'],
            ['index' => 'payload', 'label' => 'Payload'],
        ]" :rows="[
            ['event' => 'AsyncUploadStarted', 'when' => 'First chunk of a file landed', 'payload' => 'uuid, realName, mime, totalSize, totalChunks'],
            ['event' => 'AsyncUploadCompleted', 'when' => 'File assembled, validated and stored', 'payload' => 'response, disk, uuid'],
            ['event' => 'AsyncUploadFailed', 'when' => 'A guard, the rules or the integrity check rejected it', 'payload' => 'reason, uuid, realName, errors'],
        ]">
            @interact('column_event', $row)
                <x-block>{{ $row['event'] }}</x-block>
            @endinteract
        </x-table>
        <x-warning warning title="AsyncUploadCompleted is not the place to write a database row" class="mt-4">
            A finished upload is not a submitted form, and the user may still close the tab. That write belongs where the
            form is handled, reading the array the component synced out.
        </x-warning>
    </x-section>
    <x-section title="Configuration" new anchor="async-configuration" description="Under components.upload.async. Raising chunk_size requires raising the PHP limits with it, or every chunk is rejected before reaching Laravel.">
        <x-table :headers="[
            ['index' => 'setting', 'label' => 'Setting'],
            ['index' => 'default', 'label' => 'Default'],
            ['index' => 'description', 'label' => 'Description'],
        ]" :rows="[
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
        ]">
            @interact('column_setting', $row)
                <x-block>{{ $row['setting'] }}</x-block>
            @endinteract
        </x-table>
    </x-section>
</x-layout>
