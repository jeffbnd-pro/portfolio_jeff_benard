<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Response;

class ContactController extends Controller
{
    public function index(): Response
    {
        // On appelle la vue 'project/index' pour charger views/project/index.php
        return $this->view('contact/index', [
            'title' => 'Mes contacts',
            'message' => 'A venir...'
        ]);
    }
}