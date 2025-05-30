<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registrar Profesor</title>
  <link rel="stylesheet" href="../Vista/css/Seguimiento_Profesor_ListadoProfesor.css"> 
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

  <h2>Registrar Nuevo Profesor</h2>

  <form class="formulario-profesor" action="#" method="POST">
    <label for="nombre">Nombre completo:</label>
    <input type="text" id="nombre" name="nombre" placeholder="Ej. Juan Pérez" required>

    <label for="especialidad">Especialidad:</label>
    <select id="especialidad" name="especialidad" required>
      <option value="">Seleccione una opción</option>
      <option value="Matemática">Matemática</option>
      <option value="Lenguaje">Lenguaje</option>
      <option value="Ciencias">Ciencias</option>
      <option value="Historia">Historia</option>
    </select>

    <label for="correo">Correo electrónico:</label>
    <input type="email" id="correo" name="correo" placeholder="Ej. juan.perez@colegio.edu" required>

    <label for="telefono">Teléfono:</label>
    <input type="tel" id="telefono" name="telefono" placeholder="Ej. 7788-9900" required>

    <label for="direccion">Dirección:</label>
    <textarea id="direccion" name="direccion" rows="3" placeholder="Dirección del profesor" required></textarea>

    <button type="submit">Registrar Profesor</button>
  </form>

</body>
</html>