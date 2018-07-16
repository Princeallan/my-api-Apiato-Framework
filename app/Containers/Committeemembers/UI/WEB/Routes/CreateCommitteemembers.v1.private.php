<?php

/** @var Route $router */
$router->get('committeemembers/create', [
    'as' => 'web_committeemembers_create',
    'uses'  => 'Controller@create',
//    'middleware' => [
//      'auth:web',
//    ],
]);
