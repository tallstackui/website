<?php

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::withoutMiddleware('throttle:api')
    ->get('/users', function (Request $request) {
        $selected = json_decode($request->get('selected', []), true);

        return User::query()
            ->when(
                $search = $request->get('search'),
                fn ($query) => $query->where('name', 'like', "%{$search}%")
            )
            ->when(! $search && $selected, function (Builder $query) use ($selected) {
                $query->whereIn('id', $selected)
                    ->orWhere(function (Builder $query) use ($selected) {
                        $query->whereNotIn('id', $selected)
                            ->orderBy('created_at');
                    });
            })
            ->limit(10)
            ->get()
            ->map(fn (User $user) => $user->only('id', 'name'));
    })->name('api.users');
