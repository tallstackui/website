<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class DeleteLivewireTemporaryUpload extends Command
{
    protected $signature = 'livewire:delete-temporary-upload';

    protected $description = 'Delete the temporary upload folder of Livewire';

    public function handle(): void
    {
        Storage::deleteDirectory('livewire-tmp');

        if (app()->isProduction()) {
            return;
        }

        $this->components->info('The temporary upload folder of Livewire has been deleted.');
    }
}
