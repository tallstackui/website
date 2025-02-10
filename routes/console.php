<?php

use App\Console\Commands\DeleteLivewireTemporaryUpload;
use Illuminate\Support\Facades\Schedule;

Schedule::command(DeleteLivewireTemporaryUpload::class)->everySecond();
