<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Recruitment & ATS
    |--------------------------------------------------------------------------
    */

    'recruitment' => [

        'label' => 'Recruitment & ATS',

        'description' => 'Complete recruitment, hiring and applicant tracking system.',

        'group' => 'organization',

        'phase' => 1,

        'icon' => 'BriefcaseBusiness',

        'route' => '/recruitment',

        'enabled_by_default' => true,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 110,

        'is_system' => false,

        'is_premium' => false,

        'is_ai' => false,

        'is_unique' => false,

    ],

    /*
    |--------------------------------------------------------------------------
    | Onboarding
    |--------------------------------------------------------------------------
    */

    'onboarding' => [

        'label' => 'Onboarding',

        'description' => 'Employee onboarding workflow and joining process.',

        'group' => 'organization',

        'phase' => 1,

        'icon' => 'UserPlus',

        'route' => '/onboarding',

        'enabled_by_default' => true,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 120,

        'is_system' => false,

        'is_premium' => false,

        'is_ai' => false,

        'is_unique' => false,

    ],

    /*
    |--------------------------------------------------------------------------
    | Offboarding & Exit
    |--------------------------------------------------------------------------
    */

    'offboarding' => [

        'label' => 'Offboarding & Exit',

        'description' => 'Employee resignation, clearance and exit workflow.',

        'group' => 'organization',

        'phase' => 1,

        'icon' => 'LogOut',

        'route' => '/offboarding',

        'enabled_by_default' => true,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 130,

        'is_system' => false,

        'is_premium' => false,

        'is_ai' => false,

        'is_unique' => false,

    ],

    /*
    |--------------------------------------------------------------------------
    | Company Structure
    |--------------------------------------------------------------------------
    */

    'company' => [

        'label' => 'Company Structure',

        'description' => 'Organization hierarchy, branches and departments.',

        'group' => 'organization',

        'phase' => 1,

        'icon' => 'Building2',

        'route' => '/company',

        'enabled_by_default' => true,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 140,

        'is_system' => false,

        'is_premium' => false,

        'is_ai' => false,

        'is_unique' => false,

    ],

    /*
    |--------------------------------------------------------------------------
    | Multi Company Group Console
    |--------------------------------------------------------------------------
    */

    'multi_company' => [

        'label' => 'Multi Company Group Console',

        'description' => 'Manage multiple companies from one centralized console.',

        'group' => 'organization',

        'phase' => 2,

        'icon' => 'Network',

        'route' => '/multi-company',

        'enabled_by_default' => false,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 150,

        'is_system' => false,

        'is_premium' => true,

        'is_ai' => false,

        'is_unique' => true,

    ],

];