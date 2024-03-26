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
        require '../views/footer.php';
    }

    public function AddReservation() {
        $params = json_encode(['nom_client' => ($_POST['nom_client']), 'prenom_client' => ($_POST['prenom_client']) ,'email_client' => ($_POST['email_client']) ,'numero_client' => ($_POST['tel_client']), 'date_choisi' => ($_POST['date']), 'horaire_choisi' => ($_POST['time'])]);

        $options = array(

            CURLOPT_URL => 'https://www.ombreetlumiere.eu/API/controller.php/reserver',

            CURLOPT_POST => true,

            CURLOPT_POSTFIELDS => $params,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            )
        );

        $ch = curl_init();
        curl_setopt_array($ch, ($options));

        $response = curl_exec($ch);

        // Vérifier la réponse de l'API
        if ($response) {
            // La réservation a été ajoutée
            $youpi = "La réservation a été ajoutée.";
            // require '../views/experience.php';
            SendReservation($_POST['nom_client'], $_POST['prenom_client'], $_POST['email_client'], $_POST['tel_client'], $_POST['date'], $_POST['time']);
            header('Location: /confirmation');
        } else {
            // La réservation n'a pas été ajoutée
            $erreur = "La réservation n'a pas été ajoutée. Veuillez réessayer.";
            require '../views/billeterie.php';
        }

        curl_close($ch);
        return $response;
    }

        // var_dump($params);

    // public function displayRemerciements() {
    //     echo "merci :)";
        
    // }
}