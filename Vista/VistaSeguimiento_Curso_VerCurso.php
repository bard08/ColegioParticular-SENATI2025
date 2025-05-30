<?php
// Datos simulados (array de cursos como si vinieran de la BD)
$cursos = [
    [
        'ID_curso' => 1,
        'nombre_curso' => 'Matemáticas Avanzadas',
        'descripcion' => 'Curso de álgebra, geometría y cálculo.',
        'estado_curso' => 'Activo',
        'nivel_curso' => 'Avanzado',
        'dia' => 'Lunes',
        'hora_inicio' => '08:00',
        'hora_fin' => '10:00'
    ],
    [
        'ID_curso' => 2,
        'nombre_curso' => 'Física Básica',
        'descripcion' => 'Conceptos fundamentales de la física clásica.',
        'estado_curso' => 'Inactivo',
        'nivel_curso' => 'Básico',
        'dia' => 'Martes',
        'hora_inicio' => '10:00',
        'hora_fin' => '12:00'
    ],
    [
        'ID_curso' => 3,
        'nombre_curso' => 'Lengua Española',
        'descripcion' => 'Gramática y ortografía del español.',
        'estado_curso' => 'Activo',
        'nivel_curso' => 'Intermedio',
        'dia' => 'Miércoles', 
        'hora_inicio' => '09:00',
        'hora_fin' => '11:00'
    ], 
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Cursos</title>
    <link rel="stylesheet" href="../Vista/css/Seguimiento_Curso_VerCurso.css">
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
<!--Tabla del Listado-------------------------------------------------------------------------->
    <h2 style="text-align: center;">Listado de Cursos (Ejemplo)</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre del Curso</th>
                <th>Descripción</th>
                <th>Estado</th>
                <th>Nivel</th>
                <th>Día</th>
                <th>Hora</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cursos as $curso): ?>
                <tr>
                    <td><?= $curso['ID_curso'] ?></td>
                    <td><?= $curso['nombre_curso'] ?></td>
                    <td><?= $curso['descripcion'] ?></td>
                    <td><?= $curso['estado_curso'] ?></td>
                    <td><?= $curso['nivel_curso'] ?></td>
                    <td><?= $curso['dia'] ?></td>
                    <td><?= $curso['hora_inicio'] . ' - ' . $curso['hora_fin'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<!------------------------------------------------------------------------------------------------>
</body>
</html>