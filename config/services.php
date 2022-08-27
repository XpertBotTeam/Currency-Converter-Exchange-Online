<?php

use GuzzleHttp\Client;

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

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'github' => [
        'client_id' => '5e2b69ecd57855750764',
        'client_SECRET' => 'b287ea3dac37078c691b5148869f202bb37409e1',
        'redirect' =>  'http://localhost/laravel_login_github/public/login/github/callback',
    ],
    'google' => [
        'client_id' => '640637922490-4dksnskecol3tkjctq6qoeerosc4g7mm.apps.googleusercontent.com',
        'client_secret' => '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', 
        'redirect' => 'https://0a41-106-212-124-50.ngrok.io/google/callback/'
    ],

];
