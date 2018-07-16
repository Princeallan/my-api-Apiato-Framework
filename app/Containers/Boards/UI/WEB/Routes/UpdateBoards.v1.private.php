<?php

/** @var Route $router */
$router->patch('boards/{id}', [
    'as' => 'web_boards_update',
    'uses'  => 'Controller@update',
    'middleware' => [
      'auth:web',
    ],
]);
