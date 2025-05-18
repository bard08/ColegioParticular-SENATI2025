<!-- historial.html -->
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Historial de Notas</title>
  <link rel="stylesheet" href="../Vista/css/historial.css">
</head>
<body>
  <div class="container">
    <aside class="menu-lateral">

      <ul>
        <li><a href="../index.php">Inicio</a></li>
        <li><a href="VistaSeg_MenuPrincipal.php">Notas</a></li>
        <li><a href="#">Registrar Nota</a></li>
        <li><a href="#">Ver Notas por Curso</a></li>
        <li><a href="#">Modificar Nota</a></li>
        <li><a href="../Vista/historial.php">Historial</a></li> <!-- Enlace actualizado -->
        <li><a href="#">Cursos</a></li>
        <li><a href="#">Profesores</a></li>
        <li><a href="#">Actividades</a></li>
        <li><a href="#">Horarios</a></li>
        <li><a href="#">Reportes</a></li>
        <li><a href="#">Configuración</a></li>
      </ul>
    </aside>

    <main class="contenido">
      <h1>Historial de Notas</h1>
      <p>A continuación se muestra el historial de calificaciones registradas:</p>

      <table>
        <thead>
          <tr>
            <th>Alumno</th>
            <th>Curso</th>
            <th>Actividad</th>
            <th>Nota</th>
            <th>Fecha</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Juan Pérez</td>
            <td>Matemáticas</td>
            <td>Parcial 1</td>
            <td>18</td>
            <td>2025-04-10</td>
          </tr>
          <tr>
            <td>María López</td>
            <td>Lenguaje</td>
            <td>Tarea 2</td>
            <td>15</td>
            <td>2025-04-12</td>
          </tr>
          <!-- Puedes agregar más filas dinámicamente desde la base de datos -->
        </tbody>
      </table>
    </main>
  </div>
</body>
</html>