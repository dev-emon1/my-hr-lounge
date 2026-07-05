<?php

return [

    'integrations' => [

        /*
        |--------------------------------------------------------------------------
        | Module Information
        |--------------------------------------------------------------------------
        */

        'label' => 'Integrations Management',

        'description' => 'Manage enterprise integrations, APIs and external services.',

        'icon' => 'Plug',

        'route' => '/integrations',

        'group' => 'core',

        'version' => '1.0.0',

        'phase' => 1,

        'order' => 140,

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

                'label' => 'Integration Dashboard',

                'description' => 'Enterprise integration overview.',

                'icon' => 'LayoutDashboard',

                'route' => '/integrations',

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
            | API Integrations
            |--------------------------------------------------------------------------
            */

            'api_integrations' => [

                'label' => 'API Integrations',

                'description' => 'Manage REST, GraphQL and external APIs.',

                'icon' => 'Webhook',

                'route' => '/integrations/apis',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'api_connections' => [

                        'label' => 'API Connections',

                        'permission_template' => 'crud',

                        'icon' => 'Cable',

                        'route' => '/integrations/apis/connections',

                        'api' => true,

                    ],

                    'api_keys' => [

                        'label' => 'API Keys',

                        'permission_template' => 'crud',

                        'icon' => 'Key',

                        'route' => '/integrations/apis/keys',

                        'api' => true,

                    ],

                    'api_usage' => [

                        'label' => 'API Usage',

                        'permission_template' => 'read',

                        'icon' => 'Activity',

                        'route' => '/integrations/apis/usage',

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

                'description' => 'Configure inbound and outbound webhooks.',

                'icon' => 'Webhook',

                'route' => '/integrations/webhooks',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'incoming_webhooks' => [

                        'label' => 'Incoming Webhooks',

                        'permission_template' => 'crud',

                        'icon' => 'ArrowDownCircle',

                        'route' => '/integrations/webhooks/incoming',

                        'api' => true,

                    ],

                    'outgoing_webhooks' => [

                        'label' => 'Outgoing Webhooks',

                        'permission_template' => 'crud',

                        'icon' => 'ArrowUpCircle',

                        'route' => '/integrations/webhooks/outgoing',

                        'api' => true,

                    ],

                    'webhook_logs' => [

                        'label' => 'Webhook Logs',

                        'permission_template' => 'read',

                        'icon' => 'Logs',

                        'route' => '/integrations/webhooks/logs',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | OAuth Providers
            |--------------------------------------------------------------------------
            */

            'oauth_providers' => [

                'label' => 'OAuth Providers',

                'description' => 'Configure OAuth authentication providers.',

                'icon' => 'ShieldCheck',

                'route' => '/integrations/oauth',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'provider_list' => [

                        'label' => 'Provider List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/integrations/oauth/providers',

                        'api' => true,

                    ],

                    'client_credentials' => [

                        'label' => 'Client Credentials',

                        'permission_template' => 'crud',

                        'icon' => 'KeyRound',

                        'route' => '/integrations/oauth/credentials',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Single Sign-On (SSO)
            |--------------------------------------------------------------------------
            */

            'sso' => [

                'label' => 'Single Sign-On',

                'description' => 'Configure enterprise SSO authentication.',

                'icon' => 'Fingerprint',

                'route' => '/integrations/sso',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'saml_configuration' => [

                        'label' => 'SAML Configuration',

                        'permission_template' => 'crud',

                        'icon' => 'FileCode2',

                        'route' => '/integrations/sso/saml',

                        'api' => true,

                    ],

                    'openid_connect' => [

                        'label' => 'OpenID Connect',

                        'permission_template' => 'crud',

                        'icon' => 'Shield',

                        'route' => '/integrations/sso/openid',

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | LDAP / Active Directory
            |--------------------------------------------------------------------------
            */

            'ldap' => [

                'label' => 'LDAP / Active Directory',

                'description' => 'Configure LDAP and Microsoft Active Directory integration.',

                'icon' => 'Network',

                'route' => '/integrations/ldap',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'ldap_servers' => [

                        'label' => 'LDAP Servers',

                        'permission_template' => 'crud',

                        'icon' => 'Server',

                        'route' => '/integrations/ldap/servers',

                        'api' => true,

                    ],

                    'directory_sync' => [

                        'label' => 'Directory Sync',

                        'permission_template' => 'crud',

                        'icon' => 'RefreshCcw',

                        'route' => '/integrations/ldap/sync',

                        'api' => true,

                    ],

                    'user_mapping' => [

                        'label' => 'User Mapping',

                        'permission_template' => 'crud',

                        'icon' => 'Users',

                        'route' => '/integrations/ldap/mapping',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Email Providers
            |--------------------------------------------------------------------------
            */

            'email_providers' => [

                'label' => 'Email Providers',

                'description' => 'Manage external email delivery providers.',

                'icon' => 'Mail',

                'route' => '/integrations/email-providers',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'provider_configuration' => [

                        'label' => 'Provider Configuration',

                        'permission_template' => 'crud',

                        'icon' => 'Settings2',

                        'route' => '/integrations/email-providers/configuration',

                        'api' => true,

                    ],

                    'delivery_services' => [

                        'label' => 'Delivery Services',

                        'permission_template' => 'crud',

                        'icon' => 'Send',

                        'route' => '/integrations/email-providers/services',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | SMS Providers
            |--------------------------------------------------------------------------
            */

            'sms_providers' => [

                'label' => 'SMS Providers',

                'description' => 'Manage SMS gateway providers.',

                'icon' => 'MessageSquare',

                'route' => '/integrations/sms-providers',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'gateway_configuration' => [

                        'label' => 'Gateway Configuration',

                        'permission_template' => 'crud',

                        'icon' => 'RadioTower',

                        'route' => '/integrations/sms-providers/configuration',

                        'api' => true,

                    ],

                    'gateway_testing' => [

                        'label' => 'Gateway Testing',

                        'permission_template' => 'crud',

                        'icon' => 'FlaskConical',

                        'route' => '/integrations/sms-providers/testing',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Payment Gateways
            |--------------------------------------------------------------------------
            */

            'payment_gateways' => [

                'label' => 'Payment Gateways',

                'description' => 'Configure payment gateway integrations.',

                'icon' => 'CreditCard',

                'route' => '/integrations/payment-gateways',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'gateway_list' => [

                        'label' => 'Gateway List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/integrations/payment-gateways',

                        'api' => true,

                    ],

                    'transaction_logs' => [

                        'label' => 'Transaction Logs',

                        'permission_template' => 'read',

                        'icon' => 'Receipt',

                        'route' => '/integrations/payment-gateways/transactions',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Cloud Storage
            |--------------------------------------------------------------------------
            */

            'cloud_storage' => [

                'label' => 'Cloud Storage',

                'description' => 'Configure cloud storage providers.',

                'icon' => 'Cloud',

                'route' => '/integrations/cloud-storage',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'storage_providers' => [

                        'label' => 'Storage Providers',

                        'permission_template' => 'crud',

                        'icon' => 'Database',

                        'route' => '/integrations/cloud-storage/providers',

                        'api' => true,

                    ],

                    'storage_sync' => [

                        'label' => 'Storage Synchronization',

                        'permission_template' => 'crud',

                        'icon' => 'RefreshCw',

                        'route' => '/integrations/cloud-storage/sync',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Calendar Integrations
            |--------------------------------------------------------------------------
            */

            'calendar_integrations' => [

                'label' => 'Calendar Integrations',

                'description' => 'Connect external calendar providers.',

                'icon' => 'Calendar',

                'route' => '/integrations/calendars',

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
            | Video Meeting Integrations
            |--------------------------------------------------------------------------
            */

            'video_meetings' => [

                'label' => 'Video Meeting Integrations',

                'description' => 'Configure meeting providers.',

                'icon' => 'Video',

                'route' => '/integrations/video-meetings',

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
            | Accounting Integrations
            |--------------------------------------------------------------------------
            */

            'accounting_integrations' => [

                'label' => 'Accounting Integrations',

                'description' => 'Connect accounting and ERP software.',

                'icon' => 'Calculator',

                'route' => '/integrations/accounting',

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
            | HRIS Integrations
            |--------------------------------------------------------------------------
            */

            'hris_integrations' => [

                'label' => 'HRIS Integrations',

                'description' => 'Connect external HR systems.',

                'icon' => 'BriefcaseBusiness',

                'route' => '/integrations/hris',

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
            | AI Providers
            |--------------------------------------------------------------------------
            */

            'ai_providers' => [

                'label' => 'AI Providers',

                'description' => 'Configure AI providers, models and intelligent services.',

                'icon' => 'Bot',

                'route' => '/integrations/ai',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'provider_management' => [

                        'label' => 'Provider Management',

                        'permission_template' => 'crud',

                        'icon' => 'Cpu',

                        'route' => '/integrations/ai/providers',

                        'api' => true,

                    ],

                    'model_management' => [

                        'label' => 'AI Models',

                        'permission_template' => 'crud',

                        'icon' => 'BrainCircuit',

                        'route' => '/integrations/ai/models',

                        'api' => true,

                    ],

                    'usage_monitoring' => [

                        'label' => 'Usage Monitoring',

                        'permission_template' => 'read',

                        'icon' => 'Activity',

                        'route' => '/integrations/ai/usage',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Integration Logs
            |--------------------------------------------------------------------------
            */

            'integration_logs' => [

                'label' => 'Integration Logs',

                'description' => 'View integration requests, responses and synchronization logs.',

                'icon' => 'Logs',

                'route' => '/integrations/logs',

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
            | Health Monitoring
            |--------------------------------------------------------------------------
            */

            'health_monitoring' => [

                'label' => 'Health Monitoring',

                'description' => 'Monitor external service health and availability.',

                'icon' => 'HeartPulse',

                'route' => '/integrations/health',

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
            | Reports
            |--------------------------------------------------------------------------
            */

            'reports' => [

                'label' => 'Integration Reports',

                'description' => 'Generate integration reports and synchronization summaries.',

                'icon' => 'FileBarChart',

                'route' => '/integrations/reports',

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
            | Analytics
            |--------------------------------------------------------------------------
            */

            'analytics' => [

                'label' => 'Integration Analytics',

                'description' => 'Integration performance analytics and statistics.',

                'icon' => 'ChartPie',

                'route' => '/integrations/analytics',

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

                'label' => 'Import Configuration',

                'description' => 'Import integration configurations.',

                'icon' => 'FileUp',

                'route' => '/integrations/import',

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

                'label' => 'Export Configuration',

                'description' => 'Export integration configurations.',

                'icon' => 'FileDown',

                'route' => '/integrations/export',

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
            | Notifications
            |--------------------------------------------------------------------------
            */

            'notifications' => [

                'label' => 'Integration Notifications',

                'description' => 'Manage integration alerts and notifications.',

                'icon' => 'Bell',

                'permission_template' => 'crud',

                'route' => '/integrations/notifications',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

            ],

            /*
            |--------------------------------------------------------------------------
            | AI Integration Insights
            |--------------------------------------------------------------------------
            */

            'ai' => [

                'label' => 'AI Integration Insights',

                'description' => 'AI powered monitoring and optimization for enterprise integrations.',

                'icon' => 'Sparkles',

                'route' => '/integrations/ai',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'connection_analysis' => [

                        'label' => 'Connection Analysis',

                        'permission_template' => 'read',

                        'icon' => 'Network',

                        'route' => '/integrations/ai/connections',

                        'api' => true,

                    ],

                    'failure_prediction' => [

                        'label' => 'Failure Prediction',

                        'permission_template' => 'read',

                        'icon' => 'TriangleAlert',

                        'route' => '/integrations/ai/failure-prediction',

                        'api' => true,

                    ],

                    'optimization_recommendations' => [

                        'label' => 'Optimization Recommendations',

                        'permission_template' => 'read',

                        'icon' => 'Lightbulb',

                        'route' => '/integrations/ai/recommendations',

                        'api' => true,

                    ],

                    'integration_dashboard' => [

                        'label' => 'Integration Intelligence Dashboard',

                        'permission_template' => 'read',

                        'icon' => 'LayoutDashboard',

                        'route' => '/integrations/ai/dashboard',

                        'api' => true,

                    ],

                ],

            ],

        ],

    ],

];