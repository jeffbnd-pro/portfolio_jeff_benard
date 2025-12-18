<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Response;

class ProjectController extends Controller
{
    public function index(): Response
    {
        // On appelle la vue 'project/index' pour charger views/project/index.php
        return $this->view('project/index', [
            'title' => 'Bienvenue sur ma page Projet',
            'message' => 'Voici mes projets :'
        ]);
    }
}