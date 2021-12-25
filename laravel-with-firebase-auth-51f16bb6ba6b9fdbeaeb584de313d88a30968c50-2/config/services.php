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

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
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

    'firebase' => [
      'api_key' => 'AIzaSyAkiW1OxH3fATENTTlG-VgyiQtuGUkLkB0',
      'auth_domain' => 'yazlabprojeveritabani.firebaseapp.com',
      'database_url' => 'https://yazlabprojeveritabani-default-rtdb.europe-west1.firebasedatabase.app',
      'project_id' => 'yazlabprojeveritabani',
      'storage_bucket' => 'yazlabprojeveritabani.appspot.com',
      'messaging_sender_id' => '811704115578',
      'app_id' => '1:811704115578:web:bafba929c9ccbaa1a0b6c3',
      'measurement_id' => 'G-E3XY48Y3P7',
  ],
];
