<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'client_id',
        'user_name',
        'email',
        'phone',
        'type',
        'status',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // ====================== RELATIONSHIPS ======================

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    // Alias for Jetstream compatibility (if needed)
    public function currentTeam()
    {
        return $this->client;
    }

    // ====================== SCOPES ======================

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }

    public function scopeOfType($query, string $type)
    {
        return $query->where('type', $type);
    }

    // ====================== HELPERS ======================

    public function belongsToClient(Client $client): bool
    {
        return $this->client_id === $client->id;
    }

    public function isSuperAdmin(): bool
    {
        return $this->type === 'super_admin';
    }

    public function isAdmin(): bool
    {
        return in_array($this->type, ['super_admin', 'admin']);
    }

    // Revoke all tokens (multi-device logout)
    public function revokeAllTokens(): void
    {
        $this->tokens()->delete();
    }
}
