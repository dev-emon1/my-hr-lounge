<?php

return [

    'notifications' => [

        /*
        |--------------------------------------------------------------------------
        | Module Information
        |--------------------------------------------------------------------------
        */

        'label' => 'Notification Management',

        'description' => 'Manage enterprise notifications, templates and delivery channels.',

        'icon' => 'Bell',

        'route' => '/notifications',

        'group' => 'core',

        'version' => '1.0.0',

        'phase' => 1,

        'order' => 90,

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

                'label' => 'Notification Dashboard',

                'description' => 'Notification overview dashboard.',

                'icon' => 'LayoutDashboard',

                'route' => '/notifications',

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
            | Notification Center
            |--------------------------------------------------------------------------
            */

            'notification_center' => [

                'label' => 'Notification Center',

                'description' => 'Manage all system notifications.',

                'icon' => 'BellRing',

                'route' => '/notifications/center',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'notification_list' => [

                        'label' => 'Notification List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/notifications/center',

                        'api' => true,

                    ],

                    'notification_history' => [

                        'label' => 'Notification History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/notifications/center/history',

                        'api' => true,

                    ],

                    'failed_notifications' => [

                        'label' => 'Failed Notifications',

                        'permission_template' => 'read',

                        'icon' => 'CircleAlert',

                        'route' => '/notifications/center/failed',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Notification Templates
            |--------------------------------------------------------------------------
            */

            'templates' => [

                'label' => 'Notification Templates',

                'description' => 'Manage reusable notification templates.',

                'icon' => 'FileText',

                'route' => '/notifications/templates',

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

                        'route' => '/notifications/templates',

                        'api' => true,

                    ],

                    'template_categories' => [

                        'label' => 'Template Categories',

                        'permission_template' => 'crud',

                        'icon' => 'FolderTree',

                        'route' => '/notifications/templates/categories',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Email Notifications
            |--------------------------------------------------------------------------
            */

            'email_notifications' => [

                'label' => 'Email Notifications',

                'description' => 'Configure email notification services.',

                'icon' => 'Mail',

                'route' => '/notifications/email',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'email_templates' => [

                        'label' => 'Email Templates',

                        'permission_template' => 'crud',

                        'icon' => 'MailOpen',

                        'route' => '/notifications/email/templates',

                        'api' => true,

                    ],

                    'smtp_settings' => [

                        'label' => 'SMTP Settings',

                        'permission_template' => 'crud',

                        'icon' => 'Server',

                        'route' => '/notifications/email/smtp',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | SMS Notifications
            |--------------------------------------------------------------------------
            */

            'sms_notifications' => [

                'label' => 'SMS Notifications',

                'description' => 'Configure SMS gateway and templates.',

                'icon' => 'MessageSquare',

                'route' => '/notifications/sms',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'sms_templates' => [

                        'label' => 'SMS Templates',

                        'permission_template' => 'crud',

                        'icon' => 'MessagesSquare',

                        'route' => '/notifications/sms/templates',

                        'api' => true,

                    ],

                    'sms_gateways' => [

                        'label' => 'SMS Gateways',

                        'permission_template' => 'crud',

                        'icon' => 'RadioTower',

                        'route' => '/notifications/sms/gateways',

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | Push Notifications
            |--------------------------------------------------------------------------
            */

            'push_notifications' => [

                'label' => 'Push Notifications',

                'description' => 'Manage push notification providers and templates.',

                'icon' => 'Smartphone',

                'route' => '/notifications/push',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'push_templates' => [

                        'label' => 'Push Templates',

                        'permission_template' => 'crud',

                        'icon' => 'BellRing',

                        'route' => '/notifications/push/templates',

                        'api' => true,

                    ],

                    'push_providers' => [

                        'label' => 'Push Providers',

                        'permission_template' => 'crud',

                        'icon' => 'Cloud',

                        'route' => '/notifications/push/providers',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | In-App Notifications
            |--------------------------------------------------------------------------
            */

            'in_app_notifications' => [

                'label' => 'In-App Notifications',

                'description' => 'Manage in-app notification settings.',

                'icon' => 'Monitor',

                'route' => '/notifications/in-app',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'notification_feed' => [

                        'label' => 'Notification Feed',

                        'permission_template' => 'read',

                        'icon' => 'Inbox',

                        'route' => '/notifications/in-app/feed',

                        'api' => true,

                    ],

                    'toast_notifications' => [

                        'label' => 'Toast Notifications',

                        'permission_template' => 'crud',

                        'icon' => 'PanelTop',

                        'route' => '/notifications/in-app/toasts',

                        'api' => true,

                    ],

                    'announcement_banner' => [

                        'label' => 'Announcement Banner',

                        'permission_template' => 'crud',

                        'icon' => 'Megaphone',

                        'route' => '/notifications/in-app/banner',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Event Triggers
            |--------------------------------------------------------------------------
            */

            'event_triggers' => [

                'label' => 'Event Triggers',

                'description' => 'Configure notification trigger events.',

                'icon' => 'Zap',

                'route' => '/notifications/event-triggers',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'trigger_list' => [

                        'label' => 'Trigger List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/notifications/event-triggers',

                        'api' => true,

                    ],

                    'module_events' => [

                        'label' => 'Module Events',

                        'permission_template' => 'crud',

                        'icon' => 'Boxes',

                        'route' => '/notifications/event-triggers/modules',

                        'api' => true,

                    ],

                    'workflow_events' => [

                        'label' => 'Workflow Events',

                        'permission_template' => 'crud',

                        'icon' => 'Workflow',

                        'route' => '/notifications/event-triggers/workflows',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Delivery Channels
            |--------------------------------------------------------------------------
            */

            'delivery_channels' => [

                'label' => 'Delivery Channels',

                'description' => 'Configure notification delivery channels.',

                'icon' => 'Send',

                'route' => '/notifications/channels',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'channel_list' => [

                        'label' => 'Channel List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/notifications/channels',

                        'api' => true,

                    ],

                    'channel_priority' => [

                        'label' => 'Channel Priority',

                        'permission_template' => 'crud',

                        'icon' => 'ArrowUpDown',

                        'route' => '/notifications/channels/priority',

                        'api' => true,

                    ],

                    'fallback_channels' => [

                        'label' => 'Fallback Channels',

                        'permission_template' => 'crud',

                        'icon' => 'RefreshCcw',

                        'route' => '/notifications/channels/fallback',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Notification Preferences
            |--------------------------------------------------------------------------
            */

            'preferences' => [

                'label' => 'Notification Preferences',

                'description' => 'Manage user notification preferences.',

                'icon' => 'Settings2',

                'route' => '/notifications/preferences',

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
            | Queue Management
            |--------------------------------------------------------------------------
            */

            'queue_management' => [

                'label' => 'Queue Management',

                'description' => 'Manage notification queues.',

                'icon' => 'ListOrdered',

                'route' => '/notifications/queue',

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
            | Retry Policies
            |--------------------------------------------------------------------------
            */

            'retry_policies' => [

                'label' => 'Retry Policies',

                'description' => 'Configure retry policies for failed deliveries.',

                'icon' => 'RotateCcw',

                'route' => '/notifications/retry-policies',

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
            | Delivery Logs
            |--------------------------------------------------------------------------
            */

            'delivery_logs' => [

                'label' => 'Delivery Logs',

                'description' => 'View notification delivery logs.',

                'icon' => 'Logs',

                'route' => '/notifications/delivery-logs',

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

                'label' => 'Notification Reports',

                'description' => 'Generate notification delivery and communication reports.',

                'icon' => 'FileBarChart',

                'route' => '/notifications/reports',

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

                        'route' => '/notifications/reports/delivery',

                        'api' => true,

                    ],

                    'email_report' => [

                        'label' => 'Email Report',

                        'permission_template' => 'read',

                        'icon' => 'Mail',

                        'route' => '/notifications/reports/email',

                        'api' => true,

                    ],

                    'sms_report' => [

                        'label' => 'SMS Report',

                        'permission_template' => 'read',

                        'icon' => 'MessageSquare',

                        'route' => '/notifications/reports/sms',

                        'api' => true,

                    ],

                    'push_report' => [

                        'label' => 'Push Report',

                        'permission_template' => 'read',

                        'icon' => 'Smartphone',

                        'route' => '/notifications/reports/push',

                        'api' => true,

                    ],

                    'event_report' => [

                        'label' => 'Event Trigger Report',

                        'permission_template' => 'read',

                        'icon' => 'Zap',

                        'route' => '/notifications/reports/events',

                        'api' => true,

                    ],

                    'failure_report' => [

                        'label' => 'Failure Report',

                        'permission_template' => 'read',

                        'icon' => 'CircleAlert',

                        'route' => '/notifications/reports/failures',

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

                'label' => 'Notification Analytics',

                'description' => 'Communication analytics and delivery KPIs.',

                'icon' => 'ChartPie',

                'route' => '/notifications/analytics',

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

                'label' => 'Import Notification Templates',

                'description' => 'Bulk import notification templates.',

                'icon' => 'FileUp',

                'route' => '/notifications/import',

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

                'label' => 'Export Notifications',

                'description' => 'Export notification configurations.',

                'icon' => 'FileDown',

                'route' => '/notifications/export',

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

                'description' => 'Execute bulk notification operations.',

                'icon' => 'Boxes',

                'route' => '/notifications/bulk',

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
            | AI Notification Optimization
            |--------------------------------------------------------------------------
            */

            'ai' => [

                'label' => 'AI Notification Optimization',

                'description' => 'AI powered notification intelligence and delivery optimization.',

                'icon' => 'Bot',

                'route' => '/notifications/ai',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'delivery_performance' => [

                        'label' => 'Delivery Performance Analysis',

                        'permission_template' => 'read',

                        'icon' => 'ChartColumn',

                        'route' => '/notifications/ai/delivery-performance',

                        'api' => true,

                    ],

                    'engagement_analytics' => [

                        'label' => 'Notification Engagement Analytics',

                        'permission_template' => 'read',

                        'icon' => 'Activity',

                        'route' => '/notifications/ai/engagement',

                        'api' => true,

                    ],

                    'smart_recommendations' => [

                        'label' => 'Smart Delivery Recommendations',

                        'permission_template' => 'read',

                        'icon' => 'Sparkles',

                        'route' => '/notifications/ai/recommendations',

                        'api' => true,

                    ],

                    'channel_optimization' => [

                        'label' => 'Channel Optimization',

                        'permission_template' => 'read',

                        'icon' => 'SendHorizonal',

                        'route' => '/notifications/ai/channel-optimization',

                        'api' => true,

                    ],

                    'communication_dashboard' => [

                        'label' => 'Communication Intelligence Dashboard',

                        'permission_template' => 'read',

                        'icon' => 'BrainCircuit',

                        'route' => '/notifications/ai/dashboard',

                        'api' => true,

                    ],

                ],

            ],

        ],

    ],

];