<?php

namespace App\Controller;

class ErrorsController {
    private $router;
    public function __construct($router)
    {
        $this->router = $router;
    }

    public function displayError404() {
        require '../views/404.php';

    }
}