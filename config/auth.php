<?php

return [

    'defaults' => [
        'guard' => env('AUTH_GUARD', 'web'),
        'passwords' => env('AUTH_PASSWORD_BROKER', 'users'),
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'officer' => [ 
            'driver' => 'session',
            'provider' => 'officers', 
        ],
    ],

    'providers' => [
    'users' => [
        'driver' => 'eloquent',
        'model' => App\Models\User::class,
    ],

    'officers' => [
        'driver' => 'eloquent',
        'model' => App\Models\Officer_User::class, 
        'table' => 'officer_users',
        'column' => 'officer_email', 
    ],
],

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
        'officers' => [ 
            'provider' => 'officers',
            'table' => 'officer_password_reset_tokens', 
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'password_timeout' => env('AUTH_PASSWORD_TIMEOUT', 10800),

];
