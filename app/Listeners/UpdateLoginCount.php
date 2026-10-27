<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use App\Models\LoginHistory;

class UpdateLoginCount
{
    public function handle(Login $event): void
    {
        LoginHistory::create([
            'user_id' => $event->user->id,
            'logged_in_at' => now(),
        ]);
    }
}
