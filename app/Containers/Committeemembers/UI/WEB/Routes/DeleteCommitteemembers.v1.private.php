<?php

/** @var Route $router */
$router->delete('committeemembers/{id}', [
    'as' => 'web_committeemembers_delete',
    'uses'  => 'Controller@delete',
    'middleware' => [
      'auth:web',
    ],
]);
