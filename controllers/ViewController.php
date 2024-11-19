<?php

class ViewController
{
    public static function render($view, $data = [])
    {
        extract($data); // Extrae las variables del array asociativo para usarlas en la vista.
        $viewPath = './views/' . $view . '.php';

        if (file_exists($viewPath)) {
            require './views/header.php';
            require $viewPath;
            require './views/footer.php';
        } else {
            throw new Exception("Vista no encontrada: $view");
        }
    }
}
