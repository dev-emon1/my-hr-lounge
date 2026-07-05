<?php

return [

    'security' => [

        /*
        |--------------------------------------------------------------------------
        | Module Information
        |--------------------------------------------------------------------------
        */

        'label' => 'Security Management',

        'description' => 'Enterprise security, compliance and access protection.',

        'icon' => 'Shield',

        'route' => '/security',

        'group' => 'core',

        'version' => '1.0.0',

        'phase' => 1,

        'order' => 130,

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

                'label' => 'Security Dashboard',

                'description' => 'Enterprise security overview.',

                'icon' => 'LayoutDashboard',

                'route' => '/security',

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
            | Access Control
            |--------------------------------------------------------------------------
            */

            'access_control' => [

                'label' => 'Access Control',

                'description' => 'Manage system access permissions.',

                'icon' => 'ShieldCheck',

                'route' => '/security/access-control',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'access_matrix' => [

                        'label' => 'Access Matrix',

                        'permission_template' => 'crud',

                        'icon' => 'Grid2X2',

                        'route' => '/security/access-control/matrix',

                        'api' => true,

                    ],

                    'role_mapping' => [

                        'label' => 'Role Mapping',

                        'permission_template' => 'crud',

                        'icon' => 'Users',

                        'route' => '/security/access-control/roles',

                        'api' => true,

                    ],

                    'permission_audit' => [

                        'label' => 'Permission Audit',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/security/access-control/audit',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Login Security
            |--------------------------------------------------------------------------
            */

            'login_security' => [

                'label' => 'Login Security',

                'description' => 'Configure login protection and authentication.',

                'icon' => 'LogIn',

                'route' => '/security/login',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'login_attempts' => [

                        'label' => 'Login Attempts',

                        'permission_template' => 'read',

                        'icon' => 'ShieldAlert',

                        'route' => '/security/login/attempts',

                        'api' => true,

                    ],

                    'account_lockout' => [

                        'label' => 'Account Lockout',

                        'permission_template' => 'crud',

                        'icon' => 'Lock',

                        'route' => '/security/login/lockout',

                        'api' => true,

                    ],

                    'trusted_devices' => [

                        'label' => 'Trusted Devices',

                        'permission_template' => 'crud',

                        'icon' => 'Laptop',

                        'route' => '/security/login/trusted-devices',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Session Management
            |--------------------------------------------------------------------------
            */

            'session_management' => [

                'label' => 'Session Management',

                'description' => 'Manage active user sessions.',

                'icon' => 'MonitorSmartphone',

                'route' => '/security/sessions',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'active_sessions' => [

                        'label' => 'Active Sessions',

                        'permission_template' => 'read',

                        'icon' => 'Monitor',

                        'route' => '/security/sessions/active',

                        'api' => true,

                    ],

                    'session_timeout' => [

                        'label' => 'Session Timeout',

                        'permission_template' => 'crud',

                        'icon' => 'Timer',

                        'route' => '/security/sessions/timeout',

                        'api' => true,

                    ],

                    'force_logout' => [

                        'label' => 'Force Logout',

                        'permission_template' => 'crud',

                        'icon' => 'LogOut',

                        'route' => '/security/sessions/force-logout',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Device Management
            |--------------------------------------------------------------------------
            */

            'device_management' => [

                'label' => 'Device Management',

                'description' => 'Manage registered devices.',

                'icon' => 'Smartphone',

                'route' => '/security/devices',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'registered_devices' => [

                        'label' => 'Registered Devices',

                        'permission_template' => 'crud',

                        'icon' => 'HardDrive',

                        'route' => '/security/devices',

                        'api' => true,

                    ],

                    'device_history' => [

                        'label' => 'Device History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/security/devices/history',

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | IP Restrictions
            |--------------------------------------------------------------------------
            */

            'ip_restrictions' => [

                'label' => 'IP Restrictions',

                'description' => 'Manage IP whitelist, blacklist and geo restrictions.',

                'icon' => 'GlobeLock',

                'route' => '/security/ip-restrictions',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'whitelist' => [

                        'label' => 'IP Whitelist',

                        'permission_template' => 'crud',

                        'icon' => 'ShieldCheck',

                        'route' => '/security/ip-restrictions/whitelist',

                        'api' => true,

                    ],

                    'blacklist' => [

                        'label' => 'IP Blacklist',

                        'permission_template' => 'crud',

                        'icon' => 'ShieldX',

                        'route' => '/security/ip-restrictions/blacklist',

                        'api' => true,

                    ],

                    'geo_restrictions' => [

                        'label' => 'Geo Restrictions',

                        'permission_template' => 'crud',

                        'icon' => 'MapPinned',

                        'route' => '/security/ip-restrictions/geo',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Multi-Factor Authentication
            |--------------------------------------------------------------------------
            */

            'multi_factor_authentication' => [

                'label' => 'Multi-Factor Authentication',

                'description' => 'Configure MFA policies and authentication methods.',

                'icon' => 'ShieldEllipsis',

                'route' => '/security/mfa',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'mfa_methods' => [

                        'label' => 'Authentication Methods',

                        'permission_template' => 'crud',

                        'icon' => 'Smartphone',

                        'route' => '/security/mfa/methods',

                        'api' => true,

                    ],

                    'backup_codes' => [

                        'label' => 'Backup Codes',

                        'permission_template' => 'crud',

                        'icon' => 'KeyRound',

                        'route' => '/security/mfa/backup-codes',

                        'api' => true,

                    ],

                    'mfa_policy' => [

                        'label' => 'MFA Policy',

                        'permission_template' => 'crud',

                        'icon' => 'Shield',

                        'route' => '/security/mfa/policy',

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

                'description' => 'Manage enterprise security policies.',

                'icon' => 'Shield',

                'route' => '/security/policies',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'policy_library' => [

                        'label' => 'Policy Library',

                        'permission_template' => 'crud',

                        'icon' => 'Library',

                        'route' => '/security/policies/library',

                        'api' => true,

                    ],

                    'policy_assignment' => [

                        'label' => 'Policy Assignment',

                        'permission_template' => 'crud',

                        'icon' => 'Users',

                        'route' => '/security/policies/assignment',

                        'api' => true,

                    ],

                    'policy_exceptions' => [

                        'label' => 'Policy Exceptions',

                        'permission_template' => 'crud',

                        'icon' => 'ShieldAlert',

                        'route' => '/security/policies/exceptions',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Password Security
            |--------------------------------------------------------------------------
            */

            'password_security' => [

                'label' => 'Password Security',

                'description' => 'Configure password security rules.',

                'icon' => 'Key',

                'route' => '/security/password',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'password_policy' => [

                        'label' => 'Password Policy',

                        'permission_template' => 'crud',

                        'icon' => 'LockKeyhole',

                        'route' => '/security/password/policy',

                        'api' => true,

                    ],

                    'password_history' => [

                        'label' => 'Password History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/security/password/history',

                        'api' => true,

                    ],

                    'password_expiration' => [

                        'label' => 'Password Expiration',

                        'permission_template' => 'crud',

                        'icon' => 'CalendarClock',

                        'route' => '/security/password/expiration',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Audit Logs
            |--------------------------------------------------------------------------
            */

            'audit_logs' => [

                'label' => 'Audit Logs',

                'description' => 'View security audit logs and activities.',

                'icon' => 'Logs',

                'route' => '/security/audit-logs',

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
            | Threat Detection
            |--------------------------------------------------------------------------
            */

            'threat_detection' => [

                'label' => 'Threat Detection',

                'description' => 'Detect suspicious activities and security threats.',

                'icon' => 'ShieldAlert',

                'route' => '/security/threat-detection',

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
            | Incident Management
            |--------------------------------------------------------------------------
            */

            'incident_management' => [

                'label' => 'Incident Management',

                'description' => 'Manage security incidents and investigations.',

                'icon' => 'Siren',

                'route' => '/security/incidents',

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
            | Compliance
            |--------------------------------------------------------------------------
            */

            'compliance' => [

                'label' => 'Compliance',

                'description' => 'Compliance standards and regulatory monitoring.',

                'icon' => 'BadgeCheck',

                'route' => '/security/compliance',

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

                'label' => 'Security Reports',

                'description' => 'Generate security and compliance reports.',

                'icon' => 'FileBarChart',

                'route' => '/security/reports',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'security_report' => [

                        'label' => 'Security Report',

                        'permission_template' => 'read',

                        'icon' => 'Shield',

                        'route' => '/security/reports/security',

                        'api' => true,

                    ],

                    'audit_report' => [

                        'label' => 'Audit Report',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/security/reports/audit',

                        'api' => true,

                    ],

                    'incident_report' => [

                        'label' => 'Incident Report',

                        'permission_template' => 'read',

                        'icon' => 'Siren',

                        'route' => '/security/reports/incidents',

                        'api' => true,

                    ],

                    'compliance_report' => [

                        'label' => 'Compliance Report',

                        'permission_template' => 'read',

                        'icon' => 'BadgeCheck',

                        'route' => '/security/reports/compliance',

                        'api' => true,

                    ],

                    'login_activity_report' => [

                        'label' => 'Login Activity Report',

                        'permission_template' => 'read',

                        'icon' => 'LogIn',

                        'route' => '/security/reports/login-activity',

                        'api' => true,

                    ],

                    'threat_report' => [

                        'label' => 'Threat Report',

                        'permission_template' => 'read',

                        'icon' => 'ShieldAlert',

                        'route' => '/security/reports/threats',

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

                'label' => 'Security Analytics',

                'description' => 'Security metrics, KPIs and behavioral analytics.',

                'icon' => 'ChartPie',

                'route' => '/security/analytics',

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

                'label' => 'Security Notifications',

                'description' => 'Manage security alerts and notifications.',

                'icon' => 'Bell',

                'route' => '/security/notifications',

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
            | AI Security Insights
            |--------------------------------------------------------------------------
            */

            'ai' => [

                'label' => 'AI Security Insights',

                'description' => 'AI powered threat detection, risk analysis and security intelligence.',

                'icon' => 'Bot',

                'route' => '/security/ai',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'threat_intelligence' => [

                        'label' => 'Threat Intelligence',

                        'permission_template' => 'read',

                        'icon' => 'Radar',

                        'route' => '/security/ai/threat-intelligence',

                        'api' => true,

                    ],

                    'risk_assessment' => [

                        'label' => 'Risk Assessment',

                        'permission_template' => 'read',

                        'icon' => 'TriangleAlert',

                        'route' => '/security/ai/risk-assessment',

                        'api' => true,

                    ],

                    'vulnerability_analysis' => [

                        'label' => 'Vulnerability Analysis',

                        'permission_template' => 'read',

                        'icon' => 'Bug',

                        'route' => '/security/ai/vulnerabilities',

                        'api' => true,

                    ],

                    'behavior_analysis' => [

                        'label' => 'User Behavior Analysis',

                        'permission_template' => 'read',

                        'icon' => 'Activity',

                        'route' => '/security/ai/behavior',

                        'api' => true,

                    ],

                    'security_health_dashboard' => [

                        'label' => 'Security Health Dashboard',

                        'permission_template' => 'read',

                        'icon' => 'HeartPulse',

                        'route' => '/security/ai/health',

                        'api' => true,

                    ],

                    'security_recommendations' => [

                        'label' => 'Security Recommendations',

                        'permission_template' => 'read',

                        'icon' => 'Sparkles',

                        'route' => '/security/ai/recommendations',

                        'api' => true,

                    ],

                    'compliance_score' => [

                        'label' => 'Compliance Score',

                        'permission_template' => 'read',

                        'icon' => 'Scale',

                        'route' => '/security/ai/compliance-score',

                        'api' => true,

                    ],

                    'executive_security_dashboard' => [

                        'label' => 'Executive Security Dashboard',

                        'permission_template' => 'read',

                        'icon' => 'LayoutDashboard',

                        'route' => '/security/ai/dashboard',

                        'api' => true,

                    ],

                ],

            ],

        ],

    ],

];