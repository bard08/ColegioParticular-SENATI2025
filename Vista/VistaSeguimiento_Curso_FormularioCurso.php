<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Curso</title> 
    <link rel="stylesheet" href="../Vista/css/Seguimiento_Curso_ListadoCurso.css">
</head>
<div>
<!-- Menú Horizontal -------------------------------------------------------------------------->
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
<!------------------------------------------------------------------------------------------------------>
<h2>Formulario de Registro de Curso</h2>
<div class="contenedor-formulario">
<form action="procesar_registroCurso.php" method="post" class="formulario-curso">
    <label for="nombre_curso">Nombre del Curso:</label>
    <input type="text" id="nombre_curso" name="nombre_curso" required>

    <label for="descripcion">Descripción:</label>
    <textarea id="descripcion" name="descripcion" rows="3" required></textarea>

    <label for="estado_curso">Estado:</label>
    <select id="estado_curso" name="estado_curso" required>
        <option value="Activo">Activo</option>
        <option value="Inactivo">Inactivo</option>
    </select>

    <label for="nivel_curso">Nivel:</label>
    <select id="nivel_curso" name="nivel_curso" required>
        <option value="Básico">Básico</option>
        <option value="Intermedio">Intermedio</option>
        <option value="Avanzado">Avanzado</option>
    </select>

    <label for="dia">Día:</label>
    <select id="dia" name="dia" required>
        <option value="Lunes">Lunes</option>
        <option value="Martes">Martes</option>
        <option value="Miércoles">Miércoles</option>
        <option value="Jueves">Jueves</option>
        <option value="Viernes">Viernes</option>
    </select>

    <label for="hora_inicio">Hora de Inicio:</label>
    <input type="time" id="hora_inicio" name="hora_inicio" required>

    <label for="hora_fin">Hora de Fin:</label>
    <input type="time" id="hora_fin" name="hora_fin" required>

    <button type="submit">Registrar Curso</button>
</form>
</div>

</body>
</html>