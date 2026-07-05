<?php

return [

    'expense' => [

        /*
        |--------------------------------------------------------------------------
        | Module Information
        |--------------------------------------------------------------------------
        */

        'label' => 'Expense Management',

        'description' => 'Enterprise expense claims, reimbursements and budget management.',

        'icon' => 'Receipt',

        'route' => '/expenses',

        'group' => 'finance',

        'version' => '1.0.0',

        'phase' => 2,

        'order' => 10,

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

                'label' => 'Expense Dashboard',

                'description' => 'Expense overview dashboard.',

                'icon' => 'LayoutDashboard',

                'route' => '/expenses',

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
            | Expense Claims
            |--------------------------------------------------------------------------
            */

            'expense_claims' => [

                'label' => 'Expense Claims',

                'description' => 'Submit and manage employee expense claims.',

                'icon' => 'Wallet',

                'route' => '/expenses/claims',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'claim_list' => [

                        'label' => 'Claim List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/expenses/claims',

                        'api' => true,

                    ],

                    'pending_claims' => [

                        'label' => 'Pending Claims',

                        'permission_template' => 'approve',

                        'icon' => 'Clock3',

                        'route' => '/expenses/claims/pending',

                        'api' => true,

                    ],

                    'approved_claims' => [

                        'label' => 'Approved Claims',

                        'permission_template' => 'read',

                        'icon' => 'BadgeCheck',

                        'route' => '/expenses/claims/approved',

                        'api' => true,

                    ],

                    'rejected_claims' => [

                        'label' => 'Rejected Claims',

                        'permission_template' => 'read',

                        'icon' => 'CircleX',

                        'route' => '/expenses/claims/rejected',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Corporate Expenses
            |--------------------------------------------------------------------------
            */

            'corporate_expenses' => [

                'label' => 'Corporate Expenses',

                'description' => 'Manage company operational expenses.',

                'icon' => 'Building2',

                'route' => '/expenses/corporate',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'expense_list' => [

                        'label' => 'Corporate Expense List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/expenses/corporate',

                        'api' => true,

                    ],

                    'recurring_expenses' => [

                        'label' => 'Recurring Expenses',

                        'permission_template' => 'crud',

                        'icon' => 'Repeat',

                        'route' => '/expenses/corporate/recurring',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Travel Expenses
            |--------------------------------------------------------------------------
            */

            'travel_expenses' => [

                'label' => 'Travel Expenses',

                'description' => 'Manage travel related expenses.',

                'icon' => 'Plane',

                'route' => '/expenses/travel',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'travel_claims' => [

                        'label' => 'Travel Claims',

                        'permission_template' => 'crud',

                        'icon' => 'Briefcase',

                        'route' => '/expenses/travel',

                        'api' => true,

                    ],

                    'travel_allowances' => [

                        'label' => 'Travel Allowances',

                        'permission_template' => 'crud',

                        'icon' => 'Coins',

                        'route' => '/expenses/travel/allowances',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Reimbursements
            |--------------------------------------------------------------------------
            */

            'reimbursements' => [

                'label' => 'Reimbursements',

                'description' => 'Manage employee reimbursements.',

                'icon' => 'RefreshCcw',

                'route' => '/expenses/reimbursements',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'reimbursement_list' => [

                        'label' => 'Reimbursement List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/expenses/reimbursements',

                        'api' => true,

                    ],

                    'payment_history' => [

                        'label' => 'Payment History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/expenses/reimbursements/history',

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | Expense Categories
            |--------------------------------------------------------------------------
            */

            'categories' => [

                'label' => 'Expense Categories',

                'description' => 'Manage expense categories and classifications.',

                'icon' => 'FolderTree',

                'route' => '/expenses/categories',

                'permission_template' => 'crud',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'category_list' => [

                        'label' => 'Category List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/expenses/categories',

                        'api' => true,

                    ],

                    'expense_types' => [

                        'label' => 'Expense Types',

                        'permission_template' => 'crud',

                        'icon' => 'Tags',

                        'route' => '/expenses/categories/types',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Expense Policies
            |--------------------------------------------------------------------------
            */

            'policies' => [

                'label' => 'Expense Policies',

                'description' => 'Configure expense policies and reimbursement rules.',

                'icon' => 'ShieldCheck',

                'route' => '/expenses/policies',

                'permission_template' => 'crud',

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

                        'route' => '/expenses/policies',

                        'api' => true,

                    ],

                    'policy_assignment' => [

                        'label' => 'Policy Assignment',

                        'permission_template' => 'crud',

                        'icon' => 'Users',

                        'route' => '/expenses/policies/assignment',

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

                'description' => 'Configure expense approval workflows.',

                'icon' => 'Workflow',

                'route' => '/expenses/workflow',

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

                        'route' => '/expenses/workflow/rules',

                        'api' => true,

                    ],

                    'approval_levels' => [

                        'label' => 'Approval Levels',

                        'permission_template' => 'crud',

                        'icon' => 'Layers3',

                        'route' => '/expenses/workflow/levels',

                        'api' => true,

                    ],

                    'delegations' => [

                        'label' => 'Approval Delegations',

                        'permission_template' => 'crud',

                        'icon' => 'ArrowRightLeft',

                        'route' => '/expenses/workflow/delegations',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Budget Control
            |--------------------------------------------------------------------------
            */

            'budget_control' => [

                'label' => 'Budget Control',

                'description' => 'Manage department and project expense budgets.',

                'icon' => 'PiggyBank',

                'route' => '/expenses/budgets',

                'permission_template' => 'crud',

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

                        'route' => '/expenses/budgets',

                        'api' => true,

                    ],

                    'budget_monitoring' => [

                        'label' => 'Budget Monitoring',

                        'permission_template' => 'read',

                        'icon' => 'ChartColumn',

                        'route' => '/expenses/budgets/monitoring',

                        'api' => true,

                    ],

                    'budget_alerts' => [

                        'label' => 'Budget Alerts',

                        'permission_template' => 'crud',

                        'icon' => 'TriangleAlert',

                        'route' => '/expenses/budgets/alerts',

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

                'description' => 'Manage receipts and supporting documents.',

                'icon' => 'Paperclip',

                'route' => '/expenses/attachments',

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

                'label' => 'Import Expenses',

                'description' => 'Bulk import expense records.',

                'icon' => 'FileUp',

                'route' => '/expenses/import',

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

                'label' => 'Export Expenses',

                'description' => 'Export expenses and reimbursement records.',

                'icon' => 'FileDown',

                'route' => '/expenses/export',

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

                'label' => 'Expense Reports',

                'description' => 'Generate expense and reimbursement reports.',

                'icon' => 'FileBarChart',

                'route' => '/expenses/reports',

                'permission_template' => 'read',

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

                        'route' => '/expenses/reports/expenses',

                        'api' => true,

                    ],

                    'reimbursement_report' => [

                        'label' => 'Reimbursement Report',

                        'permission_template' => 'read',

                        'icon' => 'RefreshCcw',

                        'route' => '/expenses/reports/reimbursements',

                        'api' => true,

                    ],

                    'budget_report' => [

                        'label' => 'Budget Report',

                        'permission_template' => 'read',

                        'icon' => 'PiggyBank',

                        'route' => '/expenses/reports/budgets',

                        'api' => true,

                    ],

                    'policy_compliance_report' => [

                        'label' => 'Policy Compliance Report',

                        'permission_template' => 'read',

                        'icon' => 'ShieldCheck',

                        'route' => '/expenses/reports/policies',

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

                'label' => 'Expense Analytics',

                'description' => 'Expense trends, spending insights and KPIs.',

                'icon' => 'ChartPie',

                'route' => '/expenses/analytics',

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

                'label' => 'Expense Notifications',

                'description' => 'Manage expense related notifications and reminders.',

                'icon' => 'Bell',

                'route' => '/expenses/notifications',

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
            | AI Expense Assistant
            |--------------------------------------------------------------------------
            */

            'ai' => [

                'label' => 'AI Expense Assistant',

                'description' => 'AI powered expense validation, forecasting and intelligent recommendations.',

                'icon' => 'Bot',

                'route' => '/expenses/ai',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'receipt_ocr' => [

                        'label' => 'Receipt OCR',

                        'permission_template' => 'read',

                        'icon' => 'ScanText',

                        'route' => '/expenses/ai/receipt-ocr',

                        'api' => true,

                    ],

                    'fraud_detection' => [

                        'label' => 'Fraud Detection',

                        'permission_template' => 'read',

                        'icon' => 'ShieldAlert',

                        'route' => '/expenses/ai/fraud-detection',

                        'api' => true,

                    ],

                    'duplicate_claim_detection' => [

                        'label' => 'Duplicate Claim Detection',

                        'permission_template' => 'read',

                        'icon' => 'CopyCheck',

                        'route' => '/expenses/ai/duplicate-claims',

                        'api' => true,

                    ],

                    'budget_forecasting' => [

                        'label' => 'Budget Forecasting',

                        'permission_template' => 'read',

                        'icon' => 'TrendingUp',

                        'route' => '/expenses/ai/budget-forecast',

                        'api' => true,

                    ],

                    'approval_recommendations' => [

                        'label' => 'Smart Approval Recommendations',

                        'permission_template' => 'read',

                        'icon' => 'Lightbulb',

                        'route' => '/expenses/ai/approval-recommendations',

                        'api' => true,

                    ],

                    'expense_dashboard' => [

                        'label' => 'Expense Intelligence Dashboard',

                        'permission_template' => 'read',

                        'icon' => 'LayoutDashboard',

                        'route' => '/expenses/ai/dashboard',

                        'api' => true,

                    ],

                ],

            ],

        ],

    ],

];