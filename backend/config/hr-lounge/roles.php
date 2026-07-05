<?php

return [

    /*
    |--------------------------------------------------------------------------
    | System Roles
    |--------------------------------------------------------------------------
    |
    | Only system level roles.
    | Company custom roles will be stored in database.
    |
    */

    'super_admin' => [

        'name' => 'Super Admin',

        'system' => true,

        'guard' => 'super_admin',

    ],

    'hr_admin' => [

        'name' => 'HR Admin',

        'system' => true,

        'guard' => 'web',

    ],

];