<?php

/** @var Route $router */
$router->delete('boards/{id}', [
    'as' => 'web_boards_delete',
    'uses'  => 'Controller@delete',
    'middleware' => [
      'auth:web',
    ],
]);
