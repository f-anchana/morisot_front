<?php
require __DIR__ . '/../vendor/autoload.php';
// $uri = $_SERVER['REQUEST_URI'];
$router = new AltoRouter();



$router->map('GET', '/', 'HomeController#displayHome', 'accueil');
$router->map('GET', '/ressources', 'RessourcesController#displayRessources', 'ressources');
$router->map('GET', '/votre-visite', 'VisiteController#displayVisite', 'votre.visite');
$router->map('GET', '/billeterie', 'BilleterieController#displayAccueilBilleterie', 'billeterie');
$router->map('GET', '/experience', 'ExperienceController#displayExperience', 'experience');
$router->map('GET', '/erreur404', 'ErrorsController#displayError404', 'erreur404');
$router->map('GET', '/inscription', 'LoginController#displayInscription', 'inscription');
$router->map('GET', '/connexion', 'LoginController#displayConnexion', 'connexion');
$router->map('GET', '/confirmation', 'LoginController#displayConfirmation', 'confirmation');
$router->map('GET', '/mon-espace', 'LoginController#displayDashboard', 'mon-espace');
$router->map('GET', '/politique-confidentialite', 'PolitiqueController#displayConfidentialite', 'politique-confidentialite');
$router->map('GET', '/mentions-legales', 'PolitiqueController#displayMentions', 'mentions-legales');
$router->map('GET', '/politique-prix', 'PolitiqueController#displayPrix', 'politique-prix');
$router->map('GET', '/Unveiling-the-truth', 'RessourcesController#displayUnveiling', 'Unveiling-the-truth');
$router->map('GET', '/deconnexion', 'LoginController#disconnectUser');
$router->map('GET', '/mes-reservations', 'LoginController#displayReservations', 'mes-reservations');
$router->map('GET', '/mes-donnees', 'LoginController#displayDonnees', 'mes-donnees');
$router->map('GET', '/modifier-reservation', 'BilleterieController#displayModifierReservation', 'modifier-reservation');



$router->map('POST', '/inscription', 'LoginController#createUser');
$router->map('POST', '/connexion', 'LoginController#connectUser');
$router->map('POST', '/reserver', 'BilleterieController#AddReservation', 'reserver');
$router->map('POST', '/commenter', 'ExperienceController#AddComment', 'commenter');
$router->map('POST', '/supprimer_reservation', 'BilleterieController#DeleteReservation', 'supprimer_reservation');
$router->map('POST', '/modifier-informations', 'LoginController#modifierUser', 'modifier-informations');


//La version anglaise
$router->map('GET', '/home', 'HomeController#displayHomeEng', 'home');
$router->map('GET', '/resources', 'RessourcesController#displayResources', 'resources');
$router->map('GET', '/your-visit', 'VisiteController#displayTheVisite', 'your.visit');
$router->map('GET', '/the-experience', 'ExperienceController#displayTheExperience', 'the.experience'); 
$router->map('GET', '/ticketing', 'BilleterieController#displayHomeTicket', 'ticketing');
$router->map('GET', '/login', 'LoginController#displayConnect', 'login');
$router->map('GET', '/disconnect', 'LoginController#Usernonconnect', 'disconnect');
$router->map('GET', '/privacy-policy', 'PolitiqueController#displayPrivacy', 'privacy-policy');
$router->map('GET', '/legal-notice', 'PolitiqueController#displayNotice', 'legal-notice');
$router->map('GET', 'pricing-policy', 'PolitiqueController#displayPrice', 'pricing-policy');
$router->map('GET', '/error404', 'ErrorsController#displayErreur404', 'error404');
$router->map('GET', '/signup', 'LoginController#displaySignUp', 'signup');
$router->map('GET', '/confirm', 'LoginController#displayConfirm', 'confirm');
$router->map('GET', '/my-dashboard', 'LoginController#displayDashboarddd', 'my-dashboard');
$router->map('GET', '/Unveil-the-truth', 'RessourcesController#displayUnveil', 'Unveil-the-truth');
$router->map('GET', '/my-bookings', 'LoginController#displayBookings', 'my-bookings');



$router->map('POST', '/login', 'LoginController#connectUserEng');
$router->map('POST', '/comment', 'ExperienceController#AddCommentEng', 'comment');
$router->map('POST', '/signup', 'LoginController#createUserEng');
$router->map('POST', '/booking', 'BilleterieController#AddBooking');





$router->map('DELETE', '/supprimer_reservation', 'BilleterieController#DeleteReservation');






// $router->map('GET', '/oeuvres', 'oeuvres', 'oeuvres'.);
//le 4e paramètre est le nom de la route pour la fonction generate / le 3e est le nom de la page


// Récupère les informations de la route
$match = $router->match();


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