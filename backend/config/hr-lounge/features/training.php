<?php

return [

    'training' => [

        /*
        |--------------------------------------------------------------------------
        | Module Information
        |--------------------------------------------------------------------------
        */

        'label' => 'Training & LMS',

        'description' => 'Enterprise learning management and employee development platform.',

        'icon' => 'GraduationCap',

        'route' => '/training',

        'group' => 'talent',

        'version' => '1.0.0',

        'phase' => 1,

        'order' => 70,

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

                'label' => 'Training Dashboard',

                'description' => 'Training overview and learning statistics.',

                'icon' => 'LayoutDashboard',

                'route' => '/training',

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
            | Course Management
            |--------------------------------------------------------------------------
            */

            'courses' => [

                'label' => 'Course Management',

                'description' => 'Create and manage training courses.',

                'icon' => 'BookOpen',

                'route' => '/training/courses',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'course_list' => [

                        'label' => 'Course List',

                        'description' => 'Manage available courses.',

                        'icon' => 'List',

                        'route' => '/training/courses',

                        'permission_template' => 'crud',

                        'api' => true,

                    ],

                    'course_templates' => [

                        'label' => 'Course Templates',

                        'description' => 'Reusable course templates.',

                        'icon' => 'Copy',

                        'route' => '/training/courses/templates',

                        'permission_template' => 'crud',

                        'api' => true,

                    ],

                    'course_versions' => [

                        'label' => 'Course Versions',

                        'description' => 'Manage course revisions.',

                        'icon' => 'GitBranch',

                        'route' => '/training/courses/versions',

                        'permission_template' => 'crud',

                        'api' => true,

                    ],

                    'course_archive' => [

                        'label' => 'Archived Courses',

                        'description' => 'View archived courses.',

                        'icon' => 'Archive',

                        'route' => '/training/courses/archive',

                        'permission_template' => 'archive',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Course Categories
            |--------------------------------------------------------------------------
            */

            'course_categories' => [

                'label' => 'Course Categories',

                'description' => 'Manage learning categories.',

                'icon' => 'FolderTree',

                'route' => '/training/categories',

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

                        'route' => '/training/categories',

                        'api' => true,

                    ],

                    'learning_tracks' => [

                        'label' => 'Learning Tracks',

                        'permission_template' => 'crud',

                        'icon' => 'Route',

                        'route' => '/training/categories/tracks',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Learning Paths
            |--------------------------------------------------------------------------
            */

            'learning_paths' => [

                'label' => 'Learning Paths',

                'description' => 'Structured learning journeys for employees.',

                'icon' => 'Map',

                'route' => '/training/learning-paths',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'path_list' => [

                        'label' => 'Learning Paths',

                        'permission_template' => 'crud',

                        'icon' => 'Route',

                        'route' => '/training/learning-paths',

                        'api' => true,

                    ],

                    'path_assignment' => [

                        'label' => 'Path Assignment',

                        'permission_template' => 'crud',

                        'icon' => 'UserRoundPlus',

                        'route' => '/training/learning-paths/assignment',

                        'api' => true,

                    ],

                    'path_progress' => [

                        'label' => 'Path Progress',

                        'permission_template' => 'read',

                        'icon' => 'Activity',

                        'route' => '/training/learning-paths/progress',

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | Training Programs
            |--------------------------------------------------------------------------
            */

            'training_programs' => [

                'label' => 'Training Programs',

                'description' => 'Manage organization training programs.',

                'icon' => 'BriefcaseBusiness',

                'route' => '/training/programs',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'program_list' => [

                        'label' => 'Program List',

                        'description' => 'Manage training programs.',

                        'icon' => 'List',

                        'route' => '/training/programs',

                        'permission_template' => 'crud',

                        'api' => true,

                    ],

                    'program_templates' => [

                        'label' => 'Program Templates',

                        'description' => 'Reusable training program templates.',

                        'icon' => 'Copy',

                        'route' => '/training/programs/templates',

                        'permission_template' => 'crud',

                        'api' => true,

                    ],

                    'program_schedule' => [

                        'label' => 'Program Schedule',

                        'description' => 'Manage training schedules.',

                        'icon' => 'CalendarRange',

                        'route' => '/training/programs/schedule',

                        'permission_template' => 'crud',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Sessions & Classes
            |--------------------------------------------------------------------------
            */

            'sessions' => [

                'label' => 'Sessions & Classes',

                'description' => 'Manage training sessions and class schedules.',

                'icon' => 'CalendarClock',

                'route' => '/training/sessions',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'session_list' => [

                        'label' => 'Training Sessions',

                        'permission_template' => 'crud',

                        'icon' => 'Calendar',

                        'route' => '/training/sessions',

                        'api' => true,

                    ],

                    'classrooms' => [

                        'label' => 'Classrooms',

                        'permission_template' => 'crud',

                        'icon' => 'School',

                        'route' => '/training/sessions/classrooms',

                        'api' => true,

                    ],

                    'virtual_sessions' => [

                        'label' => 'Virtual Sessions',

                        'permission_template' => 'crud',

                        'icon' => 'MonitorPlay',

                        'route' => '/training/sessions/virtual',

                        'api' => true,

                    ],

                    'training_calendar' => [

                        'label' => 'Training Calendar',

                        'permission_template' => 'read',

                        'icon' => 'CalendarDays',

                        'route' => '/training/sessions/calendar',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Trainers
            |--------------------------------------------------------------------------
            */

            'trainers' => [

                'label' => 'Trainers',

                'description' => 'Manage internal and external trainers.',

                'icon' => 'Presentation',

                'route' => '/training/trainers',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'trainer_list' => [

                        'label' => 'Trainer List',

                        'permission_template' => 'crud',

                        'icon' => 'Users',

                        'route' => '/training/trainers',

                        'api' => true,

                    ],

                    'trainer_assignment' => [

                        'label' => 'Trainer Assignment',

                        'permission_template' => 'crud',

                        'icon' => 'UserRoundPlus',

                        'route' => '/training/trainers/assignment',

                        'api' => true,

                    ],

                    'trainer_evaluation' => [

                        'label' => 'Trainer Evaluation',

                        'permission_template' => 'read',

                        'icon' => 'Star',

                        'route' => '/training/trainers/evaluation',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Enrollments
            |--------------------------------------------------------------------------
            */

            'enrollments' => [

                'label' => 'Enrollments',

                'description' => 'Manage employee training enrollments.',

                'icon' => 'UserPlus',

                'route' => '/training/enrollments',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'enrollment_list' => [

                        'label' => 'Enrollment List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/training/enrollments',

                        'api' => true,

                    ],

                    'enrollment_approval' => [

                        'label' => 'Enrollment Approval',

                        'permission_template' => 'approval',

                        'icon' => 'BadgeCheck',

                        'route' => '/training/enrollments/approval',

                        'api' => true,

                    ],

                    'waiting_list' => [

                        'label' => 'Waiting List',

                        'permission_template' => 'crud',

                        'icon' => 'Clock3',

                        'route' => '/training/enrollments/waiting-list',

                        'api' => true,

                    ],

                    'attendance' => [

                        'label' => 'Training Attendance',

                        'permission_template' => 'crud',

                        'icon' => 'UserCheck',

                        'route' => '/training/enrollments/attendance',

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | Assessments & Quizzes
            |--------------------------------------------------------------------------
            */

            'assessments' => [

                'label' => 'Assessments & Quizzes',

                'description' => 'Manage quizzes, exams and training assessments.',

                'icon' => 'ClipboardCheck',

                'route' => '/training/assessments',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'assessment_list' => [

                        'label' => 'Assessment List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/training/assessments',

                        'api' => true,

                    ],

                    'quiz_management' => [

                        'label' => 'Quiz Management',

                        'permission_template' => 'crud',

                        'icon' => 'CircleHelp',

                        'route' => '/training/assessments/quizzes',

                        'api' => true,

                    ],

                    'question_bank' => [

                        'label' => 'Question Bank',

                        'permission_template' => 'crud',

                        'icon' => 'Library',

                        'route' => '/training/assessments/question-bank',

                        'api' => true,

                    ],

                    'assessment_results' => [

                        'label' => 'Assessment Results',

                        'permission_template' => 'read',

                        'icon' => 'BarChart3',

                        'route' => '/training/assessments/results',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Assignments
            |--------------------------------------------------------------------------
            */

            'assignments' => [

                'label' => 'Assignments',

                'description' => 'Manage employee learning assignments.',

                'icon' => 'NotebookPen',

                'route' => '/training/assignments',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'assignment_list' => [

                        'label' => 'Assignment List',

                        'permission_template' => 'crud',

                        'icon' => 'ListTodo',

                        'route' => '/training/assignments',

                        'api' => true,

                    ],

                    'submission_review' => [

                        'label' => 'Submission Review',

                        'permission_template' => 'approval',

                        'icon' => 'ClipboardCheck',

                        'route' => '/training/assignments/review',

                        'api' => true,

                    ],

                    'assignment_history' => [

                        'label' => 'Assignment History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/training/assignments/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Certifications
            |--------------------------------------------------------------------------
            */

            'certifications' => [

                'label' => 'Certifications',

                'description' => 'Manage employee certifications.',

                'icon' => 'BadgeCheck',

                'route' => '/training/certifications',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'certificate_templates' => [

                        'label' => 'Certificate Templates',

                        'permission_template' => 'crud',

                        'icon' => 'FileBadge',

                        'route' => '/training/certifications/templates',

                        'api' => true,

                    ],

                    'issued_certificates' => [

                        'label' => 'Issued Certificates',

                        'permission_template' => 'read',

                        'icon' => 'Award',

                        'route' => '/training/certifications/issued',

                        'api' => true,

                    ],

                    'certificate_verification' => [

                        'label' => 'Certificate Verification',

                        'permission_template' => 'read',

                        'icon' => 'ShieldCheck',

                        'route' => '/training/certifications/verification',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Skills Development
            |--------------------------------------------------------------------------
            */

            'skills_development' => [

                'label' => 'Skills Development',

                'description' => 'Track and improve employee skills.',

                'icon' => 'BrainCircuit',

                'route' => '/training/skills',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'skill_catalog' => [

                        'label' => 'Skill Catalog',

                        'permission_template' => 'crud',

                        'icon' => 'BookOpen',

                        'route' => '/training/skills/catalog',

                        'api' => true,

                    ],

                    'skill_assessment' => [

                        'label' => 'Skill Assessment',

                        'permission_template' => 'crud',

                        'icon' => 'Gauge',

                        'route' => '/training/skills/assessment',

                        'api' => true,

                    ],

                    'skill_gap' => [

                        'label' => 'Skill Gap Analysis',

                        'permission_template' => 'read',

                        'icon' => 'SearchCheck',

                        'route' => '/training/skills/gap-analysis',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Learning Progress
            |--------------------------------------------------------------------------
            */

            'learning_progress' => [

                'label' => 'Learning Progress',

                'description' => 'Track employee learning progress.',

                'icon' => 'Activity',

                'route' => '/training/progress',

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
            | Learning History
            |--------------------------------------------------------------------------
            */

            'learning_history' => [

                'label' => 'Learning History',

                'description' => 'Historical learning records.',

                'icon' => 'History',

                'route' => '/training/history',

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
            | Learning Library
            |--------------------------------------------------------------------------
            */

            'learning_library' => [

                'label' => 'Learning Library',

                'description' => 'Central repository of learning resources.',

                'icon' => 'LibraryBig',

                'route' => '/training/library',

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
            | Training Reports
            |--------------------------------------------------------------------------
            */

            'reports' => [

                'label' => 'Training Reports',

                'description' => 'Generate training and learning reports.',

                'icon' => 'FileBarChart',

                'route' => '/training/reports',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'training_summary_report' => [

                        'label' => 'Training Summary Report',

                        'permission_template' => 'read',

                        'icon' => 'ChartColumn',

                        'route' => '/training/reports/summary',

                        'api' => true,

                    ],

                    'course_completion_report' => [

                        'label' => 'Course Completion Report',

                        'permission_template' => 'read',

                        'icon' => 'CircleCheck',

                        'route' => '/training/reports/completion',

                        'api' => true,

                    ],

                    'assessment_report' => [

                        'label' => 'Assessment Report',

                        'permission_template' => 'read',

                        'icon' => 'ClipboardCheck',

                        'route' => '/training/reports/assessments',

                        'api' => true,

                    ],

                    'certification_report' => [

                        'label' => 'Certification Report',

                        'permission_template' => 'read',

                        'icon' => 'Award',

                        'route' => '/training/reports/certifications',

                        'api' => true,

                    ],

                    'trainer_performance_report' => [

                        'label' => 'Trainer Performance Report',

                        'permission_template' => 'read',

                        'icon' => 'Presentation',

                        'route' => '/training/reports/trainers',

                        'api' => true,

                    ],

                    'skill_development_report' => [

                        'label' => 'Skill Development Report',

                        'permission_template' => 'read',

                        'icon' => 'BrainCircuit',

                        'route' => '/training/reports/skills',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Learning Analytics
            |--------------------------------------------------------------------------
            */

            'analytics' => [

                'label' => 'Learning Analytics',

                'description' => 'Training KPIs and learning analytics.',

                'icon' => 'ChartPie',

                'route' => '/training/analytics',

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

                'label' => 'Import Training Data',

                'description' => 'Import training records and courses.',

                'icon' => 'FileUp',

                'route' => '/training/import',

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

                'label' => 'Export Training Data',

                'description' => 'Export training records.',

                'icon' => 'FileDown',

                'route' => '/training/export',

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

                'description' => 'Perform bulk training operations.',

                'icon' => 'Boxes',

                'route' => '/training/bulk',

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

                'label' => 'Training Notifications',

                'description' => 'Training reminders and notifications.',

                'icon' => 'Bell',

                'route' => '/training/notifications',

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
            | AI Learning Insights
            |--------------------------------------------------------------------------
            */

            'ai' => [

                'label' => 'AI Learning Insights',

                'description' => 'AI-powered learning recommendations and analytics.',

                'icon' => 'Bot',

                'route' => '/training/ai',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'course_recommendation' => [

                        'label' => 'AI Course Recommendation',

                        'permission_template' => 'read',

                        'icon' => 'Brain',

                        'route' => '/training/ai/course-recommendation',

                        'api' => true,

                    ],

                    'learning_path_generator' => [

                        'label' => 'AI Learning Path Generator',

                        'permission_template' => 'read',

                        'icon' => 'Route',

                        'route' => '/training/ai/learning-path',

                        'api' => true,

                    ],

                    'skill_recommendation' => [

                        'label' => 'AI Skill Recommendation',

                        'permission_template' => 'read',

                        'icon' => 'Sparkles',

                        'route' => '/training/ai/skill-recommendation',

                        'api' => true,

                    ],

                    'certification_prediction' => [

                        'label' => 'Certification Prediction',

                        'permission_template' => 'read',

                        'icon' => 'BadgeCheck',

                        'route' => '/training/ai/certification-prediction',

                        'api' => true,

                    ],

                    'learning_risk_analysis' => [

                        'label' => 'Learning Risk Analysis',

                        'permission_template' => 'read',

                        'icon' => 'ShieldAlert',

                        'route' => '/training/ai/risk-analysis',

                        'api' => true,

                    ],

                ],

            ],

        ],

    ],

];