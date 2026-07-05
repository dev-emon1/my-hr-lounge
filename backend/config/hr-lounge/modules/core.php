<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Employee Management
    |--------------------------------------------------------------------------
    */

    'employee' => [

        'label' => 'Employee Management',

        'description' => 'Employee profile, lifecycle and workforce management.',

        'group' => 'core',

        'phase' => 1,

        'icon' => 'Users',

        'route' => '/employees',

        'enabled_by_default' => true,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 10,

    ],

    /*
    |--------------------------------------------------------------------------
    | Leave Management
    |--------------------------------------------------------------------------
    */

    'leave' => [

        'label' => 'Leave Management',

        'description' => 'Leave requests, balances, holidays and approval workflow.',

        'group' => 'core',

        'phase' => 1,

        'icon' => 'CalendarDays',

        'route' => '/leave',

        'enabled_by_default' => true,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 20,

    ],

    /*
    |--------------------------------------------------------------------------
    | Attendance Management
    |--------------------------------------------------------------------------
    */

    'attendance' => [

        'label' => 'Attendance Management',

        'description' => 'Attendance, shifts, rostering, biometric and timesheets.',

        'group' => 'core',

        'phase' => 1,

        'icon' => 'Clock3',

        'route' => '/attendance',

        'enabled_by_default' => true,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 30,

    ],

    /*
    |--------------------------------------------------------------------------
    | Payroll & Salary
    |--------------------------------------------------------------------------
    */

    'payroll' => [

        'label' => 'Payroll & Salary',

        'description' => 'Payroll processing, salary, tax and statutory compliance.',

        'group' => 'core',

        'phase' => 1,

        'icon' => 'Wallet',

        'route' => '/payroll',

        'enabled_by_default' => true,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 40,

    ],

];