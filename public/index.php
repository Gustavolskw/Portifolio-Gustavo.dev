<?php
declare(strict_types=1);

use App\Controller\{HomeController, Error404Controller};

require_once __DIR__ . '/../vendor/autoload.php';

// Configuração de rotas
$pathInfo = $_SERVER['PATH_INFO'] ?? '/';
$httpMethod = $_SERVER['REQUEST_METHOD'];

$routes = require_once __DIR__ . '/../config/routes.php';
$key = "$httpMethod|$pathInfo";

if (array_key_exists($key, $routes)) {
    $controllerClass = $routes[$key];
    $controller = new $controllerClass();
} else {
    $controller = new Error404Controller();
}

$controller->processaRequisicao();
