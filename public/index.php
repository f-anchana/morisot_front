<?php
require __DIR__ . '/../vendor/autoload.php';
// $uri = $_SERVER['REQUEST_URI'];
$router = new AltoRouter();



$router->map('GET', '/', 'HomeController#displayHome', 'accueil');
$router->map('GET', '/oeuvres', 'OeuvresController#displayOeuvres', 'oeuvres');
$router->map('GET', '/ressources', 'RessourcesController#displayRessources', 'ressources');
$router->map('GET', '/votre-visite', 'VisiteController#displayVisite', 'votre.visite');
$router->map('GET', '/billeterie', 'BilleterieController#displayAccueilBilleterie', 'billeterie');
$router->map('GET', '/experience', 'ExperienceController#displayExperience', 'experience');
// $router->map('GET', '/billeterie/merci', 'BilleterieController#displayRemerciements', 'billeterie.merci');
$router->map('GET', '/erreur404', 'ErrorsController#displayError404', 'erreur404');
$router->map('GET', '/inscription', 'LoginController#displayInscription', 'inscription');
$router->map('GET', '/connexion', 'LoginController#displayConnexion', 'connexion');
$router->map('GET', '/confirmation', 'LoginController#displayConfirmation', 'confirmation');
$router->map('GET', '/mon-espace', 'LoginController#displayDashboard', 'mon-espace');
$router->map('GET', '/politique-confidentialite', 'PolitiqueController#displayConfidentialite', 'politique-confidentialite');
$router->map('GET', '/mentions-legales', 'PolitiqueController#displayMentions', 'mentions-legales');
$router->map('GET', '/politique-prix', 'PolitiqueController#displayPrix', 'politique-prix');


$router->map('POST', '/inscription', 'LoginController#createUser');
$router->map('POST', '/connexion', 'LoginController#connectUser');
$router->map('POST', '/deconnexion', 'LoginController#disconnectUser');
$router->map('POST', '/reserver', 'BilleterieController#AddReservation', 'reserver');
$router->map('POST', '/commenter', 'ExperienceController#AddComment', 'commenter');





// $router->map('GET', '/oeuvres', 'oeuvres', 'oeuvres'.);
//le 4e paramètre est le nom de la route pour la fonction generate / le 3e est le nom de la page


// Récupère les informations de la route
$match = $router->match();


// // Vérifie si la route a été trouvée
// if ($match !== null && $match !== false) {
//     list($controller, $action) = explode('#', $match['target']);
//     $controller = 'App\\Controller\\' . $controller;
//     $controller = new $controller;
//     if (is_callable(array($controller, $action))) {
//         call_user_func_array(array($controller,$action), array($match['params']));
//     }
// } else {
//     // Route non trouvée, redirige vers la page 404
//     require '../views/404.php';
// }

if (!$match) {
    // echo "404";
    require_once '../views/404.php';
    die;
}

if ($match) {
    // require_once './src/view/template/header.php';
    if (is_string($match['target'])) {
    list($controller, $action) = explode('#', $match['target']);
        $controller = 'App\\Controller\\' . $controller;
        $controller = new $controller($router);
        if (is_callable(array($controller, $action))) {
            call_user_func_array(array($controller,$action), array($match['params']));
        }
    } elseif (is_callable($match['target'])) {
        call_user_func($match['target']);
    }
    // require_once './src/view/template/footer.php';
}

// if (is_string($match['target'])) {
//     list($controller, $action) = explode('#', $match['target']);
//     $controller = 'App\\Controller\\' . $controller;
//     $controller = new $controller($router);
//     if (is_callable(array($controller, $action))) {
//         call_user_func_array(array($controller, $action), array($match['params']));
//     }
// } elseif (is_callable($match['target'])) {
//     call_user_func($match['target']);
// }