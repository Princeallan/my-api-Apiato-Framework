<?php

/** @var Route $router */
$router->patch('committees/{id}', [
    'as' => 'web_committees_update',
    'uses'  => 'Controller@update',
    'middleware' => [
      'auth:web',
    ],
]);
