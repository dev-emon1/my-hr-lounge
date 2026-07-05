<?php

return [

    'company' => [

        /*
        |--------------------------------------------------------------------------
        | Module Information
        |--------------------------------------------------------------------------
        */

        'label' => 'Company Management',

        'description' => 'Manage company information, legal entities and business structure.',

        'icon' => 'Building2',

        'route' => '/company',

        'group' => 'core',

        'version' => '1.0.0',

        'phase' => 1,

        'order' => 10,

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

                'label' => 'Company Dashboard',

                'description' => 'Company overview dashboard.',

                'icon' => 'LayoutDashboard',

                'route' => '/company',

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
            | Company Profile
            |--------------------------------------------------------------------------
            */

            'profile' => [

                'label' => 'Company Profile',

                'description' => 'Manage company profile and registration information.',

                'icon' => 'Building',

                'route' => '/company/profile',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'general_information' => [

                        'label' => 'General Information',

                        'permission_template' => 'crud',

                        'icon' => 'Info',

                        'route' => '/company/profile/general',

                        'api' => true,

                    ],

                    'registration_information' => [

                        'label' => 'Registration Information',

                        'permission_template' => 'crud',

                        'icon' => 'FileBadge',

                        'route' => '/company/profile/registration',

                        'api' => true,

                    ],

                    'contact_information' => [

                        'label' => 'Contact Information',

                        'permission_template' => 'crud',

                        'icon' => 'Phone',

                        'route' => '/company/profile/contact',

                        'api' => true,

                    ],

                    'company_history' => [

                        'label' => 'Company History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/company/profile/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Company Structure
            |--------------------------------------------------------------------------
            */

            'structure' => [

                'label' => 'Company Structure',

                'description' => 'Manage organizational structure.',

                'icon' => 'Network',

                'route' => '/company/structure',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'organization_chart' => [

                        'label' => 'Organization Chart',

                        'permission_template' => 'read',

                        'icon' => 'GitBranch',

                        'route' => '/company/structure/chart',

                        'api' => true,

                    ],

                    'reporting_structure' => [

                        'label' => 'Reporting Structure',

                        'permission_template' => 'crud',

                        'icon' => 'Workflow',

                        'route' => '/company/structure/reporting',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Business Units
            |--------------------------------------------------------------------------
            */

            'business_units' => [

                'label' => 'Business Units',

                'description' => 'Manage business units and divisions.',

                'icon' => 'Building',

                'route' => '/company/business-units',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'unit_list' => [

                        'label' => 'Business Unit List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/company/business-units',

                        'api' => true,

                    ],

                    'division_management' => [

                        'label' => 'Division Management',

                        'permission_template' => 'crud',

                        'icon' => 'Building2',

                        'route' => '/company/business-units/divisions',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Legal Entities
            |--------------------------------------------------------------------------
            */

            'legal_entities' => [

                'label' => 'Legal Entities',

                'description' => 'Manage legal entities and registrations.',

                'icon' => 'Scale',

                'route' => '/company/legal-entities',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'entity_list' => [

                        'label' => 'Entity List',

                        'permission_template' => 'crud',

                        'icon' => 'Building2',

                        'route' => '/company/legal-entities',

                        'api' => true,

                    ],

                    'licenses' => [

                        'label' => 'Licenses & Certificates',

                        'permission_template' => 'crud',

                        'icon' => 'BadgeCheck',

                        'route' => '/company/legal-entities/licenses',

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | Company Locations
            |--------------------------------------------------------------------------
            */

            'locations' => [

                'label' => 'Company Locations',

                'description' => 'Manage company offices, branches and locations.',

                'icon' => 'MapPinned',

                'route' => '/company/locations',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'location_list' => [

                        'label' => 'Location List',

                        'permission_template' => 'crud',

                        'icon' => 'Map',

                        'route' => '/company/locations',

                        'api' => true,

                    ],

                    'head_office' => [

                        'label' => 'Head Office',

                        'permission_template' => 'crud',

                        'icon' => 'Building',

                        'route' => '/company/locations/head-office',

                        'api' => true,

                    ],

                    'regional_offices' => [

                        'label' => 'Regional Offices',

                        'permission_template' => 'crud',

                        'icon' => 'Building2',

                        'route' => '/company/locations/regional',

                        'api' => true,

                    ],

                    'location_history' => [

                        'label' => 'Location History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/company/locations/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Company Policies
            |--------------------------------------------------------------------------
            */

            'policies' => [

                'label' => 'Company Policies',

                'description' => 'Manage company policies and manuals.',

                'icon' => 'BookOpen',

                'route' => '/company/policies',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'policy_library' => [

                        'label' => 'Policy Library',

                        'permission_template' => 'crud',

                        'icon' => 'Library',

                        'route' => '/company/policies',

                        'api' => true,

                    ],

                    'policy_categories' => [

                        'label' => 'Policy Categories',

                        'permission_template' => 'crud',

                        'icon' => 'FolderTree',

                        'route' => '/company/policies/categories',

                        'api' => true,

                    ],

                    'policy_acknowledgement' => [

                        'label' => 'Policy Acknowledgement',

                        'permission_template' => 'read',

                        'icon' => 'ClipboardCheck',

                        'route' => '/company/policies/acknowledgement',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Company Branding
            |--------------------------------------------------------------------------
            */

            'branding' => [

                'label' => 'Company Branding',

                'description' => 'Manage company branding and identity.',

                'icon' => 'Palette',

                'route' => '/company/branding',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'brand_assets' => [

                        'label' => 'Brand Assets',

                        'permission_template' => 'crud',

                        'icon' => 'Image',

                        'route' => '/company/branding/assets',

                        'api' => true,

                    ],

                    'logo_management' => [

                        'label' => 'Logo Management',

                        'permission_template' => 'crud',

                        'icon' => 'Badge',

                        'route' => '/company/branding/logo',

                        'api' => true,

                    ],

                    'theme_settings' => [

                        'label' => 'Theme Settings',

                        'permission_template' => 'crud',

                        'icon' => 'Paintbrush',

                        'route' => '/company/branding/theme',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Fiscal Settings
            |--------------------------------------------------------------------------
            */

            'fiscal_settings' => [

                'label' => 'Fiscal Settings',

                'description' => 'Configure company fiscal year and taxation.',

                'icon' => 'Wallet',

                'route' => '/company/fiscal',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'fiscal_year' => [

                        'label' => 'Fiscal Year',

                        'permission_template' => 'crud',

                        'icon' => 'CalendarRange',

                        'route' => '/company/fiscal/year',

                        'api' => true,

                    ],

                    'tax_configuration' => [

                        'label' => 'Tax Configuration',

                        'permission_template' => 'crud',

                        'icon' => 'Receipt',

                        'route' => '/company/fiscal/tax',

                        'api' => true,

                    ],

                    'currency_settings' => [

                        'label' => 'Currency Settings',

                        'permission_template' => 'crud',

                        'icon' => 'Coins',

                        'route' => '/company/fiscal/currency',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Business Information
            |--------------------------------------------------------------------------
            */

            'business_information' => [

                'label' => 'Business Information',

                'description' => 'Manage business identifiers and operational information.',

                'icon' => 'BriefcaseBusiness',

                'route' => '/company/business-information',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'business_profile' => [

                        'label' => 'Business Profile',

                        'permission_template' => 'crud',

                        'icon' => 'FileText',

                        'route' => '/company/business-information',

                        'api' => true,

                    ],

                    'bank_accounts' => [

                        'label' => 'Bank Accounts',

                        'permission_template' => 'crud',

                        'icon' => 'Landmark',

                        'route' => '/company/business-information/bank-accounts',

                        'api' => true,

                    ],

                    'business_contacts' => [

                        'label' => 'Business Contacts',

                        'permission_template' => 'crud',

                        'icon' => 'Contact',

                        'route' => '/company/business-information/contacts',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Compliance
            |--------------------------------------------------------------------------
            */

            'compliance' => [

                'label' => 'Compliance',

                'description' => 'Track regulatory and legal compliance.',

                'icon' => 'ShieldCheck',

                'route' => '/company/compliance',

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
            | Certifications
            |--------------------------------------------------------------------------
            */

            'certifications' => [

                'label' => 'Certifications',

                'description' => 'Manage company certifications and accreditations.',

                'icon' => 'Award',

                'route' => '/company/certifications',

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
            | Company Documents
            |--------------------------------------------------------------------------
            */

            'company_documents' => [

                'label' => 'Company Documents',

                'description' => 'Store important company documents.',

                'icon' => 'FolderOpen',

                'route' => '/company/documents',

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

                'label' => 'Company Reports',

                'description' => 'Generate company reports and operational summaries.',

                'icon' => 'FileBarChart',

                'route' => '/company/reports',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'company_profile_report' => [

                        'label' => 'Company Profile Report',

                        'permission_template' => 'read',

                        'icon' => 'Building2',

                        'route' => '/company/reports/profile',

                        'api' => true,

                    ],

                    'organization_structure_report' => [

                        'label' => 'Organization Structure Report',

                        'permission_template' => 'read',

                        'icon' => 'GitBranch',

                        'route' => '/company/reports/structure',

                        'api' => true,

                    ],

                    'business_unit_report' => [

                        'label' => 'Business Unit Report',

                        'permission_template' => 'read',

                        'icon' => 'Building',

                        'route' => '/company/reports/business-units',

                        'api' => true,

                    ],

                    'compliance_report' => [

                        'label' => 'Compliance Report',

                        'permission_template' => 'read',

                        'icon' => 'ShieldCheck',

                        'route' => '/company/reports/compliance',

                        'api' => true,

                    ],

                    'certification_report' => [

                        'label' => 'Certification Report',

                        'permission_template' => 'read',

                        'icon' => 'Award',

                        'route' => '/company/reports/certifications',

                        'api' => true,

                    ],

                    'location_report' => [

                        'label' => 'Location Report',

                        'permission_template' => 'read',

                        'icon' => 'MapPinned',

                        'route' => '/company/reports/locations',

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

                'label' => 'Company Analytics',

                'description' => 'Company analytics and business KPIs.',

                'icon' => 'ChartPie',

                'route' => '/company/analytics',

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

                'label' => 'Import Company Data',

                'description' => 'Bulk import company information.',

                'icon' => 'FileUp',

                'route' => '/company/import',

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

                'label' => 'Export Company Data',

                'description' => 'Export company information.',

                'icon' => 'FileDown',

                'route' => '/company/export',

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

                'description' => 'Execute bulk company operations.',

                'icon' => 'Boxes',

                'route' => '/company/bulk',

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

                'label' => 'Company Notifications',

                'description' => 'Company related alerts and notifications.',

                'icon' => 'Bell',

                'route' => '/company/notifications',

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
            | AI Company Insights
            |--------------------------------------------------------------------------
            */

            'ai' => [

                'label' => 'AI Company Insights',

                'description' => 'AI powered company intelligence and organizational insights.',

                'icon' => 'Bot',

                'route' => '/company/ai',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'organization_health_score' => [

                        'label' => 'Organization Health Score',

                        'permission_template' => 'read',

                        'icon' => 'HeartPulse',

                        'route' => '/company/ai/health-score',

                        'api' => true,

                    ],

                    'compliance_risk_analysis' => [

                        'label' => 'Compliance Risk Analysis',

                        'permission_template' => 'read',

                        'icon' => 'ShieldAlert',

                        'route' => '/company/ai/compliance-risk',

                        'api' => true,

                    ],

                    'business_growth_insights' => [

                        'label' => 'Business Growth Insights',

                        'permission_template' => 'read',

                        'icon' => 'TrendingUp',

                        'route' => '/company/ai/growth-insights',

                        'api' => true,

                    ],

                    'organizational_recommendations' => [

                        'label' => 'Organizational Recommendations',

                        'permission_template' => 'read',

                        'icon' => 'Sparkles',

                        'route' => '/company/ai/recommendations',

                        'api' => true,

                    ],

                    'company_health_dashboard' => [

                        'label' => 'Company Health Dashboard',

                        'permission_template' => 'read',

                        'icon' => 'Brain',

                        'route' => '/company/ai/dashboard',

                        'api' => true,

                    ],

                ],

            ],

        ],

    ],

];