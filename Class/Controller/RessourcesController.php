<?php

namespace App\Controller;

class RessourcesController {
    private $router;
    public function __construct($router)
    {
        $this->router = $router;
    }

    public function displayRessources() {
        require '../views/ressources.php';
    }

    public function displayUnveiling() {
        require '../views/unveiling.php';
    }
}