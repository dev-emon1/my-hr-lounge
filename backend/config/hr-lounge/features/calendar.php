<?php

return [

    'calendar' => [

        /*
        |--------------------------------------------------------------------------
        | Module Information
        |--------------------------------------------------------------------------
        */

        'label' => 'Calendar Management',

        'description' => 'Enterprise calendar and scheduling management system.',

        'icon' => 'Calendar',

        'route' => '/calendar',

        'group' => 'communication',

        'version' => '1.0.0',

        'phase' => 1,

        'order' => 160,

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

                'label' => 'Calendar Dashboard',

                'description' => 'Calendar overview and scheduling KPIs.',

                'icon' => 'LayoutDashboard',

                'route' => '/calendar',

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
            | Calendar
            |--------------------------------------------------------------------------
            */

            'calendar' => [

                'label' => 'Calendar',

                'description' => 'Manage enterprise calendar.',

                'icon' => 'CalendarDays',

                'route' => '/calendar/events',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'calendar_view' => [

                        'label' => 'Calendar View',

                        'permission_template' => 'read',

                        'icon' => 'CalendarRange',

                        'route' => '/calendar/events',

                        'api' => true,

                    ],

                    'agenda_view' => [

                        'label' => 'Agenda View',

                        'permission_template' => 'read',

                        'icon' => 'List',

                        'route' => '/calendar/agenda',

                        'api' => true,

                    ],

                    'timeline_view' => [

                        'label' => 'Timeline View',

                        'permission_template' => 'read',

                        'icon' => 'ChartGantt',

                        'route' => '/calendar/timeline',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Events
            |--------------------------------------------------------------------------
            */

            'events' => [

                'label' => 'Events',

                'description' => 'Manage calendar events.',

                'icon' => 'CalendarPlus',

                'route' => '/calendar/events/manage',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'event_list' => [

                        'label' => 'Event List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/calendar/events/manage',

                        'api' => true,

                    ],

                    'event_templates' => [

                        'label' => 'Event Templates',

                        'permission_template' => 'crud',

                        'icon' => 'LayoutTemplate',

                        'route' => '/calendar/events/templates',

                        'api' => true,

                    ],

                    'event_history' => [

                        'label' => 'Event History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/calendar/events/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Event Categories
            |--------------------------------------------------------------------------
            */

            'categories' => [

                'label' => 'Event Categories',

                'description' => 'Manage event categories.',

                'icon' => 'FolderTree',

                'route' => '/calendar/categories',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'category_list' => [

                        'label' => 'Category List',

                        'permission_template' => 'crud',

                        'icon' => 'Folder',

                        'route' => '/calendar/categories',

                        'api' => true,

                    ],

                    'event_types' => [

                        'label' => 'Event Types',

                        'permission_template' => 'crud',

                        'icon' => 'Tag',

                        'route' => '/calendar/categories/types',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Company Holidays
            |--------------------------------------------------------------------------
            */

            'holidays' => [

                'label' => 'Company Holidays',

                'description' => 'Manage company holiday calendar.',

                'icon' => 'PartyPopper',

                'route' => '/calendar/holidays',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'holiday_list' => [

                        'label' => 'Holiday List',

                        'permission_template' => 'crud',

                        'icon' => 'CalendarHeart',

                        'route' => '/calendar/holidays',

                        'api' => true,

                    ],

                    'holiday_groups' => [

                        'label' => 'Holiday Groups',

                        'permission_template' => 'crud',

                        'icon' => 'Folders',

                        'route' => '/calendar/holidays/groups',

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | Employee Calendar
            |--------------------------------------------------------------------------
            */

            'employee_calendar' => [

                'label' => 'Employee Calendar',

                'description' => 'Manage employee personal work calendars.',

                'icon' => 'UserRound',

                'route' => '/calendar/employees',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'employee_schedule' => [

                        'label' => 'Employee Schedule',

                        'permission_template' => 'read',

                        'icon' => 'CalendarDays',

                        'route' => '/calendar/employees',

                        'api' => true,

                    ],

                    'leave_calendar' => [

                        'label' => 'Leave Calendar',

                        'permission_template' => 'read',

                        'icon' => 'CalendarMinus',

                        'route' => '/calendar/employees/leave',

                        'api' => true,

                    ],

                    'shift_calendar' => [

                        'label' => 'Shift Calendar',

                        'permission_template' => 'read',

                        'icon' => 'Clock3',

                        'route' => '/calendar/employees/shifts',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Team Calendar
            |--------------------------------------------------------------------------
            */

            'team_calendar' => [

                'label' => 'Team Calendar',

                'description' => 'Manage department and team schedules.',

                'icon' => 'Users',

                'route' => '/calendar/teams',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'team_schedule' => [

                        'label' => 'Team Schedule',

                        'permission_template' => 'read',

                        'icon' => 'UsersRound',

                        'route' => '/calendar/teams',

                        'api' => true,

                    ],

                    'department_calendar' => [

                        'label' => 'Department Calendar',

                        'permission_template' => 'read',

                        'icon' => 'Building2',

                        'route' => '/calendar/teams/departments',

                        'api' => true,

                    ],

                    'resource_planning' => [

                        'label' => 'Resource Planning',

                        'permission_template' => 'crud',

                        'icon' => 'ChartGantt',

                        'route' => '/calendar/teams/resources',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Resource Calendar
            |--------------------------------------------------------------------------
            */

            'resource_calendar' => [

                'label' => 'Resource Calendar',

                'description' => 'Schedule shared organizational resources.',

                'icon' => 'MonitorSmartphone',

                'route' => '/calendar/resources',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'meeting_rooms' => [

                        'label' => 'Meeting Rooms',

                        'permission_template' => 'crud',

                        'icon' => 'DoorOpen',

                        'route' => '/calendar/resources/rooms',

                        'api' => true,

                    ],

                    'company_assets' => [

                        'label' => 'Shared Assets',

                        'permission_template' => 'crud',

                        'icon' => 'Laptop',

                        'route' => '/calendar/resources/assets',

                        'api' => true,

                    ],

                    'resource_bookings' => [

                        'label' => 'Resource Bookings',

                        'permission_template' => 'crud',

                        'icon' => 'Bookmark',

                        'route' => '/calendar/resources/bookings',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Schedule Templates
            |--------------------------------------------------------------------------
            */

            'schedule_templates' => [

                'label' => 'Schedule Templates',

                'description' => 'Create reusable scheduling templates.',

                'icon' => 'LayoutTemplate',

                'route' => '/calendar/templates',

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

                        'route' => '/calendar/templates',

                        'api' => true,

                    ],

                    'template_categories' => [

                        'label' => 'Template Categories',

                        'permission_template' => 'crud',

                        'icon' => 'FolderTree',

                        'route' => '/calendar/templates/categories',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Recurring Events
            |--------------------------------------------------------------------------
            */

            'recurring_events' => [

                'label' => 'Recurring Events',

                'description' => 'Manage recurring schedules and events.',

                'icon' => 'Repeat',

                'route' => '/calendar/recurring',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

            ],

            /*
            |--------------------------------------------------------------------------
            | Reminders
            |--------------------------------------------------------------------------
            */

            'reminders' => [

                'label' => 'Reminders',

                'description' => 'Manage reminders and alerts.',

                'icon' => 'BellRing',

                'route' => '/calendar/reminders',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

            ],

            /*
            |--------------------------------------------------------------------------
            | Availability
            |--------------------------------------------------------------------------
            */

            'availability' => [

                'label' => 'Availability',

                'description' => 'Manage employee and resource availability.',

                'icon' => 'ClockArrowUp',

                'route' => '/calendar/availability',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

            ],

            /*
            |--------------------------------------------------------------------------
            | Event Approvals
            |--------------------------------------------------------------------------
            */

            'event_approvals' => [

                'label' => 'Event Approvals',

                'description' => 'Approve calendar events.',

                'icon' => 'BadgeCheck',

                'route' => '/calendar/approvals',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'pending_approvals' => [

                        'label' => 'Pending Approvals',

                        'permission_template' => 'approval',

                        'icon' => 'ClipboardCheck',

                        'route' => '/calendar/approvals',

                        'api' => true,

                    ],

                    'approval_history' => [

                        'label' => 'Approval History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/calendar/approvals/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Calendar Sharing
            |--------------------------------------------------------------------------
            */

            'sharing' => [

                'label' => 'Calendar Sharing',

                'description' => 'Share calendars across teams and users.',

                'icon' => 'Share2',

                'route' => '/calendar/sharing',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'shared_calendars' => [

                        'label' => 'Shared Calendars',

                        'permission_template' => 'crud',

                        'icon' => 'Share2',

                        'route' => '/calendar/sharing',

                        'api' => true,

                    ],

                    'sharing_permissions' => [

                        'label' => 'Sharing Permissions',

                        'permission_template' => 'crud',

                        'icon' => 'ShieldCheck',

                        'route' => '/calendar/sharing/permissions',

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

                'label' => 'Calendar Reports',

                'description' => 'Generate calendar and scheduling reports.',

                'icon' => 'FileBarChart',

                'route' => '/calendar/reports',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'event_report' => [

                        'label' => 'Event Report',

                        'permission_template' => 'read',

                        'icon' => 'CalendarDays',

                        'route' => '/calendar/reports/events',

                        'api' => true,

                    ],

                    'attendance_calendar_report' => [

                        'label' => 'Attendance Calendar Report',

                        'permission_template' => 'read',

                        'icon' => 'Clock3',

                        'route' => '/calendar/reports/attendance',

                        'api' => true,

                    ],

                    'leave_calendar_report' => [

                        'label' => 'Leave Calendar Report',

                        'permission_template' => 'read',

                        'icon' => 'CalendarMinus',

                        'route' => '/calendar/reports/leaves',

                        'api' => true,

                    ],

                    'holiday_report' => [

                        'label' => 'Holiday Report',

                        'permission_template' => 'read',

                        'icon' => 'PartyPopper',

                        'route' => '/calendar/reports/holidays',

                        'api' => true,

                    ],

                    'resource_booking_report' => [

                        'label' => 'Resource Booking Report',

                        'permission_template' => 'read',

                        'icon' => 'MonitorSmartphone',

                        'route' => '/calendar/reports/resources',

                        'api' => true,

                    ],

                    'utilization_report' => [

                        'label' => 'Calendar Utilization Report',

                        'permission_template' => 'read',

                        'icon' => 'ChartColumn',

                        'route' => '/calendar/reports/utilization',

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

                'label' => 'Calendar Analytics',

                'description' => 'Scheduling analytics and calendar KPIs.',

                'icon' => 'ChartPie',

                'route' => '/calendar/analytics',

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

                'label' => 'Import Calendar',

                'description' => 'Import events and schedules.',

                'icon' => 'FileUp',

                'route' => '/calendar/import',

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

                'label' => 'Export Calendar',

                'description' => 'Export calendar events and schedules.',

                'icon' => 'FileDown',

                'route' => '/calendar/export',

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

                'description' => 'Perform bulk scheduling operations.',

                'icon' => 'Boxes',

                'route' => '/calendar/bulk',

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

                'label' => 'Calendar Notifications',

                'description' => 'Calendar reminders and notifications.',

                'icon' => 'Bell',

                'route' => '/calendar/notifications',

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
            | AI Calendar Insights
            |--------------------------------------------------------------------------
            */

            'ai' => [

                'label' => 'AI Calendar Insights',

                'description' => 'AI powered scheduling and calendar optimization.',

                'icon' => 'Bot',

                'route' => '/calendar/ai',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'smart_scheduling' => [

                        'label' => 'Smart Scheduling',

                        'permission_template' => 'read',

                        'icon' => 'Sparkles',

                        'route' => '/calendar/ai/scheduling',

                        'api' => true,

                    ],

                    'conflict_detection' => [

                        'label' => 'Conflict Detection',

                        'permission_template' => 'read',

                        'icon' => 'ShieldAlert',

                        'route' => '/calendar/ai/conflicts',

                        'api' => true,

                    ],

                    'availability_prediction' => [

                        'label' => 'Availability Prediction',

                        'permission_template' => 'read',

                        'icon' => 'Brain',

                        'route' => '/calendar/ai/availability',

                        'api' => true,

                    ],

                    'meeting_recommendations' => [

                        'label' => 'Meeting Time Recommendations',

                        'permission_template' => 'read',

                        'icon' => 'ClockArrowUp',

                        'route' => '/calendar/ai/meeting-recommendations',

                        'api' => true,

                    ],

                    'calendar_health_score' => [

                        'label' => 'Calendar Health Score',

                        'permission_template' => 'read',

                        'icon' => 'HeartPulse',

                        'route' => '/calendar/ai/health-score',

                        'api' => true,

                    ],

                ],

            ],

        ],

    ],

];