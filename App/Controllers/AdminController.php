<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Response;

class AdminController extends Controller
{
    public function index(): Response
    {
        // On appelle la vue 'project/index' pour charger views/project/index.php
        return $this->view('admin/index', [
            'title' => 'Bienvenue sur la page Admin',
            'message' => 'Dashboard en cours...'
        ]);
    }
}