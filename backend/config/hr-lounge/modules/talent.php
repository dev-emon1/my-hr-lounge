<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Performance Management
    |--------------------------------------------------------------------------
    */

    'performance' => [

        'label' => 'Performance Management',

        'description' => 'Performance reviews, KPI, KRA, goals, appraisal and continuous feedback.',

        'group' => 'talent',

        'phase' => 1,

        'icon' => 'Target',

        'route' => '/performance',

        'enabled_by_default' => true,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 310,

        'is_system' => false,

        'is_premium' => false,

        'is_ai' => false,

        'is_unique' => false,

    ],

    /*
    |--------------------------------------------------------------------------
    | Learning Management System
    |--------------------------------------------------------------------------
    */

    'training' => [

        'label' => 'Learning Management System',

        'description' => 'Training courses, learning plans, certifications and employee development.',

        'group' => 'talent',

        'phase' => 1,

        'icon' => 'GraduationCap',

        'route' => '/training',

        'enabled_by_default' => true,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 320,

        'is_system' => false,

        'is_premium' => false,

        'is_ai' => false,

        'is_unique' => false,

    ],

    /*
    |--------------------------------------------------------------------------
    | Career Development
    |--------------------------------------------------------------------------
    */

    'career' => [

        'label' => 'Career Development',

        'description' => 'Career path, promotion, transfer, succession and employee growth.',

        'group' => 'talent',

        'phase' => 2,

        'icon' => 'TrendingUp',

        'route' => '/career',

        'enabled_by_default' => false,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 330,

        'is_system' => false,

        'is_premium' => true,

        'is_ai' => false,

        'is_unique' => false,

    ],

    /*
    |--------------------------------------------------------------------------
    | Succession Planning
    |--------------------------------------------------------------------------
    */

    'succession' => [

        'label' => 'Succession Planning',

        'description' => 'Identify successors and build leadership pipeline.',

        'group' => 'talent',

        'phase' => 2,

        'icon' => 'GitBranch',

        'route' => '/succession',

        'enabled_by_default' => false,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 340,

        'is_system' => false,

        'is_premium' => true,

        'is_ai' => false,

        'is_unique' => true,

    ],

    /*
    |--------------------------------------------------------------------------
    | Competency Management
    |--------------------------------------------------------------------------
    */

    'competency' => [

        'label' => 'Competency Management',

        'description' => 'Skills matrix, competency framework and proficiency tracking.',

        'group' => 'talent',

        'phase' => 2,

        'icon' => 'Brain',

        'route' => '/competency',

        'enabled_by_default' => false,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 350,

        'is_system' => false,

        'is_premium' => true,

        'is_ai' => false,

        'is_unique' => false,

    ],

    /*
    |--------------------------------------------------------------------------
    | OKR Management
    |--------------------------------------------------------------------------
    */

    'okr' => [

        'label' => 'OKR Management',

        'description' => 'Objectives and Key Results tracking across teams.',

        'group' => 'talent',

        'phase' => 2,

        'icon' => 'Flag',

        'route' => '/okr',

        'enabled_by_default' => false,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 360,

        'is_system' => false,

        'is_premium' => true,

        'is_ai' => false,

        'is_unique' => false,

    ],

];