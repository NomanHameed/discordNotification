<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default Settings
    |--------------------------------------------------------------------------
    */
    'default_username' => env('DISCORD_DEFAULT_USERNAME', config('app.name')),
    'default_avatar_url' => env('DISCORD_DEFAULT_AVATAR_URL'),

    /*
    |--------------------------------------------------------------------------
    | Timeout Settings
    |--------------------------------------------------------------------------
    */
    'timeout' => env('DISCORD_TIMEOUT', 10),

    /*
    |--------------------------------------------------------------------------
    | Discord Channels
    |--------------------------------------------------------------------------
    | Define your Discord channels with their webhook URLs here.
    */
    'channels' => [
        'general' => [
            'webhook_url' => env('DISCORD_GENERAL_WEBHOOK_URL'),
            'username' => env('DISCORD_GENERAL_USERNAME'),
            'avatar_url' => env('DISCORD_GENERAL_AVATAR_URL'),
        ],
        'alerts' => [
            'webhook_url' => env('DISCORD_ALERTS_WEBHOOK_URL'),
            'username' => env('DISCORD_ALERTS_USERNAME'),
            'avatar_url' => env('DISCORD_ALERTS_AVATAR_URL'),
        ],
        'logs' => [
            'webhook_url' => env('DISCORD_LOGS_WEBHOOK_URL'),
            'username' => env('DISCORD_LOGS_USERNAME'),
            'avatar_url' => env('DISCORD_LOGS_AVATAR_URL'),
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Error Handling
    |--------------------------------------------------------------------------
    */
    'log_errors' => env('DISCORD_LOG_ERRORS', true),
    'throw_exceptions' => env('DISCORD_THROW_EXCEPTIONS', false),
];
