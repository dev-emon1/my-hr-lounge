<?php

namespace App\Services\RBAC;

class PermissionRegistryService
{
    /**
     * Registered modules.
     */
    public function modules(): array
    {
        return config('hr-lounge.modules', []);
    }

    /**
     * Registered feature registry.
     */
    public function features(): array
    {
        return config('hr-lounge.features', []);
    }

    /**
     * Permission templates.
     */
    public function templates(): array
    {
        return config('hr-lounge.permissions', []);
    }

    /**
     * Build full permission registry.
     */
    public function permissions(): array
    {
        $permissions = [];

        foreach ($this->features() as $moduleKey => $module) {

            $this->walk(

                moduleKey: $moduleKey,

                module: $module,

                path: [],

                permissions: $permissions

            );
        }

        return $permissions;
    }

    /**
     * Recursive Feature Walker.
     */
    protected function walk(
        string $moduleKey,
        array $module,
        array $path,
        array &$permissions
    ): void {

        foreach ($module['children'] ?? [] as $featureKey => $feature) {

            $currentPath = [...$path, $featureKey];

            if (isset($feature['permission_template'])) {

                $templateKey = $feature['permission_template'];

                $template = $this->templates()[$templateKey] ?? [];

                $actions = $template['actions'] ?? [];

                foreach ($actions as $action) {

                    $permissions[] = [

                        /*
                        |--------------------------------------------------------------------------
                        | Permission
                        |--------------------------------------------------------------------------
                        */

                        'permission' => implode('.', [

                            $moduleKey,

                            ...$currentPath,

                            $action,

                        ]),

                        /*
                        |--------------------------------------------------------------------------
                        | Module
                        |--------------------------------------------------------------------------
                        */

                        'module_key' => $moduleKey,

                        'module_label' => $this->modules()[$moduleKey]['label']
                            ?? ucfirst($moduleKey),

                        'module_group' => $this->modules()[$moduleKey]['group']
                            ?? null,

                        /*
                        |--------------------------------------------------------------------------
                        | Group
                        |--------------------------------------------------------------------------
                        */

                        'group_key' => $currentPath[0] ?? null,

                        'group_label' => $this->labelFromPath(
                            $module,
                            [$currentPath[0] ?? null]
                        ),

                        /*
                        |--------------------------------------------------------------------------
                        | Feature
                        |--------------------------------------------------------------------------
                        */

                        'feature_key' => $featureKey,

                        'feature_label' => $feature['label']
                            ?? ucfirst($featureKey),

                        'feature_description' => $feature['description']
                            ?? null,

                        /*
                        |--------------------------------------------------------------------------
                        | Action
                        |--------------------------------------------------------------------------
                        */

                        'action' => $action,

                        /*
                        |--------------------------------------------------------------------------
                        | Template
                        |--------------------------------------------------------------------------
                        */

                        'template_key' => $templateKey,

                        'template_label' => $template['label']
                            ?? null,

                        'template_description' => $template['description']
                            ?? null,

                        /*
                        |--------------------------------------------------------------------------
                        | UI Metadata
                        |--------------------------------------------------------------------------
                        */

                        'icon' => $feature['icon']
                            ?? null,

                        'route' => $feature['route']
                            ?? null,

                        'api' => $feature['api']
                            ?? false,

                        'sidebar' => $feature['sidebar']
                            ?? false,

                        'package_toggle' => $feature['package_toggle']
                            ?? false,

                        'reports' => $feature['reports']
                            ?? false,

                    ];
                }
            }

            if (!empty($feature['children'])) {

                $this->walk(

                    moduleKey: $moduleKey,

                    module: [

                        'children' => $feature['children']

                    ],

                    path: $currentPath,

                    permissions: $permissions

                );
            }
        }
    }

    /**
     * Resolve label from path.
     */
    protected function labelFromPath(array $module, array $path): ?string
    {
        $current = $module;

        foreach ($path as $segment) {

            if (!$segment) {
                continue;
            }

            if (!isset($current['children'][$segment])) {
                return null;
            }

            $current = $current['children'][$segment];
        }

        return $current['label'] ?? null;
    }

    /**
     * Get only permission names.
     */
    public function permissionNames(): array
    {
        return collect($this->permissions())

            ->pluck('permission')

            ->values()

            ->toArray();
    }

    /**
     * Group permissions by module.
     */
    public function grouped(): array
    {
        return collect($this->permissions())

            ->groupBy('module_key')

            ->toArray();
    }

    /**
     * Get permissions by module.
     */
    public function findByModule(string $module): array
    {
        return collect($this->permissions())

            ->where('module_key', $module)

            ->values()

            ->toArray();
    }

    /**
     * Get permissions by template.
     */
    public function findByTemplate(string $template): array
    {
        return collect($this->permissions())

            ->where('template_key', $template)

            ->values()

            ->toArray();
    }

    /**
     * Find single permission.
     */
    public function find(string $permission): ?array
    {
        return collect($this->permissions())

            ->firstWhere('permission', $permission);
    }
}