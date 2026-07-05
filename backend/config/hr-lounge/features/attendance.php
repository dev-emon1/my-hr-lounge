<?php

return [

    'attendance' => [

        /*
        |--------------------------------------------------------------------------
        | Module Information
        |--------------------------------------------------------------------------
        */

        'label' => 'Attendance Management',

        'description' => 'Complete employee attendance management system.',

        'icon' => 'Clock3',

        'route' => '/attendance',

        'group' => 'core',

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

                'label' => 'Attendance Dashboard',

                'description' => 'Attendance overview, KPIs and daily insights.',

                'icon' => 'LayoutDashboard',

                'route' => '/attendance',

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
            | Attendance Records
            |--------------------------------------------------------------------------
            */

            'attendance_records' => [

                'label' => 'Attendance Records',

                'description' => 'Manage employee attendance records.',

                'icon' => 'ClipboardCheck',

                'route' => '/attendance/records',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    /*
                    |--------------------------------------------------------------------------
                    | Daily Attendance
                    |--------------------------------------------------------------------------
                    */

                    'daily_attendance' => [

                        'label' => 'Daily Attendance',

                        'description' => 'View and manage daily attendance.',

                        'icon' => 'CalendarDays',

                        'route' => '/attendance/records/daily',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Monthly Attendance
                    |--------------------------------------------------------------------------
                    */

                    'monthly_attendance' => [

                        'label' => 'Monthly Attendance',

                        'description' => 'View monthly attendance summary.',

                        'icon' => 'CalendarRange',

                        'route' => '/attendance/records/monthly',

                        'permission_template' => 'read',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Attendance History
                    |--------------------------------------------------------------------------
                    */

                    'attendance_history' => [

                        'label' => 'Attendance History',

                        'description' => 'Employee attendance history.',

                        'icon' => 'History',

                        'route' => '/attendance/records/history',

                        'permission_template' => 'read',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Attendance Timeline
                    |--------------------------------------------------------------------------
                    */

                    'attendance_timeline' => [

                        'label' => 'Attendance Timeline',

                        'description' => 'Attendance timeline and punch history.',

                        'icon' => 'ClockArrowUp',

                        'route' => '/attendance/records/timeline',

                        'permission_template' => 'read',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Manual Attendance
                    |--------------------------------------------------------------------------
                    */

                    'manual_attendance' => [

                        'label' => 'Manual Attendance',

                        'description' => 'Create or edit attendance manually.',

                        'icon' => 'SquarePen',

                        'route' => '/attendance/records/manual',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => false,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | Attendance Requests
            |--------------------------------------------------------------------------
            */

            'attendance_requests' => [

                'label' => 'Attendance Requests',

                'description' => 'Manage employee attendance related requests.',

                'icon' => 'ClipboardList',

                'route' => '/attendance/requests',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    /*
                    |--------------------------------------------------------------------------
                    | Missing Punch Request
                    |--------------------------------------------------------------------------
                    */

                    'missing_punch_request' => [

                        'label' => 'Missing Punch Request',

                        'description' => 'Submit and manage missing punch requests.',

                        'icon' => 'CircleAlert',

                        'route' => '/attendance/requests/missing-punch',

                        'permission_template' => 'approval',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Attendance Regularization
                    |--------------------------------------------------------------------------
                    */

                    'attendance_regularization' => [

                        'label' => 'Attendance Regularization',

                        'description' => 'Regularize incorrect attendance records.',

                        'icon' => 'RefreshCcw',

                        'route' => '/attendance/requests/regularization',

                        'permission_template' => 'approval',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Attendance Adjustment
                    |--------------------------------------------------------------------------
                    */

                    'attendance_adjustment' => [

                        'label' => 'Attendance Adjustment',

                        'description' => 'Adjust employee attendance records.',

                        'icon' => 'SlidersHorizontal',

                        'route' => '/attendance/requests/adjustment',

                        'permission_template' => 'approval',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Attendance Correction
                    |--------------------------------------------------------------------------
                    */

                    'attendance_correction' => [

                        'label' => 'Attendance Correction',

                        'description' => 'Correct attendance mistakes.',

                        'icon' => 'Pencil',

                        'route' => '/attendance/requests/correction',

                        'permission_template' => 'approval',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Missed Check-In
                    |--------------------------------------------------------------------------
                    */

                    'missed_checkin' => [

                        'label' => 'Missed Check-In',

                        'description' => 'Handle missed check-in requests.',

                        'icon' => 'LogIn',

                        'route' => '/attendance/requests/missed-checkin',

                        'permission_template' => 'approval',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Missed Check-Out
                    |--------------------------------------------------------------------------
                    */

                    'missed_checkout' => [

                        'label' => 'Missed Check-Out',

                        'description' => 'Handle missed check-out requests.',

                        'icon' => 'LogOut',

                        'route' => '/attendance/requests/missed-checkout',

                        'permission_template' => 'approval',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Attendance Approval
            |--------------------------------------------------------------------------
            */

            'attendance_approval' => [

                'label' => 'Attendance Approval',

                'description' => 'Approve or reject attendance requests.',

                'icon' => 'BadgeCheck',

                'route' => '/attendance/approval',

                'permission_template' => 'approval',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

            ],

            /*
            |--------------------------------------------------------------------------
            | Attendance Exceptions
            |--------------------------------------------------------------------------
            */

            'attendance_exceptions' => [

                'label' => 'Attendance Exceptions',

                'description' => 'Manage attendance anomalies and exceptions.',

                'icon' => 'TriangleAlert',

                'route' => '/attendance/exceptions',

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
            | Shift Management
            |--------------------------------------------------------------------------
            */

            'shift_management' => [

                'label' => 'Shift Management',

                'description' => 'Manage employee work shifts and scheduling.',

                'icon' => 'Clock3',

                'route' => '/attendance/shifts',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    /*
                    |--------------------------------------------------------------------------
                    | Shifts
                    |--------------------------------------------------------------------------
                    */

                    'shifts' => [

                        'label' => 'Shifts',

                        'description' => 'Create and manage work shifts.',

                        'icon' => 'Clock',

                        'route' => '/attendance/shifts',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Shift Assignment
                    |--------------------------------------------------------------------------
                    */

                    'shift_assignment' => [

                        'label' => 'Shift Assignment',

                        'description' => 'Assign shifts to employees.',

                        'icon' => 'UserRoundCog',

                        'route' => '/attendance/shifts/assignment',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Shift Rotation
                    |--------------------------------------------------------------------------
                    */

                    'shift_rotation' => [

                        'label' => 'Shift Rotation',

                        'description' => 'Configure automatic shift rotation.',

                        'icon' => 'RefreshCw',

                        'route' => '/attendance/shifts/rotation',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Flexible Shift
                    |--------------------------------------------------------------------------
                    */

                    'flexible_shift' => [

                        'label' => 'Flexible Shift',

                        'description' => 'Configure flexible working hours.',

                        'icon' => 'ClockArrowUp',

                        'route' => '/attendance/shifts/flexible',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Night Shift
                    |--------------------------------------------------------------------------
                    */

                    'night_shift' => [

                        'label' => 'Night Shift',

                        'description' => 'Manage overnight work shifts.',

                        'icon' => 'Moon',

                        'route' => '/attendance/shifts/night',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Shift Calendar
                    |--------------------------------------------------------------------------
                    */

                    'shift_calendar' => [

                        'label' => 'Shift Calendar',

                        'description' => 'View and manage shift calendar.',

                        'icon' => 'CalendarDays',

                        'route' => '/attendance/shifts/calendar',

                        'permission_template' => 'read',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Grace Time
                    |--------------------------------------------------------------------------
                    */

                    'grace_time' => [

                        'label' => 'Grace Time',

                        'description' => 'Configure grace periods for late entry and early exit.',

                        'icon' => 'Timer',

                        'route' => '/attendance/shifts/grace-time',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => false,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Auto Shift Assignment
                    |--------------------------------------------------------------------------
                    */

                    'auto_shift_assignment' => [

                        'label' => 'Auto Shift Assignment',

                        'description' => 'Automatically assign shifts based on configured rules.',

                        'icon' => 'Bot',

                        'route' => '/attendance/shifts/auto-assignment',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => false,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Shift Policies
                    |--------------------------------------------------------------------------
                    */

                    'shift_policies' => [

                        'label' => 'Shift Policies',

                        'description' => 'Configure organization shift policies.',

                        'icon' => 'Shield',

                        'route' => '/attendance/shifts/policies',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => false,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | Roster Management
            |--------------------------------------------------------------------------
            */

            'roster_management' => [

                'label' => 'Roster Management',

                'description' => 'Manage employee work rosters and schedules.',

                'icon' => 'CalendarRange',

                'route' => '/attendance/rosters',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'rosters' => [

                        'label' => 'Roster',

                        'description' => 'Create and manage work rosters.',

                        'icon' => 'Calendar',

                        'route' => '/attendance/rosters',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    'roster_templates' => [

                        'label' => 'Roster Templates',

                        'description' => 'Create reusable roster templates.',

                        'icon' => 'Copy',

                        'route' => '/attendance/rosters/templates',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    'roster_assignment' => [

                        'label' => 'Roster Assignment',

                        'description' => 'Assign roster to employees or departments.',

                        'icon' => 'Users',

                        'route' => '/attendance/rosters/assignment',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    'roster_rotation' => [

                        'label' => 'Roster Rotation',

                        'description' => 'Configure automatic roster rotation.',

                        'icon' => 'RefreshCw',

                        'route' => '/attendance/rosters/rotation',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => false,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Weekend Configuration
            |--------------------------------------------------------------------------
            */

            'weekend_configuration' => [

                'label' => 'Weekend Configuration',

                'description' => 'Configure organization weekend settings.',

                'icon' => 'CalendarCheck2',

                'route' => '/attendance/weekends',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'weekend_rules' => [

                        'label' => 'Weekend Rules',

                        'permission_template' => 'crud',

                        'icon' => 'Settings',

                        'route' => '/attendance/weekends/rules',

                        'api' => true,

                    ],

                    'weekend_groups' => [

                        'label' => 'Weekend Groups',

                        'permission_template' => 'crud',

                        'icon' => 'Users',

                        'route' => '/attendance/weekends/groups',

                        'api' => true,

                    ],

                    'weekend_assignment' => [

                        'label' => 'Weekend Assignment',

                        'permission_template' => 'crud',

                        'icon' => 'UserRoundCog',

                        'route' => '/attendance/weekends/assignment',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Holiday Management
            |--------------------------------------------------------------------------
            */

            'holiday_management' => [

                'label' => 'Holiday Management',

                'description' => 'Manage holidays and calendars.',

                'icon' => 'CalendarHeart',

                'route' => '/attendance/holidays',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'holiday_calendar' => [

                        'label' => 'Holiday Calendar',

                        'permission_template' => 'crud',

                        'icon' => 'CalendarDays',

                        'route' => '/attendance/holidays/calendar',

                        'api' => true,

                    ],

                    'public_holidays' => [

                        'label' => 'Public Holidays',

                        'permission_template' => 'crud',

                        'icon' => 'Flag',

                        'route' => '/attendance/holidays/public',

                        'api' => true,

                    ],

                    'company_holidays' => [

                        'label' => 'Company Holidays',

                        'permission_template' => 'crud',

                        'icon' => 'Building2',

                        'route' => '/attendance/holidays/company',

                        'api' => true,

                    ],

                    'holiday_groups' => [

                        'label' => 'Holiday Groups',

                        'permission_template' => 'crud',

                        'icon' => 'Layers3',

                        'route' => '/attendance/holidays/groups',

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | Overtime Management
            |--------------------------------------------------------------------------
            */

            'overtime_management' => [

                'label' => 'Overtime Management',

                'description' => 'Manage employee overtime configuration and records.',

                'icon' => 'TimerReset',

                'route' => '/attendance/overtime',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'overtime_rules' => [

                        'label' => 'Overtime Rules',

                        'description' => 'Configure overtime calculation rules.',

                        'icon' => 'Settings2',

                        'route' => '/attendance/overtime/rules',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    'overtime_requests' => [

                        'label' => 'Overtime Requests',

                        'description' => 'Manage employee overtime requests.',

                        'icon' => 'ClockArrowUp',

                        'route' => '/attendance/overtime/requests',

                        'permission_template' => 'approval',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    'overtime_approval' => [

                        'label' => 'Overtime Approval',

                        'description' => 'Approve or reject overtime requests.',

                        'icon' => 'BadgeCheck',

                        'route' => '/attendance/overtime/approval',

                        'permission_template' => 'approval',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Late & Early Rules
            |--------------------------------------------------------------------------
            */

            'late_early_management' => [

                'label' => 'Late & Early Management',

                'description' => 'Configure late arrival and early departure rules.',

                'icon' => 'AlarmClock',

                'route' => '/attendance/late-early',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'late_rules' => [

                        'label' => 'Late Rules',

                        'permission_template' => 'crud',

                        'icon' => 'ClockAlert',

                        'route' => '/attendance/late-early/late-rules',

                        'api' => true,

                    ],

                    'early_exit_rules' => [

                        'label' => 'Early Exit Rules',

                        'permission_template' => 'crud',

                        'icon' => 'LogOut',

                        'route' => '/attendance/late-early/early-exit',

                        'api' => true,

                    ],

                    'grace_rules' => [

                        'label' => 'Grace Rules',

                        'permission_template' => 'crud',

                        'icon' => 'Timer',

                        'route' => '/attendance/late-early/grace',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Break Management
            |--------------------------------------------------------------------------
            */

            'break_management' => [

                'label' => 'Break Management',

                'description' => 'Configure employee break policies.',

                'icon' => 'Coffee',

                'route' => '/attendance/breaks',

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
            | Attendance Policies
            |--------------------------------------------------------------------------
            */

            'attendance_policies' => [

                'label' => 'Attendance Policies',

                'description' => 'Manage organization attendance policies.',

                'icon' => 'Shield',

                'route' => '/attendance/policies',

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
            | Auto Attendance Calculation
            |--------------------------------------------------------------------------
            */

            'attendance_calculation' => [

                'label' => 'Attendance Calculation',

                'description' => 'Automatically calculate attendance based on defined rules.',

                'icon' => 'Calculator',

                'route' => '/attendance/calculation',

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
            | Attendance Lock Period
            |--------------------------------------------------------------------------
            */

            'attendance_lock' => [

                'label' => 'Attendance Lock Period',

                'description' => 'Lock attendance after payroll processing or a specified date.',

                'icon' => 'Lock',

                'route' => '/attendance/lock-period',

                'permission_template' => 'approval',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

            ],
                        /*
            |--------------------------------------------------------------------------
            | Biometric Integration
            |--------------------------------------------------------------------------
            */

            'biometric_integration' => [

                'label' => 'Biometric Integration',

                'description' => 'Manage biometric devices and synchronization.',

                'icon' => 'Fingerprint',

                'route' => '/attendance/biometric',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'devices' => [

                        'label' => 'Biometric Devices',

                        'description' => 'Register and manage biometric devices.',

                        'icon' => 'HardDrive',

                        'route' => '/attendance/biometric/devices',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    'device_sync' => [

                        'label' => 'Device Synchronization',

                        'description' => 'Synchronize attendance from biometric devices.',

                        'icon' => 'RefreshCw',

                        'route' => '/attendance/biometric/sync',

                        'permission_template' => 'execute',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => false,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    'device_logs' => [

                        'label' => 'Device Logs',

                        'description' => 'View biometric synchronization logs.',

                        'icon' => 'ScrollText',

                        'route' => '/attendance/biometric/logs',

                        'permission_template' => 'read',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | GPS Attendance
            |--------------------------------------------------------------------------
            */

            'gps_attendance' => [

                'label' => 'GPS Attendance',

                'description' => 'Manage location based attendance.',

                'icon' => 'MapPin',

                'route' => '/attendance/gps',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'gps_configuration' => [

                        'label' => 'GPS Configuration',

                        'permission_template' => 'crud',

                        'icon' => 'MapPinned',

                        'route' => '/attendance/gps/configuration',

                        'api' => true,

                    ],

                    'geofencing' => [

                        'label' => 'Geofencing',

                        'permission_template' => 'crud',

                        'icon' => 'LocateFixed',

                        'route' => '/attendance/gps/geofencing',

                        'api' => true,

                    ],

                    'location_logs' => [

                        'label' => 'Location Logs',

                        'permission_template' => 'read',

                        'icon' => 'Route',

                        'route' => '/attendance/gps/logs',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Face Recognition
            |--------------------------------------------------------------------------
            */

            'face_recognition' => [

                'label' => 'Face Recognition Attendance',

                'description' => 'Manage AI face recognition attendance.',

                'icon' => 'ScanFace',

                'route' => '/attendance/face-recognition',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'face_registration' => [

                        'label' => 'Face Registration',

                        'permission_template' => 'crud',

                        'icon' => 'UserRound',

                        'route' => '/attendance/face-recognition/register',

                        'api' => true,

                    ],

                    'face_verification' => [

                        'label' => 'Face Verification',

                        'permission_template' => 'execute',

                        'icon' => 'ScanSearch',

                        'route' => '/attendance/face-recognition/verify',

                        'api' => true,

                    ],

                    'recognition_logs' => [

                        'label' => 'Recognition Logs',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/attendance/face-recognition/logs',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | QR Code Attendance
            |--------------------------------------------------------------------------
            */

            'qr_attendance' => [

                'label' => 'QR Code Attendance',

                'description' => 'Attendance using QR Code scanning.',

                'icon' => 'QrCode',

                'route' => '/attendance/qr',

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
            | Offline Synchronization
            |--------------------------------------------------------------------------
            */

            'offline_sync' => [

                'label' => 'Offline Synchronization',

                'description' => 'Synchronize offline attendance records.',

                'icon' => 'CloudUpload',

                'route' => '/attendance/offline-sync',

                'permission_template' => 'execute',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

            ],
                        /*
            |--------------------------------------------------------------------------
            | Attendance Reports
            |--------------------------------------------------------------------------
            */

            'reports' => [

                'label' => 'Attendance Reports',

                'description' => 'Generate attendance reports and summaries.',

                'icon' => 'FileBarChart',

                'route' => '/attendance/reports',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'daily_report' => [

                        'label' => 'Daily Report',

                        'permission_template' => 'read',

                        'icon' => 'CalendarDays',

                        'route' => '/attendance/reports/daily',

                        'api' => true,

                    ],

                    'monthly_report' => [

                        'label' => 'Monthly Report',

                        'permission_template' => 'read',

                        'icon' => 'CalendarRange',

                        'route' => '/attendance/reports/monthly',

                        'api' => true,

                    ],

                    'employee_report' => [

                        'label' => 'Employee Report',

                        'permission_template' => 'read',

                        'icon' => 'Users',

                        'route' => '/attendance/reports/employee',

                        'api' => true,

                    ],

                    'department_report' => [

                        'label' => 'Department Report',

                        'permission_template' => 'read',

                        'icon' => 'Building',

                        'route' => '/attendance/reports/department',

                        'api' => true,

                    ],

                    'late_report' => [

                        'label' => 'Late Arrival Report',

                        'permission_template' => 'read',

                        'icon' => 'ClockAlert',

                        'route' => '/attendance/reports/late',

                        'api' => true,

                    ],

                    'overtime_report' => [

                        'label' => 'Overtime Report',

                        'permission_template' => 'read',

                        'icon' => 'TimerReset',

                        'route' => '/attendance/reports/overtime',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Attendance Analytics
            |--------------------------------------------------------------------------
            */

            'analytics' => [

                'label' => 'Attendance Analytics',

                'description' => 'Attendance insights and KPI analytics.',

                'icon' => 'ChartColumn',

                'route' => '/attendance/analytics',

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
            | Import Attendance
            |--------------------------------------------------------------------------
            */

            'import' => [

                'label' => 'Import Attendance',

                'description' => 'Import attendance using CSV or Excel.',

                'icon' => 'FileUp',

                'route' => '/attendance/import',

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
            | Export Attendance
            |--------------------------------------------------------------------------
            */

            'export' => [

                'label' => 'Export Attendance',

                'description' => 'Export attendance records.',

                'icon' => 'FileDown',

                'route' => '/attendance/export',

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

                'description' => 'Perform bulk attendance operations.',

                'icon' => 'Boxes',

                'route' => '/attendance/bulk',

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

                'label' => 'Attendance Notifications',

                'description' => 'Attendance alerts and reminders.',

                'icon' => 'Bell',

                'route' => '/attendance/notifications',

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
            | AI Attendance Insights
            |--------------------------------------------------------------------------
            */

            'ai' => [

                'label' => 'AI Attendance Insights',

                'description' => 'AI-powered attendance analysis and prediction.',

                'icon' => 'Bot',

                'route' => '/attendance/ai',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'attendance_summary' => [

                        'label' => 'Attendance Summary',

                        'permission_template' => 'read',

                        'icon' => 'Brain',

                        'route' => '/attendance/ai/summary',

                        'api' => true,

                    ],

                    'late_prediction' => [

                        'label' => 'Late Prediction',

                        'permission_template' => 'read',

                        'icon' => 'TrendingUp',

                        'route' => '/attendance/ai/late-prediction',

                        'api' => true,

                    ],

                    'absence_prediction' => [

                        'label' => 'Absence Prediction',

                        'permission_template' => 'read',

                        'icon' => 'Activity',

                        'route' => '/attendance/ai/absence-prediction',

                        'api' => true,

                    ],

                ],

            ],

        ],

    ],

];