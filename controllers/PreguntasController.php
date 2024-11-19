<?php

class PreguntasController
{
    public function index()
    {
        ViewController::render('preguntas');
    }

    public function buscar()
    {
        $modelo = new ModelBBDD();
        $query = $_POST['query'] ?? '';
        $filter = $_POST['filter'] ?? '';

        if (empty($filter)) {
            $error = "Debe seleccionar un filtro antes de buscar.";
            ViewController::render('preguntas', ['error' => $error]);
            return;
        }

        $resultados = $modelo->getVistaEnlaces($query, $filter);
        ViewController::render('respuesta', ['resultados' => $resultados]);
    }
}
