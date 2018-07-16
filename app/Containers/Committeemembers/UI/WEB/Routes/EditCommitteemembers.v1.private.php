<?php

/** @var Route $router */
$router->get('committeemembers/{id}/edit', [
    'as' => 'web_committeemembers_edit',
    'uses'  => 'Controller@edit',
    'middleware' => [
      'auth:web',
    ],
]);
