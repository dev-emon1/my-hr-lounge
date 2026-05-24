<?php

namespace App\Enums;

enum UserStatusEnum: string
{
    case Active    = 'active';
    case Inactive  = 'inactive';
    case Locked    = 'locked';
    case Suspended = 'suspended';

    public function canLogin(): bool
    {
        return $this === self::Active;
    }
}