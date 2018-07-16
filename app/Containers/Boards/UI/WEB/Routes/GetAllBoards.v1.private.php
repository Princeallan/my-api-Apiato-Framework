<?php

/** @var Route $router */
$router->get('boards', [
    'as' => 'web_boards_index',
    'uses'  => 'Controller@index',
//    'middleware' => [
//      'auth:web',
//    ],
]);
