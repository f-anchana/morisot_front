<?php
require __DIR__ . '/../vendor/autoload.php';
$uri = $_SERVER['REQUEST_URI'];
$router = new AltoRouter();


$router->map('GET', '/', 'HomeController#displayHome', 'accueil');
$router->map('GET', '/oeuvres', 'OeuvresController#displayOeuvres', 'oeuvres');
$router->map('GET', '/ressources', 'RessourcesController#displayRessources', 'ressources');
$router->map('GET', '/votre-visite', 'VisiteController#displayVisite', 'votre.visite');
$router->map('GET', '/billeterie', 'BilleterieController#displayAccueilBilleterie', 'billeterie.accueil');
$router->map('GET', '/billeterie/merci', 'BilleterieController#displayRemerciements', 'billeterie.merci');
$router->map('GET', '/erreur404', 'ErrorsController#displayError404', 'erreur404');



// $router->map('GET', '/oeuvres', 'oeuvres', 'oeuvres');
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
    require '../views/404.php';
    die;
}

if ($match) {
    
    list($controller, $action) = explode('#', $match['target']);
    $controller = 'App\\Controller\\' . $controller;
    $controller = new $controller($router);
    if (is_callable(array($controller, $action))) {
        call_user_func_array(array($controller,$action), array($match['params']));
    }
    // require_once './src/view/template/footer.php';
}