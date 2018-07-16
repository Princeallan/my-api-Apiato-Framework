<?php

/** @var Route $router */
$router->post('committees/store', [
    'as' => 'web_committees_store',
    'uses'  => 'Controller@store',
//    'middleware' => [
//      'auth:web',
//    ],
]);
