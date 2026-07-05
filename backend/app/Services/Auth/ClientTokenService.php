<?php

namespace App\Services\Auth;

use App\Models\User;

class ClientTokenService
{
    public function generate(User $user): string
    {
        // Old tokens remove
        $user->tokens()->delete();

        // Create new Sanctum token
        return $user
            ->createToken('client-token')
            ->plainTextToken;
    }
}