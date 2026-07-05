<?php

return [

    'procurement' => [

        /*
        |--------------------------------------------------------------------------
        | Module Information
        |--------------------------------------------------------------------------
        */

        'label' => 'Procurement Management',

        'description' => 'Enterprise procurement and sourcing management system.',

        'icon' => 'ShoppingCart',

        'route' => '/procurement',

        'group' => 'operations',

        'version' => '1.0.0',

        'phase' => 1,

        'order' => 140,

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

                'label' => 'Procurement Dashboard',

                'description' => 'Procurement overview and KPIs.',

                'icon' => 'LayoutDashboard',

                'route' => '/procurement',

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
            | Purchase Requisitions
            |--------------------------------------------------------------------------
            */

            'purchase_requisitions' => [

                'label' => 'Purchase Requisitions',

                'description' => 'Manage purchase requisition requests.',

                'icon' => 'ClipboardList',

                'route' => '/procurement/requisitions',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'requisition_list' => [

                        'label' => 'Requisition List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/procurement/requisitions',

                        'api' => true,

                    ],

                    'requisition_approval' => [

                        'label' => 'Requisition Approval',

                        'permission_template' => 'approval',

                        'icon' => 'BadgeCheck',

                        'route' => '/procurement/requisitions/approval',

                        'api' => true,

                    ],

                    'requisition_history' => [

                        'label' => 'Requisition History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/procurement/requisitions/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Request for Information (RFI)
            |--------------------------------------------------------------------------
            */

            'rfi' => [

                'label' => 'Request for Information',

                'description' => 'Collect supplier information before sourcing.',

                'icon' => 'FileSearch',

                'route' => '/procurement/rfi',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'rfi_list' => [

                        'label' => 'RFI List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/procurement/rfi',

                        'api' => true,

                    ],

                    'rfi_responses' => [

                        'label' => 'RFI Responses',

                        'permission_template' => 'read',

                        'icon' => 'FileText',

                        'route' => '/procurement/rfi/responses',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Request for Quotation (RFQ)
            |--------------------------------------------------------------------------
            */

            'rfq' => [

                'label' => 'Request for Quotation',

                'description' => 'Manage RFQ process.',

                'icon' => 'FileSpreadsheet',

                'route' => '/procurement/rfq',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'rfq_list' => [

                        'label' => 'RFQ List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/procurement/rfq',

                        'api' => true,

                    ],

                    'rfq_publish' => [

                        'label' => 'Publish RFQ',

                        'permission_template' => 'crud',

                        'icon' => 'Send',

                        'route' => '/procurement/rfq/publish',

                        'api' => true,

                    ],

                    'rfq_history' => [

                        'label' => 'RFQ History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/procurement/rfq/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Vendor Quotations
            |--------------------------------------------------------------------------
            */

            'vendor_quotations' => [

                'label' => 'Vendor Quotations',

                'description' => 'Manage supplier quotation submissions.',

                'icon' => 'Receipt',

                'route' => '/procurement/quotations',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'quotation_list' => [

                        'label' => 'Quotation List',

                        'permission_template' => 'crud',

                        'icon' => 'FileText',

                        'route' => '/procurement/quotations',

                        'api' => true,

                    ],

                    'quotation_comparison' => [

                        'label' => 'Quotation Comparison',

                        'permission_template' => 'read',

                        'icon' => 'GitCompare',

                        'route' => '/procurement/quotations/comparison',

                        'api' => true,

                    ],

                    'quotation_selection' => [

                        'label' => 'Vendor Selection',

                        'permission_template' => 'approval',

                        'icon' => 'CheckCircle2',

                        'route' => '/procurement/quotations/selection',

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | Vendor Management
            |--------------------------------------------------------------------------
            */

            'vendors' => [

                'label' => 'Vendor Management',

                'description' => 'Manage supplier profiles and onboarding.',

                'icon' => 'Building2',

                'route' => '/procurement/vendors',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'vendor_list' => [

                        'label' => 'Vendor List',

                        'permission_template' => 'crud',

                        'icon' => 'Building',

                        'route' => '/procurement/vendors',

                        'api' => true,

                    ],

                    'vendor_onboarding' => [

                        'label' => 'Vendor Onboarding',

                        'permission_template' => 'crud',

                        'icon' => 'UserRoundPlus',

                        'route' => '/procurement/vendors/onboarding',

                        'api' => true,

                    ],

                    'vendor_documents' => [

                        'label' => 'Vendor Documents',

                        'permission_template' => 'crud',

                        'icon' => 'FolderOpen',

                        'route' => '/procurement/vendors/documents',

                        'api' => true,

                    ],

                    'vendor_blacklist' => [

                        'label' => 'Vendor Blacklist',

                        'permission_template' => 'approval',

                        'icon' => 'Ban',

                        'route' => '/procurement/vendors/blacklist',

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

                'description' => 'Manage procurement purchase orders.',

                'icon' => 'ShoppingCart',

                'route' => '/procurement/purchase-orders',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'po_list' => [

                        'label' => 'Purchase Order List',

                        'permission_template' => 'crud',

                        'icon' => 'FileSpreadsheet',

                        'route' => '/procurement/purchase-orders',

                        'api' => true,

                    ],

                    'po_approval' => [

                        'label' => 'PO Approval',

                        'permission_template' => 'approval',

                        'icon' => 'BadgeCheck',

                        'route' => '/procurement/purchase-orders/approval',

                        'api' => true,

                    ],

                    'po_tracking' => [

                        'label' => 'PO Tracking',

                        'permission_template' => 'read',

                        'icon' => 'Truck',

                        'route' => '/procurement/purchase-orders/tracking',

                        'api' => true,

                    ],

                    'po_history' => [

                        'label' => 'PO History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/procurement/purchase-orders/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Contract Management
            |--------------------------------------------------------------------------
            */

            'contracts' => [

                'label' => 'Contract Management',

                'description' => 'Manage procurement contracts.',

                'icon' => 'FileSignature',

                'route' => '/procurement/contracts',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'contract_list' => [

                        'label' => 'Contract List',

                        'permission_template' => 'crud',

                        'icon' => 'FileText',

                        'route' => '/procurement/contracts',

                        'api' => true,

                    ],

                    'contract_renewals' => [

                        'label' => 'Contract Renewals',

                        'permission_template' => 'crud',

                        'icon' => 'RefreshCw',

                        'route' => '/procurement/contracts/renewals',

                        'api' => true,

                    ],

                    'contract_expiry' => [

                        'label' => 'Contract Expiry',

                        'permission_template' => 'read',

                        'icon' => 'CalendarClock',

                        'route' => '/procurement/contracts/expiry',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Approval Workflow
            |--------------------------------------------------------------------------
            */

            'approval_workflow' => [

                'label' => 'Approval Workflow',

                'description' => 'Procurement approval workflow.',

                'icon' => 'Workflow',

                'route' => '/procurement/workflow',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'workflow_rules' => [

                        'label' => 'Workflow Rules',

                        'permission_template' => 'crud',

                        'icon' => 'GitBranch',

                        'route' => '/procurement/workflow/rules',

                        'api' => true,

                    ],

                    'pending_approvals' => [

                        'label' => 'Pending Approvals',

                        'permission_template' => 'approval',

                        'icon' => 'ClipboardCheck',

                        'route' => '/procurement/workflow/pending',

                        'api' => true,

                    ],

                    'approval_history' => [

                        'label' => 'Approval History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/procurement/workflow/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Goods Receipt Integration (GRN)
            |--------------------------------------------------------------------------
            */

            'goods_receipt' => [

                'label' => 'Goods Receipt Integration',

                'description' => 'Receive goods into inventory from procurement.',

                'icon' => 'PackageCheck',

                'route' => '/procurement/grn',

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
            | Invoice Matching
            |--------------------------------------------------------------------------
            */

            'invoice_matching' => [

                'label' => 'Invoice Matching',

                'description' => 'Perform 2-way and 3-way invoice matching.',

                'icon' => 'ReceiptText',

                'route' => '/procurement/invoice-matching',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'invoice_list' => [

                        'label' => 'Invoice List',

                        'permission_template' => 'crud',

                        'icon' => 'Receipt',

                        'route' => '/procurement/invoice-matching',

                        'api' => true,

                    ],

                    'matching_results' => [

                        'label' => 'Matching Results',

                        'permission_template' => 'read',

                        'icon' => 'GitCompare',

                        'route' => '/procurement/invoice-matching/results',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Procurement Budget
            |--------------------------------------------------------------------------
            */

            'budget' => [

                'label' => 'Procurement Budget',

                'description' => 'Manage procurement budgets.',

                'icon' => 'Wallet',

                'route' => '/procurement/budget',

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
            | Supplier Performance
            |--------------------------------------------------------------------------
            */

            'supplier_performance' => [

                'label' => 'Supplier Performance',

                'description' => 'Evaluate supplier performance and scorecards.',

                'icon' => 'TrendingUp',

                'route' => '/procurement/suppliers/performance',

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

                'label' => 'Procurement Reports',

                'description' => 'Generate procurement reports and operational summaries.',

                'icon' => 'FileBarChart',

                'route' => '/procurement/reports',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'purchase_report' => [

                        'label' => 'Purchase Report',

                        'permission_template' => 'read',

                        'icon' => 'ShoppingCart',

                        'route' => '/procurement/reports/purchases',

                        'api' => true,

                    ],

                    'vendor_report' => [

                        'label' => 'Vendor Report',

                        'permission_template' => 'read',

                        'icon' => 'Building2',

                        'route' => '/procurement/reports/vendors',

                        'api' => true,

                    ],

                    'quotation_report' => [

                        'label' => 'Quotation Report',

                        'permission_template' => 'read',

                        'icon' => 'Receipt',

                        'route' => '/procurement/reports/quotations',

                        'api' => true,

                    ],

                    'contract_report' => [

                        'label' => 'Contract Report',

                        'permission_template' => 'read',

                        'icon' => 'FileSignature',

                        'route' => '/procurement/reports/contracts',

                        'api' => true,

                    ],

                    'budget_report' => [

                        'label' => 'Budget Report',

                        'permission_template' => 'read',

                        'icon' => 'Wallet',

                        'route' => '/procurement/reports/budget',

                        'api' => true,

                    ],

                    'supplier_scorecard' => [

                        'label' => 'Supplier Scorecard',

                        'permission_template' => 'read',

                        'icon' => 'TrendingUp',

                        'route' => '/procurement/reports/supplier-scorecard',

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

                'label' => 'Procurement Analytics',

                'description' => 'Procurement analytics and KPI dashboards.',

                'icon' => 'ChartPie',

                'route' => '/procurement/analytics',

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

                'label' => 'Import Procurement Data',

                'description' => 'Bulk import procurement records.',

                'icon' => 'FileUp',

                'route' => '/procurement/import',

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

                'label' => 'Export Procurement Data',

                'description' => 'Export procurement records.',

                'icon' => 'FileDown',

                'route' => '/procurement/export',

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

                'description' => 'Execute bulk procurement operations.',

                'icon' => 'Boxes',

                'route' => '/procurement/bulk',

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

                'label' => 'Procurement Notifications',

                'description' => 'Procurement alerts and notifications.',

                'icon' => 'Bell',

                'route' => '/procurement/notifications',

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
            | AI Procurement Insights
            |--------------------------------------------------------------------------
            */

            'ai' => [

                'label' => 'AI Procurement Insights',

                'description' => 'AI powered procurement intelligence and optimization.',

                'icon' => 'Bot',

                'route' => '/procurement/ai',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'spend_analysis' => [

                        'label' => 'Spend Analysis',

                        'permission_template' => 'read',

                        'icon' => 'ChartLine',

                        'route' => '/procurement/ai/spend-analysis',

                        'api' => true,

                    ],

                    'vendor_risk_analysis' => [

                        'label' => 'Vendor Risk Analysis',

                        'permission_template' => 'read',

                        'icon' => 'ShieldAlert',

                        'route' => '/procurement/ai/vendor-risk',

                        'api' => true,

                    ],

                    'cost_optimization' => [

                        'label' => 'Cost Optimization',

                        'permission_template' => 'read',

                        'icon' => 'Brain',

                        'route' => '/procurement/ai/cost-optimization',

                        'api' => true,

                    ],

                    'procurement_forecasting' => [

                        'label' => 'Procurement Forecasting',

                        'permission_template' => 'read',

                        'icon' => 'TrendingUp',

                        'route' => '/procurement/ai/forecasting',

                        'api' => true,

                    ],

                    'supplier_recommendations' => [

                        'label' => 'Supplier Recommendations',

                        'permission_template' => 'read',

                        'icon' => 'Sparkles',

                        'route' => '/procurement/ai/supplier-recommendations',

                        'api' => true,

                    ],

                ],

            ],

        ],

    ],

];