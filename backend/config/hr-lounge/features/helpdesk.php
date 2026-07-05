<?php

return [

    'helpdesk' => [

        /*
        |--------------------------------------------------------------------------
        | Module Information
        |--------------------------------------------------------------------------
        */

        'label' => 'Help Desk',

        'description' => 'Enterprise help desk and ticket management system.',

        'icon' => 'Headset',

        'route' => '/helpdesk',

        'group' => 'operations',

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

                'label' => 'Help Desk Dashboard',

                'description' => 'Support ticket overview dashboard.',

                'icon' => 'LayoutDashboard',

                'route' => '/helpdesk',

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
            | Tickets
            |--------------------------------------------------------------------------
            */

            'tickets' => [

                'label' => 'Tickets',

                'description' => 'Manage support tickets.',

                'icon' => 'Ticket',

                'route' => '/helpdesk/tickets',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'ticket_list' => [

                        'label' => 'Ticket List',

                        'description' => 'Browse and manage support tickets.',

                        'icon' => 'List',

                        'route' => '/helpdesk/tickets',

                        'permission_template' => 'crud',

                        'api' => true,

                    ],

                    'ticket_assignment' => [

                        'label' => 'Ticket Assignment',

                        'description' => 'Assign tickets to agents.',

                        'icon' => 'UserRoundPlus',

                        'route' => '/helpdesk/tickets/assignment',

                        'permission_template' => 'crud',

                        'api' => true,

                    ],

                    'ticket_approval' => [

                        'label' => 'Ticket Approval',

                        'description' => 'Approve ticket resolution when required.',

                        'icon' => 'BadgeCheck',

                        'route' => '/helpdesk/tickets/approval',

                        'permission_template' => 'approval',

                        'api' => true,

                    ],

                    'ticket_history' => [

                        'label' => 'Ticket History',

                        'description' => 'Track complete ticket lifecycle.',

                        'icon' => 'History',

                        'route' => '/helpdesk/tickets/history',

                        'permission_template' => 'read',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Ticket Categories
            |--------------------------------------------------------------------------
            */

            'categories' => [

                'label' => 'Ticket Categories',

                'description' => 'Manage support categories.',

                'icon' => 'FolderTree',

                'route' => '/helpdesk/categories',

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

                        'icon' => 'Folder',

                        'route' => '/helpdesk/categories',

                        'api' => true,

                    ],

                    'sub_categories' => [

                        'label' => 'Sub Categories',

                        'permission_template' => 'crud',

                        'icon' => 'Folders',

                        'route' => '/helpdesk/categories/subcategories',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Priorities
            |--------------------------------------------------------------------------
            */

            'priorities' => [

                'label' => 'Priorities',

                'description' => 'Manage ticket priorities.',

                'icon' => 'Flag',

                'route' => '/helpdesk/priorities',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'priority_levels' => [

                        'label' => 'Priority Levels',

                        'permission_template' => 'crud',

                        'icon' => 'FlagTriangleRight',

                        'route' => '/helpdesk/priorities',

                        'api' => true,

                    ],

                    'priority_matrix' => [

                        'label' => 'Priority Matrix',

                        'permission_template' => 'crud',

                        'icon' => 'Grid2X2',

                        'route' => '/helpdesk/priorities/matrix',

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | SLA Management
            |--------------------------------------------------------------------------
            */

            'sla' => [

                'label' => 'SLA Management',

                'description' => 'Manage service level agreements.',

                'icon' => 'Timer',

                'route' => '/helpdesk/sla',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'sla_policies' => [

                        'label' => 'SLA Policies',

                        'permission_template' => 'crud',

                        'icon' => 'ShieldCheck',

                        'route' => '/helpdesk/sla/policies',

                        'api' => true,

                    ],

                    'business_hours' => [

                        'label' => 'Business Hours',

                        'permission_template' => 'crud',

                        'icon' => 'Clock3',

                        'route' => '/helpdesk/sla/business-hours',

                        'api' => true,

                    ],

                    'sla_monitoring' => [

                        'label' => 'SLA Monitoring',

                        'permission_template' => 'read',

                        'icon' => 'Activity',

                        'route' => '/helpdesk/sla/monitoring',

                        'api' => true,

                    ],

                    'sla_breach_history' => [

                        'label' => 'SLA Breach History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/helpdesk/sla/breaches',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Queues
            |--------------------------------------------------------------------------
            */

            'queues' => [

                'label' => 'Queues',

                'description' => 'Manage support queues.',

                'icon' => 'Rows3',

                'route' => '/helpdesk/queues',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'queue_list' => [

                        'label' => 'Queue List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/helpdesk/queues',

                        'api' => true,

                    ],

                    'queue_rules' => [

                        'label' => 'Queue Rules',

                        'permission_template' => 'crud',

                        'icon' => 'Workflow',

                        'route' => '/helpdesk/queues/rules',

                        'api' => true,

                    ],

                    'queue_monitor' => [

                        'label' => 'Queue Monitor',

                        'permission_template' => 'read',

                        'icon' => 'Monitor',

                        'route' => '/helpdesk/queues/monitor',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Agents
            |--------------------------------------------------------------------------
            */

            'agents' => [

                'label' => 'Support Agents',

                'description' => 'Manage help desk agents.',

                'icon' => 'Headphones',

                'route' => '/helpdesk/agents',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'agent_list' => [

                        'label' => 'Agent List',

                        'permission_template' => 'crud',

                        'icon' => 'Users',

                        'route' => '/helpdesk/agents',

                        'api' => true,

                    ],

                    'agent_groups' => [

                        'label' => 'Agent Groups',

                        'permission_template' => 'crud',

                        'icon' => 'UsersRound',

                        'route' => '/helpdesk/agents/groups',

                        'api' => true,

                    ],

                    'agent_workload' => [

                        'label' => 'Agent Workload',

                        'permission_template' => 'read',

                        'icon' => 'ChartColumn',

                        'route' => '/helpdesk/agents/workload',

                        'api' => true,

                    ],

                    'agent_performance' => [

                        'label' => 'Agent Performance',

                        'permission_template' => 'read',

                        'icon' => 'TrendingUp',

                        'route' => '/helpdesk/agents/performance',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Ticket Routing
            |--------------------------------------------------------------------------
            */

            'routing' => [

                'label' => 'Ticket Routing',

                'description' => 'Automatically assign and route tickets.',

                'icon' => 'GitMerge',

                'route' => '/helpdesk/routing',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'routing_rules' => [

                        'label' => 'Routing Rules',

                        'permission_template' => 'crud',

                        'icon' => 'Workflow',

                        'route' => '/helpdesk/routing/rules',

                        'api' => true,

                    ],

                    'auto_assignment' => [

                        'label' => 'Auto Assignment',

                        'permission_template' => 'crud',

                        'icon' => 'Bot',

                        'route' => '/helpdesk/routing/auto-assignment',

                        'api' => true,

                    ],

                    'load_balancing' => [

                        'label' => 'Load Balancing',

                        'permission_template' => 'crud',

                        'icon' => 'Scale',

                        'route' => '/helpdesk/routing/load-balancing',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Escalation Rules
            |--------------------------------------------------------------------------
            */

            'escalations' => [

                'label' => 'Escalation Rules',

                'description' => 'Configure automatic ticket escalation.',

                'icon' => 'ArrowUpCircle',

                'route' => '/helpdesk/escalations',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'escalation_rules' => [

                        'label' => 'Escalation Rules',

                        'permission_template' => 'crud',

                        'icon' => 'GitPullRequest',

                        'route' => '/helpdesk/escalations/rules',

                        'api' => true,

                    ],

                    'escalation_history' => [

                        'label' => 'Escalation History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/helpdesk/escalations/history',

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | Knowledge Base
            |--------------------------------------------------------------------------
            */

            'knowledge_base' => [

                'label' => 'Knowledge Base',

                'description' => 'Central knowledge repository for support articles.',

                'icon' => 'LibraryBig',

                'route' => '/helpdesk/knowledge-base',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'articles' => [

                        'label' => 'Knowledge Articles',

                        'permission_template' => 'crud',

                        'icon' => 'BookOpen',

                        'route' => '/helpdesk/knowledge-base/articles',

                        'api' => true,

                    ],

                    'categories' => [

                        'label' => 'Knowledge Categories',

                        'permission_template' => 'crud',

                        'icon' => 'FolderTree',

                        'route' => '/helpdesk/knowledge-base/categories',

                        'api' => true,

                    ],

                    'article_review' => [

                        'label' => 'Article Review',

                        'permission_template' => 'approval',

                        'icon' => 'ClipboardCheck',

                        'route' => '/helpdesk/knowledge-base/review',

                        'api' => true,

                    ],

                    'article_history' => [

                        'label' => 'Article History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/helpdesk/knowledge-base/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | FAQ Management
            |--------------------------------------------------------------------------
            */

            'faq' => [

                'label' => 'FAQ Management',

                'description' => 'Manage frequently asked questions.',

                'icon' => 'CircleHelp',

                'route' => '/helpdesk/faq',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'faq_list' => [

                        'label' => 'FAQ List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/helpdesk/faq',

                        'api' => true,

                    ],

                    'faq_categories' => [

                        'label' => 'FAQ Categories',

                        'permission_template' => 'crud',

                        'icon' => 'Folder',

                        'route' => '/helpdesk/faq/categories',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Canned Responses
            |--------------------------------------------------------------------------
            */

            'canned_responses' => [

                'label' => 'Canned Responses',

                'description' => 'Reusable support reply templates.',

                'icon' => 'MessageSquareQuote',

                'route' => '/helpdesk/canned-responses',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'response_library' => [

                        'label' => 'Response Library',

                        'permission_template' => 'crud',

                        'icon' => 'MessagesSquare',

                        'route' => '/helpdesk/canned-responses',

                        'api' => true,

                    ],

                    'response_categories' => [

                        'label' => 'Response Categories',

                        'permission_template' => 'crud',

                        'icon' => 'FolderTree',

                        'route' => '/helpdesk/canned-responses/categories',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Customer Feedback
            |--------------------------------------------------------------------------
            */

            'customer_feedback' => [

                'label' => 'Customer Feedback',

                'description' => 'Collect customer feedback after ticket resolution.',

                'icon' => 'MessageCircleHeart',

                'route' => '/helpdesk/feedback',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'feedback_list' => [

                        'label' => 'Feedback List',

                        'permission_template' => 'read',

                        'icon' => 'MessagesSquare',

                        'route' => '/helpdesk/feedback',

                        'api' => true,

                    ],

                    'csat_surveys' => [

                        'label' => 'CSAT Surveys',

                        'permission_template' => 'crud',

                        'icon' => 'BadgePercent',

                        'route' => '/helpdesk/feedback/csat',

                        'api' => true,

                    ],

                    'customer_ratings' => [

                        'label' => 'Customer Ratings',

                        'permission_template' => 'read',

                        'icon' => 'Star',

                        'route' => '/helpdesk/feedback/ratings',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Ticket Audit Log
            |--------------------------------------------------------------------------
            */

            'ticket_audit' => [

                'label' => 'Ticket Audit Log',

                'description' => 'Track every activity performed on tickets.',

                'icon' => 'ClipboardSearch',

                'route' => '/helpdesk/audit',

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
            | Ticket Timeline
            |--------------------------------------------------------------------------
            */

            'ticket_timeline' => [

                'label' => 'Ticket Timeline',

                'description' => 'View complete ticket lifecycle timeline.',

                'icon' => 'History',

                'route' => '/helpdesk/timeline',

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

                'label' => 'Help Desk Reports',

                'description' => 'Generate help desk operational reports.',

                'icon' => 'FileBarChart',

                'route' => '/helpdesk/reports',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'ticket_summary_report' => [

                        'label' => 'Ticket Summary Report',

                        'permission_template' => 'read',

                        'icon' => 'ChartColumn',

                        'route' => '/helpdesk/reports/summary',

                        'api' => true,

                    ],

                    'sla_report' => [

                        'label' => 'SLA Report',

                        'permission_template' => 'read',

                        'icon' => 'Timer',

                        'route' => '/helpdesk/reports/sla',

                        'api' => true,

                    ],

                    'agent_performance_report' => [

                        'label' => 'Agent Performance Report',

                        'permission_template' => 'read',

                        'icon' => 'TrendingUp',

                        'route' => '/helpdesk/reports/agents',

                        'api' => true,

                    ],

                    'customer_satisfaction_report' => [

                        'label' => 'Customer Satisfaction Report',

                        'permission_template' => 'read',

                        'icon' => 'Smile',

                        'route' => '/helpdesk/reports/csat',

                        'api' => true,

                    ],

                    'category_report' => [

                        'label' => 'Category Report',

                        'permission_template' => 'read',

                        'icon' => 'FolderTree',

                        'route' => '/helpdesk/reports/categories',

                        'api' => true,

                    ],

                    'workload_report' => [

                        'label' => 'Workload Report',

                        'permission_template' => 'read',

                        'icon' => 'ChartPie',

                        'route' => '/helpdesk/reports/workload',

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

                'label' => 'Help Desk Analytics',

                'description' => 'Ticket analytics and operational KPIs.',

                'icon' => 'ChartPie',

                'route' => '/helpdesk/analytics',

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

                'label' => 'Import Tickets',

                'description' => 'Bulk import support tickets.',

                'icon' => 'FileUp',

                'route' => '/helpdesk/import',

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

                'label' => 'Export Tickets',

                'description' => 'Export support ticket data.',

                'icon' => 'FileDown',

                'route' => '/helpdesk/export',

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

                'description' => 'Execute bulk actions on tickets.',

                'icon' => 'Boxes',

                'route' => '/helpdesk/bulk',

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

                'label' => 'Notifications',

                'description' => 'Help desk notifications and alerts.',

                'icon' => 'Bell',

                'route' => '/helpdesk/notifications',

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
            | AI Ticket Assistant
            |--------------------------------------------------------------------------
            */

            'ai' => [

                'label' => 'AI Ticket Assistant',

                'description' => 'AI powered ticket intelligence and automation.',

                'icon' => 'Bot',

                'route' => '/helpdesk/ai',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'ticket_classification' => [

                        'label' => 'AI Ticket Classification',

                        'permission_template' => 'read',

                        'icon' => 'Brain',

                        'route' => '/helpdesk/ai/classification',

                        'api' => true,

                    ],

                    'reply_suggestions' => [

                        'label' => 'AI Reply Suggestions',

                        'permission_template' => 'read',

                        'icon' => 'MessageSquareText',

                        'route' => '/helpdesk/ai/reply-suggestions',

                        'api' => true,

                    ],

                    'sentiment_analysis' => [

                        'label' => 'AI Sentiment Analysis',

                        'permission_template' => 'read',

                        'icon' => 'ScanFace',

                        'route' => '/helpdesk/ai/sentiment',

                        'api' => true,

                    ],

                    'resolution_prediction' => [

                        'label' => 'Resolution Prediction',

                        'permission_template' => 'read',

                        'icon' => 'Sparkles',

                        'route' => '/helpdesk/ai/resolution-prediction',

                        'api' => true,

                    ],

                    'workload_prediction' => [

                        'label' => 'Ticket Volume Forecast',

                        'permission_template' => 'read',

                        'icon' => 'ChartLine',

                        'route' => '/helpdesk/ai/workload-forecast',

                        'api' => true,

                    ],

                ],

            ],

        ],

    ],

];