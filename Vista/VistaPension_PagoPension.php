<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Pago</title>
<link rel="stylesheet" href="../Vista/css/VistaPension_PagoPension.css">
</head>
<body>
  <h3 style="color:white;">Pago Pensión</h3>
  <div class="container">
    <h2>Formulario</h2>

    <form id="formulario">
      <input type="text" id="alumno" placeholder="Alumno" >
      <select id="estado" >
        <option value="">Estado</option>
        <option value="Pagado">Pagado</option>
        <option value="Pendiente">Pendiente</option>
      </select>
      <input type="date" id="fecha" >

      <input type="number" id="cuota" placeholder="Cuota" >
      <select id="tipoPago" >
        <option value="">Tipo de pago</option>
        <option value="Efectivo">Efectivo</option>
        <option value="Tarjeta">Tarjeta</option>
        <option value="Transferencia">Transferencia</option>
      </select>
      <input type="email" id="correo" placeholder="Correo electrónico" >

      <button type="submit">Agregar</button>

    </form>
      <button onclick="location.href='../Vista/VistaPension_Principal.php'">Volver al menú</button>
    <table> 
      <thead>
        <tr>         
          <th>Alumno</th>
          <th>Estado</th>
          <th>Fecha</th>
          <th>Cuota</th>
          <th>Tipo de Pago</th>
          <th>Correo</th>
        </tr>
      </thead>
      <tbody id="tablaDatos">
     
      </tbody>
    </table>
  </div>

  <script src="script.js"></script>
</body>
</html>
