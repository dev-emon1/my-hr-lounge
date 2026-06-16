<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SubscriptionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);

        return [
            'id' => $this->id,
            'tenant' => new TenantResource($this->whenLoaded('tenant')),
            'package' => new PackageResource($this->whenLoaded('package')),
            'billing_cycle' => $this->billing_cycle,
            'amount' => $this->amount,
            'status' => $this->status,
            'current_period_start' => $this->current_period_start,
            'current_period_end' => $this->current_period_end,
            'cancelled_at' => $this->cancelled_at,
            'created_at' => $this->created_at,
        ];
    }
}
