<?php

spl_autoload_register(function ($class) {
    $paths = ['./controllers/', './models/'];
    foreach ($paths as $path) {
        $file = $path . $class . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
    throw new Exception("Clase no encontrada: $class");
});
