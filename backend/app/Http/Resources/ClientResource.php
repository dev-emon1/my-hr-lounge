<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ClientResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'            => $this->id,
            'slug'          => $this->slug,
            'company_name'  => $this->company_name,
            'domain'        => $this->domain,
            'subdomain'     => $this->subdomain,
            'status'        => $this->status,
            'trial_ends_at' => $this->trial_ends_at?->toIso8601String(),
            'suspended_at'  => $this->suspended_at?->toIso8601String(),
            'created_at'    => $this->created_at?->toIso8601String(),

            'package' => $this->whenLoaded('package', fn() => [
                'id'   => $this->package->id,
                'name' => $this->package->name,
                'price'=> $this->package->price,
            ]),

            'active_subscription' => $this->whenLoaded('activeSubscription', fn() => [
                'id'          => $this->activeSubscription->id,
                'status'      => $this->activeSubscription->status,
                'start_date'  => $this->activeSubscription->start_date,
                'end_date'    => $this->activeSubscription->end_date,
                'amount'      => $this->activeSubscription->amount,
            ]),

            'branding' => $this->branding,
            'features' => $this->features,
        ];
    }
}