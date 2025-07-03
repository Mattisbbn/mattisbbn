<?php
use FastRoute\Dispatcher;
use FastRoute\RouteCollector;
use function FastRoute\simpleDispatcher;


$dispatcher = simpleDispatcher(function(RouteCollector $router) {
    require_once __DIR__ . '/../app/Router/web.php';
});

function handleRoutes($httpMethod, $uri) {
    global $dispatcher;
    $routeInfo = $dispatcher->dispatch($httpMethod, $uri);
    
    switch ($routeInfo[0]) {
        case Dispatcher::NOT_FOUND:
            http_response_code(404);
            echo "<h1>Page non trouvée</h1>";
            echo "<p>L'URL '$uri' n'existe pas.</p>";
            echo "<p><a href='/'>Retour à l'accueil</a></p>";
            break;
            
        case Dispatcher::METHOD_NOT_ALLOWED:
            http_response_code(405);
            echo "<h1>Méthode non autorisée</h1>";
            echo "<p>Cette page n'accepte pas la méthode $httpMethod.</p>";
            break;
            
        case Dispatcher::FOUND:
            $handler = $routeInfo[1];
            $params = $routeInfo[2];
            
            if (is_array($handler)) {
                $controller = new $handler[0]();
                $method = $handler[1];
                $result = call_user_func_array([$controller, $method], $params);
                
                // Si le contrôleur retourne une vue, l'afficher
                if (is_string($result)) {
                    echo $result;
                }
            } else {
                // Ancien système avec fonctions simples (pour compatibilité)
                call_user_func_array($handler, $params);
            }
            break;
    }
}





$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}

$uri = rawurldecode($uri);

handleRoutes($httpMethod, $uri);
