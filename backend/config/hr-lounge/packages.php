<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Starter
    |--------------------------------------------------------------------------
    */

    'starter' => [

        'name' => 'Starter',

        'slug' => 'starter',

        'description' => 'Suitable for startups and small businesses.',

        'price_monthly' => 9.99,

        'price_yearly' => 99.99,

        'status' => 'active',

        'trial' => [
            'enabled' => true,
            'days' => 14,
        ],

        'limits' => [

            'employees' => 25,
            'admins' => 2,
            'branches' => 1,
            'departments' => 5,
            'storage_gb' => 10,

        ],

        /*
        |--------------------------------------------------------------------------
        | Enabled Modules
        |--------------------------------------------------------------------------
        */

        'modules' => [

            'core',

            'organization',

        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Business
    |--------------------------------------------------------------------------
    */

    'business' => [

        'name' => 'Business',

        'slug' => 'business',

        'description' => 'Growing companies and SMEs.',

        'price_monthly' => 29.99,

        'price_yearly' => 299.99,

        'status' => 'active',

        'trial' => [

            'enabled' => true,

            'days' => 30,

        ],

        'limits' => [

            'employees' => 250,
            'admins' => 10,
            'branches' => 10,
            'departments' => 30,
            'storage_gb' => 100,

        ],

        'modules' => [

            'core',
            'organization',
            'people',
            'operations',
            'finance',
            'communication',

        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Enterprise
    |--------------------------------------------------------------------------
    */

    'enterprise' => [

        'name' => 'Enterprise',

        'slug' => 'enterprise',

        'description' => 'Complete enterprise HR platform.',

        'price_monthly' => 99.99,

        'price_yearly' => 999.99,

        'status' => 'active',

        'trial' => [

            'enabled' => true,

            'days' => 30,

        ],

        'limits' => [

            'employees' => -1,
            'admins' => -1,
            'branches' => -1,
            'departments' => -1,
            'storage_gb' => -1,

        ],

        /*
        |--------------------------------------------------------------------------
        | All Registered Modules
        |--------------------------------------------------------------------------
        */

        'modules' => '*',

    ],

];