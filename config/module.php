<?php
/**
 * Created by PhpStorm.
 * User: PhongTX
 * Date: 05/09/2018
 * Time: 5:55 CH
 */
return [
    'backend'  => [
        'folder_name' => 'Backend',
        'slug_name'   => 'backend',
        'route'       => [
            'prefix'     => '/backend',
            'namespace'  => 'Backend',
            'middleware' => ['web'],
        ],
    ],
    'frontend' => [
        'folder_name' => 'Frontend',
        'slug_name'   => '',
        'route'       => [
            'prefix'     => '/',
            'namespace'  => 'Frontend',
            'middleware' => ['web'],
        ],
    ],
    'api'      => [
        'folder_name' => 'Api',
        'slug_name'   => 'api',
        'route'       => [
            'prefix'     => '/api',
            'namespace'  => 'Api',
            'middleware' => ['api'],
        ],
    ],
];
