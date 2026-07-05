<?php

return [

    'reports' => [

        /*
        |--------------------------------------------------------------------------
        | Module Information
        |--------------------------------------------------------------------------

        */

        'label' => 'Reports Management',

        'description' => 'Enterprise reporting, analytics and business intelligence.',

        'icon' => 'FileBarChart',

        'route' => '/reports',

        'group' => 'core',

        'version' => '1.0.0',

        'phase' => 1,

        'order' => 110,

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

                'label' => 'Reports Dashboard',

                'description' => 'Reporting overview dashboard.',

                'icon' => 'LayoutDashboard',

                'route' => '/reports',

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
            | HR Reports
            |--------------------------------------------------------------------------
            */

            'hr_reports' => [

                'label' => 'HR Reports',

                'description' => 'Human resource reports and workforce analytics.',

                'icon' => 'Users',

                'route' => '/reports/hr',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'headcount_report' => [

                        'label' => 'Headcount Report',

                        'permission_template' => 'read',

                        'icon' => 'UsersRound',

                        'route' => '/reports/hr/headcount',

                        'api' => true,

                    ],

                    'employee_status_report' => [

                        'label' => 'Employee Status Report',

                        'permission_template' => 'read',

                        'icon' => 'UserCheck',

                        'route' => '/reports/hr/status',

                        'api' => true,

                    ],

                    'joining_leaving_report' => [

                        'label' => 'Joining & Leaving Report',

                        'permission_template' => 'read',

                        'icon' => 'ArrowLeftRight',

                        'route' => '/reports/hr/joining-leaving',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Employee Reports
            |--------------------------------------------------------------------------
            */

            'employee_reports' => [

                'label' => 'Employee Reports',

                'description' => 'Employee profile and lifecycle reports.',

                'icon' => 'UserSquare2',

                'route' => '/reports/employees',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'employee_master_report' => [

                        'label' => 'Employee Master Report',

                        'permission_template' => 'read',

                        'icon' => 'FileSpreadsheet',

                        'route' => '/reports/employees/master',

                        'api' => true,

                    ],

                    'employee_profile_report' => [

                        'label' => 'Employee Profile Report',

                        'permission_template' => 'read',

                        'icon' => 'FileUser',

                        'route' => '/reports/employees/profile',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Attendance Reports
            |--------------------------------------------------------------------------
            */

            'attendance_reports' => [

                'label' => 'Attendance Reports',

                'description' => 'Attendance reports and time tracking.',

                'icon' => 'Clock3',

                'route' => '/reports/attendance',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'daily_attendance_report' => [

                        'label' => 'Daily Attendance',

                        'permission_template' => 'read',

                        'icon' => 'CalendarCheck',

                        'route' => '/reports/attendance/daily',

                        'api' => true,

                    ],

                    'monthly_attendance_report' => [

                        'label' => 'Monthly Attendance',

                        'permission_template' => 'read',

                        'icon' => 'CalendarRange',

                        'route' => '/reports/attendance/monthly',

                        'api' => true,

                    ],

                    'late_report' => [

                        'label' => 'Late Report',

                        'permission_template' => 'read',

                        'icon' => 'AlarmClock',

                        'route' => '/reports/attendance/late',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Leave Reports
            |--------------------------------------------------------------------------
            */

            'leave_reports' => [

                'label' => 'Leave Reports',

                'description' => 'Leave balances, approvals and utilization reports.',

                'icon' => 'CalendarDays',

                'route' => '/reports/leave',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'leave_balance_report' => [

                        'label' => 'Leave Balance Report',

                        'permission_template' => 'read',

                        'icon' => 'Scale',

                        'route' => '/reports/leave/balance',

                        'api' => true,

                    ],

                    'leave_utilization_report' => [

                        'label' => 'Leave Utilization',

                        'permission_template' => 'read',

                        'icon' => 'ChartColumn',

                        'route' => '/reports/leave/utilization',

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | Payroll Reports
            |--------------------------------------------------------------------------
            */

            'payroll_reports' => [

                'label' => 'Payroll Reports',

                'description' => 'Payroll reports, salary analysis and statutory reports.',

                'icon' => 'Wallet',

                'route' => '/reports/payroll',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'salary_report' => [

                        'label' => 'Salary Report',

                        'permission_template' => 'read',

                        'icon' => 'BadgeDollarSign',

                        'route' => '/reports/payroll/salary',

                        'api' => true,

                    ],

                    'payslip_report' => [

                        'label' => 'Payslip Report',

                        'permission_template' => 'read',

                        'icon' => 'ReceiptText',

                        'route' => '/reports/payroll/payslips',

                        'api' => true,

                    ],

                    'tax_report' => [

                        'label' => 'Tax Report',

                        'permission_template' => 'read',

                        'icon' => 'Calculator',

                        'route' => '/reports/payroll/tax',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Recruitment Reports
            |--------------------------------------------------------------------------
            */

            'recruitment_reports' => [

                'label' => 'Recruitment Reports',

                'description' => 'Hiring and recruitment analytics.',

                'icon' => 'UserRoundPlus',

                'route' => '/reports/recruitment',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'candidate_report' => [

                        'label' => 'Candidate Report',

                        'permission_template' => 'read',

                        'icon' => 'UsersRound',

                        'route' => '/reports/recruitment/candidates',

                        'api' => true,

                    ],

                    'interview_report' => [

                        'label' => 'Interview Report',

                        'permission_template' => 'read',

                        'icon' => 'MessagesSquare',

                        'route' => '/reports/recruitment/interviews',

                        'api' => true,

                    ],

                    'hiring_report' => [

                        'label' => 'Hiring Report',

                        'permission_template' => 'read',

                        'icon' => 'UserCheck',

                        'route' => '/reports/recruitment/hiring',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Performance Reports
            |--------------------------------------------------------------------------
            */

            'performance_reports' => [

                'label' => 'Performance Reports',

                'description' => 'Employee performance and KPI reports.',

                'icon' => 'TrendingUp',

                'route' => '/reports/performance',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'kpi_report' => [

                        'label' => 'KPI Report',

                        'permission_template' => 'read',

                        'icon' => 'ChartColumn',

                        'route' => '/reports/performance/kpi',

                        'api' => true,

                    ],

                    'appraisal_report' => [

                        'label' => 'Appraisal Report',

                        'permission_template' => 'read',

                        'icon' => 'ClipboardCheck',

                        'route' => '/reports/performance/appraisals',

                        'api' => true,

                    ],

                    'goal_report' => [

                        'label' => 'Goal Achievement Report',

                        'permission_template' => 'read',

                        'icon' => 'Target',

                        'route' => '/reports/performance/goals',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Finance Reports
            |--------------------------------------------------------------------------
            */

            'finance_reports' => [

                'label' => 'Finance Reports',

                'description' => 'Financial and expense reporting.',

                'icon' => 'Landmark',

                'route' => '/reports/finance',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'expense_report' => [

                        'label' => 'Expense Report',

                        'permission_template' => 'read',

                        'icon' => 'Receipt',

                        'route' => '/reports/finance/expenses',

                        'api' => true,

                    ],

                    'budget_report' => [

                        'label' => 'Budget Report',

                        'permission_template' => 'read',

                        'icon' => 'PiggyBank',

                        'route' => '/reports/finance/budget',

                        'api' => true,

                    ],

                    'financial_summary' => [

                        'label' => 'Financial Summary',

                        'permission_template' => 'read',

                        'icon' => 'FileSpreadsheet',

                        'route' => '/reports/finance/summary',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Custom Report Builder
            |--------------------------------------------------------------------------
            */

            'custom_report_builder' => [

                'label' => 'Custom Report Builder',

                'description' => 'Create custom reports using drag and drop builder.',

                'icon' => 'Blocks',

                'route' => '/reports/custom-builder',

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
            | Scheduled Reports
            |--------------------------------------------------------------------------
            */

            'scheduled_reports' => [

                'label' => 'Scheduled Reports',

                'description' => 'Automatically generate scheduled reports.',

                'icon' => 'CalendarClock',

                'route' => '/reports/scheduled',

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
            | Report Templates
            |--------------------------------------------------------------------------
            */

            'report_templates' => [

                'label' => 'Report Templates',

                'description' => 'Manage reusable report templates.',

                'icon' => 'Copy',

                'route' => '/reports/templates',

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
            | Export Center
            |--------------------------------------------------------------------------
            */

            'export_center' => [

                'label' => 'Export Center',

                'description' => 'Export reports in multiple formats.',

                'icon' => 'Download',

                'route' => '/reports/export',

                'permission_template' => 'export',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

            ],

            /*
            |--------------------------------------------------------------------------
            | Report Archive
            |--------------------------------------------------------------------------
            */

            'report_archive' => [

                'label' => 'Report Archive',

                'description' => 'Store and manage generated reports.',

                'icon' => 'Archive',

                'route' => '/reports/archive',

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
            | Analytics
            |--------------------------------------------------------------------------
            */

            'analytics' => [

                'label' => 'Report Analytics',

                'description' => 'Analyze report usage, trends and reporting KPIs.',

                'icon' => 'ChartPie',

                'route' => '/reports/analytics',

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
            | Notifications
            |--------------------------------------------------------------------------
            */

            'notifications' => [

                'label' => 'Report Notifications',

                'description' => 'Manage report alerts and scheduled notifications.',

                'icon' => 'Bell',

                'route' => '/reports/notifications',

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
            | AI Report Insights
            |--------------------------------------------------------------------------
            */

            'ai' => [

                'label' => 'AI Report Insights',

                'description' => 'AI powered business intelligence and reporting insights.',

                'icon' => 'Bot',

                'route' => '/reports/ai',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'predictive_reporting' => [

                        'label' => 'Predictive Reporting',

                        'permission_template' => 'read',

                        'icon' => 'BrainCircuit',

                        'route' => '/reports/ai/predictive',

                        'api' => true,

                    ],

                    'business_intelligence' => [

                        'label' => 'Business Intelligence Dashboard',

                        'permission_template' => 'read',

                        'icon' => 'ChartColumn',

                        'route' => '/reports/ai/business-intelligence',

                        'api' => true,

                    ],

                    'executive_recommendations' => [

                        'label' => 'Executive Report Recommendations',

                        'permission_template' => 'read',

                        'icon' => 'Sparkles',

                        'route' => '/reports/ai/recommendations',

                        'api' => true,

                    ],

                    'usage_analytics' => [

                        'label' => 'Report Usage Analytics',

                        'permission_template' => 'read',

                        'icon' => 'Activity',

                        'route' => '/reports/ai/usage',

                        'api' => true,

                    ],

                    'anomaly_detection' => [

                        'label' => 'Data Anomaly Detection',

                        'permission_template' => 'read',

                        'icon' => 'TriangleAlert',

                        'route' => '/reports/ai/anomalies',

                        'api' => true,

                    ],

                    'smart_report_generator' => [

                        'label' => 'Smart Report Generator',

                        'permission_template' => 'crud',

                        'icon' => 'WandSparkles',

                        'route' => '/reports/ai/smart-generator',

                        'api' => true,

                    ],

                    'forecasting' => [

                        'label' => 'Forecasting & Trend Analysis',

                        'permission_template' => 'read',

                        'icon' => 'TrendingUp',

                        'route' => '/reports/ai/forecasting',

                        'api' => true,

                    ],

                    'executive_dashboard' => [

                        'label' => 'Executive Intelligence Dashboard',

                        'permission_template' => 'read',

                        'icon' => 'LayoutDashboard',

                        'route' => '/reports/ai/dashboard',

                        'api' => true,

                    ],

                ],

            ],

        ],

    ],

];