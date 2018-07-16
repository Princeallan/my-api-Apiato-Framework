<?php

/** @var Route $router */
$router->get('committeemembers/{id}', [
    'as' => 'web_committeemembers_show',
    'uses'  => 'Controller@show',
    'middleware' => [
      'auth:web',
    ],
]);
