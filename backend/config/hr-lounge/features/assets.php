<?php

return [

    'assets' => [

        /*
        |--------------------------------------------------------------------------
        | Module Information
        |--------------------------------------------------------------------------
        */

        'label' => 'Asset Management',

        'description' => 'Enterprise asset lifecycle management platform.',

        'icon' => 'Package',

        'route' => '/assets',

        'group' => 'operations',

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

                'label' => 'Asset Dashboard',

                'description' => 'Overview of organizational assets.',

                'icon' => 'LayoutDashboard',

                'route' => '/assets',

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
            | Asset Categories
            |--------------------------------------------------------------------------
            */

            'categories' => [

                'label' => 'Asset Categories',

                'description' => 'Manage asset categories and classifications.',

                'icon' => 'FolderTree',

                'route' => '/assets/categories',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'category_list' => [

                        'label' => 'Category List',

                        'description' => 'Manage asset categories.',

                        'icon' => 'Folder',

                        'route' => '/assets/categories',

                        'permission_template' => 'crud',

                        'api' => true,

                    ],

                    'category_attributes' => [

                        'label' => 'Category Attributes',

                        'description' => 'Configure category specific attributes.',

                        'icon' => 'SlidersHorizontal',

                        'route' => '/assets/categories/attributes',

                        'permission_template' => 'crud',

                        'api' => true,

                    ],

                    'asset_types' => [

                        'label' => 'Asset Types',

                        'description' => 'Manage asset types.',

                        'icon' => 'Boxes',

                        'route' => '/assets/categories/types',

                        'permission_template' => 'crud',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Asset Inventory
            |--------------------------------------------------------------------------
            */

            'inventory' => [

                'label' => 'Asset Inventory',

                'description' => 'Manage organizational asset inventory.',

                'icon' => 'PackageSearch',

                'route' => '/assets/inventory',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'asset_list' => [

                        'label' => 'Asset List',

                        'description' => 'View and manage all assets.',

                        'icon' => 'List',

                        'route' => '/assets/inventory',

                        'permission_template' => 'crud',

                        'api' => true,

                    ],

                    'asset_registration' => [

                        'label' => 'Asset Registration',

                        'description' => 'Register new assets.',

                        'icon' => 'PackagePlus',

                        'route' => '/assets/inventory/register',

                        'permission_template' => 'crud',

                        'api' => true,

                    ],

                    'barcode_qrcode' => [

                        'label' => 'Barcode / QR Code',

                        'description' => 'Generate asset barcode and QR code.',

                        'icon' => 'QrCode',

                        'route' => '/assets/inventory/barcodes',

                        'permission_template' => 'execute',

                        'api' => true,

                    ],

                    'asset_history' => [

                        'label' => 'Asset History',

                        'description' => 'Track asset lifecycle history.',

                        'icon' => 'History',

                        'route' => '/assets/inventory/history',

                        'permission_template' => 'read',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Asset Assignment
            |--------------------------------------------------------------------------
            */

            'assignment' => [

                'label' => 'Asset Assignment',

                'description' => 'Assign assets to employees.',

                'icon' => 'ArrowRightLeft',

                'route' => '/assets/assignment',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'assign_asset' => [

                        'label' => 'Assign Asset',

                        'permission_template' => 'crud',

                        'icon' => 'UserRoundPlus',

                        'route' => '/assets/assignment/assign',

                        'api' => true,

                    ],

                    'return_asset' => [

                        'label' => 'Return Asset',

                        'permission_template' => 'approval',

                        'icon' => 'Undo2',

                        'route' => '/assets/assignment/return',

                        'api' => true,

                    ],

                    'assignment_history' => [

                        'label' => 'Assignment History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/assets/assignment/history',

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | Asset Requests
            |--------------------------------------------------------------------------
            */

            'requests' => [

                'label' => 'Asset Requests',

                'description' => 'Manage employee asset requests.',

                'icon' => 'ClipboardList',

                'route' => '/assets/requests',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'request_list' => [

                        'label' => 'Request List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/assets/requests',

                        'api' => true,

                    ],

                    'request_approval' => [

                        'label' => 'Request Approval',

                        'permission_template' => 'approval',

                        'icon' => 'BadgeCheck',

                        'route' => '/assets/requests/approval',

                        'api' => true,

                    ],

                    'request_history' => [

                        'label' => 'Request History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/assets/requests/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Asset Reservations
            |--------------------------------------------------------------------------
            */

            'reservations' => [

                'label' => 'Asset Reservations',

                'description' => 'Reserve assets for future assignment.',

                'icon' => 'CalendarClock',

                'route' => '/assets/reservations',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'reservation_list' => [

                        'label' => 'Reservation List',

                        'permission_template' => 'crud',

                        'icon' => 'CalendarRange',

                        'route' => '/assets/reservations',

                        'api' => true,

                    ],

                    'reservation_approval' => [

                        'label' => 'Reservation Approval',

                        'permission_template' => 'approval',

                        'icon' => 'CircleCheck',

                        'route' => '/assets/reservations/approval',

                        'api' => true,

                    ],

                    'reservation_history' => [

                        'label' => 'Reservation History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/assets/reservations/history',

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

                'description' => 'Manage asset check-in and check-out process.',

                'icon' => 'ArrowRightLeft',

                'route' => '/assets/check-in-out',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'check_out' => [

                        'label' => 'Check Out',

                        'permission_template' => 'approval',

                        'icon' => 'LogOut',

                        'route' => '/assets/check-in-out/check-out',

                        'api' => true,

                    ],

                    'check_in' => [

                        'label' => 'Check In',

                        'permission_template' => 'approval',

                        'icon' => 'LogIn',

                        'route' => '/assets/check-in-out/check-in',

                        'api' => true,

                    ],

                    'transaction_history' => [

                        'label' => 'Transaction History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/assets/check-in-out/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Asset Transfers
            |--------------------------------------------------------------------------
            */

            'transfers' => [

                'label' => 'Asset Transfers',

                'description' => 'Transfer assets between employees, branches or departments.',

                'icon' => 'ArrowLeftRight',

                'route' => '/assets/transfers',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'transfer_requests' => [

                        'label' => 'Transfer Requests',

                        'permission_template' => 'crud',

                        'icon' => 'Send',

                        'route' => '/assets/transfers/requests',

                        'api' => true,

                    ],

                    'transfer_approval' => [

                        'label' => 'Transfer Approval',

                        'permission_template' => 'approval',

                        'icon' => 'BadgeCheck',

                        'route' => '/assets/transfers/approval',

                        'api' => true,

                    ],

                    'transfer_history' => [

                        'label' => 'Transfer History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/assets/transfers/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Lost & Damaged Assets
            |--------------------------------------------------------------------------
            */

            'asset_incidents' => [

                'label' => 'Lost & Damaged Assets',

                'description' => 'Manage lost, stolen and damaged asset incidents.',

                'icon' => 'TriangleAlert',

                'route' => '/assets/incidents',

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

                        'route' => '/assets/incidents/reports',

                        'api' => true,

                    ],

                    'damage_assessment' => [

                        'label' => 'Damage Assessment',

                        'permission_template' => 'approval',

                        'icon' => 'ShieldAlert',

                        'route' => '/assets/incidents/assessment',

                        'api' => true,

                    ],

                    'incident_history' => [

                        'label' => 'Incident History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/assets/incidents/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Employee Asset Ledger
            |--------------------------------------------------------------------------
            */

            'employee_asset_ledger' => [

                'label' => 'Employee Asset Ledger',

                'description' => 'View complete employee asset allocation history.',

                'icon' => 'BookUser',

                'route' => '/assets/employee-ledger',

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
            | Asset Maintenance
            |--------------------------------------------------------------------------
            */

            'maintenance' => [

                'label' => 'Asset Maintenance',

                'description' => 'Manage preventive and corrective asset maintenance.',

                'icon' => 'Wrench',

                'route' => '/assets/maintenance',

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

                        'route' => '/assets/maintenance/schedule',

                        'api' => true,

                    ],

                    'maintenance_requests' => [

                        'label' => 'Maintenance Requests',

                        'permission_template' => 'crud',

                        'icon' => 'ClipboardList',

                        'route' => '/assets/maintenance/requests',

                        'api' => true,

                    ],

                    'maintenance_history' => [

                        'label' => 'Maintenance History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/assets/maintenance/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Repairs & Service
            |--------------------------------------------------------------------------
            */

            'repairs' => [

                'label' => 'Repairs & Service',

                'description' => 'Track asset repairs and servicing.',

                'icon' => 'Hammer',

                'route' => '/assets/repairs',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'repair_requests' => [

                        'label' => 'Repair Requests',

                        'permission_template' => 'crud',

                        'icon' => 'FilePen',

                        'route' => '/assets/repairs/requests',

                        'api' => true,

                    ],

                    'service_records' => [

                        'label' => 'Service Records',

                        'permission_template' => 'crud',

                        'icon' => 'NotebookPen',

                        'route' => '/assets/repairs/service-records',

                        'api' => true,

                    ],

                    'repair_history' => [

                        'label' => 'Repair History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/assets/repairs/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Warranty Management
            |--------------------------------------------------------------------------
            */

            'warranty' => [

                'label' => 'Warranty Management',

                'description' => 'Track warranty and AMC information.',

                'icon' => 'ShieldCheck',

                'route' => '/assets/warranty',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'warranty_list' => [

                        'label' => 'Warranty List',

                        'permission_template' => 'crud',

                        'icon' => 'Shield',

                        'route' => '/assets/warranty',

                        'api' => true,

                    ],

                    'amc_contracts' => [

                        'label' => 'AMC Contracts',

                        'permission_template' => 'crud',

                        'icon' => 'FileSignature',

                        'route' => '/assets/warranty/amc',

                        'api' => true,

                    ],

                    'expiry_tracking' => [

                        'label' => 'Warranty Expiry',

                        'permission_template' => 'read',

                        'icon' => 'Clock3',

                        'route' => '/assets/warranty/expiry',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Asset Depreciation
            |--------------------------------------------------------------------------
            */

            'depreciation' => [

                'label' => 'Asset Depreciation',

                'description' => 'Manage asset depreciation and valuation.',

                'icon' => 'ChartNoAxesColumn',

                'route' => '/assets/depreciation',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'depreciation_methods' => [

                        'label' => 'Depreciation Methods',

                        'permission_template' => 'crud',

                        'icon' => 'Calculator',

                        'route' => '/assets/depreciation/methods',

                        'api' => true,

                    ],

                    'depreciation_schedule' => [

                        'label' => 'Depreciation Schedule',

                        'permission_template' => 'read',

                        'icon' => 'Calendar',

                        'route' => '/assets/depreciation/schedule',

                        'api' => true,

                    ],

                    'asset_valuation' => [

                        'label' => 'Asset Valuation',

                        'permission_template' => 'read',

                        'icon' => 'BadgeDollarSign',

                        'route' => '/assets/depreciation/valuation',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Asset Disposal
            |--------------------------------------------------------------------------
            */

            'disposal' => [

                'label' => 'Asset Disposal',

                'description' => 'Manage asset retirement and disposal.',

                'icon' => 'Trash2',

                'route' => '/assets/disposal',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'disposal_requests' => [

                        'label' => 'Disposal Requests',

                        'permission_template' => 'crud',

                        'icon' => 'FileX',

                        'route' => '/assets/disposal/requests',

                        'api' => true,

                    ],

                    'disposal_approval' => [

                        'label' => 'Disposal Approval',

                        'permission_template' => 'approval',

                        'icon' => 'BadgeCheck',

                        'route' => '/assets/disposal/approval',

                        'api' => true,

                    ],

                    'disposed_assets' => [

                        'label' => 'Disposed Assets',

                        'permission_template' => 'read',

                        'icon' => 'ArchiveX',

                        'route' => '/assets/disposal/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Asset Audit
            |--------------------------------------------------------------------------
            */

            'asset_audit' => [

                'label' => 'Asset Audit',

                'description' => 'Verify physical assets through audit.',

                'icon' => 'ClipboardSearch',

                'route' => '/assets/audit',

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
            | Vendors
            |--------------------------------------------------------------------------
            */

            'vendors' => [

                'label' => 'Vendors',

                'description' => 'Manage asset suppliers and service providers.',

                'icon' => 'Building2',

                'route' => '/assets/vendors',

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

                'label' => 'Asset Reports',

                'description' => 'Generate asset reports and summaries.',

                'icon' => 'FileBarChart',

                'route' => '/assets/reports',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'inventory_report' => [

                        'label' => 'Inventory Report',

                        'permission_template' => 'read',

                        'icon' => 'PackageSearch',

                        'route' => '/assets/reports/inventory',

                        'api' => true,

                    ],

                    'assignment_report' => [

                        'label' => 'Assignment Report',

                        'permission_template' => 'read',

                        'icon' => 'ArrowRightLeft',

                        'route' => '/assets/reports/assignment',

                        'api' => true,

                    ],

                    'maintenance_report' => [

                        'label' => 'Maintenance Report',

                        'permission_template' => 'read',

                        'icon' => 'Wrench',

                        'route' => '/assets/reports/maintenance',

                        'api' => true,

                    ],

                    'depreciation_report' => [

                        'label' => 'Depreciation Report',

                        'permission_template' => 'read',

                        'icon' => 'ChartNoAxesColumn',

                        'route' => '/assets/reports/depreciation',

                        'api' => true,

                    ],

                    'disposal_report' => [

                        'label' => 'Disposal Report',

                        'permission_template' => 'read',

                        'icon' => 'Trash2',

                        'route' => '/assets/reports/disposal',

                        'api' => true,

                    ],

                    'audit_report' => [

                        'label' => 'Asset Audit Report',

                        'permission_template' => 'read',

                        'icon' => 'ClipboardSearch',

                        'route' => '/assets/reports/audit',

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

                'label' => 'Asset Analytics',

                'description' => 'Asset utilization and lifecycle analytics.',

                'icon' => 'ChartPie',

                'route' => '/assets/analytics',

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

                'label' => 'Import Assets',

                'description' => 'Import asset records.',

                'icon' => 'FileUp',

                'route' => '/assets/import',

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

                'label' => 'Export Assets',

                'description' => 'Export asset records.',

                'icon' => 'FileDown',

                'route' => '/assets/export',

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

                'description' => 'Perform bulk asset operations.',

                'icon' => 'Boxes',

                'route' => '/assets/bulk',

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

                'label' => 'Asset Notifications',

                'description' => 'Asset reminders and notifications.',

                'icon' => 'Bell',

                'route' => '/assets/notifications',

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
            | AI Asset Insights
            |--------------------------------------------------------------------------
            */

            'ai' => [

                'label' => 'AI Asset Insights',

                'description' => 'AI-powered asset intelligence and predictive analysis.',

                'icon' => 'Bot',

                'route' => '/assets/ai',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'predictive_maintenance' => [

                        'label' => 'Predictive Maintenance',

                        'permission_template' => 'read',

                        'icon' => 'Brain',

                        'route' => '/assets/ai/predictive-maintenance',

                        'api' => true,

                    ],

                    'asset_utilization' => [

                        'label' => 'Asset Utilization Analysis',

                        'permission_template' => 'read',

                        'icon' => 'ChartColumnIncreasing',

                        'route' => '/assets/ai/utilization',

                        'api' => true,

                    ],

                    'lifecycle_prediction' => [

                        'label' => 'Asset Lifecycle Prediction',

                        'permission_template' => 'read',

                        'icon' => 'Sparkles',

                        'route' => '/assets/ai/lifecycle',

                        'api' => true,

                    ],

                    'replacement_recommendation' => [

                        'label' => 'Replacement Recommendation',

                        'permission_template' => 'read',

                        'icon' => 'RefreshCw',

                        'route' => '/assets/ai/replacement',

                        'api' => true,

                    ],

                    'asset_risk_analysis' => [

                        'label' => 'Asset Risk Analysis',

                        'permission_template' => 'read',

                        'icon' => 'ShieldAlert',

                        'route' => '/assets/ai/risk-analysis',

                        'api' => true,

                    ],

                ],

            ],

        ],

    ],

];