<?php

/** @var Route $router */
$router->get('boards/{id}', [
    'as' => 'web_boards_show',
    'uses'  => 'Controller@show',
    'middleware' => [
      'auth:web',
    ],
]);
