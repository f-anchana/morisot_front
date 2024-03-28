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
    public function displayPrivacy()
    {
        require '../eng/politique.php';
    }
    
    public function displayMentions()
    {
        require '../views/mentions.php';
    }
    public function displayNotice()
    {
        require '../eng/mentions.php';
    }

    public function displayPrix()
    {
        require '../views/politique-prix.php';
    }
    public function displayPrice()
    {
        require '../eng/politique-prix.php';
    }
}