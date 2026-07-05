<?php

return [

    'branch' => [

        /*
        |--------------------------------------------------------------------------
        | Module Information
        |--------------------------------------------------------------------------
        */

        'label' => 'Branch Management',

        'description' => 'Manage company branches, offices and operational locations.',

        'icon' => 'Building2',

        'route' => '/branches',

        'group' => 'core',

        'version' => '1.0.0',

        'phase' => 1,

        'order' => 20,

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

                'label' => 'Branch Dashboard',

                'description' => 'Branch overview dashboard.',

                'icon' => 'LayoutDashboard',

                'route' => '/branches',

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
            | Branches
            |--------------------------------------------------------------------------
            */

            'branches' => [

                'label' => 'Branches',

                'description' => 'Manage company branches.',

                'icon' => 'Building',

                'route' => '/branches/list',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'branch_list' => [

                        'label' => 'Branch List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/branches/list',

                        'api' => true,

                    ],

                    'branch_profile' => [

                        'label' => 'Branch Profile',

                        'permission_template' => 'read',

                        'icon' => 'Building2',

                        'route' => '/branches/profile',

                        'api' => true,

                    ],

                    'branch_hierarchy' => [

                        'label' => 'Branch Hierarchy',

                        'permission_template' => 'read',

                        'icon' => 'GitBranch',

                        'route' => '/branches/hierarchy',

                        'api' => true,

                    ],

                    'branch_history' => [

                        'label' => 'Branch History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/branches/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Branch Types
            |--------------------------------------------------------------------------
            */

            'branch_types' => [

                'label' => 'Branch Types',

                'description' => 'Manage branch classifications.',

                'icon' => 'FolderTree',

                'route' => '/branches/types',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'type_list' => [

                        'label' => 'Type List',

                        'permission_template' => 'crud',

                        'icon' => 'Folder',

                        'route' => '/branches/types',

                        'api' => true,

                    ],

                    'branch_categories' => [

                        'label' => 'Branch Categories',

                        'permission_template' => 'crud',

                        'icon' => 'Tag',

                        'route' => '/branches/types/categories',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Regional Offices
            |--------------------------------------------------------------------------
            */

            'regional_offices' => [

                'label' => 'Regional Offices',

                'description' => 'Manage regional office structure.',

                'icon' => 'Globe',

                'route' => '/branches/regional',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'regional_list' => [

                        'label' => 'Regional Office List',

                        'permission_template' => 'crud',

                        'icon' => 'Map',

                        'route' => '/branches/regional',

                        'api' => true,

                    ],

                    'regional_structure' => [

                        'label' => 'Regional Structure',

                        'permission_template' => 'read',

                        'icon' => 'Network',

                        'route' => '/branches/regional/structure',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Branch Locations
            |--------------------------------------------------------------------------
            */

            'locations' => [

                'label' => 'Branch Locations',

                'description' => 'Manage branch addresses and locations.',

                'icon' => 'MapPinned',

                'route' => '/branches/locations',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'location_list' => [

                        'label' => 'Location List',

                        'permission_template' => 'crud',

                        'icon' => 'MapPin',

                        'route' => '/branches/locations',

                        'api' => true,

                    ],

                    'service_areas' => [

                        'label' => 'Service Areas',

                        'permission_template' => 'crud',

                        'icon' => 'MapPinned',

                        'route' => '/branches/locations/service-areas',

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | Cost Centers
            |--------------------------------------------------------------------------
            */

            'cost_centers' => [

                'label' => 'Cost Centers',

                'description' => 'Manage branch cost centers.',

                'icon' => 'Wallet',

                'route' => '/branches/cost-centers',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'cost_center_list' => [

                        'label' => 'Cost Center List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/branches/cost-centers',

                        'api' => true,

                    ],

                    'budget_allocation' => [

                        'label' => 'Budget Allocation',

                        'permission_template' => 'crud',

                        'icon' => 'Coins',

                        'route' => '/branches/cost-centers/budget',

                        'api' => true,

                    ],

                    'cost_center_history' => [

                        'label' => 'Cost Center History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/branches/cost-centers/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Working Calendar
            |--------------------------------------------------------------------------
            */

            'working_calendar' => [

                'label' => 'Working Calendar',

                'description' => 'Configure branch working days and office hours.',

                'icon' => 'CalendarDays',

                'route' => '/branches/working-calendar',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'working_days' => [

                        'label' => 'Working Days',

                        'permission_template' => 'crud',

                        'icon' => 'Calendar',

                        'route' => '/branches/working-calendar/days',

                        'api' => true,

                    ],

                    'office_hours' => [

                        'label' => 'Office Hours',

                        'permission_template' => 'crud',

                        'icon' => 'Clock3',

                        'route' => '/branches/working-calendar/hours',

                        'api' => true,

                    ],

                    'special_schedule' => [

                        'label' => 'Special Schedule',

                        'permission_template' => 'crud',

                        'icon' => 'CalendarRange',

                        'route' => '/branches/working-calendar/special',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Branch Policies
            |--------------------------------------------------------------------------
            */

            'policies' => [

                'label' => 'Branch Policies',

                'description' => 'Manage branch specific policies.',

                'icon' => 'BookOpen',

                'route' => '/branches/policies',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'policy_list' => [

                        'label' => 'Policy Library',

                        'permission_template' => 'crud',

                        'icon' => 'Library',

                        'route' => '/branches/policies',

                        'api' => true,

                    ],

                    'policy_acknowledgement' => [

                        'label' => 'Policy Acknowledgement',

                        'permission_template' => 'read',

                        'icon' => 'ClipboardCheck',

                        'route' => '/branches/policies/acknowledgement',

                        'api' => true,

                    ],

                    'policy_history' => [

                        'label' => 'Policy History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/branches/policies/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Branch Contacts
            |--------------------------------------------------------------------------
            */

            'contacts' => [

                'label' => 'Branch Contacts',

                'description' => 'Manage branch contact information.',

                'icon' => 'Phone',

                'route' => '/branches/contacts',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'contact_directory' => [

                        'label' => 'Contact Directory',

                        'permission_template' => 'crud',

                        'icon' => 'Contact',

                        'route' => '/branches/contacts',

                        'api' => true,

                    ],

                    'emergency_contacts' => [

                        'label' => 'Emergency Contacts',

                        'permission_template' => 'crud',

                        'icon' => 'PhoneCall',

                        'route' => '/branches/contacts/emergency',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Branch Documents
            |--------------------------------------------------------------------------
            */

            'documents' => [

                'label' => 'Branch Documents',

                'description' => 'Manage branch related documents.',

                'icon' => 'FolderOpen',

                'route' => '/branches/documents',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

            ],

            /*
            |--------------------------------------------------------------------------
            | Branch Assets
            |--------------------------------------------------------------------------
            */

            'assets' => [

                'label' => 'Branch Assets',

                'description' => 'Manage assets assigned to branches.',

                'icon' => 'Laptop',

                'route' => '/branches/assets',

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
            | Branch Facilities
            |--------------------------------------------------------------------------
            */

            'facilities' => [

                'label' => 'Branch Facilities',

                'description' => 'Manage branch facilities and amenities.',

                'icon' => 'Building',

                'route' => '/branches/facilities',

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
            | Branch Compliance
            |--------------------------------------------------------------------------
            */

            'compliance' => [

                'label' => 'Branch Compliance',

                'description' => 'Manage branch compliance and regulatory requirements.',

                'icon' => 'ShieldCheck',

                'route' => '/branches/compliance',

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

                'label' => 'Branch Reports',

                'description' => 'Generate branch reports and operational summaries.',

                'icon' => 'FileBarChart',

                'route' => '/branches/reports',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'branch_report' => [

                        'label' => 'Branch Report',

                        'permission_template' => 'read',

                        'icon' => 'Building2',

                        'route' => '/branches/reports/branches',

                        'api' => true,

                    ],

                    'location_report' => [

                        'label' => 'Location Report',

                        'permission_template' => 'read',

                        'icon' => 'MapPinned',

                        'route' => '/branches/reports/locations',

                        'api' => true,

                    ],

                    'cost_center_report' => [

                        'label' => 'Cost Center Report',

                        'permission_template' => 'read',

                        'icon' => 'Wallet',

                        'route' => '/branches/reports/cost-centers',

                        'api' => true,

                    ],

                    'working_calendar_report' => [

                        'label' => 'Working Calendar Report',

                        'permission_template' => 'read',

                        'icon' => 'CalendarDays',

                        'route' => '/branches/reports/working-calendar',

                        'api' => true,

                    ],

                    'compliance_report' => [

                        'label' => 'Compliance Report',

                        'permission_template' => 'read',

                        'icon' => 'ShieldCheck',

                        'route' => '/branches/reports/compliance',

                        'api' => true,

                    ],

                    'asset_report' => [

                        'label' => 'Branch Asset Report',

                        'permission_template' => 'read',

                        'icon' => 'Laptop',

                        'route' => '/branches/reports/assets',

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

                'label' => 'Branch Analytics',

                'description' => 'Branch performance analytics and KPIs.',

                'icon' => 'ChartPie',

                'route' => '/branches/analytics',

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

                'label' => 'Import Branch Data',

                'description' => 'Bulk import branch records.',

                'icon' => 'FileUp',

                'route' => '/branches/import',

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

                'label' => 'Export Branch Data',

                'description' => 'Export branch records.',

                'icon' => 'FileDown',

                'route' => '/branches/export',

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

                'description' => 'Perform bulk branch operations.',

                'icon' => 'Boxes',

                'route' => '/branches/bulk',

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

                'label' => 'Branch Notifications',

                'description' => 'Branch related alerts and notifications.',

                'icon' => 'Bell',

                'route' => '/branches/notifications',

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
            | AI Branch Insights
            |--------------------------------------------------------------------------
            */

            'ai' => [

                'label' => 'AI Branch Insights',

                'description' => 'AI powered branch intelligence and operational insights.',

                'icon' => 'Bot',

                'route' => '/branches/ai',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'branch_performance_score' => [

                        'label' => 'Branch Performance Score',

                        'permission_template' => 'read',

                        'icon' => 'Gauge',

                        'route' => '/branches/ai/performance-score',

                        'api' => true,

                    ],

                    'capacity_analysis' => [

                        'label' => 'Capacity Analysis',

                        'permission_template' => 'read',

                        'icon' => 'ChartColumn',

                        'route' => '/branches/ai/capacity-analysis',

                        'api' => true,

                    ],

                    'operational_risk_analysis' => [

                        'label' => 'Operational Risk Analysis',

                        'permission_template' => 'read',

                        'icon' => 'ShieldAlert',

                        'route' => '/branches/ai/risk-analysis',

                        'api' => true,

                    ],

                    'expansion_recommendations' => [

                        'label' => 'Expansion Recommendations',

                        'permission_template' => 'read',

                        'icon' => 'Sparkles',

                        'route' => '/branches/ai/expansion',

                        'api' => true,

                    ],

                    'branch_health_dashboard' => [

                        'label' => 'Branch Health Dashboard',

                        'permission_template' => 'read',

                        'icon' => 'Brain',

                        'route' => '/branches/ai/health-dashboard',

                        'api' => true,

                    ],

                ],

            ],

        ],

    ],

];