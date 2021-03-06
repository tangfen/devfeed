<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],


    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model'  => Fedn\Models\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'qq' => [
        'client_id' => env('QQ_KEY'),
        'client_secret' => env('QQ_SECRET'),
        'redirect' => env('QQ_REDIRECT_URI'),
    ],
    'cos' => [
        'enabled' => env('COS_ENABLED', false),
        'credentials' => [
            'secretId' => env('COS_SECRET_ID'),
            'secretKey' => env('COS_SECRET_KEY')
        ],
        'region' => env('COS_REGION', 'ap-guangzhou'),
        'appId' => env('COS_APP_ID', ''),
        'bucket' => env('COS_BUCKET', ''),
        'timeout' => 3600,
        'connect_timeout' => 3600,
        'cdn_url' => env('COS_CDN_URL', 'https://devfeed.ofcdn.com'),
    ],
];
