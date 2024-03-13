<?php

namespace App\Controller;

class HomeController {
    private $router;
    public function __construct($router)
    {
        $this->router = $router;
    }

    public function displayHome() {
        echo "<!DOCTYPE html>
        <html lang='fr'>";
        require '../views/head.php';
        echo "<body>";
        require '../views/header.php';
        require '../views/accueil.php';
        require '../views/footer.php';
        echo "</body>
        </html>";
    }
}