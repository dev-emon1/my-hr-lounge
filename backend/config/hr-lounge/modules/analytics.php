<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Reports & Analytics
    |--------------------------------------------------------------------------
    */

    'report' => [

        'label' => 'Reports & Analytics',

        'description' => 'Generate HR reports, dashboards and business insights.',

        'group' => 'analytics',

        'phase' => 1,

        'icon' => 'BarChart3',

        'route' => '/reports',

        'enabled_by_default' => true,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 710,

        'is_system' => false,

        'is_premium' => false,

        'is_ai' => false,

        'is_unique' => false,

    ],

    /*
    |--------------------------------------------------------------------------
    | Executive Dashboard
    |--------------------------------------------------------------------------
    */

    'dashboard' => [

        'label' => 'Executive Dashboard',

        'description' => 'Executive level HR dashboard with workforce KPIs and insights.',

        'group' => 'analytics',

        'phase' => 1,

        'icon' => 'LayoutDashboard',

        'route' => '/dashboard',

        'enabled_by_default' => true,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 720,

        'is_system' => false,

        'is_premium' => false,

        'is_ai' => false,

        'is_unique' => false,

    ],

    /*
    |--------------------------------------------------------------------------
    | Workforce Analytics
    |--------------------------------------------------------------------------
    */

    'workforce_analytics' => [

        'label' => 'Workforce Analytics',

        'description' => 'Analyze workforce demographics, turnover, hiring and retention trends.',

        'group' => 'analytics',

        'phase' => 2,

        'icon' => 'UsersRound',

        'route' => '/workforce-analytics',

        'enabled_by_default' => false,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 730,

        'is_system' => false,

        'is_premium' => true,

        'is_ai' => false,

        'is_unique' => false,

    ],

    /*
    |--------------------------------------------------------------------------
    | Payroll Analytics
    |--------------------------------------------------------------------------
    */

    'payroll_analytics' => [

        'label' => 'Payroll Analytics',

        'description' => 'Payroll trends, salary cost analysis and financial HR insights.',

        'group' => 'analytics',

        'phase' => 2,

        'icon' => 'ChartColumn',

        'route' => '/payroll-analytics',

        'enabled_by_default' => false,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 740,

        'is_system' => false,

        'is_premium' => true,

        'is_ai' => false,

        'is_unique' => false,

    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Report Builder
    |--------------------------------------------------------------------------
    */

    'report_builder' => [

        'label' => 'Custom Report Builder',

        'description' => 'Create custom reports with drag-and-drop report designer.',

        'group' => 'analytics',

        'phase' => 2,

        'icon' => 'TableProperties',

        'route' => '/report-builder',

        'enabled_by_default' => false,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 750,

        'is_system' => false,

        'is_premium' => true,

        'is_ai' => false,

        'is_unique' => true,

    ],

    /*
    |--------------------------------------------------------------------------
    | AI Analytics
    |--------------------------------------------------------------------------
    */

    'ai_analytics' => [

        'label' => 'AI Analytics',

        'description' => 'AI-powered predictive analytics, employee insights and HR forecasting.',

        'group' => 'analytics',

        'phase' => 3,

        'icon' => 'BrainCircuit',

        'route' => '/ai-analytics',

        'enabled_by_default' => false,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 760,

        'is_system' => false,

        'is_premium' => true,

        'is_ai' => true,

        'is_unique' => true,

    ],

];