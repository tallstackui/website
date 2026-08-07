<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use TallStackUi\Http\AsyncUpload\Uploader;

class AsyncUploadDemoController
{
    use Uploader;

    /**
     * Backs the live preview on the Upload documentation page. Files land on a
     * throwaway disk that the scheduler wipes, so nothing here is durable.
     */
    public function __invoke(Request $request): JsonResponse|Response
    {
        return $this->upload($request, [
            'disk' => 'demo',
            'directory' => 'async-upload',
            'max_size' => 50,
            'rules' => ['file' => ['mimes:jpg,jpeg,png,webp,gif,pdf,zip']],
        ]);
    }
}
