<?php

namespace App\Actions\Package;

use App\DTOs\Package\PackageBuilderData;
use Illuminate\Support\Str;

class NormalizePackageDataAction
{
    /**
     * Normalize Package Builder DTO.
     */
    public function execute(
        PackageBuilderData $dto
    ): array {

        return [

            /*
            |--------------------------------------------------------------------------
            | Basic Information
            |--------------------------------------------------------------------------
            */

            'name' => trim($dto->name),

            'slug' => filled($dto->slug)
                ? Str::slug($dto->slug)
                : Str::slug($dto->name),

            'description' => filled($dto->description)
                ? trim($dto->description)
                : null,

            /*
            |--------------------------------------------------------------------------
            | Pricing
            |--------------------------------------------------------------------------
            */

            'price_monthly' => (float) $dto->priceMonthly,

            'price_yearly' => (float) $dto->priceYearly,

            /*
            |--------------------------------------------------------------------------
            | Package Builder
            |--------------------------------------------------------------------------
            */

            'modules' => $dto->modules,

            'limits' => $dto->limits,

            'integrations' => $dto->integrations,

            /*
            |--------------------------------------------------------------------------
            | Trial
            |--------------------------------------------------------------------------
            */

            'is_trial' => (bool) $dto->isTrial,

            'trial_period' => $dto->trialPeriod,

            /*
            |--------------------------------------------------------------------------
            | Status
            |--------------------------------------------------------------------------
            */

            'status' => strtolower(trim($dto->status)),

        ];
    }
}