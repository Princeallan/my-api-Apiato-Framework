<?php

/** @var Route $router */
$router->get('boards/create', [
    'as' => 'web_boards_create',
    'uses'  => 'Controller@create',
//    'middleware' => [
//      'auth:web',
//    ],
]);