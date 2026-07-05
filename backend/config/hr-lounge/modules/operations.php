<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Asset Management
    |--------------------------------------------------------------------------
    */

    'asset' => [

        'label' => 'Asset Management',

        'description' => 'Manage company assets, allocation, return, maintenance and lifecycle.',

        'group' => 'operations',

        'phase' => 1,

        'icon' => 'Package',

        'route' => '/assets',

        'enabled_by_default' => true,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 410,

        'is_system' => false,

        'is_premium' => false,

        'is_ai' => false,

        'is_unique' => false,

    ],

    /*
    |--------------------------------------------------------------------------
    | Document Management
    |--------------------------------------------------------------------------
    */

    'document' => [

        'label' => 'Document Management',

        'description' => 'Manage employee documents, policies, certificates and digital records.',

        'group' => 'operations',

        'phase' => 1,

        'icon' => 'FileText',

        'route' => '/documents',

        'enabled_by_default' => true,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 420,

        'is_system' => false,

        'is_premium' => false,

        'is_ai' => false,

        'is_unique' => false,

    ],

    /*
    |--------------------------------------------------------------------------
    | Expense & Claims
    |--------------------------------------------------------------------------
    */

    'expense' => [

        'label' => 'Expense & Claims',

        'description' => 'Employee expense reimbursement, travel claims and approvals.',

        'group' => 'operations',

        'phase' => 1,

        'icon' => 'Receipt',

        'route' => '/expenses',

        'enabled_by_default' => true,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 430,

        'is_system' => false,

        'is_premium' => false,

        'is_ai' => false,

        'is_unique' => false,

    ],

    /*
    |--------------------------------------------------------------------------
    | Loan & Advance
    |--------------------------------------------------------------------------
    */

    'loan' => [

        'label' => 'Loan & Advance',

        'description' => 'Employee loan, salary advance and repayment management.',

        'group' => 'operations',

        'phase' => 1,

        'icon' => 'Landmark',

        'route' => '/loans',

        'enabled_by_default' => true,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 440,

        'is_system' => false,

        'is_premium' => false,

        'is_ai' => false,

        'is_unique' => false,

    ],

    /*
    |--------------------------------------------------------------------------
    | Visitor Management
    |--------------------------------------------------------------------------
    */

    'visitor' => [

        'label' => 'Visitor Management',

        'description' => 'Visitor registration, appointments, check-in and security logs.',

        'group' => 'operations',

        'phase' => 2,

        'icon' => 'UserRoundSearch',

        'route' => '/visitors',

        'enabled_by_default' => false,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 450,

        'is_system' => false,

        'is_premium' => true,

        'is_ai' => false,

        'is_unique' => false,

    ],

    /*
    |--------------------------------------------------------------------------
    | Helpdesk & Service Desk
    |--------------------------------------------------------------------------
    */

    'helpdesk' => [

        'label' => 'Helpdesk & Service Desk',

        'description' => 'Internal HR support tickets, service requests and issue tracking.',

        'group' => 'operations',

        'phase' => 2,

        'icon' => 'LifeBuoy',

        'route' => '/helpdesk',

        'enabled_by_default' => false,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 460,

        'is_system' => false,

        'is_premium' => true,

        'is_ai' => false,

        'is_unique' => false,

    ],

    /*
    |--------------------------------------------------------------------------
    | Workflow Engine
    |--------------------------------------------------------------------------
    */

    'workflow' => [

        'label' => 'Workflow Engine',

        'description' => 'Dynamic workflow, approval process and automation engine.',

        'group' => 'operations',

        'phase' => 2,

        'icon' => 'Workflow',

        'route' => '/workflow',

        'enabled_by_default' => false,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 470,

        'is_system' => true,

        'is_premium' => true,

        'is_ai' => false,

        'is_unique' => true,

    ],

];