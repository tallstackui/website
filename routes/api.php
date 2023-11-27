<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::withoutMiddleware('throttle:api')
    ->get('/users', function () {
        return User::query()
            ->get()
            ->map(function (User $user) {
                return [
                    'id' => $user->id,
                    'name' => $user->name,
                ];
            })->toArray();
    })->name('api.users');
