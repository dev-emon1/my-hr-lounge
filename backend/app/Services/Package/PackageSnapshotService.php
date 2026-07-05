<?php

namespace App\Services\Package;

use App\Services\RBAC\PermissionRegistryService;

class PackageSnapshotService
{
    public function __construct(
        protected PermissionRegistryService $registry,
    ) {}

    /*
    |--------------------------------------------------------------------------
    | Build Registry Snapshot
    |--------------------------------------------------------------------------
    */

    public function build(array $modules): array
    {
        return [

            /*
            |--------------------------------------------------------------------------
            | Snapshot Metadata
            |--------------------------------------------------------------------------
            */

            'registry_version' => config(
                'hr-lounge.registry.version',
                1
            ),

            'generated_at' => now()->toISOString(),

            /*
            |--------------------------------------------------------------------------
            | Modules
            |--------------------------------------------------------------------------
            */

            'modules' => $this->buildModules(
                $modules
            ),

        ];
    }

    /*
    |--------------------------------------------------------------------------
    | Build Modules
    |--------------------------------------------------------------------------
    */

    protected function buildModules(
        array $selectedModules
    ): array {

        $moduleRegistry = $this->registry->modules();

        $featureRegistry = $this->registry->features();

        $snapshot = [];

        foreach ($selectedModules as $moduleKey => $moduleData) {

            if (! isset($moduleRegistry[$moduleKey])) {
                continue;
            }

            $module = $moduleRegistry[$moduleKey];

            $snapshot[$moduleKey] = [

                'label' => $module['label'],

                'description' => $module['description'] ?? null,

                'group' => $module['group'] ?? null,

                'icon' => $module['icon'] ?? null,

                'route' => $module['route'] ?? null,

                'enabled' => (bool) ($moduleData['enabled'] ?? false),

                'features' => $this->buildFeatures(

                    moduleKey: $moduleKey,

                    selectedFeatures: $moduleData['features'] ?? [],

                    registry: $featureRegistry,

                ),

            ];
        }

        return $snapshot;
    }

    /*
    |--------------------------------------------------------------------------
    | Build Features
    |--------------------------------------------------------------------------
    */

    protected function buildFeatures(
        string $moduleKey,
        array $selectedFeatures,
        array $registry
    ): array {

        $features = [];

        foreach ($registry as $featureKey => $feature) {

            if (($feature['group'] ?? null) !== $moduleKey) {
                continue;
            }

            $template = $feature['permission_template'] ?? null;

            $features[$featureKey] = [

                'label' => $feature['label'],

                'description' => $feature['description'] ?? null,

                'icon' => $feature['icon'] ?? null,

                'route' => $feature['route'] ?? null,

                'enabled' => (bool) ($selectedFeatures[$featureKey] ?? false),

                'permission_template' => $template,

                'permissions' => $this->resolvePermissions(
                    $template
                ),

            ];
        }

        return $features;
    }

    /*
    |--------------------------------------------------------------------------
    | Resolve Permission Template
    |--------------------------------------------------------------------------
    */

    protected function resolvePermissions(
        ?string $template
    ): array {

        if (! $template) {
            return [];
        }

        $templates = $this->registry->templates();

        return $templates[$template]['actions'] ?? [];
    }
}