<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Employee Wellness & Engagement
    |--------------------------------------------------------------------------
    */

    'wellness' => [

        'label' => 'Employee Wellness & Engagement',

        'description' => 'Employee wellbeing, engagement, recognition and workplace happiness.',

        'group' => 'people',

        'phase' => 2,

        'icon' => 'Heart',

        'route' => '/wellness',

        'enabled_by_default' => false,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 210,

        'is_system' => false,

        'is_premium' => true,

        'is_ai' => false,

        'is_unique' => true,

    ],

    /*
    |--------------------------------------------------------------------------
    | AI HR Assistant
    |--------------------------------------------------------------------------
    */

    'ai_hr' => [

        'label' => 'AI HR Assistant',

        'description' => 'AI-powered HR assistant for employees, managers and HR teams.',

        'group' => 'people',

        'phase' => 2,

        'icon' => 'Bot',

        'route' => '/ai-assistant',

        'enabled_by_default' => false,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 220,

        'is_system' => false,

        'is_premium' => true,

        'is_ai' => true,

        'is_unique' => true,

    ],

    /*
    |--------------------------------------------------------------------------
    | Employee Self Service
    |--------------------------------------------------------------------------
    */

    'employee_self_service' => [

        'label' => 'Employee Self Service',

        'description' => 'Employee portal for profile, leave, attendance, payroll and documents.',

        'group' => 'people',

        'phase' => 1,

        'icon' => 'UserCircle',

        'route' => '/employee-self-service',

        'enabled_by_default' => true,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 230,

        'is_system' => false,

        'is_premium' => false,

        'is_ai' => false,

        'is_unique' => false,

    ],

    /*
    |--------------------------------------------------------------------------
    | Employee Directory
    |--------------------------------------------------------------------------
    */

    'employee_directory' => [

        'label' => 'Employee Directory',

        'description' => 'Company-wide searchable employee directory and organization chart.',

        'group' => 'people',

        'phase' => 1,

        'icon' => 'ContactRound',

        'route' => '/employee-directory',

        'enabled_by_default' => true,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 240,

        'is_system' => false,

        'is_premium' => false,

        'is_ai' => false,

        'is_unique' => false,

    ],

    /*
    |--------------------------------------------------------------------------
    | Employee Helpdesk
    |--------------------------------------------------------------------------
    */

    'employee_helpdesk' => [

        'label' => 'Employee Helpdesk',

        'description' => 'Employee support tickets, HR helpdesk and service requests.',

        'group' => 'people',

        'phase' => 2,

        'icon' => 'LifeBuoy',

        'route' => '/helpdesk',

        'enabled_by_default' => false,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 250,

        'is_system' => false,

        'is_premium' => true,

        'is_ai' => false,

        'is_unique' => false,

    ],

];