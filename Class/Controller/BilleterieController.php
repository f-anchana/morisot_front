<?php

namespace App\Controller;

class BilleterieController {
    private $router;
    public function __construct($router)
    {
        $this->router = $router;
    }

    public function displayAccueilBilleterie() {
        echo "<!DOCTYPE html>
        <html lang='fr'>";
        require '../views/head.php';
        echo "<body>";
        require '../views/billeterie.php';
        echo "</body>
        </html>";
    }

    public function AddReservation() {
        $params = json_encode(['nom' => ($_POST['nom']), 'email' => ($_POST['email']), 'date' => ($_POST['date']), 'heure' => ($_POST['heure']), 'nombre' => ($_POST['nombre'])]);

        $options = array(

            CURLOPT_URL => 'http://localhost/morisot/API/controller.php/billeterie',

            CURLOPT_POST => true,

            CURLOPT_POSTFIELDS => $params,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            )
        );

        $ch = curl_init();
        curl_setopt_array($ch, ($options));

        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }

        // var_dump($params);

    // public function displayRemerciements() {
    //     echo "merci :)";
        
    // }
}