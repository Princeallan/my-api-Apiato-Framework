<?php

/** @var Route $router */
$router->get('committeemembers', [
    'as' => 'web_committeemembers_index',
    'uses'  => 'Controller@index',
//    'middleware' => [
//      'auth:web',
//    ],
]);
