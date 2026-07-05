<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Compensation Management
    |--------------------------------------------------------------------------
    */

    'compensation' => [

        'label' => 'Compensation Management',

        'description' => 'Manage salary structures, grades, increments, revisions and compensation planning.',

        'group' => 'finance',

        'phase' => 2,

        'icon' => 'BadgeDollarSign',

        'route' => '/compensation',

        'enabled_by_default' => false,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 510,

        'is_system' => false,

        'is_premium' => true,

        'is_ai' => false,

        'is_unique' => false,

    ],

    /*
    |--------------------------------------------------------------------------
    | Benefits Administration
    |--------------------------------------------------------------------------
    */

    'benefits' => [

        'label' => 'Benefits Administration',

        'description' => 'Manage employee benefits, insurance, allowances and welfare programs.',

        'group' => 'finance',

        'phase' => 2,

        'icon' => 'Gift',

        'route' => '/benefits',

        'enabled_by_default' => false,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 520,

        'is_system' => false,

        'is_premium' => true,

        'is_ai' => false,

        'is_unique' => false,

    ],

    /*
    |--------------------------------------------------------------------------
    | Tax Management
    |--------------------------------------------------------------------------
    */

    'tax' => [

        'label' => 'Tax Management',

        'description' => 'Manage income tax, statutory deductions and tax reporting.',

        'group' => 'finance',

        'phase' => 2,

        'icon' => 'ReceiptText',

        'route' => '/tax',

        'enabled_by_default' => false,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 530,

        'is_system' => false,

        'is_premium' => true,

        'is_ai' => false,

        'is_unique' => false,

    ],

    /*
    |--------------------------------------------------------------------------
    | Payroll Compliance
    |--------------------------------------------------------------------------
    */

    'payroll_compliance' => [

        'label' => 'Payroll Compliance',

        'description' => 'Ensure payroll compliance with local labor laws and statutory regulations.',

        'group' => 'finance',

        'phase' => 2,

        'icon' => 'ShieldCheck',

        'route' => '/payroll-compliance',

        'enabled_by_default' => false,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 540,

        'is_system' => false,

        'is_premium' => true,

        'is_ai' => false,

        'is_unique' => true,

    ],

    /*
    |--------------------------------------------------------------------------
    | Final Settlement
    |--------------------------------------------------------------------------
    */

    'final_settlement' => [

        'label' => 'Final Settlement',

        'description' => 'Generate employee full and final settlement after resignation or termination.',

        'group' => 'finance',

        'phase' => 2,

        'icon' => 'FileCheck',

        'route' => '/final-settlement',

        'enabled_by_default' => false,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 550,

        'is_system' => false,

        'is_premium' => true,

        'is_ai' => false,

        'is_unique' => false,

    ],

    /*
    |--------------------------------------------------------------------------
    | Budget & HR Cost Planning
    |--------------------------------------------------------------------------
    */

    'budget' => [

        'label' => 'Budget & HR Cost Planning',

        'description' => 'Plan HR budgets, manpower cost and salary forecasting.',

        'group' => 'finance',

        'phase' => 3,

        'icon' => 'ChartPie',

        'route' => '/budget',

        'enabled_by_default' => false,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 560,

        'is_system' => false,

        'is_premium' => true,

        'is_ai' => true,

        'is_unique' => true,

    ],

];