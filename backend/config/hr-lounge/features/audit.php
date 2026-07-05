<?php

return [

    'audit' => [

        /*
        |--------------------------------------------------------------------------
        | Module Information
        |--------------------------------------------------------------------------
        */

        'label' => 'Audit Management',

        'description' => 'Enterprise audit trail, compliance and security monitoring.',

        'icon' => 'Shield',

        'route' => '/audit',

        'group' => 'system',

        'version' => '1.0.0',

        'phase' => 2,

        'order' => 90,

        'enabled_by_default' => true,

        'package_toggle' => true,

        'sidebar' => true,

        'searchable' => true,

        'audit' => false,

        'activity_log' => false,

        'api' => true,

        'children' => [

            /*
            |--------------------------------------------------------------------------
            | Dashboard
            |--------------------------------------------------------------------------
            */

            'dashboard' => [

                'label' => 'Audit Dashboard',

                'description' => 'Audit overview and compliance dashboard.',

                'icon' => 'LayoutDashboard',

                'route' => '/audit',

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
            | Activity Logs
            |--------------------------------------------------------------------------
            */

            'activity_logs' => [

                'label' => 'Activity Logs',

                'description' => 'Track all application activities.',

                'icon' => 'Activity',

                'route' => '/audit/activity-logs',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => false,

                'activity_log' => false,

                'api' => true,

                'children' => [

                    'activity_list' => [

                        'label' => 'Activity List',

                        'permission_template' => 'read',

                        'icon' => 'List',

                        'route' => '/audit/activity-logs',

                        'api' => true,

                    ],

                    'activity_filters' => [

                        'label' => 'Activity Filters',

                        'permission_template' => 'read',

                        'icon' => 'Filter',

                        'route' => '/audit/activity-logs/filters',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | User Audit Logs
            |--------------------------------------------------------------------------
            */

            'user_audit_logs' => [

                'label' => 'User Audit Logs',

                'description' => 'Track user actions and history.',

                'icon' => 'Users',

                'route' => '/audit/users',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => false,

                'activity_log' => false,

                'api' => true,

                'children' => [

                    'user_log_list' => [

                        'label' => 'User Log List',

                        'permission_template' => 'read',

                        'icon' => 'List',

                        'route' => '/audit/users',

                        'api' => true,

                    ],

                    'user_sessions' => [

                        'label' => 'User Sessions',

                        'permission_template' => 'read',

                        'icon' => 'Monitor',

                        'route' => '/audit/users/sessions',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | System Audit Logs
            |--------------------------------------------------------------------------
            */

            'system_audit_logs' => [

                'label' => 'System Audit Logs',

                'description' => 'Track system events and operations.',

                'icon' => 'Server',

                'route' => '/audit/system',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => false,

                'activity_log' => false,

                'api' => true,

                'children' => [

                    'system_events' => [

                        'label' => 'System Events',

                        'permission_template' => 'read',

                        'icon' => 'Cpu',

                        'route' => '/audit/system/events',

                        'api' => true,

                    ],

                    'cron_logs' => [

                        'label' => 'Cron Logs',

                        'permission_template' => 'read',

                        'icon' => 'Clock3',

                        'route' => '/audit/system/cron',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Security Audit
            |--------------------------------------------------------------------------
            */

            'security_audit' => [

                'label' => 'Security Audit',

                'description' => 'Monitor authentication and security events.',

                'icon' => 'ShieldAlert',

                'route' => '/audit/security',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => false,

                'activity_log' => false,

                'api' => true,

                'children' => [

                    'login_failures' => [

                        'label' => 'Login Failures',

                        'permission_template' => 'read',

                        'icon' => 'CircleAlert',

                        'route' => '/audit/security/login-failures',

                        'api' => true,

                    ],

                    'permission_changes' => [

                        'label' => 'Permission Changes',

                        'permission_template' => 'read',

                        'icon' => 'KeyRound',

                        'route' => '/audit/security/permissions',

                        'api' => true,

                    ],

                    'suspicious_activity' => [

                        'label' => 'Suspicious Activity',

                        'permission_template' => 'read',

                        'icon' => 'ShieldX',

                        'route' => '/audit/security/suspicious',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Data Change Logs
            |--------------------------------------------------------------------------
            */

            'data_change_logs' => [

                'label' => 'Data Change Logs',

                'description' => 'Track all create, update and delete operations.',

                'icon' => 'DatabaseZap',

                'route' => '/audit/data-changes',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => false,

                'activity_log' => false,

                'api' => true,

                'children' => [

                    'change_history' => [

                        'label' => 'Change History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/audit/data-changes',

                        'api' => true,

                    ],

                    'record_restore' => [

                        'label' => 'Record Restore History',

                        'permission_template' => 'read',

                        'icon' => 'Undo2',

                        'route' => '/audit/data-changes/restores',

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | Login History
            |--------------------------------------------------------------------------
            */

            'login_history' => [

                'label' => 'Login History',

                'description' => 'Track successful and failed user login history.',

                'icon' => 'LogIn',

                'route' => '/audit/login-history',

                'permission_template' => 'read',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => false,

                'activity_log' => false,

                'api' => true,

                'children' => [

                    'successful_logins' => [

                        'label' => 'Successful Logins',

                        'permission_template' => 'read',

                        'icon' => 'BadgeCheck',

                        'route' => '/audit/login-history/success',

                        'api' => true,

                    ],

                    'failed_logins' => [

                        'label' => 'Failed Logins',

                        'permission_template' => 'read',

                        'icon' => 'CircleAlert',

                        'route' => '/audit/login-history/failed',

                        'api' => true,

                    ],

                    'active_sessions' => [

                        'label' => 'Active Sessions',

                        'permission_template' => 'read',

                        'icon' => 'MonitorSmartphone',

                        'route' => '/audit/login-history/sessions',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Compliance Audit
            |--------------------------------------------------------------------------
            */

            'compliance_audit' => [

                'label' => 'Compliance Audit',

                'description' => 'Monitor compliance with internal and external policies.',

                'icon' => 'Scale',

                'route' => '/audit/compliance',

                'permission_template' => 'read',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => false,

                'activity_log' => false,

                'api' => true,

                'children' => [

                    'compliance_checks' => [

                        'label' => 'Compliance Checks',

                        'permission_template' => 'read',

                        'icon' => 'ClipboardCheck',

                        'route' => '/audit/compliance/checks',

                        'api' => true,

                    ],

                    'violations' => [

                        'label' => 'Policy Violations',

                        'permission_template' => 'read',

                        'icon' => 'TriangleAlert',

                        'route' => '/audit/compliance/violations',

                        'api' => true,

                    ],

                    'compliance_frameworks' => [

                        'label' => 'Compliance Frameworks',

                        'permission_template' => 'crud',

                        'icon' => 'ShieldCheck',

                        'route' => '/audit/compliance/frameworks',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Audit Policies
            |--------------------------------------------------------------------------
            */

            'audit_policies' => [

                'label' => 'Audit Policies',

                'description' => 'Configure audit retention, monitoring and policy rules.',

                'icon' => 'FileBadge',

                'route' => '/audit/policies',

                'permission_template' => 'crud',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => false,

                'activity_log' => false,

                'api' => true,

                'children' => [

                    'policy_list' => [

                        'label' => 'Policy List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/audit/policies',

                        'api' => true,

                    ],

                    'retention_rules' => [

                        'label' => 'Retention Rules',

                        'permission_template' => 'crud',

                        'icon' => 'Archive',

                        'route' => '/audit/policies/retention',

                        'api' => true,

                    ],

                    'alert_rules' => [

                        'label' => 'Alert Rules',

                        'permission_template' => 'crud',

                        'icon' => 'BellRing',

                        'route' => '/audit/policies/alerts',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Evidence Repository
            |--------------------------------------------------------------------------
            */

            'evidence_repository' => [

                'label' => 'Evidence Repository',

                'description' => 'Store audit evidence, supporting documents and attachments.',

                'icon' => 'FolderLock',

                'route' => '/audit/evidence',

                'permission_template' => 'crud',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => false,

                'activity_log' => false,

                'api' => true,

            ],

            /*
            |--------------------------------------------------------------------------
            | Reports
            |--------------------------------------------------------------------------
            */

            'reports' => [

                'label' => 'Audit Reports',

                'description' => 'Generate audit and compliance reports.',

                'icon' => 'FileBarChart',

                'route' => '/audit/reports',

                'permission_template' => 'read',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => false,

                'activity_log' => false,

                'api' => true,

                'children' => [

                    'activity_report' => [

                        'label' => 'Activity Report',

                        'permission_template' => 'read',

                        'icon' => 'Activity',

                        'route' => '/audit/reports/activity',

                        'api' => true,

                    ],

                    'security_report' => [

                        'label' => 'Security Report',

                        'permission_template' => 'read',

                        'icon' => 'ShieldAlert',

                        'route' => '/audit/reports/security',

                        'api' => true,

                    ],

                    'compliance_report' => [

                        'label' => 'Compliance Report',

                        'permission_template' => 'read',

                        'icon' => 'Scale',

                        'route' => '/audit/reports/compliance',

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

                'label' => 'Audit Analytics',

                'description' => 'Audit metrics, trends and compliance analytics.',

                'icon' => 'ChartPie',

                'route' => '/audit/analytics',

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
            | Notifications
            |--------------------------------------------------------------------------
            */

            'notifications' => [

                'label' => 'Audit Notifications',

                'description' => 'Manage audit alerts and compliance notifications.',

                'icon' => 'Bell',

                'route' => '/audit/notifications',

                'permission_template' => 'crud',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => false,

                'api' => true,

            ],

            /*
            |--------------------------------------------------------------------------
            | AI Audit Assistant
            |--------------------------------------------------------------------------
            */

            'ai' => [

                'label' => 'AI Audit Assistant',

                'description' => 'AI powered audit monitoring, anomaly detection and compliance intelligence.',

                'icon' => 'Bot',

                'route' => '/audit/ai',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => false,

                'api' => true,

                'children' => [

                    'risk_detection' => [

                        'label' => 'Risk Detection',

                        'permission_template' => 'read',

                        'icon' => 'ShieldAlert',

                        'route' => '/audit/ai/risk-detection',

                        'api' => true,

                    ],

                    'compliance_monitoring' => [

                        'label' => 'Compliance Monitoring',

                        'permission_template' => 'read',

                        'icon' => 'ShieldCheck',

                        'route' => '/audit/ai/compliance-monitoring',

                        'api' => true,

                    ],

                    'anomaly_detection' => [

                        'label' => 'Anomaly Detection',

                        'permission_template' => 'read',

                        'icon' => 'Radar',

                        'route' => '/audit/ai/anomaly-detection',

                        'api' => true,

                    ],

                    'threat_intelligence' => [

                        'label' => 'Threat Intelligence',

                        'permission_template' => 'read',

                        'icon' => 'Siren',

                        'route' => '/audit/ai/threat-intelligence',

                        'api' => true,

                    ],

                    'log_summarization' => [

                        'label' => 'Log Summarization',

                        'permission_template' => 'read',

                        'icon' => 'ScrollText',

                        'route' => '/audit/ai/log-summary',

                        'api' => true,

                    ],

                    'audit_dashboard' => [

                        'label' => 'Audit Intelligence Dashboard',

                        'permission_template' => 'read',

                        'icon' => 'LayoutDashboard',

                        'route' => '/audit/ai/dashboard',

                        'api' => true,

                    ],

                ],

            ],

        ],

    ],

];