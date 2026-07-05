<?php

return [

    'meetings' => [

        /*
        |--------------------------------------------------------------------------
        | Module Information
        |--------------------------------------------------------------------------
        */

        'label' => 'Meetings Management',

        'description' => 'Enterprise meeting scheduling, collaboration and management.',

        'icon' => 'CalendarCheck2',

        'route' => '/meetings',

        'group' => 'communication',

        'version' => '1.0.0',

        'phase' => 1,

        'order' => 30,

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

                'label' => 'Meetings Dashboard',

                'description' => 'Meeting overview dashboard.',

                'icon' => 'LayoutDashboard',

                'route' => '/meetings',

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
            | Meeting Calendar
            |--------------------------------------------------------------------------
            */

            'meeting_calendar' => [

                'label' => 'Meeting Calendar',

                'description' => 'Calendar view of all meetings.',

                'icon' => 'Calendar',

                'route' => '/meetings/calendar',

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
            | Internal Meetings
            |--------------------------------------------------------------------------
            */

            'internal_meetings' => [

                'label' => 'Internal Meetings',

                'description' => 'Manage organization internal meetings.',

                'icon' => 'Users',

                'route' => '/meetings/internal',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'meeting_list' => [

                        'label' => 'Meeting List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/meetings/internal',

                        'api' => true,

                    ],

                    'recurring_meetings' => [

                        'label' => 'Recurring Meetings',

                        'permission_template' => 'crud',

                        'icon' => 'Repeat',

                        'route' => '/meetings/internal/recurring',

                        'api' => true,

                    ],

                    'cancelled_meetings' => [

                        'label' => 'Cancelled Meetings',

                        'permission_template' => 'read',

                        'icon' => 'CalendarX2',

                        'route' => '/meetings/internal/cancelled',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Client Meetings
            |--------------------------------------------------------------------------
            */

            'client_meetings' => [

                'label' => 'Client Meetings',

                'description' => 'Schedule and manage client meetings.',

                'icon' => 'Handshake',

                'route' => '/meetings/client',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'client_meeting_list' => [

                        'label' => 'Client Meeting List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/meetings/client',

                        'api' => true,

                    ],

                    'meeting_followups' => [

                        'label' => 'Meeting Follow-ups',

                        'permission_template' => 'crud',

                        'icon' => 'ClipboardCheck',

                        'route' => '/meetings/client/followups',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Department Meetings
            |--------------------------------------------------------------------------
            */

            'department_meetings' => [

                'label' => 'Department Meetings',

                'description' => 'Department specific meetings.',

                'icon' => 'Building2',

                'route' => '/meetings/departments',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'department_meeting_list' => [

                        'label' => 'Department Meetings',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/meetings/departments',

                        'api' => true,

                    ],

                    'department_agenda' => [

                        'label' => 'Department Agenda',

                        'permission_template' => 'crud',

                        'icon' => 'ClipboardList',

                        'route' => '/meetings/departments/agenda',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Board Meetings
            |--------------------------------------------------------------------------
            */

            'board_meetings' => [

                'label' => 'Board Meetings',

                'description' => 'Executive and board meeting management.',

                'icon' => 'BriefcaseBusiness',

                'route' => '/meetings/board',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'board_meeting_list' => [

                        'label' => 'Board Meeting List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/meetings/board',

                        'api' => true,

                    ],

                    'board_resolutions' => [

                        'label' => 'Board Resolutions',

                        'permission_template' => 'crud',

                        'icon' => 'Scale',

                        'route' => '/meetings/board/resolutions',

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | Interview Meetings
            |--------------------------------------------------------------------------
            */

            'interview_meetings' => [

                'label' => 'Interview Meetings',

                'description' => 'Schedule and manage candidate interviews.',

                'icon' => 'UserRoundSearch',

                'route' => '/meetings/interviews',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'interview_schedule' => [

                        'label' => 'Interview Schedule',

                        'permission_template' => 'crud',

                        'icon' => 'CalendarClock',

                        'route' => '/meetings/interviews/schedule',

                        'api' => true,

                    ],

                    'interview_panel' => [

                        'label' => 'Interview Panel',

                        'permission_template' => 'crud',

                        'icon' => 'UsersRound',

                        'route' => '/meetings/interviews/panel',

                        'api' => true,

                    ],

                    'candidate_feedback' => [

                        'label' => 'Candidate Feedback',

                        'permission_template' => 'crud',

                        'icon' => 'ClipboardCheck',

                        'route' => '/meetings/interviews/feedback',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Meeting Rooms
            |--------------------------------------------------------------------------
            */

            'meeting_rooms' => [

                'label' => 'Meeting Rooms',

                'description' => 'Manage physical and virtual meeting rooms.',

                'icon' => 'DoorOpen',

                'route' => '/meetings/rooms',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'room_list' => [

                        'label' => 'Room List',

                        'permission_template' => 'crud',

                        'icon' => 'Building',

                        'route' => '/meetings/rooms',

                        'api' => true,

                    ],

                    'room_booking' => [

                        'label' => 'Room Booking',

                        'permission_template' => 'crud',

                        'icon' => 'CalendarPlus2',

                        'route' => '/meetings/rooms/bookings',

                        'api' => true,

                    ],

                    'room_availability' => [

                        'label' => 'Room Availability',

                        'permission_template' => 'read',

                        'icon' => 'Clock3',

                        'route' => '/meetings/rooms/availability',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Agenda Management
            |--------------------------------------------------------------------------
            */

            'agenda_management' => [

                'label' => 'Agenda Management',

                'description' => 'Create and manage meeting agendas.',

                'icon' => 'ClipboardList',

                'route' => '/meetings/agendas',

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
            | Participants
            |--------------------------------------------------------------------------
            */

            'participants' => [

                'label' => 'Participants',

                'description' => 'Manage meeting participants and invitations.',

                'icon' => 'Users',

                'route' => '/meetings/participants',

                'permission_template' => 'crud',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'participant_list' => [

                        'label' => 'Participant List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/meetings/participants',

                        'api' => true,

                    ],

                    'attendance_tracking' => [

                        'label' => 'Attendance Tracking',

                        'permission_template' => 'crud',

                        'icon' => 'UserCheck',

                        'route' => '/meetings/participants/attendance',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Minutes of Meeting (MoM)
            |--------------------------------------------------------------------------
            */

            'minutes_of_meeting' => [

                'label' => 'Minutes of Meeting',

                'description' => 'Record and manage meeting minutes.',

                'icon' => 'NotebookPen',

                'route' => '/meetings/minutes',

                'permission_template' => 'crud',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'mom_templates' => [

                        'label' => 'MoM Templates',

                        'permission_template' => 'crud',

                        'icon' => 'FileText',

                        'route' => '/meetings/minutes/templates',

                        'api' => true,

                    ],

                    'action_items' => [

                        'label' => 'Action Items',

                        'permission_template' => 'crud',

                        'icon' => 'CheckSquare',

                        'route' => '/meetings/minutes/action-items',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Recordings
            |--------------------------------------------------------------------------
            */

            'recordings' => [

                'label' => 'Meeting Recordings',

                'description' => 'Manage meeting audio and video recordings.',

                'icon' => 'CircleDot',

                'route' => '/meetings/recordings',

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
            | Attachments
            |--------------------------------------------------------------------------
            */

            'attachments' => [

                'label' => 'Meeting Attachments',

                'description' => 'Manage meeting related files and documents.',

                'icon' => 'Paperclip',

                'route' => '/meetings/attachments',

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
            | Reports
            |--------------------------------------------------------------------------
            */

            'reports' => [

                'label' => 'Meeting Reports',

                'description' => 'Generate meeting reports and participation insights.',

                'icon' => 'FileBarChart',

                'route' => '/meetings/reports',

                'permission_template' => 'read',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'attendance_report' => [

                        'label' => 'Attendance Report',

                        'permission_template' => 'read',

                        'icon' => 'UserCheck',

                        'route' => '/meetings/reports/attendance',

                        'api' => true,

                    ],

                    'meeting_summary_report' => [

                        'label' => 'Meeting Summary Report',

                        'permission_template' => 'read',

                        'icon' => 'FileText',

                        'route' => '/meetings/reports/summary',

                        'api' => true,

                    ],

                    'action_item_report' => [

                        'label' => 'Action Item Report',

                        'permission_template' => 'read',

                        'icon' => 'ClipboardCheck',

                        'route' => '/meetings/reports/action-items',

                        'api' => true,

                    ],

                    'room_utilization_report' => [

                        'label' => 'Room Utilization Report',

                        'permission_template' => 'read',

                        'icon' => 'Building',

                        'route' => '/meetings/reports/rooms',

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

                'label' => 'Meeting Analytics',

                'description' => 'Meeting performance and collaboration analytics.',

                'icon' => 'ChartPie',

                'route' => '/meetings/analytics',

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

                'label' => 'Meeting Notifications',

                'description' => 'Manage meeting reminders and notifications.',

                'icon' => 'Bell',

                'route' => '/meetings/notifications',

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
            | Import
            |--------------------------------------------------------------------------
            */

            'import' => [

                'label' => 'Import Meetings',

                'description' => 'Import meeting schedules and configurations.',

                'icon' => 'FileUp',

                'route' => '/meetings/import',

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

                'label' => 'Export Meetings',

                'description' => 'Export meetings, minutes and reports.',

                'icon' => 'FileDown',

                'route' => '/meetings/export',

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
            | AI Meeting Assistant
            |--------------------------------------------------------------------------
            */

            'ai' => [

                'label' => 'AI Meeting Assistant',

                'description' => 'AI powered meeting automation and collaboration intelligence.',

                'icon' => 'Bot',

                'route' => '/meetings/ai',

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

                        'icon' => 'CalendarClock',

                        'route' => '/meetings/ai/scheduling',

                        'api' => true,

                    ],

                    'meeting_summary' => [

                        'label' => 'AI Meeting Summary',

                        'permission_template' => 'read',

                        'icon' => 'ScrollText',

                        'route' => '/meetings/ai/summary',

                        'api' => true,

                    ],

                    'decision_tracking' => [

                        'label' => 'Decision Tracking',

                        'permission_template' => 'crud',

                        'icon' => 'CheckCheck',

                        'route' => '/meetings/ai/decisions',

                        'api' => true,

                    ],

                    'followup_recommendations' => [

                        'label' => 'Follow-up Recommendations',

                        'permission_template' => 'read',

                        'icon' => 'Lightbulb',

                        'route' => '/meetings/ai/followups',

                        'api' => true,

                    ],

                    'meeting_transcription' => [

                        'label' => 'Meeting Transcription',

                        'permission_template' => 'read',

                        'icon' => 'Captions',

                        'route' => '/meetings/ai/transcription',

                        'api' => true,

                    ],

                    'participant_insights' => [

                        'label' => 'Participant Insights',

                        'permission_template' => 'read',

                        'icon' => 'UsersRound',

                        'route' => '/meetings/ai/participants',

                        'api' => true,

                    ],

                    'meeting_dashboard' => [

                        'label' => 'Meeting Intelligence Dashboard',

                        'permission_template' => 'read',

                        'icon' => 'LayoutDashboard',

                        'route' => '/meetings/ai/dashboard',

                        'api' => true,

                    ],

                ],

            ],

        ],

    ],

];