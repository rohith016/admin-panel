<?php

return [


    /*
    |--------------------------------------------------------------------------
    | Admin Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application, which will be used when the
    | framework needs to place the application's name in a notification or
    | other UI elements where an application name needs to be displayed.
    |
    */

    'panel_name' => env('APP_NAME', 'Laravel'),

    /*
    |--------------------------------------------------------------------------
    | Admin Application URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | the application so that it's available within Artisan commands.
    |
    */

    'panel_url' => env('APP_URL', 'http://localhost'),


    /*
    |--------------------------------------------------------------------------
    | Admin Application Copyright
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | the application so that it's available within Artisan commands.
    |
    */

    'panel_copyright_year' => env('APP_COPYRIGHT', '2014-2024'),

    /*
    |--------------------------------------------------------------------------
    | Admin Application Menus
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | the application so that it's available within Artisan commands.
    |
    */

    'menu' => [
        [
            'name' => 'Dashboard',
            'url' => '/dashboard',
            'route_name' => 'dashboard',
            'icon' => 'bi bi-speedometer',
        ],
        // [
        //     'name' => 'Users',
        //     'url' => '/users',
        //     'icon' => 'bi bi-people',
        //     'submenu' => [
        //         [
        //             'name' => 'All Users',
        //             'url' => '/users',
        //             'route_name' => 'users.index'
        //         ]
        //     ],
        // ],
        // [
        //     'name' => 'Settings',
        //     'url' => '/settings',
        //     'route_name' => 'settings.index',
        //     'icon' => 'bi bi-gear',
        // ],
    ],
];
