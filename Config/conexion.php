<?php   
$server="localhost";
$usuario="root";
$contrasena="";
$base_datos="colegioparticular";

try {
    $conn=new PDO("mysql:host=$server;dbname=$base_datos",$usuario,$contrasena);
    $conn->setAttribute(PDO:: ATTR_ERRMODE,PDO:: ERRMODE_EXCEPTION);
    // echo "Conectado";
} catch (PDOException $e) {
    echo "Error ".$e->getMessage();
}


?>