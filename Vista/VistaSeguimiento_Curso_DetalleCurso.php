<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalles del Curso</title>
    <link rel="stylesheet" href="../Vista/css/Seguimiento_Curso_DetallesCurso.css"> <!-- Usa tu mismo CSS -->
</head>
<body>
 <!-- Menú lateral --------------------------------------------------------------------------------------------->
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
<!------------------------------------------------------------------------------------------------------------>

        <div class="contenedor-tarjetas">
        <!-- Curso 1 -->
        <div class="tarjeta-curso">
            <h3>Matemática Básica</h3>
            <p><strong>Profesor:</strong> Juan Pérez</p>
            <p><strong>Día:</strong> Lunes</p>
            <p><strong>Hora:</strong> 08:00 - 10:00</p>
            <p><strong>Nivel:</strong> Básico</p>
            <p><strong>Aula:</strong> 101</p>
            <form action="../Vista/VistaSeguimiento_Curso_ModificarCurso.php" method="GET">
                <input type="hidden" name="id" value="1">
                <button type="submit">Modificar</button>
            </form>
        </div>

        <!-- Curso 2 -->
        <div class="tarjeta-curso">
            <h3>Lenguaje y Comunicación</h3>
            <p><strong>Profesor:</strong> Carla Rodríguez</p>
            <p><strong>Día:</strong> Martes</p>
            <p><strong>Hora:</strong> 09:00 - 11:00</p>
            <p><strong>Nivel:</strong> Intermedio</p>
            <p><strong>Aula:</strong> 202</p>
            <form action="../Vista/VistaSeguimiento_Curso_ModificarCurso.php" method="GET">
                <input type="hidden" name="id" value="2">
                <button type="submit">Modificar</button>
            </form>
        </div>

        <!-- Curso 3 -->
        <div class="tarjeta-curso">
            <h3>Ciencias Naturales</h3>
            <p><strong>Profesor:</strong> Luis Mendoza</p>
            <p><strong>Día:</strong> Miércoles</p>
            <p><strong>Hora:</strong> 10:00 - 12:00</p>
            <p><strong>Nivel:</strong> Avanzado</p>
            <p><strong>Aula:</strong> 303</p>
            <form action=../Vista/VistaSeguimiento_Curso_ModificarCurso.php" method="GET">
                <input type="hidden" name="id" value="3">
                <button type="submit">Modificar</button>
            </form>
        </div>

        <!-- Curso 4 -->
        <div class="tarjeta-curso">
            <h3>Educación Física</h3>
            <p><strong>Profesor:</strong> Rosa Silva</p>
            <p><strong>Día:</strong> Jueves</p>
            <p><strong>Hora:</strong> 07:30 - 09:30</p>
            <p><strong>Nivel:</strong> Básico</p>
            <p><strong>Aula:</strong> Patio Central</p>
            <form action="../Vista/VistaSeguimiento_Curso_ModificarCurso.php" method="GET">
                <input type="hidden" name="id" value="4">
                <button type="submit">Modificar</button>
            </form>
        </div>
    </div>
</body>
</html>