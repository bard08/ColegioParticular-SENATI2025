<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Módulo de Notas</title>
  <link rel="stylesheet" href="../Vista/css/Seguimiento_menuprincipal.css"> 
</head>
<body>

  <!-- Menú lateral -->
<nav>
  <ul class="menu">
    <li><a href="../index.php">Inicio</a></li>
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
    </li>>
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

    <!-- Contenido principal -->
    <div class="contenido">
        <div class="bienvenida">
            <div class="bienvenida-texto">
                <h1>Bienvenido al Módulo de Seguimiento de Notas</h1>
                <p>
                    Este módulo te permite registrar, modificar y consultar las notas de los estudiantes por curso,
                    actividad o período. También puedes gestionar actividades académicas, ver reportes y coordinar con los profesores.
                </p>
                <p><em>"La educación es el arma más poderosa para cambiar el mundo." - Nelson Mandela</em></p>
            </div>
            <div class="imagen-educacion">
            <img src="../Vista/css/Imagen/educacion.jpg" alt="Imagen educativa">
            </div>
        </div>

        <div class="resumen">
            <div class="tarjeta">
                <h3>Total de Cursos</h3>
                <p>12 cursos</p>
            </div>
            <div class="tarjeta">
                <h3>Total de Profesores</h3>
                <p>8 profesores</p>
            </div>
            <div class="tarjeta">
                <h3>Notas Registradas</h3>
                <p>245 notas</p>
            </div>
        </div>

        <div class="acciones">
            <h2>¿Qué puedes hacer aquí?</h2>
            <ul>
                <li>📝 Registrar notas por actividad, curso o alumno.</li>
                <li>📊 Consultar notas por períodos académicos.</li>
                <li>🛠️ Modificar errores en calificaciones registradas.</li>
                <li>📚 Acceder al historial académico.</li>
                <li>👨‍🏫 Coordinar profesores y sus asignaturas.</li>
            </ul>
        </div>
    </div>

</body>
<footer class="footer">
  <div class="footer-content">
    <p>&copy; 2025 Colegio Particular. Todos los derechos reservados.</p>
    <p>Desarrollado por el equipo de seguimiento de notas :D</p>
  </div>
</footer>
</html>