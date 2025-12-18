<?php

use App\Controllers\ProjectController;
use App\Controllers\HomeController;
use App\Core\Router;

return function (Router $router) {
    $router->get('/', [HomeController::class, 'index']);

    $router->get('/project', [ProjectController::class, 'index']);
    $router->get('/project/show', [ProjectController::class, 'show']);
    $router->get('/admin/create', [ProjectController::class, 'create']);
    $router->post('/admin/store', [ProjectController::class, 'store']);
    $router->get('/admin/edit', [ProjectController::class, 'edit']);
    $router->post('/admin/update', [ProjectController::class, 'update']);
    $router->post('/admin/delete', [ProjectController::class, 'delete']);
};
