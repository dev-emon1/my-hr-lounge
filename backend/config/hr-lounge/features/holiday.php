<?php

return [

    'holiday' => [

        /*
        |--------------------------------------------------------------------------
        | Module Information
        |--------------------------------------------------------------------------
        */

        'label' => 'Holiday Management',

        'description' => 'Manage company holidays, holiday calendars and holiday policies.',

        'icon' => 'CalendarHeart',

        'route' => '/holidays',

        'group' => 'core',

        'version' => '1.0.0',

        'phase' => 1,

        'order' => 50,

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

                'label' => 'Holiday Dashboard',

                'description' => 'Holiday management overview dashboard.',

                'icon' => 'LayoutDashboard',

                'route' => '/holidays',

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
            | Holiday Calendar
            |--------------------------------------------------------------------------
            */

            'holiday_calendar' => [

                'label' => 'Holiday Calendar',

                'description' => 'Manage holiday calendars.',

                'icon' => 'CalendarDays',

                'route' => '/holidays/calendar',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'calendar_list' => [

                        'label' => 'Calendar List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/holidays/calendar',

                        'api' => true,

                    ],

                    'calendar_years' => [

                        'label' => 'Holiday Years',

                        'permission_template' => 'crud',

                        'icon' => 'CalendarRange',

                        'route' => '/holidays/calendar/years',

                        'api' => true,

                    ],

                    'calendar_history' => [

                        'label' => 'Calendar History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/holidays/calendar/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Holiday Groups
            |--------------------------------------------------------------------------
            */

            'holiday_groups' => [

                'label' => 'Holiday Groups',

                'description' => 'Manage holiday groups for branches and companies.',

                'icon' => 'Folders',

                'route' => '/holidays/groups',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'group_list' => [

                        'label' => 'Holiday Group List',

                        'permission_template' => 'crud',

                        'icon' => 'FolderTree',

                        'route' => '/holidays/groups',

                        'api' => true,

                    ],

                    'group_assignment' => [

                        'label' => 'Group Assignment',

                        'permission_template' => 'crud',

                        'icon' => 'Link',

                        'route' => '/holidays/groups/assignment',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | National Holidays
            |--------------------------------------------------------------------------
            */

            'national_holidays' => [

                'label' => 'National Holidays',

                'description' => 'Manage official national holidays.',

                'icon' => 'Flag',

                'route' => '/holidays/national',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'national_list' => [

                        'label' => 'National Holiday List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/holidays/national',

                        'api' => true,

                    ],

                    'government_updates' => [

                        'label' => 'Government Updates',

                        'permission_template' => 'read',

                        'icon' => 'Bell',

                        'route' => '/holidays/national/updates',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Religious Holidays
            |--------------------------------------------------------------------------
            */

            'religious_holidays' => [

                'label' => 'Religious Holidays',

                'description' => 'Manage religious holiday calendars.',

                'icon' => 'Church',

                'route' => '/holidays/religious',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'religious_list' => [

                        'label' => 'Religious Holiday List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/holidays/religious',

                        'api' => true,

                    ],

                    'religious_categories' => [

                        'label' => 'Holiday Categories',

                        'permission_template' => 'crud',

                        'icon' => 'Tag',

                        'route' => '/holidays/religious/categories',

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | Regional Holidays
            |--------------------------------------------------------------------------
            */

            'regional_holidays' => [

                'label' => 'Regional Holidays',

                'description' => 'Manage regional and location specific holidays.',

                'icon' => 'MapPinned',

                'route' => '/holidays/regional',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'regional_list' => [

                        'label' => 'Regional Holiday List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/holidays/regional',

                        'api' => true,

                    ],

                    'regional_mapping' => [

                        'label' => 'Region Mapping',

                        'permission_template' => 'crud',

                        'icon' => 'GitBranch',

                        'route' => '/holidays/regional/mapping',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Company Holidays
            |--------------------------------------------------------------------------
            */

            'company_holidays' => [

                'label' => 'Company Holidays',

                'description' => 'Manage organization specific holidays.',

                'icon' => 'Building2',

                'route' => '/holidays/company',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'company_holiday_list' => [

                        'label' => 'Company Holiday List',

                        'permission_template' => 'crud',

                        'icon' => 'CalendarHeart',

                        'route' => '/holidays/company',

                        'api' => true,

                    ],

                    'branch_assignment' => [

                        'label' => 'Branch Assignment',

                        'permission_template' => 'crud',

                        'icon' => 'Building',

                        'route' => '/holidays/company/branches',

                        'api' => true,

                    ],

                    'department_assignment' => [

                        'label' => 'Department Assignment',

                        'permission_template' => 'crud',

                        'icon' => 'Users',

                        'route' => '/holidays/company/departments',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Optional Holidays
            |--------------------------------------------------------------------------
            */

            'optional_holidays' => [

                'label' => 'Optional Holidays',

                'description' => 'Manage optional and floating holidays.',

                'icon' => 'CalendarPlus',

                'route' => '/holidays/optional',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'optional_list' => [

                        'label' => 'Optional Holiday List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/holidays/optional',

                        'api' => true,

                    ],

                    'eligibility_rules' => [

                        'label' => 'Eligibility Rules',

                        'permission_template' => 'crud',

                        'icon' => 'ClipboardCheck',

                        'route' => '/holidays/optional/eligibility',

                        'api' => true,

                    ],

                    'selection_history' => [

                        'label' => 'Selection History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/holidays/optional/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Holiday Policies
            |--------------------------------------------------------------------------
            */

            'policies' => [

                'label' => 'Holiday Policies',

                'description' => 'Manage holiday policies and rules.',

                'icon' => 'BookOpen',

                'route' => '/holidays/policies',

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

                        'route' => '/holidays/policies',

                        'api' => true,

                    ],

                    'policy_assignment' => [

                        'label' => 'Policy Assignment',

                        'permission_template' => 'crud',

                        'icon' => 'Link',

                        'route' => '/holidays/policies/assignment',

                        'api' => true,

                    ],

                    'policy_history' => [

                        'label' => 'Policy History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/holidays/policies/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Holiday Exceptions
            |--------------------------------------------------------------------------
            */

            'exceptions' => [

                'label' => 'Holiday Exceptions',

                'description' => 'Manage exceptional holiday scenarios.',

                'icon' => 'TriangleAlert',

                'route' => '/holidays/exceptions',

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
            | Holiday Carry Forward Rules
            |--------------------------------------------------------------------------
            */

            'carry_forward_rules' => [

                'label' => 'Carry Forward Rules',

                'description' => 'Configure holiday carry forward rules.',

                'icon' => 'ArrowRightLeft',

                'route' => '/holidays/carry-forward',

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
            | Holiday Calendar Assignment
            |--------------------------------------------------------------------------
            */

            'calendar_assignment' => [

                'label' => 'Calendar Assignment',

                'description' => 'Assign holiday calendars to branches and employees.',

                'icon' => 'CalendarSync',

                'route' => '/holidays/calendar-assignment',

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
            | Holiday Compliance
            |--------------------------------------------------------------------------
            */

            'compliance' => [

                'label' => 'Holiday Compliance',

                'description' => 'Track holiday compliance and statutory requirements.',

                'icon' => 'ShieldCheck',

                'route' => '/holidays/compliance',

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

                'label' => 'Holiday Reports',

                'description' => 'Generate holiday reports and calendar summaries.',

                'icon' => 'FileBarChart',

                'route' => '/holidays/reports',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'holiday_calendar_report' => [

                        'label' => 'Holiday Calendar Report',

                        'permission_template' => 'read',

                        'icon' => 'CalendarDays',

                        'route' => '/holidays/reports/calendar',

                        'api' => true,

                    ],

                    'holiday_group_report' => [

                        'label' => 'Holiday Group Report',

                        'permission_template' => 'read',

                        'icon' => 'Folders',

                        'route' => '/holidays/reports/groups',

                        'api' => true,

                    ],

                    'company_holiday_report' => [

                        'label' => 'Company Holiday Report',

                        'permission_template' => 'read',

                        'icon' => 'Building2',

                        'route' => '/holidays/reports/company',

                        'api' => true,

                    ],

                    'optional_holiday_report' => [

                        'label' => 'Optional Holiday Report',

                        'permission_template' => 'read',

                        'icon' => 'CalendarPlus',

                        'route' => '/holidays/reports/optional',

                        'api' => true,

                    ],

                    'holiday_policy_report' => [

                        'label' => 'Holiday Policy Report',

                        'permission_template' => 'read',

                        'icon' => 'BookOpen',

                        'route' => '/holidays/reports/policies',

                        'api' => true,

                    ],

                    'holiday_compliance_report' => [

                        'label' => 'Holiday Compliance Report',

                        'permission_template' => 'read',

                        'icon' => 'ShieldCheck',

                        'route' => '/holidays/reports/compliance',

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

                'label' => 'Holiday Analytics',

                'description' => 'Holiday analytics and organizational insights.',

                'icon' => 'ChartPie',

                'route' => '/holidays/analytics',

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

                'label' => 'Import Holiday Data',

                'description' => 'Bulk import holiday calendars and records.',

                'icon' => 'FileUp',

                'route' => '/holidays/import',

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

                'label' => 'Export Holiday Data',

                'description' => 'Export holiday calendars and records.',

                'icon' => 'FileDown',

                'route' => '/holidays/export',

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

                'description' => 'Perform bulk holiday operations.',

                'icon' => 'Boxes',

                'route' => '/holidays/bulk',

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

                'label' => 'Holiday Notifications',

                'description' => 'Holiday alerts and notifications.',

                'icon' => 'Bell',

                'route' => '/holidays/notifications',

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
            | AI Holiday Insights
            |--------------------------------------------------------------------------
            */

            'ai' => [

                'label' => 'AI Holiday Insights',

                'description' => 'AI powered holiday planning and calendar intelligence.',

                'icon' => 'Bot',

                'route' => '/holidays/ai',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'holiday_utilization_analysis' => [

                        'label' => 'Holiday Utilization Analysis',

                        'permission_template' => 'read',

                        'icon' => 'ChartColumn',

                        'route' => '/holidays/ai/utilization',

                        'api' => true,

                    ],

                    'compliance_risk_analysis' => [

                        'label' => 'Compliance Risk Analysis',

                        'permission_template' => 'read',

                        'icon' => 'ShieldAlert',

                        'route' => '/holidays/ai/compliance-risk',

                        'api' => true,

                    ],

                    'holiday_trend_analysis' => [

                        'label' => 'Holiday Trend Analysis',

                        'permission_template' => 'read',

                        'icon' => 'TrendingUp',

                        'route' => '/holidays/ai/trends',

                        'api' => true,

                    ],

                    'smart_holiday_recommendations' => [

                        'label' => 'Smart Holiday Recommendations',

                        'permission_template' => 'read',

                        'icon' => 'Sparkles',

                        'route' => '/holidays/ai/recommendations',

                        'api' => true,

                    ],

                    'holiday_insights_dashboard' => [

                        'label' => 'Holiday Insights Dashboard',

                        'permission_template' => 'read',

                        'icon' => 'Brain',

                        'route' => '/holidays/ai/dashboard',

                        'api' => true,

                    ],

                ],

            ],

        ],

    ],

];