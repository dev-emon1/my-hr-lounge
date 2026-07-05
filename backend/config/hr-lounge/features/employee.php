<?php

return [

    'employee' => [

        /*
        |--------------------------------------------------------------------------
        | Module Information
        |--------------------------------------------------------------------------
        */

        'label' => 'Employee Management',

        'description' => 'Complete employee lifecycle management.',

        'icon' => 'Users',

        'route' => '/employees',

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
            | Employee Directory
            |--------------------------------------------------------------------------
            */

            'directory' => [

                'label' => 'Employee Directory',

                'description' => 'Browse, search and manage all employees.',

                'icon' => 'List',

                'route' => '/employees',

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
            | Personal Information
            |--------------------------------------------------------------------------
            */

            'personal_information' => [

                'label' => 'Personal Information',

                'description' => 'Manage employee personal profile information.',

                'icon' => 'User',

                'route' => '/employees/profile',

                'package_toggle' => true,

                'sidebar' => false,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [
                    /*
                    |--------------------------------------------------------------------------
                    | Basic Information
                    |--------------------------------------------------------------------------
                    */

                    'basic_information' => [

                        'label' => 'Basic Information',

                        'description' => 'Manage employee basic profile information.',

                        'icon' => 'User',

                        'route' => '/employees/profile/basic',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Profile Photo & Signature
                    |--------------------------------------------------------------------------
                    */

                    'profile_media' => [

                        'label' => 'Profile Photo & Signature',

                        'description' => 'Manage employee profile photo and signature.',

                        'icon' => 'Image',

                        'route' => '/employees/profile/media',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => false,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Contact Information
                    |--------------------------------------------------------------------------
                    */

                    'contact_information' => [

                        'label' => 'Contact Information',

                        'description' => 'Manage employee phone, email and address.',

                        'icon' => 'Phone',

                        'route' => '/employees/profile/contact',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Emergency Contact
                    |--------------------------------------------------------------------------
                    */

                    'emergency_contact' => [

                        'label' => 'Emergency Contact',

                        'description' => 'Manage employee emergency contact information.',

                        'icon' => 'PhoneCall',

                        'route' => '/employees/profile/emergency',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Family Information
                    |--------------------------------------------------------------------------
                    */

                    'family_information' => [

                        'label' => 'Family Information',

                        'description' => 'Manage spouse, parents and children information.',

                        'icon' => 'Users',

                        'route' => '/employees/profile/family',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Identity Information
                    |--------------------------------------------------------------------------
                    */

                    'identity_information' => [

                        'label' => 'Identity Information',

                        'description' => 'Manage NID, Passport, Driving License and other identities.',

                        'icon' => 'IdCard',

                        'route' => '/employees/profile/identity',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Nationality & Citizenship
                    |--------------------------------------------------------------------------
                    */

                    'nationality' => [

                        'label' => 'Nationality & Citizenship',

                        'description' => 'Manage nationality and citizenship information.',

                        'icon' => 'Globe',

                        'route' => '/employees/profile/nationality',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Personal Details
                    |--------------------------------------------------------------------------
                    */

                    'personal_details' => [

                        'label' => 'Personal Details',

                        'description' => 'Manage religion, marital status, blood group and gender.',

                        'icon' => 'Heart',

                        'route' => '/employees/profile/details',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Languages
                    |--------------------------------------------------------------------------
                    */

                    'languages' => [

                        'label' => 'Languages',

                        'description' => 'Manage spoken and written languages.',

                        'icon' => 'Languages',

                        'route' => '/employees/profile/languages',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => false,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Social Links
                    |--------------------------------------------------------------------------
                    */

                    'social_links' => [

                        'label' => 'Social Links',

                        'description' => 'Manage LinkedIn and other professional profiles.',

                        'icon' => 'Link',

                        'route' => '/employees/profile/social',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => false,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Medical Information
                    |--------------------------------------------------------------------------
                    */

                    'medical_information' => [

                        'label' => 'Medical Information',

                        'description' => 'Manage employee medical records and health information.',

                        'icon' => 'HeartPulse',

                        'route' => '/employees/profile/medical',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => false,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Disabilities
                    |--------------------------------------------------------------------------
                    */

                    'disabilities' => [

                        'label' => 'Disabilities',

                        'description' => 'Manage disability information for accessibility support.',

                        'icon' => 'Accessibility',

                        'route' => '/employees/profile/disabilities',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => false,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Hobbies & Interests
                    |--------------------------------------------------------------------------
                    */

                    'hobbies' => [

                        'label' => 'Hobbies & Interests',

                        'description' => 'Manage employee hobbies and interests.',

                        'icon' => 'Gamepad2',

                        'route' => '/employees/profile/hobbies',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => false,

                        'audit' => false,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Custom Fields
                    |--------------------------------------------------------------------------
                    */

                    'custom_fields' => [

                        'label' => 'Custom Fields',

                        'description' => 'Manage organization specific employee fields.',

                        'icon' => 'Blocks',

                        'route' => '/employees/profile/custom-fields',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                ],
                            /*
            |--------------------------------------------------------------------------
            | Employment
            |--------------------------------------------------------------------------
            */

            'employment' => [

                'label' => 'Employment',

                'description' => 'Manage employee employment lifecycle.',

                'icon' => 'BriefcaseBusiness',

                'route' => '/employees/employment',

                'package_toggle' => true,

                'sidebar' => false,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    /*
                    |--------------------------------------------------------------------------
                    | Employment Details
                    |--------------------------------------------------------------------------
                    */

                    'employment_details' => [

                        'label' => 'Employment Details',

                        'description' => 'Manage employment information.',

                        'icon' => 'FileBadge',

                        'route' => '/employees/employment/details',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Joining Information
                    |--------------------------------------------------------------------------
                    */

                    'joining_information' => [

                        'label' => 'Joining Information',

                        'description' => 'Manage joining date and onboarding details.',

                        'icon' => 'CalendarPlus',

                        'route' => '/employees/employment/joining',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Department
                    |--------------------------------------------------------------------------
                    */

                    'department' => [

                        'label' => 'Department',

                        'description' => 'Assign employee department.',

                        'icon' => 'Building',

                        'route' => '/employees/employment/department',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Designation
                    |--------------------------------------------------------------------------
                    */

                    'designation' => [

                        'label' => 'Designation',

                        'description' => 'Assign employee designation.',

                        'icon' => 'BadgeCheck',

                        'route' => '/employees/employment/designation',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Branch
                    |--------------------------------------------------------------------------
                    */

                    'branch' => [

                        'label' => 'Branch',

                        'description' => 'Assign employee branch.',

                        'icon' => 'MapPinned',

                        'route' => '/employees/employment/branch',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Employment Type
                    |--------------------------------------------------------------------------
                    */

                    'employment_type' => [

                        'label' => 'Employment Type',

                        'description' => 'Manage full-time, part-time, intern and contract employees.',

                        'icon' => 'Briefcase',

                        'route' => '/employees/employment/type',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Employment Status
                    |--------------------------------------------------------------------------
                    */

                    'employment_status' => [

                        'label' => 'Employment Status',

                        'description' => 'Manage active, inactive, suspended and resigned status.',

                        'icon' => 'CircleDot',

                        'route' => '/employees/employment/status',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Reporting Manager
                    |--------------------------------------------------------------------------
                    */

                    'reporting_manager' => [

                        'label' => 'Reporting Manager',

                        'description' => 'Assign reporting manager.',

                        'icon' => 'UserRoundCog',

                        'route' => '/employees/employment/reporting-manager',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Shift Assignment
                    |--------------------------------------------------------------------------
                    */

                    'shift_assignment' => [

                        'label' => 'Shift Assignment',

                        'description' => 'Assign employee working shift.',

                        'icon' => 'Clock3',

                        'route' => '/employees/employment/shift',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Probation
                    |--------------------------------------------------------------------------
                    */

                    'probation' => [

                        'label' => 'Probation',

                        'description' => 'Manage employee probation period.',

                        'icon' => 'Timer',

                        'route' => '/employees/employment/probation',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Confirmation
                    |--------------------------------------------------------------------------
                    */

                    'confirmation' => [

                        'label' => 'Confirmation',

                        'description' => 'Manage employee confirmation process.',

                        'icon' => 'BadgeCheck',

                        'route' => '/employees/employment/confirmation',

                        'permission_template' => 'approval',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Promotion
                    |--------------------------------------------------------------------------
                    */

                    'promotion' => [

                        'label' => 'Promotion',

                        'description' => 'Manage employee promotion history.',

                        'icon' => 'TrendingUp',

                        'route' => '/employees/employment/promotion',

                        'permission_template' => 'approval',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Transfer
                    |--------------------------------------------------------------------------
                    */

                    'transfer' => [

                        'label' => 'Transfer',

                        'description' => 'Manage employee transfers between branches or departments.',

                        'icon' => 'ArrowRightLeft',

                        'route' => '/employees/employment/transfer',

                        'permission_template' => 'approval',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    /*
                    |--------------------------------------------------------------------------
                    | Separation & Exit
                    |--------------------------------------------------------------------------
                    */

                    'separation' => [

                        'label' => 'Separation & Exit',

                        'description' => 'Manage resignation, termination and employee exit.',

                        'icon' => 'LogOut',

                        'route' => '/employees/employment/separation',

                        'permission_template' => 'approval',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                ],

            ],
                        /*
            |--------------------------------------------------------------------------
            | Employee Documents
            |--------------------------------------------------------------------------
            */

            'documents' => [

                'label' => 'Employee Documents',

                'description' => 'Manage employee documents and attachments.',

                'icon' => 'FileText',

                'route' => '/employees/documents',

                'package_toggle' => true,

                'sidebar' => false,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'official_documents' => [

                        'label' => 'Official Documents',

                        'description' => 'Appointment letter, confirmation letter and other official documents.',

                        'icon' => 'FileBadge',

                        'route' => '/employees/documents/official',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    'identity_documents' => [

                        'label' => 'Identity Documents',

                        'description' => 'National ID, Passport, Driving License and related documents.',

                        'icon' => 'IdCard',

                        'route' => '/employees/documents/identity',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    'education_documents' => [

                        'label' => 'Education Documents',

                        'description' => 'Certificates, transcripts and educational documents.',

                        'icon' => 'GraduationCap',

                        'route' => '/employees/documents/education',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    'experience_documents' => [

                        'label' => 'Experience Documents',

                        'description' => 'Previous employment certificates and experience letters.',

                        'icon' => 'BriefcaseBusiness',

                        'route' => '/employees/documents/experience',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                    'other_documents' => [

                        'label' => 'Other Documents',

                        'description' => 'Other employee related documents.',

                        'icon' => 'Folder',

                        'route' => '/employees/documents/others',

                        'permission_template' => 'crud',

                        'package_toggle' => true,

                        'sidebar' => false,

                        'searchable' => true,

                        'audit' => true,

                        'activity_log' => true,

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Education
            |--------------------------------------------------------------------------
            */

            'education' => [

                'label' => 'Education',

                'description' => 'Manage employee education history.',

                'icon' => 'GraduationCap',

                'route' => '/employees/education',

                'permission_template' => 'crud',

                'package_toggle' => true,

                'sidebar' => false,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

            ],

            /*
            |--------------------------------------------------------------------------
            | Experience
            |--------------------------------------------------------------------------
            */

            'experience' => [

                'label' => 'Experience',

                'description' => 'Manage previous employment history.',

                'icon' => 'BriefcaseBusiness',

                'route' => '/employees/experience',

                'permission_template' => 'crud',

                'package_toggle' => true,

                'sidebar' => false,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

            ],

            /*
            |--------------------------------------------------------------------------
            | Skills & Certifications
            |--------------------------------------------------------------------------
            */

            'skills' => [

                'label' => 'Skills & Certifications',

                'description' => 'Manage employee skills, certifications and licenses.',

                'icon' => 'Award',

                'route' => '/employees/skills',

                'permission_template' => 'crud',

                'package_toggle' => true,

                'sidebar' => false,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

            ],

            /*
            |--------------------------------------------------------------------------
            | Bank Information
            |--------------------------------------------------------------------------
            */

            'bank_information' => [

                'label' => 'Bank Information',

                'description' => 'Manage employee banking details.',

                'icon' => 'Landmark',

                'route' => '/employees/bank',

                'permission_template' => 'crud',

                'package_toggle' => true,

                'sidebar' => false,

                'searchable' => false,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

            ],

            /*
            |--------------------------------------------------------------------------
            | Tax Information
            |--------------------------------------------------------------------------
            */

            'tax_information' => [

                'label' => 'Tax Information',

                'description' => 'Manage employee tax and TIN information.',

                'icon' => 'ReceiptText',

                'route' => '/employees/tax',

                'permission_template' => 'crud',

                'package_toggle' => true,

                'sidebar' => false,

                'searchable' => false,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

            ],

            /*
            |--------------------------------------------------------------------------
            | Nominee Information
            |--------------------------------------------------------------------------
            */

            'nominee_information' => [

                'label' => 'Nominee Information',

                'description' => 'Manage employee nominee details.',

                'icon' => 'UsersRound',

                'route' => '/employees/nominees',

                'permission_template' => 'crud',

                'package_toggle' => true,

                'sidebar' => false,

                'searchable' => false,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

            ],
                        /*
            |--------------------------------------------------------------------------
            | Employee Timeline
            |--------------------------------------------------------------------------
            */

            'timeline' => [

                'label' => 'Employee Timeline',

                'description' => 'View complete employee activity timeline.',

                'icon' => 'History',

                'route' => '/employees/timeline',

                'permission_template' => 'read',

                'package_toggle' => true,

                'sidebar' => false,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

            ],

            /*
            |--------------------------------------------------------------------------
            | Employee Notes
            |--------------------------------------------------------------------------
            */

            'notes' => [

                'label' => 'Employee Notes',

                'description' => 'Maintain confidential HR notes.',

                'icon' => 'NotebookPen',

                'route' => '/employees/notes',

                'permission_template' => 'crud',

                'package_toggle' => true,

                'sidebar' => false,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

            ],

            /*
            |--------------------------------------------------------------------------
            | Tags
            |--------------------------------------------------------------------------
            */

            'tags' => [

                'label' => 'Employee Tags',

                'description' => 'Assign custom tags to employees.',

                'icon' => 'Tags',

                'route' => '/employees/tags',

                'permission_template' => 'crud',

                'package_toggle' => true,

                'sidebar' => false,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

            ],

            /*
            |--------------------------------------------------------------------------
            | Custom Fields
            |--------------------------------------------------------------------------
            */

            'employee_custom_fields' => [

                'label' => 'Employee Custom Fields',

                'description' => 'Organization specific employee fields.',

                'icon' => 'Blocks',

                'route' => '/employees/custom-fields',

                'permission_template' => 'crud',

                'package_toggle' => true,

                'sidebar' => false,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

            ],

            /*
            |--------------------------------------------------------------------------
            | Organization Assignment
            |--------------------------------------------------------------------------
            */

            'organization_assignment' => [

                'label' => 'Organization Assignment',

                'description' => 'Manage employee organization assignments.',

                'icon' => 'Building2',

                'route' => '/employees/organization',

                'package_toggle' => true,

                'sidebar' => false,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'department_assignment' => [

                        'label' => 'Department Assignment',

                        'permission_template' => 'crud',

                        'icon' => 'Building',

                        'route' => '/employees/organization/department',

                        'api' => true,

                    ],

                    'branch_assignment' => [

                        'label' => 'Branch Assignment',

                        'permission_template' => 'crud',

                        'icon' => 'MapPinned',

                        'route' => '/employees/organization/branch',

                        'api' => true,

                    ],

                    'designation_assignment' => [

                        'label' => 'Designation Assignment',

                        'permission_template' => 'crud',

                        'icon' => 'BadgeCheck',

                        'route' => '/employees/organization/designation',

                        'api' => true,

                    ],

                    'reporting_manager_assignment' => [

                        'label' => 'Reporting Manager Assignment',

                        'permission_template' => 'crud',

                        'icon' => 'UserRoundCog',

                        'route' => '/employees/organization/reporting-manager',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | Employee Relations
            |--------------------------------------------------------------------------
            */

            'employee_relations' => [

                'label' => 'Employee Relations',

                'description' => 'Employee grievances, counseling and HR relations.',

                'icon' => 'Handshake',

                'route' => '/employees/relations',

                'permission_template' => 'crud',

                'package_toggle' => true,

                'sidebar' => false,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

            ],

            /*
            |--------------------------------------------------------------------------
            | Disciplinary Records
            |--------------------------------------------------------------------------
            */

            'disciplinary_records' => [

                'label' => 'Disciplinary Records',

                'description' => 'Warnings, notices and disciplinary actions.',

                'icon' => 'ShieldAlert',

                'route' => '/employees/disciplinary',

                'permission_template' => 'approval',

                'package_toggle' => true,

                'sidebar' => false,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

            ],

            /*
            |--------------------------------------------------------------------------
            | Awards & Recognition
            |--------------------------------------------------------------------------
            */

            'awards' => [

                'label' => 'Awards & Recognition',

                'description' => 'Employee achievements and recognition.',

                'icon' => 'Trophy',

                'route' => '/employees/awards',

                'permission_template' => 'crud',

                'package_toggle' => true,

                'sidebar' => false,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

            ],

            /*
            |--------------------------------------------------------------------------
            | Employee Archive
            |--------------------------------------------------------------------------
            */

            'archive' => [

                'label' => 'Employee Archive',

                'description' => 'Archived employee records.',

                'icon' => 'Archive',

                'route' => '/employees/archive',

                'permission_template' => 'archive',

                'package_toggle' => true,

                'sidebar' => false,

                'searchable' => true,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

            ],
                        /*
            |--------------------------------------------------------------------------
            | Import Employees
            |--------------------------------------------------------------------------
            */

            'import' => [

                'label' => 'Import Employees',

                'description' => 'Import employee records using CSV or Excel.',

                'icon' => 'FileUp',

                'route' => '/employees/import',

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
            | Export Employees
            |--------------------------------------------------------------------------
            */

            'export' => [

                'label' => 'Export Employees',

                'description' => 'Export employee records in multiple formats.',

                'icon' => 'FileDown',

                'route' => '/employees/export',

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

                'description' => 'Execute bulk actions on multiple employees.',

                'icon' => 'Boxes',

                'route' => '/employees/bulk',

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
            | Employee Self Service
            |--------------------------------------------------------------------------
            */

            'employee_self_service' => [

                'label' => 'Employee Self Service',

                'description' => 'Configure employee self service access.',

                'icon' => 'UserRound',

                'route' => '/employees/ess',

                'package_toggle' => true,

                'sidebar' => false,

                'searchable' => false,

                'audit' => true,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'profile_access' => [

                        'label' => 'Profile Access',

                        'permission_template' => 'toggle',

                        'icon' => 'User',

                        'route' => '/employees/ess/profile',

                        'api' => true,

                    ],

                    'document_access' => [

                        'label' => 'Document Access',

                        'permission_template' => 'toggle',

                        'icon' => 'FileText',

                        'route' => '/employees/ess/documents',

                        'api' => true,

                    ],

                    'personal_update_request' => [

                        'label' => 'Personal Update Request',

                        'permission_template' => 'approval',

                        'icon' => 'Pencil',

                        'route' => '/employees/ess/update-request',

                        'api' => true,

                    ],

                ],

            ],

            /*
            |--------------------------------------------------------------------------
            | AI Features
            |--------------------------------------------------------------------------
            */

            'ai' => [

                'label' => 'AI Employee Assistant',

                'description' => 'AI powered employee insights and recommendations.',

                'icon' => 'Bot',

                'route' => '/employees/ai',

                'package_toggle' => true,

                'sidebar' => false,

                'searchable' => false,

                'audit' => false,

                'activity_log' => true,

                'api' => true,

                'children' => [

                    'employee_summary' => [

                        'label' => 'Employee Summary',

                        'permission_template' => 'read',

                        'icon' => 'FileSearch',

                        'route' => '/employees/ai/summary',

                        'api' => true,

                    ],

                    'career_recommendation' => [

                        'label' => 'Career Recommendation',

                        'permission_template' => 'read',

                        'icon' => 'Sparkles',

                        'route' => '/employees/ai/career',

                        'api' => true,

                    ],

                    'performance_prediction' => [

                        'label' => 'Performance Prediction',

                        'permission_template' => 'read',

                        'icon' => 'BrainCircuit',

                        'route' => '/employees/ai/performance',

                        'api' => true,

                    ],

                    'attrition_prediction' => [

                        'label' => 'Attrition Prediction',

                        'permission_template' => 'read',

                        'icon' => 'TrendingDown',

                        'route' => '/employees/ai/attrition',

                        'api' => true,

                    ],

                    'employee_chat_assistant' => [

                        'label' => 'Employee Chat Assistant',

                        'permission_template' => 'read',

                        'icon' => 'MessageCircleMore',

                        'route' => '/employees/ai/chat',

                        'api' => true,

                    ],

                ],

            ],

        ],

    ],

],
];