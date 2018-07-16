<?php

/** @var Route $router */
$router->get('committees', [
    'as' => 'web_committees_index',
    'uses'  => 'Controller@index',
//    'middleware' => [
//      'auth:web',
//    ],
]);
