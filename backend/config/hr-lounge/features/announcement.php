<?php

return [

    'announcement' => [

        /*
        |--------------------------------------------------------------------------
        | Module Information
        |--------------------------------------------------------------------------
        */

        'label' => 'Announcement Management',

        'description' => 'Enterprise internal announcements and communication management.',

        'icon' => 'Megaphone',

        'route' => '/announcements',

        'group' => 'communication',

        'version' => '1.0.0',

        'phase' => 1,

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

                'label' => 'Announcement Dashboard',

                'description' => 'Announcement overview dashboard.',

                'icon' => 'LayoutDashboard',

                'route' => '/announcements',

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
            | Company Announcements
            |--------------------------------------------------------------------------
            */

            'company_announcements' => [

                'label' => 'Company Announcements',

                'description' => 'Company wide announcements.',

                'icon' => 'Building2',

                'route' => '/announcements/company',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'announcement_list' => [

                        'label' => 'Announcement List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/announcements/company',

                        'api' => true,

                    ],

                    'published_announcements' => [

                        'label' => 'Published Announcements',

                        'permission_template' => 'read',

                        'icon' => 'Send',

                        'route' => '/announcements/company/published',

                        'api' => true,

                    ],

                    'draft_announcements' => [

                        'label' => 'Draft Announcements',

                        'permission_template' => 'crud',

                        'icon' => 'FileEdit',

                        'route' => '/announcements/company/drafts',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Department Announcements
            |--------------------------------------------------------------------------
            */

            'department_announcements' => [

                'label' => 'Department Announcements',

                'description' => 'Department specific announcements.',

                'icon' => 'Building',

                'route' => '/announcements/departments',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'department_list' => [

                        'label' => 'Department Announcements',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/announcements/departments',

                        'api' => true,

                    ],

                    'department_schedule' => [

                        'label' => 'Scheduled Department Announcements',

                        'permission_template' => 'crud',

                        'icon' => 'CalendarClock',

                        'route' => '/announcements/departments/scheduled',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Branch Announcements
            |--------------------------------------------------------------------------
            */

            'branch_announcements' => [

                'label' => 'Branch Announcements',

                'description' => 'Branch specific announcements.',

                'icon' => 'GitBranch',

                'route' => '/announcements/branches',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'branch_list' => [

                        'label' => 'Branch Announcements',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/announcements/branches',

                        'api' => true,

                    ],

                    'branch_archive' => [

                        'label' => 'Branch Archive',

                        'permission_template' => 'read',

                        'icon' => 'Archive',

                        'route' => '/announcements/branches/archive',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Team Announcements
            |--------------------------------------------------------------------------
            */

            'team_announcements' => [

                'label' => 'Team Announcements',

                'description' => 'Team based announcements.',

                'icon' => 'Users',

                'route' => '/announcements/teams',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'team_list' => [

                        'label' => 'Team Announcements',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/announcements/teams',

                        'api' => true,

                    ],

                    'team_schedule' => [

                        'label' => 'Scheduled Team Announcements',

                        'permission_template' => 'crud',

                        'icon' => 'CalendarClock',

                        'route' => '/announcements/teams/scheduled',

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | Target Audience
            |--------------------------------------------------------------------------
            */

            'target_audience' => [

                'label' => 'Target Audience',

                'description' => 'Manage announcement recipients and audience targeting.',

                'icon' => 'UsersRound',

                'route' => '/announcements/audience',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'audience_groups' => [

                        'label' => 'Audience Groups',

                        'permission_template' => 'crud',

                        'icon' => 'Users',

                        'route' => '/announcements/audience/groups',

                        'api' => true,

                    ],

                    'dynamic_audience' => [

                        'label' => 'Dynamic Audience',

                        'permission_template' => 'crud',

                        'icon' => 'Filter',

                        'route' => '/announcements/audience/dynamic',

                        'api' => true,

                    ],

                    'recipient_preview' => [

                        'label' => 'Recipient Preview',

                        'permission_template' => 'read',

                        'icon' => 'Eye',

                        'route' => '/announcements/audience/preview',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Categories
            |--------------------------------------------------------------------------
            */

            'categories' => [

                'label' => 'Announcement Categories',

                'description' => 'Manage announcement categories.',

                'icon' => 'FolderTree',

                'route' => '/announcements/categories',

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
            | Announcement Templates
            |--------------------------------------------------------------------------
            */

            'templates' => [

                'label' => 'Announcement Templates',

                'description' => 'Reusable announcement templates.',

                'icon' => 'FileText',

                'route' => '/announcements/templates',

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

                        'route' => '/announcements/templates',

                        'api' => true,

                    ],

                    'template_variables' => [

                        'label' => 'Template Variables',

                        'permission_template' => 'crud',

                        'icon' => 'Braces',

                        'route' => '/announcements/templates/variables',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Scheduling
            |--------------------------------------------------------------------------
            */

            'scheduling' => [

                'label' => 'Announcement Scheduling',

                'description' => 'Schedule announcements for future publishing.',

                'icon' => 'CalendarClock',

                'route' => '/announcements/scheduling',

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
            | Priority Management
            |--------------------------------------------------------------------------
            */

            'priority_management' => [

                'label' => 'Priority Management',

                'description' => 'Configure announcement priority levels.',

                'icon' => 'Flag',

                'route' => '/announcements/priorities',

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
            | Attachments
            |--------------------------------------------------------------------------
            */

            'attachments' => [

                'label' => 'Attachments',

                'description' => 'Manage announcement attachments.',

                'icon' => 'Paperclip',

                'route' => '/announcements/attachments',

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
            | Read Acknowledgement
            |--------------------------------------------------------------------------
            */

            'read_acknowledgement' => [

                'label' => 'Read Acknowledgement',

                'description' => 'Track announcement read acknowledgements.',

                'icon' => 'BadgeCheck',

                'route' => '/announcements/read-acknowledgement',

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
            | Comments & Reactions
            |--------------------------------------------------------------------------
            */

            'comments_reactions' => [

                'label' => 'Comments & Reactions',

                'description' => 'Manage comments and reactions on announcements.',

                'icon' => 'MessageCircle',

                'route' => '/announcements/comments',

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

                'label' => 'Announcement Reports',

                'description' => 'Generate announcement reports and communication insights.',

                'icon' => 'FileBarChart',

                'route' => '/announcements/reports',

                'permission_template' => 'read',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'delivery_report' => [

                        'label' => 'Delivery Report',

                        'permission_template' => 'read',

                        'icon' => 'Send',

                        'route' => '/announcements/reports/delivery',

                        'api' => true,

                    ],

                    'engagement_report' => [

                        'label' => 'Engagement Report',

                        'permission_template' => 'read',

                        'icon' => 'Activity',

                        'route' => '/announcements/reports/engagement',

                        'api' => true,

                    ],

                    'read_report' => [

                        'label' => 'Read Acknowledgement Report',

                        'permission_template' => 'read',

                        'icon' => 'BadgeCheck',

                        'route' => '/announcements/reports/read',

                        'api' => true,

                    ],

                    'audience_report' => [

                        'label' => 'Audience Report',

                        'permission_template' => 'read',

                        'icon' => 'Users',

                        'route' => '/announcements/reports/audience',

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

                'label' => 'Announcement Analytics',

                'description' => 'Announcement performance analytics and KPIs.',

                'icon' => 'ChartPie',

                'route' => '/announcements/analytics',

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

                'label' => 'Announcement Notifications',

                'description' => 'Manage announcement notification settings.',

                'icon' => 'Bell',

                'route' => '/announcements/notifications',

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
            | Import
            |--------------------------------------------------------------------------
            */

            'import' => [

                'label' => 'Import Announcements',

                'description' => 'Bulk import announcements.',

                'icon' => 'FileUp',

                'route' => '/announcements/import',

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

                'label' => 'Export Announcements',

                'description' => 'Export announcements and reports.',

                'icon' => 'FileDown',

                'route' => '/announcements/export',

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
            | AI Announcement Assistant
            |--------------------------------------------------------------------------
            */

            'ai' => [

                'label' => 'AI Announcement Assistant',

                'description' => 'AI powered announcement creation and communication intelligence.',

                'icon' => 'Bot',

                'route' => '/announcements/ai',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'content_suggestions' => [

                        'label' => 'Content Suggestions',

                        'permission_template' => 'read',

                        'icon' => 'Sparkles',

                        'route' => '/announcements/ai/content',

                        'api' => true,

                    ],

                    'engagement_analytics' => [

                        'label' => 'Engagement Analytics',

                        'permission_template' => 'read',

                        'icon' => 'ChartColumn',

                        'route' => '/announcements/ai/engagement',

                        'api' => true,

                    ],

                    'delivery_recommendations' => [

                        'label' => 'Smart Delivery Recommendations',

                        'permission_template' => 'read',

                        'icon' => 'Lightbulb',

                        'route' => '/announcements/ai/recommendations',

                        'api' => true,

                    ],

                    'audience_prediction' => [

                        'label' => 'Audience Prediction',

                        'permission_template' => 'read',

                        'icon' => 'Target',

                        'route' => '/announcements/ai/audience',

                        'api' => true,

                    ],

                    'announcement_dashboard' => [

                        'label' => 'Announcement Intelligence Dashboard',

                        'permission_template' => 'read',

                        'icon' => 'LayoutDashboard',

                        'route' => '/announcements/ai/dashboard',

                        'api' => true,

                    ],

                ],

            ],

        ],

    ],

];