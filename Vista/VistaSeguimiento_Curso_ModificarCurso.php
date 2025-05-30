<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar Curso</title>
    <link rel="stylesheet" href="../Vista/css/Seguimiento_Curso_ModificarCurso.css">
</head>
<body>
<!-- Menú lateral -------------------------------------------------------------------------------------------->
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
    </li>>
    <li><a href="#">Actividades</a>
      <ul class="submenu">
        <li><a href="../Vista/VistaSeguimiento_Actividad_ListadoAct.php">Listado de Actividades</a></li> 
        <li><a href="../Vista/Seguimiento_Actividad_RegistroAct.php">Registro de Actividades Academicas</a></li>
      </ul>
    </li>
    <li><a href="#">Horarios</a>
      <ul class="submenu">
        <li><a href="../Vista/VistaSeguimiento_Horario_ListadoHor.php">Listado de Horarios</a></li>
        <li><a href="../Vista/VistaSeguimiento_Horario_RegistroHor.php">Registro de Horarios</a></li>
        <li><a href="../Vista/VistaSeguimiento_Horario_HorarioProf.php">Horarios de Profesores</a></li>
        <li><a href="../Vista//VistaSeguimiento_Horario_HorarioCur.php">Horarios de Cursos</a></li>
      </ul>
    </li>
    <li><a href="#">Reportes</a>
      <ul class="submenu">
        <li><a href="../Vista/VistaSeguimiento_Reporte_ListadoRep.php">Generar Reportes Academicos</a></li>
      </ul>
    </li>
    <li><a href="#">Contacto</a></li>
  </ul>
</nav>
<!------------------------------------------------------------------------------------------------------------------------------->

    <div class="contenedor-formulario">
        <form class="formulario-curso" action="ControladorModificarCurso.php" method="POST">
            <h2>Modificar Curso</h2>
            
            <label for="nombre">Nombre del Curso:</label>
            <input type="text" id="nombre" name="nombre" value="Curso de Ejemplo">

            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" rows="3">Descripción actual del curso...</textarea>

            <label for="estado">Estado:</label>
            <select id="estado" name="estado">
                <option value="activo">Activo</option>
                <option value="inactivo">Inactivo</option>
            </select>

            <label for="nivel">Nivel:</label>
            <select id="nivel" name="nivel">
                <option value="basico">Básico</option>
                <option value="intermedio">Intermedio</option>
                <option value="avanzado">Avanzado</option>
            </select>

            <label for="dia">Día:</label>
            <select id="dia" name="dia">
                <option value="lunes">Lunes</option>
                <option value="martes">Martes</option>
                <option value="miercoles">Miércoles</option>
                <option value="jueves">Jueves</option>
                <option value="viernes">Viernes</option>
            </select>

            <label for="hora_inicio">Hora de Inicio:</label>
            <input type="time" id="hora_inicio" name="hora_inicio" value="08:00">

            <label for="hora_fin">Hora de Fin:</label>
            <input type="time" id="hora_fin" name="hora_fin" value="10:00">

            <input type="hidden" name="id_curso" value="123"> <!-- ID del curso a modificar -->

            <button type="submit">Guardar Cambios</button>
        </form>
    </div>
</body>
</html>