<!DOCTYPE html>

<html lang="es">

<head>

 <meta charset="UTF-8">

 <title>Validación de Pagos</title>

 <link rel="stylesheet" href="../Vista/css/Dis.css">

</head>

<body>


 <h1>Validación de Pagos</h1>

<a href="../Vista/VistaPension_Principal.php">
        <button class="volver-btn">Volver al Menú Principal</button>
</a>

 <form method="post">

  <input type="number" placeholder="ID" name="id" required>

  <select name="estado" required>

   <option value="">Selecciona estado</option>

   <option value="Activo">Activo</option>

   <option value="Inactivo">Inactivo</option>

  </select>

  <input type="date" name="fecha" required>

  <input type="number" placeholder="Monto" name="monto" required>

  <input type="datetime-local" name="fechaHoraOperacion" required>

  <input type="number" placeholder="Número Operación" name="numeroOperacion" required>

  <input type="text" placeholder="Cuenta Destino" name="cuentaDestino" required>

  <button type="submit">Agregar</button>

 </form>



 <table>

  <thead>

   <tr>

    <th>ID</th>

    <th>Estado</th>

    <th>Fecha</th>

    <th>Monto</th>

    <th>Fecha/Hora Operación</th>

    <th>Número Operación</th>

    <th>Cuenta Destino</th>

   </tr>

  </thead>

  </tbody>

 </table>

 

</body>

</html>
