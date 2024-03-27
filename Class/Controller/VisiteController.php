<?php

namespace App\Controller;

class VisiteController {
    private $router;
    public function __construct($router)
    {
        $this->router = $router;
    }

    public function displayVisite() {
        require '../views/votre-visite.php';
    }
}