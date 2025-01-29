<?php
// Récupérer l'URL demandée sans le domaine
$request = trim($_SERVER['REQUEST_URI'], '/');

// Si l'URL est vide, afficher la page d'accueil
if ($request == '') {
    require 'views/home.php';
    exit();
}

// Définition des routes
$routes = [
    'Accueil' => 'views/home.php',
    'Nos-tarifs' => 'views/tarifs.php',
    'Nos-vins' => 'views/vins.php',
];

// Vérifier si la route demandée existe
if (array_key_exists($request, $routes)) {
    require $routes[$request];
} else {
    // Page 404
    http_response_code(404);
    echo "Page non trouvée";
}
?>

