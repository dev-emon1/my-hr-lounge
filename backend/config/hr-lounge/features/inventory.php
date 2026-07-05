<?php

return [

    'inventory' => [

        /*
        |--------------------------------------------------------------------------
        | Module Information
        |--------------------------------------------------------------------------
        */

        'label' => 'Inventory Management',

        'description' => 'Enterprise inventory and warehouse management system.',

        'icon' => 'Package',

        'route' => '/inventory',

        'group' => 'operations',

        'version' => '1.0.0',

        'phase' => 1,

        'order' => 130,

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

                'label' => 'Inventory Dashboard',

                'description' => 'Inventory overview and KPIs.',

                'icon' => 'LayoutDashboard',

                'route' => '/inventory',

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
            | Warehouses
            |--------------------------------------------------------------------------
            */

            'warehouses' => [

                'label' => 'Warehouses',

                'description' => 'Manage warehouses and storage locations.',

                'icon' => 'Warehouse',

                'route' => '/inventory/warehouses',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'warehouse_list' => [

                        'label' => 'Warehouse List',

                        'permission_template' => 'crud',

                        'icon' => 'Building2',

                        'route' => '/inventory/warehouses',

                        'api' => true,

                    ],

                    'storage_locations' => [

                        'label' => 'Storage Locations',

                        'permission_template' => 'crud',

                        'icon' => 'MapPinned',

                        'route' => '/inventory/warehouses/locations',

                        'api' => true,

                    ],

                    'warehouse_capacity' => [

                        'label' => 'Warehouse Capacity',

                        'permission_template' => 'read',

                        'icon' => 'ChartColumn',

                        'route' => '/inventory/warehouses/capacity',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Inventory Items
            |--------------------------------------------------------------------------
            */

            'items' => [

                'label' => 'Inventory Items',

                'description' => 'Manage inventory items.',

                'icon' => 'Boxes',

                'route' => '/inventory/items',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'item_list' => [

                        'label' => 'Item List',

                        'permission_template' => 'crud',

                        'icon' => 'Package',

                        'route' => '/inventory/items',

                        'api' => true,

                    ],

                    'item_variants' => [

                        'label' => 'Item Variants',

                        'permission_template' => 'crud',

                        'icon' => 'Boxes',

                        'route' => '/inventory/items/variants',

                        'api' => true,

                    ],

                    'item_bundles' => [

                        'label' => 'Item Bundles',

                        'permission_template' => 'crud',

                        'icon' => 'PackagePlus',

                        'route' => '/inventory/items/bundles',

                        'api' => true,

                    ],

                    'serial_numbers' => [

                        'label' => 'Serial Numbers',

                        'permission_template' => 'crud',

                        'icon' => 'Hash',

                        'route' => '/inventory/items/serials',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Categories
            |--------------------------------------------------------------------------
            */

            'categories' => [

                'label' => 'Categories',

                'description' => 'Inventory categories.',

                'icon' => 'FolderTree',

                'route' => '/inventory/categories',

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

                        'route' => '/inventory/categories',

                        'api' => true,

                    ],

                    'sub_categories' => [

                        'label' => 'Sub Categories',

                        'permission_template' => 'crud',

                        'icon' => 'Folders',

                        'route' => '/inventory/categories/subcategories',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Brands
            |--------------------------------------------------------------------------
            */

            'brands' => [

                'label' => 'Brands',

                'description' => 'Manage product brands.',

                'icon' => 'Badge',

                'route' => '/inventory/brands',

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
            | Units of Measure
            |--------------------------------------------------------------------------
            */

            'units' => [

                'label' => 'Units of Measure',

                'description' => 'Manage inventory measurement units.',

                'icon' => 'Ruler',

                'route' => '/inventory/units',

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
            | Stock Management
            |--------------------------------------------------------------------------
            */

            'stock_management' => [

                'label' => 'Stock Management',

                'description' => 'Manage inventory stock levels and movements.',

                'icon' => 'Boxes',

                'route' => '/inventory/stock',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'stock_overview' => [

                        'label' => 'Stock Overview',

                        'permission_template' => 'read',

                        'icon' => 'Package',

                        'route' => '/inventory/stock',

                        'api' => true,

                    ],

                    'stock_movements' => [

                        'label' => 'Stock Movements',

                        'permission_template' => 'read',

                        'icon' => 'ArrowRightLeft',

                        'route' => '/inventory/stock/movements',

                        'api' => true,

                    ],

                    'low_stock_alerts' => [

                        'label' => 'Low Stock Alerts',

                        'permission_template' => 'read',

                        'icon' => 'TriangleAlert',

                        'route' => '/inventory/stock/low-stock',

                        'api' => true,

                    ],

                    'stock_ledger' => [

                        'label' => 'Stock Ledger',

                        'permission_template' => 'read',

                        'icon' => 'BookOpen',

                        'route' => '/inventory/stock/ledger',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Stock Adjustment
            |--------------------------------------------------------------------------
            */

            'stock_adjustment' => [

                'label' => 'Stock Adjustment',

                'description' => 'Adjust inventory quantities.',

                'icon' => 'Scale',

                'route' => '/inventory/adjustments',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'adjustment_list' => [

                        'label' => 'Adjustment List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/inventory/adjustments',

                        'api' => true,

                    ],

                    'adjustment_approval' => [

                        'label' => 'Adjustment Approval',

                        'permission_template' => 'approval',

                        'icon' => 'BadgeCheck',

                        'route' => '/inventory/adjustments/approval',

                        'api' => true,

                    ],

                    'adjustment_history' => [

                        'label' => 'Adjustment History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/inventory/adjustments/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Stock Transfer
            |--------------------------------------------------------------------------
            */

            'stock_transfer' => [

                'label' => 'Stock Transfer',

                'description' => 'Transfer inventory between warehouses.',

                'icon' => 'ArrowLeftRight',

                'route' => '/inventory/transfers',

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

                        'route' => '/inventory/transfers',

                        'api' => true,

                    ],

                    'transfer_approval' => [

                        'label' => 'Transfer Approval',

                        'permission_template' => 'approval',

                        'icon' => 'BadgeCheck',

                        'route' => '/inventory/transfers/approval',

                        'api' => true,

                    ],

                    'transfer_history' => [

                        'label' => 'Transfer History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/inventory/transfers/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Stock Reservation
            |--------------------------------------------------------------------------
            */

            'stock_reservation' => [

                'label' => 'Stock Reservation',

                'description' => 'Reserve stock for projects, orders or departments.',

                'icon' => 'CalendarClock',

                'route' => '/inventory/reservations',

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

                        'route' => '/inventory/reservations',

                        'api' => true,

                    ],

                    'reservation_history' => [

                        'label' => 'Reservation History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/inventory/reservations/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Purchase Requests
            |--------------------------------------------------------------------------
            */

            'purchase_requests' => [

                'label' => 'Purchase Requests',

                'description' => 'Manage inventory purchase requests.',

                'icon' => 'ClipboardList',

                'route' => '/inventory/purchase-requests',

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

                        'route' => '/inventory/purchase-requests',

                        'api' => true,

                    ],

                    'request_approval' => [

                        'label' => 'Request Approval',

                        'permission_template' => 'approval',

                        'icon' => 'BadgeCheck',

                        'route' => '/inventory/purchase-requests/approval',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Purchase Orders
            |--------------------------------------------------------------------------
            */

            'purchase_orders' => [

                'label' => 'Purchase Orders',

                'description' => 'Manage purchase orders.',

                'icon' => 'ShoppingCart',

                'route' => '/inventory/purchase-orders',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'po_list' => [

                        'label' => 'Purchase Orders',

                        'permission_template' => 'crud',

                        'icon' => 'FileText',

                        'route' => '/inventory/purchase-orders',

                        'api' => true,

                    ],

                    'po_approval' => [

                        'label' => 'PO Approval',

                        'permission_template' => 'approval',

                        'icon' => 'ClipboardCheck',

                        'route' => '/inventory/purchase-orders/approval',

                        'api' => true,

                    ],

                    'po_history' => [

                        'label' => 'PO History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/inventory/purchase-orders/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Goods Receipt (GRN)
            |--------------------------------------------------------------------------
            */

            'goods_receipt' => [

                'label' => 'Goods Receipt (GRN)',

                'description' => 'Receive purchased inventory.',

                'icon' => 'PackageCheck',

                'route' => '/inventory/grn',

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
            | Goods Issue
            |--------------------------------------------------------------------------
            */

            'goods_issue' => [

                'label' => 'Goods Issue',

                'description' => 'Issue inventory to departments or employees.',

                'icon' => 'PackageMinus',

                'route' => '/inventory/goods-issue',

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
            | Suppliers
            |--------------------------------------------------------------------------
            */

            'suppliers' => [

                'label' => 'Suppliers',

                'description' => 'Manage inventory suppliers.',

                'icon' => 'Truck',

                'route' => '/inventory/suppliers',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'supplier_list' => [

                        'label' => 'Supplier List',

                        'permission_template' => 'crud',

                        'icon' => 'Building2',

                        'route' => '/inventory/suppliers',

                        'api' => true,

                    ],

                    'supplier_performance' => [

                        'label' => 'Supplier Performance',

                        'permission_template' => 'read',

                        'icon' => 'TrendingUp',

                        'route' => '/inventory/suppliers/performance',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Barcode & QR Management
            |--------------------------------------------------------------------------
            */

            'barcode' => [

                'label' => 'Barcode & QR',

                'description' => 'Generate and manage inventory barcodes and QR codes.',

                'icon' => 'QrCode',

                'route' => '/inventory/barcodes',

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
            | Inventory Audit
            |--------------------------------------------------------------------------
            */

            'inventory_audit' => [

                'label' => 'Inventory Audit',

                'description' => 'Perform physical inventory audit and reconciliation.',

                'icon' => 'ClipboardSearch',

                'route' => '/inventory/audit',

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

                'label' => 'Inventory Reports',

                'description' => 'Generate inventory reports and summaries.',

                'icon' => 'FileBarChart',

                'route' => '/inventory/reports',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'stock_report' => [

                        'label' => 'Stock Report',

                        'permission_template' => 'read',

                        'icon' => 'Boxes',

                        'route' => '/inventory/reports/stock',

                        'api' => true,

                    ],

                    'movement_report' => [

                        'label' => 'Stock Movement Report',

                        'permission_template' => 'read',

                        'icon' => 'ArrowRightLeft',

                        'route' => '/inventory/reports/movements',

                        'api' => true,

                    ],

                    'warehouse_report' => [

                        'label' => 'Warehouse Report',

                        'permission_template' => 'read',

                        'icon' => 'Warehouse',

                        'route' => '/inventory/reports/warehouses',

                        'api' => true,

                    ],

                    'supplier_report' => [

                        'label' => 'Supplier Report',

                        'permission_template' => 'read',

                        'icon' => 'Truck',

                        'route' => '/inventory/reports/suppliers',

                        'api' => true,

                    ],

                    'purchase_report' => [

                        'label' => 'Purchase Report',

                        'permission_template' => 'read',

                        'icon' => 'ShoppingCart',

                        'route' => '/inventory/reports/purchases',

                        'api' => true,

                    ],

                    'audit_report' => [

                        'label' => 'Inventory Audit Report',

                        'permission_template' => 'read',

                        'icon' => 'ClipboardSearch',

                        'route' => '/inventory/reports/audit',

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

                'label' => 'Inventory Analytics',

                'description' => 'Inventory performance analytics and KPIs.',

                'icon' => 'ChartPie',

                'route' => '/inventory/analytics',

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

                'label' => 'Import Inventory',

                'description' => 'Bulk import inventory records.',

                'icon' => 'FileUp',

                'route' => '/inventory/import',

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

                'label' => 'Export Inventory',

                'description' => 'Export inventory records.',

                'icon' => 'FileDown',

                'route' => '/inventory/export',

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

                'description' => 'Perform bulk inventory operations.',

                'icon' => 'Boxes',

                'route' => '/inventory/bulk',

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

                'label' => 'Inventory Notifications',

                'description' => 'Inventory alerts and reminders.',

                'icon' => 'Bell',

                'route' => '/inventory/notifications',

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
            | AI Inventory Insights
            |--------------------------------------------------------------------------
            */

            'ai' => [

                'label' => 'AI Inventory Insights',

                'description' => 'AI-powered inventory intelligence and forecasting.',

                'icon' => 'Bot',

                'route' => '/inventory/ai',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'demand_forecasting' => [

                        'label' => 'Demand Forecasting',

                        'permission_template' => 'read',

                        'icon' => 'ChartLine',

                        'route' => '/inventory/ai/demand-forecast',

                        'api' => true,

                    ],

                    'reorder_recommendations' => [

                        'label' => 'Reorder Recommendations',

                        'permission_template' => 'read',

                        'icon' => 'RefreshCcw',

                        'route' => '/inventory/ai/reorder',

                        'api' => true,

                    ],

                    'dead_stock_analysis' => [

                        'label' => 'Dead Stock Analysis',

                        'permission_template' => 'read',

                        'icon' => 'PackageX',

                        'route' => '/inventory/ai/dead-stock',

                        'api' => true,

                    ],

                    'stock_optimization' => [

                        'label' => 'Stock Optimization',

                        'permission_template' => 'read',

                        'icon' => 'Brain',

                        'route' => '/inventory/ai/optimization',

                        'api' => true,

                    ],

                    'inventory_health_score' => [

                        'label' => 'Inventory Health Score',

                        'permission_template' => 'read',

                        'icon' => 'HeartPulse',

                        'route' => '/inventory/ai/health-score',

                        'api' => true,

                    ],

                ],

            ],

        ],

    ],

];