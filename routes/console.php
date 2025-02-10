<?php

use App\Console\Commands\DeleteLivewireTemporaryUpload;
use Illuminate\Support\Facades\Schedule;
use Symfony\Component\Finder\Finder;

Schedule::command(DeleteLivewireTemporaryUpload::class)->everySecond();


\Illuminate\Support\Facades\Artisan::command('replace', function () {
    $directory = base_path('resources/views');
    $finder = new Finder();
    $finder->files()->in($directory)->name('*.blade.php');

    foreach ($finder as $file) {
        $content = file_get_contents($file->getRealPath());

        // Substituir <x-layout> por <x-layout :$content>
        $updatedContent = preg_replace('/<x-layout(.*?)>/', '<x-layout$1 :$content>', $content);

        if ($updatedContent !== $content) {
            file_put_contents($file->getRealPath(), $updatedContent);
            echo 'Updated: ' . $file->getRelativePathname() . PHP_EOL;
        }
    }

    echo "Processo concluído.\n";
});
