<?php

return [

    'api' => [

        /*
        |--------------------------------------------------------------------------
        | Module Information
        |--------------------------------------------------------------------------
        */

        'label' => 'API Management',

        'description' => 'Enterprise API gateway, developer platform and integration management.',

        'icon' => 'Waypoints',

        'route' => '/api-management',

        'group' => 'system',

        'version' => '1.0.0',

        'phase' => 2,

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

                'label' => 'API Dashboard',

                'description' => 'API gateway overview and health dashboard.',

                'icon' => 'LayoutDashboard',

                'route' => '/api-management',

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
            | API Keys
            |--------------------------------------------------------------------------
            */

            'api_keys' => [

                'label' => 'API Keys',

                'description' => 'Manage API keys and credentials.',

                'icon' => 'KeyRound',

                'route' => '/api-management/keys',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'key_list' => [

                        'label' => 'API Key List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/api-management/keys',

                        'api' => true,

                    ],

                    'key_rotation' => [

                        'label' => 'Key Rotation',

                        'permission_template' => 'crud',

                        'icon' => 'RefreshCw',

                        'route' => '/api-management/keys/rotation',

                        'api' => true,

                    ],

                    'revoked_keys' => [

                        'label' => 'Revoked Keys',

                        'permission_template' => 'read',

                        'icon' => 'KeySquare',

                        'route' => '/api-management/keys/revoked',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | OAuth Clients
            |--------------------------------------------------------------------------
            */

            'oauth_clients' => [

                'label' => 'OAuth Clients',

                'description' => 'Manage OAuth applications and clients.',

                'icon' => 'ShieldCheck',

                'route' => '/api-management/oauth',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'client_list' => [

                        'label' => 'OAuth Client List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/api-management/oauth',

                        'api' => true,

                    ],

                    'redirect_uris' => [

                        'label' => 'Redirect URIs',

                        'permission_template' => 'crud',

                        'icon' => 'Link',

                        'route' => '/api-management/oauth/redirects',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Personal Access Tokens
            |--------------------------------------------------------------------------
            */

            'personal_access_tokens' => [

                'label' => 'Personal Access Tokens',

                'description' => 'Manage personal access tokens.',

                'icon' => 'Fingerprint',

                'route' => '/api-management/tokens',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'token_list' => [

                        'label' => 'Token List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/api-management/tokens',

                        'api' => true,

                    ],

                    'token_expiry' => [

                        'label' => 'Token Expiry',

                        'permission_template' => 'crud',

                        'icon' => 'Clock3',

                        'route' => '/api-management/tokens/expiry',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Webhooks
            |--------------------------------------------------------------------------
            */

            'webhooks' => [

                'label' => 'Webhooks',

                'description' => 'Manage inbound and outbound webhooks.',

                'icon' => 'Webhook',

                'route' => '/api-management/webhooks',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'webhook_list' => [

                        'label' => 'Webhook List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/api-management/webhooks',

                        'api' => true,

                    ],

                    'delivery_logs' => [

                        'label' => 'Delivery Logs',

                        'permission_template' => 'read',

                        'icon' => 'Send',

                        'route' => '/api-management/webhooks/logs',

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | API Endpoints
            |--------------------------------------------------------------------------
            */

            'api_endpoints' => [

                'label' => 'API Endpoints',

                'description' => 'Manage available API endpoints and services.',

                'icon' => 'Route',

                'route' => '/api-management/endpoints',

                'permission_template' => 'crud',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'endpoint_list' => [

                        'label' => 'Endpoint List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/api-management/endpoints',

                        'api' => true,

                    ],

                    'endpoint_groups' => [

                        'label' => 'Endpoint Groups',

                        'permission_template' => 'crud',

                        'icon' => 'FolderTree',

                        'route' => '/api-management/endpoints/groups',

                        'api' => true,

                    ],

                    'endpoint_permissions' => [

                        'label' => 'Endpoint Permissions',

                        'permission_template' => 'crud',

                        'icon' => 'ShieldCheck',

                        'route' => '/api-management/endpoints/permissions',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | API Versioning
            |--------------------------------------------------------------------------
            */

            'api_versioning' => [

                'label' => 'API Versioning',

                'description' => 'Manage API versions and lifecycle.',

                'icon' => 'GitBranch',

                'route' => '/api-management/versioning',

                'permission_template' => 'crud',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'version_list' => [

                        'label' => 'Version List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/api-management/versioning',

                        'api' => true,

                    ],

                    'deprecation_policy' => [

                        'label' => 'Deprecation Policy',

                        'permission_template' => 'crud',

                        'icon' => 'TimerOff',

                        'route' => '/api-management/versioning/deprecation',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Rate Limiting
            |--------------------------------------------------------------------------
            */

            'rate_limiting' => [

                'label' => 'Rate Limiting',

                'description' => 'Configure API throttling and request limits.',

                'icon' => 'Gauge',

                'route' => '/api-management/rate-limits',

                'permission_template' => 'crud',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'rate_limit_rules' => [

                        'label' => 'Rate Limit Rules',

                        'permission_template' => 'crud',

                        'icon' => 'SlidersHorizontal',

                        'route' => '/api-management/rate-limits/rules',

                        'api' => true,

                    ],

                    'quota_management' => [

                        'label' => 'Quota Management',

                        'permission_template' => 'crud',

                        'icon' => 'BarChart3',

                        'route' => '/api-management/rate-limits/quotas',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | API Documentation
            |--------------------------------------------------------------------------
            */

            'api_documentation' => [

                'label' => 'API Documentation',

                'description' => 'Manage developer documentation and API references.',

                'icon' => 'BookOpen',

                'route' => '/api-management/documentation',

                'permission_template' => 'crud',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'documentation_pages' => [

                        'label' => 'Documentation Pages',

                        'permission_template' => 'crud',

                        'icon' => 'FileText',

                        'route' => '/api-management/documentation',

                        'api' => true,

                    ],

                    'code_examples' => [

                        'label' => 'Code Examples',

                        'permission_template' => 'crud',

                        'icon' => 'Code2',

                        'route' => '/api-management/documentation/examples',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | API Playground
            |--------------------------------------------------------------------------
            */

            'api_playground' => [

                'label' => 'API Playground',

                'description' => 'Interactive API testing environment.',

                'icon' => 'TerminalSquare',

                'route' => '/api-management/playground',

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

                'label' => 'Import API Configuration',

                'description' => 'Import API settings and definitions.',

                'icon' => 'FileUp',

                'route' => '/api-management/import',

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

                'label' => 'Export API Configuration',

                'description' => 'Export API settings, documentation and logs.',

                'icon' => 'FileDown',

                'route' => '/api-management/export',

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

                'label' => 'API Reports',

                'description' => 'Generate API usage, security and integration reports.',

                'icon' => 'FileBarChart',

                'route' => '/api-management/reports',

                'permission_template' => 'read',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'usage_report' => [

                        'label' => 'API Usage Report',

                        'permission_template' => 'read',

                        'icon' => 'Activity',

                        'route' => '/api-management/reports/usage',

                        'api' => true,

                    ],

                    'security_report' => [

                        'label' => 'API Security Report',

                        'permission_template' => 'read',

                        'icon' => 'ShieldCheck',

                        'route' => '/api-management/reports/security',

                        'api' => true,

                    ],

                    'performance_report' => [

                        'label' => 'Performance Report',

                        'permission_template' => 'read',

                        'icon' => 'Gauge',

                        'route' => '/api-management/reports/performance',

                        'api' => true,

                    ],

                    'integration_report' => [

                        'label' => 'Integration Report',

                        'permission_template' => 'read',

                        'icon' => 'Waypoints',

                        'route' => '/api-management/reports/integrations',

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

                'label' => 'API Analytics',

                'description' => 'API traffic, latency, error rate and usage analytics.',

                'icon' => 'ChartPie',

                'route' => '/api-management/analytics',

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

                'label' => 'API Notifications',

                'description' => 'Manage API alerts and operational notifications.',

                'icon' => 'Bell',

                'route' => '/api-management/notifications',

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
            | AI API Assistant
            |--------------------------------------------------------------------------
            */

            'ai' => [

                'label' => 'AI API Assistant',

                'description' => 'AI powered API monitoring, optimization and security intelligence.',

                'icon' => 'Bot',

                'route' => '/api-management/ai',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'health_monitoring' => [

                        'label' => 'API Health Monitoring',

                        'permission_template' => 'read',

                        'icon' => 'HeartPulse',

                        'route' => '/api-management/ai/health',

                        'api' => true,

                    ],

                    'usage_prediction' => [

                        'label' => 'API Usage Prediction',

                        'permission_template' => 'read',

                        'icon' => 'TrendingUp',

                        'route' => '/api-management/ai/usage-prediction',

                        'api' => true,

                    ],

                    'security_analysis' => [

                        'label' => 'Security Analysis',

                        'permission_template' => 'read',

                        'icon' => 'ShieldAlert',

                        'route' => '/api-management/ai/security-analysis',

                        'api' => true,

                    ],

                    'performance_optimization' => [

                        'label' => 'Performance Optimization',

                        'permission_template' => 'read',

                        'icon' => 'Zap',

                        'route' => '/api-management/ai/performance',

                        'api' => true,

                    ],

                    'anomaly_detection' => [

                        'label' => 'Anomaly Detection',

                        'permission_template' => 'read',

                        'icon' => 'Radar',

                        'route' => '/api-management/ai/anomaly-detection',

                        'api' => true,

                    ],

                    'api_dashboard' => [

                        'label' => 'API Intelligence Dashboard',

                        'permission_template' => 'read',

                        'icon' => 'LayoutDashboard',

                        'route' => '/api-management/ai/dashboard',

                        'api' => true,

                    ],

                ],

            ],

        ],

    ],

];