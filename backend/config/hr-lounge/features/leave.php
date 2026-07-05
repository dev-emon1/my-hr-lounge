<?php

return [

    'leave' => [

        /*
        |--------------------------------------------------------------------------
        | Module Information
        |--------------------------------------------------------------------------
        */

        'label' => 'Leave Management',

        'description' => 'Complete employee leave management system.',

        'icon' => 'CalendarClock',

        'route' => '/leave',

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

                'label' => 'Leave Dashboard',

                'description' => 'Leave overview, statistics and pending requests.',

                'icon' => 'LayoutDashboard',

                'route' => '/leave',

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
            | Leave Types
            |--------------------------------------------------------------------------
            */

            'leave_types' => [

                'label' => 'Leave Types',

                'description' => 'Create and manage leave types.',

                'icon' => 'CalendarPlus',

                'route' => '/leave/types',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    /*
                    |--------------------------------------------------------------------------
                    | Leave Type List
                    |--------------------------------------------------------------------------
                    */

                    'list' => [

                        'label' => 'Leave Type List',

                        'description' => 'View all leave types.',

                        'icon' => 'List',

                        'route' => '/leave/types',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Leave Rules
                    |--------------------------------------------------------------------------
                    */

                    'rules' => [

                        'label' => 'Leave Rules',

                        'description' => 'Configure leave rules for each leave type.',

                        'icon' => 'Settings2',

                        'route' => '/leave/types/rules',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Leave Eligibility
                    |--------------------------------------------------------------------------
                    */

                    'eligibility' => [

                        'label' => 'Leave Eligibility',

                        'description' => 'Configure eligibility for each leave type.',

                        'icon' => 'BadgeCheck',

                        'route' => '/leave/types/eligibility',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Leave Accrual Rules
                    |--------------------------------------------------------------------------
                    */

                    'accrual_rules' => [

                        'label' => 'Leave Accrual Rules',

                        'description' => 'Configure leave accrual and earning rules.',

                        'icon' => 'TrendingUp',

                        'route' => '/leave/types/accrual',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Leave Policies
            |--------------------------------------------------------------------------
            */

            'leave_policies' => [

                'label' => 'Leave Policies',

                'description' => 'Manage organization leave policies.',

                'icon' => 'Shield',

                'route' => '/leave/policies',

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
            | Leave Balance
            |--------------------------------------------------------------------------
            */

            'leave_balance' => [

                'label' => 'Leave Balance',

                'description' => 'Manage employee leave balances.',

                'icon' => 'WalletCards',

                'route' => '/leave/balance',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    /*
                    |--------------------------------------------------------------------------
                    | Balance Overview
                    |--------------------------------------------------------------------------
                    */

                    'overview' => [

                        'label' => 'Balance Overview',

                        'description' => 'View employee leave balances.',

                        'icon' => 'PieChart',

                        'route' => '/leave/balance',

                        'permission_template' => 'read',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Leave Allocation
                    |--------------------------------------------------------------------------
                    */

                    'allocation' => [

                        'label' => 'Leave Allocation',

                        'description' => 'Allocate leave balance to employees.',

                        'icon' => 'CirclePlus',

                        'route' => '/leave/balance/allocation',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Leave Adjustment
                    |--------------------------------------------------------------------------
                    */

                    'adjustment' => [

                        'label' => 'Leave Adjustment',

                        'description' => 'Increase or decrease employee leave balance.',

                        'icon' => 'SlidersHorizontal',

                        'route' => '/leave/balance/adjustment',

                        'permission_template' => 'approval',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Carry Forward
                    |--------------------------------------------------------------------------
                    */

                    'carry_forward' => [

                        'label' => 'Carry Forward',

                        'description' => 'Carry forward unused leave balance.',

                        'icon' => 'ArrowRight',

                        'route' => '/leave/balance/carry-forward',

                        'permission_template' => 'approval',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Leave Expiry
                    |--------------------------------------------------------------------------
                    */

                    'expiry' => [

                        'label' => 'Leave Expiry',

                        'description' => 'Configure leave expiration rules.',

                        'icon' => 'CalendarX2',

                        'route' => '/leave/balance/expiry',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Leave Ledger
                    |--------------------------------------------------------------------------
                    */

                    'ledger' => [

                        'label' => 'Leave Ledger',

                        'description' => 'View complete leave transaction history.',

                        'icon' => 'BookOpen',

                        'route' => '/leave/balance/ledger',

                        'permission_template' => 'read',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Balance History
                    |--------------------------------------------------------------------------
                    */

                    'history' => [

                        'label' => 'Balance History',

                        'description' => 'View leave balance history.',

                        'icon' => 'History',

                        'route' => '/leave/balance/history',

                        'permission_template' => 'read',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Leave Calendar
            |--------------------------------------------------------------------------
            */

            'leave_calendar' => [

                'label' => 'Leave Calendar',

                'description' => 'Organization leave calendar.',

                'icon' => 'CalendarDays',

                'route' => '/leave/calendar',

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
            | Leave Requests
            |--------------------------------------------------------------------------
            */

            'leave_requests' => [

                'label' => 'Leave Requests',

                'description' => 'Manage employee leave requests and approval workflow.',

                'icon' => 'ClipboardList',

                'route' => '/leave/requests',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    /*
                    |--------------------------------------------------------------------------
                    | Apply Leave
                    |--------------------------------------------------------------------------
                    */

                    'apply_leave' => [

                        'label' => 'Apply Leave',

                        'description' => 'Submit a new leave application.',

                        'icon' => 'CalendarPlus',

                        'route' => '/leave/requests/apply',

                        'permission_template' => 'create',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => false,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Pending Requests
                    |--------------------------------------------------------------------------
                    */

                    'pending_requests' => [

                        'label' => 'Pending Requests',

                        'description' => 'View pending leave requests.',

                        'icon' => 'Hourglass',

                        'route' => '/leave/requests/pending',

                        'permission_template' => 'read',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Leave Approval
                    |--------------------------------------------------------------------------
                    */

                    'approval' => [

                        'label' => 'Leave Approval',

                        'description' => 'Approve or reject leave requests.',

                        'icon' => 'BadgeCheck',

                        'route' => '/leave/requests/approval',

                        'permission_template' => 'approval',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Leave Cancellation
                    |--------------------------------------------------------------------------
                    */

                    'cancellation' => [

                        'label' => 'Leave Cancellation',

                        'description' => 'Cancel approved or pending leave requests.',

                        'icon' => 'CircleX',

                        'route' => '/leave/requests/cancel',

                        'permission_template' => 'approval',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Leave Rejection
                    |--------------------------------------------------------------------------
                    */

                    'rejection' => [

                        'label' => 'Leave Rejection',

                        'description' => 'Reject leave requests with reason.',

                        'icon' => 'Ban',

                        'route' => '/leave/requests/reject',

                        'permission_template' => 'approval',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Recall Request
                    |--------------------------------------------------------------------------
                    */

                    'recall' => [

                        'label' => 'Recall Request',

                        'description' => 'Recall submitted leave request before approval.',

                        'icon' => 'Undo2',

                        'route' => '/leave/requests/recall',

                        'permission_template' => 'approval',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Attachments
                    |--------------------------------------------------------------------------
                    */

                    'attachments' => [

                        'label' => 'Attachments',

                        'description' => 'Upload supporting documents for leave.',

                        'icon' => 'Paperclip',

                        'route' => '/leave/requests/attachments',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => false,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Leave History
                    |--------------------------------------------------------------------------
                    */

                    'history' => [

                        'label' => 'Leave History',

                        'description' => 'View employee leave history.',

                        'icon' => 'History',

                        'route' => '/leave/requests/history',

                        'permission_template' => 'read',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Team Leave Calendar
                    |--------------------------------------------------------------------------
                    */

                    'team_calendar' => [

                        'label' => 'Team Leave Calendar',

                        'description' => 'View team leave schedule.',

                        'icon' => 'CalendarRange',

                        'route' => '/leave/requests/team-calendar',

                        'permission_template' => 'read',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => false,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Delegation
                    |--------------------------------------------------------------------------
                    */

                    'delegation' => [

                        'label' => 'Delegation',

                        'description' => 'Assign temporary work delegation during leave.',

                        'icon' => 'UsersRound',

                        'route' => '/leave/requests/delegation',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | Compensatory Leave (Comp Off)
            |--------------------------------------------------------------------------
            */

            'compensatory_leave' => [

                'label' => 'Compensatory Leave',

                'description' => 'Manage compensatory leave earned through overtime or holidays.',

                'icon' => 'RefreshCcw',

                'route' => '/leave/compensatory',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'requests' => [

                        'label' => 'Comp Off Requests',

                        'permission_template' => 'approval',

                        'icon' => 'ClipboardList',

                        'route' => '/leave/compensatory/requests',

                        'api' => true,

                    ],

                    'approval' => [

                        'label' => 'Comp Off Approval',

                        'permission_template' => 'approval',

                        'icon' => 'BadgeCheck',

                        'route' => '/leave/compensatory/approval',

                        'api' => true,

                    ],

                    'balance' => [

                        'label' => 'Comp Off Balance',

                        'permission_template' => 'read',

                        'icon' => 'WalletCards',

                        'route' => '/leave/compensatory/balance',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Leave Encashment
            |--------------------------------------------------------------------------
            */

            'leave_encashment' => [

                'label' => 'Leave Encashment',

                'description' => 'Manage leave encashment requests and approvals.',

                'icon' => 'Banknote',

                'route' => '/leave/encashment',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'requests' => [

                        'label' => 'Encashment Requests',

                        'permission_template' => 'approval',

                        'icon' => 'ClipboardList',

                        'route' => '/leave/encashment/requests',

                        'api' => true,

                    ],

                    'approval' => [

                        'label' => 'Encashment Approval',

                        'permission_template' => 'approval',

                        'icon' => 'BadgeCheck',

                        'route' => '/leave/encashment/approval',

                        'api' => true,

                    ],

                    'history' => [

                        'label' => 'Encashment History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/leave/encashment/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Holiday Integration
            |--------------------------------------------------------------------------
            */

            'holiday_integration' => [

                'label' => 'Holiday Integration',

                'description' => 'Integrate leave rules with holidays and weekends.',

                'icon' => 'CalendarHeart',

                'route' => '/leave/holiday-integration',

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
            | Sandwich Leave Rules
            |--------------------------------------------------------------------------
            */

            'sandwich_leave' => [

                'label' => 'Sandwich Leave Rules',

                'description' => 'Configure sandwich leave calculation rules.',

                'icon' => 'Layers3',

                'route' => '/leave/sandwich',

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
            | Leave Conflict Detection
            |--------------------------------------------------------------------------
            */

            'leave_conflict_detection' => [

                'label' => 'Leave Conflict Detection',

                'description' => 'Detect leave conflicts within teams and departments.',

                'icon' => 'TriangleAlert',

                'route' => '/leave/conflicts',

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
            | Blackout Dates
            |--------------------------------------------------------------------------
            */

            'blackout_dates' => [

                'label' => 'Blackout Dates',

                'description' => 'Configure restricted leave periods.',

                'icon' => 'CalendarX2',

                'route' => '/leave/blackout-dates',

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
            | Leave Reports
            |--------------------------------------------------------------------------
            */

            'reports' => [

                'label' => 'Leave Reports',

                'description' => 'Generate leave reports and summaries.',

                'icon' => 'FileBarChart',

                'route' => '/leave/reports',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'leave_summary_report' => [

                        'label' => 'Leave Summary Report',

                        'permission_template' => 'read',

                        'icon' => 'ChartColumn',

                        'route' => '/leave/reports/summary',

                        'api' => true,

                    ],

                    'employee_leave_report' => [

                        'label' => 'Employee Leave Report',

                        'permission_template' => 'read',

                        'icon' => 'Users',

                        'route' => '/leave/reports/employee',

                        'api' => true,

                    ],

                    'department_leave_report' => [

                        'label' => 'Department Leave Report',

                        'permission_template' => 'read',

                        'icon' => 'Building',

                        'route' => '/leave/reports/department',

                        'api' => true,

                    ],

                    'leave_balance_report' => [

                        'label' => 'Leave Balance Report',

                        'permission_template' => 'read',

                        'icon' => 'WalletCards',

                        'route' => '/leave/reports/balance',

                        'api' => true,

                    ],

                    'leave_encashment_report' => [

                        'label' => 'Leave Encashment Report',

                        'permission_template' => 'read',

                        'icon' => 'Banknote',

                        'route' => '/leave/reports/encashment',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Leave Analytics
            |--------------------------------------------------------------------------
            */

            'analytics' => [

                'label' => 'Leave Analytics',

                'description' => 'Analyze leave trends and KPIs.',

                'icon' => 'ChartPie',

                'route' => '/leave/analytics',

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
            | Import Leave
            |--------------------------------------------------------------------------
            */

            'import' => [

                'label' => 'Import Leave',

                'description' => 'Import leave balances and leave data.',

                'icon' => 'FileUp',

                'route' => '/leave/import',

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
            | Export Leave
            |--------------------------------------------------------------------------
            */

            'export' => [

                'label' => 'Export Leave',

                'description' => 'Export leave data and reports.',

                'icon' => 'FileDown',

                'route' => '/leave/export',

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

                'description' => 'Perform bulk leave operations.',

                'icon' => 'Boxes',

                'route' => '/leave/bulk',

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

                'label' => 'Leave Notifications',

                'description' => 'Manage leave reminders and notifications.',

                'icon' => 'Bell',

                'route' => '/leave/notifications',

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
            | AI Leave Insights
            |--------------------------------------------------------------------------
            */

            'ai' => [

                'label' => 'AI Leave Insights',

                'description' => 'AI powered leave analysis and recommendations.',

                'icon' => 'Bot',

                'route' => '/leave/ai',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'leave_forecast' => [

                        'label' => 'Leave Forecast',

                        'permission_template' => 'read',

                        'icon' => 'Brain',

                        'route' => '/leave/ai/forecast',

                        'api' => true,

                    ],

                    'leave_pattern_analysis' => [

                        'label' => 'Leave Pattern Analysis',

                        'permission_template' => 'read',

                        'icon' => 'ChartSpline',

                        'route' => '/leave/ai/patterns',

                        'api' => true,

                    ],

                    'leave_abuse_detection' => [

                        'label' => 'Leave Abuse Detection',

                        'permission_template' => 'read',

                        'icon' => 'ShieldAlert',

                        'route' => '/leave/ai/abuse-detection',

                        'api' => true,

                    ],

                    'staffing_recommendation' => [

                        'label' => 'Staffing Recommendation',

                        'permission_template' => 'read',

                        'icon' => 'Sparkles',

                        'route' => '/leave/ai/staffing',

                        'api' => true,

                    ],

                ],

            ],

        ],

    ],

];