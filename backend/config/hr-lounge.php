<?php

return [

    'access_token_expiry_minutes' => env('ACCESS_TOKEN_EXPIRY_MINUTES', 60),
    'refresh_token_expiry_days'   => env('REFRESH_TOKEN_EXPIRY_DAYS', 7),
    'max_login_attempts'          => env('MAX_LOGIN_ATTEMPTS', 5),
    'lockout_duration_minutes'    => env('LOCKOUT_DURATION_MINUTES', 15),

    'static_roles' => [
        'super_admin' => 'Super Admin',
        'hr_admin'    => 'HR Admin',
    ],

    'modules' => [
        ['key' => 'employee',     'label' => 'Employee Management',   'group' => 'core'],
        ['key' => 'attendance',   'label' => 'Attendance Management', 'group' => 'core'],
        ['key' => 'leave',        'label' => 'Leave Management',      'group' => 'core'],
        ['key' => 'payroll',      'label' => 'Payroll & Salary',      'group' => 'core'],
        ['key' => 'recruitment',  'label' => 'Recruitment & ATS',     'group' => 'hr'],
        ['key' => 'performance',  'label' => 'Performance & OKR',     'group' => 'hr'],
        ['key' => 'training',     'label' => 'Training & LMS',        'group' => 'hr'],
        ['key' => 'asset',        'label' => 'Asset Management',      'group' => 'ops'],
        ['key' => 'expense',      'label' => 'Expense & Claims',      'group' => 'ops'],
        ['key' => 'loan',         'label' => 'Loan & Advance',        'group' => 'ops'],
        ['key' => 'document',     'label' => 'Document Management',   'group' => 'ops'],
        ['key' => 'announcement', 'label' => 'Announcements',         'group' => 'comm'],
        ['key' => 'report',       'label' => 'Reports & Analytics',   'group' => 'analytics'],
        ['key' => 'workflow',     'label' => 'Workflow Engine',       'group' => 'system'],
        ['key' => 'audit',        'label' => 'Audit Logs',            'group' => 'system'],
        ['key' => 'role',         'label' => 'Role & Permission',     'group' => 'system'],
        ['key' => 'company',      'label' => 'Company Settings',      'group' => 'system'],
    ],

];