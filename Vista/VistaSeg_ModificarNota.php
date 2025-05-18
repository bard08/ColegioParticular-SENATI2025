<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar Nota</title>
    <link rel="stylesheet" href="../Vista/css/modificarnota.css">
</head>
<?php $mensaje = "----Notas----"; ?>

<body>
    <div class="contenedor">
        <h2>Modificar Nota</h2>

        <form method="post">
            <label for="id">ID de Nota:</label>
            <input type="number" name="id" required>
            <button type="submit" name="buscar">Buscar Nota</button>
        </form>

        <?php if (isset($nota)): ?>
            <form method="post">
                <input type="hidden" name="id" value="<?= $nota['id'] ?>">
                <label for="nueva_nota">Nueva Nota:</label>
                <input type="number" step="0.01" name="nueva_nota" value="<?= $nota['nota'] ?>" required>
                <button type="submit" name="modificar">Guardar Cambios</button>
            </form>
        <?php endif; ?>

        <?php if ($mensaje): ?>
            <p class="mensaje"><?= $mensaje ?></p>
        <?php endif; ?> 
        
    </div> 
    <div class="tabla-notas">
    <h3>Historial de Notas</h3>
    <table>
    </table>
</div>
 
    <table>

    <thead>

     <tr>
      <th>ID</th>

      <th>Alumno</th>

      <th>Curso</th>

      <th>Actividad</th>

      <th>Nota</th>

      <th>Fecha</th>

     </tr>

    </thead>

    <tbody>

     <tr>
        <th>1</th>

      <td>Juan Pérez</td>

      <td>Matemáticas</td>

      <td>Parcial 1</td>

      <td>18</td>

      <td>2025-04-10</td>

     </tr>

     <tr>
        <th>2</th>

      <td>María López</td>

      <td>Lenguaje</td>

      <td>Tarea 2</td>

      <td>15</td>

      <td>2025-04-12</td>

     </tr>

     <!-- Puedes agregar más filas dinámicamente desde la base de datos -->

    </tbody>

   </table>

</body>
</html>