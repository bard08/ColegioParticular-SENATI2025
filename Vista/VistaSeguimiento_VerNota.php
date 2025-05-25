<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Ver Notas por Curso</title>
  <link rel="stylesheet" href="../Vista/css/Seguimiento_VerNota.css">   
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
 <h1>Ver Notas por Curso</h1>
  <label for="curso" style="text-align: center; display:block;">Selecciona un curso:</label>
  <select id="curso">
    <option value="matematicas">Matemáticas</option>
    <option value="historia">Historia</option>
    <option value="biologia">Biología</option>
  </select>


  <table>
    <thead>
      <tr>
        <th>Estudiante</th>
        <th>Nota 1</th>
        <th>Nota 2</th>
        <th>Nota Final</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Ana López</td>
        <td>8.5</td>
        <td>9.0</td>
        <td>8.75</td>

      </tr>

      <tr>

        <td>Carlos Pérez</td>

        <td>7.0</td>

        <td>6.5</td>

        <td>6.75</td>

      </tr>

      <tr>

        <td>María Gómez</td>

        <td>9.5</td>

        <td>9.8</td>

        <td>9.65</td>

      </tr>

    </tbody>

  </table>



</body>

</html>