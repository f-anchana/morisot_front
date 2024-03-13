<?php

namespace App\Controller;

class BilleterieController {
    private $router;
    public function __construct($router)
    {
        $this->router = $router;
    }

    public function displayAccueilBilleterie() {
        echo "billeterie";
    }

    public function displayRemerciements() {
        echo "merci :)";
    }
}