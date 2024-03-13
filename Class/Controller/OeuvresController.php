<?php

namespace App\Controller;

class OeuvresController {
    private $router;
    public function __construct($router)
    {
        $this->router = $router;
    }

    public function displayOeuvres() {
        // require '../views/header.php';
        require '../views/oeuvres.php';
    }
}