<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TenantResource extends JsonResource
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
            'slug' => $this->slug,
            'company_name' => $this->company_name,
            'owner_name' => $this->owner_name,
            'client_type' => $this->client_type,
            'address' => $this->address,
            'phone' => $this->phone,
            'email' => $this->email,
            'total_employees' => $this->total_employees,
            'employee_count' => $this->employee_count,
            'timezone' => $this->timezone,
            'country' => $this->country,
            'domain' => $this->domain,
            'settings' => $this->settings,
            'trial_ends_at' => $this->trial_ends_at,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'package' => $this->whenLoaded(
                'activeSubscription',
                function () {

                    $package = $this->activeSubscription?->package;

                    return $package ? [
                        'id' => $package->id,
                        'name' => $package->name,
                        'modules' => $this->getModulesWithAccess(),
                        'limits' => $package->limits,
                        'integrations' => $package->integrations,
                    ] : null;
                }
            ),
            'subscription' => $this->whenLoaded('activeSubscription', function () {
                return new SubscriptionResource($this->activeSubscription);
            }),
        ];
    }
}
