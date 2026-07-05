<?php

return [

    'designation' => [

        /*
        |--------------------------------------------------------------------------
        | Module Information
        |--------------------------------------------------------------------------
        */

        'label' => 'Designation Management',

        'description' => 'Manage designations, job architecture and career progression.',

        'icon' => 'BriefcaseBusiness',

        'route' => '/designations',

        'group' => 'core',

        'version' => '1.0.0',

        'phase' => 1,

        'order' => 40,

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

                'label' => 'Designation Dashboard',

                'description' => 'Designation overview dashboard.',

                'icon' => 'LayoutDashboard',

                'route' => '/designations',

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
            | Designations
            |--------------------------------------------------------------------------
            */

            'designations' => [

                'label' => 'Designations',

                'description' => 'Manage organization designations.',

                'icon' => 'Briefcase',

                'route' => '/designations/list',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'designation_list' => [

                        'label' => 'Designation List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/designations/list',

                        'api' => true,

                    ],

                    'designation_profile' => [

                        'label' => 'Designation Profile',

                        'permission_template' => 'read',

                        'icon' => 'FileBadge',

                        'route' => '/designations/profile',

                        'api' => true,

                    ],

                    'designation_history' => [

                        'label' => 'Designation History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/designations/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Job Levels
            |--------------------------------------------------------------------------
            */

            'job_levels' => [

                'label' => 'Job Levels',

                'description' => 'Manage organization job levels.',

                'icon' => 'Layers',

                'route' => '/designations/job-levels',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'level_list' => [

                        'label' => 'Job Level List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/designations/job-levels',

                        'api' => true,

                    ],

                    'level_hierarchy' => [

                        'label' => 'Level Hierarchy',

                        'permission_template' => 'crud',

                        'icon' => 'GitBranch',

                        'route' => '/designations/job-levels/hierarchy',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Job Grades
            |--------------------------------------------------------------------------
            */

            'job_grades' => [

                'label' => 'Job Grades',

                'description' => 'Manage salary and grading structure.',

                'icon' => 'BadgeDollarSign',

                'route' => '/designations/job-grades',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'grade_list' => [

                        'label' => 'Job Grade List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/designations/job-grades',

                        'api' => true,

                    ],

                    'grade_mapping' => [

                        'label' => 'Grade Mapping',

                        'permission_template' => 'crud',

                        'icon' => 'Link',

                        'route' => '/designations/job-grades/mapping',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Career Paths
            |--------------------------------------------------------------------------
            */

            'career_paths' => [

                'label' => 'Career Paths',

                'description' => 'Manage career progression paths.',

                'icon' => 'Route',

                'route' => '/designations/career-paths',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'career_path_list' => [

                        'label' => 'Career Path List',

                        'permission_template' => 'crud',

                        'icon' => 'Route',

                        'route' => '/designations/career-paths',

                        'api' => true,

                    ],

                    'career_progression' => [

                        'label' => 'Career Progression',

                        'permission_template' => 'crud',

                        'icon' => 'TrendingUp',

                        'route' => '/designations/career-paths/progression',

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | Promotion Matrix
            |--------------------------------------------------------------------------
            */

            'promotion_matrix' => [

                'label' => 'Promotion Matrix',

                'description' => 'Manage promotion rules and career transitions.',

                'icon' => 'GitMerge',

                'route' => '/designations/promotion-matrix',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'promotion_rules' => [

                        'label' => 'Promotion Rules',

                        'permission_template' => 'crud',

                        'icon' => 'Workflow',

                        'route' => '/designations/promotion-matrix',

                        'api' => true,

                    ],

                    'eligibility_criteria' => [

                        'label' => 'Eligibility Criteria',

                        'permission_template' => 'crud',

                        'icon' => 'ClipboardCheck',

                        'route' => '/designations/promotion-matrix/eligibility',

                        'api' => true,

                    ],

                    'promotion_history' => [

                        'label' => 'Promotion History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/designations/promotion-matrix/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Salary Bands
            |--------------------------------------------------------------------------
            */

            'salary_bands' => [

                'label' => 'Salary Bands',

                'description' => 'Manage designation salary bands.',

                'icon' => 'Wallet',

                'route' => '/designations/salary-bands',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'salary_band_list' => [

                        'label' => 'Salary Band List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/designations/salary-bands',

                        'api' => true,

                    ],

                    'salary_ranges' => [

                        'label' => 'Salary Ranges',

                        'permission_template' => 'crud',

                        'icon' => 'Coins',

                        'route' => '/designations/salary-bands/ranges',

                        'api' => true,

                    ],

                    'salary_band_history' => [

                        'label' => 'Salary Band History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/designations/salary-bands/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Competency Mapping
            |--------------------------------------------------------------------------
            */

            'competency_mapping' => [

                'label' => 'Competency Mapping',

                'description' => 'Map competencies to designations.',

                'icon' => 'Brain',

                'route' => '/designations/competencies',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'competency_list' => [

                        'label' => 'Competency Library',

                        'permission_template' => 'crud',

                        'icon' => 'Library',

                        'route' => '/designations/competencies',

                        'api' => true,

                    ],

                    'designation_mapping' => [

                        'label' => 'Designation Mapping',

                        'permission_template' => 'crud',

                        'icon' => 'Link',

                        'route' => '/designations/competencies/mapping',

                        'api' => true,

                    ],

                    'competency_levels' => [

                        'label' => 'Competency Levels',

                        'permission_template' => 'crud',

                        'icon' => 'Layers',

                        'route' => '/designations/competencies/levels',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Job Descriptions
            |--------------------------------------------------------------------------
            */

            'job_descriptions' => [

                'label' => 'Job Descriptions',

                'description' => 'Manage designation job descriptions.',

                'icon' => 'FileText',

                'route' => '/designations/job-descriptions',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'job_description_list' => [

                        'label' => 'Job Description List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/designations/job-descriptions',

                        'api' => true,

                    ],

                    'responsibilities' => [

                        'label' => 'Responsibilities',

                        'permission_template' => 'crud',

                        'icon' => 'ClipboardList',

                        'route' => '/designations/job-descriptions/responsibilities',

                        'api' => true,

                    ],

                    'requirements' => [

                        'label' => 'Requirements',

                        'permission_template' => 'crud',

                        'icon' => 'FileCheck',

                        'route' => '/designations/job-descriptions/requirements',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Designation Documents
            |--------------------------------------------------------------------------
            */

            'documents' => [

                'label' => 'Designation Documents',

                'description' => 'Manage designation related documents.',

                'icon' => 'FolderOpen',

                'route' => '/designations/documents',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

            ],

            /*
            |--------------------------------------------------------------------------
            | Skill Requirements
            |--------------------------------------------------------------------------
            */

            'skills' => [

                'label' => 'Skill Requirements',

                'description' => 'Manage required skills for designations.',

                'icon' => 'GraduationCap',

                'route' => '/designations/skills',

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
            | Certification Requirements
            |--------------------------------------------------------------------------
            */

            'certifications' => [

                'label' => 'Certification Requirements',

                'description' => 'Manage certification requirements.',

                'icon' => 'Award',

                'route' => '/designations/certifications',

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
            | Position Approval Matrix
            |--------------------------------------------------------------------------
            */

            'approval_matrix' => [

                'label' => 'Position Approval Matrix',

                'description' => 'Manage designation approval workflow.',

                'icon' => 'BadgeCheck',

                'route' => '/designations/approval-matrix',

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

                'label' => 'Designation Reports',

                'description' => 'Generate designation reports and job architecture summaries.',

                'icon' => 'FileBarChart',

                'route' => '/designations/reports',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'designation_report' => [

                        'label' => 'Designation Report',

                        'permission_template' => 'read',

                        'icon' => 'Briefcase',

                        'route' => '/designations/reports/designations',

                        'api' => true,

                    ],

                    'job_level_report' => [

                        'label' => 'Job Level Report',

                        'permission_template' => 'read',

                        'icon' => 'Layers',

                        'route' => '/designations/reports/job-levels',

                        'api' => true,

                    ],

                    'job_grade_report' => [

                        'label' => 'Job Grade Report',

                        'permission_template' => 'read',

                        'icon' => 'BadgeDollarSign',

                        'route' => '/designations/reports/job-grades',

                        'api' => true,

                    ],

                    'salary_band_report' => [

                        'label' => 'Salary Band Report',

                        'permission_template' => 'read',

                        'icon' => 'Wallet',

                        'route' => '/designations/reports/salary-bands',

                        'api' => true,

                    ],

                    'competency_report' => [

                        'label' => 'Competency Report',

                        'permission_template' => 'read',

                        'icon' => 'Brain',

                        'route' => '/designations/reports/competencies',

                        'api' => true,

                    ],

                    'career_path_report' => [

                        'label' => 'Career Path Report',

                        'permission_template' => 'read',

                        'icon' => 'Route',

                        'route' => '/designations/reports/career-paths',

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

                'label' => 'Designation Analytics',

                'description' => 'Job architecture analytics and organizational KPIs.',

                'icon' => 'ChartPie',

                'route' => '/designations/analytics',

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

                'label' => 'Import Designation Data',

                'description' => 'Bulk import designation records.',

                'icon' => 'FileUp',

                'route' => '/designations/import',

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

                'label' => 'Export Designation Data',

                'description' => 'Export designation records.',

                'icon' => 'FileDown',

                'route' => '/designations/export',

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

                'description' => 'Perform bulk designation operations.',

                'icon' => 'Boxes',

                'route' => '/designations/bulk',

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

                'label' => 'Designation Notifications',

                'description' => 'Designation related alerts and notifications.',

                'icon' => 'Bell',

                'route' => '/designations/notifications',

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
            | AI Designation Insights
            |--------------------------------------------------------------------------
            */

            'ai' => [

                'label' => 'AI Designation Insights',

                'description' => 'AI powered job architecture and workforce planning insights.',

                'icon' => 'Bot',

                'route' => '/designations/ai',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'career_progression_analysis' => [

                        'label' => 'Career Progression Analysis',

                        'permission_template' => 'read',

                        'icon' => 'TrendingUp',

                        'route' => '/designations/ai/career-progression',

                        'api' => true,

                    ],

                    'salary_benchmark_insights' => [

                        'label' => 'Salary Benchmark Insights',

                        'permission_template' => 'read',

                        'icon' => 'WalletCards',

                        'route' => '/designations/ai/salary-benchmark',

                        'api' => true,

                    ],

                    'skill_gap_analysis' => [

                        'label' => 'Skill Gap Analysis',

                        'permission_template' => 'read',

                        'icon' => 'Brain',

                        'route' => '/designations/ai/skill-gap',

                        'api' => true,

                    ],

                    'workforce_planning' => [

                        'label' => 'Workforce Planning Recommendations',

                        'permission_template' => 'read',

                        'icon' => 'Sparkles',

                        'route' => '/designations/ai/workforce-planning',

                        'api' => true,

                    ],

                    'job_architecture_dashboard' => [

                        'label' => 'Job Architecture Dashboard',

                        'permission_template' => 'read',

                        'icon' => 'LayoutDashboard',

                        'route' => '/designations/ai/dashboard',

                        'api' => true,

                    ],

                ],

            ],

        ],

    ],

];