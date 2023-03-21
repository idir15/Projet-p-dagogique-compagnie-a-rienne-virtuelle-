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
    
    /*
    'mailgun' => [
        'domain' => 'sandbox72145a33811b45ed9d7bb28daabde69d.mailgun.org',
        'secret' => '5f5c69904a139acce3e7fe8b663cb98a-713d4f73-5a617e5e',
    ],
    */
    'mailgun' => [
        //'domain' => env('MAILGUN_DOMAIN'),
        'domain' => 'sandbox72145a33811b45ed9d7bb28daabde69d.mailgun.org',

        //'secret' => env('MAILGUN_SECRET'),
        'secret' => '5f5c69904a139acce3e7fe8b663cb98a-713d4f73-5a617e5e',

        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

];
