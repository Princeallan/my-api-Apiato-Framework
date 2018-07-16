<?php

/** @var Route $router */
$router->get('committees/create', [
    'as' => 'web_committees_create',
    'uses'  => 'Controller@create',
//    'middleware' => [
//      'auth:web',
//    ],
]);
