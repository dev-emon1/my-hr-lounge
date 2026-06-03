<?php

namespace App\Models\Central;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SuperAdminSession extends Model
{
    use HasUuids;

    protected $connection = 'pgsql';
    protected $table      = 'super_admin_sessions';
    public    $timestamps = false;

    protected $fillable = [
        'super_admin_id',
        'refresh_token_hash',
        'device_name',
        'device_type',
        'browser',
        'os',
        'ip_address',
        'is_suspicious',
        'last_active_at',
        'expires_at',
        'revoked_at',
        'created_at',
    ];

    protected $casts = [
        'is_suspicious'  => 'boolean',
        'last_active_at' => 'datetime',
        'expires_at'     => 'datetime',
        'revoked_at'     => 'datetime',
        'created_at'     => 'datetime',
    ];

    public function superAdmin(): BelongsTo
    {
        return $this->belongsTo(SuperAdmin::class);
    }

    public function isValid(): bool
    {
        return is_null($this->revoked_at)
            && $this->expires_at->isFuture();
    }

    public function revoke(): void
    {
        $this->update(['revoked_at' => now()]);
    }
}