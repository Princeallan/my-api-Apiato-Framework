<?php

/** @var Route $router */
$router->get('committees/{id}/edit', [
    'as' => 'web_committees_edit',
    'uses'  => 'Controller@edit',
    'middleware' => [
      'auth:web',
    ],
]);
