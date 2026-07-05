<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PackageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray(Request $request): array
    {
        return [

            /*
            |--------------------------------------------------------------------------
            | Identity
            |--------------------------------------------------------------------------
            */

            'id' => $this->id,

            'name' => $this->name,

            'slug' => $this->slug,

            'description' => $this->description,

            /*
            |--------------------------------------------------------------------------
            | Pricing
            |--------------------------------------------------------------------------
            */

            'pricing' => [

                'monthly' => $this->price_monthly,

                'yearly' => $this->price_yearly,

            ],

            /*
            |--------------------------------------------------------------------------
            | Trial
            |--------------------------------------------------------------------------
            */

            'trial' => [

                'enabled' => (bool) $this->is_trial,

                'period' => $this->trial_period,

            ],

            /*
            |--------------------------------------------------------------------------
            | Status
            |--------------------------------------------------------------------------
            */

            'status' => [

                'value' => is_object($this->status)
                    ? $this->status->value
                    : $this->status,

                'label' => method_exists($this->status, 'label')
                    ? $this->status->label()
                    : ucfirst((string) $this->status),

            ],

            /*
            |--------------------------------------------------------------------------
            | Package Builder
            |--------------------------------------------------------------------------
            */

            'modules' => $this->modules ?? [],

            'limits' => $this->limits ?? [],

            'integrations' => $this->integrations ?? [],

            /*
            |--------------------------------------------------------------------------
            | Registry Snapshot
            |--------------------------------------------------------------------------
            */

            'registry_snapshot' => $this->registry_snapshot,

            /*
            |--------------------------------------------------------------------------
            | Timestamps
            |--------------------------------------------------------------------------
            */

            'created_at' => $this->created_at?->toIso8601String(),

            'updated_at' => $this->updated_at?->toIso8601String(),

        ];
    }
}