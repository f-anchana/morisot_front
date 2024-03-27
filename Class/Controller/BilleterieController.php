<?php

namespace App\Controller;

require '../../API/model.php';

class BilleterieController {
    private $router;
    public function __construct($router)
    {
        $this->router = $router;
    }

    public function displayAccueilBilleterie() {
        require '../views/billeterie.php';
    }

   public function AddReservation() {
        $params = json_encode(['nom_client' => ($_POST['nom_client']), 'prenom_client' => ($_POST['prenom_client']) ,'email_client' => ($_POST['email_client']) ,'numero_client' => ($_POST['tel_client']), 'date_choisi' => ($_POST['date']), 'horaire_choisi' => ($_POST['time']), 'prix_tota' => ($_POST['prix_total']), 'nbr_billets' => ($_POST['nbr_billets'])]);

        $options = array(

            CURLOPT_URL => 'http://localhost/morisot/API/controller.php/reserver',

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

            SendReservation($_POST['nom_client'], $_POST['prenom_client'], $_POST['email_client'], $_POST['tel_client'], $_POST['date'], $_POST['time'], $_POST['prix_total'], $_POST['nbr_billets']);

            var_dump($response);
            header('Location: /confirmation');
        } else {
            // La réservation n'a pas été ajoutée
            $erreur = "La réservation n'a pas été ajoutée. Veuillez réessayer.";
            require '../views/billeterie.php';
        }

        curl_close($ch);
        return $response;
    }

    public function DeleteReservation($id)
    {
        
    }
}