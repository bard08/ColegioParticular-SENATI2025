<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Módulo de Notas</title>
  <link rel="stylesheet" href="../Vista/css/menuprincipal.css">
</head>
<body>

  <!-- Menú lateral -->
  <div class="container">
    <aside class="menu-lateral">
      <h2>📘 Seguimiento de Notas</h2>
      <ul>
        <li><a href="../index.php">Inicio</a></li>
        <li><a href="VistaSeg_RegistroNota.php">Registrar Nota</a></li>
        <li><a href="VistaSeg_VerNota.php">Ver Notas por Curso</a></li>
        <li><a href="VistaSeg_ModificarNota.php">Modificar Nota</a></li>
        <li><a href="historial.php">Historial</a></li>
        <li><a href="#">Cursos</a></li>
        <li><a href="#">Profesores</a></li>
        <li><a href="#">Actividades</a></li>
        <li><a href="#">Horarios</a></li>
        <li><a href="#">Reportes</a></li>
        <li><a href="#">Configuración</a></li>
      </ul>
    </aside>

    <!-- Contenido principal -->
    <main class="contenido">
      <h1>Bienvenido al Módulo de Seguimiento de Notas</h1>
      <p>Este módulo te permite registrar, modificar y consultar las notas de los estudiantes por curso, actividad o periodo. También puedes gestionar actividades académicas, ver reportes y coordinar con los profesores.</p>

      <div class="dashboard">
        <div class="card">
          <h3>Total de Cursos</h3>
          <p>12 cursos</p>
        </div>
        <div class="card">
          <h3>Total de Profesores</h3>
          <p>8 profesores</p>
        </div>
        <div class="card">
          <h3>Notas Registradas</h3>
          <p>245 notas</p>
        </div>
      </div>

      <section class="seccion-info">
        <h2>¿Qué puedes hacer aquí?</h2>
        <ul>
          <li>📌 Registrar notas por actividad, curso o alumno.</li>
          <li>📊 Consultar notas por periodos académicos.</li>
          <li>🛠 Modificar errores en calificaciones registradas.</li>
          <li>📚 Acceder al historial académico.</li>
          <li>🧑‍🏫 Coordinar profesores y sus asignaturas.</li>
        </ul>
      </section>
    </main>
  </div>

</body>
</html>