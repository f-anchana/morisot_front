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
    public function displayHomeTicket() {
        require '../eng/billeterie.php';
    }

   public function AddReservation() {
        $params = json_encode(['nom_client' => ($_POST['nom_client']), 'prenom_client' => ($_POST['prenom_client']) ,'email_client' => ($_POST['email_client']) ,'numero_client' => ($_POST['tel_client']), 'date_choisi' => ($_POST['date']), 'horaire_choisi' => ($_POST['time']), 'prix_tota' => ($_POST['prix_total']), 'nbr_billets' => ($_POST['nbr_billets'])]);

        $options = array(

            CURLOPT_URL => 'https://www.api.ombreetlumiere.eu/controller.php/reserver',

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
   public function AddBooking() {
        $params = json_encode(['nom_client' => ($_POST['nom_client']), 'prenom_client' => ($_POST['prenom_client']) ,'email_client' => ($_POST['email_client']) ,'numero_client' => ($_POST['tel_client']), 'date_choisi' => ($_POST['date']), 'horaire_choisi' => ($_POST['time']), 'prix_tota' => ($_POST['prix_total']), 'nbr_billets' => ($_POST['nbr_billets'])]);

        $options = array(

            CURLOPT_URL => 'https://www.api.ombreetlumiere.eu/controller.php/booking',

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
            header('Location: /confirm');
        } else {
            // La réservation n'a pas été ajoutée
            $erreur = "La réservation n'a pas été ajoutée. Veuillez réessayer.";
            require '../eng/billeterie.php';
        }

        curl_close($ch);
        return $response;
    }

    public function DeleteReservation()
    {
        // Vérifier si l'ID de la réservation est présent dans la requête POST
        if(isset($_POST['id_resa'])) {
            // Récupérer l'ID de la réservation depuis le champ caché
            $id_resa = $_POST['id_resa'];
    
            // Créer les données à envoyer à l'API
            $params = json_encode(['id_resa' => $id_resa]);
    
            // Configuration de la requête CURL
            $options = array(
                CURLOPT_URL => 'https://www.api.ombreetlumiere.eu/controller.php/supprimer_reservation',
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => $params,
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json'
                ),
                CURLOPT_RETURNTRANSFER => true // Ajout de cette option pour récupérer la réponse de la requête
            );
    
            // Initialiser et exécuter la requête CURL
            $ch = curl_init();
            curl_setopt_array($ch, $options);
            $response = curl_exec($ch);
    
            // Vérifier si la requête a réussi
            if ($response) {
                // La suppression a réussi
                header('Location: /mes-reservations');
            } else {
                // La suppression a échoué
                $erreur = "La suppression a échoué. Veuillez réessayer.";
                header('Location: /mon-espace');
            }
    
            // Fermer la connexion CURL
            curl_close($ch);
            return $response;
        } else {
            // Si l'ID de la réservation n'est pas présent dans la requête POST
            // Redirection vers une page d'erreur ou traitement supplémentaire si nécessaire
            header('Location: /erreur404');
        }
    }
    
    

    
    

}

