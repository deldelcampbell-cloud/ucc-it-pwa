<?php

return [

    /*
    |--------------------------------------------------------------------------
    | PWA Installation Button
    |--------------------------------------------------------------------------
    */

    'install-button' => true,

    /*
    |--------------------------------------------------------------------------
    | PWA Manifest Configuration
    |--------------------------------------------------------------------------
    */

    'manifest' => [
        'name' => 'University of the Commonwealth Caribbean - IT Student Portal',
        'short_name' => 'UCC IT Portal',
        'background_color' => '#f4f6fa',
        'display' => 'standalone',
        'description' => 'The University of the Commonwealth Caribbean Information Technology Student Portal. Access courses, faculty information, admissions and departmental resources.',
        'theme_color' => '#082b50',
        'icons' => [
            [
                'src' => 'logo.png',
                'sizes' => '512x512',
                'type' => 'image/png',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Debug Configuration
    |--------------------------------------------------------------------------
    */

    'debug' => env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Livewire Integration
    |--------------------------------------------------------------------------
    */

    'livewire-app' => false,
];
