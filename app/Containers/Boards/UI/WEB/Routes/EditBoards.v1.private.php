<?php

/** @var Route $router */
$router->get('boards/{id}/edit', [
    'as' => 'web_boards_edit',
    'uses'  => 'Controller@edit',
    'middleware' => [
      'auth:web',
    ],
]);
