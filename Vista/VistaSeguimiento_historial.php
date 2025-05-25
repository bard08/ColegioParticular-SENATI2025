<!-- historial.html -->
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Historial de Notas</title> 
  <link rel="stylesheet" href="../Vista/css/Seguimiento_historial.css">
</head>
<body>
  <nav>
  <ul class="menu">
    <li><a href="../Vista/VistaSeguimiento_MenuPrincipal.php">Menu Principal</a></li>
    <li><a href="#">Notas</a>
      <ul class="submenu">
        <li><a href="../Vista/VistaSeguimiento_VerNota.php">Ver Nota Por Curso</a></li>
        <li><a href="../Vista/VistaSeguimiento_RegistroNota.php">Registrar Notas</a></li>
        <li><a href="../Vista/VistaSeguimiento_ModificarNota.php">Modificar Notas</a></li>
        <li><a href="../Vista/VistaSeguimiento_historial.php">Historial de Notas</a></li>
      </ul>
    </li>
    <li><a href="#">Cursos</a>
      <ul class="submenu">
        <li><a href="../Vista/VistaSeguimiento_Curso_VerCurso.php">Listado de Curso</a></li>
        <li><a href="../Vista/VistaSeguimiento_Curso_FormularioCurso.php">Formulario de Curso</a></li>
        <li><a href="../Vista/VistaSeguimiento_Curso_ModificarCurso.php">Modificador del Curso</a></li>
        <li><a href="../Vista/VistaSeguimiento_Curso_DetalleCurso.php">Detalles del Curso</a></li>
      </ul>
    </li>
        <li><a href="#">Profesores</a>
      <ul class="submenu">
        <li><a href="../Vista/VistaSeguimiento_Profesor_VerProfesor.php">Listado de Profesores</a></li>
        <li><a href="../Vista/VistaSeguimiento_Profesor_FormularioProfesor.php">Formulario de Profesores</a></li>
        <li><a href="../Vista/VistaSeguimiento_Profesor_ModificarProfesor.php">Modificar Profesores</a></li>
        <li><a href="../Vista/VistaSeguimiento_Profesor_DetallesProfesor.php">Detalles de Profesores</a></li>
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
</body>
</html>