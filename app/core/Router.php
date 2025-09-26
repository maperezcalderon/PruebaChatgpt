<?php

namespace App\Core;

class Router
{
    public function dispatch(): void
    {
        $controllerName = $_GET['controller'] ?? 'home';
        $actionName = $_GET['action'] ?? 'inicio';

        $controllerClass = 'App\\Controllers\\' . ucfirst($controllerName) . 'Controller';
        $actionMethod = $actionName . 'Action';

        if (!class_exists($controllerClass)) {
            http_response_code(404);
            echo 'Controlador no encontrado';
            return;
        }

        $controller = new $controllerClass();

        if (!method_exists($controller, $actionMethod)) {
            http_response_code(404);
            echo 'Acción no encontrada';
            return;
        }

        $controller->$actionMethod();
    }
}
