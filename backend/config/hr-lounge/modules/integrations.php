<?php

return [

    /*
    |--------------------------------------------------------------------------
    | API & Developer Platform
    |--------------------------------------------------------------------------
    */

    'api' => [

        'label' => 'API & Developer Platform',

        'description' => 'REST API, API keys, webhooks and developer tools.',

        'group' => 'integrations',

        'phase' => 2,

        'icon' => 'Code2',

        'route' => '/developer',

        'enabled_by_default' => false,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 810,

        'is_system' => false,

        'is_premium' => true,

        'is_ai' => false,

        'is_unique' => true,

    ],

    /*
    |--------------------------------------------------------------------------
    | Biometric Devices
    |--------------------------------------------------------------------------
    */

    'biometric' => [

        'label' => 'Biometric Devices',

        'description' => 'Connect biometric attendance devices like ZKTeco, eSSL and Suprema.',

        'group' => 'integrations',

        'phase' => 2,

        'icon' => 'Fingerprint',

        'route' => '/integrations/biometric',

        'enabled_by_default' => false,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 820,

        'is_system' => false,

        'is_premium' => true,

        'is_ai' => false,

        'is_unique' => false,

    ],

    /*
    |--------------------------------------------------------------------------
    | Email & SMS Gateway
    |--------------------------------------------------------------------------
    */

    'communication_gateway' => [

        'label' => 'Email & SMS Gateway',

        'description' => 'Configure email providers, SMS gateways and WhatsApp messaging.',

        'group' => 'integrations',

        'phase' => 2,

        'icon' => 'Mail',

        'route' => '/integrations/communication',

        'enabled_by_default' => false,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 830,

        'is_system' => false,

        'is_premium' => true,

        'is_ai' => false,

        'is_unique' => false,

    ],

    /*
    |--------------------------------------------------------------------------
    | Accounting Integration
    |--------------------------------------------------------------------------
    */

    'accounting' => [

        'label' => 'Accounting Integration',

        'description' => 'Integrate payroll with accounting software like Xero and QuickBooks.',

        'group' => 'integrations',

        'phase' => 3,

        'icon' => 'Calculator',

        'route' => '/integrations/accounting',

        'enabled_by_default' => false,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 840,

        'is_system' => false,

        'is_premium' => true,

        'is_ai' => false,

        'is_unique' => false,

    ],

    /*
    |--------------------------------------------------------------------------
    | Cloud Storage
    |--------------------------------------------------------------------------
    */

    'cloud_storage' => [

        'label' => 'Cloud Storage',

        'description' => 'Connect AWS S3, Google Drive, Dropbox and OneDrive.',

        'group' => 'integrations',

        'phase' => 3,

        'icon' => 'Cloud',

        'route' => '/integrations/storage',

        'enabled_by_default' => false,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 850,

        'is_system' => false,

        'is_premium' => true,

        'is_ai' => false,

        'is_unique' => false,

    ],

    /*
    |--------------------------------------------------------------------------
    | Marketplace
    |--------------------------------------------------------------------------
    */

    'marketplace' => [

        'label' => 'Integration Marketplace',

        'description' => 'Install and manage third-party HR Lounge extensions.',

        'group' => 'integrations',

        'phase' => 3,

        'icon' => 'Store',

        'route' => '/marketplace',

        'enabled_by_default' => false,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 860,

        'is_system' => false,

        'is_premium' => true,

        'is_ai' => true,

        'is_unique' => true,

    ],

];