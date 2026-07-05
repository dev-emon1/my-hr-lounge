<?php

return [

    'access_token_expiry_minutes' => env('ACCESS_TOKEN_EXPIRY_MINUTES', 60),

    'refresh_token_expiry_days' => env('REFRESH_TOKEN_EXPIRY_DAYS', 7),

    'max_login_attempts' => env('MAX_LOGIN_ATTEMPTS', 5),

    'lockout_duration_minutes' => env('LOCKOUT_DURATION_MINUTES', 15),

];