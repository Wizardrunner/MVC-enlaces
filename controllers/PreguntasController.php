<?php

require_once './models/ModelBBDD.php';

class PreguntasController
{
    public function index()
    {
        require './views/preguntas.php';
    }

    public function buscar()
    {
        $modelo = new ModelBBDD();
        $query = $_POST['query'] ?? '';
        $filter = $_POST['filter'] ?? '';

        // Validar que se haya seleccionado un filtro
        if (empty($filter)) {
            $error = "Debe seleccionar un filtro antes de buscar.";
            require './views/preguntas.php';
            return;
        }

        // Ejecutar búsqueda según el filtro seleccionado
        $resultados = $modelo->getVistaEnlaces($query, $filter);

        // Mostrar resultados
        require './views/respuesta.php';
    }
}
