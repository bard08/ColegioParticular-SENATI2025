<!DOCTYPE html>

<html lang="es">

<head>

 <meta charset="UTF-8">



 <link rel="stylesheet" href="../Vista/css/VistaPension_EstadoPago.css">

</head>

<body>


 <h1>Validación de Pagos</h1>



 <form method="post">

  <input type="number" placeholder="ID" name="id" >

  <select name="estado" >

   <option value="">Selecciona estado</option>

   <option value="Activo">Activo</option>

   <option value="Inactivo">Inactivo</option>

  </select>

  <input type="date" name="fecha" >

  <input type="number" placeholder="Monto" name="monto" >

  <input type="datetime-local" name="fechaHoraOperacion" >

  <input type="number" placeholder="Número Operación" name="numeroOperacion" >

  <input type="text" placeholder="Cuenta Destino" name="cuentaDestino" >

  <button type="submit">Agregar</button>
  <a href="../Vista/VistaPension_Principal.php">

<button class="volver-btn" type="button">Volver al Menú Principal</button> </a>

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
