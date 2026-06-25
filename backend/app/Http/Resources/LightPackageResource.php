<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LightPackageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'     => $this->id,
            'name'   => $this->name,
            'slug'   => $this->slug,

            'pricing' => [
                'monthly' => $this->price_monthly,
                'yearly'  => $this->price_yearly,
            ],
            'limits' => $this->limits['employees'] ?? null,
            'is_trial' => $this->is_trial,
            'status'   => [
                'value' => $this->status?->value,
                'label' => $this->status?->label(),
            ],

            'created_at' => $this->created_at?->format('Y-m-d'),
        ];
    }
}
