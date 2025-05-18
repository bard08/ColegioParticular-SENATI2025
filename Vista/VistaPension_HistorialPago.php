<!DOCTYPE html>

<html lang="es">

<head>

 <meta charset="UTF-8">

 <title>Historial de Pagos</title>

 <link rel="stylesheet" href="../Modelo/VistaHistorialPago.css">

</head>

<body>



 <header>

  <nav>

    <a href="../Vista/VistaPrincipal.php">Inicio</a>

   <a href="#servicios">Servicios</a>

   <a href="#contacto">Contacto</a>

  </nav>

 </header>



 <main>

  <section id="inicio">

   <h2>Bienvenido</h2>

  </section>



  <div class="container">

   <h2>Historial de Pagos</h2>



   <div class="filters">

    <input type="text" placeholder="ID Alumno">

    <select>

     <option value="">Tipo de acción</option>

     <option>Inserción</option>

     <option>Actualización</option>

     <option>Eliminación</option>

     <option>Consulta</option>

    </select>

    <input type="text" placeholder="ID Comprobante">

   </div>



   <div class="summary">

    <div><strong>Total de registros:</strong> 0</div>

    <div><strong>Monto total:</strong> S/0.00</div>

    <div><strong>Última acción:</strong> -</div>

   </div>



   <div class="actions">

    <button>Buscar</button>

    <button>Exportar a Exel</button>

    <button onclick="location.href='VistaPension_RegistroGeneral.php'">Ver Registro General de Pago</button>

    <button onclick="location.href='VistaPension_PagoPension.php'">Ir a Pago Pension</button>

   </div>



   <table>

    <thead>

     <tr>

      <th>Alumno</th>

      <th>ID Historial</th>

      <th>ID Pago Pensión</th>

      <th>Acción</th>

      <th>Estado Pago</th>

      <th>Monto</th>

      <th>Fecha</th>

      <th>IP Usuario</th>

     </tr>

    </thead>

    <tbody>

     <tr>

      <td colspan="8" class="no-data">Sin datos disponibles</td>

     </tr>

    </tbody>

   </table>

  </div>

 </main>

</body>

</html>

