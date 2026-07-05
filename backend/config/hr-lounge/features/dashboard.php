<?php

return [

    'dashboard' => [

        /*
        |--------------------------------------------------------------------------
        | Module Information
        |--------------------------------------------------------------------------
        */

        'label' => 'Dashboard Management',

        'description' => 'Enterprise dashboards, widgets and executive insights.',

        'icon' => 'LayoutDashboard',

        'route' => '/dashboard',

        'group' => 'core',

        'version' => '1.0.0',

        'phase' => 1,

        'order' => 100,

        'enabled_by_default' => true,

        'package_toggle' => true,

        'sidebar' => true,

        'searchable' => false,

        'audit' => false,

        'activity_log' => true,

        'api' => true,

        'children' => [

            /*
            |--------------------------------------------------------------------------
            | Executive Dashboard
            |--------------------------------------------------------------------------
            */

            'executive_dashboard' => [

                'label' => 'Executive Dashboard',

                'description' => 'Executive overview of all organizational KPIs.',

                'icon' => 'LayoutDashboard',

                'route' => '/dashboard/executive',

                'permission_template' => 'read',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'executive_overview' => [

                        'label' => 'Executive Overview',

                        'permission_template' => 'read',

                        'icon' => 'Gauge',

                        'route' => '/dashboard/executive',

                        'api' => true,

                    ],

                    'organization_kpis' => [

                        'label' => 'Organization KPIs',

                        'permission_template' => 'read',

                        'icon' => 'ChartColumn',

                        'route' => '/dashboard/executive/kpis',

                        'api' => true,

                    ],

                    'executive_summary' => [

                        'label' => 'Executive Summary',

                        'permission_template' => 'read',

                        'icon' => 'FileBarChart',

                        'route' => '/dashboard/executive/summary',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | HR Dashboard
            |--------------------------------------------------------------------------
            */

            'hr_dashboard' => [

                'label' => 'HR Dashboard',

                'description' => 'Human resource metrics and workforce insights.',

                'icon' => 'Users',

                'route' => '/dashboard/hr',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'employee_statistics' => [

                        'label' => 'Employee Statistics',

                        'permission_template' => 'read',

                        'icon' => 'UsersRound',

                        'route' => '/dashboard/hr/employees',

                        'api' => true,

                    ],

                    'headcount_analysis' => [

                        'label' => 'Headcount Analysis',

                        'permission_template' => 'read',

                        'icon' => 'ChartPie',

                        'route' => '/dashboard/hr/headcount',

                        'api' => true,

                    ],

                    'workforce_summary' => [

                        'label' => 'Workforce Summary',

                        'permission_template' => 'read',

                        'icon' => 'ClipboardList',

                        'route' => '/dashboard/hr/workforce',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Department Dashboard
            |--------------------------------------------------------------------------
            */

            'department_dashboard' => [

                'label' => 'Department Dashboard',

                'description' => 'Department level KPIs and operational metrics.',

                'icon' => 'Building2',

                'route' => '/dashboard/departments',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'department_kpis' => [

                        'label' => 'Department KPIs',

                        'permission_template' => 'read',

                        'icon' => 'ChartBar',

                        'route' => '/dashboard/departments/kpis',

                        'api' => true,

                    ],

                    'department_comparison' => [

                        'label' => 'Department Comparison',

                        'permission_template' => 'read',

                        'icon' => 'GitCompare',

                        'route' => '/dashboard/departments/comparison',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Attendance Dashboard
            |--------------------------------------------------------------------------
            */

            'attendance_dashboard' => [

                'label' => 'Attendance Dashboard',

                'description' => 'Attendance trends and workforce availability.',

                'icon' => 'Clock3',

                'route' => '/dashboard/attendance',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'attendance_summary' => [

                        'label' => 'Attendance Summary',

                        'permission_template' => 'read',

                        'icon' => 'CalendarCheck',

                        'route' => '/dashboard/attendance',

                        'api' => true,

                    ],

                    'late_analysis' => [

                        'label' => 'Late Analysis',

                        'permission_template' => 'read',

                        'icon' => 'AlarmClock',

                        'route' => '/dashboard/attendance/late-analysis',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Leave Dashboard
            |--------------------------------------------------------------------------
            */

            'leave_dashboard' => [

                'label' => 'Leave Dashboard',

                'description' => 'Leave balances, requests and trends.',

                'icon' => 'CalendarDays',

                'route' => '/dashboard/leave',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'leave_summary' => [

                        'label' => 'Leave Summary',

                        'permission_template' => 'read',

                        'icon' => 'CalendarRange',

                        'route' => '/dashboard/leave',

                        'api' => true,

                    ],

                    'leave_trends' => [

                        'label' => 'Leave Trends',

                        'permission_template' => 'read',

                        'icon' => 'TrendingUp',

                        'route' => '/dashboard/leave/trends',

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | Payroll Dashboard
            |--------------------------------------------------------------------------
            */

            'payroll_dashboard' => [

                'label' => 'Payroll Dashboard',

                'description' => 'Payroll summaries, salary analytics and payroll KPIs.',

                'icon' => 'Wallet',

                'route' => '/dashboard/payroll',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'salary_summary' => [

                        'label' => 'Salary Summary',

                        'permission_template' => 'read',

                        'icon' => 'BadgeDollarSign',

                        'route' => '/dashboard/payroll',

                        'api' => true,

                    ],

                    'payroll_statistics' => [

                        'label' => 'Payroll Statistics',

                        'permission_template' => 'read',

                        'icon' => 'ChartColumn',

                        'route' => '/dashboard/payroll/statistics',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Recruitment Dashboard
            |--------------------------------------------------------------------------
            */

            'recruitment_dashboard' => [

                'label' => 'Recruitment Dashboard',

                'description' => 'Recruitment pipeline and hiring analytics.',

                'icon' => 'UserRoundPlus',

                'route' => '/dashboard/recruitment',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'candidate_pipeline' => [

                        'label' => 'Candidate Pipeline',

                        'permission_template' => 'read',

                        'icon' => 'GitBranch',

                        'route' => '/dashboard/recruitment/pipeline',

                        'api' => true,

                    ],

                    'hiring_statistics' => [

                        'label' => 'Hiring Statistics',

                        'permission_template' => 'read',

                        'icon' => 'ChartPie',

                        'route' => '/dashboard/recruitment/statistics',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Performance Dashboard
            |--------------------------------------------------------------------------
            */

            'performance_dashboard' => [

                'label' => 'Performance Dashboard',

                'description' => 'Employee and organizational performance metrics.',

                'icon' => 'TrendingUp',

                'route' => '/dashboard/performance',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'performance_summary' => [

                        'label' => 'Performance Summary',

                        'permission_template' => 'read',

                        'icon' => 'Gauge',

                        'route' => '/dashboard/performance',

                        'api' => true,

                    ],

                    'kpi_dashboard' => [

                        'label' => 'KPI Dashboard',

                        'permission_template' => 'read',

                        'icon' => 'BarChart4',

                        'route' => '/dashboard/performance/kpis',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Training Dashboard
            |--------------------------------------------------------------------------
            */

            'training_dashboard' => [

                'label' => 'Training Dashboard',

                'description' => 'Training progress and learning analytics.',

                'icon' => 'GraduationCap',

                'route' => '/dashboard/training',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'training_summary' => [

                        'label' => 'Training Summary',

                        'permission_template' => 'read',

                        'icon' => 'BookOpen',

                        'route' => '/dashboard/training',

                        'api' => true,

                    ],

                    'learning_progress' => [

                        'label' => 'Learning Progress',

                        'permission_template' => 'read',

                        'icon' => 'LineChart',

                        'route' => '/dashboard/training/progress',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Custom Dashboards
            |--------------------------------------------------------------------------
            */

            'custom_dashboards' => [

                'label' => 'Custom Dashboards',

                'description' => 'Create personalized dashboards.',

                'icon' => 'LayoutTemplate',

                'route' => '/dashboard/custom',

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
            | Dashboard Widgets
            |--------------------------------------------------------------------------
            */

            'widgets' => [

                'label' => 'Dashboard Widgets',

                'description' => 'Manage dashboard widgets.',

                'icon' => 'LayoutGrid',

                'route' => '/dashboard/widgets',

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
            | Widget Templates
            |--------------------------------------------------------------------------
            */

            'widget_templates' => [

                'label' => 'Widget Templates',

                'description' => 'Reusable dashboard widget templates.',

                'icon' => 'Copy',

                'route' => '/dashboard/widget-templates',

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
            | Dashboard Settings
            |--------------------------------------------------------------------------
            */

            'settings' => [

                'label' => 'Dashboard Settings',

                'description' => 'Configure dashboard layouts and preferences.',

                'icon' => 'Settings2',

                'route' => '/dashboard/settings',

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

                'label' => 'Dashboard Reports',

                'description' => 'Generate executive dashboard reports.',

                'icon' => 'FileBarChart',

                'route' => '/dashboard/reports',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'executive_report' => [

                        'label' => 'Executive Report',

                        'permission_template' => 'read',

                        'icon' => 'FileText',

                        'route' => '/dashboard/reports/executive',

                        'api' => true,

                    ],

                    'department_report' => [

                        'label' => 'Department Report',

                        'permission_template' => 'read',

                        'icon' => 'Building2',

                        'route' => '/dashboard/reports/departments',

                        'api' => true,

                    ],

                    'attendance_report' => [

                        'label' => 'Attendance Report',

                        'permission_template' => 'read',

                        'icon' => 'Clock3',

                        'route' => '/dashboard/reports/attendance',

                        'api' => true,

                    ],

                    'payroll_report' => [

                        'label' => 'Payroll Report',

                        'permission_template' => 'read',

                        'icon' => 'Wallet',

                        'route' => '/dashboard/reports/payroll',

                        'api' => true,

                    ],

                    'performance_report' => [

                        'label' => 'Performance Report',

                        'permission_template' => 'read',

                        'icon' => 'TrendingUp',

                        'route' => '/dashboard/reports/performance',

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

                'label' => 'Dashboard Analytics',

                'description' => 'Enterprise dashboard analytics and KPIs.',

                'icon' => 'ChartPie',

                'route' => '/dashboard/analytics',

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

                'label' => 'Dashboard Notifications',

                'description' => 'Executive alerts and dashboard notifications.',

                'icon' => 'Bell',

                'route' => '/dashboard/notifications',

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
            | AI Executive Insights
            |--------------------------------------------------------------------------
            */

            'ai' => [

                'label' => 'AI Executive Insights',

                'description' => 'AI powered executive intelligence and predictive insights.',

                'icon' => 'Bot',

                'route' => '/dashboard/ai',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'executive_kpi_analysis' => [

                        'label' => 'Executive KPI Analysis',

                        'permission_template' => 'read',

                        'icon' => 'ChartColumn',

                        'route' => '/dashboard/ai/kpis',

                        'api' => true,

                    ],

                    'workforce_intelligence' => [

                        'label' => 'Workforce Intelligence',

                        'permission_template' => 'read',

                        'icon' => 'UsersRound',

                        'route' => '/dashboard/ai/workforce',

                        'api' => true,

                    ],

                    'predictive_analytics' => [

                        'label' => 'Predictive Analytics',

                        'permission_template' => 'read',

                        'icon' => 'BrainCircuit',

                        'route' => '/dashboard/ai/predictive',

                        'api' => true,

                    ],

                    'anomaly_detection' => [

                        'label' => 'Anomaly Detection',

                        'permission_template' => 'read',

                        'icon' => 'TriangleAlert',

                        'route' => '/dashboard/ai/anomalies',

                        'api' => true,

                    ],

                    'smart_dashboard' => [

                        'label' => 'Smart Executive Dashboard',

                        'permission_template' => 'read',

                        'icon' => 'Sparkles',

                        'route' => '/dashboard/ai/smart-dashboard',

                        'api' => true,

                    ],

                ],

            ],

        ],

    ],

];