<?php
/**
 * Created by PhpStorm.
 * User: PhongTX
 * Date: 05/09/2018
 * Time: 5:55 CH
 */
return [
    'auth'  => [
        'route'       => [
            'prefix'     => '/backend',
            'middleware' => ['web'],
        ],
    ],
    'backend'  => [
        'route'       => [
            'prefix'     => '/backend',
            'namespace'  => 'Backend',
            'middleware' => ['web'],
        ],
    ],
    'frontend' => [
        'route'       => [
            'prefix'     => '/',
            'namespace'  => 'Frontend',
            'middleware' => ['web'],
        ],
    ],
    'api'      => [
        'route'       => [
            'prefix'     => '/api',
            'namespace'  => 'Api',
            'middleware' => ['api'],
        ],
    ],
];
