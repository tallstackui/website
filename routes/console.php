<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Schedule;
use App\Console\Commands\DeleteLivewireTemporaryUpload;

Schedule::command(DeleteLivewireTemporaryUpload::class)->hourly();

// Discards the chunks of async uploads that started and never finished.
Schedule::command('tallstackui:async-upload:clear')->hourly();
