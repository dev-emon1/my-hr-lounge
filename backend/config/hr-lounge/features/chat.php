<?php

return [

    'chat' => [

        /*
        |--------------------------------------------------------------------------
        | Module Information
        |--------------------------------------------------------------------------
        */

        'label' => 'Chat Management',

        'description' => 'Enterprise messaging, collaboration and communication platform.',

        'icon' => 'MessagesSquare',

        'route' => '/chat',

        'group' => 'communication',

        'version' => '1.0.0',

        'phase' => 1,

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

                'label' => 'Chat Dashboard',

                'description' => 'Communication overview dashboard.',

                'icon' => 'LayoutDashboard',

                'route' => '/chat',

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
            | Direct Messages
            |--------------------------------------------------------------------------
            */

            'direct_messages' => [

                'label' => 'Direct Messages',

                'description' => 'One-to-one employee conversations.',

                'icon' => 'MessageCircle',

                'route' => '/chat/direct',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'conversation_list' => [

                        'label' => 'Conversation List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/chat/direct',

                        'api' => true,

                    ],

                    'starred_messages' => [

                        'label' => 'Starred Messages',

                        'permission_template' => 'crud',

                        'icon' => 'Star',

                        'route' => '/chat/direct/starred',

                        'api' => true,

                    ],

                    'message_requests' => [

                        'label' => 'Message Requests',

                        'permission_template' => 'crud',

                        'icon' => 'Inbox',

                        'route' => '/chat/direct/requests',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Team Chats
            |--------------------------------------------------------------------------
            */

            'team_chats' => [

                'label' => 'Team Chats',

                'description' => 'Team collaboration channels.',

                'icon' => 'Users',

                'route' => '/chat/teams',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'team_chat_list' => [

                        'label' => 'Team Chat List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/chat/teams',

                        'api' => true,

                    ],

                    'team_members' => [

                        'label' => 'Team Members',

                        'permission_template' => 'crud',

                        'icon' => 'UserRoundPlus',

                        'route' => '/chat/teams/members',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Department Chats
            |--------------------------------------------------------------------------
            */

            'department_chats' => [

                'label' => 'Department Chats',

                'description' => 'Department communication channels.',

                'icon' => 'Building2',

                'route' => '/chat/departments',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'department_chat_list' => [

                        'label' => 'Department Chats',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/chat/departments',

                        'api' => true,

                    ],

                    'department_moderators' => [

                        'label' => 'Department Moderators',

                        'permission_template' => 'crud',

                        'icon' => 'ShieldCheck',

                        'route' => '/chat/departments/moderators',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Group Chats
            |--------------------------------------------------------------------------
            */

            'group_chats' => [

                'label' => 'Group Chats',

                'description' => 'Private and public group conversations.',

                'icon' => 'UsersRound',

                'route' => '/chat/groups',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'group_list' => [

                        'label' => 'Group List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/chat/groups',

                        'api' => true,

                    ],

                    'group_permissions' => [

                        'label' => 'Group Permissions',

                        'permission_template' => 'crud',

                        'icon' => 'Shield',

                        'route' => '/chat/groups/permissions',

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | Channels
            |--------------------------------------------------------------------------
            */

            'channels' => [

                'label' => 'Channels',

                'description' => 'Manage public and private communication channels.',

                'icon' => 'Hash',

                'route' => '/chat/channels',

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

                        'route' => '/chat/channels',

                        'api' => true,

                    ],

                    'channel_categories' => [

                        'label' => 'Channel Categories',

                        'permission_template' => 'crud',

                        'icon' => 'FolderTree',

                        'route' => '/chat/channels/categories',

                        'api' => true,

                    ],

                    'channel_permissions' => [

                        'label' => 'Channel Permissions',

                        'permission_template' => 'crud',

                        'icon' => 'ShieldCheck',

                        'route' => '/chat/channels/permissions',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | File Sharing
            |--------------------------------------------------------------------------
            */

            'file_sharing' => [

                'label' => 'File Sharing',

                'description' => 'Share and manage files within conversations.',

                'icon' => 'Paperclip',

                'route' => '/chat/files',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'shared_files' => [

                        'label' => 'Shared Files',

                        'permission_template' => 'crud',

                        'icon' => 'Files',

                        'route' => '/chat/files/shared',

                        'api' => true,

                    ],

                    'media_gallery' => [

                        'label' => 'Media Gallery',

                        'permission_template' => 'read',

                        'icon' => 'Image',

                        'route' => '/chat/files/media',

                        'api' => true,

                    ],

                    'file_permissions' => [

                        'label' => 'File Permissions',

                        'permission_template' => 'crud',

                        'icon' => 'Lock',

                        'route' => '/chat/files/permissions',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Voice Messages
            |--------------------------------------------------------------------------
            */

            'voice_messages' => [

                'label' => 'Voice Messages',

                'description' => 'Manage voice message communication.',

                'icon' => 'Mic',

                'route' => '/chat/voice',

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
            | Video Calls
            |--------------------------------------------------------------------------
            */

            'video_calls' => [

                'label' => 'Video Calls',

                'description' => 'Audio and video meeting integration.',

                'icon' => 'Video',

                'route' => '/chat/video-calls',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'call_history' => [

                        'label' => 'Call History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/chat/video-calls/history',

                        'api' => true,

                    ],

                    'meeting_rooms' => [

                        'label' => 'Meeting Rooms',

                        'permission_template' => 'crud',

                        'icon' => 'MonitorPlay',

                        'route' => '/chat/video-calls/rooms',

                        'api' => true,

                    ],

                    'recordings' => [

                        'label' => 'Recordings',

                        'permission_template' => 'read',

                        'icon' => 'CircleDot',

                        'route' => '/chat/video-calls/recordings',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Message Templates
            |--------------------------------------------------------------------------
            */

            'message_templates' => [

                'label' => 'Message Templates',

                'description' => 'Reusable chat message templates.',

                'icon' => 'FileText',

                'route' => '/chat/templates',

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
            | Chat Settings
            |--------------------------------------------------------------------------
            */

            'chat_settings' => [

                'label' => 'Chat Settings',

                'description' => 'Configure chat preferences and communication policies.',

                'icon' => 'Settings',

                'route' => '/chat/settings',

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
            | Chat Archive
            |--------------------------------------------------------------------------
            */

            'chat_archive' => [

                'label' => 'Chat Archive',

                'description' => 'Archive and restore conversations.',

                'icon' => 'Archive',

                'route' => '/chat/archive',

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

                'label' => 'Chat Reports',

                'description' => 'Generate communication and messaging reports.',

                'icon' => 'FileBarChart',

                'route' => '/chat/reports',

                'permission_template' => 'read',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'usage_report' => [

                        'label' => 'Chat Usage Report',

                        'permission_template' => 'read',

                        'icon' => 'Activity',

                        'route' => '/chat/reports/usage',

                        'api' => true,

                    ],

                    'message_report' => [

                        'label' => 'Message Report',

                        'permission_template' => 'read',

                        'icon' => 'MessagesSquare',

                        'route' => '/chat/reports/messages',

                        'api' => true,

                    ],

                    'call_report' => [

                        'label' => 'Call Report',

                        'permission_template' => 'read',

                        'icon' => 'PhoneCall',

                        'route' => '/chat/reports/calls',

                        'api' => true,

                    ],

                    'file_report' => [

                        'label' => 'File Sharing Report',

                        'permission_template' => 'read',

                        'icon' => 'Files',

                        'route' => '/chat/reports/files',

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

                'label' => 'Chat Analytics',

                'description' => 'Communication analytics and engagement metrics.',

                'icon' => 'ChartPie',

                'route' => '/chat/analytics',

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

                'label' => 'Chat Notifications',

                'description' => 'Manage chat notification preferences.',

                'icon' => 'Bell',

                'route' => '/chat/notifications',

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

                'label' => 'Import Chat Data',

                'description' => 'Import conversations and chat configurations.',

                'icon' => 'FileUp',

                'route' => '/chat/import',

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

                'label' => 'Export Chat Data',

                'description' => 'Export conversations and communication history.',

                'icon' => 'FileDown',

                'route' => '/chat/export',

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
            | AI Chat Assistant
            |--------------------------------------------------------------------------
            */

            'ai' => [

                'label' => 'AI Chat Assistant',

                'description' => 'AI powered communication assistance and collaboration insights.',

                'icon' => 'Bot',

                'route' => '/chat/ai',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'smart_reply' => [

                        'label' => 'Smart Reply',

                        'permission_template' => 'read',

                        'icon' => 'Sparkles',

                        'route' => '/chat/ai/smart-reply',

                        'api' => true,

                    ],

                    'ai_translation' => [

                        'label' => 'AI Translation',

                        'permission_template' => 'read',

                        'icon' => 'Languages',

                        'route' => '/chat/ai/translation',

                        'api' => true,

                    ],

                    'conversation_insights' => [

                        'label' => 'Conversation Insights',

                        'permission_template' => 'read',

                        'icon' => 'ChartColumn',

                        'route' => '/chat/ai/insights',

                        'api' => true,

                    ],

                    'chat_moderation' => [

                        'label' => 'Chat Moderation',

                        'permission_template' => 'crud',

                        'icon' => 'ShieldCheck',

                        'route' => '/chat/ai/moderation',

                        'api' => true,

                    ],

                    'message_retention' => [

                        'label' => 'Message Retention Policies',

                        'permission_template' => 'crud',

                        'icon' => 'ArchiveRestore',

                        'route' => '/chat/ai/retention',

                        'api' => true,

                    ],

                    'sentiment_analysis' => [

                        'label' => 'Sentiment Analysis',

                        'permission_template' => 'read',

                        'icon' => 'HeartHandshake',

                        'route' => '/chat/ai/sentiment',

                        'api' => true,

                    ],

                    'communication_dashboard' => [

                        'label' => 'Communication Intelligence Dashboard',

                        'permission_template' => 'read',

                        'icon' => 'LayoutDashboard',

                        'route' => '/chat/ai/dashboard',

                        'api' => true,

                    ],

                ],

            ],

        ],

    ],

];