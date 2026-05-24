<?php

namespace App\Enums;

enum TenantStatusEnum: string
{
    case Trial     = 'trial';
    case Active    = 'active';
    case Suspended = 'suspended';
    case Cancelled = 'cancelled';

    public function isAccessible(): bool
    {
        return in_array($this, [self::Trial, self::Active]);
    }
}