<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'company_name',
        'domain',
        'subdomain',
        'package_id',
        'branding',
        'features',
        'status',
        'suspended_at',
        'trial_ends_at',
    ];

    protected function casts(): array
    {
        return [
            'branding'     => 'array',
            'features'     => 'array',
            'suspended_at' => 'datetime',
            'trial_ends_at'=> 'datetime',
        ];
    }

    // ====================== RELATIONSHIPS ======================

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    public function subscriptions(): HasMany
    {
        return $this->hasMany(Subscription::class);
    }

    // ====================== ACTIVE SUBSCRIPTION ======================

    public function activeSubscription()
    {
        return $this->subscriptions()
                    ->where('status', 'active')
                    ->where(function ($q) {
                        $q->whereNull('end_date')
                          ->orWhere('end_date', '>=', now());
                    })
                    ->latest()
                    ->first();
    }

    public function isSubscriptionActive(): bool
    {
        $sub = $this->activeSubscription();
        return $sub !== null && in_array($sub->status, ['active', 'trial']);
    }

    // ====================== SCOPES ======================

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }
}