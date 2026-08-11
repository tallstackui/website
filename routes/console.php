<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Schedule;
use TallStackUi\Console\AsyncUploadClearCommand;
use App\Console\Commands\DeleteLivewireTemporaryUpload;

Schedule::command(DeleteLivewireTemporaryUpload::class)->everyFiveMinutes();

// Discards the chunks of async uploads that started and never finished.
Schedule::command(AsyncUploadClearCommand::class)->everyFiveMinutes();
