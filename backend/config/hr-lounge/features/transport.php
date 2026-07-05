<?php

return [

    'transport' => [

        /*
        |--------------------------------------------------------------------------
        | Module Information
        |--------------------------------------------------------------------------
        */

        'label' => 'Transport Management',

        'description' => 'Enterprise fleet and transportation management system.',

        'icon' => 'Truck',

        'route' => '/transport',

        'group' => 'operations',

        'version' => '1.0.0',

        'phase' => 1,

        'order' => 150,

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

                'label' => 'Transport Dashboard',

                'description' => 'Fleet overview and transportation KPIs.',

                'icon' => 'LayoutDashboard',

                'route' => '/transport',

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
            | Fleet Management
            |--------------------------------------------------------------------------
            */

            'fleet' => [

                'label' => 'Fleet Management',

                'description' => 'Manage organizational fleet.',

                'icon' => 'Truck',

                'route' => '/transport/fleet',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'fleet_list' => [

                        'label' => 'Fleet List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/transport/fleet',

                        'api' => true,

                    ],

                    'fleet_status' => [

                        'label' => 'Fleet Status',

                        'permission_template' => 'read',

                        'icon' => 'Activity',

                        'route' => '/transport/fleet/status',

                        'api' => true,

                    ],

                    'fleet_utilization' => [

                        'label' => 'Fleet Utilization',

                        'permission_template' => 'read',

                        'icon' => 'ChartColumn',

                        'route' => '/transport/fleet/utilization',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Vehicles
            |--------------------------------------------------------------------------
            */

            'vehicles' => [

                'label' => 'Vehicles',

                'description' => 'Manage transport vehicles.',

                'icon' => 'Car',

                'route' => '/transport/vehicles',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'vehicle_list' => [

                        'label' => 'Vehicle List',

                        'permission_template' => 'crud',

                        'icon' => 'CarFront',

                        'route' => '/transport/vehicles',

                        'api' => true,

                    ],

                    'vehicle_assignment' => [

                        'label' => 'Vehicle Assignment',

                        'permission_template' => 'crud',

                        'icon' => 'UserRoundPlus',

                        'route' => '/transport/vehicles/assignment',

                        'api' => true,

                    ],

                    'vehicle_availability' => [

                        'label' => 'Vehicle Availability',

                        'permission_template' => 'read',

                        'icon' => 'CalendarClock',

                        'route' => '/transport/vehicles/availability',

                        'api' => true,

                    ],

                    'vehicle_history' => [

                        'label' => 'Vehicle History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/transport/vehicles/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Drivers
            |--------------------------------------------------------------------------
            */

            'drivers' => [

                'label' => 'Drivers',

                'description' => 'Manage company drivers.',

                'icon' => 'UserCheck',

                'route' => '/transport/drivers',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'driver_list' => [

                        'label' => 'Driver List',

                        'permission_template' => 'crud',

                        'icon' => 'Users',

                        'route' => '/transport/drivers',

                        'api' => true,

                    ],

                    'driver_assignments' => [

                        'label' => 'Driver Assignments',

                        'permission_template' => 'crud',

                        'icon' => 'ClipboardList',

                        'route' => '/transport/drivers/assignments',

                        'api' => true,

                    ],

                    'license_management' => [

                        'label' => 'License Management',

                        'permission_template' => 'crud',

                        'icon' => 'BadgeCheck',

                        'route' => '/transport/drivers/licenses',

                        'api' => true,

                    ],

                    'driver_performance' => [

                        'label' => 'Driver Performance',

                        'permission_template' => 'read',

                        'icon' => 'TrendingUp',

                        'route' => '/transport/drivers/performance',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Vehicle Categories
            |--------------------------------------------------------------------------
            */

            'vehicle_categories' => [

                'label' => 'Vehicle Categories',

                'description' => 'Manage vehicle categories and types.',

                'icon' => 'FolderTree',

                'route' => '/transport/categories',

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

                        'route' => '/transport/categories',

                        'api' => true,

                    ],

                    'vehicle_types' => [

                        'label' => 'Vehicle Types',

                        'permission_template' => 'crud',

                        'icon' => 'Truck',

                        'route' => '/transport/categories/types',

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | Route Management
            |--------------------------------------------------------------------------
            */

            'routes' => [

                'label' => 'Route Management',

                'description' => 'Manage transportation routes.',

                'icon' => 'Route',

                'route' => '/transport/routes',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'route_list' => [

                        'label' => 'Route List',

                        'permission_template' => 'crud',

                        'icon' => 'Map',

                        'route' => '/transport/routes',

                        'api' => true,

                    ],

                    'route_planning' => [

                        'label' => 'Route Planning',

                        'permission_template' => 'crud',

                        'icon' => 'MapPinned',

                        'route' => '/transport/routes/planning',

                        'api' => true,

                    ],

                    'route_history' => [

                        'label' => 'Route History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/transport/routes/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Trip Management
            |--------------------------------------------------------------------------
            */

            'trips' => [

                'label' => 'Trip Management',

                'description' => 'Manage transportation trips.',

                'icon' => 'Navigation',

                'route' => '/transport/trips',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'trip_list' => [

                        'label' => 'Trip List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/transport/trips',

                        'api' => true,

                    ],

                    'trip_tracking' => [

                        'label' => 'Trip Tracking',

                        'permission_template' => 'read',

                        'icon' => 'LocateFixed',

                        'route' => '/transport/trips/tracking',

                        'api' => true,

                    ],

                    'trip_history' => [

                        'label' => 'Trip History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/transport/trips/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Trip Scheduling
            |--------------------------------------------------------------------------
            */

            'trip_schedule' => [

                'label' => 'Trip Scheduling',

                'description' => 'Schedule transport trips.',

                'icon' => 'CalendarClock',

                'route' => '/transport/schedules',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'schedule_list' => [

                        'label' => 'Schedule List',

                        'permission_template' => 'crud',

                        'icon' => 'CalendarDays',

                        'route' => '/transport/schedules',

                        'api' => true,

                    ],

                    'recurring_schedules' => [

                        'label' => 'Recurring Schedules',

                        'permission_template' => 'crud',

                        'icon' => 'Repeat',

                        'route' => '/transport/schedules/recurring',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Fuel Management
            |--------------------------------------------------------------------------
            */

            'fuel' => [

                'label' => 'Fuel Management',

                'description' => 'Track vehicle fuel usage and costs.',

                'icon' => 'Fuel',

                'route' => '/transport/fuel',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'fuel_logs' => [

                        'label' => 'Fuel Logs',

                        'permission_template' => 'crud',

                        'icon' => 'ClipboardList',

                        'route' => '/transport/fuel',

                        'api' => true,

                    ],

                    'fuel_consumption' => [

                        'label' => 'Fuel Consumption',

                        'permission_template' => 'read',

                        'icon' => 'Gauge',

                        'route' => '/transport/fuel/consumption',

                        'api' => true,

                    ],

                    'fuel_cards' => [

                        'label' => 'Fuel Cards',

                        'permission_template' => 'crud',

                        'icon' => 'CreditCard',

                        'route' => '/transport/fuel/cards',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Maintenance
            |--------------------------------------------------------------------------
            */

            'maintenance' => [

                'label' => 'Maintenance',

                'description' => 'Manage vehicle maintenance.',

                'icon' => 'Wrench',

                'route' => '/transport/maintenance',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'maintenance_schedule' => [

                        'label' => 'Maintenance Schedule',

                        'permission_template' => 'crud',

                        'icon' => 'CalendarRange',

                        'route' => '/transport/maintenance',

                        'api' => true,

                    ],

                    'service_history' => [

                        'label' => 'Service History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/transport/maintenance/history',

                        'api' => true,

                    ],

                    'maintenance_requests' => [

                        'label' => 'Maintenance Requests',

                        'permission_template' => 'crud',

                        'icon' => 'ClipboardCheck',

                        'route' => '/transport/maintenance/requests',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Vehicle Inspection
            |--------------------------------------------------------------------------
            */

            'inspection' => [

                'label' => 'Vehicle Inspection',

                'description' => 'Perform and record vehicle inspections.',

                'icon' => 'ClipboardSearch',

                'route' => '/transport/inspection',

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
            | Vehicle Documents
            |--------------------------------------------------------------------------
            */

            'documents' => [

                'label' => 'Vehicle Documents',

                'description' => 'Manage vehicle related documents.',

                'icon' => 'FileText',

                'route' => '/transport/documents',

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
            | GPS Tracking
            |--------------------------------------------------------------------------
            */

            'gps_tracking' => [

                'label' => 'GPS Tracking',

                'description' => 'Track vehicles using GPS integration.',

                'icon' => 'Locate',

                'route' => '/transport/gps',

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
            | Accident & Incident Management
            |--------------------------------------------------------------------------
            */

            'incidents' => [

                'label' => 'Accident & Incident',

                'description' => 'Record and investigate vehicle accidents and incidents.',

                'icon' => 'TriangleAlert',

                'route' => '/transport/incidents',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'incident_reports' => [

                        'label' => 'Incident Reports',

                        'permission_template' => 'crud',

                        'icon' => 'FileWarning',

                        'route' => '/transport/incidents',

                        'api' => true,

                    ],

                    'insurance_claims' => [

                        'label' => 'Insurance Claims',

                        'permission_template' => 'crud',

                        'icon' => 'Shield',

                        'route' => '/transport/incidents/claims',

                        'api' => true,

                    ],

                    'investigation_history' => [

                        'label' => 'Investigation History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/transport/incidents/history',

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

                'label' => 'Transport Reports',

                'description' => 'Generate transport and fleet reports.',

                'icon' => 'FileBarChart',

                'route' => '/transport/reports',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'fleet_report' => [

                        'label' => 'Fleet Report',

                        'permission_template' => 'read',

                        'icon' => 'Truck',

                        'route' => '/transport/reports/fleet',

                        'api' => true,

                    ],

                    'trip_report' => [

                        'label' => 'Trip Report',

                        'permission_template' => 'read',

                        'icon' => 'Navigation',

                        'route' => '/transport/reports/trips',

                        'api' => true,

                    ],

                    'fuel_report' => [

                        'label' => 'Fuel Report',

                        'permission_template' => 'read',

                        'icon' => 'Fuel',

                        'route' => '/transport/reports/fuel',

                        'api' => true,

                    ],

                    'maintenance_report' => [

                        'label' => 'Maintenance Report',

                        'permission_template' => 'read',

                        'icon' => 'Wrench',

                        'route' => '/transport/reports/maintenance',

                        'api' => true,

                    ],

                    'driver_report' => [

                        'label' => 'Driver Report',

                        'permission_template' => 'read',

                        'icon' => 'UserCheck',

                        'route' => '/transport/reports/drivers',

                        'api' => true,

                    ],

                    'incident_report' => [

                        'label' => 'Incident Report',

                        'permission_template' => 'read',

                        'icon' => 'TriangleAlert',

                        'route' => '/transport/reports/incidents',

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

                'label' => 'Transport Analytics',

                'description' => 'Fleet analytics and operational KPIs.',

                'icon' => 'ChartPie',

                'route' => '/transport/analytics',

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

                'label' => 'Import Transport Data',

                'description' => 'Bulk import transport records.',

                'icon' => 'FileUp',

                'route' => '/transport/import',

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

                'label' => 'Export Transport Data',

                'description' => 'Export transport records.',

                'icon' => 'FileDown',

                'route' => '/transport/export',

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

                'description' => 'Perform bulk transport operations.',

                'icon' => 'Boxes',

                'route' => '/transport/bulk',

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

                'label' => 'Transport Notifications',

                'description' => 'Fleet alerts and transport notifications.',

                'icon' => 'Bell',

                'route' => '/transport/notifications',

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
            | AI Fleet Insights
            |--------------------------------------------------------------------------
            */

            'ai' => [

                'label' => 'AI Fleet Insights',

                'description' => 'AI powered fleet intelligence and operational optimization.',

                'icon' => 'Bot',

                'route' => '/transport/ai',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'route_optimization' => [

                        'label' => 'Route Optimization',

                        'permission_template' => 'read',

                        'icon' => 'Route',

                        'route' => '/transport/ai/route-optimization',

                        'api' => true,

                    ],

                    'fuel_cost_prediction' => [

                        'label' => 'Fuel Cost Prediction',

                        'permission_template' => 'read',

                        'icon' => 'Fuel',

                        'route' => '/transport/ai/fuel-prediction',

                        'api' => true,

                    ],

                    'maintenance_prediction' => [

                        'label' => 'Predictive Maintenance',

                        'permission_template' => 'read',

                        'icon' => 'Wrench',

                        'route' => '/transport/ai/predictive-maintenance',

                        'api' => true,

                    ],

                    'fleet_health_score' => [

                        'label' => 'Fleet Health Score',

                        'permission_template' => 'read',

                        'icon' => 'HeartPulse',

                        'route' => '/transport/ai/fleet-health',

                        'api' => true,

                    ],

                    'driver_behavior_analysis' => [

                        'label' => 'Driver Behavior Analysis',

                        'permission_template' => 'read',

                        'icon' => 'Brain',

                        'route' => '/transport/ai/driver-behavior',

                        'api' => true,

                    ],

                ],

            ],

        ],

    ],

];