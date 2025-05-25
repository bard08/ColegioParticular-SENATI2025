<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Ver Notas por Curso</title>
  <link rel="stylesheet" href="../Vista/css/Seguimiento_Profesor_VerProfesor.css">   
</head>
<body>
<!--MENU HORIZONTAL------------------------------------------------------------------------------------------->
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
<!------------------------------------------------------------------------------------------------------------->
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Listado de Profesores</title>
  <link rel="stylesheet" href="../css/listado_profesores.css">
</head>
<body>

  <h2>Listado de Profesores</h2>

  <div class="listado-profesores">
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Especialidad</th>
          <th>Correo</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Juan Pérez</td>
          <td>Matemática</td>
          <td>juan.perez@colegio.edu</td>
          <td>
            <button>Ver</button>
            <button>Editar</button>
            <button>Eliminar</button>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Lucía Torres</td>
          <td>Lenguaje</td>
          <td>lucia.torres@colegio.edu</td>
          <td>
            <button>Ver</button>
            <button>Editar</button>
            <button>Eliminar</button>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Carlos Rojas</td>
          <td>Ciencias Naturales</td>
          <td>carlos.rojas@colegio.edu</td>
          <td>
            <button>Ver</button>
            <button>Editar</button>
            <button>Eliminar</button>
          </td>
        </tr>
        <!-- Puedes agregar más filas aquí -->
      </tbody>
    </table>
  </div>

</body>
</html>
</body>

</html>