<?php

namespace App\Controller;

class ErrorsController {
    private $router;
    public function __construct($router)
    {
        $this->router = $router;
    }

    public function displayError404() {
        echo "<!DOCTYPE html>
        <html lang='fr'>";
        require '../views/head.php';
        echo "<body>";
        require '../views/404.php';
        echo "</body>
        </html>";
    }
}