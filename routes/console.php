<?php

use App\Console\Commands\DeleteLivewireTemporaryUpload;
use Illuminate\Support\Facades\Schedule;

Schedule::command(DeleteLivewireTemporaryUpload::class)->hourly();

// Discards the chunks of async uploads that started and never finished.
Schedule::command('tallstackui:async-upload:clear')->hourly();
