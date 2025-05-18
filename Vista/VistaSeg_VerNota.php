<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Ver Notas por Curso</title>
  <link rel="stylesheet" href="../Vista/css/VerNota.css">  
</head>
<body>
  <h1>Ver Notas por Curso</h1>

 <aside class="menu-lateral">

      <ul>
        <li><a href="../index.php">Inicio</a></li>
        <li><a href="VistaSeg_MenuPrincipal.php">Notas</a></li>
        <li><a href="#">Registrar Nota</a></li>
        <li><a href="#">Ver Notas por Curso</a></li>
        <li><a href="#">Modificar Nota</a></li>
        <li><a href="../Vista/historial.php">Historial</a></li> <!-- Enlace actualizado -->
        <li><a href="#">Cursos</a></li>
        <li><a href="#">Profesores</a></li>
        <li><a href="#">Actividades</a></li>
        <li><a href="#">Horarios</a></li>
        <li><a href="#">Reportes</a></li>
        <li><a href="#">Configuración</a></li>
      </ul>
    </aside>

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