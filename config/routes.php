<?php

use App\Controllers\HomeController;
use App\Controllers\ProjectController;
use App\Controllers\ContactController;
use App\Controllers\AdminController;
use App\Core\Router;

return function (Router $router) {
    $router->get('/', [HomeController::class, 'index']);

    $router->get('/project', [ProjectController::class, 'index']);
    $router->get('/project/show', [ProjectController::class, 'show']);

    $router->get('/contact', [ContactController::class, 'index']);
    $router->get('/project/show', [ContactController::class, 'show']);



    $router->get('/admin', [AdminController::class, 'index']);
    $router->get('/admin/create', [AdminController::class, 'create']);
    $router->post('/admin/store', [AdminController::class, 'store']);
    $router->get('/admin/edit', [AdminController::class, 'edit']);
    $router->post('/admin/update', [AdminController::class, 'update']);
    $router->post('/admin/delete', [AdminController::class, 'delete']);
};
