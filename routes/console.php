<?php

use App\Console\Commands\DeleteLivewireTemporaryUpload;
use Illuminate\Support\Facades\Schedule;
use Symfony\Component\Finder\Finder;

Schedule::command(DeleteLivewireTemporaryUpload::class)->everySecond();

\Illuminate\Support\Facades\Artisan::command('replace', function () {
    $directory = base_path('tests/Feature');
    $finder = new Finder;
    $finder->files()->in($directory)->name('*.php');

    foreach ($finder as $file) {
        $content = file_get_contents($file->getRealPath());

        // Expressão regular para capturar os segmentos dentro de route('documentation.xxx.yyy')
        $updatedContent = preg_replace_callback("/route\('documentation\.([a-zA-Z0-9_.-]+)'\)/", function ($matches) {
            $segments = explode('.', $matches[1]);

            return "route('documentation', ['".implode("', '", $segments)."'])";
        }, $content);

        if ($updatedContent !== $content) {
            file_put_contents($file->getRealPath(), $updatedContent);
            echo 'Updated: '.$file->getRelativePathname().PHP_EOL;
        }
    }

    echo "Processo concluído.\n";
});
