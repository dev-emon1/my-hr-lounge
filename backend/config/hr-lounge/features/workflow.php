<?php

return [

    'workflow' => [

        /*
        |--------------------------------------------------------------------------
        | Module Information
        |--------------------------------------------------------------------------
        */

        'label' => 'Workflow Management',

        'description' => 'Manage approval workflows, automation and business processes.',

        'icon' => 'Workflow',

        'route' => '/workflows',

        'group' => 'core',

        'version' => '1.0.0',

        'phase' => 1,

        'order' => 80,

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

                'label' => 'Workflow Dashboard',

                'description' => 'Workflow overview dashboard.',

                'icon' => 'LayoutDashboard',

                'route' => '/workflows',

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
            | Workflow Designer
            |--------------------------------------------------------------------------
            */

            'designer' => [

                'label' => 'Workflow Designer',

                'description' => 'Design and configure workflows.',

                'icon' => 'GitBranchPlus',

                'route' => '/workflows/designer',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'workflow_list' => [

                        'label' => 'Workflow List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/workflows/designer',

                        'api' => true,

                    ],

                    'workflow_builder' => [

                        'label' => 'Workflow Builder',

                        'permission_template' => 'crud',

                        'icon' => 'Workflow',

                        'route' => '/workflows/designer/builder',

                        'api' => true,

                    ],

                    'workflow_versions' => [

                        'label' => 'Workflow Versions',

                        'permission_template' => 'crud',

                        'icon' => 'History',

                        'route' => '/workflows/designer/versions',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Workflow Templates
            |--------------------------------------------------------------------------
            */

            'templates' => [

                'label' => 'Workflow Templates',

                'description' => 'Reusable workflow templates.',

                'icon' => 'Copy',

                'route' => '/workflows/templates',

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

                        'route' => '/workflows/templates',

                        'api' => true,

                    ],

                    'template_categories' => [

                        'label' => 'Template Categories',

                        'permission_template' => 'crud',

                        'icon' => 'FolderTree',

                        'route' => '/workflows/templates/categories',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Approval Flows
            |--------------------------------------------------------------------------
            */

            'approval_flows' => [

                'label' => 'Approval Flows',

                'description' => 'Manage approval workflow flows.',

                'icon' => 'GitMerge',

                'route' => '/workflows/approval-flows',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'flow_list' => [

                        'label' => 'Approval Flow List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/workflows/approval-flows',

                        'api' => true,

                    ],

                    'flow_diagram' => [

                        'label' => 'Flow Diagram',

                        'permission_template' => 'read',

                        'icon' => 'Network',

                        'route' => '/workflows/approval-flows/diagram',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Approval Levels
            |--------------------------------------------------------------------------
            */

            'approval_levels' => [

                'label' => 'Approval Levels',

                'description' => 'Configure multi-level approvals.',

                'icon' => 'Layers',

                'route' => '/workflows/approval-levels',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'level_list' => [

                        'label' => 'Approval Levels',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/workflows/approval-levels',

                        'api' => true,

                    ],

                    'approver_mapping' => [

                        'label' => 'Approver Mapping',

                        'permission_template' => 'crud',

                        'icon' => 'UserCheck',

                        'route' => '/workflows/approval-levels/mapping',

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | Workflow Conditions
            |--------------------------------------------------------------------------
            */

            'conditions' => [

                'label' => 'Workflow Conditions',

                'description' => 'Configure workflow conditions and business rules.',

                'icon' => 'GitCompare',

                'route' => '/workflows/conditions',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'condition_list' => [

                        'label' => 'Condition List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/workflows/conditions',

                        'api' => true,

                    ],

                    'condition_builder' => [

                        'label' => 'Condition Builder',

                        'permission_template' => 'crud',

                        'icon' => 'Code2',

                        'route' => '/workflows/conditions/builder',

                        'api' => true,

                    ],

                    'condition_groups' => [

                        'label' => 'Condition Groups',

                        'permission_template' => 'crud',

                        'icon' => 'FolderTree',

                        'route' => '/workflows/conditions/groups',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Workflow Actions
            |--------------------------------------------------------------------------
            */

            'actions' => [

                'label' => 'Workflow Actions',

                'description' => 'Configure workflow actions.',

                'icon' => 'PlayCircle',

                'route' => '/workflows/actions',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'action_list' => [

                        'label' => 'Action List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/workflows/actions',

                        'api' => true,

                    ],

                    'email_actions' => [

                        'label' => 'Email Actions',

                        'permission_template' => 'crud',

                        'icon' => 'Mail',

                        'route' => '/workflows/actions/email',

                        'api' => true,

                    ],

                    'notification_actions' => [

                        'label' => 'Notification Actions',

                        'permission_template' => 'crud',

                        'icon' => 'Bell',

                        'route' => '/workflows/actions/notifications',

                        'api' => true,

                    ],

                    'webhook_actions' => [

                        'label' => 'Webhook Actions',

                        'permission_template' => 'crud',

                        'icon' => 'Webhook',

                        'route' => '/workflows/actions/webhooks',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Automation Triggers
            |--------------------------------------------------------------------------
            */

            'automation_triggers' => [

                'label' => 'Automation Triggers',

                'description' => 'Manage workflow automation triggers.',

                'icon' => 'Zap',

                'route' => '/workflows/triggers',

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

                        'route' => '/workflows/triggers',

                        'api' => true,

                    ],

                    'event_triggers' => [

                        'label' => 'Event Triggers',

                        'permission_template' => 'crud',

                        'icon' => 'Activity',

                        'route' => '/workflows/triggers/events',

                        'api' => true,

                    ],

                    'scheduled_triggers' => [

                        'label' => 'Scheduled Triggers',

                        'permission_template' => 'crud',

                        'icon' => 'Clock3',

                        'route' => '/workflows/triggers/scheduled',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | SLA Rules
            |--------------------------------------------------------------------------
            */

            'sla_rules' => [

                'label' => 'SLA Rules',

                'description' => 'Configure workflow SLA rules.',

                'icon' => 'Timer',

                'route' => '/workflows/sla',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'sla_list' => [

                        'label' => 'SLA Rules',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/workflows/sla',

                        'api' => true,

                    ],

                    'response_targets' => [

                        'label' => 'Response Targets',

                        'permission_template' => 'crud',

                        'icon' => 'Target',

                        'route' => '/workflows/sla/response-targets',

                        'api' => true,

                    ],

                    'resolution_targets' => [

                        'label' => 'Resolution Targets',

                        'permission_template' => 'crud',

                        'icon' => 'CheckCircle2',

                        'route' => '/workflows/sla/resolution-targets',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Escalation Rules
            |--------------------------------------------------------------------------
            */

            'escalation_rules' => [

                'label' => 'Escalation Rules',

                'description' => 'Manage workflow escalation policies.',

                'icon' => 'ArrowUpCircle',

                'route' => '/workflows/escalations',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'escalation_list' => [

                        'label' => 'Escalation Rules',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/workflows/escalations',

                        'api' => true,

                    ],

                    'escalation_levels' => [

                        'label' => 'Escalation Levels',

                        'permission_template' => 'crud',

                        'icon' => 'Layers',

                        'route' => '/workflows/escalations/levels',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Delegation Rules
            |--------------------------------------------------------------------------
            */

            'delegation_rules' => [

                'label' => 'Delegation Rules',

                'description' => 'Configure workflow delegation rules.',

                'icon' => 'ArrowRightLeft',

                'route' => '/workflows/delegation',

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
            | Workflow Logs
            |--------------------------------------------------------------------------
            */

            'workflow_logs' => [

                'label' => 'Workflow Logs',

                'description' => 'View workflow execution logs.',

                'icon' => 'Logs',

                'route' => '/workflows/logs',

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
            | Workflow Audit Trail
            |--------------------------------------------------------------------------
            */

            'audit_trail' => [

                'label' => 'Workflow Audit Trail',

                'description' => 'Track workflow changes and execution history.',

                'icon' => 'History',

                'route' => '/workflows/audit-trail',

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

                'label' => 'Workflow Reports',

                'description' => 'Generate workflow execution and approval reports.',

                'icon' => 'FileBarChart',

                'route' => '/workflows/reports',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'workflow_report' => [

                        'label' => 'Workflow Report',

                        'permission_template' => 'read',

                        'icon' => 'Workflow',

                        'route' => '/workflows/reports/workflows',

                        'api' => true,

                    ],

                    'approval_report' => [

                        'label' => 'Approval Report',

                        'permission_template' => 'read',

                        'icon' => 'BadgeCheck',

                        'route' => '/workflows/reports/approvals',

                        'api' => true,

                    ],

                    'sla_report' => [

                        'label' => 'SLA Report',

                        'permission_template' => 'read',

                        'icon' => 'Timer',

                        'route' => '/workflows/reports/sla',

                        'api' => true,

                    ],

                    'automation_report' => [

                        'label' => 'Automation Report',

                        'permission_template' => 'read',

                        'icon' => 'Zap',

                        'route' => '/workflows/reports/automation',

                        'api' => true,

                    ],

                    'escalation_report' => [

                        'label' => 'Escalation Report',

                        'permission_template' => 'read',

                        'icon' => 'ArrowUpCircle',

                        'route' => '/workflows/reports/escalations',

                        'api' => true,

                    ],

                    'audit_report' => [

                        'label' => 'Audit Trail Report',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/workflows/reports/audit',

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

                'label' => 'Workflow Analytics',

                'description' => 'Workflow performance analytics and KPIs.',

                'icon' => 'ChartPie',

                'route' => '/workflows/analytics',

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

                'label' => 'Import Workflows',

                'description' => 'Bulk import workflow definitions.',

                'icon' => 'FileUp',

                'route' => '/workflows/import',

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

                'label' => 'Export Workflows',

                'description' => 'Export workflow definitions.',

                'icon' => 'FileDown',

                'route' => '/workflows/export',

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

                'description' => 'Execute bulk workflow operations.',

                'icon' => 'Boxes',

                'route' => '/workflows/bulk',

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

                'label' => 'Workflow Notifications',

                'description' => 'Workflow notification management.',

                'icon' => 'Bell',

                'route' => '/workflows/notifications',

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
            | AI Workflow Optimization
            |--------------------------------------------------------------------------
            */

            'ai' => [

                'label' => 'AI Workflow Optimization',

                'description' => 'AI powered workflow intelligence and optimization.',

                'icon' => 'Bot',

                'route' => '/workflows/ai',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'workflow_performance_analysis' => [

                        'label' => 'Workflow Performance Analysis',

                        'permission_template' => 'read',

                        'icon' => 'ChartColumn',

                        'route' => '/workflows/ai/performance',

                        'api' => true,

                    ],

                    'automation_recommendations' => [

                        'label' => 'Automation Recommendations',

                        'permission_template' => 'read',

                        'icon' => 'Sparkles',

                        'route' => '/workflows/ai/automation',

                        'api' => true,

                    ],

                    'bottleneck_detection' => [

                        'label' => 'Bottleneck Detection',

                        'permission_template' => 'read',

                        'icon' => 'TriangleAlert',

                        'route' => '/workflows/ai/bottlenecks',

                        'api' => true,

                    ],

                    'process_optimization' => [

                        'label' => 'Process Optimization',

                        'permission_template' => 'read',

                        'icon' => 'BrainCircuit',

                        'route' => '/workflows/ai/process-optimization',

                        'api' => true,

                    ],

                    'workflow_dashboard' => [

                        'label' => 'Workflow Intelligence Dashboard',

                        'permission_template' => 'read',

                        'icon' => 'LayoutDashboard',

                        'route' => '/workflows/ai/dashboard',

                        'api' => true,

                    ],

                ],

            ],

        ],

    ],

];