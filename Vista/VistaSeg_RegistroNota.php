<?php





// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $curso = $_POST["curso"];
  $estudiante = $_POST["estudiante"];
  $nota = $_POST["nota"];
  $fecha = date("Y-m-d");



  // Insertar la nota en la base de datos
  $sql = "INSERT INTO notas (curso, estudiante, nota, fecha) VALUES ('$curso', '$estudiante', '$nota', '$fecha')";
  if (mysqli_query($conn, $sql)) {
    $mensaje = "Nota registrada correctamente";
  } else {
    $mensaje = "Error al registrar la nota: " . mysqli_error($conn);

  }
}
?>
<!DOCTYPE html>

<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registrar Nota</title>
  <link rel="stylesheet" href="../Vista/css/Seguimiento_registroNota.css">
</head>

<body>
 <nav>
  <ul class="menu">
    <li><a href="../index.php">Inicio</a></li>
    <li><a href="../Vista/VistaSeguimiento_MenuPrincipal.php">Notas</a>
      <ul class="submenu">
        <li><a href="../Vista/VistaSeguimiento_VerNota.php">Ver Nota Por Curso</a></li>
        <li><a href="../Vista/VistaSeguimiento_RegistroNota.php">Registrar Notas</a></li>
        <li><a href="../Vista/VistaSeguimiento_ModificarNota.php">Modificar Notas</a></li>
        <li><a href="../Vista/VistaSeguimiento_historial.php">Historial de Notas</a></li>
      </ul>
    </li>
    <li><a href="#">Cursos</a>
      <ul class="submenu">
        <li><a href="#">Diseño Web</a></li>
        <li><a href="#">Desarrollo</a></li>
        <li><a href="#">SEO</a></li>
      </ul>
    </li>
    <li><a href="#">Profesores</a>
      <ul class="submenu">
        <li><a href="#">Diseño Web</a></li>
        <li><a href="#">Desarrollo</a></li>
        <li><a href="#">SEO</a></li>
      </ul>
    </li>
    <li><a href="#">Actividades</a>
      <ul class="submenu">
        <li><a href="#">Diseño Web</a></li>
        <li><a href="#">Desarrollo</a></li>
        <li><a href="#">SEO</a></li>
      </ul>
    </li>
    <li><a href="#">Horarios</a>
      <ul class="submenu">
        <li><a href="#">Diseño Web</a></li>
        <li><a href="#">Desarrollo</a></li>
        <li><a href="#">SEO</a></li>
      </ul>
    </li>
    <li><a href="#">Contacto</a></li>
  </ul>
</nav>

  <main class="contenido">
      <h1>Registrar Nueva Nota</h1>



      <?php if (isset($mensaje)) echo "<p>$mensaje</p>"; ?>



      <form action="" method="POST">
        <label for="curso">Curso:</label>
        <input type="text" name="curso" required>
        <label for="estudiante">Estudiante:</label>
        <input type="text" name="estudiante" required>
        <label for="nota">Nota:</label>
        <input type="number" name="nota" min="0" max="20" required>
        <button type="submit">Registrar Nota</button>
      </form>

    </main>
</body>
</html>
