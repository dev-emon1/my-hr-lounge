<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PackageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'          => $this->id,
            'name'        => $this->name,
            'slug'        => $this->slug,
            'description' => $this->description,

            'pricing' => [
                'monthly' => $this->price_monthly,
                'yearly'  => $this->price_yearly,
            ],

            'is_trial'     => $this->is_trial,
            'trial_period' => $this->trial_period,

            'status' => [
                'value' => $this->status?->value,
                'label' => $this->status?->label(),
            ],

            'modules'      => $this->modules,
            'limits'       => $this->limits,
            'integrations' => $this->integrations,

            'created_at'   => $this->created_at?->toIso8601String(),
            'updated_at'   => $this->updated_at?->toIso8601String(),
        ];
    }
}
