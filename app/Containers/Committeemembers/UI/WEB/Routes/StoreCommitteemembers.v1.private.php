<?php

/** @var Route $router */
$router->post('committeemembers/store', [
    'as' => 'web_committeemembers_store',
    'uses'  => 'Controller@store',
//    'middleware' => [
//      'auth:web',
//    ],
]);
