<?php

namespace App\Controller;

class VisiteController {
    private $router;
    public function __construct($router)
    {
        $this->router = $router;
    }

    public function displayVisite() {
        echo "<!DOCTYPE html>
        <html lang='fr'>";
        require '../views/head.php';
        echo "<body>";
        require '../views/accueil.php';
        echo "</body>
        </html>";
    }
}