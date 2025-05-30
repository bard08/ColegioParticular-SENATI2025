<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Vista/css/Seguimiento_Actividad_ListadoAct.css">
    <title>Document</title>
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
<!--CONTENIDO PRINCIPAL-------------------------------------------------------------------------------------->
<div class="container mt-4">
    <h2 class="mb-3">Listado de Actividades Académicas</h2>

    <a href="VistaSeguimiento_RegistrarActividad.php" class="btn btn-primary mb-3">Registrar Nueva Actividad</a>

    <table class="table table-hover table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Curso</th>
                <th>Profesor</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <!-- Aquí irán las actividades desde la base de datos -->
            <tr>
                <td>1</td>
                <td>Actividad Diagnóstica</td>
                <td>Matemáticas</td>
                <td>Juan Pérez</td>
                <td>2025-05-20</td>
                <td>
                    <a href="#" class="btn btn-warning btn-sm">Editar</a>
                    <a href="#" class="btn btn-danger btn-sm">Eliminar</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>