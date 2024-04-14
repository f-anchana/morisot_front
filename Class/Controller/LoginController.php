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
    public function displaySignUp()
    {
        require '../eng/inscription.php';
    }
    public function createUser()
    {

        // $params=['name'=>'John', 'surname'=>'Doe', 'age'=>36];
        $params = json_encode(['nom_user' => ($_POST['nom_user']), 'prenom_user' => ($_POST['prenom_user']), 'numero' => ($_POST['numero']), 'email' => ($_POST['email']), 'age' => ($_POST['age']), 'mdp1' => ($_POST['mdp1'])]);

        $options = array(

            CURLOPT_URL => 'http://localhost/morisot/API/controller.php/inscription',

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
                $_SESSION['numero'] = $user['numero'];

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
    public function createUserEng()
    {

        // $params=['name'=>'John', 'surname'=>'Doe', 'age'=>36];
        $params = json_encode(['nom_user' => ($_POST['nom_user']), 'prenom_user' => ($_POST['prenom_user']), 'numero' => ($_POST['numero']), 'email' => ($_POST['email']), 'age' => ($_POST['age']), 'mdp1' => ($_POST['mdp1'])]);

        $options = array(

            CURLOPT_URL => 'http://localhost/morisot/API/controller.php/inscription',

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
            header('Location: /login');
            exit();
        } else {
            // L'inscription a échoué
            $erreur = "L'inscription a échoué. Veuillez réessayer.";
            require '../eng/inscription.php';
        }

        return $response;


    }

    public function displayConnexion()
    {
        require '../views/connexion.php';
    }
    public function displayConnect()
    {
        require '../eng/connexion.php';
    }

    public function connectUser()
    {
        $params = json_encode(['email' => ($_POST['email']), 'mdp' => ($_POST['mdp'])]);

        $options = array(

            CURLOPT_URL => 'http://localhost/morisot/API/controller.php/connexion',

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
                $_SESSION['numero'] = $user['numero'];

                header('Location: /mon-espace');
                exit();
            } else {
                // La connexion a échoué
                $erreur = "La connexion a échoué. Veuillez réessayer.";
                // require '../views/connexion.php';
                header('Location: /connexion');
            }

            return $response;
        } else {
            $erreur = "Une erreur s'est produit. Veuillez réessayer ultérieuerement.";
            require '../views/connexion.php';
        }
        return $response;

    }
    public function connectUserEng()
    {
        $params = json_encode(['email' => ($_POST['email']), 'mdp' => ($_POST['mdp'])]);

        $options = array(

            CURLOPT_URL => 'http://localhost/morisot/API/controller.php/connexion',

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
                $_SESSION['numero'] = $user['numero'];


                header('Location: /my-dashboard');
                exit();
            } else {
                // La connexion a échoué
                $erreur = "La connexion a échoué. Veuillez réessayer.";
                header('Location: /login');
            }

            return $response;
        } else {
            $erreur = "Une erreur s'est produit. Veuillez réessayer ultérieuerement.";
            require '../views/connexion.php';
        }
        return $response;

    }

    public function displayConfirmation()
    {
        require '../views/confirmation.php';
    }
    public function displayConfirm()
    {
        require '../eng/confirmation.php';
    }

    public function displayDashboard()
    {
        require '../views/espace_inscris.php';
    }
    public function displayDashboarddd()
    {
        require '../eng/espace_inscris.php';
    }

    public function disconnectUser()
    {
        session_start();
        session_destroy();
        header('Location: /');
        exit();
    }
    public function Usernonconnect()
    {
        session_start();
        session_destroy();
        header('Location: /home');
        exit();
    }


    public function displayReservations()
    {
        // Démarrer la session
        session_start();

        // Vérifier si l'email est défini dans la session
        if (isset($_SESSION['email'])) {
            // Récupérer l'email de l'utilisateur connecté
            $email = $_SESSION['email'];

            // Appeler la fonction pour récupérer les réservations de l'utilisateur
            $reservations = getReservationByPerson($email);

            // Vérifier si des réservations ont été trouvées
            if ($reservations) {
                // Afficher les réservations
                require '../views/mes-reservations.php';
            } else {
                // Afficher un message d'erreur
                $erreur = "Aucune réservation trouvée.";
                require '../views/mon-espace.php';
            }
        } else {
            // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
            header('Location: /connexion');
        }
    }

    public function displayBookings()
    {
        // Démarrer la session
        session_start();

        // Vérifier si l'email est défini dans la session
        if (isset($_SESSION['email'])) {
            // Récupérer l'email de l'utilisateur connecté
            $email = $_SESSION['email'];

            // Appeler la fonction pour récupérer les réservations de l'utilisateur
            $reservations = getReservationByPerson($email);

            // Vérifier si des réservations ont été trouvées
            if ($reservations) {
                // Afficher les réservations
                require '../eng/mes-reservations.php';
            } else {
                // Afficher un message d'erreur
                $erreur = "Aucune réservation trouvée.";
                require '../eng/mon-espace.php';
            }
        } else {
            // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
            header('Location: /login');
        }
    }


    public function displayDonnees()
    {
        // Démarrer la session
        session_start();

        // Vérifier si l'email est défini dans la session
        if (isset($_SESSION['email'])) {
            // Récupérer l'email de l'utilisateur connecté
            $email = $_SESSION['email'];

            // Appeler la fonction pour récupérer les données de l'utilisateur
            $donnees = checkUser($email);

            // Vérifier si des données ont été trouvées
            if ($donnees) {
                // Afficher les données
                require '../views/mes-donnees.php';
            } else {
                // Afficher un message d'erreur
                $erreur = "Aucune donnée trouvée.";
                require '../views/mon-espace.php';
            }
        } else {
            // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
            header('Location: /connexion');
        }
    }


    public function modifierUser()
    {
        // Vérifier si les données du formulaire sont présentes et non vides
        if (isset($_POST['nom'], $_POST['prenom'], $_POST['numero'], $_POST['email'])) {

            // Préparer les données à envoyer à l'API
            $params = json_encode([
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                'numero' => $_POST['numero'],
                'email' => $_POST['email']
            ]);

            // Configuration de la requête CURL
            $options = array(
                CURLOPT_URL => 'http://localhost/morisot/API/controller.php/modifier-informations',
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => $params,
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json'
                ),
                CURLOPT_RETURNTRANSFER => true // Pour récupérer la réponse de l'API
            );

            // Initialiser la session CURL
            $ch = curl_init();

            // Configuration des options CURL
            curl_setopt_array($ch, ($options));

            // Exécuter la requête CURL et récupérer la réponse
            $response = curl_exec($ch);

            // Fermer la session CURL
            curl_close($ch);

            // Vérifier si la réponse de l'API est valide
            if ($response) {
                // La modification a réussi

                // Mettre à jour les données dans la base de données
                updateUser($_POST['nom'], $_POST['prenom'], $_POST['numero'], $_POST['email']);

                // // Mettre à jour les données de session
                $_SESSION['nom'] = $_POST['nom'];
                $_SESSION['prenom'] = $_POST['prenom'];
                $_SESSION['numero'] = $_POST['numero'];

                // Rediriger vers la page de mon-espace
                // header('Location: /mon-espace');
                // exit();
                require '../views/espace_inscris.php';
            } else {
                // La modification a échoué
                $erreur = "La modification a échoué. Veuillez réessayer.";
                header('Location: /mon-espace');
                exit();
            }

        } else {
            // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
            header('Location: /connexion');
            exit();
        }
    }

}