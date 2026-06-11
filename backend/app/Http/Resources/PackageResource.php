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
            'max_employees' => $this->max_employees,
            'max_admins' => $this->max_admins,
            'modules' => $this->features,
            'is_active' => $this->is_active,
        ];
    }
}
