<?php

namespace App\Controller;


class PolitiqueController
{

    private $router;
    public function __construct($router)
    {
        $this->router = $router;
    }

    public function displayConfidentialite()
    {
        echo "<!DOCTYPE html>
        <html lang='fr'>";
        require '../views/head.php';
        echo "<body>";
        require '../views/politique.php';
        require '../views/footer.php';
    }
    
    public function displayMentions()
    {
        echo "<!DOCTYPE html>
        <html lang='fr'>";
        require '../views/head.php';
        echo "<body>";
        require '../views/billeterie.php';
    }

    public function displayPrix()
    {
        echo "<!DOCTYPE html>
        <html lang='fr'>";
        require '../views/head.php';
        echo "<body>";
        require '../views/billeterie.php';
    }
}