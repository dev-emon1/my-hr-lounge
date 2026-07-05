<?php

return [

    'recruitment' => [

        /*
        |--------------------------------------------------------------------------
        | Module Information
        |--------------------------------------------------------------------------
        */

        'label' => 'Recruitment & ATS',

        'description' => 'Complete recruitment and applicant tracking system.',

        'icon' => 'BriefcaseBusiness',

        'route' => '/recruitment',

        'group' => 'talent',

        'version' => '1.0.0',

        'phase' => 1,

        'order' => 50,

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

                'label' => 'Recruitment Dashboard',

                'description' => 'Recruitment overview and hiring pipeline.',

                'icon' => 'LayoutDashboard',

                'route' => '/recruitment',

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
            | Job Requisitions
            |--------------------------------------------------------------------------
            */

            'job_requisitions' => [

                'label' => 'Job Requisitions',

                'description' => 'Manage internal hiring requests.',

                'icon' => 'FilePlus2',

                'route' => '/recruitment/job-requisitions',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'requisition_list' => [

                        'label' => 'Requisition List',

                        'description' => 'View and manage requisitions.',

                        'icon' => 'List',

                        'route' => '/recruitment/job-requisitions',

                        'permission_template' => 'crud',

                        'api' => true,

                    ],

                    'requisition_approval' => [

                        'label' => 'Requisition Approval',

                        'description' => 'Approve hiring requisitions.',

                        'icon' => 'BadgeCheck',

                        'route' => '/recruitment/job-requisitions/approval',

                        'permission_template' => 'approval',

                        'api' => true,

                    ],

                    'requisition_history' => [

                        'label' => 'Requisition History',

                        'description' => 'View requisition history.',

                        'icon' => 'History',

                        'route' => '/recruitment/job-requisitions/history',

                        'permission_template' => 'read',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Job Openings
            |--------------------------------------------------------------------------
            */

            'job_openings' => [

                'label' => 'Job Openings',

                'description' => 'Manage published job openings.',

                'icon' => 'Briefcase',

                'route' => '/recruitment/job-openings',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'job_postings' => [

                        'label' => 'Job Postings',

                        'description' => 'Publish and manage job posts.',

                        'icon' => 'Megaphone',

                        'route' => '/recruitment/job-openings/postings',

                        'permission_template' => 'crud',

                        'api' => true,

                    ],

                    'job_templates' => [

                        'label' => 'Job Templates',

                        'description' => 'Reusable job description templates.',

                        'icon' => 'Copy',

                        'route' => '/recruitment/job-openings/templates',

                        'permission_template' => 'crud',

                        'api' => true,

                    ],

                    'job_publish' => [

                        'label' => 'Publish Jobs',

                        'description' => 'Publish jobs to career portal and job boards.',

                        'icon' => 'Send',

                        'route' => '/recruitment/job-openings/publish',

                        'permission_template' => 'approval',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Career Portal
            |--------------------------------------------------------------------------
            */

            'career_portal' => [

                'label' => 'Career Portal',

                'description' => 'Manage organization career portal.',

                'icon' => 'Globe',

                'route' => '/recruitment/career-portal',

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
            | Candidates
            |--------------------------------------------------------------------------
            */

            'candidates' => [

                'label' => 'Candidates',

                'description' => 'Manage candidate profiles throughout the hiring lifecycle.',

                'icon' => 'Users',

                'route' => '/recruitment/candidates',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    /*
                    |--------------------------------------------------------------------------
                    | Candidate Directory
                    |--------------------------------------------------------------------------
                    */

                    'directory' => [

                        'label' => 'Candidate Directory',

                        'description' => 'Browse all candidates.',

                        'icon' => 'List',

                        'route' => '/recruitment/candidates',

                        'permission_template' => 'crud',

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Candidate Profile
                    |--------------------------------------------------------------------------
                    */

                    'profile' => [

                        'label' => 'Candidate Profile',

                        'description' => 'View complete candidate profile.',

                        'icon' => 'User',

                        'route' => '/recruitment/candidates/profile',

                        'permission_template' => 'read',

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Candidate Documents
                    |--------------------------------------------------------------------------
                    */

                    'documents' => [

                        'label' => 'Candidate Documents',

                        'description' => 'Manage resumes and supporting documents.',

                        'icon' => 'FolderOpen',

                        'route' => '/recruitment/candidates/documents',

                        'permission_template' => 'crud',

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Candidate Notes
                    |--------------------------------------------------------------------------
                    */

                    'notes' => [

                        'label' => 'Candidate Notes',

                        'description' => 'Internal recruiter notes.',

                        'icon' => 'NotebookPen',

                        'route' => '/recruitment/candidates/notes',

                        'permission_template' => 'crud',

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Candidate Timeline
                    |--------------------------------------------------------------------------
                    */

                    'timeline' => [

                        'label' => 'Candidate Timeline',

                        'description' => 'Complete recruitment activity timeline.',

                        'icon' => 'History',

                        'route' => '/recruitment/candidates/timeline',

                        'permission_template' => 'read',

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Candidate Tags
                    |--------------------------------------------------------------------------
                    */

                    'tags' => [

                        'label' => 'Candidate Tags',

                        'description' => 'Categorize candidates using tags.',

                        'icon' => 'Tags',

                        'route' => '/recruitment/candidates/tags',

                        'permission_template' => 'crud',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Talent Pool
            |--------------------------------------------------------------------------
            */

            'talent_pool' => [

                'label' => 'Talent Pool',

                'description' => 'Maintain reusable candidate talent pools.',

                'icon' => 'UsersRound',

                'route' => '/recruitment/talent-pool',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'talent_pool_list' => [

                        'label' => 'Talent Pool List',

                        'permission_template' => 'crud',

                        'icon' => 'Database',

                        'route' => '/recruitment/talent-pool',

                        'api' => true,

                    ],

                    'talent_segments' => [

                        'label' => 'Talent Segments',

                        'permission_template' => 'crud',

                        'icon' => 'Layers3',

                        'route' => '/recruitment/talent-pool/segments',

                        'api' => true,

                    ],

                    'talent_pipeline' => [

                        'label' => 'Talent Pipeline',

                        'permission_template' => 'read',

                        'icon' => 'GitBranch',

                        'route' => '/recruitment/talent-pool/pipeline',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Resume Database
            |--------------------------------------------------------------------------
            */

            'resume_database' => [

                'label' => 'Resume Database',

                'description' => 'Centralized resume repository.',

                'icon' => 'FileText',

                'route' => '/recruitment/resume-database',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'resume_library' => [

                        'label' => 'Resume Library',

                        'permission_template' => 'crud',

                        'icon' => 'Files',

                        'route' => '/recruitment/resume-database/library',

                        'api' => true,

                    ],

                    'resume_parser' => [

                        'label' => 'Resume Parser',

                        'permission_template' => 'execute',

                        'icon' => 'ScanText',

                        'route' => '/recruitment/resume-database/parser',

                        'api' => true,

                    ],

                    'duplicate_detection' => [

                        'label' => 'Duplicate Detection',

                        'permission_template' => 'read',

                        'icon' => 'CopyCheck',

                        'route' => '/recruitment/resume-database/duplicates',

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | Applications
            |--------------------------------------------------------------------------
            */

            'applications' => [

                'label' => 'Applications',

                'description' => 'Manage candidate applications.',

                'icon' => 'ClipboardList',

                'route' => '/recruitment/applications',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'application_list' => [

                        'label' => 'Application List',

                        'icon' => 'List',

                        'route' => '/recruitment/applications',

                        'permission_template' => 'crud',

                        'api' => true,

                    ],

                    'application_review' => [

                        'label' => 'Application Review',

                        'icon' => 'ClipboardCheck',

                        'route' => '/recruitment/applications/review',

                        'permission_template' => 'approval',

                        'api' => true,

                    ],

                    'application_history' => [

                        'label' => 'Application History',

                        'icon' => 'History',

                        'route' => '/recruitment/applications/history',

                        'permission_template' => 'read',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Screening
            |--------------------------------------------------------------------------
            */

            'screening' => [

                'label' => 'Candidate Screening',

                'description' => 'Initial candidate screening workflow.',

                'icon' => 'SearchCheck',

                'route' => '/recruitment/screening',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'resume_screening' => [

                        'label' => 'Resume Screening',

                        'permission_template' => 'approval',

                        'icon' => 'FileSearch',

                        'route' => '/recruitment/screening/resume',

                        'api' => true,

                    ],

                    'candidate_shortlisting' => [

                        'label' => 'Candidate Shortlisting',

                        'permission_template' => 'approval',

                        'icon' => 'UserCheck',

                        'route' => '/recruitment/screening/shortlisting',

                        'api' => true,

                    ],

                    'screening_history' => [

                        'label' => 'Screening History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/recruitment/screening/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Assessments
            |--------------------------------------------------------------------------
            */

            'assessments' => [

                'label' => 'Assessments',

                'description' => 'Manage candidate assessments and tests.',

                'icon' => 'ClipboardPen',

                'route' => '/recruitment/assessments',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'assessment_templates' => [

                        'label' => 'Assessment Templates',

                        'permission_template' => 'crud',

                        'icon' => 'FileCode',

                        'route' => '/recruitment/assessments/templates',

                        'api' => true,

                    ],

                    'assessment_results' => [

                        'label' => 'Assessment Results',

                        'permission_template' => 'read',

                        'icon' => 'BarChart3',

                        'route' => '/recruitment/assessments/results',

                        'api' => true,

                    ],

                    'assessment_evaluation' => [

                        'label' => 'Assessment Evaluation',

                        'permission_template' => 'approval',

                        'icon' => 'ClipboardCheck',

                        'route' => '/recruitment/assessments/evaluation',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Interview Pipeline
            |--------------------------------------------------------------------------
            */

            'interview_pipeline' => [

                'label' => 'Interview Pipeline',

                'description' => 'Manage interview stages and candidate progression.',

                'icon' => 'GitBranch',

                'route' => '/recruitment/interviews',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'pipeline_board' => [

                        'label' => 'Pipeline Board',

                        'permission_template' => 'read',

                        'icon' => 'KanbanSquare',

                        'route' => '/recruitment/interviews/pipeline',

                        'api' => true,

                    ],

                    'interview_stages' => [

                        'label' => 'Interview Stages',

                        'permission_template' => 'crud',

                        'icon' => 'Workflow',

                        'route' => '/recruitment/interviews/stages',

                        'api' => true,

                    ],

                    'stage_history' => [

                        'label' => 'Stage History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/recruitment/interviews/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Interview Scheduling
            |--------------------------------------------------------------------------
            */

            'interview_scheduling' => [

                'label' => 'Interview Scheduling',

                'description' => 'Schedule candidate interviews.',

                'icon' => 'CalendarClock',

                'route' => '/recruitment/interview-scheduling',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'schedule_interview' => [

                        'label' => 'Schedule Interview',

                        'permission_template' => 'crud',

                        'icon' => 'CalendarPlus',

                        'route' => '/recruitment/interview-scheduling/create',

                        'api' => true,

                    ],

                    'interview_feedback' => [

                        'label' => 'Interview Feedback',

                        'permission_template' => 'crud',

                        'icon' => 'MessageSquareText',

                        'route' => '/recruitment/interview-scheduling/feedback',

                        'api' => true,

                    ],

                    'interview_result' => [

                        'label' => 'Interview Result',

                        'permission_template' => 'approval',

                        'icon' => 'BadgeCheck',

                        'route' => '/recruitment/interview-scheduling/result',

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | Recruitment Reports
            |--------------------------------------------------------------------------
            */

            'reports' => [

                'label' => 'Recruitment Reports',

                'description' => 'Generate recruitment reports and hiring statistics.',

                'icon' => 'FileBarChart',

                'route' => '/recruitment/reports',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'hiring_summary' => [

                        'label' => 'Hiring Summary',

                        'permission_template' => 'read',

                        'icon' => 'ChartColumn',

                        'route' => '/recruitment/reports/hiring-summary',

                        'api' => true,

                    ],

                    'candidate_report' => [

                        'label' => 'Candidate Report',

                        'permission_template' => 'read',

                        'icon' => 'Users',

                        'route' => '/recruitment/reports/candidates',

                        'api' => true,

                    ],

                    'interview_report' => [

                        'label' => 'Interview Report',

                        'permission_template' => 'read',

                        'icon' => 'MessagesSquare',

                        'route' => '/recruitment/reports/interviews',

                        'api' => true,

                    ],

                    'offer_report' => [

                        'label' => 'Offer Report',

                        'permission_template' => 'read',

                        'icon' => 'FileSignature',

                        'route' => '/recruitment/reports/offers',

                        'api' => true,

                    ],

                    'source_report' => [

                        'label' => 'Source Performance',

                        'permission_template' => 'read',

                        'icon' => 'GitBranch',

                        'route' => '/recruitment/reports/source-performance',

                        'api' => true,

                    ],

                    'time_to_hire_report' => [

                        'label' => 'Time to Hire',

                        'permission_template' => 'read',

                        'icon' => 'Timer',

                        'route' => '/recruitment/reports/time-to-hire',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Recruitment Analytics
            |--------------------------------------------------------------------------
            */

            'analytics' => [

                'label' => 'Recruitment Analytics',

                'description' => 'Hiring KPI and recruitment analytics.',

                'icon' => 'ChartPie',

                'route' => '/recruitment/analytics',

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

                'label' => 'Import Candidates',

                'description' => 'Import candidate information.',

                'icon' => 'FileUp',

                'route' => '/recruitment/import',

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

                'label' => 'Export Recruitment Data',

                'description' => 'Export recruitment information.',

                'icon' => 'FileDown',

                'route' => '/recruitment/export',

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

                'description' => 'Perform bulk recruitment actions.',

                'icon' => 'Boxes',

                'route' => '/recruitment/bulk',

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

                'label' => 'Recruitment Notifications',

                'description' => 'Recruitment reminders and alerts.',

                'icon' => 'Bell',

                'route' => '/recruitment/notifications',

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
            | AI Recruitment Insights
            |--------------------------------------------------------------------------
            */

            'ai' => [

                'label' => 'AI Recruitment Insights',

                'description' => 'AI powered recruitment analysis and recommendations.',

                'icon' => 'Bot',

                'route' => '/recruitment/ai',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'resume_screening_ai' => [

                        'label' => 'AI Resume Screening',

                        'permission_template' => 'read',

                        'icon' => 'ScanSearch',

                        'route' => '/recruitment/ai/resume-screening',

                        'api' => true,

                    ],

                    'candidate_matching' => [

                        'label' => 'AI Candidate Matching',

                        'permission_template' => 'read',

                        'icon' => 'Brain',

                        'route' => '/recruitment/ai/candidate-matching',

                        'api' => true,

                    ],

                    'interview_insights' => [

                        'label' => 'AI Interview Insights',

                        'permission_template' => 'read',

                        'icon' => 'MessageSquareHeart',

                        'route' => '/recruitment/ai/interview-insights',

                        'api' => true,

                    ],

                    'hiring_prediction' => [

                        'label' => 'Hiring Prediction',

                        'permission_template' => 'read',

                        'icon' => 'Sparkles',

                        'route' => '/recruitment/ai/hiring-prediction',

                        'api' => true,

                    ],

                    'attrition_risk' => [

                        'label' => 'Early Attrition Risk',

                        'permission_template' => 'read',

                        'icon' => 'TrendingDown',

                        'route' => '/recruitment/ai/attrition-risk',

                        'api' => true,

                    ],

                ],

            ],

        ],

    ],

];