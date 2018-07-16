<?php

/** @var Route $router */
$router->patch('committeemembers/{id}', [
    'as' => 'web_committeemembers_update',
    'uses'  => 'Controller@update',
    'middleware' => [
      'auth:web',
    ],
]);
