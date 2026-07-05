<?php

namespace App\Actions\Package;

use App\Models\Central\Package;

class CreatePackageAction
{
    /*
    |--------------------------------------------------------------------------
    | Create Package
    |--------------------------------------------------------------------------
    */

    public function execute(
        array $attributes
    ): Package {

        $package = Package::create([

            /*
            |--------------------------------------------------------------------------
            | Basic Information
            |--------------------------------------------------------------------------
            */

            'name' => $attributes['name'],
            'slug' => $attributes['slug'],
            'description' => $attributes['description'],

            /*
            |--------------------------------------------------------------------------
            | Pricing
            |--------------------------------------------------------------------------
            */

            'price_monthly' => $attributes['price_monthly'],
            'price_yearly' => $attributes['price_yearly'],

            /*
            |--------------------------------------------------------------------------
            | Package Builder
            |--------------------------------------------------------------------------
            */

            'modules' => $attributes['modules'],
            'limits' => $attributes['limits'],
            'integrations' => $attributes['integrations'],

            /*
            |--------------------------------------------------------------------------
            | Immutable Registry Snapshot
            |--------------------------------------------------------------------------
            */

            'registry_snapshot' => $attributes['registry_snapshot'],

            /*
            |--------------------------------------------------------------------------
            | Trial
            |--------------------------------------------------------------------------
            */

            'is_trial' => $attributes['is_trial'],
            'trial_period' => $attributes['trial_period'],

            /*
            |--------------------------------------------------------------------------
            | Status
            |--------------------------------------------------------------------------
            */

            'status' => $attributes['status'],

        ]);

        return $package->fresh();
    }
}