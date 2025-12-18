<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Response;

class ProjectController extends Controller
{
    public function index(): Response
    {
        return $this->view('home', [
            'title' => 'Bienvenue sur ma page Projet',
            'message' => 'Voici mes projets :'
        ]);
    }
}
