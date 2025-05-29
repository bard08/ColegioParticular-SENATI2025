<?php
require_once __DIR__ . '/../Modelo/ModeloMatricula.php';

class ControllerMatricula {
    public function index() {
        $matriculas= new Matriculas();
        $matriculas = $matriculas->obtenerMatriculas();
        include __DIR__ . '/../Vista/VistaMatricula.php'; // pasa datos a la vista
    }
}
?>