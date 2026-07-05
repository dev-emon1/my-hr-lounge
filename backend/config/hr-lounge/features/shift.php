<?php

return [

    'shift' => [

        /*
        |--------------------------------------------------------------------------
        | Module Information
        |--------------------------------------------------------------------------
        */

        'label' => 'Shift Management',

        'description' => 'Manage work shifts, scheduling, rotations and workforce planning.',

        'icon' => 'Clock3',

        'route' => '/shifts',

        'group' => 'core',

        'version' => '1.0.0',

        'phase' => 1,

        'order' => 60,

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

                'label' => 'Shift Dashboard',

                'description' => 'Shift management overview dashboard.',

                'icon' => 'LayoutDashboard',

                'route' => '/shifts',

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
            | Shift Management
            |--------------------------------------------------------------------------
            */

            'management' => [

                'label' => 'Shift Management',

                'description' => 'Create and manage employee shifts.',

                'icon' => 'Clock',

                'route' => '/shifts/management',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'shift_list' => [

                        'label' => 'Shift List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/shifts/management',

                        'api' => true,

                    ],

                    'shift_details' => [

                        'label' => 'Shift Details',

                        'permission_template' => 'read',

                        'icon' => 'ClipboardList',

                        'route' => '/shifts/management/details',

                        'api' => true,

                    ],

                    'shift_history' => [

                        'label' => 'Shift History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/shifts/management/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Shift Templates
            |--------------------------------------------------------------------------
            */

            'templates' => [

                'label' => 'Shift Templates',

                'description' => 'Manage reusable shift templates.',

                'icon' => 'Copy',

                'route' => '/shifts/templates',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'template_list' => [

                        'label' => 'Template List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/shifts/templates',

                        'api' => true,

                    ],

                    'template_categories' => [

                        'label' => 'Template Categories',

                        'permission_template' => 'crud',

                        'icon' => 'FolderTree',

                        'route' => '/shifts/templates/categories',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Shift Rotations
            |--------------------------------------------------------------------------
            */

            'rotations' => [

                'label' => 'Shift Rotations',

                'description' => 'Manage recurring shift rotations.',

                'icon' => 'RefreshCw',

                'route' => '/shifts/rotations',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'rotation_list' => [

                        'label' => 'Rotation List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/shifts/rotations',

                        'api' => true,

                    ],

                    'rotation_cycles' => [

                        'label' => 'Rotation Cycles',

                        'permission_template' => 'crud',

                        'icon' => 'Repeat',

                        'route' => '/shifts/rotations/cycles',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Shift Patterns
            |--------------------------------------------------------------------------
            */

            'patterns' => [

                'label' => 'Shift Patterns',

                'description' => 'Manage shift patterns and schedules.',

                'icon' => 'CalendarRange',

                'route' => '/shifts/patterns',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'pattern_list' => [

                        'label' => 'Pattern List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/shifts/patterns',

                        'api' => true,

                    ],

                    'weekly_patterns' => [

                        'label' => 'Weekly Patterns',

                        'permission_template' => 'crud',

                        'icon' => 'CalendarDays',

                        'route' => '/shifts/patterns/weekly',

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | Shift Assignments
            |--------------------------------------------------------------------------
            */

            'assignments' => [

                'label' => 'Shift Assignments',

                'description' => 'Assign shifts to employees, departments and branches.',

                'icon' => 'UserCheck',

                'route' => '/shifts/assignments',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'employee_assignments' => [

                        'label' => 'Employee Assignments',

                        'permission_template' => 'crud',

                        'icon' => 'Users',

                        'route' => '/shifts/assignments/employees',

                        'api' => true,

                    ],

                    'department_assignments' => [

                        'label' => 'Department Assignments',

                        'permission_template' => 'crud',

                        'icon' => 'Building',

                        'route' => '/shifts/assignments/departments',

                        'api' => true,

                    ],

                    'branch_assignments' => [

                        'label' => 'Branch Assignments',

                        'permission_template' => 'crud',

                        'icon' => 'Building2',

                        'route' => '/shifts/assignments/branches',

                        'api' => true,

                    ],

                    'assignment_history' => [

                        'label' => 'Assignment History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/shifts/assignments/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Break Policies
            |--------------------------------------------------------------------------
            */

            'break_policies' => [

                'label' => 'Break Policies',

                'description' => 'Configure employee break rules.',

                'icon' => 'Coffee',

                'route' => '/shifts/break-policies',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'break_policy_list' => [

                        'label' => 'Break Policy List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/shifts/break-policies',

                        'api' => true,

                    ],

                    'meal_breaks' => [

                        'label' => 'Meal Breaks',

                        'permission_template' => 'crud',

                        'icon' => 'UtensilsCrossed',

                        'route' => '/shifts/break-policies/meal-breaks',

                        'api' => true,

                    ],

                    'rest_breaks' => [

                        'label' => 'Rest Breaks',

                        'permission_template' => 'crud',

                        'icon' => 'Coffee',

                        'route' => '/shifts/break-policies/rest-breaks',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Overtime Rules
            |--------------------------------------------------------------------------
            */

            'overtime_rules' => [

                'label' => 'Overtime Rules',

                'description' => 'Configure overtime policies and calculations.',

                'icon' => 'ClockAlert',

                'route' => '/shifts/overtime',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'overtime_policy' => [

                        'label' => 'Overtime Policy',

                        'permission_template' => 'crud',

                        'icon' => 'ClipboardCheck',

                        'route' => '/shifts/overtime',

                        'api' => true,

                    ],

                    'overtime_rates' => [

                        'label' => 'Overtime Rates',

                        'permission_template' => 'crud',

                        'icon' => 'BadgeDollarSign',

                        'route' => '/shifts/overtime/rates',

                        'api' => true,

                    ],

                    'approval_rules' => [

                        'label' => 'Approval Rules',

                        'permission_template' => 'crud',

                        'icon' => 'ShieldCheck',

                        'route' => '/shifts/overtime/approval-rules',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Shift Calendar
            |--------------------------------------------------------------------------
            */

            'calendar' => [

                'label' => 'Shift Calendar',

                'description' => 'View and manage shift schedules in calendar format.',

                'icon' => 'CalendarDays',

                'route' => '/shifts/calendar',

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
            | Shift Exceptions
            |--------------------------------------------------------------------------
            */

            'exceptions' => [

                'label' => 'Shift Exceptions',

                'description' => 'Manage temporary shift exceptions.',

                'icon' => 'TriangleAlert',

                'route' => '/shifts/exceptions',

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
            | Shift Swap Requests
            |--------------------------------------------------------------------------
            */

            'swap_requests' => [

                'label' => 'Shift Swap Requests',

                'description' => 'Manage employee shift swap requests.',

                'icon' => 'RefreshCcw',

                'route' => '/shifts/swap-requests',

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
            | Shift Approval Workflow
            |--------------------------------------------------------------------------
            */

            'approval_workflow' => [

                'label' => 'Shift Approval Workflow',

                'description' => 'Configure shift approval workflows.',

                'icon' => 'Workflow',

                'route' => '/shifts/approval-workflow',

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
            | Workforce Availability
            |--------------------------------------------------------------------------
            */

            'workforce_availability' => [

                'label' => 'Workforce Availability',

                'description' => 'Monitor workforce availability for scheduling.',

                'icon' => 'UserRoundCheck',

                'route' => '/shifts/workforce-availability',

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
            | Reports
            |--------------------------------------------------------------------------
            */

            'reports' => [

                'label' => 'Shift Reports',

                'description' => 'Generate shift reports and workforce scheduling summaries.',

                'icon' => 'FileBarChart',

                'route' => '/shifts/reports',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'shift_report' => [

                        'label' => 'Shift Report',

                        'permission_template' => 'read',

                        'icon' => 'Clock3',

                        'route' => '/shifts/reports/shifts',

                        'api' => true,

                    ],

                    'assignment_report' => [

                        'label' => 'Assignment Report',

                        'permission_template' => 'read',

                        'icon' => 'UserCheck',

                        'route' => '/shifts/reports/assignments',

                        'api' => true,

                    ],

                    'overtime_report' => [

                        'label' => 'Overtime Report',

                        'permission_template' => 'read',

                        'icon' => 'ClockAlert',

                        'route' => '/shifts/reports/overtime',

                        'api' => true,

                    ],

                    'break_policy_report' => [

                        'label' => 'Break Policy Report',

                        'permission_template' => 'read',

                        'icon' => 'Coffee',

                        'route' => '/shifts/reports/break-policies',

                        'api' => true,

                    ],

                    'coverage_report' => [

                        'label' => 'Shift Coverage Report',

                        'permission_template' => 'read',

                        'icon' => 'CalendarRange',

                        'route' => '/shifts/reports/coverage',

                        'api' => true,

                    ],

                    'availability_report' => [

                        'label' => 'Workforce Availability Report',

                        'permission_template' => 'read',

                        'icon' => 'UserRoundCheck',

                        'route' => '/shifts/reports/workforce-availability',

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

                'label' => 'Shift Analytics',

                'description' => 'Shift analytics and workforce scheduling KPIs.',

                'icon' => 'ChartPie',

                'route' => '/shifts/analytics',

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

                'label' => 'Import Shift Data',

                'description' => 'Bulk import shifts and scheduling data.',

                'icon' => 'FileUp',

                'route' => '/shifts/import',

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

                'label' => 'Export Shift Data',

                'description' => 'Export shifts and scheduling data.',

                'icon' => 'FileDown',

                'route' => '/shifts/export',

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

                'description' => 'Perform bulk shift operations.',

                'icon' => 'Boxes',

                'route' => '/shifts/bulk',

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

                'label' => 'Shift Notifications',

                'description' => 'Shift related alerts and notifications.',

                'icon' => 'Bell',

                'route' => '/shifts/notifications',

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
            | AI Shift Optimization
            |--------------------------------------------------------------------------
            */

            'ai' => [

                'label' => 'AI Shift Optimization',

                'description' => 'AI powered workforce scheduling and shift optimization.',

                'icon' => 'Bot',

                'route' => '/shifts/ai',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'shift_coverage_analysis' => [

                        'label' => 'Shift Coverage Analysis',

                        'permission_template' => 'read',

                        'icon' => 'ChartColumn',

                        'route' => '/shifts/ai/coverage-analysis',

                        'api' => true,

                    ],

                    'overtime_cost_prediction' => [

                        'label' => 'Overtime Cost Prediction',

                        'permission_template' => 'read',

                        'icon' => 'BadgeDollarSign',

                        'route' => '/shifts/ai/overtime-cost',

                        'api' => true,

                    ],

                    'workforce_scheduling' => [

                        'label' => 'Workforce Scheduling Recommendations',

                        'permission_template' => 'read',

                        'icon' => 'Sparkles',

                        'route' => '/shifts/ai/workforce-scheduling',

                        'api' => true,

                    ],

                    'staffing_gap_analysis' => [

                        'label' => 'Staffing Gap Analysis',

                        'permission_template' => 'read',

                        'icon' => 'UsersRound',

                        'route' => '/shifts/ai/staffing-gap',

                        'api' => true,

                    ],

                    'shift_health_dashboard' => [

                        'label' => 'Shift Health Dashboard',

                        'permission_template' => 'read',

                        'icon' => 'Brain',

                        'route' => '/shifts/ai/dashboard',

                        'api' => true,

                    ],

                ],

            ],

        ],

    ],

];