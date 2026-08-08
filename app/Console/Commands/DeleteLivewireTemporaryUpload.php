<?php

declare(strict_types=1);

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class DeleteLivewireTemporaryUpload extends Command
{
    protected $signature = 'livewire:delete-temporary-upload';

    protected $description = 'Delete the temporary upload folders of Livewire and of the async upload live preview';

    public function handle(): void
    {
        Storage::deleteDirectory('livewire-tmp');

        Storage::disk('demo')->deleteDirectory('async-upload');

        if (app()->isProduction()) {
            return;
        }

        $this->components->info('The temporary upload folders have been deleted.');
    }
}
