<?php

return [

    'documents' => [

        /*
        |--------------------------------------------------------------------------
        | Module Information
        |--------------------------------------------------------------------------
        */

        'label' => 'Document Management',

        'description' => 'Enterprise document management system.',

        'icon' => 'Files',

        'route' => '/documents',

        'group' => 'operations',

        'version' => '1.0.0',

        'phase' => 1,

        'order' => 90,

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

                'label' => 'Document Dashboard',

                'description' => 'Document management overview.',

                'icon' => 'LayoutDashboard',

                'route' => '/documents',

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
            | Document Library
            |--------------------------------------------------------------------------
            */

            'library' => [

                'label' => 'Document Library',

                'description' => 'Centralized document repository.',

                'icon' => 'LibraryBig',

                'route' => '/documents/library',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'document_list' => [

                        'label' => 'Document List',

                        'description' => 'Browse and manage all documents.',

                        'icon' => 'List',

                        'route' => '/documents/library',

                        'permission_template' => 'crud',

                        'api' => true,

                    ],

                    'upload_documents' => [

                        'label' => 'Upload Documents',

                        'description' => 'Upload new documents.',

                        'icon' => 'Upload',

                        'route' => '/documents/library/upload',

                        'permission_template' => 'crud',

                        'api' => true,

                    ],

                    'shared_documents' => [

                        'label' => 'Shared Documents',

                        'description' => 'Documents shared across teams.',

                        'icon' => 'Share2',

                        'route' => '/documents/library/shared',

                        'permission_template' => 'read',

                        'api' => true,

                    ],

                    'favorite_documents' => [

                        'label' => 'Favorite Documents',

                        'description' => 'Quick access to favorite documents.',

                        'icon' => 'Star',

                        'route' => '/documents/library/favorites',

                        'permission_template' => 'read',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Document Categories
            |--------------------------------------------------------------------------
            */

            'categories' => [

                'label' => 'Document Categories',

                'description' => 'Manage document categories.',

                'icon' => 'FolderTree',

                'route' => '/documents/categories',

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

                        'route' => '/documents/categories',

                        'api' => true,

                    ],

                    'document_tags' => [

                        'label' => 'Document Tags',

                        'permission_template' => 'crud',

                        'icon' => 'Tags',

                        'route' => '/documents/categories/tags',

                        'api' => true,

                    ],

                    'retention_policies' => [

                        'label' => 'Retention Policies',

                        'permission_template' => 'crud',

                        'icon' => 'Shield',

                        'route' => '/documents/categories/retention',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Employee Documents
            |--------------------------------------------------------------------------
            */

            'employee_documents' => [

                'label' => 'Employee Documents',

                'description' => 'Manage employee personal and HR documents.',

                'icon' => 'FolderUser',

                'route' => '/documents/employees',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'employee_document_list' => [

                        'label' => 'Employee Documents',

                        'permission_template' => 'crud',

                        'icon' => 'FileUser',

                        'route' => '/documents/employees',

                        'api' => true,

                    ],

                    'employee_uploads' => [

                        'label' => 'Employee Uploads',

                        'permission_template' => 'crud',

                        'icon' => 'UploadCloud',

                        'route' => '/documents/employees/uploads',

                        'api' => true,

                    ],

                    'employee_verification' => [

                        'label' => 'Document Verification',

                        'permission_template' => 'approval',

                        'icon' => 'BadgeCheck',

                        'route' => '/documents/employees/verification',

                        'api' => true,

                    ],

                    'employee_history' => [

                        'label' => 'Document History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/documents/employees/history',

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | Company Documents
            |--------------------------------------------------------------------------
            */

            'company_documents' => [

                'label' => 'Company Documents',

                'description' => 'Manage company policies and organizational documents.',

                'icon' => 'Building2',

                'route' => '/documents/company',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'company_document_list' => [

                        'label' => 'Company Documents',

                        'permission_template' => 'crud',

                        'icon' => 'Files',

                        'route' => '/documents/company',

                        'api' => true,

                    ],

                    'policies' => [

                        'label' => 'Policies & Manuals',

                        'permission_template' => 'crud',

                        'icon' => 'BookOpen',

                        'route' => '/documents/company/policies',

                        'api' => true,

                    ],

                    'legal_documents' => [

                        'label' => 'Legal Documents',

                        'permission_template' => 'crud',

                        'icon' => 'Scale',

                        'route' => '/documents/company/legal',

                        'api' => true,

                    ],

                    'board_documents' => [

                        'label' => 'Board Documents',

                        'permission_template' => 'crud',

                        'icon' => 'BriefcaseBusiness',

                        'route' => '/documents/company/board',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Document Templates
            |--------------------------------------------------------------------------
            */

            'templates' => [

                'label' => 'Document Templates',

                'description' => 'Manage reusable document templates.',

                'icon' => 'FileText',

                'route' => '/documents/templates',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'template_library' => [

                        'label' => 'Template Library',

                        'permission_template' => 'crud',

                        'icon' => 'Library',

                        'route' => '/documents/templates',

                        'api' => true,

                    ],

                    'template_builder' => [

                        'label' => 'Template Builder',

                        'permission_template' => 'crud',

                        'icon' => 'FilePenLine',

                        'route' => '/documents/templates/builder',

                        'api' => true,

                    ],

                    'template_variables' => [

                        'label' => 'Template Variables',

                        'permission_template' => 'crud',

                        'icon' => 'Braces',

                        'route' => '/documents/templates/variables',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Version Control
            |--------------------------------------------------------------------------
            */

            'version_control' => [

                'label' => 'Version Control',

                'description' => 'Track document versions and revisions.',

                'icon' => 'GitBranch',

                'route' => '/documents/version-control',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'version_history' => [

                        'label' => 'Version History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/documents/version-control/history',

                        'api' => true,

                    ],

                    'compare_versions' => [

                        'label' => 'Compare Versions',

                        'permission_template' => 'read',

                        'icon' => 'GitCompare',

                        'route' => '/documents/version-control/compare',

                        'api' => true,

                    ],

                    'restore_version' => [

                        'label' => 'Restore Version',

                        'permission_template' => 'approval',

                        'icon' => 'RotateCcw',

                        'route' => '/documents/version-control/restore',

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

                'description' => 'Manage document approval workflow.',

                'icon' => 'Workflow',

                'route' => '/documents/approval',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'approval_requests' => [

                        'label' => 'Approval Requests',

                        'permission_template' => 'approval',

                        'icon' => 'ClipboardCheck',

                        'route' => '/documents/approval/requests',

                        'api' => true,

                    ],

                    'approval_pipeline' => [

                        'label' => 'Approval Pipeline',

                        'permission_template' => 'crud',

                        'icon' => 'GitMerge',

                        'route' => '/documents/approval/pipeline',

                        'api' => true,

                    ],

                    'approval_history' => [

                        'label' => 'Approval History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/documents/approval/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | E-Signatures
            |--------------------------------------------------------------------------
            */

            'esignatures' => [

                'label' => 'E-Signatures',

                'description' => 'Manage electronic signatures and signed documents.',

                'icon' => 'FileSignature',

                'route' => '/documents/esignatures',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'signature_requests' => [

                        'label' => 'Signature Requests',

                        'permission_template' => 'crud',

                        'icon' => 'Send',

                        'route' => '/documents/esignatures/requests',

                        'api' => true,

                    ],

                    'signed_documents' => [

                        'label' => 'Signed Documents',

                        'permission_template' => 'read',

                        'icon' => 'BadgeCheck',

                        'route' => '/documents/esignatures/signed',

                        'api' => true,

                    ],

                    'signature_audit' => [

                        'label' => 'Signature Audit',

                        'permission_template' => 'read',

                        'icon' => 'ShieldCheck',

                        'route' => '/documents/esignatures/audit',

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | Expiry & Renewals
            |--------------------------------------------------------------------------
            */

            'expiry_management' => [

                'label' => 'Expiry & Renewals',

                'description' => 'Track document expiry and renewal lifecycle.',

                'icon' => 'CalendarClock',

                'route' => '/documents/expiry',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'expiry_tracking' => [

                        'label' => 'Expiry Tracking',

                        'permission_template' => 'read',

                        'icon' => 'Clock3',

                        'route' => '/documents/expiry',

                        'api' => true,

                    ],

                    'renewal_requests' => [

                        'label' => 'Renewal Requests',

                        'permission_template' => 'crud',

                        'icon' => 'RefreshCw',

                        'route' => '/documents/expiry/renewals',

                        'api' => true,

                    ],

                    'renewal_history' => [

                        'label' => 'Renewal History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/documents/expiry/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Access Control
            |--------------------------------------------------------------------------
            */

            'access_control' => [

                'label' => 'Access Control',

                'description' => 'Manage document access and permissions.',

                'icon' => 'LockKeyhole',

                'route' => '/documents/access-control',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'access_rules' => [

                        'label' => 'Access Rules',

                        'permission_template' => 'crud',

                        'icon' => 'Shield',

                        'route' => '/documents/access-control/rules',

                        'api' => true,

                    ],

                    'role_permissions' => [

                        'label' => 'Role Permissions',

                        'permission_template' => 'crud',

                        'icon' => 'UsersRound',

                        'route' => '/documents/access-control/roles',

                        'api' => true,

                    ],

                    'permission_audit' => [

                        'label' => 'Permission Audit',

                        'permission_template' => 'read',

                        'icon' => 'ClipboardSearch',

                        'route' => '/documents/access-control/audit',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Document Sharing
            |--------------------------------------------------------------------------
            */

            'sharing' => [

                'label' => 'Document Sharing',

                'description' => 'Share documents securely inside the organization.',

                'icon' => 'Share2',

                'route' => '/documents/sharing',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'shared_documents' => [

                        'label' => 'Shared Documents',

                        'permission_template' => 'crud',

                        'icon' => 'FolderOpen',

                        'route' => '/documents/sharing/shared',

                        'api' => true,

                    ],

                    'share_links' => [

                        'label' => 'Secure Share Links',

                        'permission_template' => 'crud',

                        'icon' => 'Link',

                        'route' => '/documents/sharing/links',

                        'api' => true,

                    ],

                    'sharing_history' => [

                        'label' => 'Sharing History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/documents/sharing/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Document Audit
            |--------------------------------------------------------------------------
            */

            'document_audit' => [

                'label' => 'Document Audit',

                'description' => 'Track every document activity.',

                'icon' => 'ClipboardSearch',

                'route' => '/documents/audit',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'audit_logs' => [

                        'label' => 'Audit Logs',

                        'permission_template' => 'read',

                        'icon' => 'FileSearch',

                        'route' => '/documents/audit/logs',

                        'api' => true,

                    ],

                    'download_logs' => [

                        'label' => 'Download Logs',

                        'permission_template' => 'read',

                        'icon' => 'Download',

                        'route' => '/documents/audit/downloads',

                        'api' => true,

                    ],

                    'access_logs' => [

                        'label' => 'Access Logs',

                        'permission_template' => 'read',

                        'icon' => 'Eye',

                        'route' => '/documents/audit/access',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Compliance Tracking
            |--------------------------------------------------------------------------
            */

            'compliance' => [

                'label' => 'Compliance Tracking',

                'description' => 'Track regulatory and compliance documents.',

                'icon' => 'ShieldCheck',

                'route' => '/documents/compliance',

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
            | Archive Management
            |--------------------------------------------------------------------------
            */

            'archive' => [

                'label' => 'Archive Management',

                'description' => 'Archive inactive documents securely.',

                'icon' => 'Archive',

                'route' => '/documents/archive',

                'permission_template' => 'archive',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

            ],

            /*
            |--------------------------------------------------------------------------
            | Document Recovery
            |--------------------------------------------------------------------------
            */

            'recovery' => [

                'label' => 'Document Recovery',

                'description' => 'Recover archived or deleted documents.',

                'icon' => 'RotateCcw',

                'route' => '/documents/recovery',

                'permission_template' => 'restore',

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

                'label' => 'Document Reports',

                'description' => 'Generate document reports and summaries.',

                'icon' => 'FileBarChart',

                'route' => '/documents/reports',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'document_summary_report' => [

                        'label' => 'Document Summary',

                        'permission_template' => 'read',

                        'icon' => 'ChartColumn',

                        'route' => '/documents/reports/summary',

                        'api' => true,

                    ],

                    'expiry_report' => [

                        'label' => 'Expiry Report',

                        'permission_template' => 'read',

                        'icon' => 'CalendarClock',

                        'route' => '/documents/reports/expiry',

                        'api' => true,

                    ],

                    'compliance_report' => [

                        'label' => 'Compliance Report',

                        'permission_template' => 'read',

                        'icon' => 'ShieldCheck',

                        'route' => '/documents/reports/compliance',

                        'api' => true,

                    ],

                    'audit_report' => [

                        'label' => 'Audit Report',

                        'permission_template' => 'read',

                        'icon' => 'ClipboardSearch',

                        'route' => '/documents/reports/audit',

                        'api' => true,

                    ],

                    'access_report' => [

                        'label' => 'Access Report',

                        'permission_template' => 'read',

                        'icon' => 'LockKeyhole',

                        'route' => '/documents/reports/access',

                        'api' => true,

                    ],

                    'storage_report' => [

                        'label' => 'Storage Usage Report',

                        'permission_template' => 'read',

                        'icon' => 'HardDrive',

                        'route' => '/documents/reports/storage',

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

                'label' => 'Document Analytics',

                'description' => 'Document usage and storage analytics.',

                'icon' => 'ChartPie',

                'route' => '/documents/analytics',

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

                'label' => 'Import Documents',

                'description' => 'Import documents in bulk.',

                'icon' => 'FileUp',

                'route' => '/documents/import',

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

                'label' => 'Export Documents',

                'description' => 'Export document records.',

                'icon' => 'FileDown',

                'route' => '/documents/export',

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

                'description' => 'Perform bulk document operations.',

                'icon' => 'Boxes',

                'route' => '/documents/bulk',

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

                'label' => 'Document Notifications',

                'description' => 'Document reminders and notifications.',

                'icon' => 'Bell',

                'route' => '/documents/notifications',

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
            | AI Document Insights
            |--------------------------------------------------------------------------
            */

            'ai' => [

                'label' => 'AI Document Insights',

                'description' => 'AI-powered document intelligence.',

                'icon' => 'Bot',

                'route' => '/documents/ai',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'document_classification' => [

                        'label' => 'AI Document Classification',

                        'permission_template' => 'read',

                        'icon' => 'Brain',

                        'route' => '/documents/ai/classification',

                        'api' => true,

                    ],

                    'ocr_search' => [

                        'label' => 'AI OCR & Smart Search',

                        'permission_template' => 'read',

                        'icon' => 'ScanSearch',

                        'route' => '/documents/ai/ocr-search',

                        'api' => true,

                    ],

                    'compliance_check' => [

                        'label' => 'AI Compliance Check',

                        'permission_template' => 'read',

                        'icon' => 'Shield',

                        'route' => '/documents/ai/compliance',

                        'api' => true,

                    ],

                    'document_summary' => [

                        'label' => 'AI Document Summary',

                        'permission_template' => 'read',

                        'icon' => 'FileText',

                        'route' => '/documents/ai/summary',

                        'api' => true,

                    ],

                    'duplicate_detection' => [

                        'label' => 'Duplicate Detection',

                        'permission_template' => 'read',

                        'icon' => 'CopyCheck',

                        'route' => '/documents/ai/duplicates',

                        'api' => true,

                    ],

                ],

            ],

        ],

    ],

];