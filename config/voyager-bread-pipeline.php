<?php

return [

    /*
     * If enabled for voyager-bread-pipeline package.
     */
    'enabled' => env('VOYAGER_BREAD_PIPELINE_ENABLED', true),

    /*
     * The config_key for voyager-bread-pipeline package.
     */
    'config_key' => env('VOYAGER_BREAD_PIPELINE_CONFIG_KEY', 'joy-voyager-bread-pipeline'),

    /*
     * The route_prefix for voyager-bread-pipeline package.
     */
    'route_prefix' => env('VOYAGER_BREAD_PIPELINE_ROUTE_PREFIX', 'joy-voyager-bread-pipeline'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\VoyagerBreadPipeline\\Http\\Controllers',
    ],
];
