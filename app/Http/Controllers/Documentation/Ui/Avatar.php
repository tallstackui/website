<?php

namespace App\Http\Controllers\Documentation\Ui;

use App\Enums\Example;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class Avatar extends Controller
{
    public function __invoke(): View
    {
        $user = User::query()->first() ?? User::factory()->create();

        Auth::login($user);

        return view('documentation.ui.avatar', Example::Avatar->variables());
    }
}
