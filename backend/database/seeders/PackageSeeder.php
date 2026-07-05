<?php

namespace Database\Seeders;

use App\Models\Central\Package;
use App\Services\Package\PackageSnapshotService;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    public function __construct(
        protected PackageSnapshotService $snapshot
    ) {}

    public function run(): void
    {
        $packages = config('hr-lounge.packages');

        foreach ($packages as $package) {

            /*
            |--------------------------------------------------------------------------
            | Resolve Modules
            |--------------------------------------------------------------------------
            */

            $modules = $this->resolveModules(
                $package['modules']
            );

            /*
            |--------------------------------------------------------------------------
            | Registry Snapshot
            |--------------------------------------------------------------------------
            */

            $snapshot = $this->snapshot->build(
                $modules
            );

            /*
            |--------------------------------------------------------------------------
            | Save
            |--------------------------------------------------------------------------
            */

            Package::updateOrCreate(

                [
                    'slug' => $package['slug'],
                ],

                [
                    'name' => $package['name'],

                    'description' => $package['description'],

                    'price_monthly' => $package['price_monthly'],

                    'price_yearly' => $package['price_yearly'],

                    'modules' => $modules,

                    'limits' => $package['limits'],

                    'integrations' => [],

                    'registry_snapshot' => $snapshot,

                    'is_trial' => $package['trial']['enabled'],

                    'trial_period' => $package['trial']['days'],

                    'status' => $package['status'],
                ]

            );

        }
    }
        /*
    |--------------------------------------------------------------------------
    | Resolve Package Modules
    |--------------------------------------------------------------------------
    */

    protected function resolveModules(
        array|string $enabledGroups
    ): array {

        /*
        |--------------------------------------------------------------------------
        | Registry
        |--------------------------------------------------------------------------
        */

        $registry = config('hr-lounge.modules');

        /*
        |--------------------------------------------------------------------------
        | Enterprise
        |--------------------------------------------------------------------------
        */

        if ($enabledGroups === '*') {

            return $this->enableAllModules(
                $registry
            );

        }

        /*
        |--------------------------------------------------------------------------
        | Build
        |--------------------------------------------------------------------------
        */

        $modules = [];

        foreach ($registry as $key => $module) {

            $modules[$key] = [

                'enabled' => in_array(

                    $module['group'],

                    $enabledGroups,

                    true

                ),

                'features' => [],

            ];

        }

        /*
        |--------------------------------------------------------------------------
        | Features
        |--------------------------------------------------------------------------
        */

        return $this->attachFeatures(
            $modules
        );

    }
       /*
    |--------------------------------------------------------------------------
    | Attach Features
    |--------------------------------------------------------------------------
    */

    protected function attachFeatures(
        array $modules
    ): array {

        $features = config('hr-lounge.features');

        foreach ($features as $featureKey => $feature) {

            $group = $feature['group'];

            if (! isset($modules[$group])) {
                continue;
            }

            $modules[$group]['features'][$featureKey] = [

                'enabled' => $modules[$group]['enabled'],

                'permissions' => [],

            ];

        }

        return $modules;
    }

    /*
    |--------------------------------------------------------------------------
    | Enable All Registered Modules
    |--------------------------------------------------------------------------
    */

    protected function enableAllModules(
        array $registry
    ): array {

        $modules = [];

        foreach ($registry as $key => $module) {

            $modules[$key] = [

                'enabled' => true,

                'features' => [],

            ];

        }

        return $this->attachFeatures(
            $modules
        );
    }
}