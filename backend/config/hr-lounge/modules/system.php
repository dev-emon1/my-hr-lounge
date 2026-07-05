<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Role & Permission
    |--------------------------------------------------------------------------
    */

    'role' => [

        'label' => 'Role & Permission',

        'description' => 'Dynamic role, permission and access control management.',

        'group' => 'system',

        'phase' => 1,

        'icon' => 'Shield',

        'route' => '/roles',

        'enabled_by_default' => true,

        'package_toggle' => false,

        'sidebar' => true,

        'order' => 910,

        'is_system' => true,

        'is_premium' => false,

        'is_ai' => false,

        'is_unique' => false,

    ],

    /*
    |--------------------------------------------------------------------------
    | Company Settings
    |--------------------------------------------------------------------------
    */

    'company_settings' => [

        'label' => 'Company Settings',

        'description' => 'Manage company profile, branding, timezone and preferences.',

        'group' => 'system',

        'phase' => 1,

        'icon' => 'Building2',

        'route' => '/settings/company',

        'enabled_by_default' => true,

        'package_toggle' => false,

        'sidebar' => true,

        'order' => 920,

        'is_system' => true,

        'is_premium' => false,

        'is_ai' => false,

        'is_unique' => false,

    ],

    /*
    |--------------------------------------------------------------------------
    | Audit Logs
    |--------------------------------------------------------------------------
    */

    'audit' => [

        'label' => 'Audit Logs',

        'description' => 'Track every important activity across the HR system.',

        'group' => 'system',

        'phase' => 1,

        'icon' => 'History',

        'route' => '/audit-logs',

        'enabled_by_default' => true,

        'package_toggle' => false,

        'sidebar' => true,

        'order' => 930,

        'is_system' => true,

        'is_premium' => false,

        'is_ai' => false,

        'is_unique' => false,

    ],

    /*
    |--------------------------------------------------------------------------
    | Security Center
    |--------------------------------------------------------------------------
    */

    'security' => [

        'label' => 'Security Center',

        'description' => 'Password policy, MFA, login security and access monitoring.',

        'group' => 'system',

        'phase' => 2,

        'icon' => 'ShieldCheck',

        'route' => '/security',

        'enabled_by_default' => false,

        'package_toggle' => false,

        'sidebar' => true,

        'order' => 940,

        'is_system' => true,

        'is_premium' => true,

        'is_ai' => false,

        'is_unique' => false,

    ],

    /*
    |--------------------------------------------------------------------------
    | Backup & Restore
    |--------------------------------------------------------------------------
    */

    'backup' => [

        'label' => 'Backup & Restore',

        'description' => 'Database backup, restore and disaster recovery.',

        'group' => 'system',

        'phase' => 2,

        'icon' => 'DatabaseBackup',

        'route' => '/backup',

        'enabled_by_default' => false,

        'package_toggle' => false,

        'sidebar' => true,

        'order' => 950,

        'is_system' => true,

        'is_premium' => true,

        'is_ai' => false,

        'is_unique' => false,

    ],

    /*
    |--------------------------------------------------------------------------
    | Subscription Management
    |--------------------------------------------------------------------------
    */

    'subscription' => [

        'label' => 'Subscription Management',

        'description' => 'Manage subscription, billing cycle and package information.',

        'group' => 'system',

        'phase' => 1,

        'icon' => 'CreditCard',

        'route' => '/subscription',

        'enabled_by_default' => true,

        'package_toggle' => false,

        'sidebar' => true,

        'order' => 960,

        'is_system' => true,

        'is_premium' => false,

        'is_ai' => false,

        'is_unique' => false,

    ],

    /*
    |--------------------------------------------------------------------------
    | Localization
    |--------------------------------------------------------------------------
    */

    'localization' => [

        'label' => 'Localization',

        'description' => 'Language, timezone, currency and regional settings.',

        'group' => 'system',

        'phase' => 2,

        'icon' => 'Languages',

        'route' => '/localization',

        'enabled_by_default' => false,

        'package_toggle' => false,

        'sidebar' => true,

        'order' => 970,

        'is_system' => true,

        'is_premium' => true,

        'is_ai' => false,

        'is_unique' => false,

    ],

    /*
    |--------------------------------------------------------------------------
    | White Label
    |--------------------------------------------------------------------------
    */

    'white_label' => [

        'label' => 'White Label',

        'description' => 'Customize logo, branding, domain and application identity.',

        'group' => 'system',

        'phase' => 3,

        'icon' => 'Palette',

        'route' => '/white-label',

        'enabled_by_default' => false,

        'package_toggle' => false,

        'sidebar' => true,

        'order' => 980,

        'is_system' => true,

        'is_premium' => true,

        'is_ai' => false,

        'is_unique' => true,

    ],

    /*
    |--------------------------------------------------------------------------
    | System Health
    |--------------------------------------------------------------------------
    */

    'system_health' => [

        'label' => 'System Health',

        'description' => 'Monitor queues, cache, storage, services and server health.',

        'group' => 'system',

        'phase' => 2,

        'icon' => 'Activity',

        'route' => '/system-health',

        'enabled_by_default' => false,

        'package_toggle' => false,

        'sidebar' => true,

        'order' => 990,

        'is_system' => true,

        'is_premium' => true,

        'is_ai' => true,

        'is_unique' => true,

    ],

    /*
    |--------------------------------------------------------------------------
    | Maintenance Mode
    |--------------------------------------------------------------------------
    */

    'maintenance' => [

        'label' => 'Maintenance Mode',

        'description' => 'Enable or disable maintenance mode for the organization.',

        'group' => 'system',

        'phase' => 2,

        'icon' => 'Wrench',

        'route' => '/maintenance',

        'enabled_by_default' => false,

        'package_toggle' => false,

        'sidebar' => true,

        'order' => 1000,

        'is_system' => true,

        'is_premium' => true,

        'is_ai' => false,

        'is_unique' => false,

    ],

];