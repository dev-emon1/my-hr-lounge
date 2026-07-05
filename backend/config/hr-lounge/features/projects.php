<?php

return [

    'projects' => [

        /*
        |--------------------------------------------------------------------------
        | Module Information
        |--------------------------------------------------------------------------
        */

        'label' => 'Project Management',

        'description' => 'Enterprise project and task management platform.',

        'icon' => 'Briefcase',

        'route' => '/projects',

        'group' => 'operations',

        'version' => '1.0.0',

        'phase' => 1,

        'order' => 100,

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

                'label' => 'Project Dashboard',

                'description' => 'Project overview and KPI dashboard.',

                'icon' => 'LayoutDashboard',

                'route' => '/projects',

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
            | Projects
            |--------------------------------------------------------------------------
            */

            'projects' => [

                'label' => 'Projects',

                'description' => 'Create and manage projects.',

                'icon' => 'FolderKanban',

                'route' => '/projects/list',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'project_list' => [

                        'label' => 'Project List',

                        'description' => 'Browse and manage projects.',

                        'icon' => 'List',

                        'route' => '/projects/list',

                        'permission_template' => 'crud',

                        'api' => true,

                    ],

                    'project_templates' => [

                        'label' => 'Project Templates',

                        'description' => 'Reusable project templates.',

                        'icon' => 'Copy',

                        'route' => '/projects/templates',

                        'permission_template' => 'crud',

                        'api' => true,

                    ],

                    'project_archive' => [

                        'label' => 'Archived Projects',

                        'description' => 'Archived projects.',

                        'icon' => 'Archive',

                        'route' => '/projects/archive',

                        'permission_template' => 'archive',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Project Portfolio
            |--------------------------------------------------------------------------
            */

            'portfolio' => [

                'label' => 'Project Portfolio',

                'description' => 'Manage project portfolio.',

                'icon' => 'Folders',

                'route' => '/projects/portfolio',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'portfolio_list' => [

                        'label' => 'Portfolio List',

                        'permission_template' => 'crud',

                        'icon' => 'FolderTree',

                        'route' => '/projects/portfolio',

                        'api' => true,

                    ],

                    'portfolio_dashboard' => [

                        'label' => 'Portfolio Dashboard',

                        'permission_template' => 'read',

                        'icon' => 'ChartPie',

                        'route' => '/projects/portfolio/dashboard',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Milestones
            |--------------------------------------------------------------------------
            */

            'milestones' => [

                'label' => 'Milestones',

                'description' => 'Track project milestones.',

                'icon' => 'Flag',

                'route' => '/projects/milestones',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'milestone_list' => [

                        'label' => 'Milestone List',

                        'permission_template' => 'crud',

                        'icon' => 'FlagTriangleRight',

                        'route' => '/projects/milestones',

                        'api' => true,

                    ],

                    'milestone_progress' => [

                        'label' => 'Milestone Progress',

                        'permission_template' => 'read',

                        'icon' => 'ChartColumn',

                        'route' => '/projects/milestones/progress',

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | Timesheets
            |--------------------------------------------------------------------------
            */

            'timesheets' => [

                'label' => 'Timesheets',

                'description' => 'Track employee working hours on projects.',

                'icon' => 'Clock3',

                'route' => '/projects/timesheets',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'timesheet_entries' => [

                        'label' => 'Timesheet Entries',

                        'permission_template' => 'crud',

                        'icon' => 'Clock',

                        'route' => '/projects/timesheets',

                        'api' => true,

                    ],

                    'timesheet_approval' => [

                        'label' => 'Timesheet Approval',

                        'permission_template' => 'approval',

                        'icon' => 'BadgeCheck',

                        'route' => '/projects/timesheets/approval',

                        'api' => true,

                    ],

                    'timesheet_reports' => [

                        'label' => 'Timesheet Reports',

                        'permission_template' => 'read',

                        'icon' => 'FileClock',

                        'route' => '/projects/timesheets/reports',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Resource Allocation
            |--------------------------------------------------------------------------
            */

            'resource_allocation' => [

                'label' => 'Resource Allocation',

                'description' => 'Allocate employees and resources to projects.',

                'icon' => 'UsersRound',

                'route' => '/projects/resources',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'resource_planner' => [

                        'label' => 'Resource Planner',

                        'permission_template' => 'crud',

                        'icon' => 'CalendarRange',

                        'route' => '/projects/resources/planner',

                        'api' => true,

                    ],

                    'resource_assignment' => [

                        'label' => 'Resource Assignment',

                        'permission_template' => 'crud',

                        'icon' => 'UserRoundPlus',

                        'route' => '/projects/resources/assignment',

                        'api' => true,

                    ],

                    'resource_utilization' => [

                        'label' => 'Resource Utilization',

                        'permission_template' => 'read',

                        'icon' => 'ChartColumn',

                        'route' => '/projects/resources/utilization',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Team Collaboration
            |--------------------------------------------------------------------------
            */

            'collaboration' => [

                'label' => 'Team Collaboration',

                'description' => 'Collaborate with project members.',

                'icon' => 'MessagesSquare',

                'route' => '/projects/collaboration',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'discussions' => [

                        'label' => 'Discussions',

                        'permission_template' => 'crud',

                        'icon' => 'MessageCircle',

                        'route' => '/projects/collaboration/discussions',

                        'api' => true,

                    ],

                    'announcements' => [

                        'label' => 'Announcements',

                        'permission_template' => 'crud',

                        'icon' => 'Megaphone',

                        'route' => '/projects/collaboration/announcements',

                        'api' => true,

                    ],

                    'activity_feed' => [

                        'label' => 'Activity Feed',

                        'permission_template' => 'read',

                        'icon' => 'Activity',

                        'route' => '/projects/collaboration/activity',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Project Documents
            |--------------------------------------------------------------------------
            */

            'documents' => [

                'label' => 'Project Documents',

                'description' => 'Manage project related documents.',

                'icon' => 'FolderOpen',

                'route' => '/projects/documents',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'document_library' => [

                        'label' => 'Document Library',

                        'permission_template' => 'crud',

                        'icon' => 'LibraryBig',

                        'route' => '/projects/documents',

                        'api' => true,

                    ],

                    'shared_files' => [

                        'label' => 'Shared Files',

                        'permission_template' => 'read',

                        'icon' => 'Share2',

                        'route' => '/projects/documents/shared',

                        'api' => true,

                    ],

                    'document_versions' => [

                        'label' => 'Document Versions',

                        'permission_template' => 'read',

                        'icon' => 'GitBranch',

                        'route' => '/projects/documents/versions',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Risks & Issues
            |--------------------------------------------------------------------------
            */

            'risks' => [

                'label' => 'Risks & Issues',

                'description' => 'Manage project risks and issues.',

                'icon' => 'TriangleAlert',

                'route' => '/projects/risks',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'risk_register' => [

                        'label' => 'Risk Register',

                        'permission_template' => 'crud',

                        'icon' => 'ShieldAlert',

                        'route' => '/projects/risks/register',

                        'api' => true,

                    ],

                    'issue_tracker' => [

                        'label' => 'Issue Tracker',

                        'permission_template' => 'crud',

                        'icon' => 'Bug',

                        'route' => '/projects/risks/issues',

                        'api' => true,

                    ],

                    'risk_assessment' => [

                        'label' => 'Risk Assessment',

                        'permission_template' => 'read',

                        'icon' => 'ClipboardSearch',

                        'route' => '/projects/risks/assessment',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Change Requests
            |--------------------------------------------------------------------------
            */

            'change_requests' => [

                'label' => 'Change Requests',

                'description' => 'Manage project scope and change requests.',

                'icon' => 'GitPullRequest',

                'route' => '/projects/change-requests',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'request_list' => [

                        'label' => 'Request List',

                        'permission_template' => 'crud',

                        'icon' => 'FileEdit',

                        'route' => '/projects/change-requests',

                        'api' => true,

                    ],

                    'request_approval' => [

                        'label' => 'Approval',

                        'permission_template' => 'approval',

                        'icon' => 'BadgeCheck',

                        'route' => '/projects/change-requests/approval',

                        'api' => true,

                    ],

                    'change_history' => [

                        'label' => 'Change History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/projects/change-requests/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Project Budget
            |--------------------------------------------------------------------------
            */

            'budget' => [

                'label' => 'Project Budget',

                'description' => 'Manage project budgets and expenses.',

                'icon' => 'Wallet',

                'route' => '/projects/budget',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'budget_planning' => [

                        'label' => 'Budget Planning',

                        'permission_template' => 'crud',

                        'icon' => 'Calculator',

                        'route' => '/projects/budget/planning',

                        'api' => true,

                    ],

                    'expense_tracking' => [

                        'label' => 'Expense Tracking',

                        'permission_template' => 'crud',

                        'icon' => 'Receipt',

                        'route' => '/projects/budget/expenses',

                        'api' => true,

                    ],

                    'budget_reports' => [

                        'label' => 'Budget Reports',

                        'permission_template' => 'read',

                        'icon' => 'ChartPie',

                        'route' => '/projects/budget/reports',

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | Reports
            |--------------------------------------------------------------------------
            */

            'reports' => [

                'label' => 'Project Reports',

                'description' => 'Generate project reports and summaries.',

                'icon' => 'FileBarChart',

                'route' => '/projects/reports',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'project_summary_report' => [

                        'label' => 'Project Summary Report',

                        'permission_template' => 'read',

                        'icon' => 'ChartColumn',

                        'route' => '/projects/reports/summary',

                        'api' => true,

                    ],

                    'task_report' => [

                        'label' => 'Task Report',

                        'permission_template' => 'read',

                        'icon' => 'ListTodo',

                        'route' => '/projects/reports/tasks',

                        'api' => true,

                    ],

                    'resource_report' => [

                        'label' => 'Resource Report',

                        'permission_template' => 'read',

                        'icon' => 'UsersRound',

                        'route' => '/projects/reports/resources',

                        'api' => true,

                    ],

                    'timesheet_report' => [

                        'label' => 'Timesheet Report',

                        'permission_template' => 'read',

                        'icon' => 'Clock3',

                        'route' => '/projects/reports/timesheets',

                        'api' => true,

                    ],

                    'budget_report' => [

                        'label' => 'Budget Report',

                        'permission_template' => 'read',

                        'icon' => 'Wallet',

                        'route' => '/projects/reports/budget',

                        'api' => true,

                    ],

                    'risk_report' => [

                        'label' => 'Risk Report',

                        'permission_template' => 'read',

                        'icon' => 'TriangleAlert',

                        'route' => '/projects/reports/risks',

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

                'label' => 'Project Analytics',

                'description' => 'Project performance analytics and KPIs.',

                'icon' => 'ChartPie',

                'route' => '/projects/analytics',

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

                'label' => 'Import Projects',

                'description' => 'Import project data.',

                'icon' => 'FileUp',

                'route' => '/projects/import',

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

                'label' => 'Export Projects',

                'description' => 'Export project data.',

                'icon' => 'FileDown',

                'route' => '/projects/export',

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

                'description' => 'Perform bulk project operations.',

                'icon' => 'Boxes',

                'route' => '/projects/bulk',

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

                'label' => 'Project Notifications',

                'description' => 'Project reminders and notifications.',

                'icon' => 'Bell',

                'route' => '/projects/notifications',

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
            | AI Project Insights
            |--------------------------------------------------------------------------
            */

            'ai' => [

                'label' => 'AI Project Insights',

                'description' => 'AI-powered project intelligence and forecasting.',

                'icon' => 'Bot',

                'route' => '/projects/ai',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'project_health' => [

                        'label' => 'Project Health Score',

                        'permission_template' => 'read',

                        'icon' => 'HeartPulse',

                        'route' => '/projects/ai/health-score',

                        'api' => true,

                    ],

                    'resource_optimization' => [

                        'label' => 'Resource Optimization',

                        'permission_template' => 'read',

                        'icon' => 'Brain',

                        'route' => '/projects/ai/resource-optimization',

                        'api' => true,

                    ],

                    'risk_prediction' => [

                        'label' => 'Risk Prediction',

                        'permission_template' => 'read',

                        'icon' => 'ShieldAlert',

                        'route' => '/projects/ai/risk-prediction',

                        'api' => true,

                    ],

                    'schedule_forecasting' => [

                        'label' => 'Schedule Forecasting',

                        'permission_template' => 'read',

                        'icon' => 'CalendarClock',

                        'route' => '/projects/ai/schedule-forecast',

                        'api' => true,

                    ],

                    'budget_forecasting' => [

                        'label' => 'Budget Forecasting',

                        'permission_template' => 'read',

                        'icon' => 'TrendingUp',

                        'route' => '/projects/ai/budget-forecast',

                        'api' => true,

                    ],

                ],

            ],

        ],

    ],

];