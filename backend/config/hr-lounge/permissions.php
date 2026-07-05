<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Permission Templates
    |--------------------------------------------------------------------------
    |
    | Every feature references one of these templates.
    | Seeder expands templates into actual permissions.
    |
    */

    /*
    |--------------------------------------------------------------------------
    | Read Only
    |--------------------------------------------------------------------------
    */

    'read' => [

        'label' => 'Read Only',

        'description' => 'Read-only access.',

        'actions' => [

            'view',

        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | CRUD
    |--------------------------------------------------------------------------
    */

    'crud' => [

        'label' => 'CRUD',

        'description' => 'Create, Read, Update & Delete.',

        'actions' => [

            'view',
            'create',
            'update',
            'delete',

        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | CRUD + Archive
    |--------------------------------------------------------------------------
    */

    'crud_archive' => [

        'label' => 'CRUD + Archive',

        'description' => 'CRUD with archive & restore.',

        'actions' => [

            'view',
            'create',
            'update',
            'delete',
            'archive',
            'restore',

        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Approval
    |--------------------------------------------------------------------------
    */

    'approval' => [

        'label' => 'Approval',

        'description' => 'Approval workflow.',

        'actions' => [

            'view',
            'approve',
            'reject',
            'cancel',

        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Extended Approval
    |--------------------------------------------------------------------------
    */

    'approval_extended' => [

        'label' => 'Extended Approval',

        'description' => 'Full approval lifecycle.',

        'actions' => [

            'view',
            'create',
            'update',
            'approve',
            'reject',
            'cancel',
            'reopen',

        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Documents
    |--------------------------------------------------------------------------
    */

    'document' => [

        'label' => 'Document Management',

        'description' => 'Document operations.',

        'actions' => [

            'view',
            'upload',
            'download',
            'verify',
            'delete',
            'archive',
            'restore',

        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Import / Export
    |--------------------------------------------------------------------------
    */

    'import_export' => [

        'label' => 'Import / Export',

        'description' => 'Bulk import & export.',

        'actions' => [

            'import',
            'export',
            'download_template',

        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Assignment
    |--------------------------------------------------------------------------
    */

    'assignment' => [

        'label' => 'Assignment',

        'description' => 'Assign resources.',

        'actions' => [

            'view',
            'assign',
            'unassign',

        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Asset
    |--------------------------------------------------------------------------
    */

    'asset' => [

        'label' => 'Asset',

        'description' => 'Asset operations.',

        'actions' => [

            'view',
            'assign',
            'return',
            'maintenance',
            'history',

        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Payroll
    |--------------------------------------------------------------------------
    */

    'payroll' => [

        'label' => 'Payroll',

        'description' => 'Payroll operations.',

        'actions' => [

            'view',
            'create',
            'update',
            'approve',
            'process',
            'generate',
            'export',

        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Attendance
    |--------------------------------------------------------------------------
    */

    'attendance' => [

        'label' => 'Attendance',

        'description' => 'Attendance operations.',

        'actions' => [

            'view',
            'clock_in',
            'clock_out',
            'manual_entry',
            'approve',
            'export',

        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Leave
    |--------------------------------------------------------------------------
    */

    'leave' => [

        'label' => 'Leave',

        'description' => 'Leave operations.',

        'actions' => [

            'view',
            'apply',
            'approve',
            'reject',
            'cancel',
            'encash',

        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Reports
    |--------------------------------------------------------------------------
    */

    'reports' => [

        'label' => 'Reports',

        'description' => 'Reporting operations.',

        'actions' => [

            'view',
            'generate',
            'export',
            'print',
            'schedule',

        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Settings
    |--------------------------------------------------------------------------
    */

    'settings' => [

        'label' => 'Settings',

        'description' => 'System settings.',

        'actions' => [

            'view',
            'update',

        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | API
    |--------------------------------------------------------------------------
    */

    'api' => [

        'label' => 'API',

        'description' => 'API access management.',

        'actions' => [

            'view',
            'generate_key',
            'revoke_key',

        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Notifications
    |--------------------------------------------------------------------------
    */

    'notification' => [

        'label' => 'Notifications',

        'description' => 'Notification management.',

        'actions' => [

            'view',
            'send',
            'schedule',

        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Workflow
    |--------------------------------------------------------------------------
    */

    'workflow' => [

        'label' => 'Workflow',

        'description' => 'Workflow management.',

        'actions' => [

            'view',
            'create',
            'update',
            'approve',
            'reject',
            'publish',

        ],

    ],

];