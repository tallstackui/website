<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

uses(TestCase::class, RefreshDatabase::class)->in('Feature');

function fakeTorchlight(): void
{
    Http::fake([
        'api.torchlight.dev/*' => Http::response([]),
    ]);
}
