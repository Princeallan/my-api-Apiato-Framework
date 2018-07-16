<?php

/** @var Route $router */
$router->get('committees/{id}', [
    'as' => 'web_committees_show',
    'uses'  => 'Controller@show',
    'middleware' => [
      'auth:web',
    ],
]);
