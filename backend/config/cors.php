<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | This configuration file determines what cross-origin operations may
    | be executed in web browsers. You are free to adjust these settings
    | as needed.
    |
    */

    'paths' => [
        '/tasks',
        'api/tasks',
    ],

    'allowed_methods' => ['*'], // Allow all HTTP methods

    'allowed_origins' => ['*'], // Allow all domains (you can restrict later)

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'], // Allow all request headers

    'exposed_headers' => [], // You can list headers that should be exposed

    'max_age' => 0, // Preflight cache time (in seconds)

    'supports_credentials' => false, // Set to true if sending cookies/auth headers

];
