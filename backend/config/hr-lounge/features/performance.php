<?php

return [

    'performance' => [

        /*
        |--------------------------------------------------------------------------
        | Module Information
        |--------------------------------------------------------------------------
        */

        'label' => 'Performance & OKR',

        'description' => 'Enterprise performance management and OKR platform.',

        'icon' => 'Target',

        'route' => '/performance',

        'group' => 'talent',

        'version' => '1.0.0',

        'phase' => 1,

        'order' => 60,

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

                'label' => 'Performance Dashboard',

                'description' => 'Performance overview, goals and KPI summary.',

                'icon' => 'LayoutDashboard',

                'route' => '/performance',

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
            | Goals & OKRs
            |--------------------------------------------------------------------------
            */

            'goals' => [

                'label' => 'Goals & OKRs',

                'description' => 'Manage organizational objectives and key results.',

                'icon' => 'Target',

                'route' => '/performance/goals',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'goal_list' => [

                        'label' => 'Goals',

                        'description' => 'Create and manage goals.',

                        'icon' => 'List',

                        'route' => '/performance/goals',

                        'permission_template' => 'crud',

                        'api' => true,

                    ],

                    'okr_management' => [

                        'label' => 'OKR Management',

                        'description' => 'Manage OKRs.',

                        'icon' => 'Goal',

                        'route' => '/performance/goals/okrs',

                        'permission_template' => 'crud',

                        'api' => true,

                    ],

                    'goal_alignment' => [

                        'label' => 'Goal Alignment',

                        'description' => 'Align team and company goals.',

                        'icon' => 'GitMerge',

                        'route' => '/performance/goals/alignment',

                        'permission_template' => 'crud',

                        'api' => true,

                    ],

                    'goal_progress' => [

                        'label' => 'Goal Progress',

                        'description' => 'Track goal completion.',

                        'icon' => 'TrendingUp',

                        'route' => '/performance/goals/progress',

                        'permission_template' => 'read',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | KPI Management
            |--------------------------------------------------------------------------
            */

            'kpis' => [

                'label' => 'KPI Management',

                'description' => 'Manage employee and departmental KPIs.',

                'icon' => 'Gauge',

                'route' => '/performance/kpis',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'kpi_library' => [

                        'label' => 'KPI Library',

                        'description' => 'Manage KPI definitions.',

                        'icon' => 'Library',

                        'route' => '/performance/kpis/library',

                        'permission_template' => 'crud',

                        'api' => true,

                    ],

                    'kpi_assignment' => [

                        'label' => 'KPI Assignment',

                        'description' => 'Assign KPIs to employees.',

                        'icon' => 'UserRoundPlus',

                        'route' => '/performance/kpis/assignment',

                        'permission_template' => 'crud',

                        'api' => true,

                    ],

                    'kpi_tracking' => [

                        'label' => 'KPI Tracking',

                        'description' => 'Track KPI achievement.',

                        'icon' => 'Activity',

                        'route' => '/performance/kpis/tracking',

                        'permission_template' => 'read',

                        'api' => true,

                    ],

                    'kpi_scorecards' => [

                        'label' => 'KPI Scorecards',

                        'description' => 'View KPI scorecards.',

                        'icon' => 'ClipboardList',

                        'route' => '/performance/kpis/scorecards',

                        'permission_template' => 'read',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Competency Framework
            |--------------------------------------------------------------------------
            */

            'competencies' => [

                'label' => 'Competency Framework',

                'description' => 'Manage competencies, skills and behaviors.',

                'icon' => 'BrainCircuit',

                'route' => '/performance/competencies',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'competency_library' => [

                        'label' => 'Competency Library',

                        'permission_template' => 'crud',

                        'icon' => 'BookOpen',

                        'route' => '/performance/competencies/library',

                        'api' => true,

                    ],

                    'skill_matrix' => [

                        'label' => 'Skill Matrix',

                        'permission_template' => 'crud',

                        'icon' => 'Grid2X2',

                        'route' => '/performance/competencies/skill-matrix',

                        'api' => true,

                    ],

                    'competency_levels' => [

                        'label' => 'Competency Levels',

                        'permission_template' => 'crud',

                        'icon' => 'Layers3',

                        'route' => '/performance/competencies/levels',

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | Performance Cycles
            |--------------------------------------------------------------------------
            */

            'performance_cycles' => [

                'label' => 'Performance Cycles',

                'description' => 'Manage annual, quarterly and custom review cycles.',

                'icon' => 'Repeat',

                'route' => '/performance/cycles',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'cycle_list' => [

                        'label' => 'Performance Cycles',

                        'description' => 'Create and manage review cycles.',

                        'icon' => 'CalendarRange',

                        'route' => '/performance/cycles',

                        'permission_template' => 'crud',

                        'api' => true,

                    ],

                    'review_templates' => [

                        'label' => 'Review Templates',

                        'description' => 'Manage review templates.',

                        'icon' => 'FileText',

                        'route' => '/performance/cycles/templates',

                        'permission_template' => 'crud',

                        'api' => true,

                    ],

                    'review_forms' => [

                        'label' => 'Review Forms',

                        'description' => 'Configure review questionnaires.',

                        'icon' => 'ClipboardPen',

                        'route' => '/performance/cycles/forms',

                        'permission_template' => 'crud',

                        'api' => true,

                    ],

                    'cycle_schedule' => [

                        'label' => 'Cycle Schedule',

                        'description' => 'Manage review schedules.',

                        'icon' => 'CalendarClock',

                        'route' => '/performance/cycles/schedule',

                        'permission_template' => 'crud',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Performance Reviews
            |--------------------------------------------------------------------------
            */

            'performance_reviews' => [

                'label' => 'Performance Reviews',

                'description' => 'Manage employee performance reviews.',

                'icon' => 'ClipboardCheck',

                'route' => '/performance/reviews',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'review_list' => [

                        'label' => 'Review List',

                        'description' => 'View all performance reviews.',

                        'icon' => 'List',

                        'route' => '/performance/reviews',

                        'permission_template' => 'read',

                        'api' => true,

                    ],

                    'review_assignment' => [

                        'label' => 'Review Assignment',

                        'description' => 'Assign review cycles.',

                        'icon' => 'UserRoundPlus',

                        'route' => '/performance/reviews/assignment',

                        'permission_template' => 'crud',

                        'api' => true,

                    ],

                    'review_workflow' => [

                        'label' => 'Review Workflow',

                        'description' => 'Configure review workflow.',

                        'icon' => 'Workflow',

                        'route' => '/performance/reviews/workflow',

                        'permission_template' => 'crud',

                        'api' => true,

                    ],

                    'review_history' => [

                        'label' => 'Review History',

                        'description' => 'View review history.',

                        'icon' => 'History',

                        'route' => '/performance/reviews/history',

                        'permission_template' => 'read',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Self Assessment
            |--------------------------------------------------------------------------
            */

            'self_assessment' => [

                'label' => 'Self Assessment',

                'description' => 'Employee self performance evaluation.',

                'icon' => 'UserCheck',

                'route' => '/performance/self-assessment',

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
            | Manager Review
            |--------------------------------------------------------------------------
            */

            'manager_review' => [

                'label' => 'Manager Review',

                'description' => 'Manager performance evaluation.',

                'icon' => 'UserCog',

                'route' => '/performance/manager-review',

                'permission_template' => 'approval',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

            ],

            /*
            |--------------------------------------------------------------------------
            | Review Approval
            |--------------------------------------------------------------------------
            */

            'review_approval' => [

                'label' => 'Review Approval',

                'description' => 'Approve finalized performance reviews.',

                'icon' => 'BadgeCheck',

                'route' => '/performance/review-approval',

                'permission_template' => 'approval',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

            ],
                        /*
            |--------------------------------------------------------------------------
            | 360° Feedback
            |--------------------------------------------------------------------------
            */

            'feedback_360' => [

                'label' => '360° Feedback',

                'description' => 'Collect multi-source employee feedback.',

                'icon' => 'MessagesSquare',

                'route' => '/performance/360-feedback',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'feedback_cycles' => [

                        'label' => 'Feedback Cycles',

                        'permission_template' => 'crud',

                        'icon' => 'Repeat',

                        'route' => '/performance/360-feedback/cycles',

                        'api' => true,

                    ],

                    'feedback_templates' => [

                        'label' => 'Feedback Templates',

                        'permission_template' => 'crud',

                        'icon' => 'FileText',

                        'route' => '/performance/360-feedback/templates',

                        'api' => true,

                    ],

                    'feedback_responses' => [

                        'label' => 'Feedback Responses',

                        'permission_template' => 'read',

                        'icon' => 'MessageCircle',

                        'route' => '/performance/360-feedback/responses',

                        'api' => true,

                    ],

                    'feedback_summary' => [

                        'label' => 'Feedback Summary',

                        'permission_template' => 'read',

                        'icon' => 'ChartColumn',

                        'route' => '/performance/360-feedback/summary',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Peer Review
            |--------------------------------------------------------------------------
            */

            'peer_review' => [

                'label' => 'Peer Review',

                'description' => 'Evaluate employees through peer feedback.',

                'icon' => 'UsersRound',

                'route' => '/performance/peer-review',

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
            | Upward Review
            |--------------------------------------------------------------------------
            */

            'upward_review' => [

                'label' => 'Upward Review',

                'description' => 'Employees review their managers.',

                'icon' => 'ArrowUpCircle',

                'route' => '/performance/upward-review',

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
            | Calibration
            |--------------------------------------------------------------------------
            */

            'calibration' => [

                'label' => 'Performance Calibration',

                'description' => 'Normalize performance ratings across teams.',

                'icon' => 'SlidersHorizontal',

                'route' => '/performance/calibration',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'calibration_sessions' => [

                        'label' => 'Calibration Sessions',

                        'permission_template' => 'crud',

                        'icon' => 'CalendarRange',

                        'route' => '/performance/calibration/sessions',

                        'api' => true,

                    ],

                    'rating_adjustments' => [

                        'label' => 'Rating Adjustments',

                        'permission_template' => 'approval',

                        'icon' => 'Sliders',

                        'route' => '/performance/calibration/adjustments',

                        'api' => true,

                    ],

                    'calibration_history' => [

                        'label' => 'Calibration History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/performance/calibration/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Rating Scale
            |--------------------------------------------------------------------------
            */

            'rating_scales' => [

                'label' => 'Rating Scales',

                'description' => 'Configure performance rating scales.',

                'icon' => 'Star',

                'route' => '/performance/rating-scales',

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
            | Performance Scorecards
            |--------------------------------------------------------------------------
            */

            'scorecards' => [

                'label' => 'Performance Scorecards',

                'description' => 'Employee performance scorecards.',

                'icon' => 'ClipboardList',

                'route' => '/performance/scorecards',

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
            | Performance History
            |--------------------------------------------------------------------------
            */

            'performance_history' => [

                'label' => 'Performance History',

                'description' => 'Historical performance records.',

                'icon' => 'History',

                'route' => '/performance/history',

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
            | Continuous Feedback
            |--------------------------------------------------------------------------
            */

            'continuous_feedback' => [

                'label' => 'Continuous Feedback',

                'description' => 'Real-time employee feedback and coaching.',

                'icon' => 'MessageSquareHeart',

                'route' => '/performance/continuous-feedback',

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
            | Performance Improvement Plan (PIP)
            |--------------------------------------------------------------------------
            */

            'performance_improvement_plan' => [

                'label' => 'Performance Improvement Plan (PIP)',

                'description' => 'Manage employee performance improvement plans.',

                'icon' => 'TrendingUp',

                'route' => '/performance/pip',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'pip_list' => [

                        'label' => 'PIP List',

                        'permission_template' => 'crud',

                        'icon' => 'List',

                        'route' => '/performance/pip',

                        'api' => true,

                    ],

                    'pip_templates' => [

                        'label' => 'PIP Templates',

                        'permission_template' => 'crud',

                        'icon' => 'FileText',

                        'route' => '/performance/pip/templates',

                        'api' => true,

                    ],

                    'pip_reviews' => [

                        'label' => 'PIP Reviews',

                        'permission_template' => 'approval',

                        'icon' => 'ClipboardCheck',

                        'route' => '/performance/pip/reviews',

                        'api' => true,

                    ],

                    'pip_history' => [

                        'label' => 'PIP History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/performance/pip/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Individual Development Plan (IDP)
            |--------------------------------------------------------------------------
            */

            'development_plans' => [

                'label' => 'Individual Development Plans',

                'description' => 'Manage employee development plans.',

                'icon' => 'GraduationCap',

                'route' => '/performance/development-plans',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'development_plan_list' => [

                        'label' => 'Development Plans',

                        'permission_template' => 'crud',

                        'icon' => 'NotebookPen',

                        'route' => '/performance/development-plans',

                        'api' => true,

                    ],

                    'career_goals' => [

                        'label' => 'Career Goals',

                        'permission_template' => 'crud',

                        'icon' => 'Target',

                        'route' => '/performance/development-plans/career-goals',

                        'api' => true,

                    ],

                    'learning_recommendations' => [

                        'label' => 'Learning Recommendations',

                        'permission_template' => 'read',

                        'icon' => 'Lightbulb',

                        'route' => '/performance/development-plans/recommendations',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Promotions
            |--------------------------------------------------------------------------
            */

            'promotions' => [

                'label' => 'Promotions',

                'description' => 'Manage employee promotions.',

                'icon' => 'ArrowUpCircle',

                'route' => '/performance/promotions',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'promotion_requests' => [

                        'label' => 'Promotion Requests',

                        'permission_template' => 'approval',

                        'icon' => 'FilePlus2',

                        'route' => '/performance/promotions/requests',

                        'api' => true,

                    ],

                    'promotion_approval' => [

                        'label' => 'Promotion Approval',

                        'permission_template' => 'approval',

                        'icon' => 'BadgeCheck',

                        'route' => '/performance/promotions/approval',

                        'api' => true,

                    ],

                    'promotion_history' => [

                        'label' => 'Promotion History',

                        'permission_template' => 'read',

                        'icon' => 'History',

                        'route' => '/performance/promotions/history',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Succession Planning
            |--------------------------------------------------------------------------
            */

            'succession_planning' => [

                'label' => 'Succession Planning',

                'description' => 'Plan leadership succession and talent readiness.',

                'icon' => 'GitBranchPlus',

                'route' => '/performance/succession',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'successor_pool' => [

                        'label' => 'Successor Pool',

                        'permission_template' => 'crud',

                        'icon' => 'UsersRound',

                        'route' => '/performance/succession/pool',

                        'api' => true,

                    ],

                    'critical_positions' => [

                        'label' => 'Critical Positions',

                        'permission_template' => 'crud',

                        'icon' => 'BriefcaseBusiness',

                        'route' => '/performance/succession/positions',

                        'api' => true,

                    ],

                    'readiness_assessment' => [

                        'label' => 'Readiness Assessment',

                        'permission_template' => 'read',

                        'icon' => 'Gauge',

                        'route' => '/performance/succession/readiness',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Awards & Recognition
            |--------------------------------------------------------------------------
            */

            'awards_recognition' => [

                'label' => 'Awards & Recognition',

                'description' => 'Recognize employee achievements.',

                'icon' => 'Award',

                'route' => '/performance/awards',

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
            | Talent Matrix (9-Box Grid)
            |--------------------------------------------------------------------------
            */

            'talent_matrix' => [

                'label' => 'Talent Matrix (9-Box)',

                'description' => 'Evaluate performance vs potential.',

                'icon' => 'Grid2X2',

                'route' => '/performance/talent-matrix',

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
            | High Potential Employees (HiPo)
            |--------------------------------------------------------------------------
            */

            'high_potential' => [

                'label' => 'High Potential Employees',

                'description' => 'Manage high potential talent.',

                'icon' => 'Sparkles',

                'route' => '/performance/high-potential',

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
            | Performance Reports
            |--------------------------------------------------------------------------
            */

            'reports' => [

                'label' => 'Performance Reports',

                'description' => 'Generate performance reports and summaries.',

                'icon' => 'FileBarChart',

                'route' => '/performance/reports',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'performance_summary_report' => [

                        'label' => 'Performance Summary',

                        'permission_template' => 'read',

                        'icon' => 'ChartColumn',

                        'route' => '/performance/reports/summary',

                        'api' => true,

                    ],

                    'goal_achievement_report' => [

                        'label' => 'Goal Achievement Report',

                        'permission_template' => 'read',

                        'icon' => 'Target',

                        'route' => '/performance/reports/goals',

                        'api' => true,

                    ],

                    'kpi_report' => [

                        'label' => 'KPI Report',

                        'permission_template' => 'read',

                        'icon' => 'Gauge',

                        'route' => '/performance/reports/kpis',

                        'api' => true,

                    ],

                    'review_report' => [

                        'label' => 'Performance Review Report',

                        'permission_template' => 'read',

                        'icon' => 'ClipboardCheck',

                        'route' => '/performance/reports/reviews',

                        'api' => true,

                    ],

                    'promotion_report' => [

                        'label' => 'Promotion Report',

                        'permission_template' => 'read',

                        'icon' => 'ArrowUpCircle',

                        'route' => '/performance/reports/promotions',

                        'api' => true,

                    ],

                    'succession_report' => [

                        'label' => 'Succession Planning Report',

                        'permission_template' => 'read',

                        'icon' => 'GitBranchPlus',

                        'route' => '/performance/reports/succession',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Performance Analytics
            |--------------------------------------------------------------------------
            */

            'analytics' => [

                'label' => 'Performance Analytics',

                'description' => 'Performance KPIs and workforce analytics.',

                'icon' => 'ChartPie',

                'route' => '/performance/analytics',

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

                'label' => 'Import Performance Data',

                'description' => 'Import performance records.',

                'icon' => 'FileUp',

                'route' => '/performance/import',

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

                'label' => 'Export Performance Data',

                'description' => 'Export performance records.',

                'icon' => 'FileDown',

                'route' => '/performance/export',

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

                'description' => 'Perform bulk performance actions.',

                'icon' => 'Boxes',

                'route' => '/performance/bulk',

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

                'label' => 'Performance Notifications',

                'description' => 'Manage performance reminders and notifications.',

                'icon' => 'Bell',

                'route' => '/performance/notifications',

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
            | AI Performance Insights
            |--------------------------------------------------------------------------
            */

            'ai' => [

                'label' => 'AI Performance Insights',

                'description' => 'AI-powered performance intelligence and recommendations.',

                'icon' => 'Bot',

                'route' => '/performance/ai',

                'package_toggle' => true,

                'sidebar' => true,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'goal_recommendations' => [

                        'label' => 'AI Goal Recommendations',

                        'permission_template' => 'read',

                        'icon' => 'Brain',

                        'route' => '/performance/ai/goal-recommendations',

                        'api' => true,

                    ],

                    'promotion_readiness' => [

                        'label' => 'Promotion Readiness',

                        'permission_template' => 'read',

                        'icon' => 'TrendingUp',

                        'route' => '/performance/ai/promotion-readiness',

                        'api' => true,

                    ],

                    'skill_gap_analysis' => [

                        'label' => 'Skill Gap Analysis',

                        'permission_template' => 'read',

                        'icon' => 'SearchCheck',

                        'route' => '/performance/ai/skill-gap',

                        'api' => true,

                    ],

                    'succession_prediction' => [

                        'label' => 'Succession Prediction',

                        'permission_template' => 'read',

                        'icon' => 'Sparkles',

                        'route' => '/performance/ai/succession-prediction',

                        'api' => true,

                    ],

                    'employee_risk_analysis' => [

                        'label' => 'Employee Risk Analysis',

                        'permission_template' => 'read',

                        'icon' => 'ShieldAlert',

                        'route' => '/performance/ai/risk-analysis',

                        'api' => true,

                    ],

                ],

            ],

        ],

    ],

];