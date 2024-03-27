<?php

namespace App\Controller;

require '../../API/model.php';

class LoginController
{
    private $router;
    public function __construct($router)
    {
        $this->router = $router;
    }

    public function displayInscription()
    {
        require '../views/inscription.php';
    }
    public function createUser()
    {

        // $params=['name'=>'John', 'surname'=>'Doe', 'age'=>36];
        $params = json_encode(['nom_user' => ($_POST['nom_user']), 'prenom_user' => ($_POST['prenom_user']), 'numero' => ($_POST['numero']), 'email' => ($_POST['email']), 'age' => ($_POST['age']), 'mdp1' => ($_POST['mdp1'])]);

        $options = array(

            CURLOPT_URL => 'https://www.ombreetlumiere.eu/API/controller.php/inscription',

            CURLOPT_POST => true,

            CURLOPT_POSTFIELDS => $params,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            )
        );
        // var_dump($params);


        $ch = curl_init();

        curl_setopt_array($ch, ($options));

        $response = curl_exec($ch);
        curl_close($ch);


        // Vérifier la réponse de l'API
        if ($response) {
            // L'inscription a réussi
            session_start();
            $user = checkUser($_POST['email']);

            // Vérifier si l'utilisateur existe
            if ($user) {
                // Stocker les données de l'utilisateur dans la session
                $_SESSION['id'] = $user['id'];
                $_SESSION['nom'] = $user['nom'];
                $_SESSION['prenom'] = $user['prenom'];
                $_SESSION['email'] = $user['email'];
            }

            $youpi = "Inscription réussie. Vous pouvez vous connecter.";
            header('Location: /connexion');
            exit();
        } else {
            // L'inscription a échoué
            $erreur = "L'inscription a échoué. Veuillez réessayer.";
            require '../views/inscription.php';
        }

        return $response;


    }

    public function displayConnexion()
    {
        require '../views/connexion.php';
    }

    public function connectUser()
    {
        $params = json_encode(['email' => ($_POST['email']), 'mdp' => ($_POST['mdp'])]);

        $options = array(

            CURLOPT_URL => 'https://www.ombreetlumiere.eu/API/controller.php/connexion',

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
            // La connexion a réussi
            session_start();
            // Récupérer les données de l'utilisateur depuis la fonction checkUserLogin
            $user = checkUserLogin($_POST['email'], $_POST['mdp']);

            // Vérifier si l'utilisateur existe
            if ($user) {
                // Stocker les données de l'utilisateur dans la session
                $_SESSION['id_user'] = $user['id_user'];
                $_SESSION['nom'] = $user['nom'];
                $_SESSION['prenom'] = $user['prenom'];
                $_SESSION['email'] = $_POST['email'];

                header('Location: /mon-espace');
                exit();
            } else {
                // La connexion a échoué
                $erreur = "La connexion a échoué. Veuillez réessayer.";
                require '../views/connexion.php';
            }

            return $response;
        }else{
            $erreur = "Une erreur s'est produit. Veuillez réessayer ultérieuerement.";
            require '../views/connexion.php';
        }
    }

    public function displayConfirmation()
    {
        require '../views/confirmation.php';
    }

    public function displayDashboard()
    {
        require '../views/mon-espace.php';
    }

    public function disconnectUser()
    {
        session_start();
        session_destroy();
        header('Location: /');
        exit();
    }

   

}
