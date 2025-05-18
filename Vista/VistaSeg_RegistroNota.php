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

  <link rel="stylesheet" href="../Vista/css/registroNota.css">

</head>

<body>

  <div class="container">

    <aside class="menu-lateral">

      <h2>📘 Seguimiento de Notas</h2>

      <ul>

        <li><a href="../index.php">Inicio</a></li>

        <li><a href="VistaSeg_MenuPrincipal.php">Notas</a></li>

        <li><a href="#">Registrar Nota</a></li>

        <li><a href="#">Ver Notas por Curso</a></li>

        <li><a href="#">Modificar Nota</a></li>

        <li><a href="#">Historial</a></li>

      </ul>

    </aside>



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

  </div>

</body>

</html>