<?php

return [

    'payroll' => [

        /*
        |--------------------------------------------------------------------------
        | Module Information
        |--------------------------------------------------------------------------
        */

        'label' => 'Payroll Management',

        'description' => 'Complete payroll and salary management system.',

        'icon' => 'Wallet',

        'route' => '/payroll',

        'group' => 'core',

        'version' => '1.0.0',

        'phase' => 1,

        'order' => 40,

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

                'label' => 'Payroll Dashboard',

                'description' => 'Payroll overview and salary insights.',

                'icon' => 'LayoutDashboard',

                'route' => '/payroll',

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
            | Salary Structures
            |--------------------------------------------------------------------------
            */

            'salary_structures' => [

                'label' => 'Salary Structures',

                'description' => 'Create and manage salary structures.',

                'icon' => 'Building2',

                'route' => '/payroll/salary-structures',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'structure_list' => [

                        'label' => 'Salary Structure List',

                        'description' => 'Manage salary structures.',

                        'icon' => 'List',

                        'route' => '/payroll/salary-structures',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    'salary_grades' => [

                        'label' => 'Salary Grades',

                        'description' => 'Configure salary grades.',

                        'icon' => 'BadgeDollarSign',

                        'route' => '/payroll/salary-structures/grades',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    'salary_bands' => [

                        'label' => 'Salary Bands',

                        'description' => 'Manage salary ranges.',

                        'icon' => 'BetweenHorizontalStart',

                        'route' => '/payroll/salary-structures/bands',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    'salary_templates' => [

                        'label' => 'Salary Templates',

                        'description' => 'Reusable payroll templates.',

                        'icon' => 'Copy',

                        'route' => '/payroll/salary-structures/templates',

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
            | Salary Components
            |--------------------------------------------------------------------------
            */

            'salary_components' => [

                'label' => 'Salary Components',

                'description' => 'Manage earnings and deductions.',

                'icon' => 'Coins',

                'route' => '/payroll/components',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'earnings' => [

                        'label' => 'Earnings',

                        'description' => 'Manage earning components.',

                        'icon' => 'TrendingUp',

                        'route' => '/payroll/components/earnings',

                        'permission_template' => 'crud',

                        'api' => true,

                    ],

                    'allowances' => [

                        'label' => 'Allowances',

                        'description' => 'Manage salary allowances.',

                        'icon' => 'CircleDollarSign',

                        'route' => '/payroll/components/allowances',

                        'permission_template' => 'crud',

                        'api' => true,

                    ],

                    'deductions' => [

                        'label' => 'Deductions',

                        'description' => 'Manage deduction components.',

                        'icon' => 'MinusCircle',

                        'route' => '/payroll/components/deductions',

                        'permission_template' => 'crud',

                        'api' => true,

                    ],

                    'reimbursements' => [

                        'label' => 'Reimbursements',

                        'description' => 'Manage reimbursement components.',

                        'icon' => 'Receipt',

                        'route' => '/payroll/components/reimbursements',

                        'permission_template' => 'crud',

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | Employee Salary
            |--------------------------------------------------------------------------
            */

            'employee_salary' => [

                'label' => 'Employee Salary',

                'description' => 'Manage employee salary assignments and revisions.',

                'icon' => 'WalletCards',

                'route' => '/payroll/employee-salary',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'salary_assignment' => [

                        'label' => 'Salary Assignment',

                        'description' => 'Assign salary structure to employees.',

                        'icon' => 'UserRoundPlus',

                        'route' => '/payroll/employee-salary/assignment',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    'salary_revision' => [

                        'label' => 'Salary Revision',

                        'description' => 'Manage salary revisions and increments.',

                        'icon' => 'TrendingUp',

                        'route' => '/payroll/employee-salary/revision',

                        'permission_template' => 'approval',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    'salary_history' => [

                        'label' => 'Salary History',

                        'description' => 'View salary change history.',

                        'icon' => 'History',

                        'route' => '/payroll/employee-salary/history',

                        'permission_template' => 'read',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    'salary_effective_dates' => [

                        'label' => 'Effective Dates',

                        'description' => 'Manage salary effective dates.',

                        'icon' => 'CalendarClock',

                        'route' => '/payroll/employee-salary/effective-dates',

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
            | Payroll Cycles
            |--------------------------------------------------------------------------
            */

            'payroll_cycles' => [

                'label' => 'Payroll Cycles',

                'description' => 'Manage payroll periods and payroll calendar.',

                'icon' => 'CalendarRange',

                'route' => '/payroll/cycles',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'cycle_list' => [

                        'label' => 'Payroll Cycles',

                        'description' => 'Create payroll cycles.',

                        'icon' => 'Calendar',

                        'route' => '/payroll/cycles',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    'payroll_calendar' => [

                        'label' => 'Payroll Calendar',

                        'description' => 'Manage payroll calendar.',

                        'icon' => 'CalendarDays',

                        'route' => '/payroll/cycles/calendar',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    'payroll_period_lock' => [

                        'label' => 'Payroll Period Lock',

                        'description' => 'Lock processed payroll periods.',

                        'icon' => 'Lock',

                        'route' => '/payroll/cycles/lock',

                        'permission_template' => 'approval',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => false,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Payroll Processing
            |--------------------------------------------------------------------------
            */

            'payroll_processing' => [

                'label' => 'Payroll Processing',

                'description' => 'Generate and process payroll.',

                'icon' => 'Calculator',

                'route' => '/payroll/process',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'generate_payroll' => [

                        'label' => 'Generate Payroll',

                        'description' => 'Generate payroll for selected period.',

                        'icon' => 'PlayCircle',

                        'route' => '/payroll/process/generate',

                        'permission_template' => 'execute',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => false,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    'preview_payroll' => [

                        'label' => 'Preview Payroll',

                        'description' => 'Preview payroll before processing.',

                        'icon' => 'Eye',

                        'route' => '/payroll/process/preview',

                        'permission_template' => 'read',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    'recalculate_payroll' => [

                        'label' => 'Recalculate Payroll',

                        'description' => 'Recalculate processed payroll.',

                        'icon' => 'RefreshCw',

                        'route' => '/payroll/process/recalculate',

                        'permission_template' => 'execute',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => false,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    'payroll_history' => [

                        'label' => 'Payroll History',

                        'description' => 'View payroll processing history.',

                        'icon' => 'History',

                        'route' => '/payroll/process/history',

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
            | Payroll Approval
            |--------------------------------------------------------------------------
            */

            'payroll_approval' => [

                'label' => 'Payroll Approval',

                'description' => 'Approve payroll before publishing.',

                'icon' => 'BadgeCheck',

                'route' => '/payroll/approval',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'pending_payrolls' => [

                        'label' => 'Pending Payrolls',

                        'description' => 'View payrolls waiting for approval.',

                        'icon' => 'Hourglass',

                        'route' => '/payroll/approval/pending',

                        'permission_template' => 'read',

                        'api' => true,

                    ],

                    'approve_payroll' => [

                        'label' => 'Approve Payroll',

                        'description' => 'Approve payroll processing.',

                        'icon' => 'CheckCircle2',

                        'route' => '/payroll/approval/approve',

                        'permission_template' => 'approval',

                        'api' => true,

                    ],

                    'reject_payroll' => [

                        'label' => 'Reject Payroll',

                        'description' => 'Reject payroll with remarks.',

                        'icon' => 'CircleX',

                        'route' => '/payroll/approval/reject',

                        'permission_template' => 'approval',

                        'api' => true,

                    ],

                    'approval_history' => [

                        'label' => 'Approval History',

                        'description' => 'Payroll approval history.',

                        'icon' => 'History',

                        'route' => '/payroll/approval/history',

                        'permission_template' => 'read',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Payslips
            |--------------------------------------------------------------------------
            */

            'payslips' => [

                'label' => 'Payslips',

                'description' => 'Generate and distribute employee payslips.',

                'icon' => 'ReceiptText',

                'route' => '/payroll/payslips',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'generate_payslips' => [

                        'label' => 'Generate Payslips',

                        'description' => 'Generate payslips for payroll.',

                        'icon' => 'FileCog',

                        'route' => '/payroll/payslips/generate',

                        'permission_template' => 'execute',

                        'api' => true,

                    ],

                    'publish_payslips' => [

                        'label' => 'Publish Payslips',

                        'description' => 'Publish payslips to employees.',

                        'icon' => 'Send',

                        'route' => '/payroll/payslips/publish',

                        'permission_template' => 'approval',

                        'api' => true,

                    ],

                    'download_payslips' => [

                        'label' => 'Download Payslips',

                        'description' => 'Download generated payslips.',

                        'icon' => 'Download',

                        'route' => '/payroll/payslips/download',

                        'permission_template' => 'export',

                        'api' => true,

                    ],

                    'email_payslips' => [

                        'label' => 'Email Payslips',

                        'description' => 'Send payslips by email.',

                        'icon' => 'Mail',

                        'route' => '/payroll/payslips/email',

                        'permission_template' => 'execute',

                        'api' => true,

                    ],

                    'employee_payslips' => [

                        'label' => 'Employee Payslips',

                        'description' => 'Employee self-service payslip access.',

                        'icon' => 'FileText',

                        'route' => '/payroll/payslips/employee',

                        'permission_template' => 'read',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Payroll Actions
            |--------------------------------------------------------------------------
            */

            'payroll_actions' => [

                'label' => 'Payroll Actions',

                'description' => 'Manage payroll publishing and rollback.',

                'icon' => 'Workflow',

                'route' => '/payroll/actions',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'publish_payroll' => [

                        'label' => 'Publish Payroll',

                        'description' => 'Publish finalized payroll.',

                        'icon' => 'Send',

                        'route' => '/payroll/actions/publish',

                        'permission_template' => 'approval',

                        'api' => true,

                    ],

                    'rollback_payroll' => [

                        'label' => 'Rollback Payroll',

                        'description' => 'Rollback published payroll.',

                        'icon' => 'RotateCcw',

                        'route' => '/payroll/actions/rollback',

                        'permission_template' => 'approval',

                        'api' => true,

                    ],

                    'reprocess_payroll' => [

                        'label' => 'Reprocess Payroll',

                        'description' => 'Reprocess finalized payroll.',

                        'icon' => 'RefreshCw',

                        'route' => '/payroll/actions/reprocess',

                        'permission_template' => 'execute',

                        'api' => true,

                    ],

                    'payroll_timeline' => [

                        'label' => 'Payroll Timeline',

                        'description' => 'Track payroll lifecycle.',

                        'icon' => 'GitBranch',

                        'route' => '/payroll/actions/timeline',

                        'permission_template' => 'read',

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | Bonus Management
            |--------------------------------------------------------------------------
            */

            'bonus_management' => [

                'label' => 'Bonus Management',

                'description' => 'Manage employee bonuses and bonus policies.',

                'icon' => 'Gift',

                'route' => '/payroll/bonus',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'bonus_types' => [

                        'label' => 'Bonus Types',

                        'description' => 'Configure bonus types.',

                        'icon' => 'Tags',

                        'route' => '/payroll/bonus/types',

                        'permission_template' => 'crud',

                        'api' => true,

                    ],

                    'bonus_assignment' => [

                        'label' => 'Bonus Assignment',

                        'description' => 'Assign bonus to employees.',

                        'icon' => 'UserRoundPlus',

                        'route' => '/payroll/bonus/assignment',

                        'permission_template' => 'crud',

                        'api' => true,

                    ],

                    'bonus_approval' => [

                        'label' => 'Bonus Approval',

                        'description' => 'Approve bonus requests.',

                        'icon' => 'BadgeCheck',

                        'route' => '/payroll/bonus/approval',

                        'permission_template' => 'approval',

                        'api' => true,

                    ],

                    'bonus_history' => [

                        'label' => 'Bonus History',

                        'description' => 'View employee bonus history.',

                        'icon' => 'History',

                        'route' => '/payroll/bonus/history',

                        'permission_template' => 'read',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Allowances
            |--------------------------------------------------------------------------
            */

            'allowances' => [

                'label' => 'Allowances',

                'description' => 'Manage employee allowances.',

                'icon' => 'CircleDollarSign',

                'route' => '/payroll/allowances',

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
            | Deductions
            |--------------------------------------------------------------------------
            */

            'deductions' => [

                'label' => 'Deductions',

                'description' => 'Manage payroll deductions.',

                'icon' => 'MinusCircle',

                'permission_template' => 'crud',

                'route' => '/payroll/deductions',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

            ],

            /*
            |--------------------------------------------------------------------------
            | Overtime Payroll
            |--------------------------------------------------------------------------
            */

            'overtime_payroll' => [

                'label' => 'Overtime Payroll',

                'description' => 'Calculate overtime payments.',

                'icon' => 'ClockArrowUp',

                'route' => '/payroll/overtime',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'overtime_calculation' => [

                        'label' => 'Overtime Calculation',

                        'permission_template' => 'execute',

                        'icon' => 'Calculator',

                        'route' => '/payroll/overtime/calculation',

                        'api' => true,

                    ],

                    'overtime_rates' => [

                        'label' => 'Overtime Rates',

                        'permission_template' => 'crud',

                        'icon' => 'Settings2',

                        'route' => '/payroll/overtime/rates',

                        'api' => true,

                    ],

                    'overtime_history' => [

                        'label' => 'Overtime History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/payroll/overtime/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Incentives
            |--------------------------------------------------------------------------
            */

            'incentives' => [

                'label' => 'Incentives',

                'description' => 'Manage employee incentives.',

                'icon' => 'Award',

                'route' => '/payroll/incentives',

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
            | Commissions
            |--------------------------------------------------------------------------
            */

            'commissions' => [

                'label' => 'Commissions',

                'description' => 'Manage sales commissions.',

                'icon' => 'Percent',

                'route' => '/payroll/commissions',

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
            | Payroll Adjustments
            |--------------------------------------------------------------------------
            */

            'payroll_adjustments' => [

                'label' => 'Payroll Adjustments',

                'description' => 'Adjust payroll earnings and deductions.',

                'icon' => 'SlidersHorizontal',

                'route' => '/payroll/adjustments',

                'permission_template' => 'approval',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

            ],

            /*
            |--------------------------------------------------------------------------
            | Arrears
            |--------------------------------------------------------------------------
            */

            'arrears' => [

                'label' => 'Salary Arrears',

                'description' => 'Manage employee salary arrears.',

                'icon' => 'ArrowBigUpDash',

                'route' => '/payroll/arrears',

                'permission_template' => 'approval',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

            ],
                        /*
            |--------------------------------------------------------------------------
            | Loan & Advance
            |--------------------------------------------------------------------------
            */

            'loan_advance' => [

                'label' => 'Loan & Advance',

                'description' => 'Manage employee loans and salary advances.',

                'icon' => 'HandCoins',

                'route' => '/payroll/loan-advance',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'loan_requests' => [

                        'label' => 'Loan Requests',

                        'permission_template' => 'approval',

                        'icon' => 'FilePlus2',

                        'route' => '/payroll/loan-advance/requests',

                        'api' => true,

                    ],

                    'loan_approval' => [

                        'label' => 'Loan Approval',

                        'permission_template' => 'approval',

                        'icon' => 'BadgeCheck',

                        'route' => '/payroll/loan-advance/approval',

                        'api' => true,

                    ],

                    'loan_repayment' => [

                        'label' => 'Loan Repayment',

                        'permission_template' => 'crud',

                        'icon' => 'WalletCards',

                        'route' => '/payroll/loan-advance/repayment',

                        'api' => true,

                    ],

                    'loan_history' => [

                        'label' => 'Loan History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/payroll/loan-advance/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Tax Management
            |--------------------------------------------------------------------------
            */

            'tax_management' => [

                'label' => 'Tax Management',

                'description' => 'Configure payroll tax settings and calculations.',

                'icon' => 'ReceiptText',

                'route' => '/payroll/tax',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'tax_rules' => [

                        'label' => 'Tax Rules',

                        'permission_template' => 'crud',

                        'icon' => 'Scale',

                        'route' => '/payroll/tax/rules',

                        'api' => true,

                    ],

                    'tax_slabs' => [

                        'label' => 'Tax Slabs',

                        'permission_template' => 'crud',

                        'icon' => 'ChartBar',

                        'route' => '/payroll/tax/slabs',

                        'api' => true,

                    ],

                    'tax_calculation' => [

                        'label' => 'Tax Calculation',

                        'permission_template' => 'execute',

                        'icon' => 'Calculator',

                        'route' => '/payroll/tax/calculation',

                        'api' => true,

                    ],

                    'tax_history' => [

                        'label' => 'Tax History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/payroll/tax/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Provident Fund
            |--------------------------------------------------------------------------
            */

            'provident_fund' => [

                'label' => 'Provident Fund',

                'description' => 'Manage provident fund contributions.',

                'icon' => 'PiggyBank',

                'route' => '/payroll/provident-fund',

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
            | Gratuity
            |--------------------------------------------------------------------------
            */

            'gratuity' => [

                'label' => 'Gratuity',

                'description' => 'Manage gratuity calculations.',

                'icon' => 'Medal',

                'route' => '/payroll/gratuity',

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
            | Insurance
            |--------------------------------------------------------------------------
            */

            'insurance' => [

                'label' => 'Insurance',

                'description' => 'Manage employee insurance contributions.',

                'icon' => 'ShieldPlus',

                'route' => '/payroll/insurance',

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
            | Pension
            |--------------------------------------------------------------------------
            */

            'pension' => [

                'label' => 'Pension',

                'description' => 'Manage employee pension schemes.',

                'icon' => 'Landmark',

                'route' => '/payroll/pension',

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
            | Final Settlement
            |--------------------------------------------------------------------------
            */

            'final_settlement' => [

                'label' => 'Final Settlement',

                'description' => 'Process employee full and final settlement.',

                'icon' => 'FileCheck2',

                'route' => '/payroll/final-settlement',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'settlement_calculation' => [

                        'label' => 'Settlement Calculation',

                        'permission_template' => 'execute',

                        'icon' => 'Calculator',

                        'route' => '/payroll/final-settlement/calculation',

                        'api' => true,

                    ],

                    'settlement_approval' => [

                        'label' => 'Settlement Approval',

                        'permission_template' => 'approval',

                        'icon' => 'BadgeCheck',

                        'route' => '/payroll/final-settlement/approval',

                        'api' => true,

                    ],

                    'settlement_history' => [

                        'label' => 'Settlement History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/payroll/final-settlement/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | End of Service Benefits
            |--------------------------------------------------------------------------
            */

            'end_of_service_benefits' => [

                'label' => 'End of Service Benefits',

                'description' => 'Manage employee end of service benefits.',

                'icon' => 'Handshake',

                'route' => '/payroll/end-of-service',

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
            | Payroll Reports
            |--------------------------------------------------------------------------
            */

            'reports' => [

                'label' => 'Payroll Reports',

                'description' => 'Generate payroll reports and statutory reports.',

                'icon' => 'FileBarChart',

                'route' => '/payroll/reports',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'payroll_summary_report' => [

                        'label' => 'Payroll Summary Report',

                        'permission_template' => 'read',

                        'icon' => 'ChartColumn',

                        'route' => '/payroll/reports/summary',

                        'api' => true,

                    ],

                    'salary_register' => [

                        'label' => 'Salary Register',

                        'permission_template' => 'read',

                        'icon' => 'BookOpen',

                        'route' => '/payroll/reports/salary-register',

                        'api' => true,

                    ],

                    'bank_transfer_report' => [

                        'label' => 'Bank Transfer Report',

                        'permission_template' => 'read',

                        'icon' => 'Landmark',

                        'route' => '/payroll/reports/bank-transfer',

                        'api' => true,

                    ],

                    'tax_report' => [

                        'label' => 'Tax Report',

                        'permission_template' => 'read',

                        'icon' => 'ReceiptText',

                        'route' => '/payroll/reports/tax',

                        'api' => true,

                    ],

                    'pf_report' => [

                        'label' => 'Provident Fund Report',

                        'permission_template' => 'read',

                        'icon' => 'PiggyBank',

                        'route' => '/payroll/reports/provident-fund',

                        'api' => true,

                    ],

                    'settlement_report' => [

                        'label' => 'Final Settlement Report',

                        'permission_template' => 'read',

                        'icon' => 'FileCheck2',

                        'route' => '/payroll/reports/final-settlement',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Payroll Analytics
            |--------------------------------------------------------------------------
            */

            'analytics' => [

                'label' => 'Payroll Analytics',

                'description' => 'Payroll KPIs, cost analysis and salary insights.',

                'icon' => 'ChartPie',

                'route' => '/payroll/analytics',

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

                'label' => 'Import Payroll',

                'description' => 'Import payroll data.',

                'icon' => 'FileUp',

                'route' => '/payroll/import',

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

                'label' => 'Export Payroll',

                'description' => 'Export payroll data.',

                'icon' => 'FileDown',

                'route' => '/payroll/export',

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

                'description' => 'Perform bulk payroll operations.',

                'icon' => 'Boxes',

                'route' => '/payroll/bulk',

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

                'label' => 'Payroll Notifications',

                'description' => 'Manage payroll notifications and reminders.',

                'icon' => 'Bell',

                'route' => '/payroll/notifications',

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
            | AI Payroll Insights
            |--------------------------------------------------------------------------
            */

            'ai' => [

                'label' => 'AI Payroll Insights',

                'description' => 'AI powered payroll analysis and recommendations.',

                'icon' => 'Bot',

                'route' => '/payroll/ai',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'salary_forecast' => [

                        'label' => 'Salary Forecast',

                        'permission_template' => 'read',

                        'icon' => 'Brain',

                        'route' => '/payroll/ai/salary-forecast',

                        'api' => true,

                    ],

                    'payroll_cost_analysis' => [

                        'label' => 'Payroll Cost Analysis',

                        'permission_template' => 'read',

                        'icon' => 'ChartLine',

                        'route' => '/payroll/ai/cost-analysis',

                        'api' => true,

                    ],

                    'salary_anomaly_detection' => [

                        'label' => 'Salary Anomaly Detection',

                        'permission_template' => 'read',

                        'icon' => 'ShieldAlert',

                        'route' => '/payroll/ai/anomaly-detection',

                        'api' => true,

                    ],

                    'budget_prediction' => [

                        'label' => 'Budget Prediction',

                        'permission_template' => 'read',

                        'icon' => 'Sparkles',

                        'route' => '/payroll/ai/budget-prediction',

                        'api' => true,

                    ],

                ],

            ],

        ],

    ],

];