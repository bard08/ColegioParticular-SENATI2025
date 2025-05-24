<!DOCTYPE html>

<html lang="es">

<head>

  <meta charset="UTF-8">

  <title>Pensión - Registro General</title>

  <link rel="stylesheet" href="../Modelo/VistaRegistroGeneral.css">

</head>

<body>



<div class="container">

  <h2>Registro General de Pagos</h2>



  <div class="search-container">

    <input type="text" id="searchInput" placeholder="Buscar por nombre o correo...">

    <button onclick="searchTable()">Buscar</button>

  </div>

  <div class="actions">

    <button onclick="location.href='VistaPension_HistorialPago.php'">Historial de pago</button>

    <button onclick="location.href='../Vista/VistaPension_Principal.php'">Volver al Menu Principal</button>

  </div>

  <table>

    <thead>

      <tr>

        <th>ID Registro</th>

        <th>ID Pago Pensión</th>

        <th>ID Validación Pago</th>

        <th>Tipo Evento</th>

        <th>Descripción</th>

        <th>Fecha Registro</th>

        <th>Usuario</th>

        <th>IP Usuario</th>

        <th>Módulo Afectado</th>

      </tr>

    </thead>

    <tbody>

      <tr>

        <td colspan="9" class="no-data">Sin datos disponibles</td>

      </tr>

    </tbody>

  </table>



  <p class="note">Esta tabla muestra los registros del sistema relacionados con pagos y validaciones del colegio.</p>

</div>

<script>

 // Función para buscar en la tabla

  function searchTable() {

    const input = document.getElementById("searchInput");

    const filter = input.value.toLowerCase();

    const table = document.getElementById("dataTable");

    const tr = table.getElementsByTagName("tr");



    for (let i = 1; i < tr.length; i++) {

      const td = tr[i].getElementsByTagName("td");

      let found = false;



      for (let j = 0; j < td.length; j++) {

         const cell = td[j];

        if (cell) {

        if (cell.textContent.toLowerCase().indexOf(filter) > -1) {

          found = true;

          }

        }

      }



        if (found) {

          tr[i].style.display = "";

        } else {

          tr[i].style.display = "none";

        }

      }

    }

  </script>

</body>

</html>
