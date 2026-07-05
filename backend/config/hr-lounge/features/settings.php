<?php

return [

    'settings' => [

        /*
        |--------------------------------------------------------------------------
        | Module Information
        |--------------------------------------------------------------------------
        */

        'label' => 'Settings Management',

        'description' => 'Manage enterprise system configuration and preferences.',

        'icon' => 'Settings',

        'route' => '/settings',

        'group' => 'core',

        'version' => '1.0.0',

        'phase' => 1,

        'order' => 120,

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

                'label' => 'Settings Dashboard',

                'description' => 'System configuration overview.',

                'icon' => 'LayoutDashboard',

                'route' => '/settings',

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
            | General Settings
            |--------------------------------------------------------------------------
            */

            'general' => [

                'label' => 'General Settings',

                'description' => 'Configure general application settings.',

                'icon' => 'SlidersHorizontal',

                'route' => '/settings/general',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'application_settings' => [

                        'label' => 'Application Settings',

                        'permission_template' => 'crud',

                        'icon' => 'AppWindow',

                        'route' => '/settings/general/application',

                        'api' => true,

                    ],

                    'system_information' => [

                        'label' => 'System Information',

                        'permission_template' => 'read',

                        'icon' => 'Info',

                        'route' => '/settings/general/system-information',

                        'api' => true,

                    ],

                    'environment' => [

                        'label' => 'Environment',

                        'permission_template' => 'crud',

                        'icon' => 'Server',

                        'route' => '/settings/general/environment',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Organization Settings
            |--------------------------------------------------------------------------
            */

            'organization' => [

                'label' => 'Organization Settings',

                'description' => 'Configure organization level settings.',

                'icon' => 'Building2',

                'route' => '/settings/organization',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'organization_profile' => [

                        'label' => 'Organization Profile',

                        'permission_template' => 'crud',

                        'icon' => 'Building',

                        'route' => '/settings/organization/profile',

                        'api' => true,

                    ],

                    'organization_structure' => [

                        'label' => 'Organization Structure',

                        'permission_template' => 'crud',

                        'icon' => 'Network',

                        'route' => '/settings/organization/structure',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Localization
            |--------------------------------------------------------------------------
            */

            'localization' => [

                'label' => 'Localization',

                'description' => 'Configure language and regional preferences.',

                'icon' => 'Languages',

                'route' => '/settings/localization',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'language_settings' => [

                        'label' => 'Languages',

                        'permission_template' => 'crud',

                        'icon' => 'Languages',

                        'route' => '/settings/localization/languages',

                        'api' => true,

                    ],

                    'regional_settings' => [

                        'label' => 'Regional Settings',

                        'permission_template' => 'crud',

                        'icon' => 'Globe',

                        'route' => '/settings/localization/region',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Currency & Timezone
            |--------------------------------------------------------------------------
            */

            'currency_timezone' => [

                'label' => 'Currency & Timezone',

                'description' => 'Configure currencies, timezone and date formats.',

                'icon' => 'Clock3',

                'route' => '/settings/currency-timezone',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'currency_settings' => [

                        'label' => 'Currency Settings',

                        'permission_template' => 'crud',

                        'icon' => 'BadgeDollarSign',

                        'route' => '/settings/currency-timezone/currency',

                        'api' => true,

                    ],

                    'timezone_settings' => [

                        'label' => 'Timezone Settings',

                        'permission_template' => 'crud',

                        'icon' => 'Clock',

                        'route' => '/settings/currency-timezone/timezone',

                        'api' => true,

                    ],

                    'date_time_format' => [

                        'label' => 'Date & Time Format',

                        'permission_template' => 'crud',

                        'icon' => 'CalendarClock',

                        'route' => '/settings/currency-timezone/date-format',

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | Email Settings
            |--------------------------------------------------------------------------
            */

            'email' => [

                'label' => 'Email Settings',

                'description' => 'Configure email providers, SMTP and email preferences.',

                'icon' => 'Mail',

                'route' => '/settings/email',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'smtp_settings' => [

                        'label' => 'SMTP Settings',

                        'permission_template' => 'crud',

                        'icon' => 'Server',

                        'route' => '/settings/email/smtp',

                        'api' => true,

                    ],

                    'email_templates' => [

                        'label' => 'Email Templates',

                        'permission_template' => 'crud',

                        'icon' => 'FileText',

                        'route' => '/settings/email/templates',

                        'api' => true,

                    ],

                    'email_queue' => [

                        'label' => 'Email Queue',

                        'permission_template' => 'read',

                        'icon' => 'ListOrdered',

                        'route' => '/settings/email/queue',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | SMS Settings
            |--------------------------------------------------------------------------
            */

            'sms' => [

                'label' => 'SMS Settings',

                'description' => 'Configure SMS gateways and messaging.',

                'icon' => 'MessageSquare',

                'route' => '/settings/sms',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'sms_gateways' => [

                        'label' => 'SMS Gateways',

                        'permission_template' => 'crud',

                        'icon' => 'RadioTower',

                        'route' => '/settings/sms/gateways',

                        'api' => true,

                    ],

                    'sms_templates' => [

                        'label' => 'SMS Templates',

                        'permission_template' => 'crud',

                        'icon' => 'MessagesSquare',

                        'route' => '/settings/sms/templates',

                        'api' => true,

                    ],

                    'sms_logs' => [

                        'label' => 'SMS Logs',

                        'permission_template' => 'read',

                        'icon' => 'Logs',

                        'route' => '/settings/sms/logs',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Authentication Settings
            |--------------------------------------------------------------------------
            */

            'authentication' => [

                'label' => 'Authentication Settings',

                'description' => 'Configure authentication and login methods.',

                'icon' => 'ShieldCheck',

                'route' => '/settings/authentication',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'login_methods' => [

                        'label' => 'Login Methods',

                        'permission_template' => 'crud',

                        'icon' => 'LogIn',

                        'route' => '/settings/authentication/login-methods',

                        'api' => true,

                    ],

                    'two_factor_authentication' => [

                        'label' => 'Two Factor Authentication',

                        'permission_template' => 'crud',

                        'icon' => 'Shield',

                        'route' => '/settings/authentication/2fa',

                        'api' => true,

                    ],

                    'session_management' => [

                        'label' => 'Session Management',

                        'permission_template' => 'crud',

                        'icon' => 'MonitorSmartphone',

                        'route' => '/settings/authentication/sessions',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Password Policy
            |--------------------------------------------------------------------------
            */

            'password_policy' => [

                'label' => 'Password Policy',

                'description' => 'Configure password security policies.',

                'icon' => 'KeyRound',

                'route' => '/settings/password-policy',

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
            | Branding
            |--------------------------------------------------------------------------
            */

            'branding' => [

                'label' => 'Branding',

                'description' => 'Customize logos, themes and brand identity.',

                'icon' => 'Palette',

                'route' => '/settings/branding',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'logos' => [

                        'label' => 'Logo Management',

                        'permission_template' => 'crud',

                        'icon' => 'Image',

                        'route' => '/settings/branding/logos',

                        'api' => true,

                    ],

                    'themes' => [

                        'label' => 'Theme Settings',

                        'permission_template' => 'crud',

                        'icon' => 'Paintbrush',

                        'route' => '/settings/branding/themes',

                        'api' => true,

                    ],

                    'email_branding' => [

                        'label' => 'Email Branding',

                        'permission_template' => 'crud',

                        'icon' => 'Mail',

                        'route' => '/settings/branding/email',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | File Storage
            |--------------------------------------------------------------------------
            */

            'file_storage' => [

                'label' => 'File Storage',

                'description' => 'Configure local and cloud file storage.',

                'icon' => 'HardDrive',

                'route' => '/settings/storage',

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
            | Backup & Restore
            |--------------------------------------------------------------------------
            */

            'backup_restore' => [

                'label' => 'Backup & Restore',

                'description' => 'Manage system backup and restore operations.',

                'icon' => 'DatabaseBackup',

                'route' => '/settings/backup',

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
            | Maintenance Mode
            |--------------------------------------------------------------------------
            */

            'maintenance_mode' => [

                'label' => 'Maintenance Mode',

                'description' => 'Enable or disable system maintenance mode.',

                'icon' => 'Wrench',

                'route' => '/settings/maintenance',

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
            | License Management
            |--------------------------------------------------------------------------
            */

            'license_management' => [

                'label' => 'License Management',

                'description' => 'Manage product licenses, subscriptions and activation.',

                'icon' => 'BadgeCheck',

                'route' => '/settings/license',

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
            | System Preferences
            |--------------------------------------------------------------------------
            */

            'system_preferences' => [

                'label' => 'System Preferences',

                'description' => 'Configure default application preferences.',

                'icon' => 'Sliders',

                'route' => '/settings/preferences',

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
            | Audit Settings
            |--------------------------------------------------------------------------
            */

            'audit_settings' => [

                'label' => 'Audit Settings',

                'description' => 'Configure audit logs and activity tracking.',

                'icon' => 'History',

                'route' => '/settings/audit',

                'permission_template' => 'crud',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'audit_configuration' => [

                        'label' => 'Audit Configuration',

                        'permission_template' => 'crud',

                        'icon' => 'Settings2',

                        'route' => '/settings/audit/configuration',

                        'api' => true,

                    ],

                    'retention_policy' => [

                        'label' => 'Retention Policy',

                        'permission_template' => 'crud',

                        'icon' => 'ArchiveRestore',

                        'route' => '/settings/audit/retention',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | API Settings
            |--------------------------------------------------------------------------
            */

            'api_settings' => [

                'label' => 'API Settings',

                'description' => 'Manage API keys, tokens and integrations.',

                'icon' => 'Webhook',

                'route' => '/settings/api',

                'permission_template' => 'crud',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'api_keys' => [

                        'label' => 'API Keys',

                        'permission_template' => 'crud',

                        'icon' => 'Key',

                        'route' => '/settings/api/keys',

                        'api' => true,

                    ],

                    'webhooks' => [

                        'label' => 'Webhooks',

                        'permission_template' => 'crud',

                        'icon' => 'Webhook',

                        'route' => '/settings/api/webhooks',

                        'api' => true,

                    ],

                    'access_tokens' => [

                        'label' => 'Access Tokens',

                        'permission_template' => 'crud',

                        'icon' => 'ShieldCheck',

                        'route' => '/settings/api/tokens',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Integrations
            |--------------------------------------------------------------------------
            */

            'integrations' => [

                'label' => 'Integrations',

                'description' => 'Manage third-party integrations and connected services.',

                'icon' => 'Plug',

                'route' => '/settings/integrations',

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
            | AI Configuration
            |--------------------------------------------------------------------------
            */

            'ai_configuration' => [

                'label' => 'AI Configuration',

                'description' => 'Configure AI providers, models and intelligent automation.',

                'icon' => 'Bot',

                'route' => '/settings/ai',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'ai_providers' => [

                        'label' => 'AI Providers',

                        'permission_template' => 'crud',

                        'icon' => 'Cpu',

                        'route' => '/settings/ai/providers',

                        'api' => true,

                    ],

                    'ai_models' => [

                        'label' => 'AI Models',

                        'permission_template' => 'crud',

                        'icon' => 'BrainCircuit',

                        'route' => '/settings/ai/models',

                        'api' => true,

                    ],

                    'automation_rules' => [

                        'label' => 'Automation Rules',

                        'permission_template' => 'crud',

                        'icon' => 'Sparkles',

                        'route' => '/settings/ai/automation-rules',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Security Policies
            |--------------------------------------------------------------------------
            */

            'security_policies' => [

                'label' => 'Security Policies',

                'description' => 'Manage global security policies.',

                'icon' => 'Shield',

                'route' => '/settings/security-policies',

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
            | Feature Flags
            |--------------------------------------------------------------------------
            */

            'feature_flags' => [

                'label' => 'Feature Flags',

                'description' => 'Enable or disable experimental features.',

                'icon' => 'Flag',

                'route' => '/settings/feature-flags',

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
            | System Health
            |--------------------------------------------------------------------------
            */

            'system_health' => [

                'label' => 'System Health',

                'description' => 'Monitor system health and service status.',

                'icon' => 'Activity',

                'route' => '/settings/system-health',

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
            | Environment Diagnostics
            |--------------------------------------------------------------------------
            */

            'environment_diagnostics' => [

                'label' => 'Environment Diagnostics',

                'description' => 'Run environment diagnostics and configuration checks.',

                'icon' => 'Stethoscope',

                'route' => '/settings/environment-diagnostics',

                'permission_template' => 'read',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

            ],

        ],

    ],

];