<?php
require_once __DIR__ . '/../config/conexion.php';

class Matriculas {
    private $conn;

    public function __construct() {
        $database = new Conexion();
        $this->conn = $database->conectar();
    }

    public function obtenerMatriculas() {
        $sql = "SELECT * FROM renovacion_matricula";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
