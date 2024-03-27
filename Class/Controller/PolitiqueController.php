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
        require '../views/politique.php';
    }
    
    public function displayMentions()
    {
        require '../views/mentions.php';
    }

    public function displayPrix()
    {
        require '../views/politique-prix.php';
    }
}