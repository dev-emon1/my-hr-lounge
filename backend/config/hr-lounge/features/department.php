<?php

return [

    'department' => [

        /*
        |--------------------------------------------------------------------------
        | Module Information
        |--------------------------------------------------------------------------
        */

        'label' => 'Department Management',

        'description' => 'Manage departments, hierarchy and organizational units.',

        'icon' => 'Building',

        'route' => '/departments',

        'group' => 'core',

        'version' => '1.0.0',

        'phase' => 1,

        'order' => 30,

        'enabled_by_default' => true,

        'package_toggle' => true,

        'sidebar' => true,

        'searchable' => true,

        'audit' => true,

        'activity_log' => true,

        'api' => true,

        'children' => [

            /*
            |--------------------------------------------------------------------------
            | Dashboard
            |--------------------------------------------------------------------------
            */

            'dashboard' => [

                'label' => 'Department Dashboard',

                'description' => 'Department overview dashboard.',

                'icon' => 'LayoutDashboard',

                'route' => '/departments',

                'permission_template' => 'read',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => false,

                'api' => true,

            ],

            /*
            |--------------------------------------------------------------------------
            | Departments
            |--------------------------------------------------------------------------
            */

            'departments' => [

                'label' => 'Departments',

                'description' => 'Manage company departments.',

                'icon' => 'Building2',

                'route' => '/departments/list',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'department_list' => [

                        'label' => 'Department List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/departments/list',

                        'api' => true,

                    ],

                    'department_profile' => [

                        'label' => 'Department Profile',

                        'permission_template' => 'read',

                        'icon' => 'Building',

                        'route' => '/departments/profile',

                        'api' => true,

                    ],

                    'department_history' => [

                        'label' => 'Department History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/departments/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Department Hierarchy
            |--------------------------------------------------------------------------
            */

            'hierarchy' => [

                'label' => 'Department Hierarchy',

                'description' => 'Manage hierarchical department structure.',

                'icon' => 'GitBranch',

                'route' => '/departments/hierarchy',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'organization_tree' => [

                        'label' => 'Organization Tree',

                        'permission_template' => 'read',

                        'icon' => 'Network',

                        'route' => '/departments/hierarchy/tree',

                        'api' => true,

                    ],

                    'hierarchy_management' => [

                        'label' => 'Hierarchy Management',

                        'permission_template' => 'crud',

                        'icon' => 'Workflow',

                        'route' => '/departments/hierarchy/manage',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Sub Departments
            |--------------------------------------------------------------------------
            */

            'sub_departments' => [

                'label' => 'Sub Departments',

                'description' => 'Manage sub departments.',

                'icon' => 'Folders',

                'route' => '/departments/sub-departments',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'sub_department_list' => [

                        'label' => 'Sub Department List',

                        'permission_template' => 'crud',

                        'icon' => 'FolderTree',

                        'route' => '/departments/sub-departments',

                        'api' => true,

                    ],

                    'parent_department_mapping' => [

                        'label' => 'Parent Department Mapping',

                        'permission_template' => 'crud',

                        'icon' => 'GitMerge',

                        'route' => '/departments/sub-departments/mapping',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Functional Units
            |--------------------------------------------------------------------------
            */

            'functional_units' => [

                'label' => 'Functional Units',

                'description' => 'Manage functional units within departments.',

                'icon' => 'Boxes',

                'route' => '/departments/functional-units',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'unit_list' => [

                        'label' => 'Functional Unit List',

                        'permission_template' => 'crud',

                        'icon' => 'Box',

                        'route' => '/departments/functional-units',

                        'api' => true,

                    ],

                    'unit_mapping' => [

                        'label' => 'Department Mapping',

                        'permission_template' => 'crud',

                        'icon' => 'Link',

                        'route' => '/departments/functional-units/mapping',

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | Department Heads
            |--------------------------------------------------------------------------
            */

            'department_heads' => [

                'label' => 'Department Heads',

                'description' => 'Manage department heads and reporting managers.',

                'icon' => 'UserCog',

                'route' => '/departments/heads',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'head_assignments' => [

                        'label' => 'Head Assignments',

                        'permission_template' => 'crud',

                        'icon' => 'UserCheck',

                        'route' => '/departments/heads',

                        'api' => true,

                    ],

                    'reporting_managers' => [

                        'label' => 'Reporting Managers',

                        'permission_template' => 'crud',

                        'icon' => 'Users',

                        'route' => '/departments/heads/reporting-managers',

                        'api' => true,

                    ],

                    'assignment_history' => [

                        'label' => 'Assignment History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/departments/heads/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Department Budget
            |--------------------------------------------------------------------------
            */

            'budget' => [

                'label' => 'Department Budget',

                'description' => 'Manage department budgets and allocations.',

                'icon' => 'Wallet',

                'route' => '/departments/budget',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'budget_list' => [

                        'label' => 'Budget List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/departments/budget',

                        'api' => true,

                    ],

                    'budget_allocation' => [

                        'label' => 'Budget Allocation',

                        'permission_template' => 'crud',

                        'icon' => 'Coins',

                        'route' => '/departments/budget/allocation',

                        'api' => true,

                    ],

                    'budget_history' => [

                        'label' => 'Budget History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/departments/budget/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Department Policies
            |--------------------------------------------------------------------------
            */

            'policies' => [

                'label' => 'Department Policies',

                'description' => 'Manage department specific policies.',

                'icon' => 'BookOpen',

                'route' => '/departments/policies',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'policy_library' => [

                        'label' => 'Policy Library',

                        'permission_template' => 'crud',

                        'icon' => 'Library',

                        'route' => '/departments/policies',

                        'api' => true,

                    ],

                    'policy_acknowledgement' => [

                        'label' => 'Policy Acknowledgement',

                        'permission_template' => 'read',

                        'icon' => 'ClipboardCheck',

                        'route' => '/departments/policies/acknowledgement',

                        'api' => true,

                    ],

                    'policy_history' => [

                        'label' => 'Policy History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/departments/policies/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Department Documents
            |--------------------------------------------------------------------------
            */

            'documents' => [

                'label' => 'Department Documents',

                'description' => 'Manage department documents and records.',

                'icon' => 'FolderOpen',

                'route' => '/departments/documents',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

            ],

            /*
            |--------------------------------------------------------------------------
            | Department Performance
            |--------------------------------------------------------------------------
            */

            'performance' => [

                'label' => 'Department Performance',

                'description' => 'Track department KPIs and performance.',

                'icon' => 'TrendingUp',

                'route' => '/departments/performance',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

            ],

            /*
            |--------------------------------------------------------------------------
            | Department Assets
            |--------------------------------------------------------------------------
            */

            'assets' => [

                'label' => 'Department Assets',

                'description' => 'Manage department assigned assets.',

                'icon' => 'Laptop',

                'route' => '/departments/assets',

                'permission_template' => 'read',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

            ],

            /*
            |--------------------------------------------------------------------------
            | Department Calendar
            |--------------------------------------------------------------------------
            */

            'calendar' => [

                'label' => 'Department Calendar',

                'description' => 'Department schedules and events.',

                'icon' => 'CalendarDays',

                'route' => '/departments/calendar',

                'permission_template' => 'read',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

            ],

            /*
            |--------------------------------------------------------------------------
            | Department Compliance
            |--------------------------------------------------------------------------
            */

            'compliance' => [

                'label' => 'Department Compliance',

                'description' => 'Manage department compliance requirements.',

                'icon' => 'ShieldCheck',

                'route' => '/departments/compliance',

                'permission_template' => 'crud',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

            ],
                        /*
            |--------------------------------------------------------------------------
            | Reports
            |--------------------------------------------------------------------------
            */

            'reports' => [

                'label' => 'Department Reports',

                'description' => 'Generate department reports and operational summaries.',

                'icon' => 'FileBarChart',

                'route' => '/departments/reports',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'department_report' => [

                        'label' => 'Department Report',

                        'permission_template' => 'read',

                        'icon' => 'Building2',

                        'route' => '/departments/reports/departments',

                        'api' => true,

                    ],

                    'head_report' => [

                        'label' => 'Department Head Report',

                        'permission_template' => 'read',

                        'icon' => 'UserCog',

                        'route' => '/departments/reports/heads',

                        'api' => true,

                    ],

                    'budget_report' => [

                        'label' => 'Budget Report',

                        'permission_template' => 'read',

                        'icon' => 'Wallet',

                        'route' => '/departments/reports/budget',

                        'api' => true,

                    ],

                    'performance_report' => [

                        'label' => 'Performance Report',

                        'permission_template' => 'read',

                        'icon' => 'TrendingUp',

                        'route' => '/departments/reports/performance',

                        'api' => true,

                    ],

                    'compliance_report' => [

                        'label' => 'Compliance Report',

                        'permission_template' => 'read',

                        'icon' => 'ShieldCheck',

                        'route' => '/departments/reports/compliance',

                        'api' => true,

                    ],

                    'asset_report' => [

                        'label' => 'Department Asset Report',

                        'permission_template' => 'read',

                        'icon' => 'Laptop',

                        'route' => '/departments/reports/assets',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Analytics
            |--------------------------------------------------------------------------
            */

            'analytics' => [

                'label' => 'Department Analytics',

                'description' => 'Department analytics and operational KPIs.',

                'icon' => 'ChartPie',

                'route' => '/departments/analytics',

                'permission_template' => 'read',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

            ],

            /*
            |--------------------------------------------------------------------------
            | Import
            |--------------------------------------------------------------------------
            */

            'import' => [

                'label' => 'Import Department Data',

                'description' => 'Bulk import department records.',

                'icon' => 'FileUp',

                'route' => '/departments/import',

                'permission_template' => 'import',

                'package_toggle' => true,

                'sidebar' => false,

                'searchable' => false,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

            ],

            /*
            |--------------------------------------------------------------------------
            | Export
            |--------------------------------------------------------------------------
            */

            'export' => [

                'label' => 'Export Department Data',

                'description' => 'Export department records.',

                'icon' => 'FileDown',

                'route' => '/departments/export',

                'permission_template' => 'export',

                'package_toggle' => true,

                'sidebar' => false,

                'searchable' => false,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

            ],

            /*
            |--------------------------------------------------------------------------
            | Bulk Operations
            |--------------------------------------------------------------------------
            */

            'bulk_operations' => [

                'label' => 'Bulk Operations',

                'description' => 'Perform bulk department operations.',

                'icon' => 'Boxes',

                'route' => '/departments/bulk',

                'permission_template' => 'bulk',

                'package_toggle' => true,

                'sidebar' => false,

                'searchable' => false,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

            ],

            /*
            |--------------------------------------------------------------------------
            | Notifications
            |--------------------------------------------------------------------------
            */

            'notifications' => [

                'label' => 'Department Notifications',

                'description' => 'Department related alerts and notifications.',

                'icon' => 'Bell',

                'route' => '/departments/notifications',

                'permission_template' => 'crud',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

            ],

            /*
            |--------------------------------------------------------------------------
            | AI Department Insights
            |--------------------------------------------------------------------------
            */

            'ai' => [

                'label' => 'AI Department Insights',

                'description' => 'AI powered department intelligence and workforce insights.',

                'icon' => 'Bot',

                'route' => '/departments/ai',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'department_health_score' => [

                        'label' => 'Department Health Score',

                        'permission_template' => 'read',

                        'icon' => 'HeartPulse',

                        'route' => '/departments/ai/health-score',

                        'api' => true,

                    ],

                    'workforce_distribution' => [

                        'label' => 'Workforce Distribution',

                        'permission_template' => 'read',

                        'icon' => 'Users',

                        'route' => '/departments/ai/workforce-distribution',

                        'api' => true,

                    ],

                    'resource_utilization' => [

                        'label' => 'Resource Utilization',

                        'permission_template' => 'read',

                        'icon' => 'ChartColumn',

                        'route' => '/departments/ai/resource-utilization',

                        'api' => true,

                    ],

                    'organizational_optimization' => [

                        'label' => 'Organizational Optimization',

                        'permission_template' => 'read',

                        'icon' => 'Sparkles',

                        'route' => '/departments/ai/optimization',

                        'api' => true,

                    ],

                    'department_insights_dashboard' => [

                        'label' => 'Department Insights Dashboard',

                        'permission_template' => 'read',

                        'icon' => 'Brain',

                        'route' => '/departments/ai/dashboard',

                        'api' => true,

                    ],

                ],

            ],

        ],

    ],

];