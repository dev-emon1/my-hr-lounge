<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Announcements
    |--------------------------------------------------------------------------
    */

    'announcement' => [

        'label' => 'Announcements',

        'description' => 'Company announcements, circulars and organizational notices.',

        'group' => 'communication',

        'phase' => 1,

        'icon' => 'Megaphone',

        'route' => '/announcements',

        'enabled_by_default' => true,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 610,

        'is_system' => false,

        'is_premium' => false,

        'is_ai' => false,

        'is_unique' => false,

    ],

    /*
    |--------------------------------------------------------------------------
    | Notifications
    |--------------------------------------------------------------------------
    */

    'notification' => [

        'label' => 'Notifications',

        'description' => 'Real-time notifications through web, email, SMS and mobile push.',

        'group' => 'communication',

        'phase' => 1,

        'icon' => 'Bell',

        'route' => '/notifications',

        'enabled_by_default' => true,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 620,

        'is_system' => true,

        'is_premium' => false,

        'is_ai' => false,

        'is_unique' => false,

    ],

    /*
    |--------------------------------------------------------------------------
    | Internal Messaging
    |--------------------------------------------------------------------------
    */

    'messaging' => [

        'label' => 'Internal Messaging',

        'description' => 'Private messaging between employees, managers and HR.',

        'group' => 'communication',

        'phase' => 2,

        'icon' => 'MessageSquare',

        'route' => '/messages',

        'enabled_by_default' => false,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 630,

        'is_system' => false,

        'is_premium' => true,

        'is_ai' => false,

        'is_unique' => false,

    ],

    /*
    |--------------------------------------------------------------------------
    | Surveys & Feedback
    |--------------------------------------------------------------------------
    */

    'survey' => [

        'label' => 'Surveys & Feedback',

        'description' => 'Employee surveys, polls and organizational feedback collection.',

        'group' => 'communication',

        'phase' => 2,

        'icon' => 'ClipboardList',

        'route' => '/surveys',

        'enabled_by_default' => false,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 640,

        'is_system' => false,

        'is_premium' => true,

        'is_ai' => false,

        'is_unique' => false,

    ],

    /*
    |--------------------------------------------------------------------------
    | Events & Calendar
    |--------------------------------------------------------------------------
    */

    'events' => [

        'label' => 'Events & Calendar',

        'description' => 'Company events, meetings, holidays and organizational calendar.',

        'group' => 'communication',

        'phase' => 2,

        'icon' => 'CalendarRange',

        'route' => '/events',

        'enabled_by_default' => false,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 650,

        'is_system' => false,

        'is_premium' => true,

        'is_ai' => false,

        'is_unique' => false,

    ],

    /*
    |--------------------------------------------------------------------------
    | AI Communication Assistant
    |--------------------------------------------------------------------------
    */

    'communication_ai' => [

        'label' => 'AI Communication Assistant',

        'description' => 'AI-powered announcement writing, smart replies and communication suggestions.',

        'group' => 'communication',

        'phase' => 3,

        'icon' => 'Sparkles',

        'route' => '/communication-ai',

        'enabled_by_default' => false,

        'package_toggle' => true,

        'sidebar' => true,

        'order' => 660,

        'is_system' => false,

        'is_premium' => true,

        'is_ai' => true,

        'is_unique' => true,

    ],

];