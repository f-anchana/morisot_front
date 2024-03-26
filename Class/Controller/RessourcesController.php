<?php

namespace App\Controller;

class RessourcesController {
    private $router;
    public function __construct($router)
    {
        $this->router = $router;
    }

    public function displayRessources() {
        echo "<!DOCTYPE html>
        <html lang='fr'>";
        require '../views/head.php';
        echo "<body>";
        require '../views/ressources.php';
        echo "</body>
        </html>";
    }

    public function displayUnveiling() {
        echo "<!DOCTYPE html>
        <html lang='fr'>";
        require '../views/head.php';
        echo "<body>";
        require '../views/unveiling.php';
        echo "</body>
        </html>";
    }
}