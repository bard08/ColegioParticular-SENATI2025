<?php   

class Conexion {
    private $server="localhost";
    private $base_datos="colegioparticular";
    private $usuario="root";
    private $contrasena="";
    public $conn;

    public function conectar() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=$this->server;dbname=$this->base_datos;charset=utf8", 
                                  $this->usuario, 
                                  $this->contrasena);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Conectado";
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return $this->conn;
    }
}
?>