<?php
declare(strict_types=1);

use App\Controller\{Controller, Error404Controller, HomeController};

require_once __DIR__ . '/../vendor/autoload.php';

$routes = require_once __DIR__ . '/../config/routes.php';

$pathInfo = $_SERVER['PATH_INFO'] ?? '/';
$httpMethod = $_SERVER['REQUEST_METHOD'];

$key = "$httpMethod|$pathInfo";

// Verificar se a rota existe
if (array_key_exists($key, $routes)) {
    $controllerClass = $routes[$key];
    $controller = new $controllerClass();
} else {
    // Instanciando o controlador de erro 404
    $controller = new Error404Controller();
}

/** @var Controller $controller */
$controller->processaRequisicao();
