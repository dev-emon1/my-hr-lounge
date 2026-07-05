<?php

return [

    'backup' => [

        /*
        |--------------------------------------------------------------------------
        | Module Information
        |--------------------------------------------------------------------------
        */

        'label' => 'Backup Management',

        'description' => 'Enterprise backup, restore and disaster recovery management.',

        'icon' => 'DatabaseBackup',

        'route' => '/backup',

        'group' => 'system',

        'version' => '1.0.0',

        'phase' => 2,

        'order' => 100,

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

                'label' => 'Backup Dashboard',

                'description' => 'Backup overview and recovery dashboard.',

                'icon' => 'LayoutDashboard',

                'route' => '/backup',

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
            | Database Backups
            |--------------------------------------------------------------------------
            */

            'database_backups' => [

                'label' => 'Database Backups',

                'description' => 'Manage database backup operations.',

                'icon' => 'Database',

                'route' => '/backup/database',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'backup_list' => [

                        'label' => 'Backup List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/backup/database',

                        'api' => true,

                    ],

                    'manual_backup' => [

                        'label' => 'Manual Backup',

                        'permission_template' => 'create',

                        'icon' => 'DatabaseZap',

                        'route' => '/backup/database/manual',

                        'api' => true,

                    ],

                    'backup_history' => [

                        'label' => 'Backup History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/backup/database/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | File Backups
            |--------------------------------------------------------------------------
            */

            'file_backups' => [

                'label' => 'File Backups',

                'description' => 'Manage application file backups.',

                'icon' => 'FolderArchive',

                'route' => '/backup/files',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'file_backup_list' => [

                        'label' => 'File Backup List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/backup/files',

                        'api' => true,

                    ],

                    'incremental_backup' => [

                        'label' => 'Incremental Backup',

                        'permission_template' => 'crud',

                        'icon' => 'Files',

                        'route' => '/backup/files/incremental',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Cloud Backups
            |--------------------------------------------------------------------------
            */

            'cloud_backups' => [

                'label' => 'Cloud Backups',

                'description' => 'Manage cloud storage backup providers.',

                'icon' => 'Cloud',

                'route' => '/backup/cloud',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'cloud_providers' => [

                        'label' => 'Cloud Providers',

                        'permission_template' => 'crud',

                        'icon' => 'ServerCog',

                        'route' => '/backup/cloud/providers',

                        'api' => true,

                    ],

                    'cloud_sync' => [

                        'label' => 'Cloud Sync',

                        'permission_template' => 'crud',

                        'icon' => 'RefreshCw',

                        'route' => '/backup/cloud/sync',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Scheduled Backups
            |--------------------------------------------------------------------------
            */

            'scheduled_backups' => [

                'label' => 'Scheduled Backups',

                'description' => 'Configure automatic backup schedules.',

                'icon' => 'CalendarClock',

                'route' => '/backup/schedules',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'schedule_list' => [

                        'label' => 'Schedule List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/backup/schedules',

                        'api' => true,

                    ],

                    'backup_frequency' => [

                        'label' => 'Backup Frequency',

                        'permission_template' => 'crud',

                        'icon' => 'Repeat',

                        'route' => '/backup/schedules/frequency',

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | Restore Management
            |--------------------------------------------------------------------------
            */

            'restore_management' => [

                'label' => 'Restore Management',

                'description' => 'Restore databases and files from available backups.',

                'icon' => 'RotateCcw',

                'route' => '/backup/restore',

                'permission_template' => 'crud',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'restore_points' => [

                        'label' => 'Restore Points',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/backup/restore/points',

                        'api' => true,

                    ],

                    'restore_history' => [

                        'label' => 'Restore History',

                        'permission_template' => 'read',

                        'icon' => 'ClipboardList',

                        'route' => '/backup/restore/history',

                        'api' => true,

                    ],

                    'rollback' => [

                        'label' => 'Rollback',

                        'permission_template' => 'crud',

                        'icon' => 'Undo2',

                        'route' => '/backup/restore/rollback',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Disaster Recovery
            |--------------------------------------------------------------------------
            */

            'disaster_recovery' => [

                'label' => 'Disaster Recovery',

                'description' => 'Configure disaster recovery plans and failover.',

                'icon' => 'ShieldAlert',

                'route' => '/backup/disaster-recovery',

                'permission_template' => 'crud',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'recovery_plans' => [

                        'label' => 'Recovery Plans',

                        'permission_template' => 'crud',

                        'icon' => 'ClipboardCheck',

                        'route' => '/backup/disaster-recovery/plans',

                        'api' => true,

                    ],

                    'failover_configuration' => [

                        'label' => 'Failover Configuration',

                        'permission_template' => 'crud',

                        'icon' => 'ServerCrash',

                        'route' => '/backup/disaster-recovery/failover',

                        'api' => true,

                    ],

                    'recovery_testing' => [

                        'label' => 'Recovery Testing',

                        'permission_template' => 'crud',

                        'icon' => 'FlaskConical',

                        'route' => '/backup/disaster-recovery/testing',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Retention Policies
            |--------------------------------------------------------------------------
            */

            'retention_policies' => [

                'label' => 'Retention Policies',

                'description' => 'Configure backup retention and cleanup policies.',

                'icon' => 'Archive',

                'route' => '/backup/retention',

                'permission_template' => 'crud',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'policy_list' => [

                        'label' => 'Policy List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/backup/retention',

                        'api' => true,

                    ],

                    'cleanup_rules' => [

                        'label' => 'Cleanup Rules',

                        'permission_template' => 'crud',

                        'icon' => 'Trash2',

                        'route' => '/backup/retention/cleanup',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Backup Verification
            |--------------------------------------------------------------------------
            */

            'backup_verification' => [

                'label' => 'Backup Verification',

                'description' => 'Verify backup integrity and restore readiness.',

                'icon' => 'BadgeCheck',

                'route' => '/backup/verification',

                'permission_template' => 'read',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'integrity_checks' => [

                        'label' => 'Integrity Checks',

                        'permission_template' => 'read',

                        'icon' => 'ShieldCheck',

                        'route' => '/backup/verification/integrity',

                        'api' => true,

                    ],

                    'verification_history' => [

                        'label' => 'Verification History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/backup/verification/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Reports
            |--------------------------------------------------------------------------
            */

            'reports' => [

                'label' => 'Backup Reports',

                'description' => 'Generate backup and recovery reports.',

                'icon' => 'FileBarChart',

                'route' => '/backup/reports',

                'permission_template' => 'read',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'backup_report' => [

                        'label' => 'Backup Report',

                        'permission_template' => 'read',

                        'icon' => 'Database',

                        'route' => '/backup/reports/backups',

                        'api' => true,

                    ],

                    'restore_report' => [

                        'label' => 'Restore Report',

                        'permission_template' => 'read',

                        'icon' => 'RotateCcw',

                        'route' => '/backup/reports/restores',

                        'api' => true,

                    ],

                    'storage_report' => [

                        'label' => 'Storage Usage Report',

                        'permission_template' => 'read',

                        'icon' => 'HardDrive',

                        'route' => '/backup/reports/storage',

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

                'label' => 'Backup Analytics',

                'description' => 'Backup health, storage utilization and recovery analytics.',

                'icon' => 'ChartPie',

                'route' => '/backup/analytics',

                'permission_template' => 'read',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

            ],
                        /*
            |--------------------------------------------------------------------------
            | Notifications
            |--------------------------------------------------------------------------
            */

            'notifications' => [

                'label' => 'Backup Notifications',

                'description' => 'Manage backup alerts and recovery notifications.',

                'icon' => 'Bell',

                'route' => '/backup/notifications',

                'permission_template' => 'crud',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

            ],

            /*
            |--------------------------------------------------------------------------
            | AI Backup Assistant
            |--------------------------------------------------------------------------
            */

            'ai' => [

                'label' => 'AI Backup Assistant',

                'description' => 'AI powered backup monitoring, recovery intelligence and storage optimization.',

                'icon' => 'Bot',

                'route' => '/backup/ai',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'backup_health' => [

                        'label' => 'Backup Health Monitoring',

                        'permission_template' => 'read',

                        'icon' => 'HeartPulse',

                        'route' => '/backup/ai/health',

                        'api' => true,

                    ],

                    'storage_optimization' => [

                        'label' => 'Storage Optimization',

                        'permission_template' => 'read',

                        'icon' => 'HardDriveDownload',

                        'route' => '/backup/ai/storage-optimization',

                        'api' => true,

                    ],

                    'recovery_recommendations' => [

                        'label' => 'Recovery Recommendations',

                        'permission_template' => 'read',

                        'icon' => 'Lightbulb',

                        'route' => '/backup/ai/recovery',

                        'api' => true,

                    ],

                    'integrity_verification' => [

                        'label' => 'Integrity Verification',

                        'permission_template' => 'read',

                        'icon' => 'ShieldCheck',

                        'route' => '/backup/ai/integrity',

                        'api' => true,

                    ],

                    'backup_prediction' => [

                        'label' => 'Backup Capacity Prediction',

                        'permission_template' => 'read',

                        'icon' => 'TrendingUp',

                        'route' => '/backup/ai/capacity-prediction',

                        'api' => true,

                    ],

                    'backup_dashboard' => [

                        'label' => 'Backup Intelligence Dashboard',

                        'permission_template' => 'read',

                        'icon' => 'LayoutDashboard',

                        'route' => '/backup/ai/dashboard',

                        'api' => true,

                    ],

                ],

            ],

        ],

    ],

];