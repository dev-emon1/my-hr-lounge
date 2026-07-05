<?php

return [

    'role' => [

        /*
        |--------------------------------------------------------------------------
        | Module Information
        |--------------------------------------------------------------------------
        */

        'label' => 'Role & Permission Management',

        'description' => 'Manage roles, permissions and enterprise access control.',

        'icon' => 'Shield',

        'route' => '/roles',

        'group' => 'core',

        'version' => '1.0.0',

        'phase' => 1,

        'order' => 70,

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

                'label' => 'Role Dashboard',

                'description' => 'Role and permission overview.',

                'icon' => 'LayoutDashboard',

                'route' => '/roles',

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
            | Roles
            |--------------------------------------------------------------------------
            */

            'roles' => [

                'label' => 'Roles',

                'description' => 'Manage system roles.',

                'icon' => 'ShieldCheck',

                'route' => '/roles/list',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'role_list' => [

                        'label' => 'Role List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/roles/list',

                        'api' => true,

                    ],

                    'role_details' => [

                        'label' => 'Role Details',

                        'permission_template' => 'read',

                        'icon' => 'FileBadge',

                        'route' => '/roles/details',

                        'api' => true,

                    ],

                    'role_history' => [

                        'label' => 'Role History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/roles/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Permission Groups
            |--------------------------------------------------------------------------
            */

            'permission_groups' => [

                'label' => 'Permission Groups',

                'description' => 'Manage permission categories.',

                'icon' => 'FolderTree',

                'route' => '/roles/permission-groups',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'group_list' => [

                        'label' => 'Permission Group List',

                        'permission_template' => 'crud',

                        'icon' => 'Folder',

                        'route' => '/roles/permission-groups',

                        'api' => true,

                    ],

                    'group_mapping' => [

                        'label' => 'Permission Mapping',

                        'permission_template' => 'crud',

                        'icon' => 'Link',

                        'route' => '/roles/permission-groups/mapping',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Permissions
            |--------------------------------------------------------------------------
            */

            'permissions' => [

                'label' => 'Permissions',

                'description' => 'Manage granular permissions.',

                'icon' => 'KeyRound',

                'route' => '/roles/permissions',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'permission_list' => [

                        'label' => 'Permission List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/roles/permissions',

                        'api' => true,

                    ],

                    'permission_matrix' => [

                        'label' => 'Permission Matrix',

                        'permission_template' => 'crud',

                        'icon' => 'Grid2X2',

                        'route' => '/roles/permissions/matrix',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Feature Access
            |--------------------------------------------------------------------------
            */

            'feature_access' => [

                'label' => 'Feature Access',

                'description' => 'Control feature level permissions.',

                'icon' => 'Puzzle',

                'route' => '/roles/feature-access',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'feature_permissions' => [

                        'label' => 'Feature Permissions',

                        'permission_template' => 'crud',

                        'icon' => 'Settings2',

                        'route' => '/roles/feature-access',

                        'api' => true,

                    ],

                    'feature_overrides' => [

                        'label' => 'Feature Overrides',

                        'permission_template' => 'crud',

                        'icon' => 'SlidersHorizontal',

                        'route' => '/roles/feature-access/overrides',

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | Module Access
            |--------------------------------------------------------------------------
            */

            'module_access' => [

                'label' => 'Module Access',

                'description' => 'Manage module level access permissions.',

                'icon' => 'LayoutGrid',

                'route' => '/roles/module-access',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'module_permissions' => [

                        'label' => 'Module Permissions',

                        'permission_template' => 'crud',

                        'icon' => 'Grid2X2',

                        'route' => '/roles/module-access',

                        'api' => true,

                    ],

                    'module_visibility' => [

                        'label' => 'Module Visibility',

                        'permission_template' => 'crud',

                        'icon' => 'Eye',

                        'route' => '/roles/module-access/visibility',

                        'api' => true,

                    ],

                    'module_restrictions' => [

                        'label' => 'Module Restrictions',

                        'permission_template' => 'crud',

                        'icon' => 'ShieldBan',

                        'route' => '/roles/module-access/restrictions',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Data Scope
            |--------------------------------------------------------------------------
            */

            'data_scope' => [

                'label' => 'Data Scope',

                'description' => 'Configure role based data visibility.',

                'icon' => 'Database',

                'route' => '/roles/data-scope',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'scope_rules' => [

                        'label' => 'Scope Rules',

                        'permission_template' => 'crud',

                        'icon' => 'Filter',

                        'route' => '/roles/data-scope',

                        'api' => true,

                    ],

                    'department_scope' => [

                        'label' => 'Department Scope',

                        'permission_template' => 'crud',

                        'icon' => 'Building',

                        'route' => '/roles/data-scope/departments',

                        'api' => true,

                    ],

                    'branch_scope' => [

                        'label' => 'Branch Scope',

                        'permission_template' => 'crud',

                        'icon' => 'Building2',

                        'route' => '/roles/data-scope/branches',

                        'api' => true,

                    ],

                    'employee_scope' => [

                        'label' => 'Employee Scope',

                        'permission_template' => 'crud',

                        'icon' => 'Users',

                        'route' => '/roles/data-scope/employees',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Approval Authority
            |--------------------------------------------------------------------------
            */

            'approval_authority' => [

                'label' => 'Approval Authority',

                'description' => 'Configure approval authority by role.',

                'icon' => 'BadgeCheck',

                'route' => '/roles/approval-authority',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'approval_levels' => [

                        'label' => 'Approval Levels',

                        'permission_template' => 'crud',

                        'icon' => 'Layers',

                        'route' => '/roles/approval-authority',

                        'api' => true,

                    ],

                    'approval_limits' => [

                        'label' => 'Approval Limits',

                        'permission_template' => 'crud',

                        'icon' => 'Scale',

                        'route' => '/roles/approval-authority/limits',

                        'api' => true,

                    ],

                    'approval_matrix' => [

                        'label' => 'Approval Matrix',

                        'permission_template' => 'crud',

                        'icon' => 'Workflow',

                        'route' => '/roles/approval-authority/matrix',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Delegation
            |--------------------------------------------------------------------------
            */

            'delegation' => [

                'label' => 'Delegation',

                'description' => 'Manage temporary delegation of authority.',

                'icon' => 'ArrowRightLeft',

                'route' => '/roles/delegation',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'delegation_rules' => [

                        'label' => 'Delegation Rules',

                        'permission_template' => 'crud',

                        'icon' => 'GitBranch',

                        'route' => '/roles/delegation',

                        'api' => true,

                    ],

                    'delegation_history' => [

                        'label' => 'Delegation History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/roles/delegation/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Role Templates
            |--------------------------------------------------------------------------
            */

            'role_templates' => [

                'label' => 'Role Templates',

                'description' => 'Create reusable role templates.',

                'icon' => 'Copy',

                'route' => '/roles/templates',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

            ],

            /*
            |--------------------------------------------------------------------------
            | Security Policies
            |--------------------------------------------------------------------------
            */

            'security_policies' => [

                'label' => 'Security Policies',

                'description' => 'Manage role specific security policies.',

                'icon' => 'Shield',

                'route' => '/roles/security-policies',

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
            | Session Restrictions
            |--------------------------------------------------------------------------
            */

            'session_restrictions' => [

                'label' => 'Session Restrictions',

                'description' => 'Configure login and session restrictions.',

                'icon' => 'MonitorSmartphone',

                'route' => '/roles/session-restrictions',

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
            | Access Logs
            |--------------------------------------------------------------------------
            */

            'access_logs' => [

                'label' => 'Access Logs',

                'description' => 'Review role based access logs.',

                'icon' => 'Logs',

                'route' => '/roles/access-logs',

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

                'label' => 'Role Reports',

                'description' => 'Generate role and permission reports.',

                'icon' => 'FileBarChart',

                'route' => '/roles/reports',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'role_report' => [

                        'label' => 'Role Report',

                        'permission_template' => 'read',

                        'icon' => 'ShieldCheck',

                        'route' => '/roles/reports/roles',

                        'api' => true,

                    ],

                    'permission_report' => [

                        'label' => 'Permission Report',

                        'permission_template' => 'read',

                        'icon' => 'KeyRound',

                        'route' => '/roles/reports/permissions',

                        'api' => true,

                    ],

                    'module_access_report' => [

                        'label' => 'Module Access Report',

                        'permission_template' => 'read',

                        'icon' => 'LayoutGrid',

                        'route' => '/roles/reports/module-access',

                        'api' => true,

                    ],

                    'approval_authority_report' => [

                        'label' => 'Approval Authority Report',

                        'permission_template' => 'read',

                        'icon' => 'BadgeCheck',

                        'route' => '/roles/reports/approval-authority',

                        'api' => true,

                    ],

                    'delegation_report' => [

                        'label' => 'Delegation Report',

                        'permission_template' => 'read',

                        'icon' => 'ArrowRightLeft',

                        'route' => '/roles/reports/delegation',

                        'api' => true,

                    ],

                    'access_log_report' => [

                        'label' => 'Access Log Report',

                        'permission_template' => 'read',

                        'icon' => 'Logs',

                        'route' => '/roles/reports/access-logs',

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

                'label' => 'Role Analytics',

                'description' => 'Role and permission analytics.',

                'icon' => 'ChartPie',

                'route' => '/roles/analytics',

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

                'label' => 'Import Roles',

                'description' => 'Bulk import roles and permissions.',

                'icon' => 'FileUp',

                'route' => '/roles/import',

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

                'label' => 'Export Roles',

                'description' => 'Export roles and permissions.',

                'icon' => 'FileDown',

                'route' => '/roles/export',

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

                'description' => 'Execute bulk role operations.',

                'icon' => 'Boxes',

                'route' => '/roles/bulk',

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

                'label' => 'Role Notifications',

                'description' => 'Role and permission notifications.',

                'icon' => 'Bell',

                'route' => '/roles/notifications',

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
            | AI Role Insights
            |--------------------------------------------------------------------------
            */

            'ai' => [

                'label' => 'AI Role Insights',

                'description' => 'AI powered role, permission and access intelligence.',

                'icon' => 'Bot',

                'route' => '/roles/ai',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'permission_risk_analysis' => [

                        'label' => 'Permission Risk Analysis',

                        'permission_template' => 'read',

                        'icon' => 'ShieldAlert',

                        'route' => '/roles/ai/risk-analysis',

                        'api' => true,

                    ],

                    'least_privilege_recommendations' => [

                        'label' => 'Least Privilege Recommendations',

                        'permission_template' => 'read',

                        'icon' => 'Sparkles',

                        'route' => '/roles/ai/least-privilege',

                        'api' => true,

                    ],

                    'access_pattern_analysis' => [

                        'label' => 'Access Pattern Analysis',

                        'permission_template' => 'read',

                        'icon' => 'ChartColumn',

                        'route' => '/roles/ai/access-patterns',

                        'api' => true,

                    ],

                    'role_optimization' => [

                        'label' => 'Role Optimization Suggestions',

                        'permission_template' => 'read',

                        'icon' => 'BrainCircuit',

                        'route' => '/roles/ai/optimization',

                        'api' => true,

                    ],

                    'security_dashboard' => [

                        'label' => 'Security Dashboard',

                        'permission_template' => 'read',

                        'icon' => 'LayoutDashboard',

                        'route' => '/roles/ai/dashboard',

                        'api' => true,

                    ],

                ],

            ],

        ],

    ],

];