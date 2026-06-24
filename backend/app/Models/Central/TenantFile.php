<?php

namespace App\Models\Central;

use App\Models\Central\Tenant;
use App\Models\User;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenantFile extends Model
{
    use HasFactory, HasUuids;

    protected $connection = 'pgsql';

    protected $fillable = [
        'tenant_id',
        'file_name',
        'file_path',
        'file_type',
        'file_size',
        'is_enabled',
        'uploaded_by',
        'uploaded_at',
    ];

    protected $casts = [
        'file_size' => 'integer',
        'is_enabled' => 'boolean',
        'uploaded_at' => 'datetime',
    ];

    // ── Relationships ──────────────────────────────────────────
    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function uploadedBy()
    {
        return $this->belongsTo(User::class, 'uploaded_by');
    }

    // ── Scopes ────────────────────────────────────────────────
    public function scopeEnabled($query)
    {
        return $query->where('is_enabled', true);
    }

    public function scopeByType($query, string $type)
    {
        return $query->where('file_type', $type);
    }
}