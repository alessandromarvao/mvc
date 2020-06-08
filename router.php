<?php

$router = new SON\Router;

$router['/'] = [
    'class' => App\Controllers\UserController::class,
    'action' => 'index'
];

return $router;