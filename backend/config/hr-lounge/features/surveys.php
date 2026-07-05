<?php

return [

    'surveys' => [

        /*
        |--------------------------------------------------------------------------
        | Module Information
        |--------------------------------------------------------------------------
        */

        'label' => 'Surveys Management',

        'description' => 'Enterprise survey, feedback and employee engagement platform.',

        'icon' => 'ClipboardList',

        'route' => '/surveys',

        'group' => 'engagement',

        'version' => '1.0.0',

        'phase' => 2,

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

                'label' => 'Survey Dashboard',

                'description' => 'Survey overview and engagement dashboard.',

                'icon' => 'LayoutDashboard',

                'route' => '/surveys',

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
            | Survey Builder
            |--------------------------------------------------------------------------
            */

            'survey_builder' => [

                'label' => 'Survey Builder',

                'description' => 'Create and manage custom surveys.',

                'icon' => 'SquarePen',

                'route' => '/surveys/builder',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'survey_list' => [

                        'label' => 'Survey List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/surveys/builder',

                        'api' => true,

                    ],

                    'question_bank' => [

                        'label' => 'Question Bank',

                        'permission_template' => 'crud',

                        'icon' => 'Library',

                        'route' => '/surveys/builder/question-bank',

                        'api' => true,

                    ],

                    'question_types' => [

                        'label' => 'Question Types',

                        'permission_template' => 'crud',

                        'icon' => 'ListChecks',

                        'route' => '/surveys/builder/question-types',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Survey Templates
            |--------------------------------------------------------------------------
            */

            'survey_templates' => [

                'label' => 'Survey Templates',

                'description' => 'Reusable survey templates.',

                'icon' => 'FileText',

                'route' => '/surveys/templates',

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

                        'route' => '/surveys/templates',

                        'api' => true,

                    ],

                    'template_categories' => [

                        'label' => 'Template Categories',

                        'permission_template' => 'crud',

                        'icon' => 'FolderTree',

                        'route' => '/surveys/templates/categories',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Active Surveys
            |--------------------------------------------------------------------------
            */

            'active_surveys' => [

                'label' => 'Active Surveys',

                'description' => 'Manage active surveys.',

                'icon' => 'PlayCircle',

                'route' => '/surveys/active',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'active_list' => [

                        'label' => 'Active Survey List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/surveys/active',

                        'api' => true,

                    ],

                    'live_monitoring' => [

                        'label' => 'Live Monitoring',

                        'permission_template' => 'read',

                        'icon' => 'Activity',

                        'route' => '/surveys/active/live',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Scheduled Surveys
            |--------------------------------------------------------------------------
            */

            'scheduled_surveys' => [

                'label' => 'Scheduled Surveys',

                'description' => 'Schedule surveys for future publication.',

                'icon' => 'CalendarClock',

                'route' => '/surveys/scheduled',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'schedule_list' => [

                        'label' => 'Schedule List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/surveys/scheduled',

                        'api' => true,

                    ],

                    'recurring_surveys' => [

                        'label' => 'Recurring Surveys',

                        'permission_template' => 'crud',

                        'icon' => 'Repeat',

                        'route' => '/surveys/scheduled/recurring',

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | Anonymous Surveys
            |--------------------------------------------------------------------------
            */

            'anonymous_surveys' => [

                'label' => 'Anonymous Surveys',

                'description' => 'Create and manage anonymous employee surveys.',

                'icon' => 'UserX',

                'route' => '/surveys/anonymous',

                'permission_template' => 'crud',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'anonymous_list' => [

                        'label' => 'Anonymous Survey List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/surveys/anonymous',

                        'api' => true,

                    ],

                    'privacy_settings' => [

                        'label' => 'Privacy Settings',

                        'permission_template' => 'crud',

                        'icon' => 'Shield',

                        'route' => '/surveys/anonymous/privacy',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Pulse Surveys
            |--------------------------------------------------------------------------
            */

            'pulse_surveys' => [

                'label' => 'Pulse Surveys',

                'description' => 'Run short recurring employee pulse surveys.',

                'icon' => 'HeartPulse',

                'route' => '/surveys/pulse',

                'permission_template' => 'crud',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'pulse_list' => [

                        'label' => 'Pulse Survey List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/surveys/pulse',

                        'api' => true,

                    ],

                    'pulse_schedule' => [

                        'label' => 'Pulse Schedule',

                        'permission_template' => 'crud',

                        'icon' => 'CalendarClock',

                        'route' => '/surveys/pulse/schedule',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | 360° Feedback
            |--------------------------------------------------------------------------
            */

            'feedback_360' => [

                'label' => '360° Feedback',

                'description' => 'Manage multi-source employee feedback surveys.',

                'icon' => 'RefreshCw',

                'route' => '/surveys/360-feedback',

                'permission_template' => 'crud',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'feedback_cycles' => [

                        'label' => 'Feedback Cycles',

                        'permission_template' => 'crud',

                        'icon' => 'Repeat',

                        'route' => '/surveys/360-feedback/cycles',

                        'api' => true,

                    ],

                    'reviewers' => [

                        'label' => 'Reviewers',

                        'permission_template' => 'crud',

                        'icon' => 'Users',

                        'route' => '/surveys/360-feedback/reviewers',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Exit Surveys
            |--------------------------------------------------------------------------
            */

            'exit_surveys' => [

                'label' => 'Exit Surveys',

                'description' => 'Collect employee feedback during resignation.',

                'icon' => 'DoorOpen',

                'route' => '/surveys/exit',

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
            | Training Feedback
            |--------------------------------------------------------------------------
            */

            'training_feedback' => [

                'label' => 'Training Feedback',

                'description' => 'Collect training evaluation and feedback.',

                'icon' => 'GraduationCap',

                'route' => '/surveys/training-feedback',

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
            | Survey Responses
            |--------------------------------------------------------------------------
            */

            'responses' => [

                'label' => 'Survey Responses',

                'description' => 'View and manage submitted survey responses.',

                'icon' => 'ClipboardCheck',

                'route' => '/surveys/responses',

                'permission_template' => 'read',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'response_list' => [

                        'label' => 'Response List',

                        'permission_template' => 'read',

                        'icon' => 'List',

                        'route' => '/surveys/responses',

                        'api' => true,

                    ],

                    'response_review' => [

                        'label' => 'Response Review',

                        'permission_template' => 'read',

                        'icon' => 'Eye',

                        'route' => '/surveys/responses/review',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Import
            |--------------------------------------------------------------------------
            */

            'import' => [

                'label' => 'Import Surveys',

                'description' => 'Bulk import survey templates and questions.',

                'icon' => 'FileUp',

                'route' => '/surveys/import',

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

                'label' => 'Export Surveys',

                'description' => 'Export survey results and reports.',

                'icon' => 'FileDown',

                'route' => '/surveys/export',

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

                'label' => 'Survey Reports',

                'description' => 'Generate survey reports and response summaries.',

                'icon' => 'FileBarChart',

                'route' => '/surveys/reports',

                'permission_template' => 'read',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'response_report' => [

                        'label' => 'Response Report',

                        'permission_template' => 'read',

                        'icon' => 'ClipboardCheck',

                        'route' => '/surveys/reports/responses',

                        'api' => true,

                    ],

                    'engagement_report' => [

                        'label' => 'Engagement Report',

                        'permission_template' => 'read',

                        'icon' => 'Users',

                        'route' => '/surveys/reports/engagement',

                        'api' => true,

                    ],

                    'completion_report' => [

                        'label' => 'Completion Report',

                        'permission_template' => 'read',

                        'icon' => 'BadgeCheck',

                        'route' => '/surveys/reports/completion',

                        'api' => true,

                    ],

                    'feedback_report' => [

                        'label' => 'Feedback Report',

                        'permission_template' => 'read',

                        'icon' => 'MessageSquare',

                        'route' => '/surveys/reports/feedback',

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

                'label' => 'Survey Analytics',

                'description' => 'Survey participation, response trends and engagement analytics.',

                'icon' => 'ChartPie',

                'route' => '/surveys/analytics',

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

                'label' => 'Survey Notifications',

                'description' => 'Manage survey invitations and reminder notifications.',

                'icon' => 'Bell',

                'route' => '/surveys/notifications',

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
            | AI Survey Assistant
            |--------------------------------------------------------------------------
            */

            'ai' => [

                'label' => 'AI Survey Assistant',

                'description' => 'AI powered survey analysis, engagement prediction and recommendation engine.',

                'icon' => 'Bot',

                'route' => '/surveys/ai',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'sentiment_analysis' => [

                        'label' => 'Sentiment Analysis',

                        'permission_template' => 'read',

                        'icon' => 'HeartHandshake',

                        'route' => '/surveys/ai/sentiment',

                        'api' => true,

                    ],

                    'response_prediction' => [

                        'label' => 'Response Prediction',

                        'permission_template' => 'read',

                        'icon' => 'TrendingUp',

                        'route' => '/surveys/ai/response-prediction',

                        'api' => true,

                    ],

                    'quality_analysis' => [

                        'label' => 'Response Quality Analysis',

                        'permission_template' => 'read',

                        'icon' => 'ClipboardSearch',

                        'route' => '/surveys/ai/quality-analysis',

                        'api' => true,

                    ],

                    'engagement_insights' => [

                        'label' => 'Engagement Insights',

                        'permission_template' => 'read',

                        'icon' => 'ChartColumn',

                        'route' => '/surveys/ai/engagement',

                        'api' => true,

                    ],

                    'recommendation_engine' => [

                        'label' => 'Recommendation Engine',

                        'permission_template' => 'read',

                        'icon' => 'Lightbulb',

                        'route' => '/surveys/ai/recommendations',

                        'api' => true,

                    ],

                    'survey_dashboard' => [

                        'label' => 'Survey Intelligence Dashboard',

                        'permission_template' => 'read',

                        'icon' => 'LayoutDashboard',

                        'route' => '/surveys/ai/dashboard',

                        'api' => true,

                    ],

                ],

            ],

        ],

    ],

];