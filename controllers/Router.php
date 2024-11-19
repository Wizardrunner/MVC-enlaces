<?php

class Router
{
    public function run(){
        $controller = isset($_GET['controller']) ? $_GET['controller'] : 'Preguntas';
        $action = isset($_GET['action']) ? $_GET['action'] : 'index';

        $controllerFile = "./controllers/{$controller}Controller.php";

        if (file_exists($controllerFile)) {
            require_once $controllerFile;

            $controllerClass = "{$controller}Controller";
            $controllerObject = new $controllerClass();

            if (method_exists($controllerObject, $action)) {
                $controllerObject->$action();
            } else {
                echo "Acción no encontrada.";
            }
        } else {
            echo "Controlador no encontrado.";
        }
    }
}
