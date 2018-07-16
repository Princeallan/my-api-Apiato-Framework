<?php

/** @var Route $router */
$router->delete('committees/{id}', [
    'as' => 'web_committees_delete',
    'uses'  => 'Controller@delete',
    'middleware' => [
      'auth:web',
    ],
]);
