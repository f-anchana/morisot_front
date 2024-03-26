<?php

namespace App\Controller;

class ExperienceController {
    
    private $router;
    public function __construct($router)
    {
        $this->router = $router;
    }


    public function displayExperience() {
        session_start();
        echo "<!DOCTYPE html>
        <html lang='fr'>";
        require '../views/head.php';
        echo "<body>";
        require '../views/experience.php';
        echo "</body>
        </html>";
    }

}