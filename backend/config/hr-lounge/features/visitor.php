<?php

return [

    'visitor' => [

        /*
        |--------------------------------------------------------------------------
        | Module Information
        |--------------------------------------------------------------------------
        */

        'label' => 'Visitor Management',

        'description' => 'Enterprise visitor management and reception system.',

        'icon' => 'UserRoundSearch',

        'route' => '/visitor',

        'group' => 'operations',

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

                'label' => 'Visitor Dashboard',

                'description' => 'Visitor management overview.',

                'icon' => 'LayoutDashboard',

                'route' => '/visitor',

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
            | Visitors
            |--------------------------------------------------------------------------
            */

            'visitors' => [

                'label' => 'Visitors',

                'description' => 'Manage visitor records.',

                'icon' => 'Users',

                'route' => '/visitor/list',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'visitor_list' => [

                        'label' => 'Visitor List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/visitor/list',

                        'api' => true,

                    ],

                    'visitor_registration' => [

                        'label' => 'Visitor Registration',

                        'permission_template' => 'crud',

                        'icon' => 'UserRoundPlus',

                        'route' => '/visitor/register',

                        'api' => true,

                    ],

                    'visitor_profile' => [

                        'label' => 'Visitor Profile',

                        'permission_template' => 'read',

                        'icon' => 'UserCircle',

                        'route' => '/visitor/profile',

                        'api' => true,

                    ],

                    'visitor_history' => [

                        'label' => 'Visitor History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/visitor/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Visitor Categories
            |--------------------------------------------------------------------------
            */

            'categories' => [

                'label' => 'Visitor Categories',

                'description' => 'Manage visitor categories.',

                'icon' => 'FolderTree',

                'route' => '/visitor/categories',

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

                        'route' => '/visitor/categories',

                        'api' => true,

                    ],

                    'visit_purpose' => [

                        'label' => 'Visit Purposes',

                        'permission_template' => 'crud',

                        'icon' => 'Flag',

                        'route' => '/visitor/categories/purposes',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Pre Registration
            |--------------------------------------------------------------------------
            */

            'pre_registration' => [

                'label' => 'Pre Registration',

                'description' => 'Manage scheduled visitors before arrival.',

                'icon' => 'CalendarPlus',

                'route' => '/visitor/pre-registration',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'pre_registered_visitors' => [

                        'label' => 'Pre Registered Visitors',

                        'permission_template' => 'crud',

                        'icon' => 'CalendarRange',

                        'route' => '/visitor/pre-registration',

                        'api' => true,

                    ],

                    'visit_approvals' => [

                        'label' => 'Visit Approvals',

                        'permission_template' => 'approval',

                        'icon' => 'BadgeCheck',

                        'route' => '/visitor/pre-registration/approvals',

                        'api' => true,

                    ],

                    'scheduled_visits' => [

                        'label' => 'Scheduled Visits',

                        'permission_template' => 'read',

                        'icon' => 'CalendarDays',

                        'route' => '/visitor/pre-registration/schedules',

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | Check In / Check Out
            |--------------------------------------------------------------------------
            */

            'check_in_out' => [

                'label' => 'Check In / Check Out',

                'description' => 'Manage visitor check in and check out process.',

                'icon' => 'LogIn',

                'route' => '/visitor/check-in-out',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'check_in' => [

                        'label' => 'Visitor Check In',

                        'permission_template' => 'crud',

                        'icon' => 'LogIn',

                        'route' => '/visitor/check-in-out/check-in',

                        'api' => true,

                    ],

                    'check_out' => [

                        'label' => 'Visitor Check Out',

                        'permission_template' => 'crud',

                        'icon' => 'LogOut',

                        'route' => '/visitor/check-in-out/check-out',

                        'api' => true,

                    ],

                    'visit_log' => [

                        'label' => 'Visit Log',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/visitor/check-in-out/log',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Visitor Passes
            |--------------------------------------------------------------------------
            */

            'visitor_passes' => [

                'label' => 'Visitor Passes',

                'description' => 'Generate and manage visitor passes.',

                'icon' => 'Badge',

                'route' => '/visitor/passes',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'pass_templates' => [

                        'label' => 'Pass Templates',

                        'permission_template' => 'crud',

                        'icon' => 'LayoutTemplate',

                        'route' => '/visitor/passes/templates',

                        'api' => true,

                    ],

                    'issued_passes' => [

                        'label' => 'Issued Passes',

                        'permission_template' => 'read',

                        'icon' => 'IdCard',

                        'route' => '/visitor/passes/issued',

                        'api' => true,

                    ],

                    'badge_printing' => [

                        'label' => 'Badge Printing',

                        'permission_template' => 'execute',

                        'icon' => 'Printer',

                        'route' => '/visitor/passes/print',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Host Management
            |--------------------------------------------------------------------------
            */

            'hosts' => [

                'label' => 'Host Management',

                'description' => 'Manage employee hosts for visitors.',

                'icon' => 'UserCheck',

                'route' => '/visitor/hosts',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'host_directory' => [

                        'label' => 'Host Directory',

                        'permission_template' => 'read',

                        'icon' => 'UsersRound',

                        'route' => '/visitor/hosts',

                        'api' => true,

                    ],

                    'host_notifications' => [

                        'label' => 'Host Notifications',

                        'permission_template' => 'crud',

                        'icon' => 'Bell',

                        'route' => '/visitor/hosts/notifications',

                        'api' => true,

                    ],

                    'visit_requests' => [

                        'label' => 'Visit Requests',

                        'permission_template' => 'approval',

                        'icon' => 'ClipboardCheck',

                        'route' => '/visitor/hosts/requests',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Meeting Visitors
            |--------------------------------------------------------------------------
            */

            'meeting_visitors' => [

                'label' => 'Meeting Visitors',

                'description' => 'Manage visitors attending meetings.',

                'icon' => 'Handshake',

                'route' => '/visitor/meetings',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'meeting_schedule' => [

                        'label' => 'Meeting Schedule',

                        'permission_template' => 'read',

                        'icon' => 'CalendarDays',

                        'route' => '/visitor/meetings',

                        'api' => true,

                    ],

                    'meeting_checkin' => [

                        'label' => 'Meeting Check In',

                        'permission_template' => 'crud',

                        'icon' => 'CalendarCheck',

                        'route' => '/visitor/meetings/check-in',

                        'api' => true,

                    ],

                    'meeting_history' => [

                        'label' => 'Meeting History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/visitor/meetings/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Gate Pass
            |--------------------------------------------------------------------------
            */

            'gate_pass' => [

                'label' => 'Gate Pass',

                'description' => 'Manage visitor gate passes and security clearance.',

                'icon' => 'Shield',

                'route' => '/visitor/gate-pass',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'gate_pass_list' => [

                        'label' => 'Gate Pass List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/visitor/gate-pass',

                        'api' => true,

                    ],

                    'security_verification' => [

                        'label' => 'Security Verification',

                        'permission_template' => 'approval',

                        'icon' => 'ShieldCheck',

                        'route' => '/visitor/gate-pass/security',

                        'api' => true,

                    ],

                    'entry_exit_log' => [

                        'label' => 'Entry / Exit Log',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/visitor/gate-pass/log',

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | Watchlist & Blacklist
            |--------------------------------------------------------------------------
            */

            'watchlist' => [

                'label' => 'Watchlist & Blacklist',

                'description' => 'Manage restricted and monitored visitors.',

                'icon' => 'ShieldAlert',

                'route' => '/visitor/watchlist',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'watchlist_records' => [

                        'label' => 'Watchlist',

                        'permission_template' => 'crud',

                        'icon' => 'Eye',

                        'route' => '/visitor/watchlist',

                        'api' => true,

                    ],

                    'blacklist_records' => [

                        'label' => 'Blacklist',

                        'permission_template' => 'crud',

                        'icon' => 'Ban',

                        'route' => '/visitor/watchlist/blacklist',

                        'api' => true,

                    ],

                    'security_alerts' => [

                        'label' => 'Security Alerts',

                        'permission_template' => 'read',

                        'icon' => 'BellRing',

                        'route' => '/visitor/watchlist/alerts',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Visitor History
            |--------------------------------------------------------------------------
            */

            'visitor_history' => [

                'label' => 'Visitor History',

                'description' => 'View complete visitor history and visit records.',

                'icon' => 'History',

                'route' => '/visitor/history',

                'permission_template' => 'read',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'visit_history' => [

                        'label' => 'Visit History',

                        'permission_template' => 'read',

                        'icon' => 'ClipboardList',

                        'route' => '/visitor/history/visits',

                        'api' => true,

                    ],

                    'frequent_visitors' => [

                        'label' => 'Frequent Visitors',

                        'permission_template' => 'read',

                        'icon' => 'Repeat',

                        'route' => '/visitor/history/frequent',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Emergency Evacuation Register
            |--------------------------------------------------------------------------
            */

            'emergency_register' => [

                'label' => 'Emergency Register',

                'description' => 'Track visitors during emergency evacuation.',

                'icon' => 'Siren',

                'route' => '/visitor/emergency',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'current_visitors' => [

                        'label' => 'Current Visitors',

                        'permission_template' => 'read',

                        'icon' => 'Users',

                        'route' => '/visitor/emergency/current',

                        'api' => true,

                    ],

                    'evacuation_log' => [

                        'label' => 'Evacuation Log',

                        'permission_template' => 'read',

                        'icon' => 'ClipboardCheck',

                        'route' => '/visitor/emergency/log',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Visitor Audit Log
            |--------------------------------------------------------------------------
            */

            'audit_log' => [

                'label' => 'Visitor Audit Log',

                'description' => 'Track all visitor related activities.',

                'icon' => 'ClipboardSearch',

                'route' => '/visitor/audit',

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
            | NDA & Consent Forms
            |--------------------------------------------------------------------------
            */

            'consent_forms' => [

                'label' => 'NDA & Consent Forms',

                'description' => 'Manage visitor agreements and consent forms.',

                'icon' => 'FileSignature',

                'route' => '/visitor/consent',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'nda_templates' => [

                        'label' => 'NDA Templates',

                        'permission_template' => 'crud',

                        'icon' => 'FileText',

                        'route' => '/visitor/consent/nda',

                        'api' => true,

                    ],

                    'signed_agreements' => [

                        'label' => 'Signed Agreements',

                        'permission_template' => 'read',

                        'icon' => 'BadgeCheck',

                        'route' => '/visitor/consent/signed',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Vehicle Management
            |--------------------------------------------------------------------------
            */

            'vehicles' => [

                'label' => 'Visitor Vehicles',

                'description' => 'Manage visitor vehicle information.',

                'icon' => 'Car',

                'route' => '/visitor/vehicles',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'vehicle_registry' => [

                        'label' => 'Vehicle Registry',

                        'permission_template' => 'crud',

                        'icon' => 'CarFront',

                        'route' => '/visitor/vehicles',

                        'api' => true,

                    ],

                    'parking_passes' => [

                        'label' => 'Parking Passes',

                        'permission_template' => 'crud',

                        'icon' => 'ParkingCircle',

                        'route' => '/visitor/vehicles/parking',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Parcel & Courier Management
            |--------------------------------------------------------------------------
            */

            'couriers' => [

                'label' => 'Parcel & Courier',

                'description' => 'Track incoming parcels and courier visitors.',

                'icon' => 'Package',

                'route' => '/visitor/couriers',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'parcel_register' => [

                        'label' => 'Parcel Register',

                        'permission_template' => 'crud',

                        'icon' => 'PackageOpen',

                        'route' => '/visitor/couriers/parcels',

                        'api' => true,

                    ],

                    'delivery_history' => [

                        'label' => 'Delivery History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/visitor/couriers/history',

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

                'label' => 'Visitor Reports',

                'description' => 'Generate visitor reports and operational summaries.',

                'icon' => 'FileBarChart',

                'route' => '/visitor/reports',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'visitor_summary_report' => [

                        'label' => 'Visitor Summary Report',

                        'permission_template' => 'read',

                        'icon' => 'ChartColumn',

                        'route' => '/visitor/reports/summary',

                        'api' => true,

                    ],

                    'daily_visit_report' => [

                        'label' => 'Daily Visit Report',

                        'permission_template' => 'read',

                        'icon' => 'CalendarDays',

                        'route' => '/visitor/reports/daily',

                        'api' => true,

                    ],

                    'host_report' => [

                        'label' => 'Host Visit Report',

                        'permission_template' => 'read',

                        'icon' => 'UserCheck',

                        'route' => '/visitor/reports/hosts',

                        'api' => true,

                    ],

                    'security_report' => [

                        'label' => 'Security Report',

                        'permission_template' => 'read',

                        'icon' => 'ShieldCheck',

                        'route' => '/visitor/reports/security',

                        'api' => true,

                    ],

                    'vehicle_report' => [

                        'label' => 'Vehicle Report',

                        'permission_template' => 'read',

                        'icon' => 'Car',

                        'route' => '/visitor/reports/vehicles',

                        'api' => true,

                    ],

                    'courier_report' => [

                        'label' => 'Courier Report',

                        'permission_template' => 'read',

                        'icon' => 'Package',

                        'route' => '/visitor/reports/couriers',

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

                'label' => 'Visitor Analytics',

                'description' => 'Visitor trends, occupancy and operational analytics.',

                'icon' => 'ChartPie',

                'route' => '/visitor/analytics',

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

                'label' => 'Import Visitors',

                'description' => 'Bulk import visitor records.',

                'icon' => 'FileUp',

                'route' => '/visitor/import',

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

                'label' => 'Export Visitors',

                'description' => 'Export visitor records.',

                'icon' => 'FileDown',

                'route' => '/visitor/export',

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

                'description' => 'Perform bulk visitor operations.',

                'icon' => 'Boxes',

                'route' => '/visitor/bulk',

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

                'label' => 'Visitor Notifications',

                'description' => 'Visitor alerts and notification management.',

                'icon' => 'Bell',

                'route' => '/visitor/notifications',

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
            | AI Visitor Insights
            |--------------------------------------------------------------------------
            */

            'ai' => [

                'label' => 'AI Visitor Insights',

                'description' => 'AI powered visitor intelligence and security insights.',

                'icon' => 'Bot',

                'route' => '/visitor/ai',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'visitor_risk_score' => [

                        'label' => 'Visitor Risk Scoring',

                        'permission_template' => 'read',

                        'icon' => 'ShieldAlert',

                        'route' => '/visitor/ai/risk-score',

                        'api' => true,

                    ],

                    'visitor_patterns' => [

                        'label' => 'Visitor Pattern Analysis',

                        'permission_template' => 'read',

                        'icon' => 'Brain',

                        'route' => '/visitor/ai/pattern-analysis',

                        'api' => true,

                    ],

                    'occupancy_forecast' => [

                        'label' => 'Occupancy Forecast',

                        'permission_template' => 'read',

                        'icon' => 'UsersRound',

                        'route' => '/visitor/ai/occupancy',

                        'api' => true,

                    ],

                    'security_recommendations' => [

                        'label' => 'Security Recommendations',

                        'permission_template' => 'read',

                        'icon' => 'Sparkles',

                        'route' => '/visitor/ai/security',

                        'api' => true,

                    ],

                    'visitor_predictions' => [

                        'label' => 'Visitor Traffic Prediction',

                        'permission_template' => 'read',

                        'icon' => 'ChartLine',

                        'route' => '/visitor/ai/traffic',

                        'api' => true,

                    ],

                ],

            ],

        ],

    ],

];