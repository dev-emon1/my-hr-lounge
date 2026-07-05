<?php

namespace App\Actions\Package;

use App\Services\RBAC\PermissionRegistryService;
use Illuminate\Validation\ValidationException;

class ValidatePackageModulesAction
{
    public function __construct(
        protected PermissionRegistryService $registry,
    ) {}

    /*
    |--------------------------------------------------------------------------
    | Validate Package Builder Payload
    |--------------------------------------------------------------------------
    */

    public function execute(array $modules): void
    {
        if (empty($modules)) {
            return;
        }

        $moduleRegistry = $this->registry->modules();

        $featureRegistry = $this->registry->features();

        foreach ($modules as $moduleKey => $moduleData) {

            /*
            |--------------------------------------------------------------------------
            | Validate Module
            |--------------------------------------------------------------------------
            */

            if (! isset($moduleRegistry[$moduleKey])) {

                throw ValidationException::withMessages([
                    'modules' => [
                        "Unknown module [{$moduleKey}]",
                    ],
                ]);
            }

            /*
            |--------------------------------------------------------------------------
            | Validate Module Enabled Flag
            |--------------------------------------------------------------------------
            */

            if (
                isset($moduleData['enabled']) &&
                ! is_bool($moduleData['enabled'])
            ) {

                throw ValidationException::withMessages([
                    'modules' => [
                        "Module [{$moduleKey}] enabled must be boolean.",
                    ],
                ]);
            }

            /*
            |--------------------------------------------------------------------------
            | Validate Features
            |--------------------------------------------------------------------------
            */

            foreach (($moduleData['features'] ?? []) as $featureKey => $enabled) {

                if (! isset($featureRegistry[$featureKey])) {

                    throw ValidationException::withMessages([
                        'modules' => [
                            "Unknown feature [{$featureKey}]",
                        ],
                    ]);
                }

                /*
                |--------------------------------------------------------------------------
                | Feature belongs to module?
                |--------------------------------------------------------------------------
                */

                if (
                    ($featureRegistry[$featureKey]['group'] ?? null)
                    !==
                    $moduleKey
                ) {

                    throw ValidationException::withMessages([
                        'modules' => [
                            "Feature [{$featureKey}] does not belong to module [{$moduleKey}].",
                        ],
                    ]);
                }

                /*
                |--------------------------------------------------------------------------
                | Feature Enabled Flag
                |--------------------------------------------------------------------------
                */

                if (! is_bool($enabled)) {

                    throw ValidationException::withMessages([
                        'modules' => [
                            "Feature [{$featureKey}] must be boolean.",
                        ],
                    ]);
                }
            }
        }
    }
}