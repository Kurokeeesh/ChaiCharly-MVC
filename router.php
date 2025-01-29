<?php
    // router.php - Gestion des routes
    $uri = trim($_SERVER['REQUEST_URI'], '/');
    
    switch ($uri) {
        case '':
        case 'home':
            require 'controllers/HomeController.php';
            $controller = new HomeController();
            $controller->index();
            break;
        case 'vins':
            require 'controllers/VinsController.php';
            $controller = new VinsController();
            $controller->index();
            break;
        case 'tarifs':
            require 'controllers/TarifsController.php';
            $controller = new TarifsController();
            $controller->index();
            break;
        default:
            echo "404 - Page non trouvée";
            break;
    }
?>
