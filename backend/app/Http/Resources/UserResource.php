<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'            => $this->id,
            'client_id'     => $this->client_id,
            'user_name'     => $this->user_name,
            'email'         => $this->email,
            'phone'         => $this->phone,
            'type'          => $this->type,
            'status'        => (bool) $this->status,
            'email_verified_at' => $this->email_verified_at?->toIso8601String(),
            'created_at'    => $this->created_at?->toIso8601String(),
            'updated_at'    => $this->updated_at?->toIso8601String(),

            // Relations
            'client'        => $this->whenLoaded('client', fn() => [
                'id'            => $this->client->id,
                'slug'            => $this->client->slug,
                'company_name'  => $this->client->company_name,
                'subdomain'     => $this->client->subdomain,
                'status'        => $this->client->status,
            ]),
        ];
    }
}
