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
        // return parent::toArray($request);
        
        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
            'price_monthly' => $this->price_monthly,
            'price_yearly' => $this->price_yearly,
            'modules' => $this->modules,
            'limits' => $this->limits,
            'integrations' => $this->integrations,
            'is_active' => $this->is_active,
            'is_trial' => $this->is_trial,
            'trial_period' => $this->trial_period,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
