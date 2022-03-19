<?php

return [

    /*
     * If enabled for voyager-bread-report package.
     */
    'enabled' => env('VOYAGER_BREAD_REPORT_ENABLED', true),

    /*
     * The config_key for voyager-bread-report package.
     */
    'config_key' => env('VOYAGER_BREAD_REPORT_CONFIG_KEY', 'joy-voyager-bread-report'),

    /*
     * The route_prefix for voyager-bread-report package.
     */
    'route_prefix' => env('VOYAGER_BREAD_REPORT_ROUTE_PREFIX', 'joy-voyager-bread-report'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\VoyagerBreadReport\\Http\\Controllers',
    ],
];
