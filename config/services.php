<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'postmark' => [
        'key' => env('POSTMARK_API_KEY'),
    ],

    'resend' => [
        'key' => env('RESEND_API_KEY'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

    // Add to config/services.php

'stripe' => [
    'key' => env('STRIPE_KEY'),
    'secret' => env('STRIPE_SECRET'),
    'webhook_secret' => env('STRIPE_WEBHOOK_SECRET'),
],

'paystack' => [
    'key' => env('PAYSTACK_PUBLIC_KEY'),
    'secret' => env('PAYSTACK_SECRET_KEY'),
    'webhook_secret' => env('PAYSTACK_WEBHOOK_SECRET'),
],

'flutterwave' => [
    'key' => env('FLUTTERWAVE_PUBLIC_KEY'),
    'secret' => env('FLUTTERWAVE_SECRET_KEY'),
    'webhook_secret' => env('FLUTTERWAVE_WEBHOOK_SECRET'),
],

'palmpay' => [
    'api_key' => env('PALMPAY_API_KEY'),
    'api_secret' => env('PALMPAY_API_SECRET'),
    'webhook_secret' => env('PALMPAY_WEBHOOK_SECRET'),
],

];
