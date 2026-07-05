<?php

return [

    'loan' => [

        /*
        |--------------------------------------------------------------------------
        | Module Information
        |--------------------------------------------------------------------------
        */

        'label' => 'Loan Management',

        'description' => 'Enterprise employee loan and salary advance management.',

        'icon' => 'HandCoins',

        'route' => '/loans',

        'group' => 'finance',

        'version' => '1.0.0',

        'phase' => 2,

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

                'label' => 'Loan Dashboard',

                'description' => 'Loan management overview.',

                'icon' => 'LayoutDashboard',

                'route' => '/loans',

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
            | Loan Applications
            |--------------------------------------------------------------------------
            */

            'loan_applications' => [

                'label' => 'Loan Applications',

                'description' => 'Manage employee loan applications.',

                'icon' => 'FileText',

                'route' => '/loans/applications',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'application_list' => [

                        'label' => 'Application List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/loans/applications',

                        'api' => true,

                    ],

                    'pending_applications' => [

                        'label' => 'Pending Applications',

                        'permission_template' => 'approve',

                        'icon' => 'Clock3',

                        'route' => '/loans/applications/pending',

                        'api' => true,

                    ],

                    'approved_applications' => [

                        'label' => 'Approved Applications',

                        'permission_template' => 'read',

                        'icon' => 'BadgeCheck',

                        'route' => '/loans/applications/approved',

                        'api' => true,

                    ],

                    'rejected_applications' => [

                        'label' => 'Rejected Applications',

                        'permission_template' => 'read',

                        'icon' => 'CircleX',

                        'route' => '/loans/applications/rejected',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Salary Advances
            |--------------------------------------------------------------------------
            */

            'salary_advances' => [

                'label' => 'Salary Advances',

                'description' => 'Manage employee salary advance requests.',

                'icon' => 'Wallet',

                'route' => '/loans/salary-advances',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'advance_list' => [

                        'label' => 'Advance List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/loans/salary-advances',

                        'api' => true,

                    ],

                    'advance_repayment' => [

                        'label' => 'Advance Repayment',

                        'permission_template' => 'crud',

                        'icon' => 'RefreshCcw',

                        'route' => '/loans/salary-advances/repayment',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Loan Types
            |--------------------------------------------------------------------------
            */

            'loan_types' => [

                'label' => 'Loan Types',

                'description' => 'Manage available loan types.',

                'icon' => 'BadgeDollarSign',

                'route' => '/loans/types',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'type_list' => [

                        'label' => 'Loan Type List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/loans/types',

                        'api' => true,

                    ],

                    'interest_rules' => [

                        'label' => 'Interest Rules',

                        'permission_template' => 'crud',

                        'icon' => 'Percent',

                        'route' => '/loans/types/interest-rules',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Loan Policies
            |--------------------------------------------------------------------------
            */

            'loan_policies' => [

                'label' => 'Loan Policies',

                'description' => 'Configure loan eligibility and policy rules.',

                'icon' => 'ShieldCheck',

                'route' => '/loans/policies',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'policy_list' => [

                        'label' => 'Policy List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/loans/policies',

                        'api' => true,

                    ],

                    'eligibility_rules' => [

                        'label' => 'Eligibility Rules',

                        'permission_template' => 'crud',

                        'icon' => 'UserCheck',

                        'route' => '/loans/policies/eligibility',

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | Approval Workflow
            |--------------------------------------------------------------------------
            */

            'approval_workflow' => [

                'label' => 'Approval Workflow',

                'description' => 'Configure loan approval workflow and authority matrix.',

                'icon' => 'Workflow',

                'route' => '/loans/workflow',

                'permission_template' => 'crud',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'workflow_rules' => [

                        'label' => 'Workflow Rules',

                        'permission_template' => 'crud',

                        'icon' => 'GitBranch',

                        'route' => '/loans/workflow/rules',

                        'api' => true,

                    ],

                    'approval_levels' => [

                        'label' => 'Approval Levels',

                        'permission_template' => 'crud',

                        'icon' => 'Layers3',

                        'route' => '/loans/workflow/levels',

                        'api' => true,

                    ],

                    'delegations' => [

                        'label' => 'Approval Delegations',

                        'permission_template' => 'crud',

                        'icon' => 'ArrowRightLeft',

                        'route' => '/loans/workflow/delegations',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Loan Disbursement
            |--------------------------------------------------------------------------
            */

            'loan_disbursement' => [

                'label' => 'Loan Disbursement',

                'description' => 'Manage approved loan disbursement process.',

                'icon' => 'BanknoteArrowDown',

                'route' => '/loans/disbursement',

                'permission_template' => 'crud',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'disbursement_list' => [

                        'label' => 'Disbursement List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/loans/disbursement',

                        'api' => true,

                    ],

                    'payment_schedule' => [

                        'label' => 'Payment Schedule',

                        'permission_template' => 'crud',

                        'icon' => 'CalendarDays',

                        'route' => '/loans/disbursement/schedule',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | EMI & Repayment
            |--------------------------------------------------------------------------
            */

            'emi_repayment' => [

                'label' => 'EMI & Repayment',

                'description' => 'Manage EMI schedules and repayment tracking.',

                'icon' => 'CreditCard',

                'route' => '/loans/repayment',

                'permission_template' => 'crud',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'emi_schedule' => [

                        'label' => 'EMI Schedule',

                        'permission_template' => 'crud',

                        'icon' => 'CalendarClock',

                        'route' => '/loans/repayment/emi',

                        'api' => true,

                    ],

                    'payment_history' => [

                        'label' => 'Payment History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/loans/repayment/history',

                        'api' => true,

                    ],

                    'overdue_loans' => [

                        'label' => 'Overdue Loans',

                        'permission_template' => 'read',

                        'icon' => 'TriangleAlert',

                        'route' => '/loans/repayment/overdue',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Loan Settlement
            |--------------------------------------------------------------------------
            */

            'loan_settlement' => [

                'label' => 'Loan Settlement',

                'description' => 'Manage loan closure and settlements.',

                'icon' => 'BadgeCheck',

                'route' => '/loans/settlement',

                'permission_template' => 'crud',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'settlement_list' => [

                        'label' => 'Settlement List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/loans/settlement',

                        'api' => true,

                    ],

                    'early_settlement' => [

                        'label' => 'Early Settlement',

                        'permission_template' => 'crud',

                        'icon' => 'CircleDollarSign',

                        'route' => '/loans/settlement/early',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Attachments
            |--------------------------------------------------------------------------
            */

            'attachments' => [

                'label' => 'Attachments',

                'description' => 'Manage loan documents and supporting files.',

                'icon' => 'Paperclip',

                'route' => '/loans/attachments',

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
            | Import
            |--------------------------------------------------------------------------
            */

            'import' => [

                'label' => 'Import Loans',

                'description' => 'Bulk import loan records.',

                'icon' => 'FileUp',

                'route' => '/loans/import',

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

                'label' => 'Export Loans',

                'description' => 'Export loans and repayment history.',

                'icon' => 'FileDown',

                'route' => '/loans/export',

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
            | Reports
            |--------------------------------------------------------------------------
            */

            'reports' => [

                'label' => 'Loan Reports',

                'description' => 'Generate loan, repayment and settlement reports.',

                'icon' => 'FileBarChart',

                'route' => '/loans/reports',

                'permission_template' => 'read',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'loan_report' => [

                        'label' => 'Loan Report',

                        'permission_template' => 'read',

                        'icon' => 'HandCoins',

                        'route' => '/loans/reports/loans',

                        'api' => true,

                    ],

                    'repayment_report' => [

                        'label' => 'Repayment Report',

                        'permission_template' => 'read',

                        'icon' => 'CreditCard',

                        'route' => '/loans/reports/repayments',

                        'api' => true,

                    ],

                    'overdue_report' => [

                        'label' => 'Overdue Loan Report',

                        'permission_template' => 'read',

                        'icon' => 'TriangleAlert',

                        'route' => '/loans/reports/overdue',

                        'api' => true,

                    ],

                    'settlement_report' => [

                        'label' => 'Settlement Report',

                        'permission_template' => 'read',

                        'icon' => 'BadgeCheck',

                        'route' => '/loans/reports/settlements',

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

                'label' => 'Loan Analytics',

                'description' => 'Loan utilization, repayment trends and KPIs.',

                'icon' => 'ChartPie',

                'route' => '/loans/analytics',

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

                'label' => 'Loan Notifications',

                'description' => 'Manage loan reminders and repayment notifications.',

                'icon' => 'Bell',

                'route' => '/loans/notifications',

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
            | AI Loan Assistant
            |--------------------------------------------------------------------------
            */

            'ai' => [

                'label' => 'AI Loan Assistant',

                'description' => 'AI powered loan analysis, approval assistance and repayment intelligence.',

                'icon' => 'Bot',

                'route' => '/loans/ai',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'eligibility_prediction' => [

                        'label' => 'Loan Eligibility Prediction',

                        'permission_template' => 'read',

                        'icon' => 'UserCheck',

                        'route' => '/loans/ai/eligibility',

                        'api' => true,

                    ],

                    'risk_analysis' => [

                        'label' => 'Default Risk Analysis',

                        'permission_template' => 'read',

                        'icon' => 'ShieldAlert',

                        'route' => '/loans/ai/risk-analysis',

                        'api' => true,

                    ],

                    'emi_forecasting' => [

                        'label' => 'EMI Forecasting',

                        'permission_template' => 'read',

                        'icon' => 'TrendingUp',

                        'route' => '/loans/ai/emi-forecast',

                        'api' => true,

                    ],

                    'approval_recommendations' => [

                        'label' => 'Smart Approval Recommendations',

                        'permission_template' => 'read',

                        'icon' => 'Lightbulb',

                        'route' => '/loans/ai/approval-recommendations',

                        'api' => true,

                    ],

                    'repayment_prediction' => [

                        'label' => 'Repayment Prediction',

                        'permission_template' => 'read',

                        'icon' => 'ChartLine',

                        'route' => '/loans/ai/repayment-prediction',

                        'api' => true,

                    ],

                    'loan_dashboard' => [

                        'label' => 'Loan Intelligence Dashboard',

                        'permission_template' => 'read',

                        'icon' => 'LayoutDashboard',

                        'route' => '/loans/ai/dashboard',

                        'api' => true,

                    ],

                ],

            ],

        ],

    ],

];