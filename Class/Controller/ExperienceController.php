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

    public function AddComment()
    {
        $params = json_encode(['commentaire' => ($_POST['commentaire']), 'id_user' => ($_POST['id_user'])]);

        $options = array(

            CURLOPT_URL => 'https://www.ombreetlumiere.eu/API/controller.php/commenter',

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

        // Vérifier la réponse de l'API
        if ($response) {
            // Le commentaire a été ajouté
            $youpi = "Le commentaire a été ajouté.";
            // require '../views/experience.php';
            header('Location: /experience');
        } else {
            // Le commentaire n'a pas été ajouté
            $erreur = "Le commentaire n'a pas été ajouté. Veuillez réessayer.";
            require '../views/experience.php';
        }

        return $response;
    }

}