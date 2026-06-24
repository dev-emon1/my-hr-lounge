<?php

namespace App\Models\Central;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Subscription extends Model
{
    use HasUuids;

    protected $connection = 'pgsql';

    protected $fillable = [
        'tenant_id',
        'package_id',
        'billing_cycle',
        'amount',
        'status',
        'current_period_start',
        'current_period_end',
        'cancelled_at',
    ];

    protected $casts = [
        'current_period_start' => 'datetime',
        'current_period_end'   => 'datetime',
        'cancelled_at'         => 'datetime',
        'amount'               => 'decimal:2',
    ];

    // public function isActive(): bool
    // {
    //     return $this->status === 'active';
    // }

    public function scopeActive($query)
    {
        return $query->where('status', 'active')
            ->where('current_period_end', '>', now());
    }

    // ── Relationships ──────────────────────────────────────────
    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
