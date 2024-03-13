<?php

namespace App\Controller;

class HomeController {
    private $router;
    public function __construct($router)
    {
        $this->router = $router;
    }

    public function displayHome() {
        require '../views/header.php';
        require '../views/accueil.php';
        echo "home";
    }
}